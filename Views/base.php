<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link href="./public/output.css" rel="stylesheet">
</head>

<body>
    <header class="fixed inset-x-0 top-0 z-50">
        <nav id="nav" class="flex items-center justify-between p-6 duration-300 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="./home" class="-m-1.5 p-1.5">
                    <span class="sr-only">Meet Noodle</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                </a>
            </div>
            <div class="flex lg:hidden">
                <button id="menu-open" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="./menu" class="text-sm font-semibold leading-6 text-white">Menu</a>
                <a href="#horaires" class="text-sm font-semibold leading-6 text-white">Horaires</a>
                <a href="#contact" class="text-sm font-semibold leading-6 text-white">Contact</a>
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div id="menu" class="hidden lg:hidden" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-50"></div>
            <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Meet Noodle</span>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                    </a>
                    <button id="menu-close" type="button" class="-m-2.5 rounded-md p-2.5 text-white">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a href="./menu" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Menu</a>
                            <a href="#horaires" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Horaires</a>
                            <a href="#contact" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <?php echo $content ?>
    </main>

    <footer class="text-center">
        <p>© XBL 2024</p>
    </footer>

    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="./public/scripts.js"></script>
</body>

</html>

<?php
