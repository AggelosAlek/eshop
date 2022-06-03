<?php 
    
    $newArr = $product->getData();
    function cmp($a, $b)
    {
    return strcmp($b["item_register"], $a["item_register"]);
    }

    usort($newArr, "cmp");
    $sliced=array_slice($newArr, 0, 10);


?>


<section class="container-fluid new-arrivals padding clearfix">
        <div class="container">
            <div class="col-xl-12">
                <h3>Latest Arrivals</h3>
            </div>
            <div class="new-arrivals-carousel clearfix col-xl-12">
                <?php 
                    foreach($sliced as $item):
                ?>
                <div class="new-arrival-slider">
                    <div class="product-wrapper col-xl-12 col-l-12 col-m-12 col-s-12 col-xs-12">
                        <div class="product-card">
                            <a href="product.php?item_id=<?php echo $item['item_id']?>">
                            
                                <img src="<?php echo $item['item_image']?>" alt="1">
                                <div class="product-card-text">
                                    <h5><?php echo $item['item_name']?></h5>
                                    <p><?php echo $item['item_text']?></p>
                                    <p class="price">€<?php echo $item['item_price']?></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <?php 
                    endforeach;
                ?>
            </div>
        </div>
</section>