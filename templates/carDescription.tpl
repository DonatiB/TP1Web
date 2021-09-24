{include file="templates/header.tpl"}

{foreach from=$carDescription item=$car}
    <h1>Car:{$car->Car}</h1>       
{/foreach}

{foreach from=$carDescription item=$car}
    <h4>{$car->Car}-<br>
        {$car->Brand}-<br>
        {$car->Year}-<br>
        {$car->Description}<br>
        {if !$car->Sold}
            On sale
        {else}
            Sold
        {/if}     
    </h4>      
    <select name="select" value="">
        <option value="value1">€{$car->Euro}</option>
        <option value="value2">${$car->Dollar}</option>
        <option value="value3">${$car->Peso}</option>
        <option value="value4">¥{$car->Yen}</option>
    </select>

{/foreach}


{include file="templates/footer.tpl"}

