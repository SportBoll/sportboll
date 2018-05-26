<?php
include 'header.php';
include 'class/quadras.class.php';

include 'class/ginasio.class.php';

$v2 = new Ginasio();
$resultado_busca_ginasio = $v2->buscaTodos();

$v1 = new Quadra();
$resultado_busca = $v1->buscaTodos();
?>
    <div class="alert alert-success" id="sucesso_exclui" role="alert" style="display: none">
        <strong> Quadra removida com sucesso!!!</strong>
    </div>

    <div class="alert alert-danger" id="erro_exclui" role="alert" style="display: none">
        <strong>  Erro ao excluir quadra, possivelmente esta quadra esta associado a uma reserva!!!</strong>
    </div>

    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script>
        $(document).ready(function () {
            var $seuCampoCpf = $("#horario");
            $seuCampoCpf.mask('000.00', {reverse: true});
        });
    </script>


    <div class="card">
        <div class="card-header">
            <i class="fa fa-plus-circle" style="font-size: 20px"> Inserir Quadra</i>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">

                    <form method="post" action="actions/cadastra_quadra.php">
                        <div class="row">
                            <input type="hidden" name="pagina" id="pagina" class="form-control" value="painel">
                            <input type="hidden" name="id" id="id" class="form-control" value="painel">
                            <div class="col-md-12">
                                <label for="inputIsValid" class=" form-control-label">Descrição da Quadra</label>
                                <textarea type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição"
                                          required></textarea>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px; margin-bottom: 15px">
                            <div class="col-md-3">
                                <label for="inputIsValid" class=" form-control-label">Valor por Hora</label>
                                <input type="text" name="horario" id="horario" class="form-control date-time-mask" placeholder="Valor"
                                       required>
                            </div>
                            <div class="col-md-3">
                                <label for="inputIsValid" class=" form-control-label">Tipo</label>
                                <input type="text" name="tipo" id="tipo" class="form-control" placeholder="Tipo"
                                       required>
                            </div>
                            <div class="col-md-6">
                                <label class=" form-control-label">Selecione um ginásio</label>
                                <select class="form-control" id="id_ginasio" name="id_ginasio">
                                    <?php
                                    for($i = 0; $i <  count($resultado_busca_ginasio); $i++){
                                    ?>
                                    <option value="<?php echo $resultado_busca_ginasio[$i]['ID_GINASIO']; ?>">
                                        <?php echo $resultado_busca_ginasio[$i]['NOME']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
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
            <i class="fa fa-users" style="font-size: 20px"> Quadras cadastradas</i>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead class="bg-dark" style="color: #ffffff">
                        <tr>
                            <th>#</th>
                            <th>GINÁSIO</th>
                            <th>DESCRIÇÃO</th>
                            <th>TIPO</th>
                            <th>VALOR</th>
                            <th>OPÇÕES</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        for($i = 0; $i <  count($resultado_busca); $i++){
                            ?>

                            <tr style="cursor: pointer">
                                <th scope="row"><?php echo $resultado_busca[$i]['ID_QUADRA']; ?></th>
                                <td style="min-width: 190px"><?php echo $resultado_busca[$i]['NOME']; ?></td>
                                <td><?php echo $resultado_busca[$i]['DESCRICAO']; ?></td>
                                <td><?php echo $resultado_busca[$i]['TIPO']; ?></td>
                                <td>R$ <?php echo $resultado_busca[$i]['VALOR']; ?></td>

                                <td  style="min-width: 120px">
                                    <a type="button" class="btn btn-primary btn-sm" href="edita_quadras.php?id=<?php echo $resultado_busca[$i]['ID_QUADRA']; ?>">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmacao(<?php echo $resultado_busca[$i]['ID_QUADRA'] ?>)">
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
                    <a><strong> Operação realizada com sucesso! </strong></a>
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
                    <a><strong> Erro ao realizar operação! </strong></a>
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
                window.location.href = "./actions/remove_quadra.php?id="+id;
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