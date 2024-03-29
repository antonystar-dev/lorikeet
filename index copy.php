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
    menu
    
  </div>
  
  <div>
    carrossel
  </div>
  <div>
    tamanhos
  </div>
    <div>

      <?php
        include("models/Banco/config.php");//include temporario
        switch (@$_REQUEST["page"]) {
          case "novo":
            include("view/novo-produto.php");
            break;
          case "listar":
            include("view/lista-produto.php");
            break;
            case "salvar":
            include("view/salvar-produto.php");//remover daqui
            case "editar":
              include("view/editar-produto.php");
              break;
          default:
          include("view/lista-produto.php");

        }
        ?>
    
  </div>
  <div>
    rodape
  </div>
</body>

</html>