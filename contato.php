<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Tech</title>
    <link rel="stylesheet" href="css/estilo.css">

    <script>
        function validarForm(){
            let nome = document.forms["formCadastro"]["nome"].value;
            let email = document.forms["formCadastro"]["email"].value;
            let telefone = document.forms["formCadastro"]["telefone"].value;

            if (nome == ""){
                alert("Preencha o nome!");
            }
            else if(email == ""){
                alert("Preencha o e-mail!")
            }
            else if(telefone == ""){
                alert("Preencha o Whatsapp!")
            }
            else{
                alert("Enviado");

            }
        }
    </script>
    
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logotipo5.png" alt="Logotipo New Tech">
        </div>

        <nav>
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="cadastro.php">CADASTRAR</a></li>
                <li><a href="entrar.php">ENTRAR</a></li>
                <li><a href="contato.php">CONTATO</a></li>
            </ul>
        </nav>
    </header>
    
    <!-- INICIO DA CONSTRUÇÃO DO FORMULÁRIO CONTATO-->

   <section class="contato">

   <div class="cont">
    <h1>FALE CONOSCO</h1>

    <form form name="formCadastro" action="contato2.php" method="POST">

    <input type="text" name="nome" placeholder="Digite o seu nome">
    <br>

    <input type="email" name="email" placeholder="Digite o seu email">
    <br>

    <input type="tel" name="telefone" placeholder="Digite o seu Whatsapp">
    <br>

    <textarea name="Comentario" placeholder="Digite seu comentário/dúvidas"></textarea>
    <br>

    <input type="submit" name="enviar" value="ENVIAR" onclick="validarForm()">

    </form>
   </div>

   <div class="cont">
    <img src="img/contato.png" alt="Imagem de Contato New Teck">
   </div>




   </section>
    
<!--Inserir os dados do rodapé-->

<footer>

    <div class="rodape">
        <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="celulares.html">CELULARES</a></li>
            <li><a href="tablets.html">TABLET'S</a></li>
            <li><a href="contato.html">CONTATO</a></li>
            <li><a href="cadastro.php">CADASTRO</a></li>
            <li><a href="entrar.php">ENTRAR</a></li>
        </ul>
    </div>

    <div class="rodape">
        <p>Rua da liberdade n 22 - Bairro Livre</p>
        <p>Diadema - SP  09870-189</p>
    </div>

    <div class="rodape">
        <p>Siga as nossas Redes sociais</p>
        <a href="#"><img src="img/facebook.png" alt="Facebook New Tech"></a>
        <a href="#"><img src="img/instagram.png" alt="Instagram New Tech"></a>
        <a href="#"><img src="img/youtube.png" alt="Youtube New Tech"></a>
    </div>
</footer>






<!--Configurações do JavaScript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="js/cycle.js"></script>

</body>
</html>