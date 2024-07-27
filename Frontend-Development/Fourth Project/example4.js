/*
   Example4:
   A shopping cart that can add items, remove items, and display the current list of items.
*/
function createShoppingCart() {
    let cart = [];  // This is the private variable

    // This is the inner function (closure) to add an item to the cart
    function addItem(item) {
        cart.push(item);
        console.log(`Added ${item}. Current cart: ${cart.join(', ')}`);
    }

    // Another inner function (closure) to remove an item from the cart
    function removeItem(item) {
        const index = cart.indexOf(item);
        if (index > -1) {
            cart.splice(index, 1);
            console.log(`Removed ${item}. Current cart: ${cart.join(', ')}`);
        } else {
            console.log(`${item} is not in the cart.`);
        }
    }

    // Another inner function (closure) to display the current cart
    function displayCart() {
        console.log(`Current cart: ${cart.join(', ')}`);
    }

    // Return the inner functions so we can use them outside
    return {
        addItem: addItem,
        removeItem: removeItem,
        displayCart: displayCart
    };
}

const myCart = createShoppingCart();

myCart.addItem('Apple');    // Added Apple. Current cart: Apple
myCart.addItem('Banana');   // Added Banana. Current cart: Apple, Banana
myCart.removeItem('Apple'); // Removed Apple. Current cart: Banana
myCart.displayCart();       // Current cart: Banana
myCart.removeItem('Orange'); // Orange is not in the cart.

