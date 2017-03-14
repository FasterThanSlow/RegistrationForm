<?php
/* Smarty version 3.1.28, created on 2017-03-13 09:30:17
  from "C:\xampp\htdocs\RegistrationForm\templates\profile.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_58c6589934ebb2_50568402',
  'file_dependency' => 
  array (
    '32835441e16f3ba1f40a4d729162112e46f7231a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RegistrationForm\\templates\\profile.tpl',
      1 => 1489393813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c6589934ebb2_50568402 ($_smarty_tpl) {
?>

<div class="row" style="margin-top:50px;">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
" class="img-circle img-responsive"> </div>


                    <div class=" col-md-9 col-lg-9 "> 
                        <table class="table table-user-information">
                            <tbody>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['name_title']->value;?>
:</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
                                </tr>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['login_title']->value;?>
:</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</td>
                                </tr>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['email_title']->value;?>
</td>
                                    <td><a href="mailto:info@support.com"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</a></td>
                                </tr>                     
                            </tbody>
                        </table>

                        <a href="functions.php?logout=1" class="btn btn-primary center-block"><?php echo $_smarty_tpl->tpl_vars['logout_title']->value;?>
</a>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <a href="functions.php?lang=ru" class="btn btn-primary <?php echo $_smarty_tpl->tpl_vars['ru_active']->value;?>
">рус</a>
                <a href="functions.php?lang=en" class="btn btn-primary <?php echo $_smarty_tpl->tpl_vars['en_active']->value;?>
">en</a>
            </div>
        </div>
    </div>
</div>
<?php }
}
