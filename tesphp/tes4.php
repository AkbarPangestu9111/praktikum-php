<?php
if (isset($_GET['nama'])) {
    echo "Nama: " . $_GET['nama'];
} else {
    echo "Nama tidak ditemukan.";
}
?>