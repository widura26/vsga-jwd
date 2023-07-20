//select tag html
const inputEmail = document.querySelector('input[type="email"]');
const inputPassword = document.querySelector('input[type="password"]');
const form = document.querySelector('.form');
const notification = document.querySelector('.notification');
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








