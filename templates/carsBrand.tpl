{include file="templates/header.tpl"}

{foreach from=$title item=$cars}
        <h1>Marca:{$cars->Brand}</h1>
{/foreach}

<ul>
    {foreach from=$carsBrand item=$cars}
        <li>
            <a href="">{$cars->Car}</a> | {$cars->Year} | {$cars->Description|truncate:50}
            <a href="deleteCar/{$cars->ID_car}">Delete</a>
            <a href="soldCar/{$cars->ID_car}">Sold</a>
        </li>
    {/foreach}
</ul>

{include file="templates/footer.tpl"}