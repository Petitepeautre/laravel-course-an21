<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Article</title>
  
     <!-- Styles -->
     <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="py-8 px-32">
  <a href="{{ route('articles.index') }}" class="text-blue-400 hover:text-blue-700 text-lg">Home</a>
  <h2 class="mt-4 text-3xl font-bold">{{ $article['title'] }}</h2>
  <p>{{ $article['content'] }}</p>

  <h2>Ajouter un commentaire</2>
      
  <form action="{{ route('comments.store', $article->id) }}" method="post" class="flex flex-col gap-4 px-32 py-8">
    @csrf
    <div class="w-full">
        <textarea class="w-96 border-2 border-black p-2" name="content" placeholder="Contenu du commentaire"></textarea>
    </div>
    <button type="submit" class="bg-green-400 hover:bg-green-600 text-white p-2 rounded-xl">Create new comment</button>
  </form>
  </div>
  <div class="px-32 py-8">
    <h2> Les Commentaires</h2>
    @forelse ($article->comments() as $comment)
      <div>


</body>
</html>