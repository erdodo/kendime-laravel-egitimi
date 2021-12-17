<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ornek form sayfası</title>
</head>
<body>
    <form action="{{route('formVeri')}}" method="post">
        @csrf
        <input type="text" name="isim" placeholder="İsim">
        <input type="text" name="soyisim" placeholder="Soyisim">
        <input type="submit" value="Gönder">
    </form>
</body>
</html>