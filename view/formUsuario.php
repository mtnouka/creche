<?php
$usuario = new Usuarios();
if(isset($_POST['cadastrar'])):

    $nome  = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $tipo_usuario = $_POST['tipo_usuario'];

    $usuario->setNome($nome);
    $usuario->setEmail($email);
    $usuario->setCpf($cpf);
    $usuario->setSenha($senha);
    $usuario->setTipo_usuario($tipo_usuario);

    # Insert
    if($usuario->insert()){
        echo "Inserido com sucesso!";
    }

endif;

if(isset($_POST['atualizar'])):

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $tipo_usuario = $_POST['tipo_usuario'];

    $usuario->setNome($nome);
    $usuario->setEmail($email);
    $usuario->setCpf($cpf);
    $usuario->setSenha($senha);
    $usuario->setTipo_usuario($tipo_usuario);

    if($usuario->update($id)){
        echo "Atualizado com sucesso!";
    }

endif;
?>

<?php
if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

    $id = (int)$_GET['id'];
    if($usuario->delete($id)){
        echo "Deletado com sucesso!";
    }

endif;
?>

<?php
if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

    $id = (int)$_GET['id'];
    $resultado = $usuario->find($id);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="">
                <div class="page-header">
                    <br />
                    <br />
                    <h1>Atualizar Usuário</h1>
                </div>
                <div class="form-group col-md-12">
                    <br />
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" maxlength="60" class="form-control" value="<?php echo $resultado->nome; ?>" required />
                </div>
                <div class="form-group col-md-12">
                <label for="nome">E-Mail:</label>
                    <input type="email" name="email" maxlength="60" class="form-control" value="<?php echo $resultado->email; ?>" required />
                </div>
                <div class="form-group col-md-12">
                <label for="nome">CPF:</label>
                    <input type="number" name="cpf" maxlength="15" class="form-control" value="<?php echo $resultado->cpf; ?>" required />
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Tipo usuário:</label>
                    <input type="text" name="tipo_usuario" maxlength="1" class="form-control" value="<?php echo $resultado->tipo_usuario; ?>"required />
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Senha:</label>
                    <input type="password" name="senha" maxlength="20" class="form-control" value="<?php echo $resultado->senha; ?>"required />
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
                    <h1>Cadastrar Usuário</h1>
                </div>
                <div class="form-group col-md-12">
                    <br />
                    <label for="nome">Nome Completo</label>
                    <input type="text" name="nome" maxlength="60" class="form-control" placeholder="Nome Completo" required/>
                </div>
                <div class="form-group col-md-12">
                    <label for="email">E-Mail</label>
                    <input type="email" name="email" maxlength="60" class="form-control" placeholder="exemplo@exemplo.com.br" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">CPF:</label>
                    <input type="number" name="cpf" maxlength="15" class="form-control" placeholder="Insira apenas os numeros do seu CPF"  required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Tipo usuário:</label>
                    <input type="text" name="tipo_usuario" maxlength="1" class="form-control" placeholder="Para Direção insira D, para Professor insira P"required />
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Senha:</label>
                    <input type="password" name="senha" maxlength="20" class="form-control" placeholder="Digite uma senha" required/>
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
                    <th>E-mail:</th>
                    <th>CPF:</th>
                    <th>Tipo usuário:</th>
                    <th>Ações:</th>
                </tr>
            </thead>

            <?php foreach($usuario->findAll() as $key => $value): ?>

            <tbody>
                <tr>
                    <td><?php echo $value->id; ?></td>
                    <td><?php echo $value->nome; ?></td>
                    <td><?php echo $value->email; ?></td>
                    <td><?php echo $value->cpf; ?></td>
                    <td><?php if($value->tipo_usuario == 'D'){ echo 'Direção'; } elseif($value->tipo_usuario == 'P'){ echo 'Professor'; } ?></td>
                    <td>
                        <?php echo "<a href='header.php?link=2&acao=editar&id=" . $value->id . "'>Editar</a>"; ?>
                        <?php echo "<a href='header.php?link=2&acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
                    </td>
                </tr>
            </tbody>

            <?php endforeach; ?>

            </table>
        </div>
    </div>
</div>