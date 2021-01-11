<title>SUZUKI</title>
<body style="">

<div style="background-color:#0053a5;color:white;">
<hr />

@foreach($posts as $post)

    {{ $post->content }}

    <hr />

@endforeach
</div>
</body>
<br>
<input style="background-color:white;color:black;" type ="button" onclick="javascript:location.href='http://localhost:888/LaravelDemo-master(f)/public/'" value="回到首頁"></input>