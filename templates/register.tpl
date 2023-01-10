{extends file='layout.tpl'}
{block name=title}Register{/block}
{block name=body}
<h1>Register</h1>
<div id='main'>
<body>
   <h3 style="color:red">{$message}</h3>
    <form action="/TP4/register" method="post">
       <p>Nom</p>
       <input type="text" id="name" name="name" required
              minlength="0" maxlength="100" size="15"
              value="{$nom}">
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