if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}


 $(document).ready(function(){


        $("#contact").click(function(){
            $("#contact-us").fadeIn("fast");
            $("html").css("overflow-y","hidden");
        });

        $(".fa-xmark").click(function(){
            $("#contact-us").fadeOut("fast");
            $("html").css("overflow-y","scroll");
        });




        $(".product-type-header").click(function(){
            
            $(this).next(".button-group").slideToggle();
        });
        //brand filter



        var $grid = $('.product-wrapper').isotope({
            itemSelector:'.product-card',
           layoutMode:'fitRows',
        });




        $(".brand-filter").on("click","button",function(){
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({filter: filterValue});
            
        })


        //price filter

        var filterFns = {
            lessThan50: function(){
                var number = $(this).find('.price').text();
                return parseInt( number, 10 ) <50;
            },

            greaterThan50less: function(){
                var number = $(this).find('.price').text();
                if (number >= 50 && number <=100){
                    return number;
                }
                
            },

            greaterThan100less: function(){
                var number = $(this).find('.price').text();
                
                if (number >= 100 && number <=150){
                    return number;
                }
            },

            greaterThan150: function(){
                var number = $(this).find('.price').text();
                return parseInt( number, 10 ) >150;
            },
        }



        $(".price-filter").on("click","button",function(){
            
            var filterValue = $(this).attr('price-filter');
            filterValue = filterFns[ filterValue ]
            $grid.isotope({filter: filterValue});
            
        })



        //quantity
        let $qty_up = $(".qty-up");
        let $qty_down = $('.qty-down');

        $qty_up.click(function(e){


            let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
            let $price = $(`.product_price[data-id='${$(this).data("id")}']`);
            let $deal_price = $('#deal-price');
            $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                const obj = JSON.parse(result);
                const item_price = obj[0]['item_price'];


                if($input.val()>=1 && $input.val()<= 9){
                    $input.val(function(i,oldval){
                        return ++oldval;
                    })
                
                
                $price.text(parseInt(item_price * $input.val()).toFixed(2));

                let subtotal = parseInt($deal_price.text()) + parseInt (item_price);
                $deal_price.text(subtotal.toFixed(2));
                }
            }})
        })


        

        $qty_down.click(function(e){

            let $input = $(`.qty-input[data-id='${$(this).data("id")}']`);
            let $price = $(`.product_price[data-id='${$(this).data("id")}']`);
            let $deal_price = $('#deal-price');
            $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
                    let obj = JSON.parse(result);
                    let item_price = obj[0]['item_price'];
    
                    if($input.val() > 1 && $input.val() <= 10){
                        $input.val(function(i, oldval){
                            return --oldval;
                        });
    
    
                     
                        $price.text(parseInt(item_price * $input.val()).toFixed(2));
    
                        
                        let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                        $deal_price.text(subtotal.toFixed(2));
                    }
    
                }}); 
        }); 
  });
