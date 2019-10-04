<?php 
// define('NAMA', 'Rhexy Ilham');
// echo NAMA;
// echo "<br>";
// const UMUR = 20;
// echo UMUR;
// class Coba{
// 	const NAMA = 'Rhexy';
// }
// echo Coba::NAMA;
// echo __LINE__;
// FUNCTION coba(){
// 	return __FUNCTION__;
// }
// echo coba();
class Coba {
	public $kelas =__CLASS__;
}
$obj = new Coba;
echo $obj->kelas;
 ?>