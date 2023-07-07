const buttonTambah = document.querySelector('#tambah');
const buttonKurang = document.querySelector('#kurang');
const p = document.querySelector('#jumlah');

let angka = 0;
p.innerHTML = angka;

function tambah(){
  angka++;
  return angka;
}

function kurang(){
  angka--;
  return angka;
}

buttonTambah.addEventListener('click', () => {
  p.innerHTML = tambah();
})

buttonKurang.addEventListener('click', () => {
  if(angka > 0){
    p.innerHTML = kurang();
  }
})






