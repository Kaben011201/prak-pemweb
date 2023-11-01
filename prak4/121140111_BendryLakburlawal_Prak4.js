//by Bendry Lakburlawal - 121140111
//Praktikum Pemrograman Web RB - Tugas 4

let bilangan=90;
let ganjil=0;
let genap=0;

for(let i=1; i<=bilangan; i++){
    if(i%2==0){
        genap++;
    }else{
        ganjil++;
    }
}
console.log(`Bilangan Ganjil: ${ganjil}\nBilangan Genap: ${genap}`);
alert(`Bilangan Ganjil: ${ganjil}\nBilangan Genap: ${genap}`);