let pizza = document.querySelectorAll('.pizza');

let products = [
    {
        name: 'Real',
        tag: 'Mussarela, Presunto, Provonole, Bacon, Palmito, Milho, Ervilha, Orégano', 
        price: 59.90,
        inCart: 0
    },
    {
        name: 'Minas Geais',
        tag: 'Mussarela, Presunto, Provonole, Bacon, Palmito, Milho, Ervilha, Orégano', 
        price: 49.90,
        inCart: 0
    },
    {
        name: 'Marguerita',
        tag: 'Mussarela, Presunto, Provonole, Bacon, Palmito, Milho, Ervilha, Orégano', 
        price: 39.90,
        inCart: 0
    },
    {
        name: '4 Queijos',
        tag: 'Mussarela, Presunto, Provonole, Bacon, Palmito, Milho, Ervilha, Orégano', 
        price: 45.90,
        inCart: 0
    }
]


for (let i = 0; i < pizza.length; i++){
    pizza[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i]);
    })
}

function onLoadCartNumbers(){
    let productNumber = localStorage.getItem('cartNumbers');
    productNumber = parseInt(productNumber)
    
    if(productNumber){
        sacola = document.querySelector('.sacola').textContent = `Sacola ${productNumber}`
    }
}



function cartNumbers(product){
    let productNumber = localStorage.getItem('cartNumbers');

    productNumber = parseInt(productNumber)
   if (productNumber){
        localStorage.setItem('cartNumbers', productNumber + 1);
        sacola = document.querySelector('.sacola').textContent = `Sacola ${productNumber + 1 }`
   } else{
        localStorage.setItem('cartNumbers', 1)
        document.querySelector('.sacola').textContent = 'Sacola 1'
   }
   setItems(product)
}

function setItems(product){
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if (cartItems != null){

        if(cartItems[product.tag] != undefined){
            cartItems = {
                ...cartItems,
                [product.tag]: product
            }
        }
        cartItems[product.tag].inCart += 1;
    }else {
        product.inCart = 1;
        cartItems = {
            [product.tag]: product
        }
    }
  
    localStorage.setItem('productsInCart', JSON.stringify(cartItems) )
}



function totalCost(product){
    ///console.log('The product price is', product.price)
    let cartCost = localStorage.getItem('totalCost');
    cartCost = Number(cartCost)
    console.log(typeof cartCost)

    if (cartCost != null){
        localStorage.setItem('totalCost', cartCost + product.price);
    }else{
        localStorage.setItem('totalCost', product.price);
    }

    
}

onLoadCartNumbers();






/*lista = []

var real = document.getElementById("real")
var real_price = Number(document.getElementById('real-preco').innerText)

var minas = document.getElementById("minas")
var minas_price = Number(document.getElementById('minas-preco').innerText)

var marguerita = document.getElementById("marguerita")
var marguerita_price = Number(document.getElementById('marguerita-preco').innerText)



function clicar(){
    if (real.checked){

        if (lista.includes('Real') == false){
            lista.push('Real')
            console.log(lista)
    ///Real 
        }
    }else if(real.checked == false){
        lista.splice(lista.indexOf('Real'), 1)
        console.log(lista)
    }
    
    if (minas.checked){
        
        if (lista.includes('Minas Gerais') == false){
            lista.push('Minas Gerais')
            console.log(lista)
        }
    }else if(real.checked == false){
        lista.splice(lista.indexOf('Minas Gerais'), 1)
        console.log(lista)
    }
    
    ///Minas Gerais

    if (marguerita.checked){
        if (lista.includes('Marguerita') == false){
            lista.push('Marguerita')
            console.log(lista)
        }
    }else if(marguerita.checked == false){
        lista.splice(lista.indexOf('Marguerita'), 1)
        console.log(lista)
    }
    
}   



class Pedido{
    constructor(number, nome, telefone, pizza, endereço, referência, observação, total){
        this.number = number;
        this.nome = nome;
        this.telefone = telefone;
        this.pizza = pizza;
        this.endereço = endereço;
        this.referencia = referência;
        this.observacao = observação;
        this.total = total;
    }
    printPedido(){
        console.log(`N°: ${this.number}`)
        console.log(`Nome: ${this.nome}`)
        console.log(`Telefone: ${this.telefone}`)
        console.log(`Pizza: ${this.pizza}`)
        console.log(`Endereço: ${this.endereço}`)
        console.log(`Referência: ${this.referencia}`)
        console.log(`Observação: ${this.observacao}`)
        console.log(`Total: ${this.total}`)
    }
}

function order(){
    pedido = new Pedido(1, 'Sandro Filho', '21984238879', '1x Real Grande Sem Borda, 1* Coca Cola 2 litros', 'Rua Santa Luzia, 68', 'Na rua dos correios', 'Sem cebola', 'R$59.90')
    pedido.printPedido()
}*/
