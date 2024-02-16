list_category = document.querySelector("#list_category");
form_category_edit = document.querySelector("#form-category-edit");
form_category_edit_id = document.querySelector("#form_category_edit_id");
form_category_edit_name = document.querySelector("#form_category_edit_name");
form_category_edit_description = document.querySelector("#form_category_edit_description");
save_order = document.querySelector("#save_order");
msg = document.querySelector("#msg");
form_product_add_option = document.querySelectorAll("#form-product-add form select option")

new Sortable(list_category, {
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
    order_category = document.querySelectorAll("#list_category li.categorylist");
    id = []
    order_category.forEach(category => {
        id.push(category.id.match(/\d+/)[0]);
    });
    fetch('http://localhost/applications/projet-xbl/houtai/orderMenu/',
        {
            method: 'POST',
            headers: {
                'Content-type': 'application/json'
            },
            body: JSON.stringify({ id })

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
    console.log(id);
})