const enterBtn = document.querySelector('.enter-btn');
const registerBtn = document.querySelector('.register-btn');
const cloaseIconLogin = document.querySelector('.close-icon-login');
const cloaseIconRegister = document.querySelector('.close-icon-register');
const logBtn = document.querySelector(".log-btn");

const login = document.getElementById('login');
const register = document.getElementById('register');


enterBtn.addEventListener('click', ()=> {
  login.style.display = 'block';
})

cloaseIconLogin.addEventListener('click', ()=> {
  login.style.display = 'none';
})


registerBtn.addEventListener('click', ()=> {
  register.style.display = 'block';
})


cloaseIconRegister.addEventListener('click', ()=> {
  register.style.display = 'none';
  console.log('click');
})


// logBtn.addEventListener('click', ()=> {
//   if()
// })
