<p>
  Yönlendirmelerimizi yaptığımız dosyaların bulunduğu konum. Genel olarak web.php içinde yönlendirmelerimizi
  yapıyoruz.
</p>
<hr>
<h3 style="color:blue">Routerda Controller Kullanımı:<h3>
<p>
   /app/Http/Controllers/Ornek.php dosyasını açıyoruz.
</p>
<p>
   İçine test isminde bir fonksiyon tanımladık ve return olarak 'Erdoğan Yeşil' değerini dönmesini istedik.<br>
</p>
<code >

  public function test()
  {
      return 'Erdoğan Yeşil';
  }

</code>
<p style="color:rgb(200,100,100)">
  Şimdi route dosyamıza gidip tanımlamalar yapacağız.
</p>
<p>
    /routes/web.php dosyasını açıyoruz
</p>
<p>
  Öncelikle sayfamızın yukarısına gelerek controller tanımlaması yapıyoruz:
</p>
<code>
        use App\Http\Controllers\Ornek;
</code>
<p>
  daha sonra route tanımlaması yapıyoruz:
</p>

<code>
  Route::get('/ornek', [Ornek::class,test]);
</code>
<p>
  '/ornek' sayfasına gidildiğinde 'Ornek' class'ı içinden 'test' isimli fonksiyonu çalıştır.
</p>
<p>
  artık /ornek sayfasına gidildiğinde 'Erdoğan Yeşil' değeri dönecek.
</p>
<h4 style="color:rgb(200,100,100)">
  Ekranda view göstermek istersek:
</h4>
<p>
  /app/Http/Controllers/Ornek.php dosyasını içinde.
</p>
<code>
  public function test()
  {
      return view('ornek');
  }
</code>
<p>
  artık /ornek sayfasına gidildiğinde /resources/views/ornek.blade.php dosyasının içindeki 'Erdoğan Yeşil' değeri dönecek.
</p>

