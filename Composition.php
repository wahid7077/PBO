// Nama : WAHID AMIN SAMSUDIN //
// Nim : 20051397077 //
// Kelas : D4 Manajemen Informatika / 2020A //
<!-- INHERITANCE - composisi -->

<?php
class Kendaraan{
 
  // Mendeklarasikan method dan member
  // INI MERUPAKAN SCRIPT IMPLEMENTASI COMPOSISI

    private String $warna;
    private int $roda;

        public function fiturKendaraan():void{
            echo "Fitur Kendaraan : " . "<br>";
            echo "Warna Kendaraan = ". $this->warna . "<br>" . " jumlah roda= " . $this->roda . "<br>";
        }
 
        //set method
        public function setWarna(String $warna):void{
            $this->warna = $warna;
        }

        public function getWarna(){
        return $this->warna;
      }
 
        public function setRoda(int $roda):void{
            $this->roda = $roda;
        }

        public function getRoda(){
          return $this->roda;
      }
}

class BMW extends Kendaraan{

    //Mewarisi semua properti dari class Kendaraan

    public function setStart():void {
        $mesin = new MesinBMW();//komposisi
        $mesin->start();
    }

}

class MesinBMW{

  public function start():void {
    echo "Mesin mobil dinyalakan!";
  }

  public function stop():void{
    echo "Mesin mobil dimatikan!";

  }

}


// class TestKomposisi{
//   public function cetak($Kendaraan) {
//     $str = "{$Kendaraan->getWarna()} | {$Kendaraan->getRoda()} | {$Kendaraan->fiturKendaraan()}";
//       return $str;

//   }

// }

$kendaraan = new Kendaraan();
$kendaraan->setWarna("Merah");
$kendaraan->setRoda(4);
$kendaraan->fiturKendaraan();

$bmw = new BMW();
$bmw->setStart();

echo "<br>". "<br>". "-. HASIL OUTPUT! .-" . "<br>";
echo "Warna : ". $kendaraan->getWarna() . "<br>"."Memiliki roda :" . $kendaraan->getRoda();
echo "<br>";
echo $bmw->setStart();