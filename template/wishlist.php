<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
         if (isset($_POST['delete-wish-submit'])){
             
            $deletedrecord = $Cart->deleteCart($_POST['item_id'],'wishlist');


        }

        if (isset($_POST['cart-submit'])){
            $Cart-> saveForLater($_POST['item_id'],'cart','wishlist');
        }
    }
    
?>


<section class="cart-section container clearfix ">
    <h1>Wishlist</h1>
    <div class="col-xl-8 col-l-8 clearfix cart-product-wrapper">
        
        <?php
                if (count($product->getData('wishlist')) == 0){
                    echo '<div class="empty col-xl-12">
                            <h1>Wishlist is Empty!</h1>
                        </div>';
                }
                foreach($product->getData('wishlist') as $item):
                    $cart= $product ->getProduct($item['item_id']);
                   $subTotal[] = array_map(function($item){
            ?>
        <div class="cart-product col-xl-12 col-l-12 clearfix">
            <div class="cart-img col-xl-3 col-l-3">
                <img src="<?php echo $item['item_image']?>"/>
            </div>
            <div class="cart-details col-xl-8 col-l-8">
                <h3><?php echo $item['item_name']?></h3>
                <p>by <?php $item = str_replace('_',' ',$item); echo  $item['item_brand']?></p>
                <div class="cart-qty">
                    <form method="post">
                        <input type="hidden" value="<?php echo $item['item_id']?? 0 ?>" name="item_id">
                        <button type="submit" name="delete-wish-submit" class="cart-delete ">Delete</button>
                    </form>
                    

                    <form method="post">
                        <input type="hidden" value="<?php echo $item['item_id']?? 0 ?>" name="item_id">
                        <button type="submit" name="cart-submit" class="cart-delete">Add To Cart</button>
                    </form>
                    

                </div>
            </div>
            <div class="cart-price col-xl-1 col-l-1">
                <h3 class='product_price' data-id="<?php echo $item['item_id']?? '0'?>"><?php echo $item['item_price']?>$</h3>
            </div>          
        </div>
        <?php
            return $item['item_price'];
            },$cart);
            endforeach;
        ?>
    </div>
</section>