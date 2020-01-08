<?php 

	require '../config.php';
	
	if($_POST['nama_brg'] != null){

		$request = $_POST;
		// print_r($request);
	$idbrg = $_POST['idbrg'];
	$nama_brg = $request['nama_brg'];
	$jenis_brg = $request['jenis_brg'];
	$satuan = $request['satuan'];
	$nama_suplier = $request['nama_suplier'];
	$hrg_beli = $request['hrgbeli'];
	$hrg_jual = $request['hrgjual'];
	$jumlah = $request['jumlah'];

	// kondisi ketika tambah data barang/ketika tekan tombol simpan
	if($_POST["idbrg"] == ''){
		$sql_tambah = mysqli_query($conn, "INSERT INTO tblbarang (namabrg, jenisbrg, suplier,satuan, hrgbeli, hrgjual,jumlah,sisa) VALUES ('$nama_brg', '$jenis_brg', '$nama_suplier', '$satuan', $hrg_beli, $hrg_jual, $jumlah,$jumlah)");
		
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
			$sql_ubah = mysqli_query($conn, "UPDATE tblbarang SET
				namabrg = '$nama_brg',
				jenisbrg = '$jenis_brg',
				suplier = '$nama_suplier',
				satuan = '$satuan',
				hrgbeli = $hrg_beli,
				hrgjual = $hrg_jual,
				jumlah = $jumlah
				WHERE idbrg = $idbrg
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