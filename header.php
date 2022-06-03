<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/col.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/reset.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main1.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/nav1.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/all.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/slick.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/slick-theme.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/responsive.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.com/libraries/bootstrap-slider">
  

    <?php

    require("functions.php")

    ?>
</head>
<body>
    <header>
        <nav class="container-fluid">
            <div class="header-content container">
                <div class="logo col-xl-3 col-l-3 col-m-6 col-s-6 col-xs-6">
                    <h1><a href="index.php">LO<span class="red">GO</span></a></h1>
                </div>
                <div class="nav xl-block col-xl-6 l-block col-l-6 m-none s-none xs-none">
                    <ul>
                        <li class="dropdown">
                            <a href="product-list.php?item_type=all&item_kind=all&gender=Men">MEN</a>
                            <div class="dropdown-containt clearfix">
                                <div class="shoes list-1">
                                    <div class="dropdown-header"><h4>Παπούτσια</h4></div>
                                    <div class="dropdown-list">
                                        <ul>
                                            <li><a href="<?php printf('product-list.php?item_type=all&item_kind=Shoes&gender=Men')?>">'Ολα τα Παπούτσια</a></li>
                                            <li><a href="<?php printf('product-list.php?item_type=Sneakers&item_kind=Shoes&gender=Men')?>">Sneakers</a></li>
                                            <li><a href="<?php printf('product-list.php?item_type=Running&item_kind=Shoes&gender=Men')?>">Τρέξιμο | Running</a></li>
                                            <li><a href="<?php printf('product-list.php?item_type=Crossfit&item_kind=Shoes&gender=Men')?>">Γυμναστήριο | Crossfit</a></li>
                                            <li><a href="<?php printf('product-list.php?item_type=Football&item_kind=Shoes&gender=Men')?>">Ποδόσφαιρο</a></li>
                                            <li><a href="<?php printf('product-list.php?item_type=Basketball&item_kind=Shoes&gender=Men')?>">Μπάσκετ</a></li>
                                            <li><a href="<?php printf('product-list.php?item_type=Skate&item_kind=Shoes&gender=Men')?>">Skate</a></li>
                                            <li><a href="<?php printf('product-list.php?item_type=Volley&item_kind=Shoes&gender=Men')?>">Βόλλεϊ</a></li>
                                            <li><a href="<?php printf('product-list.php?item_type=Tennis&item_kind=Shoes&gender=Men')?>">Τένις</a></li>
                                            <li><a href="<?php printf('product-list.php?item_type=Track&item_kind=Shoes&gender=Men')?>">Στίβος</a></li>
                                        </ul>
                                    </div> 
                                </div>
                                <div class="clothes  list-2">
                                    <div class="dropdown-header"><h4>Ρούχα</h4></div>
                                    <div class="dropdown-list">
                                        <ul>
                                            <li><a href="<?php printf('product-list.php?item_type=all&item_kind=Clothes&gender=Men')?>">Όλα τα Ρούχα</a></li>
                                            <li><a href="<?php printf('product-list.php?item_type=T-Shirt&item_kind=Clothes&gender=Men')?>">T-shirts | Μπλούζα κοντό μανίκι</a></li>
                                            <li><a href="<?php printf('product-list.php?item_type=Jacket&item_kind=Clothes&gender=Men')?>">Μπουφάν</a></li>
                                            <li><a href="<?php printf('product-list.php?item_type=Shorts&item_kind=Clothes&gender=Men')?>">Σορτς | Βερμούδες</a></li>
                                            <li><a href="<?php printf('product-list.php?item_type=Sweater&item_kind=Clothes&gender=Men')?>">Ζακέτες</a></li>
                                            <li><a href="<?php printf('product-list.php?item_type=Sweatshirt&item_kind=Clothes&gender=Men')?>">Φούτερ</a></li>
                                            <li><a href="<?php printf('product-list.php?item_type=Jeans&item_kind=Clothes&gender=Men')?>">Jeans</a></li>
                                            <li><a href="<?php printf('product-list.php?item_type=Leggings&item_kind=Clothes&gender=Men')?>">Κολάν</a></li>
                                            <li><a href="<?php printf('product-list.php?item_type=Shirt&item_kind=Clothes&gender=Men')?>">Πουκάμισα</a></li>
                                            <li><a href="<?php printf('product-list.php?item_type=Sleeveless&item_kind=Clothes&gender=Men')?>">Αμάνικα T-shirts</a></li>
                                        </ul>
                                    </div> 
                                </div>
                               
                            </div>
                        </li>
                        <li class="dropdown">
                            <a>WOMEN</a>
                            <div class="dropdown-containt clearfix">
                                <div class="shoes  list-1">
                                    <div class="dropdown-header"><h4>Παπούτσια</h4></div>
                                    <div class="dropdown-list">
                                        <ul>
                                            <li><a href="product-list.php">'Ολα τα Παπούτσια</a></li>
                                            <li><a href="product-list.php">Sneakers</a></li>
                                            <li><a href="product-list.php">Τρέξιμο | Running</a></li>
                                            <li><a href="product-list.php">Γυμναστήριο | Crossfit</a></li>
                                            <li><a href="product-list.php">Ποδόσφαιρο</a></li>
                                            <li><a href="product-list.php">Μπάσκε</a>τ</li>
                                            <li><a href="product-list.php">Skate</a></li>
                                            <li><a href="product-list.php">Βόλλεϊ</a></li>
                                            <li><a href="product-list.php">Τένις</a></li>
                                            <li><a href="product-list.php">Στίβος</a></li>
                                        </ul>
                                    </div> 
                                </div>
                                <div class="clothes  list-2">
                                    <div class="dropdown-header"><h4>Ρούχα</h4></div>
                                    <div class="dropdown-list">
                                        <ul>
                                            <li><a href="product-list.php">Όλα τα Ρούχα</a></li>
                                            <li><a href="product-list.php">T-shirts | Μπλούζα κοντό μανίκι</a></li>
                                            <li><a href="product-list.php">Μπουφάν</a></li>
                                            <li><a href="product-list.php">Σορτς | Βερμούδες</a></li>
                                            <li><a href="product-list.php">Ζακέτες</a></li>
                                            <li><a href="product-list.php">Φούτερ</a></li>
                                            <li><a href="product-list.php">Jeans</a></li>
                                            <li><a href="product-list.php">Κολάν</a></li>
                                            <li><a href="product-list.php">Πουκάμισα</a></li>
                                            <li><a href="product-list.php">Αμάνικα T-shirts</a></li>
                                        </ul>
                                    </div> 
                                </div>
                                <div class="sports  list-3">
                                    <div class="dropdown-header"><h4>Αθλήματα</h4></div>
                                    <div class="dropdown-list">
                                        <ul>
                                            <li><a href="product-list.php">Όλα τα Αθλήματα</a></li>
                                            <li><a href="product-list.php">Τρέξιμο | Running</a></li>
                                            <li><a href="product-list.php">Μπάσκετ</a></li>
                                            <li><a href="product-list.php">Ποδόσφαιρο</a></li>
                                            <li><a href="product-list.php">Gym | Crossfit</a></li>
                                            <li><a href="product-list.php">Κολύμβηση</a></li>
                                            <li><a href="product-list.php">Τένις</a></li>
                                            <li><a href="product-list.php">Trail | Outdoor</a></li>
                                            <li><a href="product-list.php">Βόλλεϊ</a></li>
                                        </ul>
                                    </div> 
                                </div>
                            </div>
                        </li>
                        <li>
                            <a>KIDS</a>
                            <div class="dropdown-containt clearfix">
                                <div class="shoes  list-1">
                                    <div class="dropdown-header"><h4>Παιδικά Παπούτσια</h4></div>
                                    <div class="dropdown-list">
                                        <ul>
                                            <li><a href="product-list.php">'Ολα τα Παπούτσια</a></li>
                                            <li><a href="product-list.php">Sneakers</a></li>
                                            <li><a href="product-list.php">Τρέξιμο | Running</a></li>
                                            <li><a href="product-list.php">Γυμναστήριο | Crossfit</a></li>
                                            <li><a href="product-list.php">Ποδόσφαιρο</a></li>
                                            <li><a href="product-list.php">Μπάσκετ</a></li>
                                            <li><a href="product-list.php">Skate</a></li>
                                            <li><a href="product-list.php">Βόλλεϊ</a></li>
                                            <li><a href="product-list.php">Τένις</a></li>
                                            <li><a href="product-list.php">Στίβος</a></li>
                                        </ul>
                                    </div> 
                                </div>
                                <div class="clothes  list-2">
                                    <div class="dropdown-header"><h4>Παιδικά Ρούχα</h4></div>
                                    <div class="dropdown-list">
                                        <ul>
                                            <li><a href="product-list.php">Όλα τα Ρούχα</a></li>
                                            <li><a href="product-list.php">T-shirts | Μπλούζα κοντό μανίκι</a></li>
                                            <li><a href="product-list.php">Μπουφάν</a></li>
                                            <li><a href="product-list.php">Σορτς | Βερμούδες</a></li>
                                            <li><a href="product-list.php">Ζακέτες</a></li>
                                            <li><a href="product-list.php">Φούτερ</a></li>
                                            <li><a href="product-list.php">Jeans</a></li>
                                            <li><a href="product-list.php">Κολάν</a></li>
                                            <li><a href="product-list.php">Πουκάμισα</a></li>
                                            <li><a href="product-list.php">Αμάνικα T-shirts</a></li>
                                        </ul>
                                    </div> 
                                </div>
                                <div class="sports  list-3">
                                    <div class="dropdown-header"><h4>Αθλήματα</h4></div>
                                    <div class="dropdown-list">
                                        <ul>
                                            <li><a href="product-list.php">Όλα τα Αθλήματα</a></li>
                                            <li><a href="product-list.php">Τρέξιμο | Running</a></li>
                                            <li><a href="product-list.php">Μπάσκετ</a></li>
                                            <li><a href="product-list.php">Ποδόσφαιρο</a></li>
                                            <li><a href="product-list.php">Gym | Crossfit</a></li>
                                            <li><a href="product-list.php">Κολύμβηση</a></li>
                                            <li><a href="product-list.php">Τένις</a></li>
                                            <li><a href="product-list.php">Trail | Outdoor</a></li>
                                            <li><a href="product-list.php">Βόλλεϊ</a></li>
                                        </ul>
                                    </div> 
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a>ACCESSORIES</a>
                            <div class="dropdown-containt clearfix">
                                <div class="men  list-1">
                                    <div class="dropdown-header"><h4>Ανδρικα</h4></div>
                                    <div class="dropdown-list">
                                        <ul>
                                            <li><a href="product-list.php">Όλα τα Ανδρικά Αξεσουάρ</a></li>
                                            <li><a href="product-list.php">Κάλτσες</a></li>
                                            <li><a href="product-list.php">Kαπέλα & Bucket Hats</a></li>
                                            <li><a href="product-list.php">Τσάντες | Σακίδια Πλάτης</a></li>
                                            <li><a href="product-list.php">Σκούφο</a>ι</li>
                                            <li><a href="product-list.php">Γυαλιά Ηλίου</a></li>
                                            <li><a href="product-list.php">Ζώνες</a></li>
                                            <li><a href="product-list.php">Γάντια & Κασκόλ</a></li>
                                            <li><a href="product-list.php">Ρολόγια & Smartwatches</a></li>
                                            <li><a href="product-list.php">Τσάντες Ώμου</a></li>
                                        </ul>
                                    </div> 
                                </div>
                                <div class="women  list-2"><a href="product-list.php">
                                    <div class="dropdown-header"><h4>Γυναικεία</h4></div>
                                    <div class="dropdown-list">
                                        <ul>
                                            <li><a href="product-list.php">Όλα τα Γυναικεία Αξεσουάρ</a></li>
                                            <li><a href="product-list.php">Κάλτσες</a></li>
                                            <li><a href="product-list.php">Kαπέλα & Bucket Hats</a></li>
                                            <li><a href="product-list.php">Τσάντες | Σακίδια Πλάτης</a></li>
                                            <li><a href="product-list.php">Σκούφοι</a></li>
                                            <li><a href="product-list.php">Γυαλιά Ηλίου</a></li>
                                            <li><a href="product-list.php">Ζώνες</a></li>
                                            <li><a href="product-list.php">Γάντια & Κασκόλ</a></li>
                                            <li><a href="product-list.php">Ρολόγια & Smartwatches</li>
                                            <li><a href="product-list.php">Τσάντες Ώμου</li>
                                        </ul>
                                    </div> 
                                </div>
                                <div class="gym-equip  list-3">
                                    <div class="dropdown-header"><h4>Όργανα Γύμναστικης</h4></div>
                                    <div class="dropdown-list">
                                        <ul>
                                            <li><a href="product-list.php">Όλα τα Όργανα Γυμναστικής</a></li>
                                            <li><a href="product-list.php">Μπάρες | Αλτήρες | Βάρη</a></li>
                                            <li><a href="product-list.php">Στρώματα Γυμναστικής</a></li>
                                            <li><a href="product-list.php">Λάστιχα | Ελατήρια | Ιμάντες</a></li>
                                            <li><a href="product-list.php">Μπάλες Γυμναστικής</a></li>
                                            <li><a href="product-list.php">Μονόζυγα</a></li>
                                            <li><a href="product-list.php">Γάντια για Μποξ | Πυγμαχία</a></li>
                                            <li><a href="product-list.php">Αξεσουάρ Χεριών</a></li>
                                            <li><a href="product-list.php">Πάγκοι Ασκήσεων</a></li>
                                        </ul>
                                    </div> 
                                </div>
                            </div>
                        </li>
                        <li><a href="#contact-us" id="contact">CONTACT US</a></li>
                    </ul>
                </div>
                <div class="user col-xl-3 col-l-3 col-m-6 col-s-6 col-xs-6">
                    <a href="cart.php"><i class="fa-solid fa-heart"></i></a>
                    <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                    <a><i class="fa-solid fa-user"></i></a>
                </div>
                <div class="search-bar">
                    <form id="search" role="search">
                        <div class="flex">
                            <input type="search" id="search-bar" placeholder="Search...">
                            <button><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </nav>
        <div id="contact-us">
            <form>
                <label class="col-xl-12 col-xs-12" for="fname">First Name</label>
                <input class="col-xl-12 col-xs-12" type="text" id="fname" name="firstname" placeholder="Your name..">

                <label class="col-xl-12 col-xs-12" for="lname">Last Name</label>
                <input class="col-xl-12 col-xs-12" type="text" id="lname" name="lastname" placeholder="Your last name..">

                <label class="col-xl-12 col-xs-12" for="email">Email</label>
                <input class="col-xl-12 col-xs-12" type="text" id="email" name="email" placeholder="Your Email..">

                <label class="col-xl-12 col-xs-12" for="subject">Subject</label>
                <textarea class="col-xl-12 col-xs-12" id="subject" name="subject" placeholder="Write something.."></textarea>

                <input type="submit" value="Submit">

                <i class="fa-solid fa-xmark"></i>
            </form>
        </div>
    </header>