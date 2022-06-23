
      <h1>Login</h1>
      <form method="post" action="login.php">
        <div class="txt_field">
          <input type="text" id="username" placeholder="Username...">
        </div>
        <div class="txt_field">
          <input type="password" id ="password" placeholder="Password...">
        </div>
        <input type="button" value="Login" id="login">
        <div class="signup_link">
          Not a member? <a href='/MVC_todo/users/signup/'>Sign up</a>
        </div>
      </form>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script type="text/javascript">
        $(document).ready(function (){
          $("#login").on('click', function() {
            var username = $("#username").val();
            var password = $("#password").val();
            if (username == "" || password == "")
              alert('Please check your inputs');
            $.ajax(
              {
                url:'login.php',
                method: 'POST',
                data:{
                  login: 1,
                  usernamePHP: username,
                  passwordPHP: password
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
    <p id = "response"></p>