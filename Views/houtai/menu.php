<?php

$title = "菜单 - 后台界面";

?>

<div class="bg-red-100">
    <h1 class="text-3xl font-bold">菜单</h1>
    

<!-- Modal toggle -->


<!-- drawer init and toggle -->
<button class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none" type="button" data-drawer-target="form-add" data-drawer-show="form-add" data-drawer-placement="right" data-drawer-backdrop="false" aria-controls="form-add">
   添加新的类别
</button>

<!-- drawer component -->
<div id="form-add" class="fixed mt-16 top-0 right-0 w-96 z-30 h-screen p-4 overflow-y-auto transition-transform translate-x-full border-l-2 bg-white shadow-2xl w-80" tabindex="-1" aria-labelledby="drawer-right-label">
    <h5 id="drawer-right-label" class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 bg-gray-300">添加新的类别</h5>
   <button type="button" data-drawer-hide="form-add" aria-controls="form-add" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center" >
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
      </svg>
      <span class="sr-only">Close menu</span>
   </button>

   <form class="mb-6">
      <div class="mb-6">
         <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">类别名称</label>
         <input type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="请填写类别名称" required>
      </div>
      <div class="mb-6">
         <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">类别介绍</label>
         <textarea id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="请填写类别介绍"></textarea>
      </div>
      <button type="submit" class="text-white justify-center flex items-center bg-blue-700 hover:bg-blue-800 w-full focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
        添加
    </button>
   </form>
</div>


</div>