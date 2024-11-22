<?php
/* Smarty version 4.5.4, created on 2024-11-22 12:29:52
  from 'C:\xampp\htdocs\php_04_praca_wlasna\app\calc\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67406b30d8d970_98922739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5291584b618da4aee144f96303d410684e73be67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_praca_wlasna\\app\\calc\\CalcView.tpl',
      1 => 1732274992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67406b30d8d970_98922739 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121007208767406b30d78724_08848531', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72604526267406b30d790e4_09569688', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/index.tpl"));
}
/* {block 'footer'} */
class Block_121007208767406b30d78724_08848531 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_121007208767406b30d78724_08848531',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalkulator Kredytowy<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_72604526267406b30d790e4_09569688 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_72604526267406b30d790e4_09569688',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center"></h2>

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

				<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
		<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
		<h4>Informacje: </h4>
		<ol class="inf">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
		<?php }?>


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
