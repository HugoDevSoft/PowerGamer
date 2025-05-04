<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Power Gamimg</title>
    <link rel="icon" href="imagens/logofooter.jpg" alt="Logotipo">
    <link rel="StyleSheet" type="text/css" href="CSS/estilo.css">
    <meta description
        content="Seja bem-vindo ao mundo dos Games e a nossa loja a Power Gaming uma loja voltada para gamers casuais e profissionais">
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
</head>

<body>
    <!-- HEADER/CABEÇALHO -->

    <header id="inicio">
        <div id="logo-header">
            <a href="index.html"><img src="imagens/logopower.png" alt="logo-header" class="Logotipo"></a>
        </div>
        <article>
            <nav class="nav">
                <a href="Computadores.html" tabindex="1">Computadores</a>
                <a href="Consoles.html" tabindex="2">Consoles</a>
                <a href="Jogos.html" tabindex="3">Jogos</a>
                <a href="cadastro.html" tabindex="4">Cadastro</a>
                <a href="Institucional.html" tabindex="5">Institucional</a>
            </nav>
        </article>

        <div class="hamburger-menu">
            <p class="btn-menu"></p><br>
            <p class="btn-menu"></p><br>
            <p class="btn-menu"></p><br>
        </div>
    </header>

    <main id="conteudo">

        <form class="formulario" method="post" action="cadastro.php" name="form">

            <!-- <div class="card-formulario">

                <h3 style="color: #37a0e0;">Já possuo cadastro.</h3>

                <p>
                    <label for="E-mail">E-mail:</label>
                    <br><input required="email" name="email" id="email">
                </p>

                <p>
                    <label for="Senha">Senha</label>
                    <br><input>
                </p>
                <span class="material-symbols-outlined" style="color: #000;">
                    login
                </span>

            </div> -->

            <!-- HEADER/CABEÇALHO -->
            <div class="card-formulario">

                <h3 style="color: #37a0e0;
                text-shadow: 0 0 10px #04a0fa, 0 0 40px #000, 0 0 70px#c0c0c0;">Ainda nao possuo cadastro.</h3>

                <p>
                    <label for="Nome">Nome:</label>
                    <br><input required type="text" name="nome" id="nome" placeholder="Nome completo" maxlength="15">
                </p>

                <p>
                    <label for="E-mail">E-mail:</label>
                    <br><input required="email" name="email" id="email">
                </p>

                <p>
                    <label for="Senha">Senha</label>
                    <br><input required="senha" name="senha" id="senha">
                </p>

                <button class="bt-formulario" Onclick="enviar(1)">Cadastrar</button>
                <input type="hidden" value="0" id="acao" name="acao">
                <input type="hidden" value="-1" id="id" name="id">
                <input type="text" id="codigo" name="codigo">


            </div>

        </form>

    </main>

    <footer>

        <a href="Institucional.html" class="institucional">INSTITUCIONAL</a>

        <div id="icon-footer">
            <div class="logo-rodape">
                <a href="index.html"><img src="imagens/logofooter.jpg" alt="Segundo Logotipo da empresa"></a>
            </div>

            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.0174588839527!2d-46.70983662391507!3d-23.53187446051099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef87e5c970af1%3A0xcb20de32a92d9e54!2sR.%20Rumaica%2C%20157%20-%20Vila%20Ipojuca%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2005057-020!5e0!3m2!1spt-BR!2sbr!4v1729379390935!5m2!1spt-BR!2sbr" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="assinatura">
            <h4>Power Gaming 2023®Hugao®Devsoƒt | Todos os direitos reservados™</h4>
        </div>

    </footer>

    </footer>
            

    <script src="js/jquery-3.7.1.js"></script>
    <script src="slick/slick.js"></script>
    <script>
        $(document).ready(function () {
            $('#destaque-s').slick({
                autoplay: true,
                autoplaySpeed: 2200,
                dots: true,
                arrows: false,
            });
        });

           </script>
</body>

</html>

<?php

include_once './conexao.php';

try {

	if (isset($_POST['codigo']) && isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) ) {
		$codigo = $_POST['codigo'];
		$nome = $_POST['nome'];
		$acao = $_POST['acao'];
		$id = $_POST['id'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

		$codigo = (int) $codigo;
		$acao = (int) $acao;


		//$conn = mysqli_connect('localhost:3306', 'root', 'admin', 'sistema') or die('Erro ao conectar ao banco de dados');

		echo "<br>";

		if ($acao == 1) {

			$sql = "INSERT INTO clientes VALUES ($codigo, $nome, $email, $senha);";
			if (mysqli_query($conn, $sql)) {
				echo "Cadastrado";
			} else {
				echo "ERRO " . $sql . "<br>" . mysqli_error($conn);
			}
		}
	



		mysqli_close($conn);
	}
} catch (Exception $e) {
	echo 'Erro: ',  $e->getMessage(), "\n";
} finally {
}


?>

