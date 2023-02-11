<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Organization Name</title>
    <link rel="stylesheet" type="text/css" href="org_css.css">
  </head>
  <body>
    <header>
      <h1>Organization Name</h1>
      <nav>
        <ul>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="#add services">Add Services</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <section id="about">
        <h2>About Us</h2>
        <p>We are a philanthropist organization working tirelessly for the welfare of all humans in need. </p>
      </section>
      <section id="services">
        <h2>Our Services</h2>
        <ol id="services-list">
          <li>Service A</li>
          <li>Service B</li>
          <li>Service C</li>
        </ol>
        
        <section id="add service">
          <h1>Create Event</h1>
          <button id="createEventBtn">Create Event</button>
          <div id="eventForm" style="display: none;">
            <form action="EventVolunteer.php">
              <label for="eventDate">Event Date:</label>
              <input type="date" id="eventDate" name="eventDate">
              <br><br>
              <label for="eventTime">Event Time:</label>
              <input type="time" id="eventTime" name="eventTime">
              <br><br>
              <label for="eventType">Event Type:</label>
              <input type="text" id="eventType" name="eventType">
              <br><br>
              <label for="eventName">Event Name:</label>
              <input type="text" id="eventName" name="eventName">
              <br><br>
              <label for="manpower">Manpower:</label>
              <input type="number" id="manpower" name="manpower">
              <br><br>
              <input type="submit" value="Submit">
            </form>
          </div>
          <script src="org_javas.js"></script>
        </body>
        </section>
        
      </section>
      <section id="contact">
        <h2>Contact Us</h2>
        <form id="contact-form">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email">
          <label for="message">Message:</label>
          <textarea id="message" name="message"></textarea>
          <input type="submit" value="Submit">
        </form>
      </section>
    </main>
    <footer>
      <p>Copyright &copy; Organization Name 2023</p>
    </footer>
    <script src="org_javas.js"></script>
  </body>
</html>
