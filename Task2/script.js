alert("js file linked successfully");
//variables
const shopname="webcart";
console.log("Welcome to "+shopname);
//shopname="newcart"; #gives error because const variable cannot be chaged
let shopowner="Prasanna";
console.log("Shop owner is "+shopowner);
shopowner="raju";
console.log("New shop owner is "+shopowner);

let cartItems = [];   // array to store items

document.addEventListener("DOMContentLoaded", () => {

    const addToCartButtons = document.querySelectorAll(".product button");
    const cartLink = document.getElementById("cartLink");

    // ADD TO CART
    addToCartButtons.forEach(button => {
        button.addEventListener("click", () => {

            const productName =
                button.parentElement.querySelector("h3").innerText;

            let confirmAdd = confirm("Add " + productName + " to cart?");

            if (confirmAdd) {
                cartItems.push(productName);
                alert(productName + " added to cart!");
            }
        });
    });

    // VIEW CART
    cartLink.addEventListener("click", (event) => {
        event.preventDefault();

        if (cartItems.length === 0) {
            alert("Your cart is empty!");
        } else {
            let cartMessage = "Items in your cart:\n\n";
            cartItems.forEach((item, index) => {
                cartMessage += (index + 1) + ". " + item + "\n";
            });
            alert(cartMessage);
        }
    });

});
