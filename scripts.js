function callMe() {
    var phoneNumber = document.getElementById('phone').value;
    var phoneRegex = /^[0-9]{10}$/; // Basic validation for a 10-digit phone number

    if (phoneNumber === '') {
        alert('Please enter a mobile number.');
        return;
    }

    if (!phoneRegex.test(phoneNumber)) {
        alert('Please enter a valid 10-digit mobile number.');
        return;
    }

    // Simulate a call action
    alert('Calling ' + phoneNumber);
    // In a real-world application, you would handle this differently
    // e.g., send the number to a server or trigger an API
}


document.getElementById('appointmentForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Extract form data
    var name = document.getElementById('name').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var service = document.getElementById('service').value;
    var message = document.getElementById('message').value;

    // Simulate sending data (Replace this with actual implementation)
    alert('Appointment request sent!\n' +
        'Name: ' + name + '\n' +
        'Phone: ' + phone + '\n' +
        'Email: ' + email + '\n' +
        'Service: ' + service + '\n' +
        'Message: ' + message);

    // Clear form fields
    this.reset();
});




function callMe() {
    const phoneNumber = document.getElementById('phone').value;
    if (phoneNumber) {
        alert(`We will call you at ${phoneNumber}`);
    } else {
        alert('Please enter your mobile number.');
    }
}
