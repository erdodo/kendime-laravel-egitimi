<p>
  Yönlendirmelerimizi yaptığımız dosyaların bulunduğu konum. Genel olarak web.php içinde yönlendirmelerimizi
  yapıyoruz.
</p>
<h3 style="color:blue">Routerda Controller Kullanımı:<h3>
<p>
  # Öncelikle /app/Http/Controllers/Ornek.php dosyasını açıyoruz.
</p>
<p>
  # İçine test isminde bir fonksiyon tanımladık ve return olarak 'Erdoğan Yeşil' değerini dönmesini istedik.<br>
</p>
<code>
  public function test()
  {
      return 'Erdoğan Yeşil';
  }
</code>
<p>
    Ornek.php controllerimizi oluşturduk.
    Şimdi route dosyamıza gidip tanımlamalar yapacağız.<br>
    /routes/web.php -> <br>
    Öncelikle sayfamızın yukarısına gelerek controller tanımlaması yapıyoruz:<br>
    <code>
        use App\Http\Controllers\Ornek;
    </code><br>
    daha sonra<br>
    <code>
        Route::get('/ornek', [Ornek::class,test]);
    </code><br>
    '/ornek' sayfasına gidildiğinde 'Ornek' class'ı içinden 'test' isimli fonksiyonu çalıştır.
</p>
