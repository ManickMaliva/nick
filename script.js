   // JavaScript code
    document.getElementById('register').addEventListener('click', function() {
      // Get form values
      var firstName = document.getElementById('first-name').value;
      var lastName = document.getElementById('last-name').value;
      var company = document.getElementById('company').value;
      var email = document.getElementById('email').value;
      var areaCode = document.getElementById('area-code').value;
      var phoneNumber = document.getElementById('phone-number').value;
      var subject = document.getElementById('subject').value;
      var existingCustomer = document.getElementById('yes').checked ? 'Yes' : 'No';
      
      // Display registration details
      alert('Registration Details:\n\n' +
            'First Name: ' + firstName + '\n' +
            'Last Name: ' + lastName + '\n' +
            'Company: ' + company + '\n' +
            'Email: ' + email + '\n' +
            'Phone: ' + areaCode + '-' + phoneNumber + '\n' +
            'Subject: ' + subject + '\n' +
            'Existing Customer: ' + existingCustomer);
      
      // Reset form fields
      document.getElementById('registration-form').reset();
    });