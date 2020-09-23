<?php
$no = 1;
foreach ($users as $tampil) {
    # code...

?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $tampil['JUDUL_KURSIL_MODUL']; ?></td>
        <td><?php echo $tampil['LOKASI']; ?></td>
        <td><?php echo $tampil['TANGGAL_KEGIATAN']; ?></td>
        <td><?php echo $tampil['TAHUN_KEGIATAN']; ?></td>


    </tr>
<?php } ?>