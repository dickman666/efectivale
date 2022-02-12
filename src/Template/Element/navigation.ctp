<?php
    use Cake\Utility\Inflector;
    $actionUrl      = Inflector::camelize($this->request['controller']).'/'.$this->request['action'];
    $activeClass    = 'active open';
    $inactiveClass  = '';
    $usuario        = $this->UserAuth->getUser();
    $class          = '';

    if($this->UserAuth->isLogged()) {

        if($this->UserAuth->HP('Users', 'index', 'Usermgmt')) {

            $open = (  in_array( $actionUrl , [ 'Users/addUser','Users/index']  )   ) ? '<span class="selected"></span>' : $inactiveClass;

            echo "<li class='nav-item ".(( in_array( $actionUrl , [ 'Users/addUser','Users/index']  ) ) ? $activeClass : $inactiveClass)."'>";

                echo '<a href="#" class="nav-link nav-toggle" class="nav-link nav-toggle"> <i class="fa fa-user"></i> <span class="title">'.__('Users').'</span>  '.$open.'  <span class="fa arrow '.(( in_array( $actionUrl , [ 'Users/addUser','Users/index']  ) ) ? "open" : $inactiveClass).'"></span> </a>';

                echo "<ul class='sub-menu'>";
                    if($this->UserAuth->isSuper()/*$this->UserAuth->HP('Users', 'addUser', 'Usermgmt')*/) { // FU-2
                        //echo "<li class='nav-item ".(($actionUrl=='Users/addUser') ? $activeClass : $inactiveClass)."'>".$this->Html->link(__('Agregar Usuario'), ['controller'=>'Users', 'action'=>'addUser', 'plugin'=>'Usermgmt'])."</li>";
                    }
                    if($this->UserAuth->HP('Users', 'index', 'Usermgmt')) {
                        echo "<li class='nav-item ".(($actionUrl=='Users/index') ? $activeClass : $inactiveClass)."'>".$this->Html->link(__('Listado de Usuarios'), ['controller'=>'Users', 'action'=>'index', 'plugin'=>'Usermgmt'])."</li>";
                    }
                echo "</ul>";
            echo "</li>";

        }

        if($this->UserAuth->HP('Clientes', 'index', false)) {

            $open = (  in_array( $actionUrl , ['clientes/index']  )   ) ? '<span class="selected"></span>' : $inactiveClass;

            echo "<li class='nav-item ".(( in_array( $actionUrl , ['clientes/index']  ) ) ? $activeClass : $inactiveClass)."'>";

                echo '<a href="#" class="nav-link nav-toggle" class="nav-link nav-toggle"> <i class="fa  fa-users"></i> <span class="nav-label">'.__('Clientes').'</span>  '.$open.'  <span class="fa arrow '.(( in_array( $actionUrl , [ 'clientes/index']  ) ) ? "open" : $inactiveClass).'"></span> </a>';

                echo "<ul class='sub-menu'>";

                    if($this->UserAuth->HP('Clientes', 'index', false)) {
                        echo "<li class='nav-item ".(($actionUrl=='clientes/index') ? $activeClass : $inactiveClass)."'>".$this->Html->link(__('Listado de Clientes'), ['controller'=>'Clientes', 'action'=>'index', 'plugin'=>false])."</li>";
                    }


                echo "</ul>";
            echo "</li>";

        }
    }