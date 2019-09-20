<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diary;
use App\Http\Requests\CreateDiary;
use App\Http\Requests\UpdateDiary;
use Carbon\Carbon;

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
    // getバージョン
    // public function destroy(int $id)
    // {   
    //     $diary = new Diary();
    //     $diary->destroy($id);
    //     return redirect()->route('diary.index');
    // }

    // deleteバージョン
    public function destroy(int $id)
    {   
        $diary = new Diary();
        $diary->destroy($id);
        return redirect()->route('diary.index');
    }
    public function edit(int $id)
    {
        $diary = Diary::find($id);
        return view('diaries.edit', ['diary' => $diary]);
    }
    public function update(UpdateDiary $request, int $id)
    {
        $diary = new Diary();
        $diary = Diary::find($id);
        $diary->title = $request->title;
        $diary->body = $request->body;
        $diary->created_at = Carbon::now();
        $diary->save();
        return redirect()->route('diary.index');

    }
}
