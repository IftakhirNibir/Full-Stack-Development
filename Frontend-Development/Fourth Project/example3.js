/* 
   Example3:
   A personalized greeting system that remembers a user's name and provides customized greetings.
*/

function createGreeter(name) {
    // This is the private variable
    let userName = name;

    // This is the inner function (closure) to greet the user
    function greet() {
        console.log(`Hello, ${userName}! Welcome back!`);
    }

    return greet; // Return the inner function so we can use it outside
}

const greetJohn = createGreeter('John')(); // Hello, John! Welcome back!
const greetJane = createGreeter('Jane')(); // Hello, Jane! Welcome back!
