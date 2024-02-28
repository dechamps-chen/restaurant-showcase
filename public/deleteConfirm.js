deleteCategoryEl = document.querySelector("#deleteCategoryEl");
deleteProductEl = document.querySelector("#deleteProductEl");

function deleteCategoryConfirm() {
    deleteCategoryEl.innerHTML = "<div class='flex space-x-2'>" +
        "<button type='submit' name='deleteCategory' class='text-white justify-center flex items-center bg-red-700 hover:bg-red-600 w-full focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none'>" +
        "删除" +
        "</button>" +
        "<button type='button' onclick='deleteCategoryCancel()' class='text-white justify-center flex items-center bg-gray-800 hover:bg-gray-900 w-full focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none'>" +
        "取消" +
        "</button>" +
        "</div>" +
        "<span class='text-red-700'>确认删除吗？</span>"
}

function deleteCategoryCancel() {
    deleteCategoryEl.innerHTML = "<button type='button' onclick='deleteCategoryConfirm()' class='text-white justify-center flex items-center bg-red-700 hover:bg-red-600 w-full focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none'>" +
        "删除" +
        "</button>"
}

function deleteProductConfirm() {
    deleteProductEl.innerHTML = "<div class='flex space-x-2'>" +
        "<button type='submit' name='deleteProduct' class='text-white justify-center flex items-center bg-red-700 hover:bg-red-600 w-full focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none'>" +
        "删除" +
        "</button>" +
        "<button type='button' onclick='deleteProductCancel()' class='text-white justify-center flex items-center bg-gray-800 hover:bg-gray-900 w-full focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none'>" +
        "取消" +
        "</button>" +
        "</div>" +
        "<span class='text-red-700'>确认删除吗？</span>"
}

function deleteProductCancel() {
    deleteProductEl.innerHTML = "<button type='button' onclick='deleteProductConfirm()' class='text-white justify-center flex items-center bg-red-700 hover:bg-red-600 w-full focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 focus:outline-none'>" +
        "删除" +
        "</button>"
}