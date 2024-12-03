<!-- header.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Amor em Calda</title>
</head>
<body>
    <header class="topo">
        <div class="logo">
            <img src="img/logom.jpg" alt="Logo Amor em Calda">
        </div>
        <nav class="menu">
       
            <ul div id="myLinks">
                <li> <a href="home.php">Home |</a></li>
                <li><a href="produtos.php">Produtos |</a></li>
                <li><a href="carro_chefe.php">Carro Chefe |</a></li>
                <li><a href="contato.php">Contato |</a></li>
                <li><a href="sobre.php">Sobre Nós |</a></li>
            </ul>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
</a>
        </nav>
    </header>
    <h1>Nós somos uma confeitaria especializada em doces artesanais. </h1>
   
   
   <script>
            function myFunction() {
            var x = document.getElementById("myLinks");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
            }
</script>
</body>
</html>
