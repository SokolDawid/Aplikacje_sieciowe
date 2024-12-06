<?php
/* Smarty version 5.4.1, created on 2024-11-21 17:51:45
  from 'file:CalcView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_673f6521283c24_29615094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5cb604b604e035aa953f2b15a659ee88965f9a3' => 
    array (
      0 => 'CalcView.tpl',
      1 => 1731937998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_673f6521283c24_29615094 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\PHP_05b\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_457483505673f6521255c47_03947931', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_457483505673f6521255c47_03947931 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\PHP_05b\\app\\views';
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

<?php if ($_smarty_tpl->getValue('msgs')->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getErrors(), 'err');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('err')->value) {
$foreach0DoElse = false;
?>
	<li><?php echo $_smarty_tpl->getValue('err');?>
</li>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ($_smarty_tpl->getValue('msgs')->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getInfos(), 'inf');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('inf')->value) {
$foreach1DoElse = false;
?>
	<li><?php echo $_smarty_tpl->getValue('inf');?>
</li>
	<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

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