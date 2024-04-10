document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("login-form").addEventListener("submit", function(event) {
      event.preventDefault();

      var usernameInput = document.getElementById("username");//get all the values from form
      var passwordInput = document.getElementById("password");
      var errorMessage = document.getElementById("error-message");

      if (usernameInput && passwordInput && errorMessage) {
          var username = usernameInput.value.toLowerCase();//to convert the username and passwords into lower case
          var password = passwordInput.value.toLowerCase();

          // Fetch IP address from server
          fetch('https://api.ipify.org?format=json')
              .then(response => response.json())
              .then(data => {
                  var userIPAddress = data.ip;

                  if (username === "admin" && password === "admin") {
                      if (userIPAddress === "157.50.25.50") { //https://api.ipify.org?format=json go to this and replace the ip adress
                          // Redirect to the desired page after successful login
                          window.location.href = "dashboard.html";
                      } else {
                          // Display error message below the submit button
                          errorMessage.textContent = "Access denied. Invalid IP address.";
                      }
                  } else {
                      // Display error message below the submit button
                      errorMessage.textContent = "Invalid username or password.";
                  }
              })
              .catch(error => {
                  console.error('Error fetching IP address:', error);
                  errorMessage.textContent = "Error fetching IP address.";
              });
      } else {
          console.error('One or more elements not found.');
      }
  });
});
