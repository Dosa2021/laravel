<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>サンプルHTMLページ</title>
  <link rel="stylesheet" href="{{ url('style.css') }}">
</head>
<body>
  <div class='container'>
  <h1>Posts</h1>
    <ul>
      @forelse($posts as $index => $post)
        <li>
          <a href="/posts/{{ $index }}">{{ $post }}</a>
        </li>
      @empty
        <li>No post</li>
      @endforelse
    </ul>
  </div>
</body>
</html>