<?php
class usuario extends Conectar {
    
    public function  login(){       
             $conectar=parent::conexion();
                parent::set_names();
                if(isset($_POST["enviar"])){
                    $correo = $_POST["usu_correo"];
                    $pass = $_POST["usu_pass"];
                    if(empty($correo) and empty($pass)){
                        header("Location:".conectar::ruta()."index.php?m=2");
                        exit();
                    }else{
                        $sql = "SELECT * FROM tc_usuario WHERE usu_correo=? and usu_password=? and edo=1";
                        $stmt=$conectar->prepare($sql);
                        $stmt->bindValue(1, $correo);
                        $stmt->bindValue(2, $pass);
                        $stmt->execute();
                        $resultado = $stmt->fetch();
                        if (is_array($resultado) and count($resultado)>0){
                            $_SESSION["usu_id"]=$resultado["usu_id"];
                            $_SESSION["usu_num"]=$resultado["usu_num"];
                            $_SESSION["usu_ape"]=$resultado["usu_ape"];
                            header("Location:".Conectar::ruta()."VIEW/Home/");
                            exit(); 
                        }else{
                            header("Location:".Conectar::ruta()."INDEX.PHP?m=1");
                            exit();
                        }
                    }
                }
            }
        }
    ?>