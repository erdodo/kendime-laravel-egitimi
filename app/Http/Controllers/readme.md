<p>
  Burada kendi kontrollerimizi yazıyoruz.
  View ile model arasındaki iletişim.
</p>
<p>
    Console 'dan controller oluşturmak tavsiye edilir. 
    Console'dan oluşturduğumuzda controller içinde bazı default tanımlamaları ile gelir. 
    Console komutları: <br>
    <code>
        php artisan make:controller Ornek
    </code><br>
    Bu sayede otomatik olarak dosyamız oluşmuş oldu. "Komutu base klasörde çalıştırın."
</p>
<br>
<h4>Routerda Controller Kullanımı<h4>
    <p>
        Ornek.php controllerimizi oluşturduk. İçine test isminde bir fonksiyon tanımladık ve return olarak 'Erdoğan Yeşil' değerini dönmesini istedik.<br>
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
