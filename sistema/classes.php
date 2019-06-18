<?php
include('config.php');
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
        if(!self::Logado()){
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

    public static function MostraCards(){
        global $conexao;
        $SelectCard = $conexao->prepare('SELECT * FROM tiposdeemail');
        $SelectCard->execute();
        $data = $SelectCard->fetchAll();

        foreach($data as $row) {
             echo 
             '<div class="col-6 col-lg-3 card-' . $row['id'] . '  fadeInUp animated">
             <div class="box d-flex justify-content-center align-items-center">
             <span class="upper bold c-purpledark">'. $row['nome'] .'</span>
             </div>
         </div>';
            
            
        }
    }

}
?>