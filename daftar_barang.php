<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <a href="tambah_barang.php">tambah barang</a>
    <table border="1">
        <tr>
            <td>nama barang</td>
            <td>stok</td>
            <td>jumlah</td>
            <td>aksi</td>
        </tr>
        
        <?php
        include 'koneksi.php';
        $data = mysqli_query($koneksi,"SELECT * FROM `barang` ");
            foreach($data as $data){
        ?>
            <tr>
                <td><?php echo $data['nama_barang']; ?></td>
                <td><?php echo $data['stok']; ?></td>
                <td><?php echo $data['jumlah']; ?></td>
                <td><a href="delete_barang.php?id=<?php echo $data['id']; ?>">delete</a></td>

            </tr>




        <?php
        
            }
        
        ?>
    </table>    



</body>
</html>