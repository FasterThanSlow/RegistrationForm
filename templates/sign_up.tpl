<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">{$sign_up_title}</div>
            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="index.php?view=auth" >{$sign_in_title}</a></div>
        </div>  
        <div class="panel-body" >
            <form action="functions.php" onsubmit="validate(this);" enctype="multipart/form-data" id="signupform" method="post" class="form-horizontal" role="form">
                <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
                <div id="signupalert" style="display:{if isset($error_display)}{$error_display}{else}none{/if}" class="alert alert-danger">
                    <p>{$error_title}</p>
                    <span></span>
                </div>

                <div class="form-group">
                    <label for="login" class="col-md-3 control-label">{$login_title} <span style="color:red">*</span></label>
                    <div class="col-md-9" data-toggle="tooltip" data-placement="right" title="Вводимый логин должен быть не менее 3 символов и не более 25">
                        <input type="text" maxlength="25" minlength="3" required class="form-control" name="login" placeholder="{$login_title}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-md-3 control-label">{$password_title} <span style="color:red">*</span></label>
                    <div class="col-md-9"  data-toggle="tooltip" data-placement="right" title="Вводимый пароль должен быть не менее 8 символов">
                        <input type="password" minlength="8" required class="form-control" name="password" placeholder="{$password_title}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-md-3 control-label">{$confirm_title} <span style="color:red">*</span></label>
                    <div class="col-md-9"   data-toggle="tooltip" data-placement="right" title="Повторный ввод пароля">
                        <input type="password" required class="form-control" name="confirm_pass" placeholder="{$confirm_title}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-md-3 control-label">{$name_title} <span style="color:red">*</span></label>
                    <div class="col-md-9">
                        <input type="text" required id="name" class="form-control" name="name" placeholder="{$name_title}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-md-3 control-label">{$email_title} <span style="color:red">*</span></label>
                    <div class="col-md-9">
                        <input type="email" required class="form-control" name="email" placeholder="{$email_title}">
                    </div>
                </div>


                <div class="form-group">
                    <label for="file" class="col-md-3 control-label">{$avatar_title}</label>
                    <div class="col-md-9"  data-toggle="tooltip" data-placement="right" title="Поддерживаемые форматы: gif,png,jpg. Размер файла не должен превышать 300кб." >
                        <span class="btn btn-primary btn-file">
                            Загрузить<input type="file"  id="file" class="form-control" name="avatar" accept="image/*,image/png,image/jpeg,image/gif" placeholder="{$confirm_title}">
                        </span>
                    </div>
                </div>    

                <div class="form-group">
                    <!-- Button -->                                        
                    <div class="col-md-offset-3 col-md-9">
                        <button name="regestration" value="regestration" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp {$sign_up_title}</button>
                    </div>
                </div>

            </form>
        </div>
        <div class="panel-footer">
            <a href="functions.php?lang=ru" class="btn btn-primary {$ru_active}">рус</a>
            <a href="functions.php?lang=en" class="btn btn-primary {$en_active}">en</a>
            <div style="float:right;margin-top: 6px;"><span style="color:red">*</span> Обязательные поля</div>
        </div>
    </div>
</div>