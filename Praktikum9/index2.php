<?php
reqiure "proses/session.php";
if(empty ($_GET['x'])){
    echo "<script>window.location='home.php?x=home';</script>";
}elseif($_GET['x']=='home'){
    require "home.php";
}elseif($_GET['x']=='peminjaman'){
    require "peminjaman.php";
}elseif($_GET['x']=='mahasiswa'){
    require "mahasiswa.php";
} elseif($_GET['x']=='dosen'){
    require "dosen.php";
}elseif($_GET['x']=='staf'){
    require "staf.php";
}elseif($_GET['x']=='laporan'){
    require "laporan.php";
}
?>