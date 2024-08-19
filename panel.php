<!DOCTYPE html>
<html>

<head>
  <style>
    #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    #customers td,
    #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #customers tr:hover {
      background-color: #ddd;
    }

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04aa6d;
      color: white;
    }
  </style>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Dancing+Script:wght@400..700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Pacifico&family=Satisfy&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet" />
  <script
    src="https://kit.fontawesome.com/c20485228a.js"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="owl/owl.carousel.min.css" />
  <link rel="stylesheet" href="owl/owl.theme.default.min.css" />
</head>

<body>

  <section id="menu">
    <a href="index.php">
      <div id="logo">Zeyn</div>
    </a>

    <nav>
      <a href="index.php"><i class="fas fa-home ikon"></i>Anasayfa</a>
      <a href="hakkimda.php"><i class="fas fa-info ikon"></i>Hakkımda</a>
      <a href="egitimler.php"><i class="fas fa-graduation-cap ikon"></i>Eğitimler</a>
      <a href=""><i class="fas fa-user-friends ikon"></i>Ekip</a>
      <a href="iletisim.php"><i class="fas fa-map-pin ikon"></i>İletişim</a>
      <a href="panel.php"><i class="fas fa-user-friends ikon"></i>Panel Girişi</a>

    </nav>
  </section>
  <table id="customers">
    <tr>
      <th>Ad Soyad</th>
      <th>Telefon</th>
      <th>E mail</th>
      <th>Konu</th>
      <th>Mesaj</th>
    </tr>


    <?php


    session_start();

    if ($_SESSION["user"] == "") {
      echo "<script> window.location.href='cikis.php'</script>";
    } else {

      echo "Kullanıcı adınız: " . $_SESSION['user'] . "<br>";
      echo "<a href='cikis.php'>ÇIKIŞ YAP</a><br><br><br>";

      include("baglanti.php");

      $sec = "Select * From iletisim";

      $sonuc = $baglan->query($sec);

      if ($sonuc->num_rows > 0) {
        while ($cek = $sonuc->fetch_assoc()) {
          echo "<tr>
          <td>" . $cek['adsoyad'] . "</td>
          <td>" . $cek['telefon'] . "</td>
          <td>" . $cek['email'] . "</td>
          <td>" . $cek['konu'] . "</td>
          <td>" . $cek['mesaj'] . "</td>
        </tr>";
        }
      } else {
        echo "Veritabanında kayıtlı hiçbir veri bulunamamıştır.";
      }
    }


    ?>


  </table>
</body>

</html>