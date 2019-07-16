<?php
// check if there is something in $_GET array under the key: prod-id
// if not, loop through $products and parse the data into desired markup
$markup = "";

// if statement runs in case that user didn't select anything from dropdown
if(!isset($_GET['prod-id'])) {
    foreach($items as $value) {
        $markup .= "<div class='product col col-12 col-sm-6 col-md-3 text-center'>
                        <figure class='figure'>
                            <img src='{$value['image']}' alt='${value['name']}' class='figure-img img-fluid rounded'>
                            <figcaption class='figure-caption text-center'>
                                <h5>{$value['name']}</h5>
                                <p>{$value['price']}</p>
                                
                            </figcaption>
                        </figure>
                    </div>";
    }
} else {
    $selectedItem = [];
    foreach($items as $value) {
        if($_GET["prod-id"] === $value["id"]) {
            array_push($selectedItem, $value);
        }
    }
    
    foreach($selectedItem as $value) {
        $markup .= "<div class='product col col-12 col-sm-6 col-md-3 text-center'>
                        <figure class='figure'>
                            <img src='{$value['image']}' alt='${value['name']}' class='figure-img img-fluid rounded'>
                            <figcaption class='figure-caption text-center'>
                                <h5>{$value['name']}</h5>
                                <p>{$value['price']}</p>
                            </figcaption>
                        </figure>
                    </div>";
    }
}

?>
