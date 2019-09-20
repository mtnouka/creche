<?php

$aluno = new Alunos();
if(isset($_POST['cadastrar'])):

    $estado  = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $horarioDeEntrada = $_POST['horarioDeEntrada'];
    $horarioDeSaida = $_POST['horarioDeSaida'];
    $dataNasc = $_POST['dataNasc'];
    //$idadeAnosMeses = $_POST['idadeAnosMeses'];
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $RA = $_POST['RA'];
    $alergias = $_POST['alergias'];
    $medicamentos = $_POST['medicamentos'];
    $tipoSanguineo = $_POST['tipoSanguineo'];

    //$idadeAnosMeses = '';

    $aluno->setEstado($estado);
    $aluno->setCidade($cidade);
    $aluno->setBairro($bairro);
    $aluno->setRua($rua);
    $aluno->setNumero($numero);
    $aluno->setHorarioDeEntrada($horarioDeEntrada);
    $aluno->setHorarioDeSaida($horarioDeSaida);
    $aluno->setDataNasc($dataNasc);
    //$aluno->setIdadeAnosMeses($idadeAnosMeses);
    $aluno->setNome($nome);
    $aluno->setMatricula($matricula);
    $aluno->setRA($RA);
    $aluno->setAlergias($alergias);
    $aluno->setMedicamentos($medicamentos);
    $aluno->setTipoSanguineo($tipoSanguineo);

    # Insert
    if($aluno->insert()){
        echo "Inserido com sucesso!";
    }

endif;

if(isset($_POST['atualizar'])):

    $id = $_POST['id'];
    $estado  = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $horarioDeEntrada = $_POST['horarioDeEntrada'];
    $horarioDeSaida = $_POST['horarioDeSaida'];
    $dataNasc = $_POST['dataNasc'];
    //$idadeAnosMeses = $_POST['idadeAnosMeses'];
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $RA = $_POST['RA'];
    $alergias = $_POST['alergias'];
    $medicamentos = $_POST['medicamentos'];
    $tipoSanguineo = $_POST['tipoSanguineo'];

    $aluno->setEstado($estado);
    $aluno->setCidade($cidade);
    $aluno->setBairro($bairro);
    $aluno->setRua($rua);
    $aluno->setNumero($numero);
    $aluno->setHorarioDeEntrada($horarioDeEntrada);
    $aluno->setHorarioDeSaida($horarioDeSaida);
    $aluno->setDataNasc($dataNasc);
    //$aluno->setIdadeAnosMeses($idadeAnosMeses);
    $aluno->setNome($nome);
    $aluno->setMatricula($matricula);
    $aluno->setRA($RA);
    $aluno->setAlergias($alergias);
    $aluno->setMedicamentos($medicamentos);
    $aluno->setTipoSanguineo($tipoSanguineo);

    if($aluno->update($id)){
        echo "Atualizado com sucesso!";
    }

endif;
?>

<?php
if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

    $id = (int)$_GET['id'];
    if($aluno->delete($id)){
        echo "Deletado com sucesso!";
    }

endif;
?>

