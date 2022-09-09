<?php
class koneksi{
    public $nama ="Akbar";
    function menampilkan_text(){
        echo "menampilkan_text";
    }
}


//jadikan objek
$tampil = new koneksi();
echo"menampilkan_text <br />";
echo $tampil->nama. "<br />";

//memanggil function
$tampil->menampilkan_text();