<?php
class Buku 
{
    public $id;
    public $judul;
    public $penulis;
    public $penerbit;
    public $tahun_terbit;
    public $isbn;

    public function pinjam()
    {
        $tanggal_kembali = mktime(0,0,0,date("n"),date(";")+5,date("Y"));
        return $tanggal_kembali;
    }

    public function setId($id_buku){
        $this->id = $id_buku;
    }

    public function getId(){
        return $this->id;
    }

    public function setJudul($judul_buku){
        $this->judul = $judul_buku;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis($penulis_buku){
        $this->penulis = $penulis_buku;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit_buku){
        $this->penerbit = $penerbit_buku;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setTahunterbit($tahunterbit_buku){
        $this->tahun_terbit = $tahunterbit_buku;
    }

    public function getTahunterbit(){
        return $this->tahun_terbit;
    }

    public function setIsbn($isbn_buku){
        $this->isbn = $isbn_buku;
    }

    public function getIsbn(){
        return $this->isbn;
    }

}

$buku_saya = new Buku();
$buku_saya->setId("242");
$buku_saya->setJudul("The Hobbit");
$buku_saya->setPenulis("J.R.R. Tolkien");
$buku_saya->setPenerbit("Gramedia Pustaka Utama");
$buku_saya->setTahunterbit(2002);
$buku_saya->setIsbn(9789792286335);
$pinjam_buku_saya = $buku_saya->pinjam();
echo "ID Buku = ",$buku_saya->getId();
echo "Judul Buku = ",$buku_saya->getJudul();
echo "Penulis Buku = ",$buku_saya->getPenulis();
echo "Penerbit Buku = ",$buku_saya->getPenerbit();
echo "Tahun Terbit Buku = ",$buku_saya->getTahunterbit();
echo "ISBN Buku = ",$buku_saya->getIsbn();