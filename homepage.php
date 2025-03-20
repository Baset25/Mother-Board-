<?php
session_start();
include "connect.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>University of Wolverhampton</title>
  <style>
    /* Base Styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Arial', sans-serif;
    }

    /* Header */
    .header {
      background-color: #1A1A2E;
      color: white;
      padding: 1.5rem;
      text-align: center;
    }

    /* Navigation - Improved for mobile */
    .nav {
      background-color: #E94560;
      padding: 1rem;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 0.8rem;
    }

    .nav a {
      color: white;
      text-decoration: none;
      padding: 0.5rem 1rem;
      font-weight: bold;
      white-space: nowrap;
    }

    @media (max-width: 480px) {
      .nav {
        gap: 0.5rem;
        padding: 0.8rem;
      }
      .nav a {
        padding: 0.4rem 0.8rem;
        font-size: 0.9rem;
      }
    }

    /* Home Page */
    .home-content {
      text-align: center;
      padding: 4rem 1rem;
      background-color: #f8f9fa;
    }

    /* Events Grid */
    .event-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 1.5rem;
      padding: 2rem;
      max-width: 1200px;
      margin: 0 auto;
    }

    .event-card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      padding: 1.5rem;
    }

    .event-icon {
      font-size: 2rem;
      margin-bottom: 1rem;
    }

    /* Map Section */
    .map-content iframe {
      width: 100%;
      height: 400px;
      border: none;
    }

    /* Footer */
    .footer {
      background-color: #1A1A2E;
      color: white;
      padding: 2rem;
      text-align: center;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <div class="header">
    <h1>Welcome to University of Wolverhampton</h1>
    <h1>Mr.
    <?php
    if (isset($_SESSION['email'])) {
        $EMail = $_SESSION['email'];
        $query = mysqli_query($conn, "SELECT * FROM users_data WHERE email='$EMail'");
        while($row = mysqli_fetch_array($query)){
           echo $row['firstName'] . ' ' . $row['lastName'];
}

    }

    ?>
        :-|
    </h1>
  </div>

  <!-- Navigation -->
  <nav class="nav">
    <a href="#" onclick="showHome()">Home</a>
    <a href="#" onclick="showEvents()">Events</a>
    <a href="#" onclick="showMap()">Map</a>
    <a href="qr-code-link-here">QR Code</a>
  </nav>

  <!-- Home Page -->
  <div class="home-content" id="homeContent">
    <div class="motivational-quote">
      "Education is the most powerful weapon which you can use to change the world."
      <div class="quote-author">- Nelson Mandela</div>
    </div>
  </div>

  <!-- Enhanced Events Page -->
  <div class="events-content" id="eventsContent">
    <div class="event-grid">
      <!-- Academic Events -->
      <div class="event-card">
        <div class="event-icon">🎓</div>
        <h3>Campus Open Day</h3>
        <p>📅 15 Mar 2025 | ⏰ 9:00 AM</p>
        <p>📍 Main Campus</p>
        <button>Book Tour</button>
      </div>

      <!-- Sports Events -->
      <div class="event-card">
        <div class="event-icon">⚽</div>
        <h3>Inter-College Football</h3>
        <p>📅 22 Mar 2025 | ⏰ 3:00 PM</p>
        <p>📍 Sports Complex</p>
        <button>Join Team</button>
      </div>

      <!-- Cultural Events -->
      <div class="event-card">
        <div class="event-icon">🌍</div>
        <h3>International Food Fair</h3>
        <p>📅 29 Mar 2025 | ⏰ 11 AM-8 PM</p>
        <p>📍 Student Square</p>
        <button>RSVP</button>
      </div>

      <!-- Tech Events -->
      <div class="event-card">
        <div class="event-icon">💻</div>
        <h3>Tech Innovation Summit</h3>
        <p>📅 5 Apr 2025 | ⏰ 10:00 AM</p>
        <p>📍 Tech Hub</p>
        <button>Register</button>
      </div>

      <!-- Academic Support -->
      <div class="event-card">
        <div class="event-icon">📚</div>
        <h3>Library Orientation</h3>
        <p>📅 12 Apr 2025 | ⏰ 2:00 PM</p>
        <p>📍 Main Library</p>
        <button>Join Session</button>
      </div>

      <!-- Career Development -->
      <div class="event-card">
        <div class="event-icon">💼</div>
        <h3>Career Workshop</h3>
        <p>📅 19 Apr 2025 | ⏰ 11:00 AM</p>
        <p>📍 Business School</p>
        <button>Attend</button>
      </div>

      <!-- Social Events -->
      <div class="event-card">
        <div class="event-icon">🎉</div>
        <h3>Freshers' Social</h3>
        <p>📅 26 Apr 2025 | ⏰ 7:00 PM</p>
        <p>📍 Student Union</p>
        <button>Get Tickets</button>
      </div>

      <!-- Wellness Events -->
      <div class="event-card">
        <div class="event-icon">🧘♀️</div>
        <h3>Yoga Morning</h3>
        <p>📅 Every Tuesday | ⏰ 7:00 AM</p>
        <p>📍 Campus Green</p>
        <button>Join</button>
      </div>
    </div>
  </div>

  <!-- Map Section -->
  <div class="map-content" id="mapContent">
    <iframe class="university-map" 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2420.0414768678674!2d-2.126791684224265!3d52.58637967982202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870a5d15a199325%3A0x9f11dee5b6e4d4e4!2sUniversity%20of%20Wolverhampton!5e0!3m2!1sen!2suk!4v1716387193752!5m2!1sen!2suk" 
      loading="lazy">
    </iframe>
  </div>

  <!-- Footer -->
  <footer class="footer">
    <p>Contact us: contact@wlv.ac.uk | © 2025 University of Wolverhampton</p>
  </footer>

  <script>
    // Navigation functions
    function showHome() {
      document.getElementById('homeContent').style.display = 'block';
      document.getElementById('eventsContent').style.display = 'none';
      document.getElementById('mapContent').style.display = 'none';
    }

    function showEvents() {
      document.getElementById('homeContent').style.display = 'none';
      document.getElementById('eventsContent').style.display = 'block';
      document.getElementById('mapContent').style.display = 'none';
    }

    function showMap() {
      document.getElementById('homeContent').style.display = 'none';
      document.getElementById('eventsContent').style.display = 'none';
      document.getElementById('mapContent').style.display = 'block';
    }

    // Show home page by default
    showHome();
  </script>
</body>
</html>