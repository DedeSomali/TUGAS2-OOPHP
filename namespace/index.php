
<?php 
 require_once 'App/init.php';
//  $produk1 = new komik("naruto", "massashi kishimoto", "shonen jump" ,30000 , 100);
//   $produk2 = new game("uncharted", "neil drackman", "sony computer", 25000 , 50);
 
//   $cetakProduk = new CetakInfoProduk();
//   $cetakProduk->tambahProduk($produk1);
//   $cetakProduk->tambahProduk($produk2);
//   echo $cetakProduk->cetak();
 
//   echo"<hr>";
  use App\Service\User as ServiceUser;
  use App\Produk\User as ProdukUser;
  
  new ServiceUser();
  echo "<br>";
  new ProdukUser();
