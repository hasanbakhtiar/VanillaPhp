<?php

    /*Php'de Cookie Kullanımı
    
    Cookie olarak anılan kavram, diğer bilgisayarlar tarafından sizin bilgisayarınıza gönderilmiş olan bazı dosyalardır. Bu dosyalar bilgisayarınızda saklı kalır ve bunların size gönderildiği bilgisayar tarafından idare edilen siteye tekrar girdiğinizde site sizi tanımış olur. Bu dosyalar Türkçede "Çerez" olarak da adlandırılmaktadır.

Cookie'ler Zararlı mıdır?
Eğer iyi niyetli bir kullanım söz konusu ise, cookie'lerin yararlı bile olduğunu söyleyebiliriz. Mesela, bir siteyi ziyaret ettiniz ve buraya üye oldunuz. Site için şifre ve kullanıcı adı bilgisi oluşturdunuz. Site sizden, bu kullanıcı adı ve şifreyi hatırlamak için izin ister. Ya da sayfanın bir köşesinde "Oturumu açık tut.", "Beni hatırla" gibi ibareler yer alır. Siz bu ibareleri "Evet" biçiminde işaretlerseniz, site sizi otomatik olarak tanıyacaktır. İşte bunun sebebi cookie'lerdir.

Siz bu siteyi ilk ziyaret ettiğinizde, sistem tarafından bilgisayarınıza yollanan cookie türü dosyalar sayesinde sistem, sizi tanımıştır. Sonraki girişlerinizde sizden bu yüzden şifre istenmemektedir. Bütün bu bahsettiklerimiz iyi niyetli kullanımlar için geçerlidir. Ancak coookie türündeki dosyalar internet ortamında yapılan hile ve dolandırıcılık işlemleri için de kullanılmakta ve bu yüzden pek çok insan mağdur edilmektedir.

Cookie'lerin Kötüye Kullanımı
Bu dosyalar, size sağladığı yararların yanında zararlar da getirmektedir. Başka bilgisayarlar tarafından size gönderilen bu text dosyaları, her zaman sorunsuz olmaz ve bazen sisteminize virüs bulaştırabilir. Hatta bu virüsler yüzünden, bilgisayarınızda gizli olan bilgileriniz de çalınabilir. Bu yüzden cookie'ler hakkında dikkatli olmak gerekmektedir.

Bilgisayarımıza Cookie Gönderilmesini Engelleyebilir Miyiz?
Elbette, bunu sağlamak çok kolay bir işlemdir. Bunun için sadece bilgisayarınızın "Ayarlar" kısmına girerek, Cookie gönderilmesini engelleyebilirsiniz. Fakat emin olun bunu yaptıktan bir süre sonra pişman olacak ve bu yaptığınız işlemi geri almak isteyeceksiniz. Çünkü bu yüzden her gün sürekli kullandığınız sitelerin şifrelerini de sürekli sisteme girmek ve bu şekilde erişim sağlamak zorunda kalacaksınız. Bu sebeple bilgisayarınıza cookie gönderimini tamamen engellemek bu işin çözümü değil...

Cookie'lerden Kurtulmak Mümkün mü?
Bilgisayarınıza cookie gönderimini tamamen engellemek yerine belirli sürelerde, mesela ayda bir veya on beş günde bir gibi aralıklarla, bilgisayarınızda bulunan cookie'leri temizleyebilirsiniz. Bu dosyalar küçük boyutlarda olmasına rağmen, girdiğiniz her site tarafından size ayrı ayrı çerezler gönderildiği için bir süre sonra bilgisayarınızda birikecek ve sistemin çalışmasında sorunlar oluşmaya başlayacaktır. Bu yüzden bu çerezler düzenli olarak temizlenmelidir.

Cookie'leri Temizlemek İçin Ne Yapılmalıdır?
Bunun için her browser'da farklı yöntemler mevcuttur. Eğer Google Chrome kullanıyorsanız, "Araçlar" sekmesinin altından, "gelişmiş seçenekler" kısmına buradan da sırasıyla "gizlilik, içerik ayarları, tüm çerezler ve site verileri" kısımlarını takip ederek çerezleri temizletebilirsiniz. Mozilla kullanıyorsanız, bu iş Mozilla'da daha kolay yürüyor. Yine "araçlar" sekmesinden başlayıp, "seçenekler" kısmına tıklamanız ve hemen ardından da "yakın geçmişi temizle" seçeneğini kullanmanız, cookie'leri temizleyecektir

İnternet Explorer tarayıcısı kullanıyorsanız, burada da cookie'leri temizlemek için izleyeceğiniz yol şudur: "Araçlar" kısmından" internet seçeneklerine geçerek buradan da "sil" kısmına tıklamanız yeterli olacaktır.

Cookie'ler Zaman içerisinde Kendiliğinden Silinir Mi?
Cooki'ler kendi kendini siler ama ne kadar sürede bu işlemi yapacağı onu size yollayan siteye bağlıdır. Öyle ki bazen bir sitenin size gönderdiği cookie, sadece bir saat içerisinde silinir ve siz o siteye bir saat sonra tekrar girdiğinizde, yeniden şifre bilgilerinizi girmek zorunda kalırsınız. Bazen de gönderilen cookie'ler, bir yıl süreyle bir bilgisayarda kalır. Bu sebeple onların kendisini silmelerini beklemeden, belirli aralıklarla sizin onları temizlemeniz daha uygun olacaktır.
*/

setcookie("cerezler", "#ccc", time() + 60);
// setcookie("cerezler", "#ccc", time() - 60); time() - yazdiqda cookieni silirik.

echo $_COOKIE["cerezler"];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background: <?php echo @$_COOKIE["cerezler"] ? @$_COOKIE["cerezler"]: 'red'; ?>">
    
</body>
</html>