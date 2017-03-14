<?php
/* Smarty version 3.1.28, created on 2017-03-14 02:08:56
  from "C:\xampp\htdocs\RegistrationForm\templates\sign_in.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_58c742a8795919_76677909',
  'file_dependency' => 
  array (
    '0cbd0d419ce358088f1f30601105ee5c925e0a34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RegistrationForm\\templates\\sign_in.tpl',
      1 => 1489453688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c742a8795919_76677909 ($_smarty_tpl) {
?>
<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
    <div class="panel panel-info" >
        <div class="panel-heading">
            <div class="panel-title"><?php echo $_smarty_tpl->tpl_vars['sign_in_title']->value;?>
</div>
        </div>     

        <div style="padding-top:30px" class="panel-body" >
            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
            <form id="loginform" method="post" action="functions.php" class="form-horizontal" role="form">
                <div id="signupalert" style="display:<?php if (isset($_smarty_tpl->tpl_vars['error_display']->value)) {
echo $_smarty_tpl->tpl_vars['error_display']->value;
} else { ?>none<?php }?>" class="alert alert-danger">
                    <p><?php echo $_smarty_tpl->tpl_vars['error_title']->value;?>
</p>
                    <span></span>
                </div>

                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="login-username" required type="text" class="form-control" name="login" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['username_title']->value;?>
">                                        
                </div>

                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="login-password" required type="password" class="form-control" name="password" placeholder="<?php echo $_smarty_tpl->tpl_vars['password_title']->value;?>
">
                </div>


                <div style="margin-top:10px" class="form-group">
                    <!-- Button -->

                    <div class="col-sm-12 controls">
                        <button id="btn-login" href="#" name="authorization" value="authorization" class="btn btn-success"><?php echo $_smarty_tpl->tpl_vars['sign_in_title']->value;?>
</button>                                      
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-12 control">
                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                            <?php echo $_smarty_tpl->tpl_vars['sign_up_description']->value;?>

                            <a href="index.php?view=reg">
                                <?php echo $_smarty_tpl->tpl_vars['sign_up_title']->value;?>

                            </a>
                        </div>
                    </div>
                </div>    
            </form>     
        </div>

        <div class="panel-footer">
            <a href="functions.php?lang=ru" class="btn btn-primary <?php echo $_smarty_tpl->tpl_vars['ru_active']->value;?>
">рус</a>
            <a href="functions.php?lang=en" class="btn btn-primary <?php echo $_smarty_tpl->tpl_vars['en_active']->value;?>
">en</a>
        </div>
    </div>  
</div>

<?php }
}
