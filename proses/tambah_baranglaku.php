<?php 

	require '../config.php';
	
	if($_POST['nmabrg'] != null){

	$request = $_POST;
	$idbrglaku = $_POST['idbrglaku'];
	$idbrg = $request['nmabrg'];
	$satuann = $request['satuann'];
	$hgjual = $request['hgjual'];
	$jmlh = $request['jmlh'];
	$laba = $request['laba'];


	// kondisi ketika tambah data barang/ketika tekan tombol simpan
	if($_POST["idbrglaku"] == ''){
		$barang = mysqli_query($conn, "SELECT namabrg,jumlah FROM tblbarang WHERE idbrg= ".$idbrg."");
		$nm = mysqli_fetch_array($barang);
		$nama = $nm['namabrg'];
		$stok = $nm['jumlah'];
		$hasil =$stok - $jmlh;

		// sisa otomatis
		// 1.sisa tbl barang
		// 2. sisa = stok brg - jumlah;
		// 3.update ke tbl brg

		$sql_tambah = mysqli_query($conn, "INSERT INTO tblbaranglaku (idbrg,namabrg, satuan, hrgjual, jumlah, laba) VALUES ('$idbrg', '$nama', '$satuann', '$hgjual', '$jmlh', '$laba')");
		
		// update sisa ke tblbarang
		$update = mysqli_query($conn, "UPDATE tblbarang SET
		jumlah = $hasil
		WHERE idbrg = ".$idbrg."");
		
		if(json_encode($sql_tambah) !== false){
			$message = array(
				'status' => 200,
				'msg' => 'Data Berhasil Ditambahkan!'
			);
		}else{
			$message = array(
				'status' => 422,
				'msg' => 'Data Gagal Ditambahkan!'
			);
		}

			echo json_encode($message);
		}else{
			// print_r($_POST);
			$sql_ubah = mysqli_query($conn, "UPDATE tblbaranglaku SET
				namabrg = '$nmabrg',
				satuan = '$satuann',
				hrgjual = $hgjual,
				jumlah = $jmlh,
				laba = $laba
				WHERE idbrglaku = $idbrglaku
				");
				if(json_encode($sql_ubah) !== false){
				$message = array(
					'status' => 200,
					'msg' => 'Data Berhasil Ditambahkan!'
				);
			}else{
				$message = array(
					'status' => 422,
					'msg' => 'Data Gagal Ditambahkan!'
				);
			}

				echo json_encode($message);
			}
			
	}else{
				$message = array(
						'status' => 422,
						'msg' => 'Data Gagal Ditambahkan!'
					);
				
				echo json_encode($message);
			}

			

 ?>