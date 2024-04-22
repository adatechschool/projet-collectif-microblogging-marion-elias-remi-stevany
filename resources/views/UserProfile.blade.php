<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Hello UserProfile</h1>
    <ul>
        @foreach ($UserInfo as $info)
        <li>
            <a href="{{ route('user.profile', ['id' => $info->id]) }}">{{ $info->name }}</a>
        </li>
        <li>Email: {{ $info->email }}</li>
        <li>Bio: {{ $info->bio }}</li>
        @endforeach
    </ul>
</body>
</html>