<?php
if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

    $id = (int)$_GET['id'];
    $resultado = $aluno->find($id);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="">
                <div class="page-header">
                    <br />
                    <br />
                    <h1>Atualizar Aluno</h1>
                </div>
                <div class="form-group col-md-12">
                    <br />
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" maxlength="50" class="form-control" value="<?php echo $resultado->nome; ?>"  required/>
                </div>
                <div class="form-group col-md-12">
                    <label for="email">Matrícula</label>
                    <input type="number" name="matricula" maxlength="10" class="form-control" value="<?php echo $resultado->matricula; ?>" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">RA</label>
                    <input type="number" name="RA" maxlength="10" class="form-control" value="<?php echo $resultado->RA; ?>" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Data de nascimento</label>
                    <input type="date" name="dataNasc" class="form-control" value="<?php echo $resultado->dataNasc; ?>"  required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Medicamentos</label>
                    <input type="text" name="medicamentos" maxlength="50" class="form-control" value="<?php echo $resultado->medicamentos; ?>" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Alergias</label>
                    <input type="text" name="alergias" maxlength="50" class="form-control" value="<?php echo $resultado->alergias; ?>" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Tipo sanguineo</label>
                    <input type="text" name="tipoSanguineo" maxlength="3" class="form-control" value="<?php echo $resultado->tipoSanguineo; ?>" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Horário de Entrada</label>
                    <input type="time" name="horarioDeEntrada" class="form-control" value="<?php echo $resultado->horarioDeEntrada; ?>" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Horário de Saída</label>
                    <input type="time" name="horarioDeSaida" class="form-control" value="<?php echo $resultado->horarioDeSaida; ?>" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Estado</label>
                    <input type="text" name="estado" maxlength="2" class="form-control" value="<?php echo $resultado->estado; ?>" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Cidade</label>
                    <input type="text" name="cidade" maxlength="20" class="form-control" value="<?php echo $resultado->cidade; ?>" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Bairro</label>
                    <input type="text" name="bairro" maxlength="20" class="form-control" value="<?php echo $resultado->bairro; ?>" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Rua</label>
                    <input type="text" name="rua" maxlength="50" class="form-control" value="<?php echo $resultado->rua; ?>" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Número</label>
                    <input type="number" name="numero" maxlength="10" class="form-control" value="<?php echo $resultado->numero; ?>" required/>
                </div>
                <input type="hidden" name="id" value="<?php echo $resultado->id; ?>">
                <br />
                <input type="submit" name="atualizar" class="btn btn-primary" value="Atualizar dados">
                <br />
                <br />					
            </form>

		<?php }else{ ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="">
                <div class="page-header">
                    <br />
                    <h1>Cadastrar Aluno</h1>
                </div>
                <div class="form-group col-md-12">
                    <br />
                    <label for="nome">Nome Completo</label>
                    <input type="text" name="nome" maxlength="50" class="form-control" placeholder="Insira o Nome Completo" required/>
                </div>
                <div class="form-group col-md-12">
                    <label for="email">Matrícula</label>
                    <input type="number" name="matricula" maxlength="10" class="form-control" placeholder="Insira apenas os números da Mátricula" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">RA</label>
                    <input type="number" name="RA" maxlength="10" class="form-control" placeholder="Insira apenas os números do RA" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Data de nascimento</label>
                    <input type="date" name="dataNasc" class="form-control" placeholder="xx/xx/xxxx"  required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Medicamentos</label>
                    <input type="text" name="medicamentos" maxlength="50" class="form-control" placeholder="Insira os Medicamentos"required />
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Alergias</label>
                    <input type="text" name="alergias" maxlength="50" class="form-control" placeholder="Insira as Alergias" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Tipo sanguineo</label>
                    <input type="text" name="tipoSanguineo" maxlength="3" class="form-control" placeholder="Insira o Tipo Sanguineo" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Horário de Entrada</label>
                    <input type="time" name="horarioDeEntrada" class="form-control" placeholder="00:00" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Horário de Saída</label>
                    <input type="time" name="horarioDeSaida" class="form-control" placeholder="00:00" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">UF</label>
                    <input type="text" name="estado" maxlength="2" class="form-control" placeholder="Insira o Estado" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Cidade</label>
                    <input type="text" name="cidade" maxlength="20" class="form-control" placeholder="Insira a Cidade" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Bairro</label>
                    <input type="text" name="bairro" maxlength="20" class="form-control" placeholder="Insira o Bairro" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Rua</label>
                    <input type="text" name="rua" maxlength="50" class="form-control" placeholder="Insira a Rua" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Número</label>
                    <input type="number" name="numero" maxlength="10" class="form-control" placeholder="Insira o Número" required/>
                </div>
                <br />
                <input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar dados">	
                <br />
                <br />			
            </form>

            <?php } ?>

            <table class="table table-hover">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome:</th>
                    <th>Matrícula:</th>
                    <th>Data de Nascimento:</th>
                    <th>Ações:</th>
                </tr>
            </thead>

            <?php foreach($aluno->findAll() as $key => $value): ?>

            <tbody>
                <tr>
                    <td><?php echo $value->id; ?></td>
                    <td><?php echo $value->nome; ?></td>
                    <td><?php echo $value->matricula; ?></td>
                    <td><?php echo $value->dataNasc; ?></td>
                    <td>
                        <?php echo "<a href='header.php?link=3&acao=editar&id=" . $value->id . "'>Editar</a>"; ?>
                        <?php echo "<a href='header.php?link=3&acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
                    </td>
                </tr>
            </tbody>

            <?php endforeach; ?>

            </table>
        </div>
    </div>
</div>