<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multidimensional Array</title>
</head>
<body>
  <?php
    $livros = array(
      array("A culpa é das estrelas", "Romance", "John Green"),
      array("O pântano das borboletas", "Romance", "Frederico Axat"),
      array("Não leve a vida tão a sério", "Autoajuda", "Hugh Prather"),
      array("Revolução dos bichos", "Sátira política", "George Orwell"),
      array("Mais esperto que o diabo", "Autoajuda", "Napoleon Hill"),
      array("Harry Potter e a Pedra Filosofal", "Ficção", "J.K. Rowling"),
      array("Cartas de um diabo a seu aprendiz", "Cristão", "C.S Lewis")
    );

    echo "O livro: " . $livros[0][0] . " é do gênero: " . $livros[0][1] . " e foi escrito por: " . $livros[0][2];
    echo "O livro: " . $livros[1][0] . " é do gênero: " . $livros[1][1] . " e foi escrito por: " . $livros[1][2];
    echo "O livro: " . $livros[2][0] . " é do gênero: " . $livros[2][1] . " e foi escrito por: " . $livros[2][2];
    echo "O livro: " . $livros[3][0] . " é do gênero: " . $livros[3][1] . " e foi escrito por: " . $livros[3][2];
    echo "O livro: " . $livros[4][0] . " é do gênero: " . $livros[4][1] . " e foi escrito por: " . $livros[4][2];
    echo "O livro: " . $livros[5][0] . " é do gênero: " . $livros[5][1] . " e foi escrito por: " . $livros[5][2];
    echo "O livro: " . $livros[6][0] . " é do gênero: " . $livros[6][1] . " e foi escrito por: " . $livros[6][2];
  ?>
  
</body>
</html>