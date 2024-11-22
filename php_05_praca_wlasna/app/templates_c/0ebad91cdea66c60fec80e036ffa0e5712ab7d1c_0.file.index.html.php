<?php
/* Smarty version 4.5.4, created on 2024-11-08 16:09:20
  from 'C:\xampp\htdocs\php_03_praca_wlasna\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_672e29a0dc3781_32147993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ebad91cdea66c60fec80e036ffa0e5712ab7d1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_03_praca_wlasna\\templates\\index.tpl',
      1 => 1731078558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672e29a0dc3781_32147993 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Kalkulator kredytowy">
	<meta name="author"      content="Antoni Załupka z Sergey Pozhilov (GetTemplate.com)">

	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Kalkulator kredytowy" ?? null : $tmp);?>
</title>

	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/images/gt_favicon.png">

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/main.css">

</head>

<body>
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
	<div class="container">
		<div class="navbar-header">
			<!-- Button for smallest screens -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/images/logo.png" alt="Policz swoj kredyt!"></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav pull-right">
				<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value == "loan") {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
">Kalulator</a></li>
				<?php if ($_smarty_tpl->tpl_vars['logged_in']->value) {?>
				<li><a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/auth/logout.php">Wyloguj</a></li>

				<?php } else { ?>
				<li><a <?php if ($_smarty_tpl->tpl_vars['page']->value == "login") {?>style="color:white"<?php }?> class="btn" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/auth/login.php">Logowanie</a></li>
				<?php }?>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>
<!-- /.navbar -->

<header id="head" class="secondary"></header>

<!-- container -->
<div class="container">
	<div class="row">
		<!-- Sidebar -->
		<aside class="col-sm-3 sidebar sidebar-right">

			<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
			<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
			<h4 style="color:red;">Wystąpiły błędy: </h4>
			<ol>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ol>
			<?php }?>
			<?php }?>

			<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
			<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?>
			<h4 style="color:orange">Informacje: </h4>
			<ol class="inf">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ol>
			<?php }?>
			<?php }?>

		</aside>
		<!-- /Sidebar -->

		<!-- Article main content -->
		<article class="col-sm-9 maincontent">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2120160740672e29a0dc27b4_30440259', "content");
?>

		</article>
		<!-- /Article -->



	</div>
</div>	<!-- /container -->



<section class="container-full top-space">
	<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1274.3222463640343!2d19.13357711878862!3d50.29856371118149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716da83f9e846e1%3A0x3ff406cf0f2cb7dd!2sWydzia%C5%82%20Nauk%20%C5%9Acis%C5%82ych%20i%20Technicznych%20Uniwersytet%20%C5%9Al%C4%85ski!5e0!3m2!1spl!2spl!4v1711399838368!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<footer id="footer">

	<div class="footer1">
		<div class="container">
			<div class="row">

				<div class="col-md-3 widget">
					<h3 class="widget-title">Skromny Github autora</h3>
					<div class="widget-body">
						<p class="follow-me-icons clearfix">
							<a target="_blank" href="https://github.com/azizko1337"><i class="fa fa-github fa-2"></i></a>
						</p>
					</div>
				</div>

				<div class="col-md-3 widget">

				</div>

				<div class="col-md-6 widget">
					<h3 class="widget-title">Czemu ten kalkulator kredytowy?</h3>
					<div class="widget-body">
						<p>Nasz kalkulator kredytowy jest tak łatwy w obsłudze, że nawet dziecko poradziłoby sobie z nim! Wprowadź kwotę kredytu oraz oprocentowanie, a nasz kalkulator natychmiastowo obliczy wysokość Twojej miesięcznej raty. Żadnych skomplikowanych wzorów, żadnych niejasności - tylko klarowne i szybkie wyniki!</p>
						<p>Nasz kalkulator kredytowy umożliwia Ci lepsze planowanie finansowe. Dzięki szybkiemu dostępowi do informacji o wysokości raty możesz świadomie zarządzać swoimi finansami i unikać niepożądanych niespodzianek w budżecie. To narzędzie, które pomoże Ci być zawsze krokiem do przodu!</p>
					</div>
				</div>

			</div> <!-- /row of widgets -->
		</div>
	</div>

	<div class="footer2">
		<div class="container">
		</div>
	</div>
</footer>





<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/headroom.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/jQuery.headroom.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/template.js"><?php echo '</script'; ?>
>



</body>
</html><?php }
/* {block "content"} */
class Block_2120160740672e29a0dc27b4_30440259 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2120160740672e29a0dc27b4_30440259',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
