<?php
include 'header.php';
include 'class/quadras.class.php';

include 'class/reservas.class.php';

$v2 = new Reserva();
$resultado_busca_reserva = $v2->buscaTodos();

$v1 = new Quadra();
$resultado_busca = $v1->buscaTodos();
?>

    <div class="alert alert-success" id="sucesso_exclui" role="alert" style="display: none">
        <strong> Quadra removida com sucesso!!!</strong>
    </div>

    <div class="alert alert-danger" id="erro_exclui" role="alert" style="display: none">
        <strong>  Erro ao excluir quadra, possivelmente esta quadra esta associado a uma reserva!!!</strong>
    </div>

<!--    <div class="card">-->
<!--        <div class="card-header">-->
<!--            <i class="fa fa-plus-circle" style="font-size: 20px"> Fazer reserva</i>-->
<!--        </div>-->
<!--        <div class="card-body">-->
<!--            <div class="row">-->
<!--                <div class="col-md-12">-->
<!--                    <form method="post" action="actions/cadastra_quadra.php">-->
<!--                        <div class="row">-->
<!--                            <input type="hidden" name="pagina" id="pagina" class="form-control" value="painel">-->
<!--                            <input type="hidden" name="id" id="id" class="form-control" value="painel">-->
<!--                            <div class="col-md-12">-->
<!--                                <label for="inputIsValid" class=" form-control-label">Descrição da Quadra</label>-->
<!--                                <textarea type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição"-->
<!--                                          required></textarea>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="row" style="margin-top: 15px; margin-bottom: 15px">-->
<!--                            <div class="col-md-3">-->
<!--                                <label for="inputIsValid" class=" form-control-label">Horário</label>-->
<!--                                <input type="text" name="horario" id="horario" class="form-control date-time-mask" placeholder="Horário"-->
<!--                                       required>-->
<!--                            </div>-->
<!--                            <div class="col-md-3">-->
<!--                                <label for="inputIsValid" class=" form-control-label">Tipo</label>-->
<!--                                <input type="text" name="tipo" id="tipo" class="form-control" placeholder="Tipo"-->
<!--                                       required>-->
<!--                            </div>-->
<!--                            <div class="col-md-6">-->
<!--                                <label class=" form-control-label">Selecione um ginásio</label>-->
<!--                                <select class="form-control" id="id_ginasio" name="id_ginasio">-->
<!--                                    --><?php
//                                    for($i = 0; $i <  count($resultado_busca_ginasio); $i++){
//                                        ?>
<!--                                        <option value="--><?php //echo $resultado_busca_ginasio[$i]['ID_GINASIO']; ?><!--">-->
<!--                                            --><?php //echo $resultado_busca_ginasio[$i]['NOME']; ?>
<!--                                        </option>-->
<!--                                    --><?php //} ?>
<!--                                </select>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <button type="submit" class="btn btn-success pull-right" style="margin-top: 15px">-->
<!--                            <i class="fa fa-plus"></i> Salvar-->
<!--                        </button>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->


    <div class="card">
        <div class="card-header">
            <i class="fa fa-users" style="font-size: 20px"> Lista de Reserva</i>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-hover">
                        <thead class="bg-dark" style="color: #ffffff; text-transform: uppercase">
                        <tr>
                            <th scope="col">Data da Reserva</th>
                            <th scope="col">Hora de Inicio</th>
                            <th scope="col">Hora Final</th>
                            <th scope="col">Data do Jogo</th>
                            <th scope="col">Quadra</th>
                            <th scope="col">Ginásio</th>
                            <th scope="col">Imprimir</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php for($i = 0; count($resultado_busca_reserva) > $i; $i++) { ?>
                            <tr>
                                <td><?php echo $resultado_busca_reserva[$i]['DATA_RESERVADA'];  ?></td>
                                <td><?php echo $resultado_busca_reserva[$i]['INICIO']; ?></td>
                                <td><?php echo $resultado_busca_reserva[$i]['FIM']; ?></td>
                                <td><?php echo $resultado_busca_reserva[$i]['DATA']; ?></td>
                                <td><?php echo $resultado_busca_reserva[$i]['TIPO']; ?></td>
                                <td><?php echo $resultado_busca_reserva[$i]['NOME']; ?></td>
                                <td>

                                    <a class="btn btn-info" target="_blank" href="../relatorios/finaliza_reserva.php?id=<?php echo $resultado_busca_reserva[$i]['ID_RESERVA'];?>">
                                        <i class="fa fa-file"></i>
                                    </a>

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