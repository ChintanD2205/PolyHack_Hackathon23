<!DOCTYPE html>
<html>
  <head>
    <style>
body {
  font-family: Arial, sans-serif;
  background-color: crimson;
  color: #00FFFF;
}

h1 {
  text-align: center;
  color: black;
  margin-top: 50px;
}

.container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  background-color: #ffc0cb;
  border-radius: 10px;
}

a {
  color: #ffc0cb;
  text-decoration: none;
}

button {
  background-color: #ffc0cb;
  color: black;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  border: none;
}

input[type="text"], input[type="email"], input[type="password"] {
  padding: 10px;
  margin-bottom: 20px;
  border-radius: 5px;
  border: none;
}
</style>
    <meta charset="utf-8">
        
    <title>User Profile Page</title>
    <link rel="stylesheet" href="UserProfile.css">
  </head>
  <body>
    <header>
      <h1>User Profile Page</h1>
<a href="designs.css">
      <nav>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about-me">About Me</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#experience">Experience</a></li>
          <li><a href="#links">Links</a></li>
          <li><a href="UserInformation.html">Engage</a>
             
        </ul>
      </nav>
    </header>
    <main>
      <section id="home">
        <h2>Home</h2>
        <p>Basic Information</p>
      </section>
      <section id="about-us">
        <h2>About Me</h2>
        <p></p>
      </section>
      <section id="skills">
        <h2>Skills</h2>
        
      </section>
      <section id="experience">
        <h2>Experience</h2>
      </section>
      <section id="links">
        <h2>Links</h2>
        
      </section>
      <section id="engage">
        <h2>Engage</h2>
</section>
	 <section id="add service">
        
          <button id="createEventBtn">Create Event</button>
          <div id="eventForm" style="display: none;">
            <form action="EventVolunteer.php" method="POST">
      <p>
        <label>Name : </label>
        <input type="text" id="user" name="user" />
      </p>
      <p>
        <label>Org:  </label>
        <input type="text" id="pass" name="pass" />
      </p>
      <p>
        <label>Location:  </label>
        <input type="text" id="num" name="num" />
      </p>
      <p>
        <label>Date:  </label>
        <input type="date" id="city" name="city" />
      </p>
      <p>
        <label>Duration : </label>
        <input type="text" name="duration" id="duration">
      </p>
      <p>
        <label>Skills required :  </label>
        <input type="text" name="skills" id="skills">
      </p>
      <p>
        <input type="Submit" id="btn" value="Create" />
      </p>
      
    </form>
            
          </div>
        <form action="EventVolunteer.php">
          <input type="button" name="submit" value="Register for an event">
        </form>
          <script>document.getElementById("createEventBtn").addEventListener("click", function() {
  document.getElementById("eventForm").style.display = "block";
});


const addServiceButton = document.getElementById("add-service-button");
const servicesList = document.getElementById("services-list");

addServiceButton.addEventListener("click", function() {
  const newService = prompt("Enter the name of the service:");
  if (newService) {
    const newServiceItem = document.createElement("li");
    newServiceItem.textContent = newService;
    servicesList.appendChild(newServiceItem);
  }
}
);
</script>
<script>document.getElementById("createEventBtn").addEventListener("click", function() {
  document.getElementById("eventForm").style.display = "block";
});
</script>

        </body>
        </section>
       
    
    </main>
 
  </body>
</html>
