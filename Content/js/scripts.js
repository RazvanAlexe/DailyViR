const validateEmail = (email) => {
  return String(email)
    .toLowerCase()
    .match(
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
};
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
      );
    });
    $("#logout").on('click', function() {
      $.ajax(
        {
          method: 'POST',
          url:'/MVC_todo/users/view',
          data:{
            logout: 1,
          },
          success: function (response){
            if(response)
              window.location.href = "/MVC_todo/";
          },
          dataType: 'text'
        }
      );
    });
    $("#favourite").on('click', function() {
      var v = document.getElementById('id_video');
      var id_video = v.getAttribute('class');
      var t = document.getElementById('title');
      var title = t.getAttribute('class');
      $.ajax(
        {
          method: 'POST',
          url:'/MVC_todo/videos/view/'+id_video,
          data:{
            favourite: 1,
            id_videoPHP: id_video,
            titlePHP: title
          }
        }
      );
    });
    $("#uploadUrl").on('click', function() {
      var url = $("#url").val();
      var titleUrl = $("#titleUrl").val();
      var descriptionUrl = $("#descriptionUrl").val();
      var categoryUrl = $("#categoryUrl").val();
      $.ajax(
        {
          url:'/MVC_todo/videos/create',
          method: 'POST',
          data:{
            create: 1,
            urlPHP: url,
            titleUrlPHP: titleUrl,
            descriptionUrlPHP: descriptionUrl,
            categoryUrlPHP: categoryUrl
          },
          success: function (response){
            if(response)
              window.location.href = "/MVC_todo/users/studio";
          },
          dataType: 'text'
        }
      );
    });
    $("#signup").on('click', function() {
        var username = $("#username").val();
        var password = $("#password").val();
        var email = $("#email").val();
        var country = $("#country").val();
        var gender = $("#gender").val();

        if (username == "" || password == "" || email == "" || country == "" || gender == "")
          alert('Please check your inputs');
        else
        {
          if (!validateEmail(email)){
            alert("Invalid email format");
          }
          else
          {
            console.log(username);
            $.ajax(
              {
                url:'/MVC_todo/users/signup',
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
          }
        }
      });
      $("#export").on('click', function() {
        $.ajax(
          {
            url:'/MVC_todo/users/view',
            method: 'POST',
            data:{
              export: 1,
            }
          }
        );
      });
      $("#changeEmail").on('click', function() {
        var newEmail = $("#newEmail").val();
        $.ajax(
          {
            url:'/MVC_todo/users/view',
            method: 'POST',
            data:{
              changeEmail: 1,
              newEmailPHP: newEmail
            }
          }
        );
      });
      $("#changePassword").on('click', function() {
        var newPassword = $("#newPassword").val();
        $.ajax(
          {
            url:'/MVC_todo/users/view',
            method: 'POST',
            data:{
              changePassword: 1,
              newPasswordPHP: newPassword
            }
          }
        );
      });
      $("#searchSubmit").on('click', function() {
        var searchText = $("#searchText").val();
        searchText = searchText.replace('%20','&')
        window.location.href = "/MVC_todo/videos/search/"+searchText;
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