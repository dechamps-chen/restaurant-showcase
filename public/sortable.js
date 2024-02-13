list_category = document.querySelector("#list_category");

new Sortable(list_category, {
    handle: '.handle', // handle's class
    animation: 150,
    chosenClass: "sortable-chosen",
    dragClass: "sortable-drag"
});