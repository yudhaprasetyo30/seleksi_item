<?php
    include 'koneksi.php';
 
    $tampil=mysqli_query($koneksi,"SELECT * FROM dokter WHERE kd_poli='$_POST[poli]'");
    $jml=mysqli_num_rows($tampil);
    if($jml > 0){
    echo"<option selected>Pilih Dokter</option>";
    while($r=mysqli_fetch_array($tampil)){
    echo "<option value=$r[id_dokter]>$r[nama_dokter]</option>";
    }}
    
 
?>