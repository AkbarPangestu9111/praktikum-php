<form action="tes5.php" method="post">
        NIM: <input type="text" name="NPM"><br>
        Nama: <input type="text" name="nama"><br>
        
        <input type="submit" name="submit" value="Tambah Data">
        </form>
<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "tes5";
$koneksi = mysqli_connect($host, $user, $password, $database);

if(isset($_POST['submit'])){
    $NPM = $_POST['NPM'];
    $nama = $_POST['nama'];
   
    $query = "INSERT INTO mahasiswa (NPM, nama) VALUES ('$NPM',
    '$nama')";
    mysqli_query($koneksi, $query);
    echo "Data berhasil ditambahkan.";
    }

$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $query);
echo "<table border='1'>
<tr>
<th>ID</th>
<th>NPM</th>
<th>nama</th>
</tr>";
while($data = mysqli_fetch_assoc($result)){
echo "<tr>
<td>".$data['ID']."</td>
  <td>".$data['NPM']."</td>
<td>".$data['nama']."</td>

</tr>";
}
echo "</table>";  
?>