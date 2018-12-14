<template>
    <main class="main">
        <div class="container-fluid">
            <!-- Ejemplo de tabla Listado -->
            <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Usuarios
                        <!-- @click="abrirModal( 'users' = es el modelo que tenemos creado en script
                                                y 'registrar' es la accion que se va a ejecutar)"
                        que esta abajo de este codigo -->
                        <button type="button" @click="abrirModal('usuarios', 'registrar')" class="btn btn-primary float-right">
                            <i class="icon-plus"></i>Nuevo usuario
                        </button>
                        
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="text" id="texto" name="texto" class="form-control" placeholder="Texto a buscar">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Usuario</th>
                                    <th>Correo</th>
                                    <th>Tipo de usuario</th>
                                    <th>Status</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="usuarios in arrayUsuarios" :key="usuarios.id">
                                    <td v-text="usuarios.nombre"></td>
                                    <td v-text="usuarios.usuario"></td>
                                    <td v-text="usuarios.email"></td>
                                    <td>Administrador</td>

                                    <td>
                                        <div v-if="usuarios.status" >
                                            <span class="badge badge-success">Activo</span>
                                        </div>
                                        <div v-else>
                                            <span class="badge badge-danger">Desactivado</span>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" @click="abrirModal('usuarios', 'actualizar', usuarios)" class="btn btn-warning btn-sm">
                                            <i class="icon-pencil"></i>
                                        </button> &nbsp;
                                        <template v-if="usuarios.status">
                                            <button type="button" class="btn btn-danger btn-sm" @click="desactivarUsuarios(usuarios.id)">
                                                <i class="icon-trash"></i>
                                            </button>
                                        </template>
                                        <template v-else>
                                            <button type="button" class="btn btn-info btn-sm" @click="activarUsuarios(usuarios.id)">
                                                <i class="icon-check"></i>
                                            </button>
                                        </template>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                        <nav>
                            <ul class="pagination float-right">
                                <li class="page-item">
                                    <a class="page-link" href="#">Anterior</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Siguiente</a>
                                </li>
                            </ul>
                        </nav>
                        <!--
                        <nav>
                            <ul class="pagination float-right">
                                <li class="page-item" v-if="pagination.current_page > 1">
                                    <a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page - 1)">Anterior</a>
                                </li>
                                <li class="page-item" v-for="page in pagesNumber" :key="page" :class="[page == isActived ? 'active' : '']">
                                    <a class="page-link" href="#" @click.prevent="cambiarPagina(page)" v-text="page" >1</a>
                                </li>
                                <li class="page-item" v-if="pagination.current_page < pagination.last_page" >
                                    <a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page + 1)" >Siguiente</a>
                                </li>
                            </ul>
                        </nav>
                        -->
                    </div>
                </div>
                <!-- Fin ejemplo de tabla Listado -->
            </div>

            <!--Inicio del modal agregar/actualizar-->

            <!-- :class="{'mostrar' : modal}" por defecto el modal debe de estar en 1 para que se visualiza
            pero al primer instancia el modal esta oculto hasta que la accion mostrar se le de click -->
            <div class="modal fade" tabindex="-1" :class="{'mostrar' : modal}" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-primary modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- v-text="tutuloModal" va a mostrar el titulo dinamico -->
                            <h4 class="modal-title" v-text="tituloModal"></h4>
                            <button type="button" class="close" @click="cerrarModal()" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-md-2 form-control-label" for="text-input">Nombre</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="nombre" class="form-control" placeholder="Ingresar Nombre">
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 form-control-label" for="text-input">Usuario</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="usuario" class="form-control" placeholder="Ingresar nombre de usuario">
                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-2 form-control-label" for="email-input">Email</label>
                                    <div class="col-md-4">
                                        <input type="email" v-model="email" class="form-control" placeholder="Ingresar Correo">
                                    </div>
                                    <label class="col-md-2 form-control-label" for="email-input">Contraseña</label>
                                    <div class="col-md-3">
                                        <input type="password" v-model="password" class="form-control" placeholder=" Ingresar Contraseña">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-2 form-control-label" for="text-input">Tipo de usuario</label>
                                    <div class="col-md-9">
                                        <select class="form-control" v-model="idtipousuario" >
                                            <option value="0" disabled>Seleccione</option>
                                            <option v-for="tipousuario in arrayTipousuarios" :key="tipousuario.id" :value="tipousuario.id" v-text="tipousuario.descripcion" >
                                             
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" @click="cerrarModal()">Cerrar</button>
                            <button type="button" v-if="tipoAccion==1" class="btn btn-primary" @click="registrarUsuarios()" >Guardar</button>
                            <button type="button" v-if="tipoAccion==2" class="btn btn-primary" @click="actualizarUsuarios()" >Actualizar</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!--Fin del modal-->
        </main>
</template>

