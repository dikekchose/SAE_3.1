{extends file='layout.tpl'}
{block name=title}Accueil{/block}
{block name=body}
<div id='main'>
<h1 style="margin-bottom: 2vw; margin-left: 5vw">Home</h1>
<p style="margin-bottom: 5vw; margin-left: 5vw">{$message}</p>
    {if $connection eq true}
        <a class="menu" href="/TP4/profil">Voir mon profil</a>
        <a class="menu">|</a>
        <a class="menu" href="/TP4/logout">Se déconnecter</a>
    {else}
        <a class="menu" href="/TP4/login">Se connecter</a>
        <a class="menu">|</a>
        <a class="menu" href="/TP4/register">S'inscrire</a>
    {/if}
</div>
{/block}