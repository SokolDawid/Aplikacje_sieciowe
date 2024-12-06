{extends file="main.tpl"}

{block name=content}

<form action="{$conf->action_root}login" method="post" class="login-content pure-form pure-form-stacked">
    <fieldset class="login-fieldset">
        <label for="id_login">Login:</label>
        <input id="id_login" type="text" name="login" value="{$form->login|default:''}">
        
        <label for="id_pass">Hasło:</label>
        <input id="id_pass" type="password" name="pass">
    </fieldset>
    <input type="submit" value="Zaloguj" class="pure-button pure-button-primary">
</form>

<div class="login-messages">
{include file='messages.tpl'}
</<div>
{/block}
