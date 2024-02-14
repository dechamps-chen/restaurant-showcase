<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link href="http://localhost/applications/projet-xbl/public/styles.css" type="text/css" rel="stylesheet">
    <link href="http://localhost/applications/projet-xbl/public/output.css" type="text/css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="fixed z-50 bg-gray-800 w-full">
            <div class="relative w-full px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 items-center justify-between">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        <!-- Mobile menu button-->
                        <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="default-sidebar" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!--
                                Icon when menu is closed.

                                Menu open: "hidden", Menu closed: "block"
                                 -->
                            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!--
                                Icon when menu is open.

                                Menu open: "block", Menu closed: "hidden"
                                 -->
                            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="flex flex-shrink-0 items-center">
                            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                        </div>
                    </div>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0 text-white">
                        <a href="http://localhost/applications/projet-xbl/houtai/logout"><button>注销</button></a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="h-16"></div>
    </header>

    <main>
        <aside id="default-sidebar" class="border-r mt-16 fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50">
                <ul class="space-y-2 font-medium">
                    <li>
                        <a href="http://localhost/applications/projet-xbl/houtai" class="flex items-center p-2 pl-8 text-gray-900 border-l-4 group <?php if ($path == 'houtai/index') echo "border-gray-800 bg-gray-200 hover:bg-gray-100";
                                                                                                                                                    else echo "border-gray-50 hover:bg-gray-100" ?>">
                            <svg class="w-5 h-5 transition duration-75 <?php if ($path == 'houtai/index') echo "text-gray-900 group-hover:text-gray-900";
                                                                        else echo "text-gray-500 group-hover:text-gray-700" ?>" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                                <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                                <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                            </svg>
                            <span class="ms-3">主页</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/applications/projet-xbl/houtai/menu" class="flex items-center p-2 pl-8 text-gray-900 border-l-4 group <?php if ($path == 'houtai/menu') echo "border-gray-800 border-l-4 bg-gray-200 hover:bg-gray-100";
                                                                                                                                                        else echo "border-gray-50 hover:bg-gray-100" ?>">
                            <svg class="w-5 h-5 transition duration-75 <?php if ($path == 'houtai/menu') echo "text-gray-900 group-hover:text-gray-900";
                                                                        else echo "text-gray-500 group-hover:text-gray-700" ?>" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                                <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">菜单</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="mt-2 p-4 sm:ml-64">
            <div class="bg-red-100 overflow-auto">
                <?php echo $content ?>
            </div>
        </div>
    </main>

    <footer class="text-center">
        <p>© XBL 2024</p>
    </footer>
    <script src="https://kit.fontawesome.com/841ce7d4f6.js" crossorigin="anonymous"></script>
    <script src="http://localhost/applications/projet-xbl/node_modules/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script src="http://localhost/applications/projet-xbl/public/sortable.js"></script>
</body>

</html>

<?php
