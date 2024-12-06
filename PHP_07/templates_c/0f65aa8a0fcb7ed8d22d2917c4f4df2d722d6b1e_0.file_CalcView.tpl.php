<?php
/* Smarty version 5.4.1, created on 2024-11-20 18:23:52
  from 'file:CalcView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_673e1b28ba13a7_96437223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f65aa8a0fcb7ed8d22d2917c4f4df2d722d6b1e' => 
    array (
      0 => 'CalcView.tpl',
      1 => 1732023458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_673e1b28ba13a7_96437223 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_07_test2\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2284840673e1b28b83f50_15077004', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_2284840673e1b28b83f50_15077004 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_07_test2\\app\\views';
?>


<form id="content" action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
calcCompute" method="post">
	<fieldset class="form-fieldset">
        <label for="id_amount">Kwota kredytu</label>
        <input id="id_amount" type="text" name="amount" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')->amount ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
        
        <label for="id_period">Na ile lat</label>
        <input id="id_period" type="text" name="period" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')->period ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
        
        <label for="id_interest_rate">Oprocentowanie</label>
        <input id="id_interest_rate" type="text" name="interest_rate" value="<?php echo (($tmp = $_smarty_tpl->getValue('form')->interest_rate ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
">
        
        <input type="submit" value="Oblicz" class="button">
        </fieldset>
</form>


<div class="messages">

<?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php if ((null !== ($_smarty_tpl->getValue('res')->result ?? null))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('res')->result,2);?>

	</p>
<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
