$(function(){
    var opcoes = $('.opc input')
    var cardapio = $('.cardapio')


    opcoes.click(function down(){
        $('section .drink-menu').css('marginTop', '770px')
        if(opcoes[0].checked){
            cardapio[0].setAttribute('class', 'cardapio down') 
            cardapio[1].setAttribute('class', 'cardapio up') 
            cardapio[2].setAttribute('class', 'cardapio up') 
            cardapio[3].setAttribute('class', 'cardapio up') 
        }
        if(opcoes[1].checked){
            cardapio[0].setAttribute('class', 'cardapio up') 
            cardapio[1].setAttribute('class', 'cardapio down') 
            cardapio[2].setAttribute('class', 'cardapio up') 
            cardapio[3].setAttribute('class', 'cardapio up') 
        }
        if(opcoes[2].checked){
            cardapio[0].setAttribute('class', 'cardapio up') 
            cardapio[1].setAttribute('class', 'cardapio up') 
            cardapio[2].setAttribute('class', 'cardapio down') 
            cardapio[3].setAttribute('class', 'cardapio up') 
        }
        if(opcoes[3].checked){
            cardapio[0].setAttribute('class', 'cardapio up') 
            cardapio[1].setAttribute('class', 'cardapio up') 
            cardapio[2].setAttribute('class', 'cardapio up') 
            cardapio[3].setAttribute('class', 'cardapio down') 
        }
     
    })

})
        
