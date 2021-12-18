<form action="{{route('iletisimVeri')}}" style="margin:40px" method="post">
    @csrf
    <input type="text" name="adSoyad" placeholder="İsim"><br>
    <input type="text" name="email" placeholder="Email"><br>
    <input type="text" name="konu" placeholder="Konu"><br>
    <textarea name="mesaj" placeholder="Mesaj"></textarea><br>
    <input type="submit" value="Gönder">
</form>