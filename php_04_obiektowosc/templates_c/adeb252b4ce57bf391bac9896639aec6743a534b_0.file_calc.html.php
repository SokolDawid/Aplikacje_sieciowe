<?php
/* Smarty version 5.4.1, created on 2024-11-05 15:33:32
  from 'file:C:\xampp\htdocs\php_04_test/app/calc.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_672a2cbc50c9e2_72720001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adeb252b4ce57bf391bac9896639aec6743a534b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_test/app/calc.html',
      1 => 1730747953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_672a2cbc50c9e2_72720001 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_04_test\\app';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_878332924672a2cbc4ec148_47119575', 'footer');
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1970425845672a2cbc4efa53_10534172', 'content');
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.html", $_smarty_current_dir);
}
/* {block 'footer'} */
class Block_878332924672a2cbc4ec148_47119575 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_04_test\\app';
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1970425845672a2cbc4efa53_10534172 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_04_test\\app';
?>


<a href="<?php echo $_smarty_tpl->getValue('app_root');?>
/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
<a href="<?php echo $_smarty_tpl->getValue('app_root');?>
/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>

<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/calc.php" method="post">
	<fieldset>
        <label for="id_amount">Kwota kredytu</label>
        <input id="id_amount" type="text" name="amount" value="<?php echo $_smarty_tpl->getValue('form')['amount'];?>
">
        
        <label for="id_period">Na ile lat</label>
        <input id="id_period" type="text" name="period" value="<?php echo $_smarty_tpl->getValue('form')['period'];?>
">
        
        <label for="id_interest_rate">Oprocentowanie</label>
        <input id="id_interest_rate" type="text" name="interest_rate" value="<?php echo $_smarty_tpl->getValue('form')['interest_rate'];?>
">
        
        <input type="submit" value="Oblicz" class="pure-button pure-button-primary">
        </fieldset>
</form>

<div class="messages">

<?php if ((null !== ($_smarty_tpl->getValue('messages') ?? null))) {?>
	<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
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
	<?php }
}?>

<?php if ((null !== ($_smarty_tpl->getValue('infos') ?? null))) {?>
	<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('infos')) > 0) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('infos'), 'msg');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach1DoElse = false;
?>
		<li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
		<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((null !== ($_smarty_tpl->getValue('result') ?? null))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->getValue('result');?>

	</p>
<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
