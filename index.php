
<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html> 
<html>
   <head>
      <title>kofteci emirhan</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
   </head>
   <body>
      <!-- taşıyıcı başlangıcı --> 
      <div class="container">
         <h1 class="text-center text primary color="blue"><a href="#">KÖFTECİ EMİRHAN</a></h1>
         <!-- navbar başlangıcı -->  
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <ul class="nav navbar-nav">
                  <li class="active"><a href="index.php">Ana Sayfa</a></li>
                  <li><a href="ürünlerimiz.php">ÜRÜNLERİMİZ</a></li>              
				  <li><a href="signup.php">ÜYE  OL</a></li>
				  <li><a href="login.php">GİRİŞ YAP</a></li>
				   <li><a href="siparisver.php">SİPARİŞ VER</a></li>
				   <li><a href="logout.php">çıkış VER</a></li>
				   <li><a href="bilgi.php"><?php echo $user_data['isim']; ?></a></li>
               </ul>
            </div>
         </nav>
         <!-- navbar bitişi -->  
         <!-- jumbotron başlangıcı --> 
         <div class="jumbotron">
            <img src="emirhan.png" width="10%" height="25" class="img-thumbnail" align="right"> 
            <h4> <b>ÜRÜNLERİMİZDE ASLA DOMUZ YAĞI ve KATKILARI BULUNMAMAKTADIR!!!</b></h4>
			</br>
			</br>
            <p> KÖFTECİ EMİRHAN YEDİKÇE KAZANDIRIYOR. 
			DETAYLI BİLGİ İÇİN TAKİPTE KALIN </p>
           <!-- <button type="button" class="btn btn-success"></button> -->
         </div>
         <!-- jumbotron bitişi --> 
         <!-- menü ve içeriğin yan yana durması için satır oluştur --> 
         <div class="row">
            <!-- 4 hücre genişliğinde sol menü --> 
            <div class="col-sm-4">
               <!-- nav ile sol menü başlangıcı--> 
               
               <!-- nav ile sol menü bitişi--> 
               <!-- 4 hücre genişliğinde sol menü bitişi -->   
            </div>
            <!-- 8 hücre genişliğinde ana içerik --> 
            <div class="col-sm-8">
               <!-- panel başlangıcı --> 
               <div class="panel panel-default">
                  <div class="panel-heading">KÖFTECİ EMİRHAN KİMDİR ? </div>
                  <div class="panel-body">
				   <p align="justify"> Emirhan Balcı 2000 yılında Sakarya'da doğdu. İlkokul ve ortaokulu Sakarya'da okudu. Daha sonra  Sakarya Anadolu Lisesi'ni kazandi. Buradaki üstün başarısından dolayı Bursa Teknik Üniversitesinde Bilgisayar Mühendisliği'ni kazandı.Emirhan Balcı hala bu okulda öğrenimine devam etmektedir.Yemeğe olan ilgisinden dolayı Köfteci Emirhan'ı kuran Emirhan Balcı şirketini her geçen gün büyütmektedir.Müşterilere güler yüz ve samimi yaklaşımlarıyla sosyal medyada beğeni toplamıştır.
                  </div>
               </div>
               <!-- panel bitişi -->   
               <!-- 8 hücre genişliğinde ana içerik bitişi--> 
            </div>
            <!-- menü ve içeriğin yan yana durması için satır bitişi --> 
         </div>
         <!-- taşıyıcı bitişi --> 
      </div>
   </body>
</html>