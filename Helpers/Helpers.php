<?php 
require "PHPMailer/Exception.php";
require "PHPMailer/PHPMailer.php";
require "PHPMailer/SMTP.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
	//Retorla la url del proyecto
	function base_url()
	{
		return BASE_URL;
	}
    
    function media()
    {
        return BASE_URL."/Assets";
    }
    function headerAdmin($data="")
    {
        $view_header = "Views/Template/header_admin.php";
        require_once ($view_header);
    }
    function footerAdmin($data="")
    {
        $view_footer = "Views/Template/footer_admin.php";
        require_once ($view_footer);        
    }
        function headerSucursal($data="")
    {
        $view_header = "Views/Template/header_sucursal.php";
        require_once ($view_header);
    }
    function footerSucursal($data="")
    {
        $view_footer = "Views/Template/footer_sucursal.php";
        require_once ($view_footer);        
    }
    
	//Muestra información formateada
	function dep($data)
    {
        $format  = print_r('<pre>');
        $format .= print_r($data);
        $format .= print_r('</pre>');
        return $format;
    }
        function getModal(string $nameModal, $data)
    {
        $view_modal = "Views/Template/Modals/{$nameModal}.php";
        require_once $view_modal;        
    }

        //Envio de correos
  /*  function sendEmail($data,$template)
    {
        $asunto = $data['asunto']; // los datos del array que recibe del login
        $emailDestino = $data['email'];// el email al que se mandara
        $empresa = NOMBRE_REMITENTE;  // Nombre de la empresa 
        $remitente = EMAIL_REMITENTE;// Email de la empresa
        //ENVIO DE CORREO  // para no caer en spam
        $de = "MIME-Version: 1.0\r\n";
        $de .= "Content-type: text/html; charset=UTF-8\r\n";
        $de .= "From: {$empresa} <{$remitente}>\r\n";
        ob_start(); //cargar en memoria un archivo que queramos osea el de abjo
        require_once("Views/Template/Email/".$template.".php");
        $mensaje = ob_get_clean(); //obtenemos el archivo que se cargo osea el de arriba
        $send = mail($emailDestino, $asunto, $mensaje, $de);  // activar cuando este en la web
       return $send;
    }
*/
    //Envio de correos
 function sendEmail($data,$template)
    {

                $oMail= new PHPMailer();
                $oMail->isSMTP();
                $oMail->Host="smtp.gmail.com";
                $oMail->Port=587;
                $oMail->SMTPSecure="tls";
                $oMail->SMTPAuth=true;
                $oMail->Username=EMAIL_EMPRESA;//la que mandaras
                $oMail->Password=EMAIL_EMPRESA_CONTRA;// la contra del quien mandara
                $emailDestino = $data['email'];
                $oMail->setFrom(EMAIL_EMPRESA,"Actualizacion de su clave");
                $oMail->addAddress($emailDestino,"LA OTRA CUENTA");//cuenta que recibe
                $oMail->Subject="Ofima  Actualizacion";
                 ob_start();
                require_once("Views/Template/Email/".$template.".php");
                $mensaje = ob_get_clean();
                $oMail->msgHTML($mensaje);// mensaje 
                if(!$oMail->send()){
                    echo $oMail->ErrorInfo;  
                }
    }
    function getPermisos(int $idmodulo){
        require_once ("Models/PermisosModel.php"); 
        $objPermisos = new PermisosModel();
        $idrol = $_SESSION['userData']['idrol'];
        $arrPermisos = $objPermisos->permisosModulo($idrol);
        $permisos = '';
        $permisosMod = '';
        if(count($arrPermisos) > 0 ){
            $permisos = $arrPermisos;
            $permisosMod = isset($arrPermisos[$idmodulo]) ? $arrPermisos[$idmodulo] : "";
        }
        $_SESSION['permisos'] = $permisos;
        $_SESSION['permisosMod'] = $permisosMod;
    }

    //Elimina exceso de espacios entre palabras
    function strClean($strCadena){
        $string = preg_replace(['/\s+/','/^\s|\s$/'],[' ',''], $strCadena);
        $string = trim($string); //Elimina espacios en blanco al inicio y al final
        $string = stripslashes($string); // Elimina las \ invertidas
        $string = str_ireplace("<script>","",$string);
        $string = str_ireplace("</script>","",$string);
        $string = str_ireplace("<script src>","",$string);
        $string = str_ireplace("<script type=>","",$string);
        $string = str_ireplace("SELECT * FROM","",$string);
        $string = str_ireplace("DELETE FROM","",$string);
        $string = str_ireplace("INSERT INTO","",$string);
        $string = str_ireplace("SELECT COUNT(*) FROM","",$string);
        $string = str_ireplace("DROP TABLE","",$string);
        $string = str_ireplace("OR '1'='1","",$string);
        $string = str_ireplace('OR "1"="1"',"",$string);
        $string = str_ireplace('OR ´1´=´1´',"",$string);
        $string = str_ireplace("is NULL; --","",$string);
        $string = str_ireplace("is NULL; --","",$string);
        $string = str_ireplace("LIKE '","",$string);
        $string = str_ireplace('LIKE "',"",$string);
        $string = str_ireplace("LIKE ´","",$string);
        $string = str_ireplace("OR 'a'='a","",$string);
        $string = str_ireplace('OR "a"="a',"",$string);
        $string = str_ireplace("OR ´a´=´a","",$string);
        $string = str_ireplace("OR ´a´=´a","",$string);
        $string = str_ireplace("--","",$string);
        $string = str_ireplace("^","",$string);
        $string = str_ireplace("[","",$string);
        $string = str_ireplace("]","",$string);
        $string = str_ireplace("==","",$string);
        return $string;
    }
    //Genera una contraseña de 10 caracteres para generar una contra a los usurios 
    //fiiiii ya te la sabes chuquitooo 
	function passGenerator($length = 10)
    {
        $pass = "";
        $longitudPass=$length;
        $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
        $longitudCadena=strlen($cadena);

        for($i=1; $i<=$longitudPass; $i++)
        {
            $pos = rand(0,$longitudCadena-1);
            $pass .= substr($cadena,$pos,1);
        }
        return $pass;
    }

    //Genera un token
    function token()
    {
        $r1 = bin2hex(random_bytes(10));
        $r2 = bin2hex(random_bytes(10));
        $r3 = bin2hex(random_bytes(10));
        $r4 = bin2hex(random_bytes(10));
        $token = $r1.'-'.$r2.'-'.$r3.'-'.$r4;
        return $token;
    }
    //Formato para valores monetarios
    function formatMoney($cantidad){
        $cantidad = number_format($cantidad,2,SPD,SPM);
        return $cantidad;
    }
    

 ?>