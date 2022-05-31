<!DOCTYPE html>
<html>
 <head>
  <title>Login</title>
  <!-- <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> -->
  <link href="img/logo/logo-SIB.png" rel="icon">
  <style>
      body {
       background: -webkit-linear-gradient(bottom, #c3e4ff, #6777ef);
       background-repeat: no-repeat;
}
      #card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 550px;
        margin: 6rem auto 8.1rem auto;
        width: 500px;
}
    #card-content {
        padding: 12px 44px;
    }
    #card-title {
        font-family: nunito-regular;
        letter-spacing: 4px;
        padding-bottom: 23px;
        padding-top: 13px;
        text-align: center;
    }
    .underline-title {
        background: -webkit-linear-gradient(right, #c3e4ff, #6777ef);
        height: 3px;
        margin: -1.1rem auto 0 auto;
        width: 125px;
    }
    a {
    text-decoration: none;
}
label {
    font-family: nunito-regular;
    font-size: 13pt;
    float: left;
    width: 50px;
    padding-right: 24px;
}
.form {
    align-items: left;
    display: flex;
    flex-direction: column;
    letter-spacing: 1.5px;
}
.form-border {
    background: -webkit-linear-gradient(right, #c3e4ff, #6777ef);
    height: 1.5px;
    width: 100%;
}
.form-content {
    background: #fbfbfb;
    border: none;
    outline: none;
    padding-top: 30px;
}
#submit-btn {
    background: -webkit-linear-gradient(right, #6777ef, #6777ef);
    border: none;
    border-radius: 21px;
    box-shadow: 0px 1px 8px #7bbff7;
    cursor: pointer;
    color: white;
    font-family: nunito-regular;
    font-weight: bold;
    height: 42.3px;
    margin: 0 auto;
    margin-top: 90px;
    transition: 0.25s;
    width: 153px;
    letter-spacing: 2px;
}
#submit-btn:hover {
    box-shadow: 0px 1px 18px #7bbff7;
}
  </style>
 </head>
 <body>
    <div id="card"> 
        <div id="card-content">
            <div id="card-title">
              <h1>LOGIN</h1>
              <div class="underline-title"></div>
              <form action="p-login.php" method="post" class="form"> 
                <label for="username" style="padding-top:70px">Username</label>
                <input class="form-content" type="text" name="username">
                <div class="form-border"></div>
              <label for="user-password" style="padding-top:30px">Password</label>
              <input class="form-content" type="password" name="password">
                <div class="form-border"></div>
              <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
              </form>
            </div>
            </div>
    </div>
 </body>
</html>