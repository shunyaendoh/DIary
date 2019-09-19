@extends('layout')
@section('title','一覧表示画面')
@section('content')
    <a href="{{ route('diary.create') }}" class="btn btn-primary btn-block">新規投稿へ</a>
    <h1 class="m-3 p-3">一覧画面</h1>
    <hr>
    @foreach($diaries as $diary)
        <div class="m-4 p-4 border border-primary">
            <p>{{$diary->title}}</p>
            <p>{{$diary->body}}</p>
            <p>{{$diary->created_at}}</p>
            <!-- <a href="{{ route('diary.destroy', [ 'id' => $diary->id ]) }}" class="btn btn-danger">削除</a> -->
            <form action="{{ route('diary.destroy', ['id' => $diary->id]) }}" method="post" class="d-inline">
            <!-- { method_field('delete') }
            { csrf_field() } -->
                @csrf
                @method("delete")
                <button class="btn btn-danger">削除</button>
            </form>
            <form action="{{ route('diary.edit', ['id' => $diary->id]) }}" method="get" class="d-inline">
                @csrf
                <button class="btn btn-success">編集</button>
            </form>
        </div><hr>
    @endforeach
@endsection