<div class="container">
    <?php
    include_once __DIR__ .'/../header.php';
    ?>

    <div class="wrapper">
        <div class="cols cols0">
            <span class="topline">Hello</span>
            <h1>I'm <span class="multiText"></span></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam illo? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam illo?</p>
            <div class="btns">
                <button>download CV</button>
                <a href="/contactar">  <button>Contact Me</button> </a>
              

            </div>
        </div>
        <div class="cols cols1">
            <div class="imgbox">
                <img src="build/img/splash.png"  id="splash">
            </div>
        </div>
    </div>
    
</div>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    var typingEffect = new Typed(".multiText",{
        strings : ["Dev","Project Manager","Blockchain Dev"],
        loop : true,
        typeSpeed : 100,
        backSpeed : 80,
        backDelay : 1500
    })

</script>