<script>
    export default {
        data(){
            return {
                usuarios_id : 0,
                idtipousuario : 0,
                tipouser : '',
                nombre : '',
                usuario : '',
                email : '',
                password : '',
                arrayUsuarios : [],
                modal : 0,  //Este modal va a abrir u ocultar nuestra ventana modal
                tituloModal : '', //Variable tituloModal
                tipoAccion : 0, // Este es el accion del boton guardar
                pagination : {
                'total'         : 0,
                'current_page'  : 0,
                'per_page'      : 0,
                'last_page'     : 0,
                'from'          : 0,
                'to'            : 0,
                },
                offset : 3,
                arrayTipousuarios : []
            }
        },/*
        computed:{
            isActived: function(){
                return this.pagination.current_page;
            },
            //calcula los elementos de la paginacion 
            pagesNumber: function(){

                if(!this.pagination.to){
                    return [];
                }

                var from = this.pagination.current_page - this.offset;
                if(from <1){
                    from = 1;
                }

                var to = from + (this.offset * 2);
                if(to >= this.pagination.last_page){
                    to = this.pagination.last_page;
                }

                var pagesArray = [];
                while(from <= to){
                    pagesArray.push(from);
                    from++;
                }

                return pagesArray;
            }
        },*/
        methods : {
            listarUsuarios (){
                let me=this;
                axios.get('/usuarios').then(function (response) {
                    //console.log(response);
                    me.arrayUsuarios = response.data; //este me. arrayUsers es la que se creo en return 
                })
                .catch(function (error) {
                    console.log(error)
                });
            },
            /*
            cambiarPagina (page){
                let me = this;
                //Actualiza la pagina actual
                me.pagination.current_page = page;
                //Envia la peticion para visualizar la data de esa pagina
                me.listarUsuarios(page);
            },*/
            selectTipousuarios(){
                let me=this;
                axios.get('/tipousuarios/selectTipousuarios').then(function (response) {
                    console.log(response);
                    me.arrayTipousuarios = response.data.tipo_usuarios; //este me. arrayTipousuarios es la que se creo en return 
                })
                .catch(function (error) {
                    console.log(error)
                });
            },
            registrarUsuarios(){
                let me=this;

                axios.post('/usuarios/registrar',{
                    'idtipousuario': this.idtipousuario,
                    'nombre': this.nombre,
                    'usuario': this.usuario,
                    'email': this.email,
                    'password': this.password
                }).then(function (response) {
                    me.cerrarModal();
                    me.listarUsuarios();
                    
                }).catch(function (error) {
                    console.log(error);
                });
            },
            actualizarUsuarios(){
                let me=this;

                axios.put('/usuarios/actualizar',{
                    'id': this.usuarios_id,
                    'idtipousuario': this.idtipousuario,
                    'nombre': this.nombre,
                    'usuario': this.usuario,
                    'email': this.email,
                    'password': this.password
                }).then(function (response) {
                    me.cerrarModal();
                    me.listarUsuarios();
                    
                }).catch(function (error) {
                    console.log(error);
                });
            },
            desactivarUsuarios(id){
                swal({
                title: 'Esta seguro de desactivar este usuario?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Aceptar!',
                cancelButtonText: 'Cancelar',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
                }).then((result) => {
                if (result.value) {
                    let me = this;

                    axios.put('/usuarios/desactivar',{
                        'id': id
                    }).then(function (response) {
                        me.listarUsuarios();
                        swal(
                        'Desactivado!',
                        'El registro ha sido desactivado con éxito.',
                        'success'
                        )
                    }).catch(function (error) {
                        console.log(error);
                    });
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    
                }
                })
            },
            activarUsuarios(id){
                swal({
                title: 'Esta seguro de activar este usuario?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Aceptar!',
                cancelButtonText: 'Cancelar',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
                }).then((result) => {
                if (result.value) {
                    let me = this;

                    axios.put('/usuarios/activar',{
                        'id': id
                    }).then(function (response) {
                        me.listarUsuarios();
                        swal(
                        'Activado!',
                        'El registro ha sido activado con éxito.',
                        'success'
                        )
                    }).catch(function (error) {
                        console.log(error);
                    });
                    
                    
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    
                }
                })
            },
            cerrarModal(){
                this.modal = 0;
                this.tituloModal = '';
                this.idtipousuario= 0;
                this.nombre = '';
                this.usuario = '';
                this.email = '';
                this.password = '';
            },
            abrirModal(modelo, accion, data = []){
                switch(modelo){
                    case "usuarios" :
                    {
                        switch(accion){
                            case 'registrar': 
                            {
                                this.modal = 1;
                                this.tituloModal = 'Registrar usuario';
                                this.idtipousuario = 0;
                                this.nombre = '';
                                this.usuario = '';
                                this.email = '';
                                this.password = '';
                                this.tipoAccion = 1; //accion del botoon guardar
                                break;
                            }
                            case 'actualizar':
                            {
                                //console.log(data);
                                this.modal = 1;
                                this.tituloModal = "Actualizar usuario";
                                this.tipoAccion = 2;
                                this.usuarios_id = data ['id'];
                                this.idtipousuario = data ['idtipousuario'];
                                this.nombre = data ['nombre'];
                                this.usuario = data ['usuario'];
                                this.email = data ['email'];
                                this.password = data ['password'];
                                break;
                            }
                        }
                    }
                }
                this.selectTipousuarios();
            }

        },
        mounted() {
            this.listarUsuarios(); //esta funcion llama a la funcion methods el que esta arriba
            
        }
    }
</script>

<style>
    .modal-content{
        width: 100% !important;
        position: absolute !important;
    }

    .mostrar{
        display: list-item !important;
        opacity: 1 !important;
        position: absolute !important;
        background-color: #3c29297a !important;
    }
</style>
