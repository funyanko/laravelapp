<html>
<head>
    <title>Hello/Index</title>
    <style>
        body {font-size:16pt; color:#999;}
        h1 {font-size:50pt; text-align:right; color:#f6f6f6;
        margin:-20px 0px -30px 0px; letter-spacing:-4pt;}
    </style>
</head>
<body>
    <h1>Blade/Index</h1>
    @if ($msg == 'お名前を入力してください。')
    <form method="POST" action="/hello">
        @csrf
        <p>{{$msg}}</p>
        <input type="text" name="msg"><br>
        <p>{{$pass}}</p>
        <input type="text" name="pas"><br>
        <input type="submit">
    </form>

    @else
    <p>{{$msg}}</p>
    <p>{{$pass}}</p>
  
    @endif
    <ol>
        @foreach($number as $num)
        <li>{{$num}}</li>
        @endforeach
    </ol>

</body>
</html>