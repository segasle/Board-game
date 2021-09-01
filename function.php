<?php
require 'bd.php';
/*function bd_query($query){
    global $bd;
    $result = mysqli_query($bd, $query);
    return $result;
}*/
//$query =bd_query('SELECT * FROM users');
/*while ($row = $result->fetch_assoc()){
    print_r($row);
};*/
//подключения файлов
function lnit(){
    $file = '';
    if (empty($_GET['page'])){
        $file = 'main';
    }else{
        $file = $_GET['page'];
    }
    include 'header.php';
    include 'menu.php';
    include $file .'.php';
    include 'cellar.php';
}
//основное меню
    function menu($items, $i = 0){
    if (6 == $i ){
        return '';
    }
        $i ++;
    $class ='';
    $out = '';
    foreach ($items as $item){
        if(!isset($item['way'])){
            $page = '';
        }else{
            $page = $item['way'];
        }
        // добавление класса в тег li на активную страницу
            if (!empty($_GET['page']) and $page == $_GET['page']){
                $class = 'active';
            }else{
                $class = '';
            }
        
        //
       
            $out .= '<li class="'.$class.'"><a href="?page='.$page.'">'.$item['lnscription'] .'</a>';
            if (!empty($item['lever'])) {
                $out .= menu($item['lever'], $i);

            }
            $out .= '</li>';


    }
    //вложеность класса в тег ul
        if ($i > 1) {
            $ul_class = 'two-lever';
            // третий ul вложеность
            if($i > 2){
                $ul_class = 'three-level';
            }
        }else{
            $ul_class = 'pull-left';
        }

    $out = '<ul class="'. $ul_class .'">' . $out . '</ul>';
    return $out;
}
    function menu2($items){
    $class ='';
    $out = '';
    foreach ($items as $item){
        if (!empty($_GET['page']) and $item['way'] == $_GET['page']){
            $class = 'active';
        }else{
            $class = '';
        }
            $out .= '<li class="'. $class .'"><a href="?page='.$item['way'].'">'.$item['lnscription'].'</a>';
            if (!empty($item['lever'])) {
                $out .= menu($item['lever']);

            }
            $out .= '</li>';


    }
    $out = '<ul>' . $out . '</ul>';
    return $out;
}
function user_authorization($authorizaon = false){
    if (!empty($_POST)){
        $out = '';
        foreach ($_POST as $key => $value){
            print_r($_POST);
            if (!empty($_POST[$key])){

            }
        }
    }
    if ($authorizaon == true){
        header('index: ?');
    }else{
        echo $out;
    }

}

function registration() {
    	$data = $_POST;
        if (isset($data['button'])){
            if(trim($data['login']) == ''){
                $errors [] = 'Введите логин';
            }
            if(trim($data['email']) == ''){
                $errors [] = 'Введите почту';
            }
            if($data['password'] == ''){
                $errors [] = 'Введите пароль';
            } 
            if($data['password1'] != $data['password']){
                $errors [] = 'не правильный пароль';
            }
            if(empty($errors)){
                $user = R::dispense('users');
                $user->name = $data['login'];
                $user->email = $data['email'];
                $user->password = $data['password'];
                 R::store($user);
            }
            else{
               echo '<div>'. array_shift($errors).'</div>'; 
            }
        }
   
}
