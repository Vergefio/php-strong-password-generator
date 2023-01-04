<!-- Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli (!?&%$<>^+-*/()[]{}@#_=)) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
 -->





<!-- passaggio 1: creare array diversi con i vari caratteri a seconda che siano lettere, maiuscole, numeri, simboli.
e unire questi array -->


<!-- 'letters' => [
    'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'l', 'm',
  ],
  'numbers' => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
  'symbols' => ['!', '?', '&', '%', '$', '<', '>', '^', '+', '-', '*', '/', '(', ')', '[', ']', '{', '}', '@', '#', '_', '='], -->

  <?php



$letters = [
  'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'l', 'm',
];

$numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

$symbols = ['!', '?', '&', '%', '$', '<', '>', '^', '+', '-', '*', '/', '(', ')', '[', ']', '{', '}', '@', '#', '_', '='];


$result = array_merge($letters, $numbers, $symbols);

var_dump($result);


/**
 * function nomeFunzione(par1)){
 *  for ($i = 0; $i < $par1; $i++) {
 *  }
 * }
 * 
 *   nomeFunzione(valore)
 *
 */


function pswGenereted()
{
  $pass = '';
  for ($i = 0; $i < $_GET['characters']; $i++) {
    // rand(0, count($result))
    $pass .= $result[rand(0, count($result))];
  }
}


pswGenereted($_GET['characters'])
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
  <title>Document</title>
</head>

<body>

  <div class="container">
    <div class="row">
      <form method="GET">
        <div class="form-group my-5">
          <input type="number" name="characters" class="form-control" placeholder="Numero caratteri password">
        </div>
        <button type="submit" class="btn btn-danger">Genera password</button>
      </form>
    </div>
  </div>


</body>

</html>