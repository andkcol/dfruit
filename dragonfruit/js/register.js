function register() {
  var email = document.getElementById("email").value;
  var pword = document.getElementById("pword").value;

  var noproblems = true;

  if (email === "") {
    document.getElementById("nousername").style.display = "inline";
    noproblems = false;
  }

  var re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
  let psword = re.test(pword);
  if (psword) {
    document.getElementById("badpassword").style.display = "inline";
    noproblems = false;
  }

  if (noproblems) {
    $.ajax({
      url: 'register.php',
      type: 'post',
      data: { email: email, pword: pword },
      success: function(data) {
        if (data == "success") {
          // Registration was successful, you can redirect or display a success message here.
          alert("Registration successful!");
        } else if (data == "exists") {
          alert("Registration failed");
        } else {
          alert("Unknown response from the server");
        }
      },
      cache: false
    });
  } else {}
}
