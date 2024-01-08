<div class="modal fade" id="nuevoempleado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">nuevo empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="agregarempleado">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">nombre empleado</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">apellido empleado</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">tipo documento</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">n° documento</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">fecha nacimiento</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">genero</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">n telef. familiar</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">n° celular</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">fecha ingreso</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">departamento</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">provincia</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">distrito</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">direccion</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">planilla</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">banco</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">n° cuenta</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">estado</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">area</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                        <button type="button" class="btn btn-success" id="hijos"><i class="fa fa-user-plus" aria-hidden="true"></i> agregar hijo menor</button>
                        </div>
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">cancelar</button>
                <button type="button" class="btn btn-primary">agregar</button>
            </div>
        </div>
    </div>
</div>

<script>
    const agregar=document.querySelector('#hijos');
    const formulario=document.querySelector('#agregarempleado')
    let total=1;
    EventListener();
    function EventListener(){
        agregar.addEventListener('click',agregarhijo);
    }
    function agregarhijo(e){
        e.preventDefault();
        const div=document.createElement('div');
        div.classList.add('form-row')
        div.innerHTML=`<div class="form-group col-md-1 d-flex align-items-end">
                            <label for="inputEmail4">${total++}</label>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">dato hijo</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">fecha nacimiento</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="form-group col-md-2  d-flex align-items-end">
                        <span type="button" class="btn btn-danger" id="eliminarhijo" onclick="eliminar(this)"><i class="fa fa-user-times" aria-hidden="true"></i> eliminar</span>
                        </div>`
                        
        formulario.appendChild(div);              
    }
    function eliminar(env){
        // env.preventDefault();
        // console.log(env.parentNode.parentNode)
        const padre=env.parentNode.parentNode;
        formulario.removeChild(padre)
        // actualizar()
    }
    // function actualizar(){
    //     let divs=div.children;
    //     total=1;
    //     for(let i=0; i<divs.length; i++){
    //         divs[i].children[0].innerHTML=total++;
    //     }
    // }
</script>