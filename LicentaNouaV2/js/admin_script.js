let profile = document.querySelector('.header .flex .profile');

let searchForm = document.querySelector('.header .flex .search-form');

let sideBar = document.querySelector('.side-bar');

let body = document.body;

let toggleBtn = document.querySelector('#toogle-btn');
let darkMode = localStorage.getItem('dark-mode');

const enableDarkMode = () =>{
  toggleBtn.classList.replace('fa-sun', 'fa-moon');
  body.classList.add('dark');
  localStorage.setItem('dark-mode', 'enable');
}

const disableDarkMode = () =>{
  toggleBtn.classList.replace('fa-moon', 'fa-sun');
  body.classList.remove('dark');
  localStorage.setItem('dark-mode', 'disable');
}

if( darkMode === 'enable'){
  enableDarkMode();
}

toggleBtn.onclick = (e) =>{
  let darkMode = localStorage.getItem('dark-mode');
  if(darkMode === 'disable'){
    enableDarkMode();
  }else{
    disableDarkMode();
  }
}

document.querySelector('#user-btn').onclick = () =>{
  profile.classList.toggle('active');

}

document.querySelector('#search-btn').onclick = () =>{
  searchForm.classList.toggle('active');
}

document.querySelector('#menu-btn').onclick = () =>{
  sideBar.classList.toggle('active');
  body.classList.toggle('active');

}

document.querySelector('.side-bar .close-side-bar').onclick = () =>{
  sideBar.classList.toggle('active');
  body.classList.toggle('active');

}

window.onscroll = () =>{
    profile.classList.remove('active');
    searchForm.classList.remove('active');
}

if(innerWidth> 0 ){
  sideBar.classList.remove('active');
  body.classList.remove('active');
  }