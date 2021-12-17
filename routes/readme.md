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
<code style="background-color:rgb(50,50,50);">

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
<code>
  Öncelikle sayfamızın yukarısına gelerek controller tanımlaması yapıyoruz:
<code>
        use App\Http\Controllers\Ornek;
    </code><br>
    daha sonra<br>
    <code>
        Route::get('/ornek', [Ornek::class,test]);
    </code><br>
    '/ornek' sayfasına gidildiğinde 'Ornek' class'ı içinden 'test' isimli fonksiyonu çalıştır.
</p>
