<?php 
    $all = true;
    $item_type = $_GET['item_type'];
    $item_kind = $_GET['item_kind'];
    $gender = $_GET['gender'];
    $product_shuffle = $product->getData('products');



    $brand =  array_map(function($pro){
        $item_kind = $_GET['item_kind'];
        $item_type = $_GET['item_type'];
        if ( $pro['item_type'] == $item_type){
            return $pro['item_brand'];
        }else if( $pro['item_kind'] == $item_kind &&  $item_type == 'all'){
            return $pro['item_brand'];
        }else if($item_kind == 'all'){
            return $pro['item_brand'];
        }
        },$product_shuffle); 
    $unique = array_unique($brand);

    sort ($unique);


    unset($unique[0]);
 
    ?>

<section class="container product-page clearfix">
        <div class="sidemenu col-xl-3 col-l-3">
             <?php 
                    if ($item_type=='all'):
                ?>
            <div class="product-type col-xl-12 col-l-12 col-m-12 col-s-12 col-xs-12">
                <div class="product-type-header">
                    <h4 class="col-xl-6">Είδος</h4>
                    <i class="fa-solid fa-chevron-down col-xl-6"></i>
                </div>
                
                <ul class="button-group col-xl-12">
                    <li><button>lorem</button></li>
                    <li><button>lorem</button></li>
                    <li><button>lorem</button></li>
                    <li><button>lorem</button></li>
                </ul>
            </div>
            <?php 
                endif;
            ?>
            <div class="product-type col-xl-12 col-l-12 col-m-12 col-s-12 col-xs-12">
                <div class="product-type-header">
                    <h4 class="col-xl-6">Price</h4>
                    <i class="fa-solid fa-chevron-down col-xl-6"></i>
                </div>
                <ul class="button-group price-filter">
                    <li><button price-filter="*">All price range</button></li>
                    <li><button price-filter="lessThan50">Under 50$</button></li>
                    <li><button price-filter="greaterThan50less">50$-100$</button></li>
                    <li><button price-filter="greaterThan100less">100$-150$</button></li>
                    <li><button price-filter="greaterThan150">Over 150$</button></li>
                    
                </ul>
                
            </div>
            <div class="product-type col-xl-12 col-l-12 col-m-12 col-s-12 col-xs-12">
                <div class="product-type-header">
                    <h4 class="col-xl-6">Brands</h4>
                    <i class="fa-solid fa-chevron-down col-xl-6"></i>
                </div>
                <ul class="button-group brand-filter">
                    <li><button data-filter="*">All brands</button></li>
                    <?php foreach($unique as $brand){
                        ?>
                        <li><button data-filter=".<?php echo ($brand)?>"><?php 
                        $brand = str_replace('_',' ',$brand);
                        
                        echo ($brand)?></button></li>
                    <?php
                    };?>
                </ul>
            </div>
        </div>
        <div class="product-list col-xl-9 col-l-9">
            <div class="product-header col-xl-12 col-l-12 col-m-12 col-s-12 col-xs-12">
                <h2>
                    <?php if ($item_type == 'all' && $item_kind=="Shoes"){
                        echo 'All Shoes';
                    }else if ($item_type == 'all' && $item_kind=="Clothes"){
                        echo 'All Clothes';
                    }else if ($item_type == 'all' && $item_kind=="all"){
                        echo $gender;
                    }else
                        echo $item_type
                    ?>
                </h2>
            </div>
            <div class="products-containt col-xl-12 col-l-12 col-m-12 col-s-12 col-xs-12">
                <?php
                    foreach($product_shuffle as $item):
                        if ($item ['item_type'] == $item_type && $item ['gender']==$gender):
                            $all=false;
                ?>
                <div class="product-wrapper col-xl-4 col-l-4 col-m-6 col-s-12 col-xs-12">
                    <div class=" <?php echo $item['item_brand']?> product-card">
                        <a href="product.php?item_id=<?php echo $item['item_id']?>">
                        
                            <img src="<?php echo $item['item_image']?>" alt="1">
                            <div class="product-card-text">
                                <h5><?php echo $item['item_name']?></h5>
                                <p><?php echo $item['item_text']?></p>
                                <p class="price"><?php echo $item['item_price']?></p>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
                    endif;
                    endforeach;


                    if($all == true):
                        foreach($product_shuffle as $item):
                            if ($item ['item_kind'] == $item_kind && $item ['gender']==$gender):
                ?>
                <div class="product-wrapper col-xl-4 col-l-4 col-m-6 col-s-12 col-xs-12">
                    <div class="product-card <?php echo $item['item_brand']?>">
                        <a href="product.php?item_id=<?php echo $item['item_id']?>">
                           
                            <img src="<?php echo $item['item_image']?>" alt="1">
                            <div class="product-card-text">
                                <h5><?php echo $item['item_name']?></h5>
                                <p><?php echo $item['item_text']?></p>
                                <p class="price"><?php echo $item['item_price']?></p>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
                    endif;
                    endforeach;
                    endif;



                    if ($item_kind=='all'):
                        foreach($product_shuffle as $item):
                            if ($item ['gender']==$gender):
                ?>
                <div class="product-wrapper col-xl-4 col-l-4 col-m-6 col-s-12 col-xs-12">
                    <div class="product-card <?php echo $item['item_brand']?>">
                        <a href="product.php?item_id=<?php echo $item['item_id']?>">
                           
                            <img src="<?php echo $item['item_image']?>" alt="1">
                            <div class="product-card-text">
                                <h5><?php echo $item['item_name']?></h5>
                                <p><?php echo $item['item_text']?></p>
                                <p class="price"><?php echo $item['item_price']?></p>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
                    endif;
                    endforeach;
                    endif;
                ?>
            </div>
        </div>
    </section>
