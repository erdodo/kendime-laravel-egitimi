### Laravelde dosya yükleme işlemi nasıl yapılır
- Dosyaları views dosyasını oluşturarak başlayalım. 'upload' isminde bir view dosyası oluşturuyorum.
- İçine form'umu kodluyorum
```html 
<form action="{{ route('yukle') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="dosya">
        <input type="submit" value="Yükle">
    </form>
```
- View dosyamız oluştu şimdi bu dosyayı görüntülemek için Route yapımızı tanımlayalım.
```php
Route::post('/upload', function(){
		return view('upload')
});
```
- Artık '/upload' url'sine gittiğimizde form'umuz açılacak.
- Resimleri yüklememizi sağlayan Controller dosyamızı oluşturalım
```shell
php artisan make:controller Upload
```
- Upload isminde bir controller oluşturdum. View'den submit edilen verilerin buraya gelmesi için Route yapımızı oluşturup geri dönelim.
```php
Route::post('/yukle', [Upload::class, 'index'])->name('yukle');
```
- View dosyasından post edilen veriler Uploads sınıfı içinde index fonksiyonuna gitmesini istedik
- index fonksiyonumuzu tanımlayalım
```php
public function index(Request $request)
    {
        $dosya = $request->file('dosya');
        $dosya->move(public_path('dosyalar'), $dosya->getClientOriginalName());
        return redirect()->route('upload');
    
    }
```
- Burada yaptıklarımızı inceleyelim.
- name değeri 'dosya' olan file verisini '$dosya' isimli değişkenin içine attık.
- Bu dosyayı public path içinde dosyalar isminde bir klasöre taşımasını ve isminin orjinal kalmasını istedik.
- public path konumu ana dizinde bulunan public klasörüdür. Dışardan erişime açıktık.
- İkinci parametre de dosya ismini gönderdik burda orjinal name yerine kendimiz bir isim belirleyebiliriz. Dosyanın bozulmaması için uzantısına ihtiyacımız var ona da ```getClientOriginaExtension``` ile ulaşıp istediğimiz gibi kullanabiliriz.
- Dosyayı herkese açık olarak değl de gizli olarak saklamak istersek ne yapacaktık.
```php
$dosya->move(storage_path('app/public/dosyalar'), $dosya->getClientOriginalName());
```
- Bu şekilde dosyamızın konumu'storage/app/public/dosyalar' oldu.
- Ve en son 'upload' isimli routerin çalışmasını istedik 