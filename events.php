<!DOCTYPE html>
<html>
  <head>
    <title>EventKick Kenya - Event Listings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/events.css">
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
      <h2>Upcoming Events</h2>
      <form action="#" method="get">
        <input type="text" name="search" placeholder="Search events...">
        <label for="category">Event Category:</label>
        <select name="category" id="category">
          <option value="all">All</option>
          <option value="music">Music</option>
          <option value="sports">Sports</option>
          <option value="culture">Culture</option>
          <option value="food">Food</option>
        </select>
        <button type="submit">Search</button>
      </form>
      <ul class="event-list">
        <li>
          <h3>Concert at Serena Hotel</h3>
          <img src="img/event1.jpg" alt="Concert at Serena Hotel">
          <p>Date: January 20, 2024</p>
          <p>Time: 7:00 PM - 10:00 PM</p>
          <p>Category: Music</p>
          <a href="events/1.php">Learn More</a>
        </li>
        <li>
          <h3>Kenya Open Golf Tournament</h3>
          <img src="img/event2.jpg" alt="Kenya Open Golf Tournament">
          <p>Date: March 1, 2024 - March 7, 2024</p>
          <p>Time: 8:00 AM - 6:00 PM</p>
          <p>Category: Sports</p>
          <a href="#">Learn More</a>
        </li>
        <li>
          <h3>Maasai Mara Cultural Festival</h3>
          <img src="img/event3.jpg" alt="Maasai Mara Cultural Festival">
          <p>Date: July 1, 2024 - July 3, 2024</p>
          <p>Time: 9:00 AM - 10:00 PM</p>
          <p>Category: Culture</p>
          <a href="maasai.php">Learn More</a>
        </li>
        <li>
          <h3>Nairobi Food Festival</h3>
          <img src="img/event4.jpg" alt="Nairobi Food Festival">
          <p>Date: November 15, 2024 - November 17, 2024</p>
          <p>Time: 11:00 AM - 9:00 PM</p>
          <p>Category: Food</p>
          <a href="golf.php">Learn More</a>
        </li>
      </ul>
    </div>
    <div class="footer">
      <p>&copy; 2023 EventKick Kenya. All Rights Reserved.</p>
      <a href="about.php">About Us</a>
      <a href="faq.php">FAQs</a>
    </div>
  </body>
</html>

