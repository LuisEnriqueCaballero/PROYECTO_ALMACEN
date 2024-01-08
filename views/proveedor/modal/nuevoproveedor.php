<div class="modal fade" id="nuevoproveedor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">nuevo cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="agregarcliente">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">tipo persona</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="inputPassword4">empresa</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">R.U.C</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">n° telef. empresa</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">nombre cliente</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">apellido cliente</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">n° documento</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">telef. cliente</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-8">
                            <label for="inputPassword4">correo electronico</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">departamento</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">provincia</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">distrito</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">direccion</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                        <button type="button" class="btn btn-success" id="archivo"><i class="fa fa-plus" aria-hidden="true"></i> agregar archivo</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">cancelar</button>
                <button type="button" class="btn btn-primary">insertar</button>
            </div>
        </div>
    </div>
</div>
<script>
    const formulario=document.querySelector('#agregarcliente')
    const agregar=document.querySelector('#archivo')

    eventList()
    function eventList(){
        agregar.addEventListener('click',agregararchivo)
    }
    function agregararchivo(){
        const div=document.createElement('div');
        div.className='form-row';
        div.innerHTML=`<div class="form-group col-md-4">
                            <label for="inputPassword4">banco</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputPassword4">distrito</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>
                        <div class="form-group col-md-2  d-flex align-items-end">
                        <span type="button" class="btn btn-danger" id="eliminarhijo" onclick="eliminar(this)"><i class="fa fa-minus-circle" aria-hidden="true"></i> eliminar</span>
                        </div>`
        formulario.appendChild(div)                
    }

    function eliminar(env){
        const padre=env.parentNode.parentNode;
        formulario.removeChild(padre)
    }
</script>