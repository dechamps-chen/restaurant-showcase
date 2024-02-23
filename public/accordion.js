const accordionElement = document.querySelector('#list_category');
categorylist = document.querySelectorAll(".categorylist");

// create an array of objects with the id, trigger element (eg. button), and the content element
const accordionItems = [

];
categorylist.forEach(element => {
    id = element.id.match(/\d+/)[0];
    list = {
        id: `li-category-heading-${id}`,
        triggerEl: document.querySelector(`#li-category-heading-${id}`),
        targetEl: document.querySelector(`#list-product-${id}`),
        active: true
    }
    accordionItems.push(list)
});

// options with default values
const optionsAccordion = {
    alwaysOpen: true,
    activeClasses: 'text-black',
    inactiveClasses: 'bg-red-100'
};

const accordion = new Accordion(accordionElement, accordionItems, optionsAccordion);
// accordion.close('li-category-heading');