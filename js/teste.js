$(function(){
    pizzas = $('span.pizza-nome')
    ingredientes = $('td p')
    big = $('.td-grande')
    medium = $('.td-media')
    small = $('.td-pequena')

    $('.btn-close').click(function fechar(){
        $('.overlay').fadeOut();
    })

    for (let i = 0; i < pizzas.length; i++){
        pizzas[i].addEventListener('click', function abrir(e) {
            var qtn = 1
            console.log(qtn)
            
            e.preventDefault()
            
            var pizza = pizzas[i].innerHTML;
            var ingre = ingredientes[i].innerHTML;
            var grande = big[i].innerHTML.replace('R$','');
            var media = medium[i].innerHTML.replace('R$','');
            var pequena = small[i].innerHTML.replace('R$','');
            var selected_borda = 0
            selected_borda = selected_borda * qtn
            grande = parseFloat(grande).toFixed(2)
            media = parseFloat(media).toFixed(2)
            pequena = parseFloat(pequena).toFixed(2)
            
            

            $('.overlay').fadeIn();
            $('.pizza-click h1').html(pizza);
            $('.pizza-click p').html(ingre);
            $('span.qtn').html(qtn);
            $('.grande label').html(`Grande (R$${grande})`)
            $('.media label').html(`Média (R$${media})`)
            $('.pequena label').html(`Pequena (R$${pequena})`)

            ;

            $('div.more').click(function aumentar(){
                
                qtn++;
                $('span.qtn').html(qtn)
                subtotal = (pequena * qtn) + (selected_borda * qtn)
                $('span.subtotal').html(`R$${subtotal}`)
                console.log(qtn)
            })
            $('div.less').click(function aumentar(){
                
                if(qtn>0){
                    qtn--;
                }else{
                    qtn=0
                }
                console.log(qtn)
                $('span.qtn').html(qtn)  
                $('span.subtotal').html(`R$${subtotal}`)
                subtotal = (pequena * qtn) + (selected_borda * qtn)
                $('span.subtotal').html(`R$${subtotal}`)
            })
            
    
            var precos = $('input[name=size]')
            var bordas = $('input[name=borda]')
            var subtotal = 0.00
            precos.click(function checkprices(){
                console.log(qtn)
                if (precos[0].checked){
                    selected_size = grande
                    subtotal = (pequena * qtn) + (selected_borda * qtn)
                    parseFloat(subtotal).toFixed(2)
                    $('span.subtotal').html(`R$${subtotal}`)
                }
                if (precos[1].checked){
                    selected_size = grande
                    subtotal = (pequena * qtn) + (selected_borda * qtn)
                    parseFloat(subtotal).toFixed(2)
                    $('span.subtotal').html(`R$${subtotal}`)
                }
                if (precos[2].checked){
                    selected_size = grande
                    subtotal = (pequena * qtn) + (selected_borda * qtn)
                    parseFloat(subtotal).toFixed(2)
                    $('span.subtotal').html(`R$${subtotal}`)
                }
            })
            bordas.click(function bordaCheck(){
                if (bordas[0].checked){
                    selected_borda = 0
                    subtotal = (pequena * qtn) + (selected_borda * qtn)
                    parseFloat(subtotal).toFixed(2)
                    $('span.subtotal').html(`R$${subtotal}`)
                }
                else if (bordas[1].checked || bordas[2].checked || bordas[3].checked ){
                    selected_borda = 5
                    subtotal = (pequena * qtn) + (selected_borda * qtn)
                    $('span.subtotal').html(`R$${subtotal}`)
                }
                else if (bordas[4].checked){
                    selected_borda = 8
                    subtotal = (pequena * qtn) + (selected_borda * qtn)
                    $('span.subtotal').html(`R$${subtotal}`)
                }
            })
            
        })

        
    }
})


