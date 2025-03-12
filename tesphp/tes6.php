<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "tes5";
$koneksi = mysqli_connect($host, $user, $password, $database);
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