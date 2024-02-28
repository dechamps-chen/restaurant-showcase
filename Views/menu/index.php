<?php

$title = "Menu - Meet Noodle";

?>

<div class="bg-gray-900 pt-20">
    <h2 class="text-center text-2xl text-amber-300 font-bold">Menu</h2>

    <ul data-accordion="open" class="relative m-2 space-y-2">
        <?php
        foreach ($data['category'] as $key_category => $category) {
        ?>
            <li class="space-y-2">
                <div id="li-category-heading-<?php echo $category->id_category ?>" aria-expanded="true" data-accordion-target="#list-product-<?php echo $category->id_category ?>" class="relative flex justify-between py-2 mx-4 space-x-4 border-dotted border-b-2 bg-gray-900 cursor-pointer">
                    <div class="h-10">
                        <h3 id="name_category" class="text-sm font-medium text-amber-300"><?php echo $category->name_category ?></h3>
                        <?php
                        if (!empty($category->description_category)) {
                        ?>
                            <p id="description_category" class="text-xs text-white"><?php echo $category->description_category ?></p>
                        <?php
                        }
                        ?>
                    </div>
                    <div data-accordion-icon class="flex px-4 items-center text-amber-300 text-sm">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div id="list-product-<?php echo $category->id_category ?>" class="flex flex-wrap flex-row justify-between mx-4">
                    <?php
                    foreach ($data['product'][$key_category] as $key => $product) {
                        if (!empty($product)) {
                    ?>
                            <div class="relative group flex flex-col justify-center items-center h-72 z-0 mb-10 basis-full bg-gray-950 lg:h-80 lg:basis-[32%] md:basis-[48%] md:mx-0">
                                <?php
                                if (!empty($product->photo_product)) {
                                ?>
                                    <img class="absolute object-cover object-center w-full h-full -z-10" src="<?php echo './/' . $product->photo_product ?>">
                                <?php
                                }
                                ?>
                                <div class="absolute inset-0 bg-black opacity-50 duration-300 -z-10 group-hover:opacity-0"></div>
                                <h4 class="text-sm font-medium text-white group-hover:hidden"><?php echo $product->name_product ?></h4>
                                <p class=" text-xs text-white group-hover:hidden"><?php echo number_format($product->price_product, 2, '.', '') . "€" ?></p>
                            </div>
                    <?php
                        }
                    }

                    ?>
                </div>
            </li>
        <?php
        }
        ?>
    </ul>

</div>