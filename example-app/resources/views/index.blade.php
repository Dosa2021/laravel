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
      <li>{{ $posts[0] }}</li>
      <li>post</li>
      <li>post</li>
    </ul>
  </div>
</body>
</html>