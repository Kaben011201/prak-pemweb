// by Bendry Lakburlawal - 121140111
// Praktikum Pemrograman Web RB - Tugas 5

let calcu = '';
let resultOfCal = document.querySelector('.js-result');
let zero = document.querySelector('.js');
let cek = false;

function updateCalculation(event){
    if(cek == true){
        calcu = '';
        cek = false;
    }
    calcu += event;
    resultOfCal.innerHTML = `${calcu}`;
}

function result(){
    calcu= eval(calcu);
    if(calcu == '0'){
        cek = true;
    }
    resultOfCal.innerHTML = `${calcu}`;
}

function clearNum(){
    calcu='';
    resultOfCal.innerHTML = `${'0'}`;
}
