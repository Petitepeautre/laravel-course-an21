<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des articles</title>

     <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    @if (Session::get('success'))
    <div class="bg-green-100 text-green-700">
        <p>{{ Session::get('success') }}</p>
    </div>
    @endif
    <div class="py-8 px-32">
      
    <form action="{{ route('articles.create') }}" method="get">
      @csrf
    <button type="submit" class="bg-green-400 hover:bg-green-600 text-white p-2 rounded-xl">Create new</button>
    </form>
    
    @forelse ($articles as $article)
        <h2 class="mt-8 text-3xl font-bold text-blue-400 hover:text-blue-600"> <a href="{{ route('articles.show', $article->id) }}">{{ $article['title'] }}</a></h2>
        <p>{{ $article['content'] }}</p>
        <a href="{{ route('articles.edit', $article->id) }}" class="text-blue-700 text-lg">Edit</a>
        <form action="{{ route('articles.destroy', $article->id) }}" method="post">
          @method('delete')
          @csrf
          <button type="submit" class="bg-red-400 hover:bg-red-600 text-white p-2 rounded-xl">
            Delete
          </button>
        </form>
        <hr>
    @empty
        <p>No articles</p>
    @endforelse
    </div>
</body>
</html>