<?php
    $id=$_GET['item_id'];


    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['product_cart_submit'])){
            $Cart->addtoCart($_POST['user_id'],$_POST['item_id']);
            
        }

        if(isset($_POST['product_wish_submit'])){
            $Cart->addtoCart($_POST['user_id'],$_POST['item_id'],'wishlist');
            
        }
    }
    foreach($product->getData() as $item):
        if ($item['item_id'] == $id):
    
?>


<section class="container product ">
        <div class="product-img col-xl-7 col-l-7">
            <img src="<?php echo $item['item_image']?>" alt="1">
        </div>
        <div class="product-info col-xl-5 col-l-5">
            <div class="product-info-header">
                <h2><?php echo $item['item_name']?></h2>
            </div>
            <div class="product-info-rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <div class="product-info-price col-xl-12">
                €<?php echo $item['item_price']?>
            </div>
            <div class="product-info-color col-xl-12">
                <div class="color-text">Επίλεξε Χρώμα:</div>
                <div class="colors">
                    <div class="color-1"></div>
                    <div class="color-2"></div>
                    <div class="color-3"></div>
                </div>
                
            </div>
            <div class="size-guide col-xl-12">
                <a href="#">Βρες το ιδανικό μέγεθος</a>
            </div>
            <div class="size col-xl-12">
                <form>
                    <select name="size">
                        <option value="xs">Extra Small</option>
                        <option value="s">Small</option>
                        <option value="m">Medium</option>
                        <option value="l">Large</option>
                        <option value="xl">Extra Large</option>
                    </select>
                </form>
            </div>
            <div class="add-to-cart col-xl-12">
                <form method="post">
                    <input type="hidden" name="item_id" value="<?php echo $item['item_id']?? 0?>">
                    <input type="hidden" name="user_id" value="<?php echo 1?>">
                    <?php 
                        if (in_array($item['item_id'], $Cart->getCartid($product->getData('cart'))?? [])){
                            echo '<button type="button" onclick="alreadyinCart()" >ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ</button>';
                        }else{
                            echo '<button type="submit" name="product_cart_submit">ΠΡΟΣΘΗΚΗ ΣΤΟ ΚΑΛΑΘΙ</button>';
                        }
                    ?>
                    
                </form>
            </div>
            <div class="add-to-fav col-xl-12">
            <form method="post">
                    <input type="hidden" name="item_id" value="<?php echo $item['item_id']?? 0?>">
                    <input type="hidden" name="user_id" value="<?php echo 1?>">
                    <?php 
                        if (in_array($item['item_id'], $Cart->getCartid($product->getData('wishlist'))?? [])){
                            echo '<button type="button" onclick="alreadyinWish()" >ΠΡΟΣΘΗΚΗ ΣΤΑ ΑΓΑΠΗΜΕΝΑ</button>';
                        }else{
                            echo '<button type="submit" name="product_wish_submit">ΠΡΟΣΘΗΚΗ ΣΤΑ ΑΓΑΠΗΜΕΝΑ</button>';
                        }
                    ?>
                    
                </form>
            </div>
            <div class="free-returns">
                <a><i class="fa-solid fa-reply"></i> Δωρεάν Επιστροφές |</a>
                <a><i class="fa-solid fa-truck-fast"></i> Δωρεάν Μεταφορικά</a>
            </div>
        </div>
    </section>


<?php
    endif;
    endforeach;
?>