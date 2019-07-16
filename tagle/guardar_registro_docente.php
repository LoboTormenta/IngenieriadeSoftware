<?php
include 'includes/conexion.php'


//El if es para comprobar que me estan llegando datos por el foemulario
//if (isset($_POST)) {
    
    //Recoger los valores del formulario del registro
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $appa = isset($_POST['appa']) ? $_POST['appa'] : false;
    $apma = isset($_POST['apma']) ? $_POST['apma'] : false;
    $nocontrol = isset($_POST['nocontrol']) ? $_POST['nocontrol'] : false;
    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : false;
    $contrasena = isset($_POST['contrasena']) ? $_POST['contrasena'] : false;
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $carrera = isset($_POST['carrera']) ? $_POST['carrera'] : false;

    //Array de errores
    $errores=array();
    
    //validar antes de guardar en la base de datos
    //Validar campo Nombre
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre)) {
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['$nombre'] = "El nombre no es valido";
    }
    //Validar campo Apellido Paterno
    if (!empty($appa) && !is_numeric($appa) && !preg_match("/[0-9]/",$appa)) {
        $appa_validado = true;
    }else{
        $appa_validado = false;
        $errores['$appa'] = "El apellido paterno no es valido";
    }
    //Validar campo Apellido Materno
    if (!empty($apma) && !is_numeric($apma) && !preg_match("/[0-9]/",$apma)) {
        $apma_validado = true;
    }else{
        $apma_validado = false;
        $errores['$apma'] = "El apellido materno no es valido";

    //Validar Numero de control
    
    if (!empty($nocontrol) && is_numeric($nocontrol) && preg_match("/[0-9]/",$nocontrol)) {
        $nocontrol_validado = true;
    }else{
        $nocontrol_validado = false;
        $errores['$nocontrol'] = "El número de control no es valido";
    }

    //Validar usuario

if (!empty($usuario) && is_numeric($nombre) && preg_match("/[0-9]/",$usuario)) {
        $usuario_validado = true;
    }else{
        $usuario_validado = false;
        $errores['$usuario'] = "El usuario no es valido";
    }


   //Validar campo contraseña
    if (!empty($contrasena)) {
        $contrasena_validado = true;
    }else{
        $contrasena_validado = false;
        $errores['$contrasena'] = "El password no es valido";
    }

//Validar Telefono
    
    if (!empty($telefono) && is_numeric($telefono) && preg_match("/[0-9]/",$telefono)) {
        $telefono_validado = true;
    }else{
        $telefono_validado = false;
        $errores['$telefono'] = "El telefono no es valido";
    }


    }
    //Validar campo Email
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validado = true;
    }else{
        $email_validado = false;
        $errores['$email'] = "El email no es valido";
    }
    
    //Verificar que no tengo errores para guardar en la base de datos
    $guardar_usuario = false;


    if (count($errores) == 0) {
        $guardar_usuario = true;
        //Insertar usuario en la base de datos

        $sql = "INSERT INTO tbl_docentes VALUES (null, '$nombre', '$appa', '$apma', '$nocontrol', '$usuario', '$contrasena', '$telefono', '$email', '$carrera');";

        $guardar = mysqli_query($conn, $sql);

if (!$guardar)
  {
  echo("Error description: " . mysqli_error());
  }

    }else{
        $_SESSION['errores']=$errores;
        header('Location: index.php');
    }
}
