{include file="templates/header.tpl"}


<div class="container">   
    <div class="car-form">
        <form action="createCar" method="post">    
            <div class="mb-3">        
                <label for="enter-car" class="form-label" >Enter Car</label>
                <input type="text" name="Car" class="form-control" id="enter-car">    
            </div>
            <div class="mb-3">
                <label for="enter-brand" class="form-label" >Brand</label>
                <input type="text" name="Brand"  class="form-control" id="enter-brand">        
            </div>
            <div class="mb-3">
                <label for="enter-year" class="form-label" >Year</label>
                <input type="number" name="Year" class="form-control" id="enter-year"> 
            </div>
            <div class="form-floating">
                <textarea name="Description" class="form-control" placeholder="Leave a description here" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Description</label>
            </div>
            <div class="mb-3 form-check">   
                <input type="checkbox" name="sold" class="form-check-input" id="check-car">  
                <label class="form-check-label" for="check-car">On sale - Sold</label>
            </div>      
            <div class="mb-3">
                <label for="enter-price" class="form-label" >Euro Price</label>
                <input type="number" name="Euro"class="form-control" id="enter-price"> 
            </div>        
            <button type="submit" class="btn btn-primary">Registrar</button>      
        </form>
    </div>

    <div class="card-brands">
        {foreach from=$allCars item=$car}      
            <div class="card" style="width: 18rem;">
                <img src="nissan.jpg" class="card-img-top" alt="Nissan Logo">
                <div class="card-body">
                    <h5 class="card-title">{$car->Brand}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="brand/{$car->Brand}" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        {/foreach}
    </div> 
</div>


{include file="templates/footer.tpl"}