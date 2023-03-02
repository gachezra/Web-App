<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us - EventKick Kenya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
  </head>
  <body>
    <div class="header">
      <h1>EventKick Kenya</h1>
      <nav>
        <ul>
          <a href="index.php">Home</a>
          <a href="events.php">Events</a>
          <a href="about.php">About</a>
          <a href="contact.php">Contact</a>
          <a href="profile.php">Profile</a>
        </ul>
      </nav>
    </div>
    <div class="main">
      <h2>Contact Us</h2>
      <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required><br><br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea><br><br>
        <button type="submit">Send Message</button>
      </form>
    </div>
    <div class="footer">
      <p>&copy; 2023 EventKick Kenya. All Rights Reserved.</p>
      <a href="about.php">About Us</a>
      <a href="faq.php">FAQs</a>
    </div>
  </body>
</html>
