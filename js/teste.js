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

let pizza = document.querySelectorAll('.pizza');

let product = [
    {
        name: 'Real',
        tag: 'Mussarela, Presunto, Provonole, Bacon, Palmito, Milho, Ervilha, Orégano', 
        price: 49.90,
        inBag: 0
    },
    {
        name: 'Minas Geais',
        tag: 'Mussarela, Presunto, Provonole, Bacon, Palmito, Milho, Ervilha, Orégano', 
        price: 49.90,
        inBag: 0
    },
    {
        name: 'Marguerita',
        tag: 'Mussarela, Presunto, Provonole, Bacon, Palmito, Milho, Ervilha, Orégano', 
        price: 49.90,
        inBag: 0
    },
    {
        name: '4 Queijos',
        tag: 'Mussarela, Presunto, Provonole, Bacon, Palmito, Milho, Ervilha, Orégano', 
        price: 49.90,
        inBag: 0
    }
]


for (let i = 0; i < pizza.length; i++){
    pizza[i].addEventListener('click', () => {
        pizza_number(product[i]);
    })
}

function onLoadBagNumbers(){
    let productNumber = localStorage.getItem('pizza_number');
    productNumber = parseInt(productNumber)
    
    if(productNumber){
        sacola = document.querySelector('.sacola').textContent = `Sacola ${productNumber}`
    }
}



function pizza_number(product){
    
    let productNumber = localStorage.getItem('pizza_number');

    productNumber = parseInt(productNumber)
   if (productNumber){
        localStorage.setItem('pizza_number', productNumber + 1);
        sacola = document.querySelector('.sacola').textContent = `Sacola ${productNumber + 1 }`
   } else{
        localStorage.setItem('pizza_number', 1)
        document.querySelector('.sacola').textContent = 'Sacola 1'
   }
   setItems(product)
}

function setItems(product){
   
    let bagItems = localStorage.getItem('productInBag')
    bagItems = JSON.parse(bagItems)

    if (bagItems != null){

        if(bagItems[product.tag] == undefined){
            bagItems = {
                ...bagItems,
                [product.tag]: product
            }
        }
        bagItems[product.tag].inBag += 1
    } else {
        product.inBag = 1;
        bagItems = {
            [product.tag]: product
        }
    }

    localStorage.setItem('productInBag', JSON.stringify
    (bagItems));
}

onLoadBagNumbers();