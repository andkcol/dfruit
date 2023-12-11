function create() {
    $.ajax({
        url: 'createback.php',
        type: 'post',
        data: { title: title, desc: desc, loc:loc, time:time, date:date, image:image},
        success: function(data) {
          if (data == "success") {
            alert("Event created");
          } else if (data == "exists") {
            alert("Event creation failed");
          } else {
            alert("Unknown response from the server");
          }
        },
        cache: false
      });
  }
  