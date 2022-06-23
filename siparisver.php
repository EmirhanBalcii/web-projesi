
<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
	
	
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$telefon = $_POST['telefon'];
		$yiyecek = $_POST['yiyecek'];
		$icecek = $_POST['icecek'];
		$fiyat = $_POST['fiyat'];
		
		
	
		
		$query3 = "insert into siparis (`telefon`, `yemek`, `icecek`, `fiyat`) VALUES ('$telefon', '$yiyecek', '$icecek', '$fiyat');";
		$result3 = mysqli_query($con,$query3);
		
	}

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
                  <li><a href="urun.php">ÜRÜNLERİMİZ</a></li>
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
         
         <!-- jumbotron bitişi --> 
         <!-- menü ve içeriğin yan yana durması için satır oluştur --> 
         <div class="row">
            <form action="" method="POST">
	<table class="table table-user-information">
                <tbody>
				
				
					<tr>        
                        <td>
                            <strong>
                                 
                                Telefon numarası                                       
                            </strong>
                        </td>
                        <td class="text-primary">
                              <div class="input-group mb-3">
							  <div class="input-group-prepend">
			
							  <span> 
							  <input type="text" class="form-control" name="telefon">
							  </span>
                        </td>
						
                    </tr>
					        
                    <tr>    
                        <td>
                            <strong>     
                               YİYECEK ÇEŞİTLERİMİZ                                                
                            </strong>
                        </td>
                        <td>
                            <div>
							<select id="search" name="yiyecek" class="form-select form-select-lg mb-3">
							<option value="" name="">Yiyecekler</option>
							<?php $query = "select * from yiyecek";$result = mysqli_query($con,$query); 
							
							while($gelen=mysqli_fetch_array($result))
							{
							
							?>
							
								
								<option value="<?php echo $gelen['ad']?>" name="<?php echo $gelen['ad']?>"><?php echo $gelen['ad']?></option>
							
							
							<?php } ?>
							</select>
						</div>
                        </td>
						
						
                    </tr>
				
				<tr>    
                        <td>
                            <strong>     
                               İÇECEK ÇEŞİTLERİMİZ                                                
                            </strong>
                        </td>
                        <td>
                            <div>
							<select id="search" name="icecek" class="form-select form-select-lg mb-3">
							<option value="" name="">İçecekler</option>
								<?php $query = "select * from icecek";$result = mysqli_query($con,$query); 
							
							while($gelen2=mysqli_fetch_array($result))
							{
							
							?>
							
								
								<option value="<?php echo $gelen2['ad']?>" name="<?php echo $gelen2['ad']?>"><?php echo $gelen2['ad']?></option>
							
							
							<?php } ?>
							</select>
						</div>
                        </td>
						
						
                    </tr>
					
                    <tr>        
                        <td>
                            <strong>
                                 
                                 FİYAT                                         
                            </strong>
                        </td>
                        <td class="text-primary">
                              <div class="input-group mb-3">
							  <div class="input-group-prepend">
			
							  <span> 
							  <input type="text" class="form-control" value="" name="fiyat">
							  </span>
                        </td>
						
                    </tr>


                    <tr>        
                        <td>
                            
                        </td>
                        <td class="text-primary">
                            <button id="bagisyap" onclick = "clickMe4()" class="btn btn-primary" type="submit">Sipariş Ver</button>
                        </td>
						
                    </tr>
					<tr>        
                        <td>
                            
                        </td>
                        <td class="text-primary">
                            <label id = "lab"  for="css"></label><br> 
                        </td>
						
                    </tr>
	</table>
	</form>
	</div>
         </div>
         <!-- taşıyıcı bitişi --> 
      </div>
   </body>
</html>