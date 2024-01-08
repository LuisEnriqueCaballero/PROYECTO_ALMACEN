<?php
include_once('libCSS.php') 
?>

<body>
    <?php 
    include_once('sidebarmenu.php')
    ?>
    <?php
    include_once('navmenu.php')
    ?>
    <div class="contenerdor-informacion">
        <div class="panel" id="usuario">
           
        </div>
    </div>
    <?php 
    include_once('libJS.php')
    ?>
    <script src="../Js/usuario.js"></script>
    <?php
    include_once('usuario/modal/nuevoUsuario.php') ;
    include_once('usuario/modal/editarUsuario.php')
    ?>

</body>

</html>