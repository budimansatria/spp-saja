<?php
    $nisn = $_GET['nisn'];
    $his = $fungsi->history($nisn);

?>

<div class="container mt-5">
    <?php
if($_SESSION['data']['level'] == 'petugas'){ ?>
<a href="petugas.php?page=datasiswa" class="btn btn-primary mb-3"> Kembali  Data Siswa</a>
    <?php }
    ?>
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>Tanggal Bayar</th>
            <th>Bulan Tahun Bayar</th>
            <th>Jumlah Bayar</th>
        </tr>
        <?php
        $no=1;
        foreach($his as $d){ ?>
            <tr>
                <td><?= $no++;?></td>
                <td><?= $d['nama']?></td>
                <td><?= $d['tgl_bayar']?></td>
                <td><?= $d['bulan_dibayar']?> - <?= $d['tahun_dibayar']?> </td>
                <td>Rp.<?= number_format($d['jumlah_bayar'],2,',','.')?></td>
                
                
            </tr>



        <?php }
         ?>

        
            
        


    </table>
</div>