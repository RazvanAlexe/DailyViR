 $(document).ready(function (){
    $("#login").on('click', function() {
      var username = $("#username").val();
      var password = $("#password").val();
      if (username == "" || password == "")
        alert('Please check your inputs');
      $.ajax(
        {
          method: 'POST',
          url:'/MVC_todo/users/login',
          data:{
            login: 1,
            usernamePHP: username,
            passwordPHP: password
          },
          success: function (response){
            if(response)
              window.location.href = "/MVC_todo/";
          },
          dataType: 'text'
        }
      );;
    });
    $("#signup").on('click', function() {
        var username = $("#username").val();
        var password = $("#password").val();
        var email = $("#email").val();
        var country = $("#country").val();
        var gender = $("#gender").val();

        if (username == "" || password == "" || email == "" || country == "" || gender == "")
          alert('Please check your inputs');
        $.ajax(
          {
            url:'sign_up.php',
            method: 'POST',
            data:{
              signup: 1,
              usernamePHP: username,
              passwordPHP: password,
              emailPHP: email,
              countryPHP: country,
              genderPHP: gender
            },
            success: function (response){
              if(response)
                window.location.href = "/MVC_todo/";
            },
            dataType: 'text'
          }
        );
      });
  });
  const acc = document.getElementsByClassName("accordion");

  acc[0].addEventListener("click", function () {
      this.classList.toggle("active");
      const panel = this.nextElementSibling;
      if (panel.style.display === "grid") {
          panel.style.display = "none";
      } else {
          panel.style.display = "grid";
      }
  });

  acc[1].addEventListener("click", function () {
      this.classList.toggle("active");
      const panel = this.nextElementSibling;
      if (panel.style.display === "block") {
          panel.style.display = "none";
      } else {
          panel.style.display = "block";
      }
  });