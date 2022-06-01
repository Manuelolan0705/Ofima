<?php 
class Vale extends Controllers{
	public function __construct()
	{
		parent::__construct();
					session_start();
			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
			}
		
		getPermisos(4);
	}

	 public function Vale()
	 {
		if(empty($_SESSION['permisosMod']['r'])){
		header("Location:".base_url().'/dashboard'); 
			}
		$data['page_tag'] = "Vales";
		$data['page_title'] = "Vales <small>Ofima</small>";
		$data['page_name'] = "vales";
		$data['page_functions_js'] = "functions_vale.js";
		$this->views->getView($this,"vale",$data);
	}

	public function getVale (){
	$arrData = $this ->model->selectVales();
	//dep($arrData);
	echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
	die();
	}

	public function getVales_x_Usuario(int $idusuario){
		$idusuario = intval($idusuario);
		if($idusuario > 0)
		{
			$arrData = $this->model->getVales_x_Usuario($idusuario);
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
				//dep($arrData);
		}
		die();
	}

	public function setVale (){
	//dep($_POST);

	  $intIdv = intval($_POST['txtIdentificacion']);
      $doubleMon =  floatval($_POST['listMon']);
      $doublePa = floatval($_POST['txtPago']);
      $intQui = intval($_POST['listQuin']);


		switch ($intQui) {
		case $intQui == 6 :
		if($doubleMon == 1000){
			$doublePa= 227;
		}else if($doubleMon == 1500){
			$doublePa= 340.50;
		}else if($doubleMon == 2000){
			$doublePa=454;
		}else if($doubleMon == 2500){
			$doublePa= 567.50;
		}else if($doubleMon == 3000){
			$doublePa= 681;
		}else if($doubleMon == 3500){
			$doublePa= 794.50;
		}else if($doubleMon == 4000){
			$doublePa= 908.0;
		}else{
				$doublePa=1111;
		}
		break;
		case $intQui == 8:
		if($doubleMon == 1000){
			$doublePa= 175;
		}else if($doubleMon == 1500){
			$doublePa= 262.50;
		}else if($doubleMon == 2000){
			$doublePa=350;
		}else if($doubleMon == 2500){
			$doublePa= 437.50;
		}else if($doubleMon == 3000){
			$doublePa= 525;
		}else if($doubleMon == 3500){
			$doublePa= 612.50;
		}else if($doubleMon == 4000){
			$doublePa= 700;
		}else if($doubleMon == 4500){
			$doublePa= 787;
		}else if($doubleMon == 5000){
			$doublePa= 875;
		}else if($doubleMon == 5500){
			$doublePa= 962.50;
		}else if($doubleMon == 6000){
			$doublePa= 1050;
		}else{
			$doublePa=2222;
		}
		break; 
		case $intQui == 10:
		if($doubleMon == 1000){
			$doublePa= 145;
		}else if($doubleMon == 1500){
			$doublePa= 217.50;
		}else if($doubleMon == 2000){
			$doublePa= 290;
		}else if($doubleMon == 2500){
			$doublePa= 362.50;
		}else if($doubleMon == 3000){
			$doublePa= 435;
		}else if($doubleMon == 3500){
			$doublePa= 507.50;
		}else if($doubleMon == 4000){
			$doublePa= 580;
		}else if($doubleMon == 4500){
			$doublePa=652.50; 
		}else if($doubleMon == 5000){
			$doublePa= 725;
		}else if($doubleMon == 5500){
			$doublePa= 797.50;
		}else if($doubleMon == 6000){
			$doublePa= 870;
		}else{
			$doublePa=3333;
		}
		break;
		case $intQui == 12:
		if($doubleMon == 1000){
			$doublePa= 124;
		}else if($doubleMon == 1500){
			$doublePa= 186;
		}else if($doubleMon == 2000){
			$doublePa=248;
		}else if($doubleMon == 2500){
			$doublePa= 310;
		}else if($doubleMon == 3000){
			$doublePa= 372;
		}else if($doubleMon == 3500){
			$doublePa= 434;
		}else if($doubleMon == 4000){
			$doublePa= 496;
		}else if($doubleMon == 4500){
			$doublePa= 558;
		}else if($doubleMon == 5000){
			$doublePa= 620;
		}else if($doubleMon == 5500){
			$doublePa= 682;
		}else if($doubleMon == 6000){
			$doublePa= 744;
		}else{
			$doublePa=4444;
		}
		break;
		case $intQui == 14:
		if($doubleMon == 1000){
			$doublePa= 111;
		}else if($doubleMon == 1500){
			$doublePa= 166.50;
		}else if($doubleMon == 2000){
			$doublePa= 222;
		}else if($doubleMon == 2500){
			$doublePa= 277.50;
		}else if($doubleMon == 3000){
			$doublePa= 333;
		}else if($doubleMon == 3500){
			$doublePa= 388.50;
		}else if($doubleMon == 4000){
			$doublePa= 444;
		}else if($doubleMon == 4500){
			$doublePa= 499.50;
		}else if($doubleMon == 5000){
			$doublePa= 555;
		}else if($doubleMon == 5500){
			$doublePa= 610.50;
		}else if($doubleMon == 6000){
			$doublePa= 666;
		}else{
			$doublePa=5555;
		}
		break;
		default:
		            swal("Atención", "Itente luego." , "error");
		            return false;
		}


       $request_vale = $this->model->insertVale($intIdv, $doubleMon,$doublePa,$intQui);

       			if($request_vale > 0 )
			{
				$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
				
			}else if($request_vale == 'exist'){
				
				$arrResponse = array('status' => false, 'msg' => '¡Atención! El Cliente ya saco un vale solo es uno por persona.');
			}else{
				$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
			}
			echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			die();

		//	dep($_POST);
		//	dep($arrResponse);
		//	dep($request_vale);
	}


}

 ?>