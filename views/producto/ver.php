<div id="product_main">
<?php if(isset($product)):?>
    <h1><?=$product->nombre?></h1>
    
    <div>
        <img class="img_prod" src="<?=base_url?>/uploads/images/<?=$product->imagen?>">
    </div>

    <p class="prec_prod"><?=$product->precio?></p>

    <p><?=$product->descripcion?></p>

    <div class="section-home">
        <?php while( $product = $productos_cat->fetch_object() ):?>
            <?php if($_GET['id'] != $product->id) :?>
                <a href="<?=base_url?>producto/ver&id=<?=$product->id?>">
                    <div class="producto-pre">
                        <img src="<?=base_url?>uploads/images/<?=$product->imagen?>">
                        <p class="nombre-pro"><?=$product->nombre?></p>
                        <p class="precio"><?=$product->precio?></p>
                    </div>
                </a>
            <?php endif; ?>
        <?php endwhile; ?>
    </div>  
</div> 

<?php else:?>
    <h1>La página no existe</h1>
<?php endif;?>

