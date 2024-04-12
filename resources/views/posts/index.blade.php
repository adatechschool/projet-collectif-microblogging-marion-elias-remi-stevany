<!DOCTYPE html>
<html>
<head>
    <title>All Posts</title>
</head>
<body>
    <h1>All Posts</h1>
    <ul>
        @foreach ($posts as $post)
            
            <li>{{ $post->title }}</li>
            <p>{{ $post->content }}</p>
            <p>{{ $post->user_id }}</p>
            
        @endforeach
    </ul>
</body>
</html>
