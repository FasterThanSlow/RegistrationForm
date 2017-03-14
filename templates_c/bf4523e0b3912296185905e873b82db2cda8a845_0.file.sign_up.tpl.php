<?php
/* Smarty version 3.1.28, created on 2017-03-14 02:14:41
  from "C:\xampp\htdocs\RegistrationForm\templates\sign_up.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_58c744017812a3_48503190',
  'file_dependency' => 
  array (
    'bf4523e0b3912296185905e873b82db2cda8a845' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RegistrationForm\\templates\\sign_up.tpl',
      1 => 1489454077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c744017812a3_48503190 ($_smarty_tpl) {
?>
<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title"><?php echo $_smarty_tpl->tpl_vars['sign_up_title']->value;?>
</div>
            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="index.php?view=auth" ><?php echo $_smarty_tpl->tpl_vars['sign_in_title']->value;?>
</a></div>
        </div>  
        <div class="panel-body" >
            <form action="functions.php" onsubmit="validate(this);" enctype="multipart/form-data" id="signupform" method="post" class="form-horizontal" role="form">
                <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
                <div id="signupalert" style="display:<?php if (isset($_smarty_tpl->tpl_vars['error_display']->value)) {
echo $_smarty_tpl->tpl_vars['error_display']->value;
} else { ?>none<?php }?>" class="alert alert-danger">
                    <p><?php echo $_smarty_tpl->tpl_vars['error_title']->value;?>
</p>
                    <span></span>
                </div>

                <div class="form-group">
                    <label for="login" class="col-md-3 control-label"><?php echo $_smarty_tpl->tpl_vars['login_title']->value;?>
 <span style="color:red">*</span></label>
                    <div class="col-md-9" data-toggle="tooltip" data-placement="right" title="Вводимый логин должен быть не менее 3 символов и не более 25">
                        <input type="text" maxlength="25" minlength="3" required class="form-control" name="login" placeholder="<?php echo $_smarty_tpl->tpl_vars['login_title']->value;?>
">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-md-3 control-label"><?php echo $_smarty_tpl->tpl_vars['password_title']->value;?>
 <span style="color:red">*</span></label>
                    <div class="col-md-9"  data-toggle="tooltip" data-placement="right" title="Вводимый пароль должен быть не менее 8 символов">
                        <input type="password" minlength="8" required class="form-control" name="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['password_title']->value;?>
">
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="col-md-3 control-label"><?php echo $_smarty_tpl->tpl_vars['confirm_title']->value;?>
 <span style="color:red">*</span></label>
                    <div class="col-md-9"   data-toggle="tooltip" data-placement="right" title="Повторный ввод пароля">
                        <input type="password" required class="form-control" name="confirm_pass" placeholder="<?php echo $_smarty_tpl->tpl_vars['confirm_title']->value;?>
">
                    </div>
                </div>

                <div class="form-group">
                    <label for="name" class="col-md-3 control-label"><?php echo $_smarty_tpl->tpl_vars['name_title']->value;?>
 <span style="color:red">*</span></label>
                    <div class="col-md-9">
                        <input type="text" required id="name" class="form-control" name="name" placeholder="<?php echo $_smarty_tpl->tpl_vars['name_title']->value;?>
">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="col-md-3 control-label"><?php echo $_smarty_tpl->tpl_vars['email_title']->value;?>
 <span style="color:red">*</span></label>
                    <div class="col-md-9">
                        <input type="email" required class="form-control" name="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['email_title']->value;?>
">
                    </div>
                </div>


                <div class="form-group">
                    <label for="file" class="col-md-3 control-label"><?php echo $_smarty_tpl->tpl_vars['avatar_title']->value;?>
</label>
                    <div class="col-md-9"  data-toggle="tooltip" data-placement="right" title="Поддерживаемые форматы: gif,png,jpg. Размер файла не должен превышать 300кб." >
                        <span class="btn btn-primary btn-file">
                            Загрузить<input type="file"  id="file" class="form-control" name="avatar" accept="image/*,image/png,image/jpeg,image/gif" placeholder="<?php echo $_smarty_tpl->tpl_vars['confirm_title']->value;?>
">
                        </span>
                    </div>
                </div>    

                <div class="form-group">
                    <!-- Button -->                                        
                    <div class="col-md-offset-3 col-md-9">
                        <button name="regestration" value="regestration" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp <?php echo $_smarty_tpl->tpl_vars['sign_up_title']->value;?>
</button>
                    </div>
                </div>

            </form>
        </div>
        <div class="panel-footer">
            <a href="functions.php?lang=ru" class="btn btn-primary <?php echo $_smarty_tpl->tpl_vars['ru_active']->value;?>
">рус</a>
            <a href="functions.php?lang=en" class="btn btn-primary <?php echo $_smarty_tpl->tpl_vars['en_active']->value;?>
">en</a>
            <div style="float:right;margin-top: 6px;"><span style="color:red">*</span> Обязательные поля</div>
        </div>
    </div>
</div><?php }
}
