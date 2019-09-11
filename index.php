<?php 
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- javascript -->
    <script language="javascript"  src="jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#poli').change(function() { // Jika Select Box id provinsi dipilih
                var poli = $(this).val(); // Ciptakan variabel provinsi
                $.ajax({
                    type: 'POST', // Metode pengiriman data menggunakan POST
                    url: 'load.php', // File yang akan memproses data
                    data: 'poli=' + poli, // Data yang akan dikirim ke file pemroses
                    success: function(response) { // Jika berhasil
                        $('#dokter').html(response); // Berikan hasil ke id kota
                    }
                });
            });
        });
    </script>
    <!-- akhir javascript -->
</head>

<body>
    Nama Poli : 
    <?php 
        $seleksi="select * from poli";
        $query=mysqli_query($koneksi,$seleksi);
    ?>
    <select name="poli" id="poli">
        <option value="">Pilih Poli</option>
        <?php while($data=mysqli_fetch_array($query)){ ?>
        <option value="<?php echo $data['kd_poli'];?>"><?php echo $data['poli'];?></option>
        <?php } ?>
    </select>
    <br>    
    <br>   
    Nama Dokter :  
    <select name="dokter" id="dokter">
            <option value="">Pilih dokter</option>
    </select>
 
</body>
</html>