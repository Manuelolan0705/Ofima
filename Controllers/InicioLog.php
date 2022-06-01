<?php 

class InicioLog extends Controllers {
  
  public function __construct()
  {
   parent::__construct();
}
    public function inicioLog()
    {
      $data['page_tag'] = NOMBRE_EMPESA;
      $data['page_title'] = NOMBRE_EMPESA;
      $data['page_name'] = "Ofima";
      $data['page_lema'] = LEMA_DE_EMPESA;
      $this->views->getView($this,"inicioLog",$data);
}

}



?>
