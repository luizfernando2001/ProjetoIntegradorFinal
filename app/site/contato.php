<div class="row">
    <div class="col-2"></div>
    <div class="col"></div>
</div>
<div class="row">
</div>
<div class="p-2">
    <div class="display-4 text-light font-weight-bolder text-center"> Contato</div>
    <br>
    <div class="col-4 offset-4 mb-5">
        <form action="?pg=cad_mensagem" method="POST">
            <div class="form-group ">
                <label for="nome"><strong>Nome:</strong></label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu nome">
            </div>
            <hr>
            
            <div class="text-center">
                <div class="btn-group btn-group-toggle " data-toggle="buttons">
                    <label class="btn btn-secondary active">
                        <input type="radio" name="cat" id="option1" autocomplete="off" value="elogios" checked> Elogio
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="cat" id="option2" autocomplete="off" value="vendas"> Vendas
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="cat" id="option3" autocomplete="off" value="reclamacoes"> Reclamações
                    </label>
                </div>
            </div>
                

            <div class="form-group ">
                <label for="email"><strong>Email:</strong></label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Ex: breno.farias@gmail.com">
            </div>
            <hr>
            <div class="form-group">
                <label for="msg"><strong>Mensagem:</strong></label>
                <textarea required class="form-control" name="msg" id="text" placeholder="Digite sua mensagem" cols="30" rows="5"></textarea>
            </div>
            <br>
            <div class="form-group text-right">
                <button type="submit" class="btn btn-lg btn-primary">Enviar
                    <span class="bre-send"></span>
                </button>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col"></div>
    </div>
</div>