<?php
/* Smarty version 5.4.1, created on 2024-12-01 17:05:30
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.4.1',
  'unifunc' => 'content_674c894aa1a632_00239096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '159e7b82ff12fc3369b86faa44d39425cefa93b2' => 
    array (
      0 => 'main.tpl',
      1 => 1733069128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_674c894aa1a632_00239096 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_07_test2\\app\\views\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="author"      content="Dawid Sokol">
	
	<title>Kalkulator kredytowy</title>

	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/images/icon_calc.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/css/style.css">
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
calcShow"><img src="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/assets/images/logo2.png" alt="ikona" width="50" height="50"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
calcShow">Kalkulator</a></li>
                                        <li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
listShow">Lista obliczen</a></li>
					<li><a href="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
innaShow">Informacje</a></li>
                                        <li><a class="btn" href="<?php echo $_smarty_tpl->getValue('conf')->action_root;
echo (($tmp = $_smarty_tpl->getValue('login_') ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"><?php echo $_smarty_tpl->getValue('login2_');?>
</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<div id="head">
		<div class="container">
			<div class="row">
				<h1><?php echo $_smarty_tpl->getValue('topic');?>
</h1>
			</div>
		</div>
	</div>

<div class="content">
<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_803586521674c894aa10c62_58468196', 'content');
?>

</div><!-- content -->

<footer id="footer" class="top-space">
		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Kontakt</h3>
						<div class="widget-body">
							<p>+234 23 9873237<br>
								<a href="mailto:#">dawis123sokol@wp.pl</a><br>
								<br>
								Będzińska 39, 41-200 Sosnowiec
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href="https://github.com/SokolDawid/Aplikacje_sieciowe"><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">Informacje</h3>
						<div class="widget-body">
							<p>Widok oparty na szablonie Progressus: https://www.gettemplate.com</p>
							<p>Autor przykładu: Dawid Sokół</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>	
</body>
</html><?php }
/* {block 'content'} */
class Block_803586521674c894aa10c62_58468196 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\xampp\\htdocs\\php_07_test2\\app\\views\\templates';
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
