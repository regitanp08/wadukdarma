<?php
include '../lib/koneksi.php';

$sql = "SELECT * FROM pemesanan where is_deleted = 0 order by created_at desc";

$query = mysqli_query($db,$sql);

if(mysqli_num_rows($query)==0)
{
    echo 'tidak ada'; exit;
}else{
    $detail = mysqli_fetch_row($query);
?>

<style>
        table {
            width: 100%;
            border-collapse: collapse;
            
        }
        table, th, td {
            border: 1px solid black;
        }
        th {
            padding: 10px;
            text-align: center;
            background-color: #f8d7da; 
            color: black; 
        }
        td {
            padding: 8px;
            text-align: center;
        }

        tr:nth-child(2) {
            background-color: #ffffff; 
        }

        a {
            margin-right: 10px;
            text-decoration: none;
            color: blue;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>

<h1 style="text-align: center;">Daftar Pemesanan</h1>
<table class="table" >
  <thead>
    <tr>
      <th style="text-align: center;" scope="col">#</th>
      <th style="text-align: center;" scope="col">Nama Pemesan</th>
      <th style="text-align: center;" scope="col">Nomor HP</th>
      <th style="text-align: center;" scope="col">Tanggal Berangkat</th>
      <th style="text-align: center;" scope="col">Total Tagihan</th>
      <th style="text-align: center;" scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $co = 1;
      while($detail = mysqli_fetch_assoc($query)){
      ?>
    <tr>
      <th style="background-color: #ffffff;" scope="row"><?=$co?></th>
      <td style="text-align: center;"><?=$detail['nama_pemesanan']?></td>
      <td style="text-align: center;"><?=$detail['hp_pemesan']?></td>
      <td style="text-align: center;"><?=$detail['waktu_wisata']?></td>
      <td style="text-align: center;"><?=$detail['total_tagihan']?></td>
      <td style="text-align: center;"><a href="../detail.php?id_pemesanan=<?=$detail['id_pemesanan']?>">Detail</a> 
      <a href="index.php?aksi=edit&id_pemesanan=<?=$detail['id_pemesanan']?>">Edit</a> 
      <a href="../lib/hapus.php?hapus&id_pemesanan=<?=$detail['id_pemesanan']?>">Hapus</a></td>
    </tr>
        <?php
        $co++;
        }
        ?>
  </tbody>
</table>
<?php
} 
?>