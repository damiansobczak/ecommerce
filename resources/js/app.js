require('./bootstrap');

/*
* Responsive menu toggling
*
*/

const menu = document.querySelector('.menu__items');
const menuItem = document.querySelector('.menu__toggle');
menuItem.addEventListener("click", () => {
    menu.classList.toggle("menu__items--open");
});