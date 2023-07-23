<?php get_header() ?>
<?php

function get_esc_url_from_cat_ID($cat){
    $category_id = get_cat_ID( $cat );
// Get the URL of this category
    $category_link = get_category_link( $category_id );
    return esc_url( $category_link );
}
?>


    <div class="bg-white px-6 py-16 lg:px-8">
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl sm:text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Home</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-600">Select Section</p>
                </div>
                <ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-6 gap-y-20 sm:grid-cols-2 lg:max-w-4xl lg:gap-x-8 xl:max-w-none">
                    <li class="flex flex-col gap-6 xl:flex-row">
                        <img class="aspect-[4/5] w-52 flex-none rounded-2xl object-cover" src="http://local.testwp.com/wp-content/uploads/2023/07/tutos.png" alt="image">
                        <div class="flex-auto">
                            <a href="<?= get_esc_url_from_cat_ID('Tuto')?>"><h3 class="text-lg font-semibold leading-8 tracking-tight text-gray-900">TUTO</h3></a>
                            <p class="text-base leading-7 text-gray-600">Learn About Wordpress</p>
                            <p class="mt-6 text-base leading-7 text-gray-600">Contains some tutorials to understand and do your first step on Wordpress</p>
                        </div>
                    </li>
                    <li class="flex flex-col gap-6 xl:flex-row">
                        <img class="aspect-[4/5] w-52 flex-none rounded-2xl object-cover" src="http://local.testwp.com/wp-content/uploads/2023/07/function.jpg" alt="function">
                        <div class="flex-auto">
                            <a href="<?= get_esc_url_from_cat_ID('Functions')?>"><h3 class="text-lg font-semibold leading-8 tracking-tight text-gray-900">Function List</h3></a>
                            <p class="text-base leading-7 text-gray-600">Find Function do you need</p>
                            <p class="mt-6 text-base leading-7 text-gray-600"> Contains list of function to quickly found and understand </p>
                        </div>
                    </li>
                    <!-- More people... -->
                </ul>
            </div>
        </div>
<?php get_footer() ?>