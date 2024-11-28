<?php
/* Smarty version 4.5.4, created on 2024-11-28 13:27:16
  from 'C:\xampp\htdocs\php_05_praca_wlasna\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_674861a440de71_70951832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5bf896827b75a7201990c11ceca997b349003a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_05_praca_wlasna\\app\\views\\CalcView.tpl',
      1 => 1732796687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_674861a440de71_70951832 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_647614279674861a4404cd1_92881321', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1657747444674861a4405552_78698032', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "index.tpl");
}
/* {block 'footer'} */
class Block_647614279674861a4404cd1_92881321 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_647614279674861a4404cd1_92881321',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalkulator Kredytowy<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1657747444674861a4405552_78698032 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1657747444674861a4405552_78698032',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center"></h2>
	<div class="pure-menu pure-menu-horizontal bottom-margin">
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
		<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
	</div>
<div class="pure-g">
	<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
			<fieldset>
				<div class="form-group">
					<input type="text" class="form-control input-lg" id="exampleInputEmail2" placeholder="" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
"></div>
				<div class="form-group">
					<input type="text" class="form-control input-lg" id="exampleInputPassword2" placeholder="1-15" name="period" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->period;?>
"></div>
				<div class="form-group">
					<input type="text" class="form-control input-lg" id="exampleInputPassword1" placeholder="5-20" name="rate" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->rate;?>
"></div>
				<button type="submit" class="btn btn-lg btn-default">Oblicz</button>
			</fieldset>
		</form>
	</div>

	<div class="l-box-lrg pure-u-1 pure-u-med-3-5">
	<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
		<h4>Wynik</h4>
		<p class="res">
			<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

		</p>
		<?php }?>

	</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
