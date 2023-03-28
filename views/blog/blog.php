<div class="container">
    <?php

use Model\Publicacio;

    include_once __DIR__ .'/../header.php';

    $publicaciones=Publicacio::all();
    /*    <div class="publi">
        <h1><?php echo $publi->titulo?></h1>
        <div class="dateTime">
            <p><?php echo $publi->fecha;?></p>
            <p><?php echo $publi->hora;?></p>
        </div>
    </div>*/
    ?>

    
    <div class="publicaciones">
        <?php
            foreach ($publicaciones as $publi){
                echo '<a class ="irPubli" href="#">';
                echo '<div class="publi">';
                echo '<h3>'. $publi->titol .'</h3>';
                echo '<div class="dateTime">';
                echo '<p>'. $publi->fecha .'</p>';
                echo '<p>'. $publi->hora .'</p>';
                echo '</div>';
                echo '</div>';
                echo '</a>';
            }
        ?>
    </div>

</div>

