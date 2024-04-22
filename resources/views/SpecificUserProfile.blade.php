<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Hello {{$UserInfo->name}} !</h1>

    <h2>Infos :</h2>
    <ul>
        <li>Name: {{ $UserInfo->name }}</li>
        <li>Email: {{ $UserInfo->email }}</li>
        <li>Bio: {{ $UserInfo->bio }}</li>
    </ul>
        <br>
     @if ($UserPosts->count() > 0)
    <h2>Posts :</h2>
    <ul>
        @foreach ($UserPosts as $post)
            <li>{{$post->title}}</li>
            <li>{{$post->content}}</li>
        @endforeach
    </ul>
    @endif

</body>
</html>