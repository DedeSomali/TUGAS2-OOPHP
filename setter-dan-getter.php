<?php 
// jualan produk
// komik 
// game
   
   // class
class produk {
	// property
  // visibility  private 
	private $judul ,
	        $penulis ,
	        $penerbit,
          $harga,
          $diskon = 0 ;
  // constructor
  public function __construct ($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
          // memanggil property
          $this->judul = $judul;
          $this->penulis = $penulis;
          $this->penerbit = $penerbit;
          $this->harga = $harga;
    
         }
  public function setJudul($judul){
    $this->judul = $judul;
  }
  public function getJudul(){
    return $this->judul;
  }
  public function setPenulis($penulis){
    $this->penulis = $penulis;
  }
  public function getPenulis(){
    return $this->penulis;
  }
  public function setPenerbit($penerbit){
    $this->penerbit = $penerbit;
  }
  public function getPenerbit(){
    return $this->penerbit;
  }
  public function setDiskon($diskon) {
    $this->diskon = $diskon;
  }
  public function getDiskon(){
    return $this->diskon;
  }
  
  public function setHarga($harga){
    $this->harga =$harga;
  } 
  public function getHarga(){
    return $this->harga - ($this->harga * $this->diskon / 100);
  }
	// method
	public function getlabel(){
	  return "$this->penulis, $this->penerbit";
	       }
  public function getInfoProduk(){
    $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga})";
          
    return $str;
         }
}
// class inheritance
class komik extends produk{
  public $jmlHalaman;
  public function __construct ($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,  $jmlHalaman = 0){
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->jmlHalaman = $jmlHalaman;
  }
  public function getInfoProduk (){
      $str = "komik : ". parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
      return $str;
  }
} 
class game extends produk{
  public $waktuMain;
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,  $waktuMain = 0){
    parent::__construct($judul, $penulis, $penerbit, $harga);
    
    $this->waktuMain = $waktuMain;
  }
 
  public function getInfoProduk (){
      $str = "game : ". parent::getInfoProduk() . " - {$this->waktuMain} jam.";
      return $str;
  }
} 
class CetakInfoProduk {
  public function cetak (produk $produk){
    $str = "{$produk->judul} | {$produk->getlabel()} (Rp. {$produk->harga})"; 
    return $str; 
  }
}
   // instansiasi
   $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0); 

    $produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50); 
  echo $produk1->getInfoProduk();
  echo "<br>";
  echo $produk2->getInfoProduk();
  echo "<hr>";
  
  $produk2->setDiskon(50);
  echo $produk2->getHarga();
  echo "<hr>";
  
  $produk1->setPenulis("Dede Yusup Somali");
  echo $produk1->getPenulis();
 ?>