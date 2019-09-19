<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diary;
use App\Http\Requests\CreateDiary;

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
    public function store(CreateDiary $request)
    {
        $diary = new Diary();

        $diary->title = $request->title;
        $diary->body = $request->body;
        $diary->save();
        return redirect()->route('diary.index');
    }
    public function destroy($id)
    {   
        $diary = new Diary();
        $diary->destroy($id);
        return redirect()->route('diary.index');
    }
}
