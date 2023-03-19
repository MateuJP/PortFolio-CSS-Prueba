<div class="container">
    <?php
    include_once __DIR__ .'/../header.php';
    ?>

    <div class="contenido_form">
        <section id="contact">
	    <div class="sectionheader">	<h1>CONTACTO</h1></div>
	    <article>
	    <p>Mandame un Correo y me pondé en contacto con usted</p>
    
	    		<label for="checkcontact" class="contactbutton"><div class="mail"></div></label><input id="checkcontact" type="checkbox">
    
	    		<form action="" method="post" class="contactform">
	    			<p class="input_wrapper"><input type="text" name="contact_nom" value=""  id ="contact_nom"><label for="contact_nom">NOMBRE</label></p>
	    			<p class="input_wrapper"><input type="text" name="contact_email" value=""  id ="contact_email"><label for="contact_email">EMAIL</label></p>
	    			<p class="input_wrapper"><input type="text" name="contact_sujet" value=""  id ="contact_sujet"><label for="contact_sujet">TEMA</label></p>
	    			<p class="textarea_wrapper"><textarea name="contact_message" id="contact_message"></textarea></p>
	    			<p class="submit_wrapper"><input type="submit" value="SEND"></p>			
	    		</form>
	    </article>
        </section>
    </div>
</div>