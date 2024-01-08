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
        <div class="panel" id="vehiculo">
           
        </div>
    </div>
    <?php 
    include_once('libJS.php')
    ?>
    <script src="../Js/vehiculo.js"></script>
    <?php
    include_once('vehiculo/modal/nuevoVehiculo.php') ;
    include_once('vehiculo/modal/editarVehiculo.php')
    ?>

</body>

</html>