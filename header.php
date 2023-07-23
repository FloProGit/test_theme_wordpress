<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php  wp_head() ?>
</head>
<body>
<header class="bg-white">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
        </div>
        <?php wp_nav_menu([
            'theme_location'=>'header',
            'container'=>false,
            'menu_class'=>'lg:flex lg:gap-x-12'
        ]) ?>
<!--        <div class="flex lg:hidden">-->
<!--            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">-->
<!--                <span class="sr-only">Open main menu</span>-->
<!--                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">-->
<!--                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />-->
<!--                </svg>-->
<!--            </button>-->
<!--        </div>-->
<!--        <div class="lg:flex lg:gap-x-12">-->
<!--            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Product</a>-->
<!--            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Features</a>-->
<!--            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Marketplace</a>-->
<!--            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Company</a>-->
<!--        </div>-->
<!--        <div class="lg:flex lg:flex-1 lg:justify-end">-->
<!--            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>-->
<!--        </div>-->
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
</header>

