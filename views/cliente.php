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
        <div class="panel" id="cliente">
           
        </div>
    </div>
    <?php 
    include_once('libJS.php')
    ?>
    <script src="../Js/cliente.js"></script>
    <?php
    include_once('cliente/modal/nuevoCliente.php') ;
    include_once('cliente/modal/editarCliente.php')
    ?>

</body>

</html>