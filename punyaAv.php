<?php
//contoh class
 class rumah{
     // contoh property
     public $namaRumah;
     public $noRumah;
     public $luasPetak;
     // contoh method
     public function getCetak(){
         return "$this->namaRumah, $this->noRumah, $this->luasPetak";
     }
 }

 // contoh objek nya
 $rumah1 = new rumah();
 $rumah1->namaRumah="Joglo";
 $rumah1->noRumah="21";
 $rumah1->luasPetak="60 M";
 var_dump($rumah1);

 ?>
