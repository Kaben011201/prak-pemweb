// by Bendry Lakburlawal - 121140111
// Praktikum Pemrograman Web RB - Tugas 5

// Inisialisasi variabel calcu dengan value ''.
let calcu = '';

//inisialisasi variabel resultOfCal menggunankan DOM yang terkoneksi dengan class js-result
let resultOfCal = document.querySelector('.js-result');
let cek = false; //inisialisasi variabel cek dengan value false untuk mengecek hasil perhitungan yang bernilai 0

//fungsi ini digunakan untuk menulis nilai yang mau dihitung pada kalkulator
function updateCalculation(event){ //event adalah parameter yang akan memberikan nilai yang ingin dihitung
                                    // seperti 1, 2, 3, +, -, dst.
    if(cek == true){ //untuk mengecek ketika nilai cek adalah true berarti nilai calcu adalah 0
                     // maka nilai calcu diubah kembali menjadi '' dan cek diubah menjadi false.
        calcu = '';
        cek = false;
    }
    calcu += event; // untuk menambah angka-angka yang mau dihitung
    resultOfCal.innerHTML = `${calcu}`; //menampilkan angka2 yang akan dihitung
}

//fungsi ini untuk menghitung nilai-nilai yang dimasukkan.
function result(){ 
    calcu= eval(calcu); //eval adalah fungsi yang melakukan operasi perhitungan
    if(calcu == '0'){   //ketika hasil perhitungan adalah 0, nilai cek diubah menjadi true.
        cek = true;
    }
    resultOfCal.innerHTML = `${calcu}`; //menampilkan hasil perhitungan
}

//fungsi ini untuk menghapus angka-angka hasil perhitungan yang ditampilkan.
function clearNum(){
    calcu='';
    resultOfCal.innerHTML = `${'0'}`;
}
