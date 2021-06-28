	<h2 idkampus="headings"> Data Mahasiswa</h2>
	<table  class="table table-striped table-condensed">
		<thead>
			<th><td><b>nama </b></td><td><b>Alamat </b></td><td><b>Aksi</b></td></th>
		</thead>
		<tbody>
			<?php

                $query="SELECT * from kelas_218";
                /* ini cara oracle */
                $parsesql = oci_parse($conn, $query);
                oci_execute($parsesql);
                $no=1;
                //proses menampilkan data
                while($rows=oci_fetch_object($parsesql)){
            ?>
			<tr>
				<td><? echo $posisi+$no
				?></td>
				<td><?php echo $rows ->KDKELAS; ?></td>
				<td><?php echo $rows ->NAMAKELAS;?></td>
				<td><a href="index.php?mod=kampus&pg=kampus_form&idkampus=<?=	$rows -> IDKAMPUS;?>" class='btn btn-primary'><i class="icon-pencil icon-white"></i>Ubah</a><a href="index.php?mod=kampus&pg=kampus_view&act=del&idkampus=<?=	$rows ->IDKAMPUS;?>"
				onclick="return confirm('Yakin data akan dihapus?') ";
				class='btn btn-danger'> <i class="icon-trash icon-white"></i>Hapus</a></td>
			</tr>
			<?php	$no++;
}
oci_free_statement($parsesql);
oci_close($conn);
	?>
			<tr>
				<td colspan='3' ></td><td><a href="index.php?mod=kampus&pg=kampus_form"
				class='btn btn-success'	><i class="icon-plus icon-white"></i>Tambah</a></td>
			</tr>
		</tbody>
	</table>
	<?php
// KODE UNTUK MENAMPILKAN PESAN STATUS
if(isset($_GET['status'])) {
	if($_GET['status'] == 0) {
		echo " Operasi data berhasil";
	} else {
		echo "operasi gagal";
	}
}
    ?>