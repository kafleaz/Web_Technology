function validateForm() {
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
  
    // Check for empty fields
    if (username === "" || password === "") {
      document.getElementById("error-message").textContent = "Please fill in all fields.";
      return false;
    }
  
    // Simulate server-side authentication (replace with actual logic)
    if (username === "kafleaz" && password === "cabtech") {
      // Successful login
      alert("Login successful!");
      // Redirect to a secure page or perform other actions
      return false; // Prevent form submission
    } else {
      // Invalid credentials
      document.getElementById("error-message").textContent = "Invalid username or password.";
      return false;
    }
  }
  