<template>
        <main class="main">
            <!-- Breadcrumb -->
            
            <ol class="breadcrumb">
                
            </ol>
            <div class="container-fluid">
                <!-- Ejemplo de tabla Listado -->
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Tickets
                        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalNuevo">
                            <i class="icon-plus"></i>Nuevo Tickets
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
                                    <th>Folio</th>
                                    <th>Asunto</th>
                                    <th>Descripcion</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>001</td>
                                    <td>Soportes</td>
                                    <td>Timbrado no funciona</td>
                                    <td>12/09/2018</td>
                                    <td>
                                        <span class="badge badge-success">Resuelto</span>
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
                                    <td>002</td>
                                    <td>Soportes</td>
                                    <td>Aspel SAE dejo de funcionar</td>
                                    <td>14/09/2018</td>
                                    <td>
                                        <span class="badge badge-success">Resuelto</span>
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
                                    <td>003</td>
                                    <td>Soportes</td>
                                    <td>Aspel NOI no timbra nomina</td>
                                    <td>20/09/2018</td>
                                    <td>
                                        <span class="badge badge-secondary">Pendiente</span>
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
                                    <td>004</td>
                                    <td>Soportes</td>
                                    <td>Camara no funciona</td>
                                    <td>25/09/2018</td>
                                    <td>
                                        <span class="badge badge-secondary">Pendiente</span>
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
                                    <td>005</td>
                                    <td>Redes</td>
                                    <td>Instalacion de Camara</td>
                                    <td>05/10/2018</td>
                                    <td>
                                        <span class="badge badge-danger">Cancelado</span>
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
                            <h4 class="modal-title">Agregar Tickets</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Asunto</label>
                                    <div class="col-md-9">
                                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Escriba su asunto">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Descripcion</label>
                                    <div class="col-md-9">
                                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingrese la descripcion">
                                        <span class="help-block"></span>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Prioridad</label>
                                    <div class="col-md-3">
                                        <select class="form-control">
                                            <option value="" >Seleccione</option>
                                            <option value="">Bajo</option>
                                            <option value="">Medio</option>
                                            <option value="">Alto</option>
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

                                <div class="form-group row">
                                    <label for="imagen">Adjuntar Imagen</label>
                                    <input type="file" id="ejemplo_archivo_1">
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
                            <h4 class="modal-title">Eliminar Tickets</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Estas seguro de eliminar el tickets?</p>
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
