function attend(){
$.ajax({
    url: 'attback.php',
    type: 'post',
    data: { uID: uID, eID: eID},
    success: function(data) {
      if (data == "success") {
        // Registration was successful, you can redirect or display a success message here.
        alert("Attending successful!");
      } else if (data == "exists") {
        alert("Attending failed");
      } else {
        alert("Unknown response from the server");
      }
    },
    cache: false
  });
}