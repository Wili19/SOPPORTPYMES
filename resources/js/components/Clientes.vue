<template>
        <main class="main">
            <!-- Breadcrumb -->
            
            <ol class="breadcrumb">
                
            </ol>
            <div class="container-fluid">
                <!-- Ejemplo de tabla Listado -->
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Clientes
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalNuevo">
                            <i class="icon-plus"></i>Nuevo Cliente
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
                                    <th>Empresa</th>
                                    <th>Fecha Alta</th>
                                    <th>Status</th>
                                    <th>Opciones</th>
                                </tr>
                                
                            </thead>
                            <tbody>

                                <tr>
                                    <td>Wilian</td>
                                    <td>wilian19</td>
                                    <td>wilian@gmail.com</td>
                                    <td>Marketing</td>
                                    <td>12/09/2018</td>
                                    <td>
                                        <span class="badge badge-success">Activo</span>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                          <i class="icon-pencil"></i>
                                        </button> &nbsp;
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                          <i class="icon-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Esperanza</td>
                                    <td>Espe19</td>
                                    <td>espe@gmail.com</td>
                                    <td>Hoteleria</td>
                                    <td>01/09/2018</td>
                                    <td>
                                        <span class="badge badge-success">Activo</span>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                          <i class="icon-pencil"></i>
                                        </button> &nbsp;
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                          <i class="icon-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Jose López</td>
                                    <td>Jose29</td>
                                    <td>jose@gmail.com</td>
                                    <td>Playacar</td>
                                    <td>05/09/2018</td>
                                    <td>
                                        <span class="badge badge-secondary">Inactivo</span>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                          <i class="icon-pencil"></i>
                                        </button> &nbsp;
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                          <i class="icon-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Rambo de jesus</td>
                                    <td>rambo29</td>
                                    <td>rambo@gmail.com</td>
                                    <td>Playacar</td>
                                    <td>05/08/2018</td>
                                    <td>
                                        <span class="badge badge-secondary">Inactivo</span>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                          <i class="icon-pencil"></i>
                                        </button> &nbsp;
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                          <i class="icon-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jose Eduardo </td>
                                    <td>eduardo29</td>
                                    <td>eduardo@gmail.com</td>
                                    <td>Sandos Caracol</td>
                                    <td>07/08/2018</td>
                                    <td>
                                        <span class="badge badge-success">Activo</span>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                                          <i class="icon-pencil"></i>
                                        </button>&nbsp;
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                                          <i class="icon-trash"></i>
                                        </button>
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
                    </div>
                </div>
                <!-- Fin ejemplo de tabla Listado -->
            </div>
            <!--Inicio del modal agregar/actualizar-->
            <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-primary modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Agregar Cliente</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Nombre Completo</label>
                                    <div class="col-md-9">
                                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Escriba su Nombre Completo">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Usuario</label>
                                    <div class="col-md-9">
                                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese su usuario">
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Correo</label>
                                    <div class="col-md-9">
                                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese su correo">
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Empresa</label>
                                    <div class="col-md-3">
                                        <select class="form-control">
                                            <option value="" >Seleccione</option>
                                            <option value="">Playacar</option>
                                            <option value="">Sandos caracol</option>
                                            <option value="">Marketing</option>
                                        </select>
                                    </div>
                                    <label class="col-md-2 form-control-label" for="text-input">Status</label>
                                    <div class="col-md-3">
                                        <select class="form-control">
                                            <option value="" >Seleccione</option>
                                            <option value="">Activar</option>
                                            <option value="">Desactivar</option>
                                        </select>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!--Fin del modal-->
            <!-- Inicio del modal Eliminar -->
            <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-danger" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Eliminar Cliente</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Estas seguro de eliminar el cliente?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- Fin del modal Eliminar -->           
        </main>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
