<div class="container">
    <?php

use Model\Autor;

    include_once __DIR__ .'/../header.php';

    $autores=Autor::all();
    ?>

    <div class="contenedor publicacion">
        <form class="publicación" method="POST" action="/publicar" enctype="multipart/form-data">
            
            <div class="campo publicacion">
                <input type="text" placeholder="Título" name="titulo">
            </div>

            <div class="campo publicacion">
                <input class="numImagenes" type="number" name="numImagenes">
                <div class="Inputimagenes"></div>


            </div>
            <div class="campo publicacion">
                <select id="autor" name="Autor[opciones]">
                    <option  selected>Autor</option>
                                <?php foreach($autores as $autor){
                                ?>
                            <option value=<?php echo $autor->idAutor;?>> <?php echo $autor->nom ." ". $autor->llinatge;?></option>
                            <?php };?>
                </select>
            </div>
            <div class="campo publicacion">
                <textarea name="texto"></textarea> 
            </div>

            <div class="boton publicar">
                <input type="submit" value="Publicar">
            </div>


        </form>
      
    </div>
</div>

<script src='build/js/app.js'></script>
