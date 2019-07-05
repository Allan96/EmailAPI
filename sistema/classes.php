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
        $NumerodeUsuarios = $conexao->prepare('SELECT * FROM clientes');
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
        //  pega a quantidade de clientes
        $NumerodeUsuarios = $conexao->prepare('SELECT * FROM clientes');
        $NumerodeUsuarios->execute();
        $clientes = $NumerodeUsuarios->fetchAll();
        foreach($clientes as $rowC) {
            echo '<h2 class="col-12 mt-3 c-white fadeInUp animated upper bold">'.$rowC['nome'] .'</h2>';
            $SelectCard = $conexao->prepare('SELECT * FROM tiposdeemail WHERE cliente = :clienteT');
            $SelectCard->bindParam(':clienteT', $rowC['nome']);
            $SelectCard->execute();
            $data = $SelectCard->fetchAll();

            foreach($data as $row) {
                echo 
                '<a class="col-6 col-lg-3 card-' . $row['id'] . '  fadeInUp animated" href="'. $row['link'] .'">
                <div class="box d-flex justify-content-center align-items-center">
                <span class="upper bold c-purpledark">'. $row['nome'] .'</span>
                </div>
            </a>';
            }
        }
    }

}
?>