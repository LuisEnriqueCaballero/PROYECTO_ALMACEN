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
    <script src="../Js/proveedor.js"></script>
    <?php
    include_once('proveedor/modal/nuevoProveedor.php') ;
    include_once('proveedor/modal/editarProveedor.php')
    ?>

</body>

</html>