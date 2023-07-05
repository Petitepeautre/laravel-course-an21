<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Editer un article</title>

  <!-- Styles -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <form action="{{ route('articles.update', $article->id) }}" method="post" class="flex flex-col gap-4 px-32 py-8">
    @method("put")
    @csrf
    <div>
        <input class="w-96 border-2 border-black p-2" type="text" name="title" placeholder="Entrer un titre..." value="{{ $article->title }}">
    </div>
    <div class="w-full">
        <textarea class="w-96 border-2 border-black p-2" name="content" placeholder="Contenu de l'article...">{{ $article->content }}</textarea>
    </div>
    <button type="submit" class="p-4 w-64 bg-blue-800 text-white">Editer l'article</button>
  </form>
  
</body>
</html>