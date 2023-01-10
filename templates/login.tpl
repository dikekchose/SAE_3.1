{extends file='layout.tpl'}
{block name=title}Login{/block}

{block name=body}
<div id='main'>
<body>
    <h1>Login</h1>
    <h2 style="color: red;">{$message}</h2>
    <form action="/TP4/login" method="post">
        <p>Email</p>
        <input type="email" id="email" name="email" required
               minlength="0" maxlength="100" size="15"
               value="{$email}">
        <p>Mot de passe</p>
        <input type="password" id="mdp" name="mdp" required
               minlength="8" maxlength="100" size="15"
               value="{$mdp}">
        <br>
        <br>
        <input type="submit" name="submit">
    </form>
</body>
</div>
{/block}