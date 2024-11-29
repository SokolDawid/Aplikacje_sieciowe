<?php
/* Smarty version 5.4.1, created on 2024-11-29 21:24:15
  from 'file:LoginView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_674a22eff31de2_49939582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa92427adf8369fdbb9c65e4986b7ea96225146b' => 
    array (
      0 => 'LoginView.tpl',
      1 => 1732023796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_674a22eff31de2_49939582 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\PHP_06b\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_390049076674a22efefb697_72035908', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_390049076674a22efefb697_72035908 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\PHP_06b\\app\\views';
?>


<form action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
login" method="post" class="login-content pure-form pure-form-stacked">
    <fieldset class="login-fieldset">
        <label for="id_login">Login:</label>
        <input id="id_login" type="text" name="login" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')->login ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
        
        <label for="id_pass">Hasło:</label>
        <input id="id_pass" type="password" name="pass">
    </fieldset>
    <input type="submit" value="Zaloguj" class="pure-button pure-button-primary">
</form>

<div class="login-messages">
<?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
</<div>
<?php
}
}
/* {/block 'content'} */
}
