<?php
$anotacao = new Anotacoes();
if(isset($_POST['cadastrar'])):

    //$dataAnotacao  = $_POST['dataAnotacao'];
    $nomeEscritor = $_POST['nomeEscritor'];
    $descricao = $_POST['descricao'];
    $codAluno = $_POST['codAluno'];

    //$anotacao->setDataAnotacao($dataAnotacao);
    $anotacao->setNomeEscritor($nomeEscritor);
    $anotacao->setDescricao($descricao);
    $anotacao->setCodAluno($codAluno);

    # Insert
    if($anotacao->insert()){
        echo "Inserido com sucesso!";
    }

endif;

if(isset($_POST['atualizar'])):

    $id = $_POST['id'];
    $nomeEscritor = $_POST['nomeEscritor'];
    $descricao = $_POST['descricao'];
    $codAluno = $_POST['codAluno'];

    $anotacao->setNomeEscritor($nomeEscritor);
    $anotacao->setDescricao($descricao);
    $anotacao->setCodAluno($codAluno);

    if($anotacao->update($id)){
        echo "Atualizado com sucesso!";
    }

endif;
?>

<?php
if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

    $id = (int)$_GET['id'];
    if($anotacao->delete($id)){
        echo "Deletado com sucesso!";
    }

endif;
?>

<?php
if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

    $id = (int)$_GET['id'];
    $resultado = $anotacao->find($id);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="">
                <div class="page-header">
                    <br />
                    <br />
                    <h1>Atualizar Anotação</h1>
                </div>
                <div class="form-group col-md-12">
                    <br />
                    <label for="nome">Anotação:</label>
                    <input type="text" name="descricao" maxlength="100" class="form-control" value="<?php echo $resultado->descricao; ?>"required />
                </div>
                <div class="form-group col-md-12">
                    <label for="email">Escritor:</label>
                    <input type="text" name="nomeEscritor" maxlength="20" class="form-control" value="<?php echo $resultado->nomeEscritor; ?>"required />
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Aluno:</label>
                    <input type="text" name="codAluno" maxlength="50" class="form-control" value="<?php echo $resultado->codAluno; ?>" required />
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
                    <h1>Cadastrar Anotação</h1>
                </div>
                <div class="form-group col-md-12">
                    <br />
                    <label for="nome">Anotação:</label>
                    <input type="text" name="descricao" maxlength="100" class="form-control" placeholder="Digite aqui a anotação..." required/>
                </div>
                <div class="form-group col-md-12">
                    <label for="email">Escritor:</label>
                    <input type="text" name="nomeEscritor" maxlength="20" class="form-control" placeholder="Insira o seu nome" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Aluno:</label>
                    <input type="text" name="codAluno" maxlength="50" class="form-control" placeholder="Insira o nome do Aluno" required />
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
                    <th>Escritor:</th>
                    <th>Data:</th>
                    <th>Descrição:</th>
                    <th>Aluno:</th>
                    <th>Ações:</th>
                </tr>
            </thead>

            <?php foreach($anotacao->findAll() as $key => $value): ?>

            <tbody>
                <tr>
                    <td><?php echo $value->id; ?></td>
                    <td><?php echo $value->nomeEscritor; ?></td>
                    <td><?php echo $value->dataAnotacao; ?></td>
                    <td><?php echo $value->descricao; ?></td>
                    <td><?php echo $value->codAluno; ?></td>
                    <td>
                        <?php echo "<a href='header.php?link=4&acao=editar&id=" . $value->id . "'>Editar</a>"; ?>
                        <?php echo "<a href='header.php?link=4&acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
                    </td>
                </tr>
            </tbody>

            <?php endforeach; ?>

            </table>
        </div>
    </div>
</div>