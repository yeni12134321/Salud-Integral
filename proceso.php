<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (isset($_POST['procesa']) && !empty($_POST['usuario']) && !empty($_POST['contrasena']))
    {
        $susuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];
        $user = "admin";
        $password = "1234";

        if ($user == $susuario && $contrasena == $password)
        {
            echo "<script> alert('Ingreso correcto') </script>";
        }
        else
        {
            echo "<script> alert('Ingreso incorrecto') </script>";
        }
    }
    else
    {
        echo "<script> alert(' ') </script>";
    }
}
?>