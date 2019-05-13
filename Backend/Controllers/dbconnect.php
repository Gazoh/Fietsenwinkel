<?php
/**
 * Created by PhpStorm.
 * User: Batu
 * Date: 13/05/2019
 * Time: 12:50
 */
function debug_to_console( $data, $context = 'Info' ) {

    // Buffering to solve problems frameworks, like header() in this and not a solid return.
    ob_start();

    $output  = 'console.info( \'' . $context . ':\' );';
    $output .= 'console.log(' . json_encode( $data ) . ');';
    $output  = sprintf( '<script>%s</script>', $output );

    echo $output;
}

define("HOST",'localhost');

define("USER",'root');

define("PASS",'');

define("DB",'ccgdb');

$con = mysqli_connect(HOST,USER,PASS,DB);

if($con)
{
    debug_to_console("Connection is ok");
}

if (!$con){

    die("Error in connection" . mysqli_connect_error()) ;

}

?>