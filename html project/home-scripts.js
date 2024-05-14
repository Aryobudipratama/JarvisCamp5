//alert('hello') muncul di awal page atas
//console.log muncul di console 

const nama = "aryo";
let usia = 19;
let generasi;

console.log('hello world');
console.log(nama);
console.log(usia);

function fungsi() {
    if (usia >= 26 && usia <=50) {
        console.log('anda dewasa');
    } else if (usia > 18 && usia <=25){
        console.log('anda remaja');
    } else {
        console.log('antara anda anak-anak atau anda sudah tua');
    }
    console.log(`nama saya adalah ${nama} usia saya adalah ${usia} tahun`);
}

fungsi();

