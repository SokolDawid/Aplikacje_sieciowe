<?php
/* Smarty version 5.4.1, created on 2024-11-14 18:40:05
  from 'file:C:\xampp\htdocs\php_04_obiektowosc/app/security/login.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_673635f59eb168_90186525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e037c27dfaa0a951b9d6f96c6bde7aa982ceb52b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_obiektowosc/app/security/login.html',
      1 => 1731605995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_673635f59eb168_90186525 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_04_obiektowosc\\app\\security';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_11207568673635f59d48f5_75886092', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../../templates/main.html", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_11207568673635f59d48f5_75886092 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_04_obiektowosc\\app\\security';
?>


<form action="<?php echo $_smarty_tpl->getValue('conf')->app_root;?>
/app/security/login.php" method="post" class="login-content pure-form pure-form-stacked">
    <fieldset class="login-fieldset">
        <label for="id_login">Login:</label>
        <input id="id_login" type="text" name="login" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')->login ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
        
        <label for="id_pass">Hasło:</label>
        <input id="id_pass" type="password" name="pass">
    </fieldset>
    <input type="submit" value="Zaloguj" class="pure-button pure-button-primary">
</form>

<?php if ((null !== ($_smarty_tpl->getValue('msgs') ?? null)) && $_smarty_tpl->getValue('msgs')->isError()) {?>
    <div class="login-messages">
        <h4>Wystąpiły błędy:</h4>
        <ol class="err">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getErrors(), 'msg');
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
/* {/block 'content'} */
}