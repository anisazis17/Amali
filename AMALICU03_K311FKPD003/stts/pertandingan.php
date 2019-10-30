<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Borang Pertandingan</title>

<style type="text/css">
	
body, html {
  height: 100%;
  margin-top: 25px;
    margin-bottom: 16px;
    margin-left: 16px;
    margin-right: 16px;
}

.bg {
  /* The image used */
  /*background-image: url("back.jpg");*/

  /* Full height */
  height: 100%; 
	
  /* Add the blur effect 
	  opacity: .8;
  filter: blur(.5px);

  /*filter: blur(0px);
  -webkit-filter: blur(0px);*/

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
	
.header {
    display: block;
	margin-left: auto;
	margin-right: auto;
}
#pertandingan table tbody tr th {
    font-family: Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif;
}

#nama {
	width: 95%;
}
	
#noic {
	width: 95%;
}
    
#jenisPertandingan {
	width: 95%;
}
    
#kelas {

	width: 95%;
}
	
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px;
  width: 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
}
	
.submit {
	border-radius: 8px;
}
	
.reset {
	border-radius: 8px;
	background-color: indianred;
}
	
</style>

</head>

<body class="bg">
<header class="header"><img src="img/banner5.jpg" width="80%" height="auto" class="header"/></header>
	

	<hr>
	<p></p>
    
	
    
<div>
  <form id="pertandingan" name="Pertandingan" method="post" action="insertPertandingan.php">
    
	<p></p>
      
      
	
	<?php
    include('connection.php');
    $dropdownQuery = "select nama_pertandingan from pertandingan";
      $resultDrop = mysqli_query($connect, $dropdownQuery);
      $dropKelasQuery = "select nama from kelas";
      $resultKelas = mysqli_query($connect, $dropKelasQuery);
    
    ?>
    
    <table align="center" width="669">
      <tbody>
        <tr>
          <th align="left" height="36" scope="row">KAD PENGENALAN</th>
          <th width="20">:          
          <th><input type="text" name="noic" id="noic"></th>
        </tr>
        <tr>
          <th align="left" height="36" width="236" scope="row">NAMA</th>
          <th>:          
          <th><input type="text" name="nama" id="nama"></th>
        </tr>
           <tr>
          <th align="left" height="36" width="236" scope="row">KELAS</th>
          <th>:          
          <th><select id="kelas" name="kelas">
    <?php
        
        while($row=mysqli_fetch_array($resultKelas))
        {
            
            echo "<option value= '".$row['nama']."'>".$row['nama']."</option>";
        }
        
        ?>
    
    </select></th>
        </tr>
        <tr>
          <th align="left" height="36" scope="row">NAMA PERTANDINGAN</th>
          <th>:
              <th><select id="jenisPertandingan" name="jenisPertandingan">
    <?php
        
        while($row=mysqli_fetch_array($resultDrop))
        {
            
            echo "<option value= '".$row['nama_pertandingan']."'>".$row['nama_pertandingan']."</option>";
        }
        
        ?>
    
    </select></th>
        </tr>
        
      </tbody>
    </table>
	
	<p></p>
	
	<div align="center">
		<input type="submit" name="submit" class="button submit" value="Submit">
		<input type="reset" name="reset" class="button reset" value="Reset">	
    </div>
	
  </form>
</div>
	
</body>
</html>
