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
   // include 'menu.php';
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

    //вложеность класса в тег ul
    // if ($i >= 0) {      
    //       $li_class = 'item';
    // }
    if ($i > 1) {
        $ul_class = 'sub-list__menu';
        // третий ul вложеность
        if($i > 2){
            $ul_class = 'sub-sub-list__menu';
        }
    }else{
        $li_class = 'io';
        $ul_class = 'menu-list';
    }
        if(!isset($item['class'])){
            $liclass = '';
        }else{
            $liclass = $item['class'];
        }
        // добавление класса в тег li на ак
        if(!isset($item['way'])){
            $page = '';
        }else{
            $page = $item['way'];
        }
            if (!empty($_GET['page']) and $page == $_GET['page']){
                $class = 'active';
            }else{
                $class = '';
            }
        
        //
       
            $out .= '<li class="menu-item '.$liclass.'"><a href="?page='.$page.'">'.$item['lnscription'] .'</a>';
            if (!empty($item['lever'])) {
                $out .= menu($item['lever'], $i);

            }
            $out .= '</li>';


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
