<!-- Creare una variabile con un paragrafo di testo.
 Visualizzare a schermo il paragrafo con la relative
  lunghezza e sostituire la badword passata in GET con tre * -->
    
    
    <?php
        //$testo = 'Claudio Carchietti';
        //var_dump($_GET['nome']);
        // $testo = $_GET['nome'] . ' ' . $_GET['cognome'];
        
        $esercizio = 'Lorem ipsum dolor sit amet consectetur Lorem adipisicing elit. Nostrum eaque fuga in Lorem dolorum 
        suscipit veniam voluptatem! Quam ea sunt, Lorem iusto ipsum vitae accusantium eos';
        $badWord = $_GET['censura'];
    ?>


    <div>  
        <?php //var_dump($testo) ?>
        <!-- Ciao <?php echo $testo; ?> -->
        <p><?php echo str_replace($badWord, "***",  $esercizio) ?>.</p>
        <br>
        <p>La lunghezza della frase è di <?php echo strlen($esercizio) ?> lettere.</p>
        
    </div>