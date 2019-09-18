<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diary;

class DiaryController extends Controller
{
    public function index() 
    {
        // diariesテーブルの全データを取得
        $diaries = Diary::all();
        // dump + die = dd (下の処理をしないで表示)
        // dd($diaries);
        return view('diaries.index', [
            'diaries' => $diaries
        ]);
    }
    public function create()
    {
        return view('diaries.create');
    }
    public function store(Request $request)
    {
        dd($request->title);
    }
}
