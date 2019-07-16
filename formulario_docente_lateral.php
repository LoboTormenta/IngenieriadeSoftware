<?php require_once 'includes/helpers.php'; 

session_start();

?>

<!--Barra Lateral-->
        <aside id="sidebar">
            <div id="login" class="bloque">
                <h3>Identificate</h3>
                <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    
                    <label for="psw">Pasword</label>
                    <input type="password" name="psw">
                    
                    <input type="submit" value="Entrar">
                </form>
            </div>
            
            <div id="register" class="bloque">
                <h3>Registrate</h3>
                <form action="registro.php" method="POST">

                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre"/>
                    <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

                    <label for="apa">Apellido Paterno</label>
                    <input type="text" name="apa">
                    <?php echo mostrarError($_SESSION['errores'], 'apa'); ?>
                    
                    <label for="ama">Apellido Materno</label>
                    <input type="text" name="ama">
                    <?php echo mostrarError($_SESSION['errores'], 'ama'); ?>
                    
                    <label for="email">Email</label>
                    <input type="email" name="email">
                    <?php echo mostrarError($_SESSION['errores'], 'email'); ?>
                    
                    <label for="psw">Password</label>
                    <input type="password" name="psw">
                    <?php echo mostrarError($_SESSION['errores'], 'psw'); ?>
                    
                    <input type="submit" name="submit" value="Registrar">
                </form>
                <?php borrarErrores();?>
            </div>
        </aside>