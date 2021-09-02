<html>
    <body>
        <form method="post" action="h1.php" >
            Nome Completo:  <input type="text" name="nome_completo" />
            Idade:  <input type="number" name="idade" />
            <input type="submit" name="Enviar">
        </form>
    <?php
        echo '<pre>' . print_r($_POST, true) . '</pre>';
    ?>
    </body>
</html>


