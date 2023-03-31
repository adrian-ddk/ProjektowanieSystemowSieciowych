<?php
/* Smarty version 3.1.33, created on 2023-01-27 23:03:39
  from 'C:\xampp\htdocs\MyProject\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_63d44a3b96e505_39474619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ed12e870d933a6007d5db400f1c454388ee0181' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MyProject\\app\\views\\templates\\main.tpl',
      1 => 1674718050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63d44a3b96e505_39474619 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Pizzeria Catto">
	<meta name="author"      content="Adrian Dudek">

	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->styles;?>
/alertify.css">
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->images;?>
/gt_favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->styles;?>
/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->styles;?>
/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->styles;?>
/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->styles;?>
/main.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->styles;?>
/additional.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->scripts;?>
/alertify.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->scripts;?>
/ajax-functions.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="home">
		<!-- Fixed navbar -->
		<div class="navbar navbar-inverse navbar-fixed-top headroom" >
			<div class="container">
				<div class="navbar-header">
					<!-- Button for smallest screens -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
					<a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
main">
						<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->images;?>
/gt_favicon.png">
						Pizzeria Catto
					</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav pull-right">
						<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
main">Strona główna</a></li>
						<?php if (!core\RoleUtils::inRole("logged")) {?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login">Zaloguj</a></li>
							<li><a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register">Rejestracja</a></li>
						<?php }?>
						<?php if (core\RoleUtils::inRole("logged")) {?>
							<li class="dropdown">
								<a class="dropdown-toggle btn" data-toggle="dropdown">Narzędzia <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
panel">Panel główny</a></li>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addOpinion">Dodaj opinie</a></li>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
profile">Mój profil</a></li>
									<?php if (core\RoleUtils::inRole("admin") || core\RoleUtils::inRole("moderator")) {?>
										<li class="divider"></li>
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
manageUsers">Moderuj użytkowników</a></li>
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
manageOpinions">Moderuj opinie</a></li>
										<li class="divider"></li>
									<?php }?>
									<?php if (core\RoleUtils::inRole("admin")) {?>
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
adminLogs">Logi administracyjne</a></li>
										<li class="divider"></li>
									<?php }?>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj</a></li>
								</ul>
							</li>
						<?php }?>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
		<!-- /.navbar -->
	</div>

	<!-- Head -->
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18867018363d44a3b96a5f3_56333244', 'head');
?>


	<!-- Intro -->
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193105488163d44a3b96ad16_92194009', 'intro');
?>


	<!-- Jumbotron -->
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92571593363d44a3b96b297_18785895', 'jumbotron');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47994813963d44a3b96b956_70834605', 'generated');
?>


	<footer id="footer" class="top-space always-bottom">
		<div class="footer1">
			<div class="container">
				<div class="row">

					<div class="col-md-3 widget">
						<h3 class="widget-title">Kontakt</h3>
						<div class="widget-body">
							ul. Będzińska 39, 41-205 Sosnowiec
							<br/>
							Telefon: 32 368 98 66
							<br/>
							<a href="https://www.google.com/maps/place/B%C4%99dzi%C5%84ska+39,+41-205+Sosnowiec/">Mapa dojazdu</a>
						</div>
					</div>

					<div class="col-md-3 widget">

					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
main">Strona Główna</a> |
								<?php if (!core\RoleUtils::inRole("logged")) {?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login">Zaloguj</a> |
									<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register">Zarejestruj</a>
								<?php }?>
								<?php if (core\RoleUtils::inRole("logged")) {?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj</a>
								<?php }?>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright © 2023, Adrian Dudek. Design: <a href="http://gettemplate.com/" rel="designer">GetTemplate</a>
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>

</body>
</html>
<?php }
/* {block 'head'} */
class Block_18867018363d44a3b96a5f3_56333244 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_18867018363d44a3b96a5f3_56333244',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'intro'} */
class Block_193105488163d44a3b96ad16_92194009 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'intro' => 
  array (
    0 => 'Block_193105488163d44a3b96ad16_92194009',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'intro'} */
/* {block 'jumbotron'} */
class Block_92571593363d44a3b96b297_18785895 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'jumbotron' => 
  array (
    0 => 'Block_92571593363d44a3b96b297_18785895',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'jumbotron'} */
/* {block 'generated'} */
class Block_47994813963d44a3b96b956_70834605 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'generated' => 
  array (
    0 => 'Block_47994813963d44a3b96b956_70834605',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'generated'} */
}
