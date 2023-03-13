// const enterBtn = document.querySelector('.enter-btn');
// const registerBtn = document.querySelector('.register-btn');
// const cloaseIconLogin = document.querySelector('.close-icon-login');
const cloaseIconRegister = document.querySelector('.close-icon-register');
const logBtn = document.querySelector(".log-btn");

const burger = document.querySelector(".burger");
const close = document.querySelector(".close");
const mobileMenu = document.querySelector(".mobile-header-menu");

const login = document.getElementById('login');
const register = document.getElementById('register');


// enterBtn.addEventListener('click', ()=> {
//   login.style.display = 'block';
// })
//
// cloaseIconLogin.addEventListener('click', ()=> {
//   login.style.display = 'none';
// })
//
//
// registerBtn.addEventListener('click', ()=> {
//   register.style.display = 'block';
// })
//
//
// cloaseIconRegister.addEventListener('click', ()=> {
//   register.style.display = 'none';
//   console.log('click');
// })


burger.addEventListener('click', ()=> {
    burger.style.display = 'none';
    mobileMenu.style.display = 'block';
})

close.addEventListener('click', ()=> {
    mobileMenu.style.display = 'none';
    burger.style.display = 'block';
})
