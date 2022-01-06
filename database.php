<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
ob_start();

$databaseHost = '';
$databaseName = '';
$databaseUsername='';
$databasePassword='';


// must end with a slash
define('SITE_URL', 'http://127.0.0.1/schoolzone2021');
date_default_timezone_set( 'Asia/Kolkata' );
$mysqli = mysqli_connect( $databaseHost, $databaseUsername, $databasePassword, $databaseName );


mysqli_query( $mysqli, 'SET character_set_results=utf8' );
mysqli_query( $mysqli, 'SET names=utf8' );
mysqli_query( $mysqli, 'SET character_set_client=utf8' );
mysqli_query( $mysqli, 'SET character_set_connection=utf8' );
mysqli_query( $mysqli, 'SET character_set_results=utf8' );
mysqli_query( $mysqli, 'SET collation_connection=utf8_general_ci' );




//Fetching Server Name
if($_SERVER['SERVER_NAME'] == 'localhost'){
  $ServerName = "http://".$_SERVER['SERVER_NAME'];
}else{
  $ServerName = "http://".$_SERVER['SERVER_NAME'];
}

//----------------PDO way to connect to the database----------------

define( 'DB_HOST', $databaseHost );
define( 'DB_NAME', $databaseName );
define( 'DB_USER', $databaseUsername );
define( 'DB_PASS', $databasePassword );
// configure PDO options:
$database_options =                                      // important! use actual prepared statements (default: emulate prepared statements)
  array(
    PDO::ATTR_EMULATE_PREPARES => false,                 // throw exceptions in case of errors (default: stay silent)
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,         // fetch associative arrays (default: mixed arrays)
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC );

// connect to the database - important! specify the character encoding in the DSN string, don't use SET NAMES
$database = new PDO( 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8',
                     DB_USER,
                     DB_PASS,
                     $database_options );

if ( !function_exists( 'html_escape' ) )
{
  /**
   * Returns HTML escaped variable.
   *
   * @param  mixed $input The input string or array of strings to be escaped.
   * @param  bool $double_encode $double_encode set to FALSE prevents escaping twice.
   * @return  mixed      The escaped string or array of strings as a result.
   */
  function html_escape($input, $double_encode = TRUE)
  {
    if ( is_array( $input ) )
    {
      return array_map( 'html_escape', $input, array_fill( 0, count( $input ), $double_encode ) );
    }

    return htmlspecialchars( $input, ENT_QUOTES, 'utf-8', $double_encode );
  }
}

// blunt PDO Singleton to use universally for procedural code
class QUERY
{
  protected static $instance = null;

  protected function __construct() { }
  protected function __clone() { }

  public static function __callStatic($method, $args)
  {
    return call_user_func_array( array( self::instance(), $method ), $args );
  }

  public static function instance()
  {
    if ( self::$instance === null )
    {
      $database_options =
        array(
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
              PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
              PDO::ATTR_EMULATE_PREPARES => FALSE, );

      $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8';
      self::$instance = new PDO( $dsn,
                                 DB_USER, DB_PASS,
                                 $database_options );
    }
    return self::$instance;
  }

  public static function run($sql, $args = [])
  {
    if ( !$args )
    {
      return self::instance()->query( $sql );
    }
    $stmt = self::instance()->prepare( $sql );
    $stmt->execute( $args );
    return $stmt;
  }
}
//-------------

?>
