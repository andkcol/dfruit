function login(){
    document.getElementById("nousername").style.display = "none";
    document.getElementById("badpassword").style.display = "none";
    //document.getElementById("noUsername").style.display = "none";
  
    var email = document.getElementById("email").value;
    var pword = document.getElementById("pword").value;
  
    var noproblems = true;
  
    alert("the value of the email is : "+email);
  
    // make sure email isn't blank
  
    if(email == ""){
      document.getElementById("nousername").style.display = "inline";
      noproblems = false;
    }
    
    //make sure pw isn't blank

    var re = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    let psword = re.test(pword);
    if(psword){
      document.getElementById("badpassword").style.display = "inline";
      noproblems = false;
    }
  
    if(noproblems){
      //check if user is already in the db
      $.ajax({
        url: 'log.php',
        type: 'post',
        data:{email: email, pword: pword},
        async: false,
        success: function(data){
          if(data == "Success"){
            //redirect to the index.php page
            location.href="index.html";
          }else{
            //we have some issues and we display some notice
            alert("No user account");
          }
        },
        cache:false
      });
    }
    else{}
  }
  