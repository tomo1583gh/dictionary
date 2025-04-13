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
            $query->where('keyword', 'like', '%' . $request->keyword . '%');
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
}
