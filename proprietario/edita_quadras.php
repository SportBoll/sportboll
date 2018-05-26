<?php
include 'header.php';
include 'class/quadras.class.php';
include 'class/ginasio.class.php';

$id = $_GET['id'];

$v2 = new Ginasio();
$resultado_busca_ginasio = $v2->buscaTodos($_SESSION['ID_PESSOA_PROP']);

$v1 = new Quadra();
$resultado_busca = $v1->buscaID($id);
?>

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
            <i class="fa fa-edit" style="font-size: 20px"> Editar Quadra</i>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">

                    <form method="post" action="actions/edita_quadra.php">
                        <div class="row">
                            <input type="hidden" name="pagina" id="pagina" class="form-control" value="painel">
                            <input type="hidden" name="id" id="id" class="form-control" value="painel">
                            <input type="hidden" name="id_quadra" id="id_quadra" class="form-control" value="<?php echo $resultado_busca[0]['ID_QUADRA'] ?>">
                            <div class="col-md-12">
                                <label for="inputIsValid" class=" form-control-label">Descrição da Quadra</label>
                                <textarea type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição"
                                          required><?php echo $resultado_busca[0]['DESCRICAO'] ?></textarea>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px; margin-bottom: 15px">
                            <div class="col-md-3">
                                <label for="inputIsValid" class=" form-control-label">Valor por hora</label>
                                <input type="text" name="horario" id="horario" class="form-control date-time-mask" placeholder="Valor"
                                       value="<?php echo $resultado_busca[0]['VALOR'] ?>"
                                       required>
                            </div>
                            <div class="col-md-3">
                                <label for="inputIsValid" class=" form-control-label">Tipo</label>
                                <input type="text" name="tipo" id="tipo" class="form-control" placeholder="Tipo"
                                       value="<?php echo $resultado_busca[0]['TIPO'] ?>"
                                       required>
                            </div>
                            <div class="col-md-6">
                                <label class=" form-control-label">Selecione um ginásio</label>
                                <select class="form-control" id="id_ginasio" name="id_ginasio">
                                    <?php
                                    for($i = 0; $i <  count($resultado_busca_ginasio); $i++){
                                    ?>
                                    <option value="<?php echo $resultado_busca_ginasio[$i]['ID_GINASIO']; ?>" <?php if($resultado_busca_ginasio[$i]['ID_GINASIO'] == $resultado_busca[0]['ID_GINASIO']){ echo 'selected'; } ?>>
                                        <?php echo $resultado_busca_ginasio[$i]['NOME']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
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

include 'footer.php'

?>