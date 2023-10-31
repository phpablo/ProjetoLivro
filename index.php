<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projeto Livro POO</title>
</head>

<body>
  <pre>
    <?php
    require_once 'Pessoa.php';
    require_once 'Livro.php';

    $p[0] = new Pessoa('Gohan', 11, 'masculino');
    $p[1] = new Pessoa('Bulma', 15, 'feminino');

    $l[0] = new Livro('Protocolo Bluehand', 'Jovem Nerd', 120, $p[0]);
    $l[1] = new Livro('PHPBásico', 'José da Silva', 400, $p[0]);
    $l[2] = new Livro('Hogwarts:Uma História', 'Batilda Bagshot', 600, $p[1]);

    print_r($l[0]);


    ?>
  </pre>
</body>

</html>