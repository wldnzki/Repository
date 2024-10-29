<?php
class Produk {
    // Parameter/properti kelas
    public $nama;
    public $harga;
    public $stok;

    // Konstruktor untuk menginisialisasi parameter
    public function __construct($nama, $harga, $stok) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    // Metode untuk menampilkan informasi produk
    public function getInfoProduk() {
        return "Nama Produk: $this->nama, Harga: Rp $this->harga, Stok: $this->stok";
    }

    // Metode untuk menambahkan stok
    public function tambahStok($jumlah) {
        $this->stok += $jumlah;
    }

    // Metode untuk mengurangi stok
    public function kurangiStok($jumlah) {
        if ($this->stok >= $jumlah) {
            $this->stok -= $jumlah;
        } else {
            echo "Stok tidak cukup!";
        }
    }
}

// Membuat objek dari kelas Produk
$produk1 = new Produk("Laptop", 5000000, 10);

// Menggunakan metode getInfoProduk untuk menampilkan informasi produk
echo $produk1->getInfoProduk(); // Output: Nama Produk: Laptop, Harga: Rp 5000000, Stok: 10

// Menambah stok produk
$produk1->tambahStok(5);
echo $produk1->getInfoProduk(); // Output: Nama Produk: Laptop, Harga: Rp 5000000, Stok: 15

// Mengurangi stok produk
$produk1->kurangiStok(3);
echo $produk1->getInfoProduk(); // Output: Nama Produk: Laptop, Harga: Rp 5000000, Stok: 12
?>
