<?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $data = mysql_query("SELECT * FROM tbl_agt where nama like '%".$cari."%'"); 
    }
    else{
        $data = mysql_query("SELECT * FROM tbl_agt"); 
    }
    $no = 1;
    while($d = mysql_fetch_array($data)){
?>