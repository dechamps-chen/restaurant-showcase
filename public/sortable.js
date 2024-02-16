list_category = document.querySelector("#list_category");
list_product = document.querySelector("#list_product");
form_category_edit = document.querySelector("#form-category-edit");
form_category_edit_id = document.querySelector("#form_category_edit_id");
form_category_edit_name = document.querySelector("#form_category_edit_name");
form_category_edit_description = document.querySelector("#form_category_edit_description");
save_order = document.querySelector("#save_order");
msg = document.querySelector("#msg");
form_product_add_id_cat = document.querySelector("#form-product-add form #id_category");
form_product_add_order_product = document.querySelector("#form-product-add form #order_product");
form_product_add_option = document.querySelectorAll("#form-product-add form select option");

new Sortable(list_category, {
    handle: '.handle', // handle's class
    animation: 150,
    chosenClass: "sortable-chosen",
    dragClass: "sortable-drag"
});

new Sortable(list_product, {
    handle: '.handle', // handle's class
    animation: 150,
    chosenClass: "sortable-chosen",
    dragClass: "sortable-drag"
});

function edit_category(id_category, name_category, description_category) {
    form_category_edit_id.value = id_category;
    form_category_edit_name.value = name_category;
    form_category_edit_description.value = description_category;
}

function add_product(id_category) {
    form_product_add_id_cat.value = id_category
    form_product_add_order_product.value = event.target.parentElement.querySelectorAll("#list_product li").length + 1;
    form_product_add_option.forEach(element => {
        if (element.value == id_category) {
            element.setAttribute("selected", "");
        }
        else {
            element.removeAttribute("selected");
        }
    });
}

save_order.addEventListener('click', () => {
    data = [];
    order_category = document.querySelectorAll("#list_category li.categorylist");
    order_cat = [];
    order_prod = [];
    order_category.forEach(category => {
        order_product = category.querySelectorAll("#list_product li");

        list = [];
        order_product.forEach(product => {
            list.push(product.id.match(/\d+/)[0]);

        });
        order_prod.push(list);
        order_cat.push(category.id.match(/\d+/)[0]);
    });
    data = {
        order_cat: order_cat,
        order_prod: order_prod
    }
    fetch('http://localhost/applications/projet-xbl/houtai/orderMenu/',
        {
            method: 'POST',
            headers: {
                'Content-type': 'application/json'
            },
            body: JSON.stringify({ data })

        })
        .then(res => res.json())
        .then(res => {
            msg.classList.replace("hidden", "block");
            msg.innerHTML = `<div class="text-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-200" role="alert">
    <span class="font-medium">${res}</span>
  </div>`
            setTimeout(function () {

                msg.classList.replace("block", "hidden");
                msg.innerHTML = "";

            }, 3000);
        })
    console.log(data);
})