@extends('layout')
@section('title','編集画面')
@section('content')
<a href="{{ route('diary.index') }}" class="btn btn-primary btn-block">キャンセル</a>
<h1 class="m-3 p-3">編集画面</h1>
<hr>
<div class="m-4 p-4 border border-primary">
    <p>{{$diary->title}}</p>
    <p>{{$diary->body}}</p>
    <p>{{$diary->created_at}}</p>
</div>
<section class="container m-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{ route('diary.update', ['id' => $diary->id]) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    @if($errors->any())
                        <ul style="list-style:none">
                            @foreach($errors->all() as $message)
                                <li class="alert alert-danger">
                                    {{ $message }}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                    <label for="title">タイトル</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}"/>
                 </div>
                <div class="form-group">
                    <label for="body">本文</label>
                    <textarea class="form-control" name="body" id="body" rows="20">{{ old('body') }}</textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">投稿</button>
                </div>
            </form>

        </div>
    </div>
</section>

@endsection