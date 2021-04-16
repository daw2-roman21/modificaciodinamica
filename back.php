<?php
    if(isset($_POST['mensaje'])){
        // echo $_POST['mensaje'];
        $mensaje = $_POST['mensaje'];
        $conn = new mysqli('localhost','root','root','ajax');
        if($conn->connect_error){
            die("Error de conexion");
        }
        $result = $conn->query("SELECT * FROM mensajes WHERE mensaje like '$mensaje%' order by total desc LIMIT 5");
        if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            echo $row['mensaje'] . "/";
        }
    }
    }
    
    // require("class.pdofactory.php");
    // require("abstract.databoundobject.php");
    // require("class.mensaje.php");

    // $strDSN = "pgsql:dbname=ajax;";
    // $objPDO = PDOFactory::GetPDO($strDSN, "postgres", "root",array());
    // $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // $mensaje = new Mensaje($objPDO);
    // $mensaje->setmensaje("A");
    // $mensaje->setID(1);
    // $mensaje->sacarLista();
    // $listaRegs = "";
?>