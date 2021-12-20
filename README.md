## Laravel kurulumu

#### Composer kurulumu

- Önceden xampp gibi serverlar kurulu olduğu varsayılarak composer dosyasını indiriyoruz.
- [Composer indirme sayfası](https://getcomposer.org/download/ "Composer indirme sayfası")
- Composer dosyasını indirip kuruyoruz bu bize laravel kurmada kolaylık sağlayacak
- Daha sonra terminal açarak şu komutları çalıştırıyoruz.
```sh
	composer global require laravel/installer
```
- Global olarak bir kere indiriliyor. Bundan sonra sadece kurulum yapacağız.
-----
### Laravel Projesi Oluşturma
```sh
laravel new projeIsmı
```
----
### Laravel server başlatma
```shell
composer create-project --prefer-dist laravel/laravel projeadi
```
----
### Bu dosya ne işe yarar
- ``` .env ```
- Burada birçok ayar ve sabit değişkenleri belirliyoruz.Mesela veritabanı ismi, kullanıcı adı ve şifre gibi.

-----
### Hızlı öğren

- Routes
	- 1.1 : <a href="./egitim/routes/1.md"> Routerde view göstermek istersek </a>
	- 1.2 : <a href="./egitim/routes/2.md"> Routerde sınıf çalıştırmak istersek </a>
	- 1.3 : <a href="./egitim/routes/3.md"> Routerde sınıfa parametre gönderme </a>
	- 1.4 : <a href="./egitim/routes/4.md"> Routerde önce sınıfa sonra view dosyasına parametre gönderme </a>
	- 1.5 : <a href="./egitim/routes/5.md"> Router'a özel isim verme ve çağırma (```<a href="">```) </a>
- Controllers
	- 2.1 : <a href="./egitim/controllers/1.md"> Sınıftan view dosyasına parametler gönderme </a>
	- 2.2 : <a href="./egitim/controllers/2.md"> Veritabanına ekleme,güncelleme,silme,listeleme işlemleri nasıl yapılır </a>
- Views
    - 3.1 : <a href="./egitim/view/1.md"> View dosyasından controllera post işlemi</a>
- Middleware
    - 4.1 : <a href="./egitim/middleware/1.md"> Post edilen verinin Controllers'a ulaşmadan önceki kontrolü </a>
- Migrations
    - 5.1 : <a href="./egitim/migrations/1.md"> Laravel kodlarıyla mysql'de tablo oluşturma </a>
- Models
    - 6.1 : <a href="./egitim/models/1.md"> En basit haliyle model işlemleri </a>


### Örnekler
- <a href="./egitim/ornekler/kullanicidan-mesaj-alma-yonetici-panelinde-gosterme.md">Kullanıcıdan mesaj alıp yönetici panelinde listeleme</a>
- <a href="./egitim/ornekler/dosya-yukleme-islemleri.md">Dosya yükleme işlemleri</a>
