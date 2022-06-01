<?php 

	class ValeModel extends Mysql
	{
		public $intIdentificacion;
		public $doublemonto;
		public $doublepago;
		public $intQuincena;


		public function __construct()
		{
			parent::__construct();
		}

	public function selectVales()
		{
			 $sql = "SELECT p.idpersona, p.indentificacion, p.nombres, p.appat, p.apmat,p.direccion, v.idvale , v.monto,v.pago, v.quincenas FROM persona p INNER JOIN vale v ON p.idpersona = v.personaid ";
			 
			 $request = $this->select_all($sql);
			 return $request;
		}

///identificacion es el id pero el id se hara el rfc 
		public function insertVale(int $idper , float  $mont, float  $pag, int $quin ){
			$return = "";
			$this->intperso = $idper;
			$this->doublemonto = $mont;
			$this->doublepago = $pag;
			$this->intQuincena = $quin;

			$sql = "SELECT * FROM vale WHERE personaid  = '{$this->intperso }' ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$query_insert  = "INSERT INTO vale (personaid, monto, pago, quincenas) VALUES(?,?,?,?)";
	        	$arrData = array($this->intperso, $this->doublemonto, $this->doublepago, $this->intQuincena);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = "exist";
			}
			return $return;
		}


		public function getVales_x_Usuario(int $UsuarioId){
			$this->intIdUsuario = $UsuarioId;
			$sql = "SELECT vale.idvale, vale.monto,vale.pago,vale.quincenas, persona.idpersona, persona.indentificacion, persona.nombres, persona.appat, persona.apmat  
					FROM vale 					
					INNER JOIN persona ON vale.personaid = persona.idpersona
					WHERE  vale.personaid =  $this->intIdUsuario";
			 
			$request = $this->select_all($sql);
			return $request;
		}

	}
 ?>
