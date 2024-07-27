/* 
    Example 1:  
    Imagine a Vending Machine
    Let's say you have a vending machine. You put some coins into the machine, and then you press a button to get a snack. Even after you press the button, the vending machine "remembers" how many coins you put in. The vending machine is like a closure that remembers the coins (variables) you put in.
*/
function vendingMachine() {
    let coins = 0;  // This variable is inside the outer function

    // This is the inner function (closure)
    function insertCoins(amount) {
        coins += amount;  // Modify the coins variable from the outer function
        console.log(`You have inserted ${coins} coins`);
    }

    // Another inner function to dispense a snack
    function dispenseSnack() {
        if (coins >= 3) {  // Check if there are enough coins
            console.log('Dispensing snack...');
            coins -= 3;  // Deduct coins for the snack
        } else {
            console.log('Not enough coins!');
        }
        console.log(`Remaining coins: ${coins}`);
    }

    // Return the inner functions so we can use them outside
    return {
        insertCoins: insertCoins,
        dispenseSnack: dispenseSnack
    };
}

// Use the vending machine
const myVendingMachine = vendingMachine();

myVendingMachine.insertCoins(2);  // Output: You have inserted 2 coins
myVendingMachine.dispenseSnack(); // Output: Not enough coins! Remaining coins: 2

myVendingMachine.insertCoins(2);  // Output: You have inserted 4 coins
myVendingMachine.dispenseSnack(); // Output: Dispensing snack... Remaining coins: 1
