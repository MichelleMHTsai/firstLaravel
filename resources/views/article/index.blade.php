<!doctype html>
<html>
  <head>
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
<ul class="nav nav-tabs justify-content-end">
  <li class="nav-item">
    <a class="nav-link" href="/">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/articles">Articles</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="https://github.com/MichelleMHTsai">GitHub</a>
  </li>
</ul>
@foreach($articles as $article)
<a href="/article/{{$article->id}}">
    <img src="{{$article->image}}" alt="" style="..."/>
</a>

<br>
Title:{{$article->title}}<br>
Content:{{$article->content}}<br>
<br><br>
@endforeach
</body>
</html>