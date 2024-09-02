document.getElementById('contact-form').addEventListener('submit', function(event) {
        
    var name = document.getElementById('name').value.trim();
    var email = document.getElementById('email').value.trim();
    var comment = document.getElementById('comment').value.trim();


    if (name === '' || email === '' || comment === '') {
        event.preventDefault(); 
        document.getElementById('form-messages').innerHTML = '<p class="text-danger">Please fill out all fields.</p>';
    } else if (!validateEmail(email)) {
        event.preventDefault(); 
        document.getElementById('form-messages').innerHTML = '<p class="text-danger">Please enter a valid email address.</p>';
    }

});

function validateEmail(email) {
    return /\S+@\S+\.\S+/.test(email);
}