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
        <div class="panel" id="empleado">
           
        </div>
    </div>
    <?php 
    include_once('libJS.php')
    ?>
    <script src="../Js/empleado.js"></script>
    <?php
    include_once('empleado/modal/nuevoEmpleado.php') ;
    include_once('empleado/modal/editarEmpleado.php')
    ?>

</body>

</html>