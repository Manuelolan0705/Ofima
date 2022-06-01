<?php 
	
	//define("BASE_URL", "http://localhost/ofima/");
	const BASE_URL = "http://localhost/ofima";


	//Zona horaria
	date_default_timezone_set('America/Mexico_City');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "db_ofima";//ofima
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "$";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Ofima";
	const EMAIL_REMITENTE = "no-reply@abelosh.com";
	const NOMBRE_EMPESA = "Ofima";
    const WEB_EMPRESA = "http://dominioolan.ga/";
    const EMAIL_EMPRESA="ofima020422@gmail.com";
    const EMAIL_EMPRESA_CONTRA="Ofima#0204";
	const LEMA_DE_EMPESA = "Oficina en tus manos";
 ?>