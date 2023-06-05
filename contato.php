
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/contato.css">
    <link rel="stylesheet" type="text/css" href="css/media-query.css">
    <title>IRTVM</title>
    <link rel="shortcut icon" href="imagem/favicon.ico" type="image/x-icon">
</head>

<body onresize="mudouTamanho()">
     
            <div class="img">
                <img  src="imagem/logo1.png" alt="IRTVM" height="70" />
            </div>
            <i id="burguer" class="material-icons" onclick="clickMenu()">menu</i>
            <menu id="itens">
                
                <ul>
                    <li><a href="index.html">IRTVM</a></li>
                    <li><a href="cursos.html">Cursos</a></li>
                    <li><a href="sobre.html">Sobre</a></li>
                    <li><a href="contato.html">Contato</a></li>
                    <li><a href="./portal/index.php">Acesso</a></li>
                
                </ul>
            </menu>
    <main>
    <article id="formulario">
    <?php
    include ('conexao.php');
    session_start();
    ?>
       <!--  -->
       <?php
        if (empty($_POST['nome']) || empty($_POST['sobrenome']) 
        ||  empty($_POST['email']) ||  empty($_POST['tel']) ||
            empty($_POST['assunto']) || empty($_POST['dúvidas'])) {
           // header('Location: contato.php');
            //exit();
        }

        $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
        $sobrenome = mysqli_real_escape_string($conexao, $_POST['sobrenome']);
        $email = mysqli_real_escape_string($conexao, $_POST['email']);
        $tel = mysqli_real_escape_string($conexao, $_POST['tel']);
        $assunto = mysqli_real_escape_string($conexao, $_POST['assunto']);
        $duvidas = mysqli_real_escape_string($conexao, $_POST['duvidas']);
        ?>

        <?php
        $sql = "INSERT INTO contato (nome, sobrenome, email,tel, assunto, duvidas) VALUES ('".$nome."','" .$sobrenome."','" .$email."','" .$tel."', '" .$assunto."','" .$duvidas."')";
        if ($conexao->query($sql) === TRUE) {
            echo "DADOS GRAVADOS COM SUCESSO!";
          } else {
            echo "Error: " . $sql . "<br>" . $conexao->error;
          }
          
        //if($row == 1){
           // echo"Olá $nome, muito obrigada por seu contato!";
           // exit;
       // }
       $conexao->close();
        ?>
    </article>
    </main>

    <br>
    <footer> <!-- Rodapé--->
        
        <p>IRTVM Cursos Ltda CNPJ: 29.480.532/0001-10 <br>
        Rua São Joaquim da Barra, 550 Quadra F-10 <br>Parque Industrial - CEP: 02022-136 – São Paulo – SP <br>
        Telefone: (11) 3948-5013 - E-mail: sac@irtvm.com.br</p>
    </footer> <br>

    <h3> Todos os direitos reservados - Desenvolvido por Thais Napolitano</h3> <br>
    <script>
        function mudouTamanho(){
            if(window.innerWidth >= 768){
                itens.style.display = 'block'
            } else {
                itens.style.display = 'none'
            }

        }
               function clickMenu(){
            if (itens.style.display == 'block'){
                itens.style.display = 'none'
            }else {
                itens.style.display = 'block'
            }
        }
    </script>
</body>
</html>