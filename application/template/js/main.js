$(document).ready(function(){
  $(document.body).on('click', "#login", function(event){
    event.preventDefault();
    $(".popup").show();
  });
  $("#btnlogin").click(function(e){
    e.preventDefault();
    var username = $("#username").val();
    var password = $("#password").val();
    $.ajax({
        url:base_url + 'index.php/main/process_login',
        type: 'POST',
        data: {username: username, password: password},
        success: function(data){
            if(data=="ok")
            {
                $(".popup").hide();
                var li= $("#login").parent();
                $("#login").remove();
                li.append('<a href="#" id="logout">Log Out</a>');
                var signup = li.prev("li").find('a');
                signup.attr('id', 'currentuser');
                signup.html("Hello, "+ username);
                location.reload();
            }
            else if(data=="admin"){
                window.location.assign(base_url+"index.php/main/indexadmin")
            }
            else
            {
                alert("Username hoac password sai!");
            }
        },
        error: function(e) {
            /* Act on the event */
            alert("Quá trình login bị lỗi");
        }
    });
  });

  $(document.body).on('click', "#logout", function(event){
    event.preventDefault();
    $.ajax({
        url:base_url + 'index.php/main/process_logout',
        success: function(){
                var li= $("#logout").parent();
                $("#logout").remove();
                li.append('<a href="#" id="login">Log In</a>');

                var signup = li.prev("li").find('a');
                signup.attr('id', 'signup');
                signup.html("Sign Up");
                window.location.assign(base_url+"index.php/main/index")

        },
        error: function(e) {
            /* Act on the event */
            alert(e);
        }

    });
  });

  $(document.body).on("click", "#signup", function(event)
  {
    event.preventDefault();
    $(".signup").show();
  });

  $(document.body).on("click", "#btnsignup", function(event)
  {
    event.preventDefault();
    var fullname = $("#fullname").val();
    var username = $("#username1").val();
    var password = $("#password1").val();
    var email = $("#email").val();
    $.ajax({
        url:base_url + 'index.php/main/process_signup',
        type: "POST",
        data: {fullname:fullname,username:username,password:password,email:email},
        success: function(data){
            $('.signup').hide();
        },
        error: function(e) {
            /* Act on the event */
            alert(e);
        }

    });
  });
  $(document.body).on("click", "#currentuser", function(event)
  {
    event.preventDefault();
  });
  $(document.body).on("click", ".btnclose", function(event)
  {
    $(".signup").hide();
    $(".popup").hide();
  });
  $(document.body).on("click", "#btnmodelans", function(event)
  {
    $(".ans_script").toggle();
  });

});