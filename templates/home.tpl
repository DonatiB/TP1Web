{include file="templates/header.tpl"}

<h1>Home: Marcas</h1>
<ul>
    {foreach from=$allCars item=$car}
        <li><a href="brand/{$car->Brand}">{$car->Brand}</a></li>       
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