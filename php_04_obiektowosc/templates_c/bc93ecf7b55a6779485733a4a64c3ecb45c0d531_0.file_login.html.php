<?php
/* Smarty version 5.4.1, created on 2024-11-07 17:44:31
  from 'file:C:\xampp\htdocs\php_04_test2/app/security/login.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672cee6f0379d6_85952036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc93ecf7b55a6779485733a4a64c3ecb45c0d531' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_test2/app/security/login.html',
      1 => 1730996620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_672cee6f0379d6_85952036 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_04_test2\\app\\security';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_803445127672cee6f0220a7_22381197', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../../templates/main.html", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_803445127672cee6f0220a7_22381197 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_04_test2\\app\\security';
?>


<form action="<?php echo $_smarty_tpl->getValue('app_root');?>
/app/security/login.php" method="post" class="login-content pure-form pure-form-stacked">
    <fieldset class="login-fieldset">
        <label for="id_login">Login: </label>
        <input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->getValue('form')['login'];?>
">
        
        <label for="id_pass">Hasło: </label>
        <input id="id_pass" type="password" name="pass">
    </fieldset>
    <input type="submit" value="Zaloguj" class="pure-button pure-button-primary">
</form>

<?php if ((null !== ($_smarty_tpl->getValue('messages') ?? null))) {?>
    <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?> 
        <div class="login-messages">
            <h4>Wystąpiły błędy:</h4>
            <ol class="err">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
                <li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ol>
        </div>
    <?php }
}
}
}
/* {/block 'content'} */
}
