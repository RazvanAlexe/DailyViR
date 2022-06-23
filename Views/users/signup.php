    <h1>Sign up</h1>
      <form action="Sign_up.php" method="post">
        <div class="txt_field">
          <input type="text" id="username" placeholder="Username...">
        </div>
        <div class="txt_field">
            <input type="text" id="email" placeholder="Email...">
        </div>
        <div class="txt_field">
          <input type="password" id ="password" placeholder="Password...">
        </div>
        <div class="txt_field">
            <input type="text" id="country" placeholder="Country...">
        </div>
        <div class="txt_field">
            <input type="text" id="gender" placeholder="Gender...">
        </div>
        <input type="button" value="Signup" id="signup">
      </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function (){
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
                  $("#response").html(response);
                  if(response.indexOf('success')>= 0)
                    window.location ='../Home Page/home_page.php';
                },
                dataType: 'text'
              }
            );
          });
        });
      </script>