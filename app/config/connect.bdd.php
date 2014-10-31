<?php
//if(!defined('Portefollio')|| !Portefollio) die("URL non valide !");


	define("CHARSET","utf-8");
	define("PREFIXE","PF_");
	$nom_serveur = explode ( "/" , $_SERVER['REQUEST_URI']);
	function _cnx( $user, $pass, $base, $host, $port, $type )
	{

		$dsn = 'mysql:dbname=' . $base . ';host=' . $host . ';port=' . $port;
		$options = array(
						    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
						);
		switch ( $type ) 
		{
			case 'pdo':
				$dbh = new PDO( $dsn, $user, $pass, $options );
				$dbh -> setAttribute( PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING );
				$dbh -> setAttribute( PDO::ATTR_TIMEOUT, 5 );
				$dbh -> exec('SET NAMES utf8'); // METHOD #3
				$dbh -> exec('SET CHARACTER SET utf8');
				
			break;
			/*case 'mysqli':
				$port = (int)$port;
				$dbh = mysqli_connect($host, $user, $pass, $base, $port);
				$dbh -> options( MYSQLI_OPT_CONNECT_TIMEOUT, 5 );
			break;*/
			default:
				$dbh = mysql_connect( $host . ':' . $port, $user, $pass );
				mysql_select_db( $base, $dbh );
		}
	
		return $dbh;
	}
	
	function cnx_site_local( $type_cnx = NULL ){
		$server_name = explode ( "/" , $_SERVER['REQUEST_URI']);
		$server_name = $server_name[1];
		if (($_SERVER["HTTP_HOST"] == "localhost") or ($_SERVER["HTTP_HOST"] == "127.0.0.1"))
		{
			$host = 'localhost';
			$user = 'root';
			$pass = 'root';
			$base = 'khauv';
			$port = 80;
		}
		else if (($_SERVER["HTTP_HOST"] == "ns366377.ovh.net") && ($nom_serveur == "khauv") )
		{
			$host = 'localhost';
			$user = 'khauv';
			$pass = '';
			$base = '';
			$port = 80;
		}
		else if (($_SERVER["HTTP_HOST"] == "ns366377.ovh.net") && ($nom_serveur == "dupont") )
		{
			$host = 'localhost';
			$user = 'khauv';
			$pass = '';
			$base = '';
			$port = 80;
		}
		else if (($_SERVER["HTTP_HOST"] == "ns366377.ovh.net") && ($nom_serveur == "alexandr") )
		{
			$host = 'localhost';
			$user = 'alexandr';
			$pass = '';
			$base = '';
			$port = 80;
		}
		return _cnx( $user, $pass, $base, $host, $port, $type_cnx );
	}