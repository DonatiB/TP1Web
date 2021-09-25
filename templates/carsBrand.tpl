{include file="templates/headerBrand.tpl"}

 {foreach from=$title item=$cars}
        <h1>Marca:{$cars->Brand}</h1>
{/foreach}

<ul>
    {foreach from=$carsBrand item=$cars}
        <li>
            {if !$cars->Sold}
                <a href="description/{$cars->ID_car}">{$cars->Car}</a> | {$cars->Year} | {$cars->Description|truncate:50}
                <a href="deleteCar/{$cars->Brand}/{$cars->Car}/{$cars->ID_car}">Delete</a>
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


{include file="templates/footer.tpl"}