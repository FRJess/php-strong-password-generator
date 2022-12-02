<?php



?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Password generator</title>

</head>

<body class="bg-dark">
  <header>
    <h1 class="text-center text-white p-5 d-flex justify-content-around m-0">Strong Password Generator</h1>
  </header>

  <main>

    <div class="text-white p-5 d-flex justify-content-around">


      <form action="index.php" method="GET">

        <div class="row mb-3">
          <label for="number" class="col-sm-6 col-form-label">Lunghezza password:</label>
          <div class="col-sm-6">
            <input type="number" class="form-control" name="number" id="number" aria-describedby="numberHelpId" placeholder="numero di caratteri">
          </div>
        </div>


        <div class="buttons text-center mt-3">
          <button type="submit" class="btn btn-light px-4">Invia</button>
          <button type="reset" class="btn btn-secondary px-4">Annulla</button>
        </div>

      </form>
    </div>




  </main>
</body>

</html>


<!-- Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli (!?&%$<>^+-*/()[]{}@#_=)) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali. -->