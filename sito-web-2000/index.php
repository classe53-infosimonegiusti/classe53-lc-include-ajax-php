<?php 
    require __DIR__ . '/partials/header.php';

    require __DIR__ . '/utils/functions.php';
?>
    
    <main>
        <h1>Benvenuto su Sito Web 2000!!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas tenetur laboriosam rerum earum, explicabo saepe consequuntur excepturi recusandae maxime id suscipit dolorum ad incidunt atque omnis soluta, similique reiciendis?</p>

        <?php
            echo '<h3>' . getSommaNumeriCasuali(0, 100) . '</h3>';
        ?>

    </main>




<?php 
    require __DIR__ . '/partials/footer.php';
?>
   