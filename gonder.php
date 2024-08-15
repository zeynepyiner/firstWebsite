
<?php 


include("baglanti.php");

if(isset($_POST["isim"] , $_POST["tel"] , $_POST["mail"] , $_POST["konu"] , $_POST["mesaj"]))
{
  $adsoyad=$_POST["isim"];
  $telefon=$_POST["tel"];
  $email=$_POST["mail"];
  $konu=$_POST["konu"];
  $mesaj=$_POST["mesaj"];
}

$ekle= "INSERT INTO iletisim ( adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."' , '".$telefon."' , '".$email."' , '".$konu."' , '".$mesaj."')";

if($baglan->query($ekle)===TRUE){
  echo "<script>alert('Mesajınız başarı ile gönderilmiştir.')</script>";
  echo "<script>window.location.href = 'index.php';</script>";  
}
else{
  echo "<script>alert('Mesajınız gönderilirken bir hata oluştu.')</script>";
  echo "<script>window.location.href = 'index.php';</script>";
}

?>