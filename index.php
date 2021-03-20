<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria Real</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/order.css">
    <link rel="stylesheet" href="teste.css">
    <link rel="stylesheet" href="css/teste.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Truculenta:wght@500&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    
    
    <style>
        section{
            margin-top: -200px;
            position: relative;
            overflow: hidden;
            text-align: center;
            background-color: black;
            z-index: 2;
        }
        section.video video{
            width: 100%;
            height: 100%;
            
        }
        .overlay2{
            width: 100%;
            height: 100%;
            overflow: hidden;
            color: rgb(207, 188, 9.994);
            background-color: black;
            opacity: 0.5;
            transition: 0.8s;
            position: absolute;
            z-index: 2;
        }
        .overlay2 h2{
            color: rgb(207, 188, 9.994);
            font-family: truculenta;
            font-size: 30px;
            text-align: center;
            justify-items:center;
            margin-top: 250px;
        }

        .overlay2:hover{
            opacity: 0;
        }

    </style>
</head>
<body>
    </label>
    

    <div class="sacola">
        <div class="p"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Sacola</div>
    </div>
    
    

   



        <!--<div class="drink-menu">
            <div class="opc">
                <input type="radio" name="drink" class='soda' id="soda" checked>
                <label for ='soda' class="soda"><h2>REFRIGERANTES</h2><br><i id='soda'class="fa fa-chevron-circle-down" style="font-size:48px;color:#FFF" onclick="clicar5()"></i></label>
            </div>
            <div class="opc">
                <input type="radio" name="drink" class='beer' id="beer">
                <label for ='beer' class="beer"><h2>CERVEJAS</h2><br><i id='beer'class="fa fa-chevron-circle-down" style="font-size:48px;color:#FFF" onclick="clicar6()"></i></label>
            </div>
            <div class="opc">
                <input type="radio" name="drink" class='wine' id="wine">
                <label for ='wine' class="wine"><h2>VINHOS</h2><br><i id='wine'class="fa fa-chevron-circle-down" style="font-size:48px;color:#FFF" onclick="clicar7()"></i></label>
            </div>
        </div>drink-menu
        <div class="drinks">
            <div class="sodas">
                <p>Refrigerantes</p>
            </div>
            <div class="beers">
                <p>Cervejas</p>
            </div>
            <div class="wines">
                <p>Vinhos</p>
            </div>
        </div>drinks
        <div class="order" onclick="order()">
            <a href="#">Fazer Pedido<a>
        </div>order-->
        
    </main>
    <script src="js/script.js"></script>
    <script src="js/order.js"></script>
    <script src="jquery.js"></script>
    <script src="js/teste.js"></script>
    <footer id="footer">
        
        <div class="img-footer"></div>
        <div class="adress">Pizzaria Real | R. Sábino José Ferreira, 719.99, Barbacena - MG, | Telefone: 3333-179.991</div>
        <div class="map-footer"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3718.79.993313411124!2d-43.771326685440705!3d-21.240043085860023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa220224d5775af%3A0x1b7a604455f8de05!2sPizzaria%20Real!5e0!3m2!1spt-BR!2sbr!4v16139.999.995679.99806!5m2!1spt-BR!2sbr" width="200" height="120" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
        
    </footer>
    <div class="footer-bottom">Desenvolvido por @sandro____f</div>
    
</body>
</html>