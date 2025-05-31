<?php
//if..elseif..else


$password = 1234;
if($password === "1234"){
    echo "password benar";
}

$angka = 10;
if ($angka > 5){
    echo "Angka $angka besar dari 5";
}
else{
    echo "angka $angka kecil dari 5";
}
echo"<br>";
if($angka == 5){
    echo "Angka sama dengan 5";
}elseif ($angka > 5){
    echo "Angka $angka besar dari 5";
}else{
    echo "Angka $angka kecil dari 5";
}

echo "<br>";
//operator ternary
echo $password == 1234 ? "Password benar" : "Password salah";

echo "<br>";
$nilai =80;
/*
nilai >= 85 = A
nilai >= 75 = B
nilai >= 65 = C
nilai >= 55 = D
nilai < 55 = E
0-100
*/
if($nilai >= 85){
    $predikat = "A";
}elseif($nilai >= 75){
    $predikat = "B";
}else{
    $predikat = "Nilai tidak valid";
}
echo $predikat;
// switch case

$angkaBulan = date(n);
{
case 1:
    $nama_bulan = "januari";
    break;

case 2:
    $nama_bulan = "febluari";
    break;

case 3:
    $nama_bulan = "Maret";
    break;

case 4:
    $nama_bulan = "April";
    break;
case 5:
    $nama_bulan = "Mei";
    break;    
    
case 6:
    $nama_bulan = "Juni";
    break;  
    
case 7:
    $nama_bulan = "Juli";
    break;    

case 8:
    $nama_bulan = "Agustus";
    break;
    
case 9:
    $nama_bulan = "September";
    break;    

case 10:
    $nama_bulan = "Oktober";
    break;    

case 11:
    $nama_bulan = "November";
    break; 
                
case 12:
    $nama_bulan = "Desember";
    break;  
}  
echo "Bulan ke $angkaBUlan aadalah $nama_bulan";
                
            
    
        
    
?>