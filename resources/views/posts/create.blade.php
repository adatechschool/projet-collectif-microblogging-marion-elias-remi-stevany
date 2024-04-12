<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" required>
        @error('title')
            <span>{{ $message }}</span>
        @enderror
    </div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <div>
        <label for="content">Content</label>
        <textarea id="content" name="content" required>{{ old('content') }}</textarea>
        @error('content')
            <span>{{ $message }}</span>
        @enderror
    </div>
    <button type="submit">Submit</button>
</form>