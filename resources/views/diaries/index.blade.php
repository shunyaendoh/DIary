<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>一覧表示画面</title>
</head>
<body>
    <a href="{{ route('diary.create') }}" class="btn btn-primary btn-block">新規投稿へ</a>
    <h1 class="m-3 p-3">一覧画面</h1>
    <hr>
    @foreach($diaries as $diary)
        <div class="m-4 p-4 border border-primary">
            <p>{{$diary->title}}</p>
            <p>{{$diary->body}}</p>
            <p>{{$diary->created_at}}</p>
            <a href=" {{ route('diary.destroy', [ 'id' => $diary->id ]) }} " class="btn btn-danger">削除</a>
        </div><hr>
    @endforeach
</body>
</html>