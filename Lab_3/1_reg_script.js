function validateForm() {
    const username = document.getElementById("username").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("password_confirm").value;
  
    // Basic validation
    if (username === "" || email === "" || password === "") {
      alert("Please fill in all required fields.");
      return false; // Prevent form submission
    }
  
    // More specific validation (improve as needed)
    if (!isValidEmail(email)) {
      alert("Please enter a valid email address.");
      return false;
    }
  
    if (password.length < 8) {
      alert("Password must be at least 8 characters long.");
      return false;
    }
  
    if (password !== confirmPassword) {
      alert("Passwords do not match.");
      return false;
    }
  
    // Additional validation for phone number, password strength, etc.
    // ...
  
    return true; // Allow form submission if validation passes
  }
  
  function isValidEmail(email) {
    // Regular expression for basic email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }
  