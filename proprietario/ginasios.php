<?php
include 'header.php';

include 'class/ginasio.class.php';

$v1 = new Ginasio();
$resultado_busca = $v1->buscaTodos($_SESSION['ID_PESSOA_PROP']);

?>

    <div class="alert alert-success" id="sucesso_exclui" role="alert" style="display: none">
        <strong> Ginásio removido com sucesso!!!</strong>
    </div>

    <div class="alert alert-danger" id="erro_exclui" role="alert" style="display: none">
        <strong>  Erro ao excluir ginásio, possivelmente este ginásio esta associado a uma quadra!!!</strong>
    </div>

    <div class="card">
        <div class="card-header">
            <i class="fa fa-plus-circle" style="font-size: 20px"> Inserir Ginásio</i>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">

                    <form method="post" action="actions/cadastra_ginasio.php">
                        <div class="row">
                            <input type="hidden" name="pagina" id="pagina" class="form-control" value="painel">
                            <input type="hidden" name="id" id="id" class="form-control" value="painel">
                            <div class="col-md-4">
                                <label for="inputIsValid" class=" form-control-label">Nome do Ginásio</label>
                                <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome"
                                       required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputIsValid" class=" form-control-label">E-mail comercial</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail"
                                       required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputIsValid" class=" form-control-label">Digite o número de um documento (CPF/CNPJ)</label>
                                <input type="text" name="documento" id="documento" class="form-control" placeholder="CPF/CNPJ"
                                       required>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px; margin-bottom: 15px">
                            <div class="col-md-6">
                                <label for="inputIsValid" class=" form-control-label">Telefone do Ginásio</label>
                                <input type="text" name="fone" id="fone" class="form-control" placeholder="Telefone"
                                       required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputIsValid" class=" form-control-label">Endereço do Ginásio (Rua/Cidade)</label>
                                <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade"
                                       required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="inputIsValid" class=" form-control-label">Nome de usuário do administrador</label>
                                <input type="text" name="login" id="login" class="form-control" placeholder="Usuário"
                                       required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputIsValid" class=" form-control-label">Escolha uma senha</label>
                                <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha"
                                       required>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-success pull-right" style="margin-top: 15px">
                            <i class="fa fa-plus"></i> Salvar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-header">
            <i class="fa fa-users" style="font-size: 20px"> Ginásios cadastrados</i>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead class="bg-dark" style="color: #ffffff">
                        <tr>
                            <th>#</th>
                            <th>NOME</th>
                            <th>E-MAIL</th>
                            <th>DOCUMENTO</th>
                            <th>CIDADE</th>
                            <th>TELEFONE</th>
                            <th>LOGIN</th>
                            <th>OPÇÕES</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        for($i = 0; $i <  count($resultado_busca); $i++){
                            ?>

                            <tr style="cursor: pointer">
                                <th scope="row"><?php echo $resultado_busca[$i]['ID_GINASIO']; ?></th>
                                <td><?php echo $resultado_busca[$i]['NOME']; ?></td>
                                <td><?php echo $resultado_busca[$i]['EMAIL']; ?></td>
                                <td><?php echo $resultado_busca[$i]['DOCUMENTO']; ?></td>
                                <td><?php echo $resultado_busca[$i]['CIDADE']; ?></td>
                                <td><?php echo $resultado_busca[$i]['TELEFONE']; ?></td>
                                <td><?php echo $resultado_busca[$i]['LOGIN']; ?></td>

                                <td>
                                    <a type="button" class="btn btn-primary btn-sm" href="edita_ginasio.php?id=<?php echo $resultado_busca[$i]['ID_GINASIO']; ?>">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmacao(<?php echo $resultado_busca[$i]['ID_GINASIO'] ?>)">
                                        <i class="fa fa-trash"></i>
                                    </button>

                                </td>
                            </tr>

                        <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--MODAIS-->
    <div class="modal fade" id="resultadoCadastroSucesso" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
         style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title" id="mediumModalLabel">Sucesso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a><strong> Cadastro realizado com sucesso! </strong></a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="resultadoCadastroErro" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
         style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="mediumModalLabel">Erro!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a><strong> Erro ao realizar o cadastro! </strong></a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function confirmacao(id) {
            var resposta = confirm("Deseja remover esse registro?");

            if (resposta === true) {
                window.location.href = "./actions/remove_ginasio.php?id="+id;
            }
        }
    </script>

<?php

include 'footer.php';

if (isset($_GET['operacaoCadastro'])) {
    $operacao = $_GET['operacaoCadastro'];
    if ($_GET['operacaoCadastro'] == 1) {
        ?>
        <script type="application/javascript">
            (function ($) {
                $("#resultadoCadastroSucesso").modal("show");
            })(jQuery);
        </script>
        <?php
    } else {
        ?>
        <script type="application/javascript">
            (function ($) {
                $("#resultadoCadastroErro").modal("show");
            })(jQuery);
        </script>
    <?php }
} else {
    $operacao = "";
}

if (isset($_GET['excluido'])) {
    $exclui = $_GET['excluido'];
    if ($_GET['excluido'] === 'true') {
        ?>
        <script type="application/javascript">
            (function ($) {
                var s = document.getElementById("sucesso_exclui");
                s.style.display = 'block';
            })(jQuery);
        </script>
        <?php
    } else {
        ?>
        <script type="application/javascript">
            (function ($) {
                var s = document.getElementById("erro_exclui");
                s.style.display = 'block';
            })(jQuery);
        </script>
    <?php }
} else {
    $exclui = "";
}

function edita($id){

}

?>