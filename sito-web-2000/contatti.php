<?php 
    require __DIR__ . '/partials/header.php';
?>
    
    <main>
        <h1>Contattaci</h1>

        <form method="GET">
            <input type="text" name="nome" placeholder="Inserisci il tuo nome">
            <input type="text" name="telefono" placeholder="Inserisci il tuo telefono">
            <input type="text" name="oggetto" placeholder="Motivo del contatto">
            <textarea name="testo" placeholder="Inserisci i motivi della richiesta..."></textarea>
            <button type="submit">Invia richiesta</button>
        </form>
    </main>

<?php 
    require __DIR__ . '/partials/footer.php';
?>