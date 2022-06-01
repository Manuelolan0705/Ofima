<?php 

class ClientesModel extends Mysql
{
	private $intIdUsuario;
	private $strIdentificacion;
	private $strNombre;
	private $strApellido;
	private $intTelefono;
	private $strEmail;
	private $strPassword;
	private $strToken;
	private $intTipoId;
	private $intStatus;
	private $strDirFiscal;

	public function __construct()
	{
		parent::__construct();
	}	

	public function insertCliente(string $indentificacion, string $nombre, string $apellidop,string $apellidom, int $telefono, string $email, string $password, int $tipoid,string $dirFiscal){

		$this->strIdentificacion = $indentificacion;
		$this->strNombre = $nombre;
		$this->strApellidopa = $apellidop;
		$this->strApellidoma = $apellidom;
		$this->intTelefono = $telefono;
		$this->strEmail = $email;
		$this->strPassword = $password;
		$this->intTipoId = $tipoid;
		$this->strDirFiscal = $dirFiscal;
		//$intTipoId = 5;
		$return = 0;
		$sql = "SELECT * FROM persona WHERE 
				email_user = '{$this->strEmail}' or indentificacion = '{$this->strIdentificacion}' ";
		$request = $this->select_all($sql);

		if(empty($request))
		{
			$query_insert  = "INSERT INTO persona(indentificacion,nombres,appat,apmat,telefono,email_user,password,rolid,direccion) 
								  VALUES(?,?,?,?,?,?,?,?,?)";
        	$arrData = array($this->strIdentificacion,
    					    $this->strNombre,
        					$this->strApellidopa,
        					$this->strApellidoma,
    						$this->intTelefono,
    						$this->strEmail,
    						$this->strPassword,
    						$this->intTipoId,
    						$this->strDirFiscal);
        	$request_insert = $this->insert($query_insert,$arrData);
        	$return = $request_insert;
		}else{
			$return = "exist";
		}
        return $return;
	}

public function selectClientes()
		{
			 $sql = "SELECT idpersona,indentificacion,nombres,appat,apmat ,telefono,email_user,status
			 FROM persona WHERE rolid=5 and status != 0";
			 
			 $request = $this->select_all($sql);
			 return $request;

		}

public function selectCliente(int $idpersona){
			$this->intIdUsuario = $idpersona;
			$sql = "SELECT idpersona,indentificacion,nombres,appat,apmat ,telefono,email_user,direccion,status, DATE_FORMAT(datecreated, '%d-%m-%Y') as fechaRegistro FROM persona WHERE idpersona =  $this->intIdUsuario and rolid =5";
					//echo $sql; exit;
			$request = $this->select($sql);
			return $request;
		}

public function updateCliente(int $idUsuario, string $identificacion, string $nombre, string $apellidop, string $apellidom,int $telefono, string $email, string $password, string $direccion){

			$this->intIdUsuario = $idUsuario;
			$this->strIndentificacion = $identificacion;
			$this->strNombre = $nombre;
			$this->strApellidoma = $apellidom;
			$this->strApellidopa = $apellidop;
			$this->intTelefono = $telefono;
			$this->strEmail = $email;
			$this->strPassword = $password;
			$this->strDirFiscal=$direccion;

			$sql = "SELECT * FROM persona WHERE (email_user = '{$this->strEmail}' AND idpersona != $this->intIdUsuario)
										  OR (indentificacion = '{$this->strIndentificacion}' AND idpersona != $this->intIdUsuario) ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				if($this->strPassword  != "")
				{
					$sql = "UPDATE persona SET indentificacion=?, nombres=?, appat=?,apmat=?, telefono=?, email_user=?, password=?, direccion=?
							WHERE idpersona = $this->intIdUsuario ";
					$arrData = array($this->strIndentificacion,
	        						$this->strNombre,
	        						$this->strApellidopa,
	        						$this->strApellidoma,
	        						$this->intTelefono,
	        						$this->strEmail,
	        						$this->strPassword,
	        						$this->strDirFiscal);
				}else{
					$sql = "UPDATE persona SET indentificacion=?, nombres=?, appat=?,apmat=?, telefono=?, email_user=?, direccion=?
							WHERE idpersona = $this->intIdUsuario ";
					$arrData = array($this->strIndentificacion,
	        						$this->strNombre,
	        						$this->strApellidopa,
	        						$this->strApellidoma,
	        						$this->intTelefono,
	        						$this->strEmail,
									$this->strDirFiscal);
				}
				$request = $this->update($sql,$arrData);
			}else{
				$request = "exist";
			}
			return $request;
		
		}
	public function deleteCliente(int $intIdpersona)
		{
			$this->intIdUsuario = $intIdpersona;
			$sql = "UPDATE persona SET status = ? WHERE idpersona = $this->intIdUsuario ";
			$arrData = array(0);
			$request = $this->update($sql,$arrData);
			return $request;
		}

}



 ?>