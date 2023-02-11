<html>
  <head>
    <style>
      .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 100vh;
      }

      .left-section {
        width: 40%;
        text-align: center;
        padding: 20px;
      }

      .right-section {
        width: 40%;
        text-align: center;
        padding: 20px;
      }

      .form {
        width: 80%;
        margin: 0 auto;
        text-align: center;
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
      <div class="left-section">
        
        <img src="OIP1.jpeg" alt="User Logo">
      </div>
      <div class="right-section">
        <img src="icon_logo_final.png" alt="Company Logo">
        <div class="form">
          <form action="process2.php" method="POST" enctype="multipart/form-data">
            <input type="text" placeholder="Name">
            <input type="text" placeholder="Username"  name='user' id="user" />
            <input type="email" placeholder="Email" name="email">
            <input type="tel" placeholder="Contact Number" name="num">
            <input type="text" placeholder="Gender"><br>
<label for="skills">Enter City:</label>
            <textarea id="skills" name="city" rows="4" cols="50"></textarea><br>
            <label for="aboutme">About Me:</label>
            <textarea id="aboutme" name="aboutme" rows="4" cols="50"></textarea><br>
            Date of Birth:<input type="date" placeholder="Date of Birth">
            <input type="text" placeholder="Links">
            <input type="password" placeholder="Password" name="pass">
            <input type="password" placeholder="Re-enter Password">
            <p>
              <label>Image:  </label>
              <input type="file" name="fileToUpload" id="fileToUpload">
            </p>
            <input type="submit" id="btn" value="Sign Up">
             </form>
        </div>
      </div>
    </div>
<script>
   function validation(){
       var user = document.getElementById("user");
            if(user.value.length <= 20 && user.value.length >= 3){
            }
            else{
                alert("Username has to be between 3-20 characters.")
             }
       
            var user = document.getElementById("user");
            if(user.value == list.value){
            }
            else{
                alert("Username already exists.")
             }
   }
</script>
<script>
      function ValidateEmail(inputText)
      {
         var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
         if(inputText.value.match(mailformat))
         {
            document.write("Valid email address!");
            document.form1.text1.focus();
            return true;
         }
         else
         {
            document.write("You have entered an invalid email address!");
            document.form1.text1.focus();
            return false;
         }
      }
   </script>
  </body>
</html>
            
         