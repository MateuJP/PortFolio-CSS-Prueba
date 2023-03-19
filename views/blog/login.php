<div class="container">
    <?php
    include_once __DIR__ .'/../header.php';
    ?>

    <div class="login">
        <form class="formulario login" method="POST" action="/login">
            <div class="campo login">
                <label>E-mail</label>
                <input type="email" placeholder="E-Mail" name="email">
            </div>

            <div class="campo login">
                <label>Password</label>
                <input type="password" placeholder="Password" name="password">
            </div>

            <div class="boton login">
                <input type="submit" value="Iniciar Sesión">
            </div>
        </form>
    </div>
</div>
