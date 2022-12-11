<table border="1">
    <tr>
        <th> No. </th>
        <th> NIM </th>
        <th> Nama </th>
        <th> Program Studi </th>
    </tr>
<?php
    include "koneksi.php";
    $prodi = $_POST['prodi'];
    $query = "SELECT * FROM tugas5.mahasiswa WHERE Program_Studi = '$prodi'";

    $result = mysqli_query($connection, $query);
        $i = 0;
        while ($data = mysqli_fetch_array($result)) :
            $i++;
?>
    <tr>
        <td> <?= $i ?> </td>
        <td> <?= $data["NIM"] ?> </td> 
        <td> <?= $data["Nama"] ?> </td>
        <td> <?= $data["Program_Studi"] ?> </td>
    </tr>
    
<?php
        endwhile
?>
</table>