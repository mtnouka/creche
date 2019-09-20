<?php
$autorizacao = new Autorizacoes();
if(isset($_POST['cadastrar'])):

    $descricao  = $_POST['descricao'];
    $passeios = $_POST['passeios'];
    $codAluno = $_POST['codAluno'];

    $autorizacao->setPasseios($passeios);
    $autorizacao->setDescricao($descricao);
    $autorizacao->setCodAluno($codAluno);

    # Insert
    if($autorizacao->insert()){
        echo "Inserido com sucesso!";
    }

endif;

if(isset($_POST['atualizar'])):

    $id = $_POST['id'];
    $descricao  = $_POST['descricao'];
    $passeios = $_POST['passeios'];
    $codAluno = $_POST['codAluno'];

    $autorizacao->setPasseios($passeios);
    $autorizacao->setDescricao($descricao);
    $autorizacao->setCodAluno($codAluno);

    if($autorizacao->update($id)){
        echo "Atualizado com sucesso!";
    }

endif;
?>

<?php
if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

    $id = (int)$_GET['id'];
    if($autorizacao->delete($id)){
        echo "Deletado com sucesso!";
    }

endif;
?>

<?php
if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

    $id = (int)$_GET['id'];
    $resultado = $autorizacao->find($id);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="">
                <div class="page-header">
                    <br />
                    <br />
                    <h1>Atualizar Autorização</h1>
                </div>
                <div class="form-group col-md-12">
                    <br />
                    <label for="nome">Descrição:</label>
                    <input type="text" class="form-control" maxlength="50" name="descricao" value="<?php echo $resultado->descricao; ?>" required/>
                </div>
                <div class="form-group col-md-12">
                    <label for="email">Passeio:</label>
                    <input type="text" name="passeios" maxlength="20" class="form-control" value="<?php echo $resultado->passeios; ?>" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Aluno:</label>
                    <input type="text" name="codAluno" maxlength="50" class="form-control" value="<?php echo $resultado->codAluno; ?>"  required/>
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
                    <h1>Cadastrar Autorização</h1>
                </div>
                <div class="form-group col-md-12">
                    <br />
                    <label for="nome">Descrição:</label>
                    <input type="text" class="form-control" maxlength="50" name="descricao" placeholder="Insira a descrição aqui..." required/>
                </div>
                <div class="form-group col-md-12">
                    <label for="email">Passeio:</label>
                    <input type="text" name="passeios" maxlength="20" class="form-control" placeholder="Passeio" required/>
                </div>
                <div class="form-group col-md-12">
                    <label for="tipo_usuario">Aluno:</label>
                    <input type="text" name="codAluno" maxlength="50" class="form-control" placeholder="Insira o nome do Aluno" required/>
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
                    <th>Descrição:</th>
                    <th>Passeio:</th>
                    <th>Aluno:</th>
                    <th>Ações:</th>
                </tr>
            </thead>

            <?php foreach($autorizacao->findAll() as $key => $value): ?>

            <tbody>
                <tr>
                    <td><?php echo $value->id; ?></td>
                    <td><?php echo $value->descricao; ?></td>
                    <td><?php echo $value->passeios; ?></td>
                    <td><?php echo $value->codAluno; ?></td>
                    <td>
                        <?php echo "<a href='header.php?link=5&acao=editar&id=" . $value->id . "'>Editar</a>"; ?>
                        <?php echo "<a href='header.php?link=5&acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
                    </td>
                </tr>
            </tbody>

            <?php endforeach; ?>

            </table>
        </div>
    </div>
</div>