var tradicionais = document.querySelector('div.tradicionais');

var veganas = document.querySelector('div.veganas');

var low_carb = document.querySelector('div.low-carb');

var doces = document.querySelector('div.doces'); 

var sodas = document.querySelector('div.sodas'); 

var beers = document.querySelector('div.beers'); 

var wines = document.querySelector('div.wines'); 

function clicar1(){
    tradicionais.style.marginTop = '0%';
    veganas.style.marginTop = '-120%';
    low_carb.style.marginTop = '-120%';
    doces.style.marginTop = '-120%';
}

function clicar2(){
    veganas.style.marginTop = '0%';
    tradicionais.style.marginTop = '-120%';
    low_carb.style.marginTop = '-120%';
    doces.style.marginTop = '-120%';
}

function clicar3(){
    low_carb.style.marginTop = '0%';
    veganas.style.marginTop = '-120%';
    tradicionais.style.marginTop = '-120%';
    doces.style.marginTop = '-120%';
}

function clicar4(){
    doces.style.marginTop = '0%';
    veganas.style.marginTop = '-120%';
    low_carb.style.marginTop = '-120%';
    tradicionais.style.marginTop = '-120%';
}


function clicar5(){
    sodas.style.marginTop = '0%';
    beers.style.marginTop = '-120%';
    wines.style.marginTop = '-120%';
}

function clicar6(){
    sodas.style.marginTop = '-120%';
    beers.style.marginTop = '0';
    wines.style.marginTop = '-120%';
}

function clicar7(){
    sodas.style.marginTop = '-120%';
    beers.style.marginTop = '-120%';
    wines.style.marginTop = '0%';
}