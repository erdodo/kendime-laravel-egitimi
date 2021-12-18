### <a href="https://github.com/erdodo/kendime-laravel-egitimi/commit/aff0ffddb5c5ccd686a2c43673414cb2deacbfd4">Kullanıcıdan mesaj alma</a>

- Model, controller, migrations, routes ve view kullanarak bir örnek program yapalım.


##### Migration veritabanımızdaki tabloya ve kolonlara denk geliyordu öncelikle onunla başlayalım.
```shell
php artisan make:migration iletisim --create=iletisim
```
- Migration dosyamızı oluşturduğumuza göre kolonlarımızı belirleyelim.
```php
$table->id();
$table->string('adSoyad')->nullable();
$table->string('email')->nullable();
$table->string('konu')->nullable();
$table->string('mesaj')->nullable();
$table->timestamps();
```
- Kolonlarımız bunlar olsun artık veritabanına gönderebiliriz.
```shell
php artisan migrate
```
- Veritabanında tablomuz oluştu.

##### Veritabanıyla bağlantı kurmak için model yapımızı kuralım.
- Dosyayı oluşturarak başlıyorum
```shell
php artisan make:model IletisimModel
```
- Model dosyamızın ihtiyacı olan tablo ismi gibi verileri tanımlayalım.
```php
protected $table = 'iletisim';
protected $fillable = ['adSoyad', 'email', 'konu', 'mesaj'];
```
- Artık model dosyamız hazır veritabanıyla ilgili tüm tanımlamaları yaptık.
##### Views yapılarıyla devam edelim
- İki adet view dosyası oluşturalım birisi kullanıcı paneli diğerini de admin paneli olarak düşünebiliriz.
- Kullanıcı panelinde gerekli verileri alacağımız için ona uygun bir yapı inşa edelim.
```html
<form action="{{route('iletisimVeri')}}" style="margin:40px" method="post">
   		@csrf
   		<input type="text" name="adSoyad" placeholder="İsim"><br>
   		<input type="text" name="email" placeholder="Email"><br>
  	 	<input type="text" name="konu" placeholder="Konu"><br>
   		<textarea name="mesaj" placeholder="Mesaj"></textarea><br>
  		<input type="submit" value="Gönder">
	</form>
```
- Kullanıcıdan verilerimizi bu sayede alabiliriz.
- Şimdi bu veriler nerden gelip nereye gidecek, hangi view dosyası ne zaman açılacak bunları kontrol etmek için yeni bir controller dosyası oluşturalım.
```shell
php artisan make:controller Iletisim
```
- Dosyamız oluştu ilk olarak model yapımızı tanımlayalım.
```php
use App\Models\Iletisim_Model;
```
- Artık veritabanına erişimimiz var. Şimdi de oluşturduğumuz view dosyasını ekrana basalım.
```php
public function gorunum()
{
	return view('iletisim');
}
```
- Bu fonksiyona ulaşabilmek için route yapımızı kuralım
- Controller sınıfımızı tanımlıyoruz.
```php
use App\Http\Controllers\Iletisim;
```
- Artık sınıfa erişimimiz var. 'gorunum' fonksiyonunu çalıştıracak bir url belirleyelim
```php
Route::get('/iletisim', [Iletisim::class, 'gorunum']);
```
- '/iletisim' urline girdiğimizde form bizi karşılacak. peki bu form işlemi tamalandığında veriler nereye gidecek.İsmi iletişim veri olan bir post route tanımlaması yapalım.
```php
Route::post('/iletisimVeri', [Iletisim::class, 'veri'])->name('iletisimVeri');
```
- Verileri post ile alıp veri isimli fonksiyona gitmesini söyledik. O zaman 'veri' isimli fonksiyonumuzu tanımlayalım. Controllera geri döndük.
```php
public function veri(Request $request)
    {
        Iletisim_Model::create($request->all());
        return 'Veri eklendi';
    }
```
- Request sınıfından bir değişken tanımladık tüm veriler obje haline gelip buraya aktarılacak. Yani $request içinde kullanıcıdan gelen tüm bilgiler var veritabanını da birebir karşıladığına göre tamamını gönderebiliriz.
- Veritabanımıza bilgileri de eklediğimize göre bu mesajları liste halinde görüntülemek için bir yonetici paneli yapabiliriz.
- Öyle bir fonksiyon yazalım ki veritabanından bilgileri alıp view dosyasına göndersin ve ekrana bassın.
```php
public function mesajlar()
    {
        $mesajlar = Iletisim_Model::all();
        return view('mesajlar', compact('mesajlar'));
    }
```
- Iletisim modelden tüm verileri istediğimizi söyledik ve bunları view dosyasına gönderdik
- View dosyamızda bu gelen verileri yakalayalım
```php
@foreach($mesajlar as $mesaj)
    <div style="background-color:rgb(150,150,160); padding:20px; border:2px solid green;">
        <p>{{$mesaj->adSoyad}}</p>
        <p>{{$mesaj->email}}</p>
        <p>{{$mesaj->konu}}</p>
        <p>{{$mesaj->mesaj}}</p>
        <p>{{$mesaj->created_at}}</p>
    </div>
@endforeach
```
- Controllerdan gelen mesajları yakaladık ve bir döngüye sokarak ekrana bastık.
- Şimdi de bu sayfaya ulaşmmak için Route yapımızı kuralım
```php
Route::get('/mesajlar', [Iletisim::class, 'mesajlar']);
```
- Artık '/iletisim' sayfasından eklediğimiz verileri '/mesajlar' sayfasında listeleniyor













.
