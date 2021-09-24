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
{/foreach}


{include file="templates/footer.tpl"}

{* {if !$car->Sold}
            'On sale'
        {else}
            'Sold'
        {/if}  *}