@foreach($mesajlar as $mesaj)
    <div style="background-color:rgb(150,150,160); padding:20px; border:2px solid green;">
        <p>{{$mesaj->adSoyad}}</p>
        <p>{{$mesaj->email}}</p>
        <p>{{$mesaj->konu}}</p>
        <p>{{$mesaj->mesaj}}</p>
        <p>{{$mesaj->created_at}}</p>
    </div>
@endforeach