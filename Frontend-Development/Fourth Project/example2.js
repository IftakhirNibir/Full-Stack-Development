/*
  Example2:
  Imagine a Bank Account
  You have a bank account where you can deposit and withdraw money. The account balance is maintained even after you perform a transaction. The bank account scenario can be modeled using closures to keep track of the balance.
*/

function createBankAccount(initialBalance) {
    let balance = initialBalance;  // This variable is inside the outer function

    // This is the inner function (closure) to deposit money
    function deposit(amount) {
        balance += amount;  // Modify the balance variable from the outer function
        console.log(`Deposited ${amount}. New balance: ${balance}`);
    }

    // Another inner function (closure) to withdraw money
    function withdraw(amount) {
        if (balance >= amount) {  // Check if there is enough balance
            balance -= amount;  // Deduct amount from the balance
            console.log(`Withdrew ${amount}. New balance: ${balance}`);
        } else {
            console.log('Insufficient funds!');
        }
    }

    // Function to check the balance
    function checkBalance() {
        console.log(`Current balance: ${balance}`);
    }

    // Return the inner functions so we can use them outside
    return {
        deposit: deposit,
        withdraw: withdraw,
        checkBalance: checkBalance
    };
}

// Create a bank account with an initial balance of $100
const myBankAccount = createBankAccount(100);

myBankAccount.checkBalance();  // Output: Current balance: 100

myBankAccount.deposit(50);     // Output: Deposited 50. New balance: 150
myBankAccount.checkBalance();  // Output: Current balance: 150

myBankAccount.withdraw(30);    // Output: Withdrew 30. New balance: 120
myBankAccount.checkBalance();  // Output: Current balance: 120

myBankAccount.withdraw(150);   // Output: Insufficient funds!
myBankAccount.checkBalance();  // Output: Current balance: 120
