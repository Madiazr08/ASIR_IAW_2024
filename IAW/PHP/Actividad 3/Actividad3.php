<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="UTF-8">
                <title>Ejercicio 3 PHP</title>

        </head>
        <body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px">

            <header style="background-color: #007BFF; color: white; padding: 10px 0; text-align: center">
                <h1>Ejercicio 3 PHP</h1>
                    <p>Comentarios en PHP</p>
            </header>


            <article style="background: white; border: 1px solid #ccc; margin: 20px 0; padding: 15px">
                <h2 style="color: #333;">¿Qué significa <.?php?</h2>
                <?php
                //Abajo es la respuesta y arriba es la pregunta// 
                echo "Es la etiqueta de apertura del código"; ?>

                <h2 style="color: #333;">¿Para qué sirve echo?</h2>
                <?php 
                /*Lo mismo de arriba pero comentado de una forma diferente*/
                echo "Es una instrucción de PHP que nos permite mostrar el texto pasado como parámetro entrecomillado."; ?>

                <h2 style="color: #333;">¿Qué ocurre cuando ejecutas el archivo en un servidor?</h2>
                <?php 
                // <-- Esta es la forma de comentar en PHP//
                echo "<p>Nos devuelve el código en HTML</p>"; ?>
                </article>


        </body>
</html>