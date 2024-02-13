<?php

use Symfony\Component\Validator\Constraints\Length;

$title = "菜单 - 后台界面";

?>

<div class="bg-red-100">
   <h1 class="text-3xl font-bold">菜单</h1>


   <!-- Modal toggle -->


   <!-- button-category-add -->
   <button class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none" type="button" data-drawer-target="form-category-add" data-drawer-show="form-category-add" data-drawer-placement="right" data-drawer-backdrop="false" aria-controls="form-category-add" data-drawer-hide="form-product-add">
      添加新的类别
   </button>

   <!-- form-category-add -->
   <div id="form-category-add" class="fixed mt-16 top-0 right-0 w-96 z-30 h-screen p-4 overflow-y-auto transition-transform translate-x-full border-l-2 bg-white w-80" tabindex="-1" aria-labelledby="drawer-right-label">
      <h5 id="drawer-right-label" class="inline-flex items-center mb-4 text-base font-semibold text-gray-900">添加新的类别</h5>
      <button type="button" data-drawer-hide="form-category-add" aria-controls="form-category-add" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center">
         <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
         </svg>
         <span class="sr-only">Close menu</span>
      </button>

      <form class="mb-6" action="./addCategory" method="POST">
         <input type="hidden" name="order" value="<?php count($data['category']) + 1 ?>">
         <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">类别名称</label>
            <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="请填写类别名称" required>
         </div>
         <div class="mb-6">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">类别介绍</label>
            <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="请填写类别介绍"></textarea>
         </div>
         <button type="submit" class="text-white justify-center flex items-center bg-gray-800 hover:bg-gray-900 w-full focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none dark:focus:ring-blue-800">
            添加
         </button>
      </form>
   </div>

   <!-- button-product-add -->
   <button class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none" type="button" data-drawer-target="form-product-add" data-drawer-show="form-product-add" data-drawer-placement="right" data-drawer-backdrop="false" aria-controls="form-product-add" data-drawer-hide="form-category-add">
      添加新的产品
   </button>

   <!-- form-product-add -->
   <div id="form-product-add" class="fixed mt-16 top-0 right-0 w-96 z-30 h-screen p-4 overflow-y-auto transition-transform translate-x-full border-l-2 bg-white w-80" tabindex="-1" aria-labelledby="drawer-right-label">
      <h5 id="drawer-right-label" class="inline-flex items-center mb-4 text-base font-semibold text-gray-900">添加新的产品</h5>
      <button type="button" data-drawer-hide="form-product-add" aria-controls="form-product-add" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center">
         <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
         </svg>
         <span class="sr-only">Close menu</span>
      </button>

      <form class="mb-6" action="#" method="POST">
         <div class="mb-6">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">图片上传</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" id="file_input" type="file">
         </div>
         <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">产品名称</label>
            <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="请填写类别名称" required>
         </div>
         <div class="mb-6">
            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">产品价格</label>
            <input type="number" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="请填写价格" required>
         </div>
         <div class="mb-6">
            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">选择产品类别</label>
            <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
               <option selected value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
            </select>
         </div>
         <button type="submit" class="text-white justify-center flex items-center bg-gray-800 hover:bg-gray-900 w-full focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none">
            添加产品
         </button>
      </form>
   </div>

   <?php var_dump($data['category']) ?>
</div>