<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liste des articles</title>
</head>
<body>
   @forelse($articles as $article)
      <h2>{{ $article['title'] }}</h2>
      <p>{{ $article['content'] }}</p>
      <hr>
    @empty
      <p>No articles</p>
    @endforelse 

</body>
</html>