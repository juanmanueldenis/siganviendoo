<?php
include("conec.php");


if (isset($_POST['subm'])) {
      $username = trim($_POST['username']);
      $password = trim($_POST['password']);
      $sql = "SELECT * FROM datos WHERE user = '$username' AND password = '$password'";
      $result = mysqli_query($mysqli,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      // Si los detalles de inicio de sesión son correctos, redirigir al usuario a la página de inicio.
      if($count == 1) {
        $_SESSION["username"]=$username;
        header("Location: ../index.php");
        exit();
      }else if (empty($username) && empty($password)) {
      ?>
<div id="popup-container">
<i class="el-message__icon el-icon-error"></i><p class="el-message__content">Complete los datos de ingreso!</p>
</div>
<style>
#popup-container {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 9999;
  display: flex;
  justify-content: center;
}

.el-message__content {
  background-color: #e77878;
  color: white;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  padding: 10px;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  animation: popup 4s ease-out;
  animation-fill-mode: forwards;
}

@keyframes popup {
  0% {
    opacity: 0;
    transform: translateY(-100%);
  }
  10% {
    opacity: 1;
    transform: translateY(0);
  }
  90% {
    opacity: 1;
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    transform: translateY(-100%);
  }
}
  
</style>

<?php
    
      }
      else {
        ?>
<div id="popup-container">
<p class="el-message__content">Usuario no encontrado <img id="error" src="error.png"></p>  
<i class="el-message__icon el-icon-error"></i>

</div>

<style>
#error{
  width: 20px;
}

  #popup-container {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 9999;
    display: flex;
    justify-content: center;
  }

  .el-message__icon {
    font-size: 24px;
    margin-right: 10px;
    background-image: url("error.png");
  }

  .el-message__content {
    background-color: #e77878;
    color: white;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    animation: popup 4s ease-out;
    animation-fill-mode: forwards;
  }

 

  @keyframes popup {
    0% {
      opacity: 0;
      transform: translateY(-100%);
    }
    10% {
      opacity: 1;
      transform: translateY(0);
    }
    90% {
      opacity: 1;
      transform: translateY(0);
    }
    100% {
      opacity: 0;
      transform: translateY(-100%);
    }
  }
</style>

        <?php
       

      }
    }

if (isset($_POST['SUBIR_MNSJ'])) {
    $nombre = trim($_POST['Nom']); 
    $ape = trim($_POST['Ape']);
    $numero = str_replace(" ", "",$_POST['Num']); 
    $mnsje = trim($_POST['Mnsje']);
    $direc = trim($_POST['Direc']);
    if (!empty($nombre) && !empty($ape)&&!empty($numero) && !empty($mnsje)) {
        $consulta = "INSERT INTO t_mensajes(nombre, apellido, numero, mensaje) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($mysqli, $consulta);
        mysqli_stmt_bind_param($stmt, "ssss", $nombre, $ape, $numero, $mnsje);
        if(mysqli_stmt_execute($stmt)){
            ?>
<div id="popup-container">
<i class="el-message__icon el-icon-error"></i><p class="el-message__content">MENSAJE ENVIADO!!!!!</p>
</div>
<style>
#popup-container {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 9999;
  display: flex;
  justify-content: center;
}

.el-message__content {
  background-color: #43c258;
  color: white;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  padding: 10px;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  animation: popup 4s ease-out;
  animation-fill-mode: forwards;
}

@keyframes popup {
  0% {
    opacity: 0;
    transform: translateY(-100%);
  }
  10% {
    opacity: 1;
    transform: translateY(0);
  }
  90% {
    opacity: 1;
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    transform: translateY(-100%);
  }
}
  
</style>

            <?php
        } else {
            ?>
            <h2>Error al registrar usuario</h2>
            <?php
        }
        mysqli_stmt_close($stmt);
    } else {
      ?>
<div id="popup-container">
<i class="el-message__icon el-icon-error"></i><p class="el-message__content">Complete los datos del formulario</p>
</div>
<style>
#popup-container {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 9999;
  display: flex;
  justify-content: center;
}

.el-message__content {
  background-color: #e77878;
  color: white;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  padding: 10px;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  animation: popup 4s ease-out;
  animation-fill-mode: forwards;
}

@keyframes popup {
  0% {
    opacity: 0;
    transform: translateY(-100%);
  }
  10% {
    opacity: 1;
    transform: translateY(0);
  }
  90% {
    opacity: 1;
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    transform: translateY(-100%);
  }
  }
</style>

        <?php
       

      }
    }

    if (isset($_POST['submit'])) {
      $nombre = trim($_POST['nombre']); 
      $pass = trim($_POST['pass']);
      if (!empty($nombre) && !empty($pass)) {
          $consulta = "INSERT INTO datos(user, PASSWORD) VALUES (?, ?)";
          $stmt = mysqli_prepare($mysqli, $consulta);
          mysqli_stmt_bind_param($stmt, "ss", $nombre, $pass);
          if(mysqli_stmt_execute($stmt)){
          ?>
  <div id="popup-container">
  <i class="el-message__icon"></i><p class="el-message__content">Usuario Registrado con Exito</p>
  </div>
  <style>
  #popup-container {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 9999;
    display: flex;
    justify-content: center;
  }
  
  .el-message__content {
    background-color: #e77878;
    color: white;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    animation: popup 4s ease-out;
    animation-fill-mode: forwards;
  }
  
  @keyframes popup {
    0% {
      opacity: 0;
      transform: translateY(-100%);
    }
    10% {
      opacity: 1;
      transform: translateY(0);
    }
    90% {
      opacity: 1;
      transform: translateY(0);
    }
    100% {
      opacity: 0;
      transform: translateY(-100%);
    }
  }
    
  </style>
  
              <?php
          } else {
              ?>
    <style>
            #popup {
          position: fixed;
          width: 100%;
          height: 100%;
          background-color: rgba(0, 0, 0, 0.5);
          }  
          
          .mensaje {
          display: flex;
          align-items: center;
          justify-content: center;
          color: white;
          margin: 200px;
          font-size: 30px;
          cursor: pointer;
          }
          </style>    
          <div id="popup" onclick="borrar()">
          <div class="mensaje" id="mensaje">ERROR AL REGISTRAR USUARIO</div>
          </div>
          <script type="text/javascript">
          document.getElementById('popup').onclick = function(){popup.style.display="none";}
          </script>
              <?php
          }
          mysqli_stmt_close($stmt);
      } else {
     ?>
  <div id="popup-container">
  <i class="el-message__icon el-icon-error"></i><p class="el-message__content">Complete los datos del formulario</p>
  </div>
  <style>
  #popup-container {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 9999;
    display: flex;
    justify-content: center;
  }
  
  .el-message__content {
    background-color: #e77878;
    color: white;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    animation: popup 4s ease-out;
    animation-fill-mode: forwards;
  }
  
  @keyframes popup {
    0% {
      opacity: 0;
      transform: translateY(-100%);
    }
    10% {
      opacity: 1;
      transform: translateY(0);
    }
    90% {
      opacity: 1;
      transform: translateY(0);
    }
    100% {
      opacity: 0;
      transform: translateY(-100%);
    }
  }
    
  </style>
  
  <?php
      }
  }

///////////////////////////////////

  
if(isset($_POST['INGRESAR'])){
  // Haz algo aquí con los datos recibidos del formulario
  // Por ejemplo, puedes guardarlos en la base de datos

  // Luego, redirige al usuario a otra página
  header("Location: ../index.php");
  exit();
}
?>