<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="UTF-8">
                <title>Ejercicio 1 PHP</title>

        </head>
        <body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px">

            <header style="background-color: #007BFF; color: white; padding: 10px 0; text-align: center">
                <h1>Ejercicio 1 PHP</h1>
                    <p>¿Qué es PHP?</p>
            </header>


            <article style="background: white; border: 1px solid #ccc; margin: 20px 0; padding: 15px">
                <h2 style="color: #333;">¿Dónde se ejecuta el código PHP: en el servidor o en el cliente?</h2>
                <?php echo "Se ejecuta en el lado del servidor"; ?>

                <h2 style="color: #333;">¿Qué tipo de contenido puede generar PHP?</h2>
                <?php echo "<p>Se puede trabajar con cookies, procesar formularios, generar contenidos dinámicos (acceso a bases de datos), enviar e-mails…</p>"; ?>

                <h2 style="color: #333;">¿Cuál es la diferencia entre PHP y JavaScript en términos de dónde se ejecutan?</h2>
                <?php echo "<p>La diferencia con lenguajes con JavaScript es que el código PHP se ejecuta en el servidor y es este el que envía el resultado de la ejecución al navegador para que este lo interprete y lo muestre</p>"; ?>
                </article>


        </body>
</html>