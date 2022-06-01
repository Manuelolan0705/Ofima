<?php 

	class UsuariosModel extends Mysql
	{
		private $intIdUsuario;
		private $strIndentificacion;
		private $strNombre;
		private $strApellidoma;
		private $strApellidopa;
		private $intTelefono;
		private $strEmail;
		private $strPassword;
		private $strToken;
		private $intTipoId;
		private $intStatus;

		public function __construct()
		{
			parent::__construct();
		}	

		public function insertUsuario(string $indentificacion, string $nombre, string $apellidom,string $apellidop, int $telefono, string $email, string $password, int $tipoid, int $status){
	$return = "";
			$this->strIndentificacion = $indentificacion;
			$this->strNombre = $nombre;
			$this->strApellidopa = $apellidop;
			$this->strApellidoma = $apellidom;
			$this->intTelefono = $telefono;
			$this->strEmail = $email;
			$this->strPassword = $password;
			$this->intTipoId = $tipoid;
			$this->intStatus = $status;
			$return = 0;

			$sql = "SELECT * FROM persona WHERE 
					email_user = '{$this->strEmail}' or indentificacion = '{$this->strIndentificacion}' ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$query_insert  = "INSERT INTO persona(indentificacion,nombres,appat,apmat,telefono,email_user,password,rolid,status) 
								  VALUES(?,?,?,?,?,?,?,?,?)";
	        	$arrData = array($this->strIndentificacion,
        						$this->strNombre,
        						$this->strApellidopa,
        						$this->strApellidoma,
        						$this->intTelefono,
        						$this->strEmail,
        						$this->strPassword,
        						$this->intTipoId,
        						$this->intStatus);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = "exist";
			}
	        return $return;
		}

	public function selectUsuarios()
		{
			$whereAdmin = "";
			if($_SESSION['idUser'] != 1 ){ // validacion no es el usuario superadmidn
				$whereAdmin = " and p.idpersona != 1 ";  // filtracion de no traer el superadmidn   
			}
			$sql = "SELECT p.idpersona,p.indentificacion,p.nombres,p.appat,p.apmat ,p.telefono,p.email_user,p.status,r.idrol,r.nombrerol
			 FROM persona p
			 INNER JOIN rol r ON p.rolid = r.idrol 
			 WHERE p.status != 0".$whereAdmin;
			 $request = $this->select_all($sql);
			 return $request;

		}
	public function selectUsuario(int $idpersona){
			$this->intIdUsuario = $idpersona;
			$sql = "SELECT p.idpersona,p.indentificacion,p.nombres,p.appat,p.apmat ,p.telefono,p.email_user,p.nit,p.direccion,r.idrol,r.nombrerol,p.status, DATE_FORMAT(p.datecreated, '%d-%m-%Y') as fechaRegistro 
					FROM persona p
					INNER JOIN rol r
					ON p.rolid = r.idrol
					WHERE p.idpersona = $this->intIdUsuario";
					//echo $sql; exit;
			$request = $this->select($sql);
			return $request;
		}
		
	public function updateUsuario(int $idUsuario, string $identificacion, string $nombre, string $apellidop, string $apellidom,int $telefono, string $email, string $password, int $tipoid, int $status){

			$this->intIdUsuario = $idUsuario;
			$this->strIndentificacion = $identificacion;
			$this->strNombre = $nombre;
			$this->strApellidoma = $apellidom;
			$this->strApellidopa = $apellidop;
			$this->intTelefono = $telefono;
			$this->strEmail = $email;
			$this->strPassword = $password;
			$this->intTipoId = $tipoid;
			$this->intStatus = $status;

			$sql = "SELECT * FROM persona WHERE (email_user = '{$this->strEmail}' AND idpersona != $this->intIdUsuario)
										  OR (indentificacion = '{$this->strIndentificacion}' AND idpersona != $this->intIdUsuario) ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				if($this->strPassword  != "")
				{
					$sql = "UPDATE persona SET indentificacion=?, nombres=?, appat=?,apmat=?, telefono=?, email_user=?, password=?, rolid=?, status=? 
							WHERE idpersona = $this->intIdUsuario ";
					$arrData = array($this->strIndentificacion,
	        						$this->strNombre,
	        						$this->strApellidoma,
	        						$this->strApellidopa,
	        						$this->intTelefono,
	        						$this->strEmail,
	        						$this->strPassword,
	        						$this->intTipoId,
	        						$this->intStatus);
				}else{
					$sql = "UPDATE persona SET indentificacion=?, nombres=?, appat=?,apmat=?, telefono=?, email_user=?, rolid=?, status=? 
							WHERE idpersona = $this->intIdUsuario ";
					$arrData = array($this->strIndentificacion,
	        						$this->strNombre,
	        						$this->strApellidoma,
	        						$this->strApellidopa,
	        						$this->intTelefono,
	        						$this->strEmail,
	        						$this->intTipoId,
	        						$this->intStatus);
				}
				$request = $this->update($sql,$arrData);
			}else{
				$request = "exist";
			}
			return $request;
		
		}


	public function deleteUsuario(int $intIdpersona)
		{
			$this->intIdUsuario = $intIdpersona;
			$sql = "UPDATE persona SET status = ? WHERE idpersona = $this->intIdUsuario ";
			$arrData = array(0);
			$request = $this->update($sql,$arrData);
			return $request;
		}

	}
 ?>