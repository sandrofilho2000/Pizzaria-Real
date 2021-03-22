<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width. initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/teste.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Truculenta:wght@500&display=swap" rel="stylesheet">
    <!--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>-->
</head>
<body>
    <header>
        <div class="container">
            <div><div class="logo"></div></div>
            <div><ul class='header-ul' style="list-style-type: none">
                <li><a href="#main-menu" >Cardápio</a></li>
                <li><a href="admin.html">Sobre</a></li>
                <li><a href="teste.php">Contato</a></li>
            </ul></div>
        </div>
        
    </header>

    <div class="sacola">
        <div class="p"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Sacola</div>
    </div><!--sacola-->

    <section class="main-section">
        <h2>FAÇA SEU PEDIDO ONLINE!</h2>

        <div class="gallery">
            <div class="gallery-single">

            </div><!--gallery-single-->
        </div><!--gallery-->
    </section><!--main-section-->
    <div class="clear"></div>
    <main>
        <div class="overlay">

            <div class="pizza-click">

                
                <div class="btn-close">x</div>
                
                
                <h1></h1><!--myShoppingList-->
                <p></p>
                <div style='display: flex; flex-direction: row' class="quantidade-container">
                    
                    <div class="quantidade">
                        Quantidade: 

                        <div class="more">
                            <span unselectable = 'on'>+</span>
                        </div>

                            <span class="qtn">1</span>

                        <div class="less">
                            <span unselectable = 'on'>-</span>
                        </div><!--less-->

                    </div><!--quantidade--> 

                </div><!--quantidade-container-->

                <div class="overlay-middle">
                       
                    <div class="size-container">

                    <h2>SELECIONE O TAMANHO</h2> 

                        <div class="grande">
                            <input type="radio" name="size" class="grande" id="grande" checked>  
                            <label class='grande' for="grande">Grande: </label>
                        </div><!--grande-->

                        <div class="media">
                            <input type="radio" name="size" id="media">  
                            <label class='media' for="media">Média: </label>
                        </div><!--media-->
                        
                        <div class="pequena">
                            <input type="radio" name="size" id="pequena">  
                            <label class='pequena' for="pequena">Pequena: </label>
                        </div><!--media-->
                        
                    </div><!--size-container-->

                    <div class="border">
                        <h2>BORDAS RECHEADAS</h2>

                        <div class="none">
                            <input type="radio" name="borda" id="none" checked>  
                            <label for="cream-cheese">Nenhuma</label>
                        </div><!--none-->

                        <div class="cheddar">
                            <input type="radio" name="borda" id="cheddar">  
                            <label for="cheddar">Cheddar (R$7.00)</label>
                        </div><!--cheddar-->

                        <div class="catupiry">
                            <input type="radio" name="borda" id="catupiry">  
                            <label for="catupiry">Catupiry (R$7.00)</label>
                        </div><!--catupiry-->
                        
                        <div class="chocolate">
                            <input type="radio" name="borda" id="chocolate">  
                            <label for="chocolate">Chocolate (R$7.00)</label>
                        </div><!--chocolate-->

                        <div class="cream-cheese">
                            <input type="radio" name="borda" id="cream-cheese">  
                            <label for="cream-cheese">Cream Cheese Philadelphia (R$10.00)</label>
                        </div><!--cream-cheese-->

                    </div><!--border-->
                    
                </div><!--overlay-middle-->

                <div class="clear"></div>

                <div class="observacao">
                    <h2>Observação</h2>
                    <textarea placeholder="Sem cebola, maionese extra..." class="obs" cols="30" rows="10"></textarea>
                </div><!--observacao-->
                
                <div class="div-subtotal">
                    <strong>
                        <span>Subtotal: </span>
                    </strong>
                        <span class="subtotal"></span>
                </div><!--subtotal-->

            </div>
        </div><!--overlay-->

        <section class="pizza-container">
            <div id='pizza-menu' class="pizza-menu">
                <div class="container">

                    <div class="opc">
                        <input type="radio" name="opc" id="option1">
                        <label for ='option1' class="opc1" " ><h2 ">TRADICIONAIS</h2>  <br><i id='opc1 'class="fa fa-chevron-circle-down" style="font-size:48px;color:#FFF""></i></label>
                    </div>

                    <div class="opc">
                        <input type="radio" name="opc" id="option2">
                        <label for ='option2' class="opc2"><h2>VEGANAS</h2><br><i id='opc2' class="fa fa-chevron-circle-down" style="font-size:48px;color:#FFF" ></i></label>
                    </div>

                    <div class="opc">
                        <input type="radio" name="opc" id="option3">
                        <label for ='option3' class="opc3"><h2>DOCES</h2><br><i id='opc4' class="fa fa-chevron-circle-down" style="font-size:48px;color:#FFF""></i></label>
                    </div>

                    <div class="opc">
                        <input type="radio" name="opc" id="option4">
                        <label for ='option4' class="opc4"><h2>LOW CARB</h2><br><i id='opc4' class="fa fa-chevron-circle-down" style="font-size:48px;color:#FFF" ></i></label>
                    </div>
                </div><!--container-->
            </div><!--pizza-menu-->
            <div class="tradicionais-container up cardapio">
                <table class="tradicionais">
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
                        $dadosJson = file_get_contents('json/tradicionais.json');

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
                    
                    </table><!--tradicionais-->
                
            </div><!--tradicionais-container-->
            <div class="veganas-container up cardapio">
                <table class="veganas">
                    <div class="menu-titulo">
                        <h2>VEGANAS</h2>
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
                        $dadosJson = file_get_contents('json/veganas.json');

                        $dadosJsonDecodificados = json_decode($dadosJson);

                        //print_r($dadosJsonDecodificados)
                        $index = 1;
                        foreach ($dadosJsonDecodificados->vegana as $veganas){
                            
                            echo "
                                <tr>
                                    <td>
                                        <span class='pizza-nome'>$veganas->name</span>
                                        <p>($veganas->tag)</p>
                                    </td>
                                    <td class='td-grande'>R$$veganas->price_33.00</td class='td-grande'>
                                    <td class='td-media'>R$$veganas->price_28.00</td>
                                    <td class='td-pequena'>R$$veganas->price_23.00</td>
                                    <td class='td-qtn' style='display: none'>$veganas->inCart<qtn>
                                </tr>";
                            $index++;
                        }
                    ?>
                    
                    </table><!--veganas-->
                
            </div><!--veganas-container-->
            <div class="doces-container up cardapio">
                <table class="doces">
                    <div class="menu-titulo">
                        <h2>DOCES</h2>
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
                        $dadosJson = file_get_contents('json/doces.json');

                        $dadosJsonDecodificados = json_decode($dadosJson);

                        //print_r($dadosJsonDecodificados)
                        $index = 1;
                        foreach ($dadosJsonDecodificados->doce as $doces){
                            
                            echo "
                                <tr>
                                    <td>
                                        <span class='pizza-nome'>$doces->name</span>
                                        <p>($doces->tag)</p>
                                    </td>
                                    <td class='td-grande'>R$$doces->price_33.00</td class='td-grande'>
                                    <td class='td-media'>R$$doces->price_28.00</td>
                                    <td class='td-pequena'>R$$doces->price_23.00</td>
                                    <td class='td-qtn' style='display: none'>$doces->inCart<qtn>
                                </tr>";
                            $index++;
                        }
                    ?>
                    
                    </table><!--doces-->
                
            </div><!--doces-container-->
            <div class="low-carb-container up cardapio">
                <table class="low">
                    <div class="menu-titulo">
                        <h2>LOW CARB</h2>
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
                        $dadosJson = file_get_contents('json/veganas.json');

                        $dadosJsonDecodificados = json_decode($dadosJson);

                        //print_r($dadosJsonDecodificados)
                        $index = 1;
                        foreach ($dadosJsonDecodificados->vegana as $low){
                            
                            echo "
                                <tr>
                                    <td>
                                        <span class='pizza-nome'>$low->name</span>
                                        <p>($low->tag)</p>
                                    </td>
                                    <td class='td-grande'>R$$low->price_33.00</td class='td-grande'>
                                    <td class='td-media'>R$$low->price_28.00</td>
                                    <td class='td-pequena'>R$$low->price_23.00</td>
                                    <td class='td-qtn' style='display: none'>$low->inCart<qtn>
                                </tr>";
                            $index++;
                        }
                    ?>
                    
                    </table><!--LOW CARB-->
                
            </div><!--low-container-->

        </section><!--pizza-container-->
        
        
        <section class='drink-container'>
            <div class="drink-menu">
                <div class="opc">
                    <input type="radio" name="drink" class='soda' id="soda" checked>
                    <label for ='soda' class="soda"><h2>REFRIGERANTES</h2><br><i id='soda'class="fa fa-chevron-circle-down" style="font-size:48px;color:#FFF" onclick="clicar7()"></i></label>
                </div>
                <div class="opc">
                    <input type="radio" name="drink" class='beer' id="beer">
                    <label for ='beer' class="beer"><h2>CERVEJAS</h2><br><i id='beer'class="fa fa-chevron-circle-down" style="font-size:48px;color:#FFF" onclick="clicar6()"></i></label>
                </div>
                <div class="opc">
                    <input type="radio" name="drink" class='wine' id="wine">
                    <label for ='wine' class="wine"><h2>VINHOS</h2><br><i id='wine'class="fa fa-chevron-circle-down" style="font-size:48px;color:#FFF" onclick="clicar7()"></i></label>
                </div>
            </div><!--drink-menu-->
        </section>
        
    </main>
    
                    
    <script src = 'jquery.js'></script>
    <script src = 'js/teste.js'></script>
    <script src = 'js/script.js'></script>
    <footer id="footer">
        
        <div class="img-footer"></div>
        <div class="adress">Pizzaria Real | R. Sábino José Ferreira, 719.99, Barbacena - MG, | Telefone: 3333-179.991</div>
        <div class="map-footer"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.79.993313411124!2d-43.771326685440705!3d-21.240043085860023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa220224d5775af%3A0x1b7a604455f8de05!2sPizzaria%20Real!5e0!3m2!1spt-BR!2sbr!4v16139.999.995679.99806!5m2!1spt-BR!2sbr" width="350" height="180" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
        
    </footer>
    <div class="footer-bottom">Desenvolvido por @sandro____f</div>
</body>
</html>