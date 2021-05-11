<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>home metalcritical</title>
    <link rel="stylesheet" href="css/homeStyle.css">
</head>
<body>
    <header>
        <img src="imagens/logo - certamente eu não peguei essa engrenagem da logo da bethesda.png" alt="">
        <ul id="menu_header">
            <li><a href="#slider">destaques</a></li>
            <li><a href="#imagens_jogos">preço</a></li>
            <li><a href="#campo_noticias">noticias</a></li>
            <li><a href="#campo_criticas">criticas</a></li>
        </ul>
       <div>
           <button id="btnlogin" onclick="abrirModal2()">login</button>
           <button id="btnregistrar" onclick="abrirModal()">registrar</button>
       </div>
       <nav>
        <hr class="linha_vermelha">
        <hr class="linha_azul">
       </nav>
    </header>
    <a href="#menu_header" id="btnvoltar">voltar</a>
    <div id="slider">
        <img class="selected" src="imagens/vergil_carrossel.png" alt="Image1">
        <img src="imagens/aides_carrossel.png" alt="Image2" id="imagem2">
    </div>
    <hr class="linha_vermelha" id="lv_2">

    <div id="imagens_jogos">
        <img src="imagens/aidskkkkkkk.png" alt="">
        <img src="imagens/alma do negão.png" alt="">
        <img src="imagens/Castela.png" alt="">
        <img src="imagens/dmcpreço.png" alt="">
        <img src="imagens/emoamumu.png" alt="">
        <img src="imagens/mariahmm.png" alt="">
        <img src="imagens/persona5preço.png" alt="">
        <img src="imagens/roçeirofudido.png" alt="">
        <img src="imagens/totristeman.png" alt="">
        <img src="imagens/blazblue.png" alt="">
        <img src="imagens/paccie.png" alt="" style="margin-right: 2px;">
        <img src="imagens/cyberpunk.png" alt="">
    </div>
    <div class="bg-modal" id="modal">
        <div class="modal">
            <span class="close" onclick="fecharModal()">&times;</span>
            <!-- cria o formulario cadastrar aqui -->
            <form action="inserir.php" method="POST" class="cadastro">
	
	<h1>Cadastrar</h1>

	
		
		<input type="text" size="10" name="nome" required placeholder="Nome"><br>
		
		<input type="text" size="10" name="email" required placeholder="E-mail"><br>
		
		<input type="text" size="10" name="senha" required placeholder="Senha"><br>
		<input type="submit" value="Enviar" class="enviar"><br>

		
	</form>
        </div>
    </div>
    <div class="bg-modal" id="modal2">
        <div class="modal">
            <span class="close" onclick="fecharModal2()">&times;</span>
            <!-- cria o formulario login aqui -->
            <form name="form" action="entrar.php" method="post" class="login">
        
                <h1>Entrar</h1>
        
                     <input type="text" name="usuario" required placeholder="Usuário">
                     <input type="password" name="senha" required placeholder="Senha">
                     
                    
                         <input type="submit" name="btn" value="Entrar" id="Entrar">
                    
                    
                    
                </form>
        </div>
    </div>
    <hr class="linha_azul" id="la_2">
    <h3>noticias</h3>
    <div id="campo_noticias">
        <img src="imagens/cellbit.png" alt="">
        <iframe width="1620" height="615" src="https://www.youtube.com/embed/SsUWqdWO7OM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="videocel"></iframe>
        <img src="imagens/cybernoticia.png" alt="">
        <iframe width="460" height="415" src="https://www.youtube.com/embed/liuFhVXAlZw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="videocp"></iframe>
        <img src="imagens/dmcnoticia.png" alt="">
        <iframe width="1620" height="610" src="https://www.youtube.com/embed/GL4tQAN-bCY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="videodmc"></iframe>
        <img src="imagens/giovannanoticia.png" alt="">
        <iframe width="1620" height="615" src="https://www.youtube.com/embed/OfftgU8ZI3U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="videogeo"></iframe>
        <img src="imagens/hadesnoticia.png" alt="">
        <iframe width="1620" height="615" src="https://www.youtube.com/embed/91t0ha9x0AE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="videohad"></iframe>
    </div>
    <hr class="linha_vermelha" id="lv_3">
    <hr class="linha_azul">
    <div id="campo_criticas">
    <img src="imagens/criticacritica.png" alt="" id="nomecritica">
    <div id="criticas">
          <img src="imagens/isaquecritica.png" alt="">
          <img src="imagens/mineiro.png" alt="">
          <img src="imagens/persona5critica.png" alt="">
          <img src="imagens/smashbros-blazazulcritica.png" alt="">
          <img src="imagens/cybercritica.png" alt="">
          <img src="imagens/alma do negão critica.png" alt="">
    </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>