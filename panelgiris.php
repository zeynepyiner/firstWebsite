<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Add icon library -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    * {
      box-sizing: border-box;
    }

    .input-container {
      display: -ms-flexbox;
      /* IE10 */
      display: flex;
      width: 100%;
      margin-bottom: 15px;
    }

    .icon {
      padding: 10px;
      background: dodgerblue;
      color: white;
      min-width: 50px;
      text-align: center;
    }

    .input-field {
      width: 100%;
      padding: 10px;
      outline: none;
    }

    .input-field:focus {
      border: 2px solid dodgerblue;
    }

    /* Set a style for the submit button */
    .btn {
      background-color: dodgerblue;
      color: white;
      padding: 15px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }

    .btn:hover {
      opacity: 1;
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
  <form
    action="panelgiris.php"
    method="post"
    style="max-width: 500px; margin: auto">
    <h2>Panel Girişi</h2>
    <div class="input-container">
      <i class="fa fa-user icon"></i>
      <input
        class="input-field"
        type="text"
        placeholder="Kullanıcı Adı"
        name="usrnm" />
    </div>

    <div class="input-container">
      <i class="fa fa-key icon"></i>
      <input
        class="input-field"
        type="password"
        placeholder="Parola"
        name="psw" />
    </div>

    <button type="submit" class="btn">Giriş Yap</button>
  </form>
</body>

</html>


<?php

session_start();

if (isset($_POST["usrnm"], $_POST["psw"])) {

  if ($_POST["usrnm"] == "admin" && $_POST["psw"] == "12345") {

    $_SESSION['user'] = $_POST["usrnm"];
    header("location:panel.php");
  } else {
    echo "<script>alert('Kullanıcı adı veya şifre yanlış') </script>";
  }
}


?>