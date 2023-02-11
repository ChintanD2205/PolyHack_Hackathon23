<html>
  <head>
    <style>
      .container {
        display: flex;
        height: 100vh;
      }

      .left {
        width: 30%;
        background-color: #f2f2f2;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .left img {
        width: 50%;
        margin-bottom: 20px;
      }

      .right {
        width: 70%;
        background-color: #ffffff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .right img {
        width: 50%;
        margin-bottom: 20px;
      }

      .form {
        width: 60%;
        text-align: center;
        margin-bottom: 20px;
      }

      input[type="text"],
      input[type="email"],
      input[type="password"],
      input[type="tel"],
      input[type="date"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
      }

      input[type="submit"] {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
      }

      input[type="submit"]:hover {
        background-color: #3e8e41;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="left">
        <img src="OIP1.jpg" alt="User Logo">
        <h1>Welcome User:</h1>
      </div>
      <div class="right">
        <img src="icon_logo_final.png" alt="Company Logo">
        <div class="form">
          <form action = "process.php" onsubmit="return validateForm()" method="POST">
            <input type="email" placeholder="Email" id="user" name="user">
            <input type="password" placeholder="Password" id="pass" name="pass">
           
            <input type="submit" value="Sign-In">
          </form>
        </div>
      </div>
    </div>

    <script>
      function validateEmail() {
        var email = document.getElementById("email").value;
        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        
        if (!emailPattern.test(email)) {
          alert("Please enter a valid email address");
          return false;
        }
        return true;
      }

      function validateForm() {
        if (validateEmail()) {
          return true;
        }
        return false;
      }
    </script>




