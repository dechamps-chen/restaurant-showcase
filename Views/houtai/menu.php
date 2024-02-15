<?php

$title = "菜单 - 后台界面";

?>
<div id="msg" class="fixed block mx-auto left-0 right-0 z-40 w-full sm:mt-2 sm:w-1/6"></div>

<h1 class="text-3xl font-bold">菜单</h1>


<!-- Modal toggle -->


<!-- button-category-add -->
<button class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none" type="button" data-drawer-target="form-category-add" data-drawer-show="form-category-add" data-drawer-placement="right" data-drawer-backdrop="false" aria-controls="form-category-add" data-drawer-hide="form-product-add" data-drawer-body-scrolling="true">
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
         <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="请填写类别名称" required>
      </div>
      <div class="mb-6">
         <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">类别介绍</label>
         <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="请填写类别介绍"></textarea>
      </div>
      <button type="submit" class="text-white justify-center flex items-center bg-gray-800 hover:bg-gray-900 w-full focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none dark:focus:ring-gray-800">
         添加
      </button>
   </form>
</div>

<!-- button-product-add -->
<button class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none" type="button" data-drawer-target="form-product-add" data-drawer-show="form-product-add" data-drawer-placement="right" data-drawer-backdrop="false" aria-controls="form-product-add" data-drawer-hide="form-category-add" data-drawer-body-scrolling="true">
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
         <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="请填写类别名称" required>
      </div>
      <div class="mb-6">
         <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">产品价格</label>
         <input type="number" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5" placeholder="请填写价格" required>
      </div>
      <div class="mb-6">
         <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">选择产品类别</label>
         <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" required>
            <option selected value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
         </select>
      </div>
      <button type="submit" class="text-white justify-center flex items-center bg-gray-800 hover:bg-gray-900 w-full focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none">
         添加产品
      </button>
   </form>
</div>

<!-- form-category-edit -->
<div id="form-category-edit" class="fixed mt-16 top-0 right-0 w-96 z-30 h-screen p-4 overflow-y-auto transition-transform translate-x-full border-l-2 bg-white w-80" tabindex="-1" aria-labelledby="drawer-right-label">
   <h5 id="drawer-right-label" class="inline-flex items-center mb-4 text-base font-semibold text-gray-900">修改类别</h5>
   <button type="button" data-drawer-hide="form-category-edit" aria-controls="form-category-edit" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center">
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
      </svg>
      <span class="sr-only">Close menu</span>
   </button>

   <form class="mb-6" action="./editCategory" method="POST">
      <input type="hidden" id="form_category_edit_id" name="id">
      <input type="hidden" id="form_category_edit_order" name="order">
      <div class="mb-6">
         <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">类别名称</label>
         <input type="text" id="form_category_edit_name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-gray-500 dark:focus:border-gray-500" placeholder="请填写类别名称" required>
      </div>
      <div class="mb-6">
         <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">类别介绍</label>
         <textarea id="form_category_edit_description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" placeholder="请填写类别介绍"></textarea>
      </div>
      <button type="submit" class="text-white justify-center flex items-center bg-gray-800 hover:bg-gray-900 w-full focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none">
         保存
      </button>
      <button type="button" class="text-white justify-center flex items-center bg-red-700 hover:bg-red-600 w-full focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none">
         删除
      </button>
   </form>
</div>

<!-- ------------------- -->
<!-- <form action=" #"> -->

<ul id="list_category" class="relative mx-4 divide-y divide-gray-200 bg-white">
   <?php
   foreach ($data['category'] as $key_category => $category) {
   ?>
      <li id="'li-category-'<?php echo $category->id_category ?>" class="pb-2 sm:py-2">
         <div class="relative flex items-center space-x-4 rtl:space-x-reverse cursor-pointer">
            <div class="handle flex justify-center items-center text-gray-600 w-8 h-8 text-xs cursor-move">
               <i class="fa-solid fa-equals"></i>
            </div>
            <div>
               <h4 class="text-sm font-medium text-gray-900">
                  <?php echo $category->name_category ?>
               </h4>
               <?php
               if (!empty($category->description_category)) {
               ?>
                  <p class="text-xs"><?php echo $category->description_category ?></p>
               <?php
               }
               ?>
            </div>
            <button type="button" class="cursor-default" onclick="edit_category(<?php echo $category->id_category ?>,'<?php echo $category->name_category ?>','<?php echo $category->description_category ?>')" data-drawer-target="form-category-edit" data-drawer-show="form-category-edit" data-drawer-placement="right" data-drawer-backdrop="false" aria-controls="form-category-edit" data-drawer-hide="form-category-add" data-drawer-hide="form-product-add" data-drawer-body-scrolling="true">
               <i class="fa-solid fa-gear"></i>
            </button>
            <div class="absolute text-gray-400 end-2 text-sm">
               <i class="fa-solid fa-chevron-down"></i>
            </div>
         </div>
         <ul class="relative mx-4 divide-y divide-gray-200 bg-white">
            <?php
            foreach ($data['product'][$key_category] as $key => $product) {
               if (!empty($product)) {
            ?>
                  <div class="relative flex items-center space-x-4 rtl:space-x-reverse cursor-pointer">
                     <div class="handle flex justify-center items-center text-gray-600 w-8 h-8 text-xs cursor-move">
                        <i class="fa-solid fa-equals"></i>
                     </div>
                     <li>
                        <?php echo $product->name_product ?>
                        <?php echo $product->price_product ?>
                     </li>
                  </div>
            <?php
               }
            }
            ?>
         </ul>
      </li>
   <?php
   }
   ?>
</ul>

<button id="save_order" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none">
   保存
</button>
<!-- </form> -->
<!-- ------------ -->

<?php var_dump($data) ?>