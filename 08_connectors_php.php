<?php
define( "HOST"  , "b2shy6a1adfdenolhrne-mysql.services.clever-cloud.com" );
define( "USER"  , "uheq51axik8xfr29" );
define( "PASS"  , "81w22SlzUA6DDZh9l65S" );
define( "DB"    , "b2shy6a1adfdenolhrne" );
define( "PORT"  , 3306 );

$mysqli = new mysqli( HOST, USER, PASS, DB, PORT );
$query  = "SELECT * FROM `challenges`";

if ( !$mysqli->connect_errno ) {
    $result = $mysqli->query( $query );

    while ( $row = $result->fetch_assoc() ) {
        $columns = array_keys( $row );

        for ( $index=0; $index<count($row); $index++ ) {
            $column = $columns[ $index ];
            echo utf8_encode( $row[$column] ) . "\t";
        }

        echo "\n";
    }

    $result->free();
} else {
    echo "Falló la conexión: " . $mysqli->connect_error;
}

$mysqli->close();
?>