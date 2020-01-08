<?php 

// DB table to use
$table = 'tblbarang';

// Table's primary key
$primaryKey = 'idbrg';
// parameter names
$columns = array(
	array( 'db' => 'idbrg', 'dt' => 'idbrg' ),
	array( 'db' => 'namabrg', 'dt' => 'namabrg' ),
	array( 'db' => 'jenisbrg', 'dt' => 'jenisbrg' ),
	array( 'db' => 'suplier', 'dt' => 'suplier' ),
	array( 'db' => 'sisa', 'dt' => 'sisa' ),
	array( 'db' => 'satuan', 'dt' => 'satuan' ),
);

// SQL server connection information
$sql_details = array(
	'user' => 'root',
	'pass' => '',
	'db'   => 'project2',
	'host' => 'localhost'
);
require( 'ssp.class.php' );

echo json_encode(
	SSP::simple( $_POST, $sql_details, $table, $primaryKey, $columns )
);


?>