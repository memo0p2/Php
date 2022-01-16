<?php require('header.php');?>
<div class="contenedor">
    <div class="post">
        <article>
            <h2 class="titulo">Editar articulo</h2>
            <form class="formulario" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $post['id'];?>">
                <input type="text" name="titulo" id="titulo" value="<?php echo $post['titulo'];?>">
                <input type="text" name="extracto" id="extracto" value="<?php echo $post['extracto'];?>">
                <textarea name="texto"><?php echo $post['texto']; ?></textarea>
                <input type="file" name="thumb" id="thumb">
                <input type="hidden" name="thumb-guardada" value="<?php echo $post['thumb'];?>">
                <input type="submit" value="Modificar articulo">
            </form>
    </div>
</div>
<?php require('footer.php');?>