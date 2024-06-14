<?php 
    session_start();

    class Conexion{
        public $host = 'localhost';
        public $user = 'root';
        public $password = '';
        public $namedb = 'gymwarrior';
        public $conexion;

        public function __construct()
        {
            $this->conexion = mysqli_connect(
                $this->host,
                $this->user,
                $this->password,
                $this->namedb,
            );
        }
    }

/* Inicio de sesion */

    class Inicio_sesion extends Conexion{
        public $id;
        public function InicioSesion($correo, $password){
            $passwordencriptada = hash('sha256', $password);
            $consultaSql = mysqli_query($this->conexion,
            "SELECT * FROM miembros WHERE correo = '$correo' OR usuario = '$correo' AND password = '$passwordencriptada'");

            $columna = mysqli_fetch_assoc($consultaSql);

            if (mysqli_num_rows($consultaSql) > 0) {
                if($passwordencriptada == $columna['password']){
                    $this->id= $columna['id'];
                    return 1;
                    /* Logueo exitoso */
                } else {
                    return 2;
                    /* Contraseña incorreca */
                }
            } else {
                return 3;
                /* Usuario no registrado */
            }
        }

        public function IdUsuario(){
            return $this->id;
        }
    
    }
    class Registro extends Conexion{
        public function registrarse($nombre_completo, $correo, $genero, $usuario, $password, $confirmpassword){
            $usuarioExiste = mysqli_query(
                $this->conexion, "SELECT * FROM miembros WHERE usuario = '$usuario' OR correo = '$correo'"
            );

            if (mysqli_num_rows($usuarioExiste) > 0) {
                $fila = mysqli_fetch_assoc($usuarioExiste);
                if ($fila['usuario'] == $usuario) {
                    return 4;
                } else {
                    return 5;
                }
            } else {
                if ($password == $confirmpassword) {
                    $passwordencriptada = hash('sha256', $password);
                    $consultaSqlRegistro = "INSERT INTO miembros VALUES ('','$nombre_completo',
                    '$correo', '$genero', '$usuario', '$passwordencriptada')";
                    mysqli_query($this->conexion, $consultaSqlRegistro);
                    return 0;
                } else {
                    return 6;
                }
            }
        }
    }

/* Clase select, Sirve para saber si el usuario está logueado o no, si esta logueado permance en el home,
si no, se devuelve al login */
    class Select extends Conexion{
        public function SelectuserByUser($id){
            $resultado = mysqli_query($this->conexion, "SELECT * FROM miembros WHERE id = '$id'");

            return mysqli_fetch_assoc($resultado);
        }

    }

















?>