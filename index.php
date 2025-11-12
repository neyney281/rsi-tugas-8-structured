<?php
include "cari.php";

$fitur = $_GET['fitur'] ?? null;
?>

<form method="get">
    <input type="hidden" name="fitur" value="cari">
    <input type="text" name="keyword" placeholder="Cari judul buku..." />
    <input type="submit" value="CARI" />
</form>

<a href="./pinjam/pinjam.php?fitur=read">Lihat Keranjang</a>
<br>

<?php
switch ($fitur) {
    case 'pinjam':
        header('Location: pinjam/pinjam.php?fitur=read');
        exit;

    case 'cari':
    default:
        $keyword = $_GET['keyword'] ?? '';
        $listbuku = cari($keyword);
        display($listbuku);
        break;
}
?>
