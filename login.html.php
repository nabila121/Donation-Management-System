<html>
<head>
<title>Login and Registration Form Design</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class=login-page>
    <div class="form">
        <form class="register-form">
        <input type="text" placeholder="user name"/>
        <input type="text" placeholder="password"/>
        <input type="text" placeholder="email id"/>
        <button>create</button>
            <p class="message">Already Registered? <a href="#">Log in</a>
            </p>
        </form>
        
        <form class="log-in form">
        <input type="text" placeholder="user name"/>
        <input type="password" placeholder="password"/>
        <button>login</button>
            <p class="message">Not Registered? <a href="#">Register</a>
            </p>
        </form>
    </div>
    </div>
    <script src='https://code.jquery.com/jquery-3.3.1.min.js'>
    </script>
    <script>
    $('.message a').click(function(){
    $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
    </script>
    
    
</body>
</html>