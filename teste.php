<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width. initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/teste.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Truculenta:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="overlay">
            <div class="pizza-click">
                <div class="btn-close">x</div>
                <h1></h1>
                <div style='display: flex; flex-direction: row' class="quantidade-container">
                    
                    <div class="quantidade">
                        Quantidade: 
                        <div class="more">
                            <span unselectable = 'on'>+</span>
                        </div>

                            <span class="qtn">1</span>

                        <div class="less">
                            <span unselectable = 'on'>-</span>
                        </div>
                    </div>    
                </div>
                
                <p></p>
                <div class="overlay-middle">
                       
                    <div class="size-container">
                    <h2>SELECIONE O TAMANHO</h2> 
                        <div class="grande">
                            <input type="radio" name="size" class="grande" id="grande" checked>  
                            <label class='grande' for="grande">Grande: </label>
                        </div>

                        <div class="media">
                            <input type="radio" name="size" id="media">  
                            <label class='media' for="media">Média: </label>
                        </div>
                        
                        <div class="pequena">
                            <input type="radio" name="size" id="pequena">  
                            <label class='pequena' for="pequena">Pequena: </label>
                        </div>
                    </div><!--size-container-->

                    <div class="border">
                        <h2>BORDAS RECHEADAS</h2>

                        <div class="none">
                            <input type="radio" name="borda" id="none" checked>  
                            <label for="cream-cheese">Nenhuma</label>
                        </div>

                        <div class="cheddar">
                            <input type="radio" name="borda" id="cheddar">  
                            <label for="cheddar">Cheddar (R$5.00)</label>
                        </div>

                        <div class="Catupiry">
                            <input type="radio" name="borda" id="catupiry">  
                            <label for="catupiry">Catupiry (R$5.00)</label>
                        </div>
                        
                        <div class="chocolate">
                            <input type="radio" name="borda" id="chocolate">  
                            <label for="chocolate">Chocolate (R$5.00)</label>
                        </div> 

                        <div class="cream-cheese">
                            <input type="radio" name="borda" id="cream-cheese">  
                            <label for="cream-cheese">Cream Cheese Philadelphia (R$8.00)</label>
                        </div>

                    </div>
                    
                </div><!--overlay-middle-->
                <div class="clear"></div>
                <div class="observacao">
                    <h2>Observação</h2>
                    <textarea placeholder="Sem cebola, maionese extra..." class="obs" cols="30" rows="10"></textarea>
                </div>
                
                <div class="div-subtotal">
                    <strong>
                        <span>Subtotal: </span>
                    </strong>
                        <span class="subtotal"></span>
                </div><!--total-->
            </div>
        </div>

        <div id='main-menu' class="main-menu">
            <div class="container">
                <div class="opc">
                    <input type="radio" name="opc" id="option1" checked>
                    <label for ='option1' class="opc1" " ><h2 ">TRADICIONAIS</h2>  <br><i id='opc1 'class="fa fa-chevron-circle-down" style="font-size:48px;color:#FFF""></i></label>
                </div>

                <div class="opc">
                    <input type="radio" name="opc" id="option2" >
                    <label for ='option2' class="opc2"><h2>VEGANAS</h2><br><i id='opc2' class="fa fa-chevron-circle-down" style="font-size:48px;color:#FFF" ></i></label>
                </div>

                <div class="opc">
                    <input type="radio" name="opc" id="option3">
                    <label for ='option3' class="opc3"><h2>LOW CARB</h2><br><i id='opc4' class="fa fa-chevron-circle-down" style="font-size:48px;color:#FFF""></i></label>
                </div>

                <div class="opc">
                    <input type="radio" name="opc" id="option4">
                    <label for ='option4' class="opc4"><h2>DOCES</h2><br><i id='opc4' class="fa fa-chevron-circle-down" style="font-size:48px;color:#FFF" ></i></label>
                </div>
            </div><!--container-->
            
        </div><!--main-menu-->
        <div class="cardapio-container">
            <table class="cardapio">
                <div class="menu-titulo">
                    <h2>TRADICIONAIS</h2>
                </div>
                <div class="menu-sabores">
                    <input type="radio" name="sabor" id="sabor1">
                    <input type="radio" name="sabor" id="sabor2">
                    <label for ='sabor1' class="sabor1">
                        <h1>1 Sabor </h1>
                    </label>
                    <label for ='sabor2' class="sabor2">
                        <h1>2 Sabores </h1>
                    </label>
                    <!--<div class="sizes">
                        <div class="grande">
                            <h2>Grande</h2>
                        </div>Grande
                        <div class="media">
                            <h2>Média</h2> 
                        </div>Média
                        <div class="pequena">
                            <h2>Pequena</h2>
                        </div>Pequena
                    </div>-->
                </div>
                <?php
                    echo "<pre>";
                    echo "
                    
                    <tr>
                        <th></th>
                        <th>4 Fatias</th> 
                        <th>6 Fatias</th>
                        <th>8 Fatias</th>
                    </tr>";
                    $dadosJson = file_get_contents('tradicionais.json');

                    $dadosJsonDecodificados = json_decode($dadosJson);

                    //print_r($dadosJsonDecodificados)
                    $index = 1;
                    foreach ($dadosJsonDecodificados->tradicional as $tradicionais){
                        
                        echo "
                            <tr>
                                <td>
                                    <span class='pizza-nome'>$tradicionais->name</span>
                                    <p>($tradicionais->tag)</p>
                                </td>
                                <td class='td-grande'>R$$tradicionais->price_33.00</td class='td-grande'>
                                <td class='td-media'>R$$tradicionais->price_28.00</td>
                                <td class='td-pequena'>R$$tradicionais->price_23.00</td>
                                <td class='td-qtn' style='display: none'>$tradicionais->inCart<qtn>
                            </tr>";
                        $index++;
                    }
                ?>
                
            </div>
            
        </div>

    </main>
    <a href="index.html"></a>
    <script src = 'jquery.js'></script>
    <script src = 'js/teste.js'></script>
</body>
</html>