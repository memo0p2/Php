<?php require('header.php');?>
<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo">Nuevo articulo</h2>
            <form class="formulario" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
                <input type="text" name="titulo" id="titulo" placeholder="Titulo del articulo">
                <input type="text" name="extracto" id="extracto" placeholder="Extracto del articulo">
                <textarea name="texto" id="texto" placeholder="Texto del articulo"></textarea>
                <input type="file" name="thumb" id="thumb">
                <input type="submit" value="Crear articulo">
            </form>
    </div>
</div>
<?php require('footer.php');?>