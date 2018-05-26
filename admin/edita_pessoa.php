<?php
include 'header.php';

include './class/pessoa.class.php';
$v3 = new Pessoa();

$id_pessoa = $_GET['id'];
$v3->setIdPessoa($id_pessoa);

$resultado_busca = $v3->buscaIDPessoa();

?>

    <div class="card">
        <div class="card-header">
            <i class="fa fa-edit" style="font-size: 20px"> Editar Pessoa</i>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">

                    <form method="post" action="actions/edita_usuario.php">
                        <div class="row">
                            <input type="hidden" name="pagina" id="pagina" class="form-control" value="painel">
                            <input type="hidden" name="id" id="id" class="form-control" value="painel" >
                            <input type="hidden" name="id_pessoa" id="id_pessoa" class="form-control" value="<?php echo $resultado_busca[0]['ID_PESSOA'] ?>" >
                            <div class="col-md-6">
                                <label for="inputIsValid" class=" form-control-label">Nome completo</label>
                                <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome"
                                       value="<?php echo $resultado_busca[0]['NOME'] ?>"
                                       required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputIsValid" class=" form-control-label">Seu e-mail</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail"
                                       value="<?php echo $resultado_busca[0]['EMAIL'] ?>"
                                       required>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px; margin-bottom: 15px">
                            <div class="col-md-6">
                                <label for="inputIsValid" class=" form-control-label">Número de telefone</label>
                                <input type="text" name="fone" id="fone" class="form-control" placeholder="Telefone"
                                       value="<?php echo $resultado_busca[0]['TELEFONE'] ?>"
                                       required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputIsValid" class=" form-control-label">Cidade onde reside</label>
                                <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade"
                                       value="<?php echo $resultado_busca[0]['CIDADE'] ?>"
                                       required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success pull-right" style="margin-top: 15px">
                            <i class="fa fa-edit"></i> Editar
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>

<?php

include 'footer.php';

?>