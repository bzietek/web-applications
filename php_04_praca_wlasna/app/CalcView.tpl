{extends file="../templates/index.tpl"}

{block name=footer}Kalkulator Kredytowy{/block}

{block name=content}

<h2 class="content-head is-center"></h2>

<div class="pure-g">
	<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
		<form class="pure-form pure-form-stacked" action="{$conf->app_url}/app/calc.php" method="post">
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

		{* wyświeltenie listy błędów, jeśli istnieją *}
		{if $msgs->isError()}
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
			{foreach  $msgs->getErrors() as $err}
			{strip}
				<li>{$err}</li>
			{/strip}
			{/foreach}
		</ol>
		{/if}

		{* wyświeltenie listy informacji, jeśli istnieją *}
		{if $msgs->isInfo()}
		<h4>Informacje: </h4>
		<ol class="inf">
			{foreach  $msgs->getInfos() as $inf}
			{strip}
				<li>{$inf}</li>
			{/strip}
			{/foreach}
		</ol>
		{/if}


		{if isset($res->result)}
		<h4>Wynik</h4>
		<p class="res">
			{$res->result}
		</p>
		{/if}

	</div>
</div>

{/block}