var btn1 = document.getElementById('btn-div1');
var btn2 = document.getElementById('btn-div2');
var btn3 = document.getElementById('btn-div3');
var btn4 = document.getElementById('btn-div4');
var btn5 = document.getElementById('btn-div5');
var container1 = document.querySelector('.container1');
var container2 = document.querySelector('.container2');
var container3= document.querySelector('.container3');
var container4= document.querySelector('.container4');
var container5= document.querySelector('.container5');

btn1.addEventListener('click', function() {
          container1.style.display = 'none';

})
btn2.addEventListener('click', function() {
    container2.style.display = 'none';

})

btn3.addEventListener('click', function() {
    container3.style.display = 'none';

})

btn4.addEventListener('click', function() {
    container4.style.display = 'none';

})

btn5.addEventListener('click', function() {
    container5.style.display = 'none';

})

function mudarTitulo(novoTitulo) {
    document.querySelector("#titulo").innerHTML = novoTitulo;
}




;

