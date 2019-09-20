<?php
require_once 'DB.php';

class validaLogin extends DB{
    //private $conexao;
    protected $table = 'cadusuario';

	public function validar ($dado){
        $this->email = $dado['email'];
        $this->senha = $dado['senha'];
        try{
            $query = "SELECT email, senha, tipo_usuario FROM $this->table WHERE email = :email AND senha = :senha";
            $result = DB::prepare($query);
            $result->bindParam(':email', $this->email, PDO::PARAM_STR);
            $result->bindParam(':senha', $this->senha, PDO::PARAM_STR);
            $result->execute();

            if($result->rowCount() == 0){
				header('Location: index.php?login=error');
            }else{
				session_start();
				$row = $result->fetch();
				$email = $row->email;
				$tipo = $row->tipo_usuario;
				$_SESSION['logado'] = 'sim';
				$_SESSION['email'] = $email;
				$_SESSION['tipo'] = $tipo;
				header('Location: view/header.php');
            }
        }catch(PDOException $e){
            return $e->getMessage();
        }
		/*if(empty($_POST['email']) || empty($_POST['senha'])){
			header('Location: ../index.php');
			exit();
        }

		$query = "SELECT * FROM $this->table WHERE email = :email AND senha = :senha";
        $result = DB::prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_INT);
        $stmt->bindParam(':senha', $senha, PDO::PARAM_INT);
        $result->execute();
        return $result->fetch();

		if($row == 1) {
			
		} 
		else {
			
		}*/
	}
}

/*session_start();

	$emailt = $_POST['email'];
	$senhat = $_POST['senha'];

	include_once("../model/conexao.php");

	$query = "SELECT * FROM cadusuario WHERE email='$emailt' AND senha='$senhat' LIMIT 1";
	$result = $this->connection->query($query);	
	//$result = mysqli_query($conn, $query);

	if($result == false){
		$_SESSION['loginErro'] = "Usuário ou Senha inválidos!";
		return false;
		//header("Location: ../view/logonScreen.php");
	}else{
		$_SESSION['usuarioId'] = $resultado['Id'];
		$_SESSION['usuarioNome'] = $resultado['Nome'];
		$_SESSION['usuarioEmail'] = $resultado['Email'];
		$_SESSION['usuarioSenha'] = $resultado['Senha'];
		return true;
		//header("Location: ../view/homepage.php");
	}*/
?>