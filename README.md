<h3>Laravel kurulumu</h3>
    <h4>Composer Kurulumu</h4>
    <ul>
        <li>
            <a href="https://getcomposer.org/download/" > Composer indirme sayfası</a>
        </li>
        <li>
            Laravel kurulum kodları:<br>
            <code style="padding:10px"> 
                composer global require laravel/installer
            </code><br>
            Global olarak bir kere indiriliyor daha sonra sadece kurulum yapılıyor
        </li>
    </ul>
    
<h3>Laravel Projesi oluşturma</h3>
<code style="padding:10px"> 
    laravel new 'projeIsmı'
</code><br>
    
<h3>Laravel Başlatma</h3>
<code style="padding:10px"> 
    php artisan serve
</code><br>


<h3>Dosyaları tanıyalım</h3>
 <ul>
    <li>
        <code>.env</code><br>
        Burada birçok ayar ve sabit değişkenleri belirliyoruz.Mesela veritabanı ismi, kullanıcı adı ve şifre gibi.
    </li>
</ul>

<h3>Hızlı öğren</h3>
 <ul>
    <li>
        Routes:<br>
        <ul>
            <li>
                1.1 : <a href="./egitim/routes/1.md"> Routerde viev göstermek istersek </a>
            </li>
            <li>
                1.2 : <a href="./egitim/routes/2.md"> Routerde sınıf çalıştırmak istersek </a>
            </li>
            <li>
                1.3 : <a href="./egitim/routes/3.md"> Routerde sınıfa parametre gönderme </a>
            </li>
        </ul>
    </li>
    <li>
        Controllers:<br>
        <ul>
            <li>
                2.1 : <a href="./egitim/controllers/1.md"> Sınıftan view dosyasına parametler gönderme </a>
            </li>
    </li>
</ul>