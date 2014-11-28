function contactUS(){
  alert('hey');
/*
    var owner_email = $("#owner_email").val();
    var contactForm = new FormData($("#contactForm")[0]); contactForm.append("to_email", owner_email);   
    $.ajax({
      type: "POST",
      async: false,
      cache: false,
      contentType: false,
      processData: false,
      url: "contactUs.php",
      data: contactForm,
    }).done(function (response) {
      ($("#contactForm")[0]).reset();
      $(".success").fadeIn();
      $.notifyBar({
        cssClass: "success",
        delay: 3500,
        html: "Your message has been sent succesfully!<strong> We will be in touch soon."
      });
      setInterval(homeReturn(),4000);
    })
  */
    event.preventDefault();
  }