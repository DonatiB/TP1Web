{include file="templates/header.tpl"}

<ul>
    {foreach from=$allCars item=$car}
        <li>{$car->Car}</li>
        <li>{$car->Brand}</li>
        <li>{$car->Year}</li>
        <li>{$car->Description}</li>
        <br>
    {/foreach}
</ul>


{include file="templates/footer.tpl"}