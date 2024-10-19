<x-app-layout>
     <x-slot name="header">
        {{ Auth::user()->name }}　ブログ一覧
    </x-slot>
        <a href='/posts/create'>create</a>
        <h1>Proactの軌跡</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='text-blue-500'><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
                    <a class='text-blue-500' href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                    <p class='body'>{{ $post->body }}</p>
                    <form action="/posts/{{ $post->id }}" id="form_{{$post->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">delete</button>
                    </form>
                </div>
                
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <script>
            function deletePost(id){
                if(confirm('削除すると復元できません。\n本当に削除しますか？')){
                    document.getElementById(`form_${id}`).submit();
                    
                }
            }
        </script>
</x-app-layout>