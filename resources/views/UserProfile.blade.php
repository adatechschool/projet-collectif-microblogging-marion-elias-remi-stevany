<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>


<body>
<div class="bg-gray 900">
    <section>
        <h1 >Hello UserProfile</h1>
            <ul>
                @foreach ($UserInfo as $info)
                <li>
                    <a href="{{ route('user.profile', ['id' => $info->id]) }}">{{ $info->name }}</a>
                </li>
                <li>Email: {{ $info->email }}</li>
                <li>Bio: {{ $info->bio }}</li>
                @endforeach
            </ul>
    </section>
</div>
</body>
</html>