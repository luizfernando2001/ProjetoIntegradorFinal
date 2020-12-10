<?php $resultdados = new Conexao();

$dados = $resultdados->consultarBanco('SELECT * FROM pacientes');

?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pacientes</h1>
                    <h1 class="m-0"></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">


                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title far icon-calendar_today">
                                04 de Dezembro até 17 de Dezembro.
                                <br>
                               
                            </h3>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                        <a href="cpanel.php?pg=marcarconsulta" class="btn btn-success">Cadastrar</a>





                            <table id="example1" class="table table-bordered table-striped">
                                
                                <thead>
                                    <tr class="text-center">
                                        <th>id</th>
                                        <th>Paciente</th>
                                        <th>RG</th>
                                        <th>CPF</th>
                                        <th>Recepcionista</th>
                                        <th>Prontuário</th>
                                        <th>Marcar Nova Consulta</th>
                                        <th>Ações</th>
                                     
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php foreach($dados as $dadosusuarios) {  ?>
                                    <tr class="text-center">
                                        <td><?php echo $dadosusuarios["id_paciente"]  ?></td>
                                        <td><?php echo $dadosusuarios["nome"]  ?></td>
                                        <td><?php echo $dadosusuarios["rg"]  ?></td>
                                        <td><?php echo $dadosusuarios["cpf"]  ?></td>
                                        <td>Jenny</th>
                                        <td>3</td>
                                        <td>02</td>
                                        
                            
                    
                                        <td>
                                            <a class="btn btn-outline-warning icon-pencil" href="?pg=usuario_editar&id=<?php // echo $dadosusuarios['id_usuario'] 
                                                                                                                        ?>"></a>
                                            <a class="btn btn-outline-danger icon-delete_sweep" href="?pg=usuariodeletar&id=<?php // echo $dadosusuarios['id_usuario'] 
                                                                                                                            ?>"></a>
                                        </td> 
                                        <?php   }  ?>
                                    </tr>


                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
</section>