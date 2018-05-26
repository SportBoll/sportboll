<?php
include 'header.php';
include 'class/ginasio.class.php';

$v1 = new Ginasio();
$id = $_GET['id'];
$v1->setIdGinasio($id);
$resultado_busca = $v1->buscaID();

?>
    <div class="card">
        <div class="card-header">
            <i class="fa fa-edit" style="font-size: 20px"> Editar Ginásio</i>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">

                    <form method="post" action="actions/edita_ginasio.php">
                        <div class="row">
                            <input type="hidden" name="pagina" id="pagina" class="form-control" value="painel">
                            <input type="hidden" name="id" id="id" class="form-control" value="painel">
                            <input type="hidden" name="id_ginasio" id="id_ginasio" class="form-control" value="<?php echo $resultado_busca[0]['ID_GINASIO'] ?>">
                            <div class="col-md-4">
                                <label for="inputIsValid" class=" form-control-label">Nome do Ginásio</label>
                                <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome"
                                       value="<?php echo $resultado_busca[0]['NOME'] ?>"
                                       required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputIsValid" class=" form-control-label">E-mail comercial</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail"
                                       value="<?php echo $resultado_busca[0]['EMAIL'] ?>"
                                       required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputIsValid" class=" form-control-label">Digite o número de um documento (CPF/CNPJ)</label>
                                <input type="text" name="documento" id="documento" class="form-control" placeholder="CPF/CNPJ"
                                       value="<?php echo $resultado_busca[0]['DOCUMENTO'] ?>"
                                       required>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px; margin-bottom: 15px">
                            <div class="col-md-6">
                                <label for="inputIsValid" class=" form-control-label">Telefone do Ginásio</label>
                                <input type="text" name="fone" id="fone" class="form-control" placeholder="Telefone"
                                       value="<?php echo $resultado_busca[0]['TELEFONE'] ?>"
                                       required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputIsValid" class=" form-control-label">Endereço do Ginásio (Rua/Cidade)</label>
                                <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade"
                                       value="<?php echo $resultado_busca[0]['CIDADE'] ?>"
                                       required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="inputIsValid" class=" form-control-label">Nome de usuário do administrador</label>
                                <input type="text" name="login" id="login" class="form-control" placeholder="Usuário"
                                       value="<?php echo $resultado_busca[0]['LOGIN'] ?>"
                                       required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputIsValid" class=" form-control-label">Escolha uma senha</label>
                                <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha"
                                       value="<?php echo $resultado_busca[0]['SENHA'] ?>"
                                       required>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-success pull-right" style="margin-top: 15px">
                            <i class="fa fa-edit"></i> Salvar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php

include 'footer.php';

?>