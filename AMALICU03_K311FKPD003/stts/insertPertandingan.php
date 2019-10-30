<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pertandingan</title>
</head>

<body>
	
	<?php
    include('connection.php');
    
    if(isset($_POST['submit'])) {
        
        $noic = $_POST['noic'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jenisPertandingan = $_POST['jenisPertandingan'];
        
        $insertQuery = "INSERT INTO peserta (noic, nama, kelas, pertandingan) VALUES ('$noic','$nama','$kelas','$jenisPertandingan')";
        
        if (mysqli_query($connect, $insertQuery)) {
            
            echo "Successful";
        }
        else {
            
            echo "Something is wrong".$insertQuery."".mysqli_error($connect);
        }
        
        mysqli_error($connect);
    }
    ?>
    
</body>
</html>