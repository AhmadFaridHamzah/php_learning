<?php
 require('../../config/connection.php');
/*
 * DataTables example server-side processing script.
 *
 * Please note that this script is intentionally extremely simply to show how
 * server-side processing can be implemented, and probably shouldn't be used as
 * the basis for a large complex system. It is suitable for simple use cases as
 * for learning.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 */
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'film';

$joinQuery = "FROM {$table} LEFT JOIN language ON (film.language_id = language.language_id)";
$extraCondition = "film.status = 1 AND language.name = 'English'";
 
// Table's primary key
$primaryKey = 'film_id';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case simple
// indexes
$columns = array(
    array( 'db' => 'film.title', 'dt' => 0 , 'field'=>'title'),
    array( 'db' => 'film.description',  'dt' => 1 , 'field'=>'description' ),
    array( 'db' => 'film.release_year',   'dt' => 2 , 'field'=>'release_year' ),
    array( 'db' => 'film.special_features',     'dt' => 3 , 'field'=>'special_features'),
    array( 'db' => 'language.name',     'dt' => 4 , 'field'=>'name'),   
    array( 'db' => 'film.film_id', 'dt'=>5 ,
            'formatter' => function($d,$row){
                return '<a class="btn btn-info" href="?page=updatestaff&id='.$d.'"><i class="material-icons">mode_edit</i></a>
     <a class="btn btn-danger" href="?page=deletestaff&id='.$d.'" onclick="return checkDelete()"><i class="material-icons">delete</i></a>';
            },
            'field'=>'film_id'

    ),
);
 
// SQL server connection information
$sql_details = array(
    'user' => DB_USERNAME,
    'pass' => DB_PASSWORD,
    'db'   => DB_NAME,
    'host' => DB_SERVERNAME
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( '../../library/ssp.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraCondition)
);