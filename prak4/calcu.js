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

alert(`Bilangan Ganjil: ${ganjil}\nBilangan Genap: ${genap}`);