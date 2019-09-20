<?php

$responsavel = new Responsaveis();
if(isset($_POST['cadastrar'])):

    $estado = $_POST['estado'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $profissao = $_POST['profissao'];
    $celular = $_POST['celular'];
    $telefone = $_POST['telefone'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $cidade = $_POST['cidade'];
    $email = $_POST['email'];
    $codAluno = $_POST['codAluno'];

    $responsavel->setEstado($estado);
    $responsavel->setNome($nome);
    $responsavel->setCpf($cpf);
    $responsavel->setRg($rg);
    $responsavel->setProfissao($profissao);
    $responsavel->setCelular($celular);
    $responsavel->setTelefone($telefone);
    $responsavel->setBairro($bairro);
    $responsavel->setCep($cep);
    $responsavel->setRua($rua);
    $responsavel->setCidade($cidade);
    $responsavel->setEmail($email);
    $responsavel->setCodAluno($codAluno);

    # Insert
    if($responsavel->insert()){
        echo "Inserido com sucesso!";
    }

endif;

if(isset($_POST['atualizar'])):

    $id = $_POST['id'];
    $estado = $_POST['estado'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $profissao = $_POST['profissao'];
    $celular = $_POST['celular'];
    $telefone = $_POST['telefone'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $cidade = $_POST['cidade'];
    $email = $_POST['email'];
    $codAluno = $_POST['codAluno'];

    $responsavel->setEstado($estado);
    $responsavel->setNome($nome);
    $responsavel->setCpf($cpf);
    $responsavel->setRg($rg);
    $responsavel->setProfissao($profissao);
    $responsavel->setCelular($celular);
    $responsavel->setTelefone($telefone);
    $responsavel->setBairro($bairro);
    $responsavel->setCep($cep);
    $responsavel->setRua($rua);
    $responsavel->setCidade($cidade);
    $responsavel->setEmail($email);
    $responsavel->setCodAluno($codAluno);

    if($responsavel->update($id)){
        echo "Atualizado com sucesso!";
    }

endif;
?>

<?php
if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):

    $id = (int)$_GET['id'];
    if($responsavel->delete($id)){
        echo "Deletado com sucesso!";
    }

endif;
?>

<?php
if(isset($_GET['acao']) && $_GET['acao'] == 'editar'){

    $id = (int)$_GET['id'];
    $resultado = $responsavel->find($id);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="">
                <div class="page-header">
                    <br />
                    <br />
                    <h1>Atualizar Responsável</h1>
                </div>
                <div class="form-group col-md-12">
                    <br />
                    <label for="nome">Nome Completo</label>
                    <input type="text" name="nome" maxlength="50" class="form-control" value="<?php echo $resultado->nome; ?>" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">E-Mail</label>
                    <input type="email" name="email" maxlength="50" class="form-control" value="<?php echo $resultado->email; ?>" required/>
                </div>
                <div class="form-group col-md-12">
                    <label for="email">CPF</label>
                    <input type="text" name="cpf" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" maxlength="15" class="form-control" value="<?php echo $resultado->cpf; ?>" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">RG</label>
                    <input type="text" name="rg" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" maxlength="12" class="form-control" value="<?php echo $resultado->rg; ?>" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Profissão</label>
                    <input type="text" name="profissao" maxlength="50" class="form-control" value="<?php echo $resultado->profissao; ?>"  required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Celular</label>
                    <input type="text" name="celular" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" maxlength="15" class="form-control" value="<?php echo $resultado->celular; ?>" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Telefone</label>
                    <input type="text" name="telefone" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" maxlength="15" class="form-control" value="<?php echo $resultado->telefone; ?>" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">CEP</label>
                    <input type="text" name="cep" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" maxlength="9" class="form-control" value="<?php echo $resultado->cep; ?>" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">UF</label>
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
                <label for="nome">Aluno</label>
                    <input type="text" name="codAluno" maxlength="50" class="form-control" value="<?php echo $resultado->codAluno; ?>" required/>
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
                    <h1>Cadastrar Responsável</h1>
                </div>
                <div class="form-group col-md-12">
                    <br />
                    <label for="nome">Nome Completo</label>
                    <input type="text" name="nome" maxlength="50" class="form-control" placeholder="Insira o Nome Completo" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">E-Mail</label>
                    <input type="email" name="email" maxlength="50" class="form-control" placeholder="exemplo@exemplo.com.br"required />
                </div>
                <div class="form-group col-md-12">
                    <label for="cpf">CPF</label>
                    <input type="numeric" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" name="cpf" maxlength="15" class="form-control" placeholder="Insira apenas os números do CPF" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">RG</label>
                    <input type="numeric" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" name="rg" maxlength="12" class="form-control" placeholder="Insira apenas os números do RG" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Profissão</label>
                    <input type="text" name="profissao" maxlength="50" class="form-control" placeholder="Insira a profissão"  required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Celular</label>
                    <input type="text" name="celular" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" maxlength="15" class="form-control" placeholder="Insira apenas os números do Celular" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">Telefone</label>
                    <input type="text" name="telefone" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" maxlength="15" class="form-control" placeholder="Insira apenas os números do Telefone" required/>
                </div>
                <div class="form-group col-md-12">
                <label for="nome">CEP</label>
                    <input type="text" name="cep" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" maxlength="9" class="form-control" placeholder="Insira apenas os números do CEP" required/>
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
                <label for="nome">Aluno</label>
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
                    <th>Nome:</th>
                    <th>CPF:</th>
                    <th>Celular:</th>
                    <th>Aluno:</th>
                    <th>Ações:</th>
                </tr>
            </thead>

            <?php foreach($responsavel->findAll() as $key => $value): ?>

            <tbody>
                <tr>
                    <td><?php echo $value->id; ?></td>
                    <td><?php echo $value->nome; ?></td>
                    <td><?php echo $value->cpf; ?></td>
                    <td><?php echo $value->celular; ?></td>
                    <td><?php echo $value->codAluno; ?></td>
                    <td>
                        <?php echo "<a href='header.php?link=6&acao=editar&id=" . $value->id . "'>Editar</a>"; ?>
                        <?php echo "<a href='header.php?link=6&acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
                    </td>
                </tr>
            </tbody>

            <?php endforeach; ?>

            </table>
        </div>
    </div>
</div>