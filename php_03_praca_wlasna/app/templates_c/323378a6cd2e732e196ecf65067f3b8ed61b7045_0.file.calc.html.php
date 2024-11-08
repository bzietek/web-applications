<?php
/* Smarty version 4.5.4, created on 2024-11-08 16:08:46
  from 'C:\xampp\htdocs\php_03_praca_wlasna\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_672e297e789a70_33737949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '323378a6cd2e732e196ecf65067f3b8ed61b7045' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_03_praca_wlasna\\app\\calc.html',
      1 => 1731078472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_672e297e789a70_33737949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2043213471672e297e77a8f4_40044562', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_322972014672e297e77b1c8_78905218', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/index.html");
}
/* {block 'footer'} */
class Block_2043213471672e297e77a8f4_40044562 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2043213471672e297e77a8f4_40044562',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalkulator Kredytowy<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_322972014672e297e77b1c8_78905218 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_322972014672e297e77b1c8_78905218',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
	<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
			<fieldset>

				<label for="amount">Podaj kwotę</label>
				<input id="amount" type="text" placeholder="" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['amount'];?>
">

				<label for="period">Na ile lat?</label>
				<input id="period" type="text" placeholder="1-15" name="period" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['period'];?>
">

				<label for="rate">Oprocentowanie</label>
				<input id="rate" type="text" placeholder="5-20" name="rate" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['rate'];?>
">

				<button type="submit" class="pure-button">Oblicz</button>
			</fieldset>
		</form>
	</div>

	<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

				<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
		<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
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
		<h4>Informacje: </h4>
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

		<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
		<h4>Wynik</h4>
		<p class="res">
			<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

		</p>
		<?php }?>

	</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
