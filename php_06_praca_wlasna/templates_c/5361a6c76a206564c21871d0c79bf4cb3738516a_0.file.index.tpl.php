<?php
/* Smarty version 4.5.4, created on 2024-11-22 14:01:04
  from 'C:\xampp\htdocs\php_04_praca_wlasna\app\views\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_674080909aefd2_28264588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5361a6c76a206564c21871d0c79bf4cb3738516a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_praca_wlasna\\app\\views\\templates\\index.tpl',
      1 => 1732280463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674080909aefd2_28264588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Kalkulator kredytowy">
	<meta name="author"      content="Bartosz Ziętek (GetTemplate.com)">

	<title>Kalkulator kredytowy</title>

	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/gt_favicon.png">

	<!-- Bootstrap itself -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<!-- Icons -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<!-- Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<!-- Custom styles -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/styles.css">

	<!--[if lt IE 9]> <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/html5shiv.js"><?php echo '</script'; ?>
> <![endif]-->
</head>

<body>

<!-- Header -->
<header class="header">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-push-2 text-center">
				<h1>Kalkulator kredytowy</h1>

					<br>


				<p class="small text-muted">Template autorstwa Mailchimp</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div id="illustration">

				</div>
			</div>
		</div>
	</div>
</header>
<!-- /Header -->


<!-- Content -->
<main class="content">

	<!-- Lead -->
	<section class="container space-before space-after">
		<div class="row">
			<div class="col-sm-10 col-sm-push-1">
				<h1 class="text-center">Oblicz swój kredyt</h1>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_357657384674080909ae294_34137544', 'content');
?>


				</p>
			</div>
		</div>
	</section>

</main>


<footer id="footer" class="jumbotron">
	<section class="container">
		<div class="row">
				<div class="col-md-5 col-md-push-1">
					<h2>Mój pierwszy template w życiu</h2>
					<p>Jak coś działa jak nie powinno, proszę o informację:)</p>
					<!-- AddThis Button BEGIN -->
					<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
					<a class="addthis_button_facebook"></a>
					<a class="addthis_button_twitter"></a>
					<a class="addthis_button_linkedin"></a>
					<a class="addthis_button_google_plusone_share"></a>
					<a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a>
					</div>

					<?php echo '<script'; ?>
 type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-536ba34f3dab1f93"><?php echo '</script'; ?>
>
					<!-- AddThis Button END -->

				</div>
				<div class="col-md-5 col-md-push-1">
					<h2>Link do GitHuba</h2>

					<a href="https://github.com/bzietek">GitHub</a> </p>
				</div>
		</div>
	</section>
</footer>

<p class="small text-muted text-center">Copyright &copy; Strona autorstwa: Bartosz Ziętek. Design by: <a href="http://gettemplate.com/" rel="designer" title="Free Bootstrap templates">GetTemplate</a></p>
<br>



<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/template.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'content'} */
class Block_357657384674080909ae294_34137544 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_357657384674080909ae294_34137544',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
}
