<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Associative Array</title>
</head>
<body>
  <?php
    $genreMovies = array("Sherlook Holmes" => 'Ficção', "ToyStory" => 'Animação', "Simplesmente Acontece" => 'Romance', "O Mistério no Mediterraneo" => 'Comédia', "Alerta Vermelho" => 'Ação', "Anabelle" => 'Terror', "Águas Profundas" => 'Suspense');
    
    echo "Gosto de assistir ". $genreMovies['Sherlook Holmes'] . "\n"; 
    echo "Gosto de assistir ". $genreMovies['ToyStory'] . "\n"; 
    echo "Gosto de assistir ". $genreMovies['Simplesmente Acontece'] . "\n";
    echo "Gosto de assistir ". $genreMovies['O Mistério no Mediterraneo'] . "\n"; 
    echo "Gosto de assistir ". $genreMovies['Alerta Vermelho'] . "\n";
    echo "Gosto de assistir ". $genreMovies['Anabelle'] . "\n";   
    echo "Gosto de assistir ". $genreMovies['Águas Profundas'] . "\n"; 

  ?>
</body>
</html>