<?php
echo registration();
        if(empty($_POST)){
?>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h1 class="text-center">Регистранция</h1>
        <form action="" method="post" class="form-registration">
            <div class="form_filling">
                <p class="">Придумаете логин</p>
                <input type="text" class="form-control" name="login" value="<?php echo user_authorization()?>"> </div>
            <div class="form_filling">
                <p class="">Введите почту</p>
                <input type="text" name="email" class="form-control" value="<?php echo user_authorization($email)?>"> </div>
            <div class="form_filling">
                <p class="">Придумаете пароль</p>
                <input type="password" name="password" class="form-control" value="<?php echo user_authorization()?>"> </div>
            <div class="form_filling">
                <p class="">Подтведите пароль</p>
                <input type="password" name="password1" class="form-control" value="<?php echo user_authorization()?>"> </div>
            <div class="form_filling">
                <p class="">Какого вы пола?</p>
                <label for="checkbox_1" class="checkbox">
                    <input type="radio" id="checkbox_1" value="Мужской" name="floor">Мужского</label>
                <label for="checkbox_2" class="checkbox">
                    <input type="radio" id="checkbox_2" value="Женский" name="floor">Женского</label>
            </div>
            <div class="form_filling">
                <label for="checkbox_3">
                    <input type="checkbox" id="checkbox_3" name="floor">Вы должны согласится с <a href="">правами безопасности</a></label>
            </div>
            <input type="hidden" value="event">
            <div class="form_filling">
                <button type="submit" class="btn btn-sm pull-right" name="button">Отправить</button>
            </div>
        </form>

    </div>
</div>
<?php }else user_authorization(true); ?>