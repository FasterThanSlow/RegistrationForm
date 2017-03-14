<?php
/* Smarty version 3.1.28, created on 2017-03-14 02:08:51
  from "C:\xampp\htdocs\RegistrationForm\templates\main.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_58c742a36384e2_32022378',
  'file_dependency' => 
  array (
    '487781f1236471c927df8e1aeb8efbf6d468c03a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RegistrationForm\\templates\\main.tpl',
      1 => 1489453681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c742a36384e2_32022378 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <?php echo '<script'; ?>
 src="js/jQuery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/bootstrap.js" ><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/script.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <div class="container">    
            <?php echo $_smarty_tpl->tpl_vars['middle']->value;?>

        </div>
    </body>
</html>

<?php }
}
