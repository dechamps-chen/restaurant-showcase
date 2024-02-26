// import { Drawer } from 'flowbite';

list_category = document.querySelector("#list_category");
list_product = document.querySelectorAll(".list_product");

// Flowbite Drawers
btn_category_add = document.querySelector("#btn_category_add");

$form_category_add = document.querySelector("#form-category-add");
$form_category_edit = document.querySelector("#form-category-edit");
$form_product_add = document.querySelector("#form-product-add");
$form_product_edit = document.querySelector("#form-product-edit");


form_category_edit = document.querySelector("#form-category-edit");
form_category_edit_id = document.querySelector("#form_category_edit_id");
form_category_edit_name = document.querySelector("#form_category_edit_name");
form_category_edit_description = document.querySelector("#form_category_edit_description");

form_product_add_id_cat = document.querySelector("#form-product-add form #id_category");
form_product_add_order_product = document.querySelector("#form-product-add form #order_product");
form_product_add_select = document.querySelector("#form-product-add form select");

form_product_edit_id = document.querySelector("#form_product_edit_id");
form_product_edit_name = document.querySelector("#form_product_edit_name");
// photo.............
form_product_edit_price = document.querySelector("#form_product_edit_price");
form_product_edit_category = document.querySelector("#form_product_edit_category");
form_product_edit_order = document.querySelector("#form_product_edit_order");

save_order = document.querySelector("#save_order");
msg = document.querySelector("#msg");

const options = {
    placement: 'right',
    backdrop: false,
    bodyScrolling: true,
};
const drawer_category_add = new Drawer($form_category_add, options);
const drawer_category_edit = new Drawer($form_category_edit, options);
const drawer_product_add = new Drawer($form_product_add, options);
const drawer_product_edit = new Drawer($form_product_edit, options);

// Ouvrir le formulaire d'ajout category et fermer les autres
btn_category_add.addEventListener('click', () => {
    drawer_category_add.show();
    drawer_category_edit.hide();
    drawer_product_add.hide();
    drawer_product_edit.hide();
})

// Rendre la liste category reorganisable avec SortableJS
new Sortable(list_category, {
    handle: '.handle',
    animation: 150,
    chosenClass: "sortable-chosen",
    dragClass: "sortable-drag"
});

// Rendre les listes product reorganisable avec SortableJS
list_product.forEach(element => {
    new Sortable(element, {
        handle: '.handle',
        animation: 150,
        chosenClass: "sortable-chosen",
        dragClass: "sortable-drag"
    });
});

// Bouton de modification d'une categorie
function edit_category() {
    // Fermer les autres formulaires
    event.stopPropagation();
    drawer_category_edit.show();
    drawer_category_add.hide();
    drawer_product_add.hide();
    drawer_product_edit.hide();

    // Recuperer [id_category, name_category, description_category] de la categorie selectionnee
    id_category = event.target.parentElement.parentElement.parentElement.id.match(/\d+/);
    name_category = event.target.parentElement.parentElement.querySelector("#name_category").innerHTML;
    description_category = event.target.parentElement.parentElement.querySelector("#description_category");
    // // Modifier les inputs du formulaire form-category-edit
    form_category_edit_id.value = id_category;
    form_category_edit_name.value = name_category;
    if (description_category != null) {
        form_category_edit_description.value = description_category.innerHTML;
    }
    else {
        form_category_edit_description.value = "";
    }
}

// Bouton d'ajout d'un nouveau produit (situant dans chaque liste Category)
function add_product() {
    // Fermer les autres formulaires
    drawer_category_add.hide();
    drawer_category_edit.hide();
    drawer_product_add.show();
    drawer_product_edit.hide();

    // Recuperer id (category) de la liste parent
    id_category = event.target.parentElement.parentElement.id.match(/\d+/);
    // Modifier les inputs hidden [ id_category et order_product ] du formulaire form-product-add
    form_product_add_id_cat.value = id_category
    order_product = event.target.parentElement.parentElement.querySelectorAll(".list_product li").length + 1;
    form_product_add_order_product.value = order_product;
    form_product_add_select.value = id_category
    console.log(order_product);
}

// Lors d'un changement sur le select (choix de category) du formulaire form-product-add
form_product_add_select.addEventListener('change', () => {
    // Changer l'input hidden [ order_product ] selon la categorie
    order_product = document.querySelectorAll(`#list-product-${form_product_add_select.value} li`).length + 1
    form_product_add_order_product.value = order_product;
    console.log(order_product);
})

// Bouton de modification d'une categorie
function edit_product() {
    // Fermer les autres formulaires
    event.stopPropagation();
    drawer_category_edit.hide();
    drawer_category_add.hide();
    drawer_product_add.hide();
    drawer_product_edit.show();

    // Recuperer [id_category, name_category, description_category] de la categorie selectionnee
    // id_category = event.target.parentElement.parentElement.parentElement.id.match(/\d+/);
    // name_category = event.target.parentElement.parentElement.querySelector("#name_category").innerHTML;
    // description_category = event.target.parentElement.parentElement.querySelector("#description_category");
    id_product = event.target.id.match(/\d+/)[0];
    name_product = event.target.querySelector(".productName").innerHTML;
    price_product = event.target.querySelector(".productPrice").innerHTML.match(/\d+\.\d+/)[0]
    id_category_product = event.target.parentElement.parentElement.id.match(/\d+/)[0]

    // // Modifier les inputs du formulaire form-category-edit
    form_product_edit_id.value = id_product
    form_product_edit_name.value = name_product
    form_product_edit_price.value = price_product
    form_product_edit_category.value = id_category_product
}

// Bouton sauvegarder l'ordre des liste category et product
save_order.addEventListener('click', (data) => {
    order_cat = [];
    order_prod = [];
    order_category = document.querySelectorAll("#list_category li.categorylist");
    order_category.forEach(category => {
        order_product = category.querySelectorAll(".list_product li");

        list = [];
        order_product.forEach(product => {
            list.push(product.id.match(/\d+/)[0]);

        });
        order_prod.push(list);
        order_cat.push(category.id.match(/\d+/)[0]);
    });
    // Stocker l'ordre de la liste category et des liste product dans la variable data[] en format json
    data = {
        order_cat: order_cat,
        order_prod: order_prod
    }

    // Stocker dans la base de donnees (fetch method POST)
    fetch('http://localhost/applications/projet-xbl/houtai/orderMenu/',
        {
            method: 'POST',
            headers: {
                'Content-type': 'application/json'
            },
            body: JSON.stringify({ data })

        })
        .then(res => res.json())
        // Affichage du message recu pendant 3s (Modification reussi)
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
});