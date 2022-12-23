let slider = document.querySelector('#slider-container');
let sliderSection = document.querySelectorAll('.slider-section');
let punto = document.querySelectorAll('.punto');
let contador = 1; 
let puntos = punto.length;
let slides = sliderSection.length - 1;

intervalo = setInterval(function(){moverSlider();cambiarActivo()},5000);

function moverSlider(){
  let operacion = contador * -100;
  slider.style.transform = `translateX(${ operacion }%)`;
  slider.style.transition = 'all 0.5s ease-in-out';

  if(contador == slides){
    let operacion = contador * -100;
    slider.style.transform = `translateX(${ operacion }%)`;
    slider.style.transition = 'all 0.5s ease-in-out';
    
    setTimeout(function(){
      slider.style.transform = `translateX(0)`;
      slider.style.transition = 'all 0s ease-in-out';
      contador = 1;
    },1500) 
  }
  contador++;
}

function cambiarActivo(){
  punto.forEach( ( cadaPunto , i )=>{
    if( contador > puntos ){
       posicion = 0
    }else{
       posicion = contador-1
    } 

    punto[i].classList.remove('activo')
  
    
    if( i == posicion ){
      console.log(contador)
      console.log(i)
      punto[i].classList.add('activo') 
    }
  }
  )

}

punto.forEach(( cadaPunto , i ) => {

  punto[i].addEventListener('click', ()=>{
  
    let posicion = i

    let operacion = posicion * -100
    
    slider.style.transform = `translateX(${ operacion }%)`
    
    punto.forEach( ( cadaPunto , i )=>{
      punto[i].classList.remove('activo')
    })
    
    punto[i].classList.add('activo')
    
    clearInterval(intervalo)
    
    contador = i
    
    intervalo = setInterval(function(){moverSlider();cambiarActivo()},5000);
    
    if(contador > slides){
    
      slider.style.transform = `translateX(0)`;
      
      slider.style.transition = 'all 0s ease-in-out';
      
      contador = 1
    }
  
  })

})









