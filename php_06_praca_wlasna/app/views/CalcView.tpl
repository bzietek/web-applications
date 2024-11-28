{extends file="index.tpl"}

{block name=footer}Kalkulator Kredytowy{/block}

{block name=content}

<h2 class="content-head is-center"></h2>
	<div class="pure-menu pure-menu-horizontal bottom-margin">
		<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
		<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
	</div>
<div class="pure-g">
	<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
		<form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute" method="post">
			<fieldset>
				<div class="form-group">
					<input type="text" class="form-control input-lg" id="exampleInputEmail2" placeholder="" name="amount" value="{$form->amount}"></div>
				<div class="form-group">
					<input type="text" class="form-control input-lg" id="exampleInputPassword2" placeholder="1-15" name="period" value="{$form->period}"></div>
				<div class="form-group">
					<input type="text" class="form-control input-lg" id="exampleInputPassword1" placeholder="5-20" name="rate" value="{$form->rate}"></div>
				<button type="submit" class="btn btn-lg btn-default">Oblicz</button>
			</fieldset>
		</form>
	</div>

	<div class="l-box-lrg pure-u-1 pure-u-med-3-5">
	{include file='messages.tpl'}
		{if isset($res->result)}
		<h4>Wynik</h4>
		<p class="res">
			{$res->result}
		</p>
		{/if}

	</div>
</div>

{/block}