<!DOCTYPE HTML>
<x-app-layout>
    <x-slot name='header'>
        Blog Name
    </x-slot>
        <h1>Blog Name</h1>
        <form action="/posts/{{ $post->id }}" method="post">
           @csrf
           @method('PUT')
           <div class="title">
               <h2>Tilte</h2>
               <input type="text" name="post[title]" placeholder="タイトル" value={{ $post->title }}/>
               <p class="title_error" style="color:red">{{ $errors->first('post.title') }}</p>
           </div>
           <div class="body">
               <h2>Body</h2>
               <textarea name="post[body]" placeholder="本文を書く場所です。" >{{ $post->body }}</textarea>
               <p class="body_error" style="color:red">{{ $errors->first('post.body') }}</p>
           </div>
           <input type="submit" value="update"/>
        </form>
        <div class="footer">
            <a href="/posts/{{ $post->id }}">戻る</a>
        </div>
</x-app-layout>   