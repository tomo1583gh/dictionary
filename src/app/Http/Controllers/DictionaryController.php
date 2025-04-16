<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PSpell\Dictionary as PSpellDictionary;
use App\Models\Dictionary;
use Illuminate\Support\Facades\Auth;

class DictionaryController extends Controller
{
    public function index(Request $request)
    {
        $query = Dictionary::query();

        //検索キーワードがあれば絞り込み
        if ($request->filled('keyword')) {
            //空白（全角・半角）で分割
            $keyword = preg_split('/[\s　]+/', $request->keyword, -1, PREG_SPLIT_NO_EMPTY);

            //OR検索：全てのキーワードを含むデータだけに絞る
            foreach ($keyword as $word) {
                $query->orWhere(function ($q) use ($word) {
                    $q->where('keyword', 'like', '%' . $word . '%')
                        ->orWhere('description', 'like', '%' . $word . '%');
                });
            }
        }

        $items = $query->orderBy('created_at', 'desc')->get();

            return view('index', compact('items'));
    }
        public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'keyword' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Dictionary::create([
            'keyword' => $request->keyword,
            'description' => $request->description,
            'user_id' => Auth::id(), //ここでログインユーザーを紐付け
        ]);

        return redirect()->route('dictionary.index')->with('message', '登録が完了しました');
    }

    public function edit($id)
    {
        $dictionary = Dictionary::findOrFail($id);

        //認可チェック（ログインユーザーの所有データのみ編集可能）
        if ($dictionary->user_id !==Auth::id()) {
            abort(403, 'Unauthorized');
        }

        return view('edit', compact('dictionary'));
    }

    public function update(Request $request, $id)
    {
        $dictionary = Dictionary::findOrFail($id);

        if ($dictionary->user_id !==Auth::id()) {
            abort(403, 'Unauthorized');
        }

        $dictionary->update($request->only(['keyword', 'description']));

        return redirect()->route('dictionary.index')->with('message', '更新が完了しました');
    }

    public function destroy($id)
    {
        $dictionary = Dictionary::findOrFail($id);

        if ($dictionary->user_id !==Auth::id()) {
            abort(403, 'UNauthorized');
        }

        $dictionary->delete();

        return redirect()->route('dictionary.index')->with('message', '削除しました');
    }
}
