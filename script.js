// Handle Remember Me and form submission
document.getElementById("loginForm").addEventListener("submit", function(e) {
    e.preventDefault();
    
    let studentNumber = document.getElementById("studentNumber").value;
    let password = document.getElementById("password").value;
    let remember = document.getElementById("rememberMe").checked;

    if (studentNumber && password) {
        alert("Login successful!\nStudent: " + studentNumber + "\nRemember me: " + remember);
    } else {
        alert("Please fill in all fields.");
    }
});
