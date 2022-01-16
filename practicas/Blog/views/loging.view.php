<?php require('header.php');?>
<div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo">Iniciar sesion</h2>
                <form class="formulario" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                    <input type="text" name="usuario" id="usuario" placeholder="Usuario">
                    <input type="password" name="password" id="password" placeholder="Password">
                    <input type="submit" value="Iniciar sesion">
                </form>
            </article>
        </div>
    </div>
<?php require('footer.php');?>