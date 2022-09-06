// let btn = document.getElementById('btn');
let menu = document.getElementById('menu');
let menuNav = document.getElementById('menu-ul')
let btn = document.getElementsByClassName('btn');

let showMenu = false;

btn.forEach(b =>{
    b.addEventListener('click', toggleMenu);
})

function toggleMenu(){
    if(!showMenu){
        menu.classList.add('open');
        menuNav.classList.add('open');

        showMenu = true;
    }
    else{
        menu.classList.remove('open');
        menuNav.classList.remove('open');

        showMenu = false;
    }
}
