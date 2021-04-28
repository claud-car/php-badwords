    <?php
        //$testo = 'Claudio Carchietti';
        //var_dump($_GET['nome']);
        $testo = $_GET['nome'] . ' ' . $_GET['cognome'];
    ?>

    <div>
        <?php //var_dump($testo) ?>
        Ciao <?php echo $testo ?>
    </div>