<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lorikeet - moda infantil</title>
    <link href="#" rel="stylesheet">
</head>

<body>

  <div>
    <a href="?page=novo" class="itemMenu">Novo</a>

    <a href="?page=listar" class="itemMenu">Listar</a>
  </div>
  
  <div>
    
    <div>

      <?php
        include("models/Banco/config.php");//include temporario
        switch (@$_REQUEST["page"]) {
          case "novo":
            include("novo-produto.php");
            break;
          case "listar":
            include("lista-produto.php");
            break;
            case "salvar":
            include("salvar-produto.php");
            case "editar":
              include("editar-produto.php");
              break;
          default:
          include("lista-produto.php");

        }
        ?>
    </div>
  </div>
</body>

</html>