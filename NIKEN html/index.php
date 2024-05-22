<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Aplikasi CRUD</title>
</head>
<body>
    <h2>DATA SISWA RPL SMK 17 MUNCAR</h2>
    <br>

    <a href="tambah.php">+TAMBAH DATA</a>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NIS</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>JENIS KELAMIN</th>
            <th>ACTION</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no=1;
        $data=mysqli_query($conn, "SELECT * FOM siswa");
        while($d=mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $d['nis'];?></td>
                <td><?php echo $d['nama'];?></td>
                <td><?php echo $d['alamat'];?></td>
                <td><?php echo $d['jk'];?></td>
                <td><?php echo $d['alamat'];?></td>
                <td><?php echo $d['no_hp'];?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id'];?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id'];?>">HAPUS</a>
                </td>
        </tr>
    <?php
    }
    ?>
    </table>
</body>
</html>