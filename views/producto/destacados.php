<!-- <div id="slider">
    <div id="slider-container">
        <section class="slider-section"></section>
        <section class="slider-section"></section>
        <section class="slider-section"></section>
        <section class="slider-section"></section>
    </div>
    <ul class="puntos">
        <li class="punto activo"></li>
        <li class="punto"></li>
        <li class="punto"></li>
    </ul>
</div>
-->
<div class="destacados">
    <a href="#">
        <h2>Productos destacados</h2>
        <ion-icon class="arrow" name="arrow-forward-outline"></ion-icon>
    </a> 
    <div class="btn-scroll backward"><ion-icon name="chevron-back-outline"></ion-icon></div>
    <div class="btn-scroll forward"><ion-icon name="chevron-forward-outline"></ion-icon></div>
    <div class="section-home">
        <?php while($product = $productos->fetch_object()):?>
            <a href="<?=base_url?>producto/ver&id=<?=$product->id?>">
                <div class="producto-pre">
                    <img src="<?=base_url?>uploads/images/<?=$product->imagen?>">
                    <p class="nombre-pro"><?=$product->nombre?></p>
                    <p class="precio"><?=$product->precio?></p>
                </div>
            </a>
        <?php endwhile; ?>
    </div>
</div>

<?php while($cat = $categories->fetch_object()):?>
    <div class="destacados">
        <a href="#">
            <h2><?=$cat->nombre?></h2>
            <ion-icon class="arrow" name="arrow-forward-outline"></ion-icon>
        </a> 
        <div class="section-home">
        <?php 
        $cat_id = $cat->id; 
        $productos_cat =$category->getRandom($cat_id, 12);
        ?>
            <?php while($product = $productos_cat->fetch_object()):?>
                <a href="<?=base_url?>producto/ver&id=<?=$product->id?>">
                    <div class="producto-pre">
                        <img src="<?=base_url?>uploads/images/<?=$product->imagen?>">
                        <p class="nombre-pro"><?=$product->nombre?></p>
                        <p class="precio"><?=$product->precio?></p>
                    </div>
                </a> 
            <?php endwhile; ?>
        </div>   
    </div>
<?php endwhile;?>

