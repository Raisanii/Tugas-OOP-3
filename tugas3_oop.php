<?php 

class Produk {

	public $judul, 
		   $penulis,
		   $harga;
	public function __construct( $judul = "judul", $penulis = "penulis", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->harga = $harga;
	}
	public function getLabel(){
		return "$this->judul, $this->penulis, $this->harga";
	}

}


$produk1 = new Produk("Hujan Bulan Juni", "Sapardi Djoo Damono", 99000);

$produk2 = new Produk("Nebula", "Tere Liye", 990000);

	echo "Buku 1 : " . $produk1->getlabel();
	echo "<br>";
	echo "Buku2 : " . $produk2->getlabel();


 ?>