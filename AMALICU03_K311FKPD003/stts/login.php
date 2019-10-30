<?php 
session_start();
include("loginserver.php");


?>

<html>
	<head><title>Login</title>
	<link rel="stylesheet" type = "text/css" href="style.css">
	</head>
		<body>
            
          
<div id="container">

        <div id="banner" align="center">
        <img src="logo3.png" width="208" height="242"  align="bottom">
        </div>
        
        <div id = "header">

                <h1>SEKOLAH TEKNOLOGI TINGGI SEKALI</h1>
        </div>

        <div id="content">
            
          <div id="nav">
                    <ul>
                    <li align="center"><h3>MENU NAVIGASI</h3></li>
                    <li align="center"><h3>______________</h3></li>
                    <li><a href="index.php">UTAMA</a></li>
                    <li><a href="#">PENGUMUMAN</a></li>
                    <li><a href="login.php">LOG MASUK</a></li>

                    </ul>
                    </div>
            
                    <div id="main">
                        <p></p>
                    <form id="login" name="login" method="post" action="login.php">
                        
                        <table align="center" width="263">
                          <tbody>
                            <tr>
                              <th align="left" height="36" scope="row">USERNAME</th>
                              <th width="24">:          
                              <th width="205" align="left" ><input type="text" name="user" id="user"></th>
                            </tr>
                            <tr>
                              <th align="left" height="36" width="109" scope="row">PASSWORD</th>
                              <th>:          
                              <th align="left"><input type="password" name="pass" id="pass"></th>
                            </tr>
                            
                          </tbody>
                        </table>
                        
                        <p></p>
	
                        <div align="center">
                            <span><strong><?php echo $error; ?></strong></span><br>
                            <input type="submit" name="submit" class="button submit" value="Submit">
                            <input type="reset" name="reset" class="button reset" value="Reset">
                            
                             
                            
                        </div>

                      </form>
                        
                        
                        <p></p>
                        <p><strong>Perhatian:</strong></p>
                        <p>Bagi pelajar gunakan <strong>pelajar</strong> sebagai username dan <strong>pelajar123</strong> sebagai password anda</p>
                        <p>Bagi pensyarah gunakan <strong>pensyarah</strong> sebagai username dan <strong>pensyarah123</strong> sebagai password anda</p>
    

                    </div>
        </div>

                <div id="footer">Copyright &copy; 2019
                </div>

            </div>

                </body>
        </html>