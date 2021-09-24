{include file="templates/header.tpl"}

<h1>Home: Marcas</h1>
<ul>
    {foreach from=$allCars item=$car}
        <li><a href="brand/{$car->Brand}">{$car->Brand}</a></li>       
    {/foreach}
</ul>

{include file="templates/footer.tpl"}