// Nama : WAHID AMIN SAMSUDIN//
// Nim : 20051397077 //
// Kelas : D4 Manajemen Informatika / 2020A //
<!-- INHERITANCE - Asosiasi -->

<?php 

//berikut merupakan implementasi Asosiasi Inheritance!

 class Mahasiswa { 
    
    private String $nama; 
    private int $nomorID; 
    private Jurusan $jurusan; 
    
    public function IDnama(String $nama, int $nomorID){ 
        return $this->nama = $nama; 
                $this->nomorID = $nomorID; 
                $jurusan = null; 
    } 
    public function getNama() {
        return $this->nama; 
    } 
    
    public function setNama(String $nama):void {
        $this->nama = $nama; 
    } 
    
    public function getNomorID() { 
        return $this->nomorID; 
    } 
    
    public function setNomorID(int $nomorID):void { 
        $this->nomorID = $nomorID; 
    } 
    
    public function setJurusan(Jurusan $jurusan):void { 
        $this->jurusan = $jurusan; 
    } 
}

class Jurusan {
     public $namaJurusan; 
     private Mahasiswa $mahasiswa;  
     
     public function Jurusan(String $namaJurusan){ 
         $this->namaJurusan = $namaJurusan; 
         $mahasiswa = null; 
     } 
     public function setMahasiswa(Mahasiswa $mahasiswa):void { 
        $this->mahasiswa = $mahasiswa; 
     } 
     
     public function getNamaJurusan() { 
         return $this->namaJurusan; 
     } 
     
     public function setNamaJurusan(String $namaJurusan):void { 
         $this->namaJurusan = $namaJurusan; 
     } 
 }

// class TestAsosiasi { 
//     public static function main() { 
//     } 
// }

$mahasiswa = new Mahasiswa(); 
$jurusan = new Jurusan();
$mahasiswa->setNama("hello");
$jurusan->setNamaJurusan("MANAJEMEN"); 
$mahasiswa->setNama('Yaya');
$mahasiswa->setNomorID(1234);


echo "<br>". "<br>". "-. HASIL OUTPUT! .-" . "<br>";
echo "Nama: " . $mahasiswa->getNama() ."<br>". "ID: " . $mahasiswa->getNomorID()  ."<br>" . "Jurusan: " . $jurusan->getNamaJurusan();