<?php
if ($_POST) {
	$nama_jurusan=$_POST['nama_jurusan'];
	$angkatan=$_POST['angkatan'];
	if (empty($nama_jurusan)) {
		echo "<script>alert('Nama Jurusan Tidak Boleh Kosong');location.href='TAMBAH_KELAS.php';</script>";

	} elseif(empty($angkatan)) {
		echo "<script>alert('Angkatan Tidak Boleh Kosong');location.href='TAMBAH_KELAS.php';</script>";
	}else {
		include "KONEKSI.php";
		$insert=mysqli_query($conn, "insert into jurusan (nama_jurusan, angkatan) value ('".$nama_jurusan."','".$angkatan."')");
		if ($insert) {
			echo "<script>alert('Sukses menambahkan data jurusan');location.href='TAMBAH_KELAS.php';</script>";
		} else {
			echo "<script>alert('Gagal menambahkan data jurusan');location.href='TAMBAH_KELAS.php';</script>";
		}
		
	}
}
?>