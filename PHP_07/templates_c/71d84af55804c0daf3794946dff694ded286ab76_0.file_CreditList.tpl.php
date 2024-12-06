<?php
/* Smarty version 5.4.1, created on 2024-12-06 19:55:57
  from 'file:CreditList.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_675348bd9bf6f7_19587628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71d84af55804c0daf3794946dff694ded286ab76' => 
    array (
      0 => 'CreditList.tpl',
      1 => 1733065047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_675348bd9bf6f7_19587628 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\PHP_07\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_138726367675348bd95ddb8_24803392', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_138726367675348bd95ddb8_24803392 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\PHP_07\\app\\views';
?>


<table id="tab_credits" class="pure-table pure-table-bordered">
    <thead>
        <tr>
            <th class="amount-column">Kwota</th>
            <th class="years-column">Ile lat</th>
            <th class="interest-column">Oprocentowanie</th>
            <th class="installment-column">Rata miesięczna</th>
            <th class="date-column">Data obliczenia</th>
            <th class="action-column">Akcje</th>
        </tr>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('calcCredit'), 'c');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('c')->value) {
$foreach0DoElse = false;
?>
            <tr><td><?php echo $_smarty_tpl->getValue('c')["amount"];?>
</td><td><?php echo $_smarty_tpl->getValue('c')["period"];?>
</td><td><?php echo $_smarty_tpl->getValue('c')["interest_rate"];?>
</td><td><?php echo $_smarty_tpl->getValue('c')["monthly_installment"];?>
</td><td><?php echo $_smarty_tpl->getValue('c')["date"];?>
</td><td><a class="button-small pure-button button-warning" href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
listDelete&id=<?php echo $_smarty_tpl->getValue('c')['idcredit'];?>
">Usuń</a></td></tr>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<?php
}
}
/* {/block 'content'} */
}
