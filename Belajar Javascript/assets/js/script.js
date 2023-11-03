let tombol = document.getElementById('klik')
var handler = function (event) {
    // console.log(event)
    let text = document.getElementById('text')
    alert('Tombol telah diklik')
    alert('Posisi mousenya: ' + event.clientX)
    text.innerHTML = 'Tombol sudah diklik'
    tombol.removeEventListener('click', handler)
}
tombol.addEventListener('click', handler)

const button1 = document.getElementById('button-1')
const button2 = document.getElementById('button-2')

button1.addEventListener("click", function () {
    alert('Button 1 di klik')
}, false)
button2.addEventListener("click", function () {
    alert('Button 2 di klik')
}, false)

var nama = "John"
let usia = 22
const pi = 3.14

nama = 'Doe'
usia = 23

let x
x = 10

let angka = 42; // Number
let teks = "Halo, dunia!"; //String
let nilai = true; // Boolean
let list_angka = [1, 2, 3, 4, 5]; // Array
let biodata = { nama: "John", usia: 30 }; // Biodata

let a = 7
let b = 3
let ab

// Operasi Matematika
ab = a + b
ab = a - b
ab = a * b
ab = a / b

// Operasi Perbandingan
ab = a < b
ab = a > b
ab = a == b

console.log({ a, b, ab })

// Percabangan
if (false) {
    console.log('Kondisi benar');
} else {
    console.log('Kondisi salah');
}

let NILAI = 69
if (NILAI > 80) {
    console.log('Nilai bagus');
} else if (NILAI > 70) {
    console.log('Nilai cukup');
} else {
    console.log('Nilai kurang');
}

let option = 1
switch (option) {
    case 1:
        console.log('Pilihan anda 1');
        break;
    case 2:
        console.log('Pilihan anda 2');
        break;
    default:
        console.log('Pilihan anda tidak ada')
        break;
}

// Perulangan
for (let i = 1; i <= 5; i++) {
    console.log('For ke - ' + i)
}

let j = 1
while (j <= 5) {
    console.log('While ke - ' + j);
    j++
}

// Function

function welcome(nama) {
    console.log('Selamat datang si ' + nama);
}
welcome('A')
welcome('B')
welcome('C')

function penambahan(a, b) {
    return a + b
}
let hitung = penambahan(1, 5)
console.log({ hitung })

let pengurangan = function (a, b) {
    return a - b
}
hitung = pengurangan(10, 5)
console.log({ hitung });


function pemangkatan(a) {
    return a * a
}
function jalankan(fn, nilai) {
    return fn(nilai)
}
let hasil = jalankan(pemangkatan, 5)
console.log({ hasil });


const confirmBtn = document.getElementById('confirm-btn')

confirmBtn.addEventListener('click', function () {
    let status = confirm('Apakah anda yakin?')

    if (status) {
        alert('Anda memilih iya')
    } else {
        alert('Anda memilih tidak')
    }
})

const promptBtn = document.getElementById('prompt-btn')
promptBtn.addEventListener('click', function () {
    let result = prompt('Tuliskan nama anda')
    const promptResult = document.getElementById('prompt-result')

    promptResult.innerHTML = result
})

const lorem = 'Lorem ipsum dolor sit amet consectetur adipisicing \'elit\'. Harum, esse.'
let length = lorem.length
let first_char = lorem[0]
let last_char = lorem[length - 1]

let kata1 = 'Selamat';
let kata2 = 'Datang';

console.log({ lorem, length, first_char, last_char });

console.log(kata1 + ' ' + kata2);
console.log(`Ucapan ${kata1} ${kata2}`)

let teksBesarnya = lorem.toUpperCase();
let potongan = lorem.slice(0, 4);
let indeks = lorem.indexOf("ipsum");

console.log({ teksBesarnya, potongan, indeks });

kata1 = "Halo"
kata2 = "Halo"

console.log(kata1 === kata2);


const google = document.getElementById('googleBtn')

google.addEventListener('click', function () {
    window.location.href = 'https://www.google.com'
})

let popupWindow
function openWindow() {
    popupWindow = window.open('', 'Jendela pop up', 'width=400, height=400')
}
function resizeWindow() {
    console.log(popupWindow);
    popupWindow.resizeTo(800, 800)
}

function formatTanggal(tanggal) {
    let tahun = saatIni.getFullYear();
    let bulan = saatIni.getMonth(); // Mulai dari 0 (Januari) hingga 11 (Desember)
    let hari = saatIni.getDate();
    let jam = saatIni.getHours();
    let menit = saatIni.getMinutes();
    let detik = saatIni.getSeconds();
    return `${tahun}-${bulan}-${hari} ${jam}:${menit}:${detik}`;
}
let saatIni = new Date();
console.log(formatTanggal(saatIni));

let buah = ['Apel', 'Durian', 'Pepaya'];
let buah2 = ['Pisang', 'Semangka', 'Melon'];
let apel = buah[0]
let durian = buah[1]
buah.push('Jeruk')
// buah.pop()

console.log({ buah, apel, durian });

let allbuah = buah.concat(buah2)
console.log(allbuah);

allbuah.forEach(item => {
    console.log(item);
})
// buah.map(item => {
//     console.log(item);
// })
// for (let index = 0; index < buah.length; index++) {
//     const element = buah[index];
//     console.log(element);
// }

let angkaAcak = [1, 5, 2, 4, 3]

console.log(angkaAcak.sort());


let bio_data = {
    nama: 'Bariq',
    alamat: 'Malang'
}
bio_data.telepon = '08123456'
// delete bio_data.telepon

let bionama = bio_data.nama
let bioalamat = bio_data.alamat

console.log({ bio_data, bionama, bioalamat });

var kalkulator = {
    tambah: function (a, b) {
        return a + b;
    },
    kurang: function (a, b) {
        return a - b;
    }
};

var hasilTambah = kalkulator.tambah(5, 3); // hasilTambah sekarang berisi 8

console.log({ hasilTambah });

for (let kunci in bio_data) {
    console.log(kunci + ": " + bio_data[kunci]);
}

let buku = [
    {
        judul: "Harry Potter",
        penulis: {
            nama: "J.K. Rowling",
            usia: 56
        }
    },
    {
        judul: "Harry Potter",
        penulis: {
            nama: "J.K. Rowling",
            usia: 56
        }
    }
];
