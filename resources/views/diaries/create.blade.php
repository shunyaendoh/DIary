@extends('layout')
@section('title','新規登録')
@section('content')
<a href="{{ route('diary.index') }}" class="btn btn-primary btn-block">一覧へ戻る</a>
<h1 class="m-3 p-3">新規登録</h1><hr>
<section class="container m-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{ route('diary.create') }}" method="POST">
                @csrf
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
