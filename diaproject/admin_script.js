



let body = document.body;
let sideBar = document.querySelector('.side-bar');


document.querySelector('#menu-btn').onclick = () =>{
    sideBar.classList.toggle('active');
    body.classList.toggle('active');
}