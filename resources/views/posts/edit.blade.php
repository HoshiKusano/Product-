<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
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
    </body>
</html>