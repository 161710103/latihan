<?php
   class robot {

   public $suara;
   public $berat;

  public function set_suara ($suara)
   {
   	$this->suara=$suara;
   }
   public function get_suara()
   {
   	return $this->suara;
   }

   public function set_berat ($berat)
   {
   	$this->berat=$berat;
   }
   public function get_berat ()
   {
   	return $this->berat;
   }
}

 $robot1 = new robot ;
 $robot1->set_suara("tat tet tot");
  echo "suara robot : " .$robot1-> get_suara(). '<br>';


$robot1->set_berat(10);
   echo "berat robot : " .$robot1-> get_berat()."kg". '<br>';
?>