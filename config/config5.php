<?php
$bd="mysql";
//$bd="postgresql";
switch ($bd) {
	case 'mysql':
		define("IP_SERVER","localhost" );
		define("USER_DB", "root");
		define("PASSWORD_DB","" );
		define("DB", "hymbd");
		define("PORT", "3306");
		define("DRIVER", "mysqli.class.php");
		break;
	case 'postgresql':
		define("IP_SERVER","127.0.0.1" );
		define("USER_DB", "postgres");
		define("PASSWORD_DB","2491770" );
		define("DB", "vacaciones");
		define("PORT", "5432");
		define("DRIVER", "posgresql.class.php");
		break;	
}




define("VERSION", 5);
define("LOGINI","login".VERSION. ".php");
define("PROGRAMA","aplicacion"  .VERSION.  ".php");
define("SOFTWARE","SGA H&M Software"  .VERSION  );
define("EMPRESA","H&M Gestión y servicios empresariales S.A.S  - Año 2015");
define("AUTOR","Edgar Malagon - &copy;");
define("WEB","/var/www/html/");               ///opt/lampp/htdocs/portalhym/        /var/www/html/
define("FOTOS","fotos/");
define("PLANILLA","planillas/");
define("CLAVE5","123");


require_once(DRIVER);

define("CODEC", "utf8");
?>