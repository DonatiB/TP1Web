{include file="templates/headerBrand.tpl"}

 {foreach from=$carsBrand item=$cars}
        <h1>Marca:{$cars->Brand}</h1>
{/foreach}

<ul>
    {foreach from=$carsBrand item=$cars}
        <li>
            {if $cars->Sold}
                <a href="description/{$cars->ID_car}">{$cars->Car}</a> | {$cars->Year} | {$cars->Description|truncate:50}
                <a href="deleteCar/{$cars->Brand}/{$cars->ID_car}">Delete</a>
                <a href="onSaleCar/{$cars->Brand}/{$cars->ID_car}">Sold</a>
            {else}
                <strike>
                <a href="description/{$cars->ID_car}">{$cars->Car}</a> | {$cars->Year} | {$cars->Description|truncate:50}
                <a href="deleteCar/{$cars->Brand}/{$cars->ID_car}">Delete</a>
                <a href="soldCar/{$cars->Brand}/{$cars->ID_car}">Restore</a>
                </strike>
            {/if}              
        </li>
    {/foreach}
</ul>

<form action="createCar" method="post">
    <input type="text" placeholder="Car" name="Car">
    <input type="text" placeholder="Brand" name="Brand">
    <input type="number" placeholder="Year" name="Year">
    <textarea name="Description" placeholder="Description"></textarea>
    <input type="checkbox" name="sold">
    <input type="number" placeholder="Euro" name="Euro">
    <input type="submit" value="Registrar">  
</form>

{include file="templates/footer.tpl"}