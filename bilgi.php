
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
                  <li ><a href="index.php">Ana Sayfa</a></li>
                  <li><a href="urun.php">ÜRÜNLERİMİZ</a></li>
				  <li><a href="signup.php">ÜYE  OL</a></li>
				  <li><a href="login.php">GİRİŞ YAP</a></li>
				   <li><a href="siparisver.php">SİPARİŞ VER</a></li>
				   <li><a href="logout.php">çıkış VER</a></li>
				   <li class="active"><a href="bilgi.php"><?php echo $user_data['isim']; ?></a></li>
               </ul>
            </div>
         </nav>
        
         <div class="container bootstrap snippets bootdey">
<div class="panel-body inf-content">
    <div class="row">
        <div class="col-md-4">
            <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="https://bootdey.com/img/Content/avatar/avatar7.png" data-original-title="Usuario"> 
            <ul title="Ratings" class="list-inline ratings text-center">
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
            </ul>
        </div>
        <div class="col-md-6">
            <strong>BİLGİ KUTUSU</strong><br>
            <div class="table-responsive">
            <table class="table table-user-information">
                <tbody>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                ÜYE KİMLİĞİ                                               
                            </strong>
                        </td>
                        <td class="text-primary">
                            123456789     
                        </td>
                    </tr>
                    <tr>    
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-user  text-primary"></span>    
                               İSİM                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            <?php echo $user_data['isim']; ?>  
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-cloud text-primary"></span>  
                                SOYİSİM                                                
                            </strong>
                        </td>
                        <td class="text-primary">
                            <?php echo $user_data['soyisim']; ?>  
                        </td>
                    </tr>

                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-bookmark text-primary"></span> 
                              TELEFON                                               
                            </strong>
                        </td>
                        <td class="text-primary">
                            <?php echo $user_data['telefon']; ?> 
                        </td>
                    </tr>


                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-eye-open text-primary"></span> 
                                MAİL                                               
                            </strong>
                        </td>
                        <td class="text-primary">
                            <?php echo $user_data['mail']; ?>
                        </td>
                    </tr>
                    <tr>        
                        <td>
                            <strong>
                                <span class="glyphicon glyphicon-envelope text-primary"></span> 
                                ADRES                                               
                            </strong>
                        </td>
                        <td class="text-primary">
                            <?php echo $user_data['adres']; ?>
                        </td>
                    </tr>
                    
                                                      
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
</div>  
      </div>
   </body>
</html>

<style>
.inf-content{
    border:1px solid #DDDDDD;
    -webkit-border-radius:10px;
    -moz-border-radius:10px;
    border-radius:10px;
    box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.3);
}		 </style>