const cerrar=document.querySelector('#close')
const abrir=document.querySelector('#open')
const slidermenu=document.querySelector('.slider-menu')
const listas=document.querySelectorAll('.slider-menu .navegacion ul li a')
const scrols=document.querySelectorAll('.slider-menu .navegacion ul li ul')
const enlaces=document.querySelector('.enlace');
const links=document.querySelectorAll('.slider-menu .navegacion ul li ul li a');
const currentLocation=location.href;
let text='';
eventos();
function eventos(){
    cerrar.addEventListener('click',cerra)
    abrir.addEventListener('click',abri)
}
function cerra(e){
    e.preventDefault()
    slidermenu.classList.add('slideropen')
}
function abri(nv){
    nv.preventDefault()
    slidermenu.classList.remove('slideropen')
}
listas.forEach(lista => {
    if(lista.href===currentLocation){
        lista.parentNode.classList.add('barrar')
    }else{
        lista.addEventListener('click',()=>{
            lista.parentNode.classList.toggle('barra')
            document.querySelector('.barra')?.classList.remove('barra')
            lista.parentNode.classList.add('barra')
            document.querySelector('.barrar')?.classList.remove('barrar');
            lista.parentNode.classList.add('barrar')
           })
    }
  
});

   links.forEach(link => {
       
        if(link.href===currentLocation){
            console.log(link.parentNode.parentNode.parentNode)
            const padre=link.parentNode.parentNode.parentNode;
            console.log(padre.classList.add('barra'))
            console.log(link.classList.add('subactivo'))
            console.log(padre.classList.add('barrar'))
            
           }
      
   });



// const barra=document.querySelector('.barrar')
//         console.log(barra.classList.contains('barrar'))