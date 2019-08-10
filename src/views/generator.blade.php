<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hello we are start</h1>
    <form action="{{route('generator')}}" method="post">
       @csrf
        <input type="text" name="name" placeholder="Your name please">
        <input type="email" name="email" placeholder="Your email">
        <textarea name="message" cols="30" rows="10">

        </textarea>
        <input type="submit" value="submit">

    </form>
</body>
</html>