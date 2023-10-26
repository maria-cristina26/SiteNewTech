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
            let senha = document.forms["formCadastro"]["senha"].value;

            if (nome == ""){
                alert("Preencha o nome!");
            }
            else if(email == ""){
                alert("Preencha o e-mail!")
            }
            else if(senha == ""){
                alert("Preencha a senha!")
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
    
    <!-- INICIO DA CONSTRUÇÃO DO FORMULÁRIO CADASTRO-->

    <div class="cadastro">
        <div class="cad" id="cadastro">
            <h1>Cadastro de Clientes</h1>
            <form name="formCadastro" action="">
             <input type="text" id="nome" placeholder="Digite seu nome completo"> <br>

             <input type="email" id="email" placeholder="Digite seu e-mail"> <br>

             <input type="password" id="senha" placeholder="Digite uma senha segura"><br>

             <input type="radio" id="feminino" value="Feminino" name="sexo">Feminino

             <input type="radio" id="masculino" value="Masculino" name="sexo">Masculino 
             
             <input type="radio" id="outro" value="Outro" name="sexo">Outros<br>

             <input type="button" id="b-cadastro" value="CADASTRAR" onclick="validarForm()">
                        
            </form>

        </div>

        <div class="cad">
            <img src="img/cliente.png" alt="New Tech">
        </div>

    </div>

    
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