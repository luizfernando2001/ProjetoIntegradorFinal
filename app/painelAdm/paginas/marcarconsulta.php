<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Marcar Consulta</h1>
                </div>
            </div>


            <div class="row">
            <div class="col-1 mt-4"> </div>
                <div class="col-3 mt-4"> <img src="app/painelAdm/dist/img/medd.png" alt=""> </div>
                <div class="col-6  mb-3">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="inputAddress">Nome Completo </label>
                            <input class="form-control" type="text" name="field-name" data-mask="00/00/0000" placeholder="Nome Do Medico Aqui">
                        </div>
                        <div class="row">
                            <div class="form-group  col-md-6">
                                <label for="inputEmail4">RG</label>
                                <input class="form-control" type="text"  data-mask="0000-0000" required="required" name="numbers" pattern="[0-9]+$" placeholder="Apenas numeros" id="inputEmail4">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">CPF</label>
                                <input type="text" required="required"  name="numbers" pattern="[0-9]+$" class="form-control" placeholder="Apenas numeros" id="inputPassword4">
                            </div>
                            
                        </div>
                       
                        <div class="form-group">
                            <label for="inputState">Medicos</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                                <option>...</option>
                                <option>...</option>
                            </select>
                        </div>


                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg btn-block"> Enviar<span class="icon-cheveron-right"></span> </button>
                        </div>
                    </form>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /parte do meio -->



</div>
<!-- /.final meio -->