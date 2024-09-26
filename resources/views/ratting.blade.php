<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ratting</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />

    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>
<body id="page-top">
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="beranda">Profil </a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="beranda#sosialmedia">Sosial Media</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="beranda#about">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="beranda#contact">Contact</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="ratting">⛔</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <center><h2> Apakah Anda Puas Dengan Website Ini ? </h2><br>
        <img src="" alt="Pangeran Afdhol" height="300" width="200"></center><br>
        <h2 class="h2"> Apakah Anda Puas Dengan Website Ini ? </h2><br>
        <center><button id='btn_iyaadong' class='btn second center' onclick='alert("Hehehe terima kasih :) ")'>Websitenya Keren! </button>&nbsp;
        <button id='btn_dih_najis' class='btn second' onclick='dihnajis(this)' style='position:relative'>Tidak!</button></center><br><br><br><br>
    </body>
    <script>
        function dihnajis(id){
            var iyaadong = document.getElementById('btn_iyaadong');
            var i = Math.floor(Math.random()*300)+1;
            var j = Math.floor(Math.random()*200)+iyaadong.offsetTop;
            id.style.left = i+'px';
            id.style.top = j+'px';
        }
    </script>
</body>
</html>