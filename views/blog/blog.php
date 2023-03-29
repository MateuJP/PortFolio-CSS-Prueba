<div class="container">
    <?php

use Model\Publicacio;

    include_once __DIR__ .'/../header.php';

    //$publicaciones=Publicacio::all();
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
                $ruta='/articulo?id='.$publi->idPublicacio;
                echo '<a class ="irPubli" href='.$ruta.'>';
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

    <?php 
if($hidenPag){

?>
<nav class="navegacionPaginacion ocultar">

<?php }else{

;?>
<nav class="navegacionPaginacion">

<ul class="pagination">
  
  
  <li class="page-item"><a class="page-link" 
  href="/blog?pagina=<?php 

    if(($_GET['pagina']??1)>1){
      echo ($_GET['pagina']??1)-1;
    }else{
      echo 1;
    }
  ?>">Anterior
</a>
  </li>
     

  <?php  for($i=0;$i<$numPaginas;$i++){
  ?>
        <li class="page-item"><a class="page-link" href="/blog?pagina=<?php echo ($i+1);?>"><?php echo ($i+1);?></a></li>
  <?php };?>  
  
  <li class="page-item"><a class="page-link" 
  href="/blog?pagina=<?php 
    if(($_GET['pagina']??1)<$numPaginas){
      echo ($_GET['pagina']??1)+1;
    }else{
      echo ($_GET['pagina']??1);
    }
  ?>">Siguiente
</a></li>
</ul>
</nav>
<?php };?>
