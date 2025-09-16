<?php


//Aca mostramos todas acciones que puede hacer un controlador 
class UsuarioController{

    public function MostrarTodos(){

        require_once 'models/UsuarioModels.php';

        $usuario = new Usuario();

        $todos_los_usuarios = $usuario->conseguirTodos();

        require_once 'views/usuarios/mostrar-todos.php';
    }


    

}