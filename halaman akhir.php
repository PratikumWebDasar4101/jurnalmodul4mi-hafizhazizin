<?php
session_start();
?>
    <table border='1' align="center" width="800px" >
        <tr>
            <th>Nama</th>
            <th>Hobi</th>
            <th>Gambar</th>
        </tr>
        <tr>
            <td>
            <?php
                foreach($_SESSION['hobby'] as $pilihan){
                echo $pilihan ."<br>";
             }
            ?>
        </td>
            <td align="center">
                <img src="<?php echo $_SESSION['file'];?>" width ="50%">
            </td>
        </tr>
    </table>
    <a href="form.php">Hapus ??</a>
