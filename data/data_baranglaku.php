<?php 

// DB table to use
$table = 'tblbaranglaku';

// Table's primary key
$primaryKey = 'idbrglaku';
// parameter names
$columns = array(
	array( 'db' => 'idbrglaku', 'dt' => 'idbrglaku' ),
	array( 'db' => 'namabrg', 'dt' => 'namabrg' ),
	array( 'db' => 'satuan', 'dt' => 'satuan' ),
	array( 'db' => 'hrgjual', 'dt' => 'hrgjual' ),
	array( 'db' => 'jumlah', 'dt' => 'jumlah' ),
	array( 'db' => 'laba', 'dt' => 'laba' ),
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