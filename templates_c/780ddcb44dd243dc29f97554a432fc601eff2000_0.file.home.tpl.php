<?php
/* Smarty version 3.1.39, created on 2021-09-25 22:25:26
  from 'C:\xampp\htdocs\proyectos\web2\Practico_Especial1\JaponeseCars\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_614f85b6a8bbc7_34240405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '780ddcb44dd243dc29f97554a432fc601eff2000' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\web2\\Practico_Especial1\\JaponeseCars\\templates\\home.tpl',
      1 => 1632601522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_614f85b6a8bbc7_34240405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">   
    <div class="car-form">
        <form action="createCar" method="post" enctype="multipart/form-data">    
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
            <div class="mb-3">
                <label for="enter-img" class="form-label" >Img Car</label>
                <input type="file" name="img"class="form-control" id="enter-img"> 
            </div>        
            <button type="submit" class="btn btn-primary">Registrar</button>      
        </form>
        <br>
        <br>
        <br>

        <form action="saveLogo" method="post" enctype="multipart/form-data"> 
            <div class="mb-3">
                <label for="enter-brand" class="form-label" >Brand</label>
                <input type="text" name="brand"  class="form-control" id="enter-brand">        
            </div>
            <div class="mb-3">
                <label for="enter-logo" class="form-label" >Logo</label>
                <input type="file" name="photo" class="form-control" id="enter-logo"> 
            </div> 
            <div class="form-floating">
                <textarea name="description" class="form-control" placeholder="Leave a description here" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Description</label>
            </div>       
            <button type="submit" class="btn btn-primary">Registrar Logo</button>  
        </form>
    </div>
    



    <div class="card-brands">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allCars']->value, 'car');
$_smarty_tpl->tpl_vars['car']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['car']->value) {
$_smarty_tpl->tpl_vars['car']->do_else = false;
?>                             
                <div class="card" style="width: 18rem;">   
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arregloImg']->value, 'images');
$_smarty_tpl->tpl_vars['images']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['images']->value) {
$_smarty_tpl->tpl_vars['images']->do_else = false;
?>          
                <img src="data:image/jpg;base64,<?php echo $_smarty_tpl->tpl_vars['images']->value->imagendecodificada;?>
" class="card-img-top" alt="Nissan Logo"> 
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                                     
                               
                <div class="card-body">
                    <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['car']->value->Brand;?>
</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                            
                    <a href="brand/<?php echo $_smarty_tpl->tpl_vars['car']->value->Brand;?>
" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div> 
</div>


<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
