// let btn = document.getElementById('btn');
let menu = document.getElementById('menu-desplegable');
let btn = document.getElementsByClassName('btn');

Array.from(btn).forEach(b => {
    b.addEventListener("click", ()=>{
        menu.classList.toggle("hidden");
        menu.classList.toggle("unhidden");
    })
})