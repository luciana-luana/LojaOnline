<?php
 session_start();
 if (!isset($_SESSION['carrinho'])) {
     $_SESSION['carrinho'] = array();
 }
 
 if (isset($_GET['vazio'])) {
     unset($_SESSION['carrinho']);
     header('Location: ' . $_SERVER['PHP_SELF']);
     exit();
 }
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <title>carrinho</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/projeto.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="casopratico">
    <meta name="author" content="Luciana da Cruz">
    <script src="https://kit.fontawesome.com/7147b9e925.js" crossorigin="anonymous"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBn7fd-hZ8qFcHa66Rq8GASryLVRP9JfQo&callback=inicializar"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    
 <style>
@import url('https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap');

#btn-addcarrinho{
    background-color: #9799ca;
    border-radius: 10px;
    font-size: 20px;
    border: solid 2px white;
    height: 50px;
    width: 250px;
    margin-bottom: 50px;
}
</style>

</head>

<body> 

    <div class="header" style="background-color:#9799ca; height: 50px;">
   <p>Envio gratuito em todas as encomendas</p>
    </div>


    <article>
    <h1 style="text-align: center; color:#9799ca; font-family:Shadows Into Light; font-size: 60px;">carrinho</h1>
    
    <?php 
          $iten = array ('ROZINO com vitamina C: Inclui limpador de toner, creme facial e soro', 
          'Morbea Skincare: Conjunto Coreano com 10 Peças',
          'Tratamento Facial Pele Mista - Gordurosa Kosmetiké',
          'Kit Beleza Natural', 'Sakura Skin Care', 'Máscara Hidratante de Colágeno e Abacate', 'Creme Hidratação Redensificante Rich Sorbet I Timexpert',
          'Garnier, Sérum facial iluminador e anti-manchas','Sérum facial 3 Pack - vitamina C, retinol, ácido hial',
          'Creme facial regeneradora + tónico + Leite Desmaquillante'
                ); 
          $preco = array (13,50,26,35,15,15,25,5,17,9); 
          $imagens = array ('img/prod1.jpg','img/prod2.jpg', 'img/prod3.jpg', 'img/prod4.jpg', 'img/prod5.jpg', 'img/prod6.png', 'img/prod7.png', 'img/prod8.jpg', 'img/prod9.jpg', 'img/prod10.png');
          $descricao = array ('Aclara o tom da pele, combate as rugas, hidrata e ilumina a pele, e suaviza as linhas de expressão, proporcionando uma pele radiante e saudável.',
          'Conjunto Coreano com 10 Peças de ácido hialurônico, toner facial, Cremes hidratantes e clareador para Mulheres. Kit de cuidados com a pele para viagem.',
          'Tratamento completo facial ideal para peles com tendência a gordura. Elimina todo o tipo de impurezas e controla o excesso de brillos. Cosméticos com grande poder de hidratação e recuperação da pele.',
          'Tudo o que precisas para momentos de beleza! Cuida de ti da cabeça aos pés com os indispensáveis de beleza.
           Esfoliante de Corpo Rico 250 ml + Óleo de Duche 200 ml + Leite de Corpo Nutritivo 200 ml+ Creme de Mãos Nutritivo 75 ml + Saco de Algodão.','Conjunto de cuidados com a pele sakura: Limpador facial, creme hidratante facial, protetor solar, máscara hidratante, toner para os olhos e sérum clareador',
           'Restaure elasticidade e firmeza da pele ao redor dos olhos, combatendo edema, bolsas e olheiras. Proporcione um brilho instantâneo antes da maquiagem ou eventos especiais, hidratando profundamente a pele ocular.',
           'Todo o poder do Ácido Hialurônico em uma fórmula exclusiva com HLG patenteado, sGAGS, NAG e PGA capaz de sintetizar ácido hialurônico endógeno, uma propriedade da pele que se perde com a idade.', 'Sérum facial hidratante anti-manchas e anti-olheiras com vitamina C e SPF25 para proteger a pele contra manchas solares, melhorando a uniformidade de todos os tipos de pele.',
           'o nosso sérum facial contém vitamina C, ácido hialurónico e retinol. Este produto inovador penetra profundamente nas camadas da pele, absorvendo-se imediatamente para uma ação SUPER hidratante e re- enchimento imediato.',
           'Creme Facial Kosmetiké que ajuda a corrigir as arrugas e imperfeições da pele. Contribui uma perfeita hidratación e regeneração, renovando a pele e alisando as arrugas e linhas de expressão conseguindo uma pele visivelmente mais jovem.'
          );
    ?>

   
    <div class="row mx-lg-n5" class="columns">
   <div class="col py-3 px-lg-5 border-bs-body-bg"> <!--coluna 1 > -->
   
    <table> 
        <thead> 
            <tr> 
                <th></th>
                <th>Produto</th>
                <th>Preço</th> 
            </tr> 
        </thead> 

        <tbody> 

        <?php  
      $total = 0; 
      for ($i = 0; $i < count($_SESSION['carrinho']); $i++) { 
          echo '<tr>'; 
          echo '<td><img src="' .($imagens[$_SESSION['carrinho'][$i]]) . '" alt="prod1" style="width: 150px; height: 150px;"></td>';
          echo '<td>' . $iten[$_SESSION['carrinho'][$i]]. '</td>'; 
          echo '<td align="right">'; 
          echo number_format($preco[$_SESSION['carrinho'][$i]], 2) . ' €</td>'; 
          echo '</tr>'; 
          $total = $total + $preco [$_SESSION['carrinho'][$i]];
}
?> 

  </tbody> 
        <tfoot> 
            <tr> 
                <th align="right"> Total:</th><br> 
                <th align="right"><?php echo $total; ?> €</th> 
            </tr> 
        </tfoot> 
    </table> 
    <p>
                    <a href="produtos.php">Continuar a comprar</a> ou 
                    <a href="<?php echo $_SERVER['PHP_SELF']; ?>?vazio=1">Esvaziar o carrinho</a>
                </p>



         <div class="btn-contato">
         <a href="formcarrinho.php"> 
         <button id="btn-addcarrinho">Finalizar compra</button>
         </a>
       </div>
      

    </article>
           
   

    <footer style="height: 400px">

        <div class="container">
            <div class="row">
              <div class="col-sm">
                <img src="IMG/natura2.png" style="width: 400px; height: 400px;" alt="logosemfundo">
              </div>
              <div class="col-sm" style="padding-top: 200px;">
                <a href="#instagram"><i class="fa-brands fa-facebook"style="color:black"></i></a>
            <a href="#facebook"><i class="fa-brands fa-instagram" style="color: black"></i></a>
            <a href="#linkedin"><i class="fa-brands fa-linkedin"style="color: black"></i></a>
            <a href="#twiter"><i class="fa-brands fa-twitter"style="color: black"></i></a>
            <p style="font-family: fantasy; padding-bottom: 60px; color:black;">Luciana da Cruz</p>
              </div>
              <div class="col-sm" style="padding-top: 150px;">
                <ul>
                    <li style="font-family: fantasy; color:black;"><i class="fa-sharp fa-solid fa-phone fa-shake" style="color: black;"></i>(+351) 912649938</li>
                    <li style="font-family: fantasy; color: black;"><i class="fa-solid fa-envelope" style="color: black;"></i>lucianadacruz.unicv@gmail.com</li>
                </ul>
              </div>
            </div>
          </div>
    
    </footer>
    <script async src="javascript/loja.js"></script>
    

    </body>

</html>