<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
         if (isset($_POST['delete-cart-submit'])){
             
            $deletedrecord = $Cart->deleteCart($_POST['item_id']);


        }

        if (isset($_POST['wishlist-submit'])){
            $Cart-> saveForLater($_POST['item_id']);
        }
    }
    
?>


<section class="cart-section container clearfix ">
    <h1>Shopping Cart</h1>
    <div class="col-xl-8 col-l-8 clearfix cart-product-wrapper">
            
        <?php   
            if (count($product->getData('cart')) == 0){
                echo '<div class="empty col-xl-12">
                        <h1>Cart is Empty!</h1>
                    </div>';
            }

            

            foreach($product->getData('cart') as $item):
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
                    <button class="qty-up" data-id="<?php echo $item['item_id']?? '0'?>"><i class="fa-solid fa-angle-up"></i></button>
                    <input class="qty-input" data-id="<?php echo $item['item_id']?? '0'?>" type="text" disabled value="1" placeholder="1">
                    <button class="qty-down" data-id="<?php echo $item['item_id']?? '0'?>"><i class="fa-solid fa-angle-down"></i></button>
                    <form method="post">
                        <input type="hidden" value="<?php echo $item['item_id']?? 0 ?>" name="item_id">
                        <button type="submit" name="delete-cart-submit" class="cart-delete ">Delete</button>
                    </form>

                    <form method="post">
                        <input type="hidden" value="<?php echo $item['item_id']?? 0 ?>" name="item_id">
                        <button type="submit" name="wishlist-submit" class="cart-delete">Add To Wishlist</button>
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
    
    <div class="col-xl-4 col-l-4">
        <div class="cart-total">
            <h2>Total (of 
                <?php
                    $totalItems = isset($subTotal) ? count($subTotal) : 0;
                    if ($totalItems >1){
                        echo $totalItems." items): " ;
                    }else{
                        echo $totalItems." item): " ;
                    };
                    
                ?><span id="deal-price"> <?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0; ?></span>$</h2>
            <a>Proceed To Buy</a>
        </div>
    </div>
</section>