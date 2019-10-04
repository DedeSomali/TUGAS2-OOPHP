<?php
    class Produk{

        //property = variabel yang memiliki visibility
        Public      $judul,
                    $penulis,
                    $penerbit, 
                    $harga;

        public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
            //method yang pertama kali di jalankan ketika objek pertama kali dibuat
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;


        }

        public function cetak(){
            $str = "{$this->judul} | {$this->penulis} | {$this->penerbit} = (Rp.{$this->harga})";
            return $str;
        }

    }

    class komik extends Produk{
        private $halaman;

            public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,$halaman = 0){
                
                parent::__construct( $judul, $penulis, $penerbit , $harga);
                $this->halaman = $halaman;
            }

        public function cetak(){
            
            $str = "Komik : " . parent::cetak() . " - {$this->halaman} halaman.";
            return $str;
        }
    }


    class game extends Produk{
        private $main;

            public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,$main = 0){
                
                parent::__construct( $judul, $penulis, $penerbit , $harga); 
                $this->main = $main;
            }

       public function cetak(){
        
        $str = "Game : " . parent::cetak() . " ~ {$this->main} Jam.";
        return $str;
       }
    }
    
    //-----------------------------------------------------------------------------------
    //objek yang dibuat 
    $produk1 = new komik("Kimi No Nawa","Makoto Shinkai","Comix Wave",200000,100); 
    echo $produk1->cetak();
    echo "<hr>";
    $produk2 = new game("Apex Legend","Seseorang Di Ubisoft","Ubisoft","Free","unlimited");
    echo $produk2->cetak();
    echo "<hr>";
    //-----------------------------------------------------------------------------------
    //manggil output berupa variabel atau property yang telah dibuat objeknya dengan method
    //$variabel_objek->method()

   /* $info1 = new komik();
    echo $info1->cetak($produk1);
    echo "<hr>";
    $info2 = new game();
    echo $info2->cetak($produk2);
    echo "<hr>";*/
    
?>