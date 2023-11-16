<!-- by Bendry Lakburlawal - 121140111  -->
<!-- Praktikum Pemrograman Web RB - Tugas 7 -->

<?php

class Manusia{ //membuat kelas dengan nama Manusia
    public $nama;
    public $nik;
    public $usia;
    public $status;
    //class ini memiliki 4 variabel dengan status publik --> yang artinya dapat diakses secara langsung oleh class lain

    //fungsi dibawah ini berfungsi untuk menginisialisasi properti objek saat objek dibuat.
    public function __construct($nama, $nik, $usia, $status){
        $this->nama = $nama;
        $this->nik = $nik;
        $this->usia = $usia;
        $this->status = $status;
    }

    //fungsi dibawah ini berfungsi untuk menampilkan informasi mengenai data diri
    public function dataDiri(){
        echo "Nama   : ".$this->nama."<br>";
        echo "NIK    : ".$this->nik."<br>";
        echo "Usia   : ".$this->usia."<br>";
        echo "Status : ".$this->status."<br><br>";
    }

    //bagian ini berfungsi untuk menghapus objek2 yang ditampilkan sebelumnya
    // public function __destruct(){
    //     echo "Objek dihapus <br>";
    // }
}

//$Bendry dan $Agus adalah semua objek2 yang dibuat berdasarkan atribut yang ada pada class Manusia
$Bendry = new Manusia("Bendry Lakburlawal","12345678910",22, "Mahasiswa");
$Agus = new Manusia("Agus Malik", "083928924894", 30, "Pekerja");

//Bagian ini berfungsi untuk memanggil fungsi data diri berdasarkan objek2 yang telah dibuat dengan isinya
$Bendry->dataDiri();
$Agus->dataDiri();

//class Hulk merupakan class turunan/child dari class Manusia yang berfungsi sebagai parent
class Hulk extends Manusia {
    public $warna; //memiliki variabelnya sendiri, yaitu warna dengan status publik

    //bagian ini berfungsi menginisialisasi atribut objek.
    public function __construct($nama, $nik, $usia, $status, $warna) {
        parent::__construct($nama, $nik, $usia, $status); //parent ini diambil dari class Manusia.
        $this->warna = $warna; //hanya warna yang tidak dimiliki oleh class Manusia, maka bagian ini membuat atribut yang baru
    }

    //bagian ini untuk menampilkan informasi mengenai data diri baru berdasarkan class Hulk
    public function infoAlien() {
        echo "Nama   : ".$this->nama."<br>";
        echo "NIK    : ".$this->nik."<br>";
        echo "Usia   : ".$this->usia."<br>";
        echo "Status : ".$this->status."<br>";
        echo "Warna  : ".$this->warna."<br><br>";
    }
}

//objek alien1 merupakan objek yang dibuat dari class Hulk dengan atribut yang dimiliki oleh class Hulk
$alien1 = new Hulk("Umar", "353534434334", 100, "Ajaib", "Merah");

//Bagian ini berfungsi untuk memanggil fungsi data diri berdasarkan objek2 yang telah dibuat dengan isinya
$alien1->infoAlien();
$alien1->dataDiri();

class Bendry{ //membuat class baru dengan nama Bendry
    public $Nama;
    private $NIK; //variabel baru dengan status privat, yang artinya tidak dapat diakses secara langsung oleh kelas yang lain tanpa enkapsulasi
    
    //bagian ini berfungsi menginisialisasi atribut objek.
    public function __construct($NIK, $Nama) {
        $this->setNIK($NIK); //mengambil dari fungsi setNIK yang ada di bawah ini.
        $this->Nama = $Nama;
    }

    //membuat fungsi setNIK. Bagian ini juga berfungsi untuk mengenkapsulasi
    public function setNIK($NIK) {
        if(is_string($NIK) && strlen($NIK) > 0) { //apabila NIK adalah string dan panjang string lebih dari 0 maka menginisialisasi value NIK
            $this->NIK = $NIK;
        }else{
            //apabila tidak, maka menampilkan sebuah argumen untuk invalid value.
            throw new InvalidArgumentException("NIK harus diisi");
        }
    }

    //fungsi yang digunakan untuk mengambil value NIK yang telah di inisialisasi pada __construct
    public function get_NIK() {
        return "NIK ".$this->Nama.": ".$this->NIK."<br>";
    }
}

//bagian ini untuk try atau percobaan, apabila kondisi pada line ke 82 terpenuhi, maka bagian try ini akan berjalan sempurna
try{
    $Aku = new Bendry("123", "Bendry");

    $Aku->setNIK("8103010112010001");

    echo $Aku->get_NIK();
}catch(InvalidArgumentException $e){ //apabila try tidak berhasil, maka catch akan menampilkan status error bagi pengguna.
    echo "Error!!! ".$e->getMessage()."<br>";
}

// Ini bagian regex
// bagian ini adalah hanya kalimat biasa dengan style yang telah dibuat pada baris di bawah ini.
$html = '<p style="font-size:30px";>Nama saya <span style="color:red;">Bendry</span> dengan NIM <span style="color:blue;">121140111</span></p>';

$regex = '/<span style="color:\s*([^"]+)">/'; //mencocokan warna dan penyimpanan
$regexlg = '/<p style="font-size:\s*([^"]+)">/'; //mencocokan ukuran font

$ubahwarna = 'green'; //inisialisasi warna

//membuat variabel baru yang berisi preg_replace yang fungsinya adalah menggantikan isi dari tag yang telah ditentukan pada regex
//bagian ini untuk mengganti warna
$newHtml = preg_replace($regex, '<span style="color: '.$ubahwarna. ';">', $html);
echo $newHtml;
//bagian ini untuk mengganti ukuran font
$newHtml = preg_replace($regex, '<p style="font-size: 12px;">', $html);
echo $newHtml;

?>