//select tag html
const inputEmail = document.querySelector('input[type="email"]');
const inputPassword = document.querySelector('input[type="password"]');
const form = document.querySelector('.form');
const notification = document.querySelector('.notification');
// const input = document.getElementsByTagName('input');

//create notification
// const notif = document.createElement('div');
// const p = document.createElement('p');
// p.innerHTML = 'Username atau anda salah';
// notif.classList.add("notification");
// notif.innerHTML = p.innerHTML;
// form.appendChild(notif)
// form.insertBefore(notif, form.firstChild);

//notifikasi gagal
notification.style.display = 'none';

//data dummy user
const user = {
  email: 'widurategalrejo@gmail.com',
  password: 'widurahasta26'
}

//klik submit
function submit(){
  form.addEventListener('submit', (event) => {
    event.preventDefault();
    validation(inputEmail.value, inputPassword.value, user);
  })
}

//deklarasi submit
submit();

//validasi
const validation = (email, password, user) => {
  if(email === user.email && password === user.password){
    alert('anda berhasil login');
    window.location.href = 'form/order.html'
  }else{
    notification.style.display = 'block';
    function notifFinsih() {
      notification.style.display = 'none'
    }
    setTimeout(notifFinsih, 3000);
  }
}








