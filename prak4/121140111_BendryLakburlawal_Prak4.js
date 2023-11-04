//by Bendry Lakburlawal - 121140111
//Praktikum Pemrograman Web RB - Tugas 4

let bilangan=90; //inisialisasi variabel bilangan dengan value 90
                //sebagai bilangan yang akan dicek nilai ganjil dan genapnya.
let ganjil=0; //buat nilai ganjil awal adalah 0
let genap=0;   //buat nilai genap awal adalah 0

for(let i=1; i<=bilangan; i++){ //perulangan untuk mengecek dan menjumlahkan nilai ganjil genap yang ada pada angka 90
    if(i%2==0){ //untuk mengcek angka yang habis dibagi 2
        genap++;
    }else{ //untuk mengecek angka yang tidak habis dibagi 2
        ganjil++;
    }
}
console.log(`Bilangan Ganjil: ${ganjil}\nBilangan Genap: ${genap}`); //untuk menampilkan hasil pengecekan pada console
alert(`Bilangan Ganjil: ${ganjil}\nBilangan Genap: ${genap}`); //untuk pop up hasil pengecekan pada window.