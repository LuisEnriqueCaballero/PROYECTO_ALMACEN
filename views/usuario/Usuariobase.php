<div class="panel_informativo">
    <h1 class="titulo">lista de usuario </h1>
    <div class="busqueda">
        <div class="control_busqueda">
            <div class="seccion_busqueda">
                <label for="">inicio</label>
                <input type="date" name="nombre" class="form-control" id="nombre">
            </div>
            <div class="seccion_busqueda">
                <label for="">final</label>
                <input type="date" name="nombre" class="form-control" id="nombre">
            </div>
            <div class="seccion_busqueda">
                <label for="">nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre">
            </div>
            <div class="seccion_busqueda">
                <label for="">nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre">
            </div>
        </div>
        <div class="boton_agregar">
            <button type="button" class="btn" data-toggle="modal" data-target="#nuevousuario">
                <i class="fa fa-user-plus" aria-hidden="true"></i>Agregar
            </button>
        </div>
    </div>
    <div class="lista_usuario">
        <table class="table table-hover table-bordered" id="example">
            <thead>
                <tr>
                    <th>#</th>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>area trabajo</th>
                    <th>accion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>luis enrique</td>
                    <td>caballero canchaya</td>
                    <td>administracion</td>
                    <td>
                        <!-- <div class="contenido_lista"> -->
                            
                            <nav class="navbar navbar-expand navbar-light bg-light contenido_lista">
                                    <div class="collapse navbar-collapse" id="navbarScroll">
                                        <ul class="navbar-nav mr-auto my-0 my-lg-0 navbar-nav-scroll"
                                            style="max-height: 100px;">
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-sun-o" aria-hidden="true"></i>
                                                    <span>configuracion</span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <button type="button" class="btn btn-outline-success"
                                                                data-toggle="modal" data-target="#editarusuario">
                                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                                                <span>Editar</span>
                                                            </button>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <button type="button" class="btn btn-outline-danger">
                                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                                <span>Eliminar</span>
                                                            </button>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <button type="button" class="btn btn-outline-warning"
                                                            data-toggle="modal" data-target="#viewsusuario">
                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                <span>Vista</span>
                                                            </button>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            
                        <!-- </div> -->
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>luis enrique</td>
                    <td>caballero canchaya</td>
                    <td>administracion</td>
                    <td>eliminar</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>luis enrique</td>
                    <td>caballero canchaya</td>
                    <td>administracion</td>
                    <td>eliminar</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>luis enrique</td>
                    <td>caballero canchaya</td>
                    <td>administracion</td>
                    <td>eliminar</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>luis enrique</td>
                    <td>caballero canchaya</td>
                    <td>administracion</td>
                    <td>eliminar</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>luis enrique</td>
                    <td>caballero canchaya</td>
                    <td>administracion</td>
                    <td>eliminar</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>luis enrique</td>
                    <td>caballero canchaya</td>
                    <td>administracion</td>
                    <td>eliminar</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>luis enrique</td>
                    <td>caballero canchaya</td>
                    <td>administracion</td>
                    <td>eliminar</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>luis enrique</td>
                    <td>caballero canchaya</td>
                    <td>administracion</td>
                    <td>eliminar</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>luis enrique</td>
                    <td>caballero canchaya</td>
                    <td>administracion</td>
                    <td>eliminar</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready( function () {
    $('#example').DataTable();
} );
</script>