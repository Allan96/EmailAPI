<?php
include('/config.php');
class EmailAPI{
    function Logado(){
        if(isset($_SESSION['logado']) == true){
            return true;
        }
        else{
            return false;
        }
    }
    public static function estaLogado(){
        if(self::Logado()){
        }
        else{
            header("Location: ./index.php"); 
        }

    }
    public static function Erro($msg){
        echo '<div class="erro">' .$msg. ' <span>X</span></div>';
    }
    public static function App(){
        global $conexao;
        $NumerodeUsuarios = $conexao->prepare('SELECT * FROM usuarios');
        $NumerodeUsuarios->execute();
        echo $NumerodeUsuarios->RowCount();
    }

    public static function Login(){
        if(self::Logado()){
            header("Location: ./painel.php"); 
        }
        else if(isset( $_POST['usuario']) && isset($_POST['senha'])){
            global $conexao;
            $LogindoUsuario = $conexao->prepare('SELECT * FROM usuarios WHERE usuario = :nomePOST AND senha = :senhaPOST');
            $LogindoUsuario->bindParam(':nomePOST', $_POST['usuario']);
            $LogindoUsuario->bindParam(':senhaPOST', $_POST['senha']);
            $LogindoUsuario->execute();
            if($LogindoUsuario->RowCount() >= 1){
                $_SESSION['logado'] = true;
                header("Location: ./painel.php"); 
            }
            else{
                 self::Erro('Ooops! Parace que algo deu errado!');
            }
        }
    }


}
?>