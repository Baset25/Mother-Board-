<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>University of Wolverhampton</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <!-- News Section -->
  <div class="news-section">
   <marquee behavior="scroll" direction="left">🔔 Latest News: 
    Admissions open for 2025 | 
    Campus Open Day on 15th March | 
    International Food Fair on 29th March | 
    Annual Sports Meet from 22nd-25th March | 
    Career Fair on 19th April | 
    Alumni Meet on 10th April | 
    Science Exhibition on 8th April
  </marquee>  </div>

  <!-- Main Header -->
  <header class="main-header">
    <div class="container">
      <div class="logo"><img src="images/logo.png" alt="University Logo"></div>
      <nav class="nav" id="navLinks">
        
        <ul>
          <li><a href="#" onclick="showHome()">Home</a></li>
          <li><a href="#" onclick="showEvents()">Events</a></li>
          <li><a href="#" onclick="showMap()">Map</a></li>
          <li><a href="#" onclick="showAbout()">About Us</a></li>
          <li><a href="#" onclick="showGallery()">Gallery</a></li>
          <li><a href="#" onclick="showContact()">Contact Us</a></li>
        </ul>
      </nav>
      </div>
  </header>

  <!-- Hero Section -->
  <div class="hero-section">
    <img src="images/uni2.jpg" alt="Campus View" class="hero-image">
    <div class="text-box">
      <div class="motivational-quote">
        "Education is the most powerful weapon which you can use to change the world."
        <div class="quote-author">- Nelson Mandela</div>
      </div>
    </div>
  </div>

  <!-- Events Section -->
  <section class="events-content" id="eventsContent" style="display: none;">
    <h1>Upcoming Events</h1>
    <div class="event-grid">
      <!-- Academic Events -->
      <div class="event-card">
        <div class="event-icon">🎓</div>
        <h3>Campus Open Day</h3>
        <p>📅 15 Mar 2025 | ⏰ 9:00 AM</p>
        <p>📍 Main Campus</p>
        
      </div>

      <!-- Sports Events -->
      <div class="event-card">
        <div class="event-icon">⚽</div>
        <h3>Inter-College Football</h3>
        <p>📅 22 Mar 2025 | ⏰ 3:00 PM</p>
        <p>📍 Sports Complex</p>
      
      </div>

      <!-- Cultural Events -->
      <div class="event-card">
        <div class="event-icon">🌍</div>
        <h3>International Food Fair</h3>
        <p>📅 29 Mar 2025 | ⏰ 11 AM-8 PM</p>
        <p>📍 Student Square</p>
        
      </div>

      <!-- Tech Events -->
      <div class="event-card">
        <div class="event-icon">💻</div>
        <h3>Tech Innovation Summit</h3>
        <p>📅 5 Apr 2025 | ⏰ 10:00 AM</p>
        <p>📍 Tech Hub</p>
      </div>

      <!-- Academic Support -->
      <div class="event-card">
        <div class="event-icon">📚</div>
        <h3>Library Orientation</h3>
        <p>📅 12 Apr 2025 | ⏰ 2:00 PM</p>
        <p>📍 Main Library</p>
        
      </div>

      <!-- Career Development -->
      <div class="event-card">
        <div class="event-icon">💼</div>
        <h3>Career Workshop</h3>
        <p>📅 19 Apr 2025 | ⏰ 11:00 AM</p>
        <p>📍 Business School</p>
        
      </div>

      <!-- Social Events -->
      <div class="event-card">
        <div class="event-icon">🎉</div>
        <h3>Freshers' Social</h3>
        <p>📅 26 Apr 2025 | ⏰ 7:00 PM</p>
        <p>📍 Student Union</p>
        
      </div>

      <!-- Wellness Events -->
      <div class="event-card">
        <div class="event-icon">🧘♀️</div>
        <h3>Yoga Morning</h3>
        <p>📅 Every Tuesday | ⏰ 7:00 AM</p>
        <p>📍 Campus Green</p>
        
      </div>
    </div>
  </section>

  <!-- Map Section -->
  <section class="map-content" id="mapContent" style="display: none;">
    <h1>Campus Location</h1>
    <div class="map-container">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2420.0414768678674!2d-2.126791684224265!3d52.58637967982202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870a5d15a199325%3A0x9f11dee5b6e4d4e4!2sUniversity%20of%20Wolverhampton!5e0!3m2!1sen!2suk!4v1716387193752!5m2!1sen!2suk" 
        class="university-map"
        loading="lazy">
      </iframe>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="footer-content">
      <p>Contact us: contact@wlv.ac.uk</p>
      <div class="social-icons">
        <i class="fab fa-facebook"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-linkedin"></i>
      </div>
      <p>© 2025 University of Wolverhampton</p>
    </div>
  </footer>
<!-- About Us Section -->
<section class="about-content" id="aboutContent" style="display: none;">
  <div class="about-container">
    <h1>About University of Wolverhampton</h1>
    
    <div class="about-section">
      <div class="content-box">
        <h2>Our Heritage</h2>
        <p>Established in 1992, the University of Wolverhampton is a vibrant, modern institution with roots dating back to 1851. We're proud to serve the West Midlands and beyond with quality higher education.</p>
      </div>

      <div class="content-box">
        <h2>Campuses</h2>
        <ul class="campus-list">
          <li>📍 Wolverhampton City Campus (Main)</li>
          <li>📍 Telford Innovation Campus</li>
          <li>📍 Walsall Campus</li>
          <li>📍 Springfield Campus (Newest)</li>
        </ul>
      </div>
    </div>

    <div class="about-section">
      <div class="content-box">
        <h2>Key Facts</h2>
        <div class="fact-grid">
          <div class="fact-item">
            <i class="fas fa-users"></i>
            <h3>23,000+ Students</h3>
            <p>From 130+ countries worldwide</p>
          </div>
          <div class="fact-item">
            <i class="fas fa-graduation-cap"></i>
            <h3>500+ Courses</h3>
            <p>Undergraduate & Postgraduate</p>
          </div>
          <div class="fact-item">
            <i class="fas fa-flask"></i>
            <h3>£100m Investment</h3>
            <p>In facilities since 2015</p>
          </div>
        </div>
      </div>
    </div>

    <div class="about-section">
      <div class="content-box mission-box">
        <h2>Our Mission</h2>
        <p>"To drive innovation, opportunity, and social mobility through excellence in education, research, and enterprise."</p>
        <div class="signature">
          <p>Professor Ebrahim Adia</p>
          <p>Vice-Chancellor</p>
        </div>
      </div>
    </div>

    <div class="about-section">
      <div class="content-box">
        <h2>Accreditations</h2>
        <div class="badge-container">
          <img src="images/qaa-badge.png" alt="QAA Quality Assurance">
          <img src="images/aacsb-logo.png" alt="AACSB Accredited">
          <img src="images/hea-logo.png" alt="Higher Education Academy">
        </div>
        <p>Recognized by professional bodies including ACCA, CIMA, BCS, and more</p>
      </div>
    </div>

    <div class="about-section">
      <div class="content-box ranking-box">
        <h2>Recent Rankings</h2>
        <ul class="ranking-list">
          <li>🏆 Guardian University Guide 2023: Top 50 for Teaching Quality</li>
          <li>🏆 Times Higher Education: Top 200 Young Universities</li>
          <li>🏆 National Student Survey: 85% Overall Satisfaction</li>
        </ul>
      </div>
    </div>

    <button class="learn-more-btn" onclick="window.open('https://www.wlv.ac.uk/about-us/','_blank')">
      Explore Our History <i class="fas fa-arrow-right"></i>
    </button>
  </div>
</section>
<!-- Gallery Section -->
<section class="gallery-content" id="galleryContent" style="display: none;">
  <div class="gallery-container">
    <h1>University Gallery</h1>
    
    <div class="gallery-grid">
      <!-- Campus Images -->
      <div class="gallery-item">
        <img src="images/gallery/photo1.jpg" alt="Main Campus Building">
        <div class="caption">Main Campus Building</div>
      </div>
      
      <div class="gallery-item">
        <img src="images/gallery/photo2.jpg" alt="University Library">
        <div class="caption">State-of-the-art Library</div>
      </div>

      <div class="gallery-item">
        <img src="images/gallery/photo3.jpg" alt="Science Laboratories">
        <div class="caption">Modern Science Labs</div>
      </div>

      <div class="gallery-item">
        <img src="images/gallery/photo4.jpg" alt="Sports Complex">
        <div class="caption">Sports Facilities</div>
      </div>

      <div class="gallery-item">
        <img src="images/gallery/photo5.jpg" alt="Lecture Hall">
        <div class="caption">Smart Lecture Theater</div>
      </div>

      <div class="gallery-item">
        <img src="images/gallery/photo6.jpg" alt="Student Cafeteria">
        <div class="caption">Student Cafeteria</div>
      </div>

      <div class="gallery-item">
        <img src="images/gallery/photo7.jpg" alt="Graduation Ceremony">
        <div class="caption">Graduation Day</div>
      </div>

      <div class="gallery-item">
        <img src="images/gallery/photo8.jpg" alt="Research Center">
        <div class="caption">Research Center</div>
      </div>
    </div>

    <div class="gallery-cta">
      <button class="view-more-btn" onclick="window.open('https://www.wlv.ac.uk/about-us/our-campus/','_blank')">
        View Full Campus Tour <i class="fas fa-external-link-alt"></i>
      </button>
    </div>
  </div>
</section><!-- Contact Us Section -->
<section class="contact-content" id="contactContent" style="display: none;">
  <div class="contact-container">
    <h1>Get in Touch</h1>
    
    <div class="contact-grid">
      <!-- Contact Form -->
      <div class="contact-form">
        <form action="#" method="POST">
          <div class="form-group">
            <input type="text" name="name" placeholder="Your Name" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" placeholder="Your Email" required>
          </div>
          <div class="form-group">
            <input type="text" name="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
          </div>
          <button type="submit" class="submit-btn">Send Message <i class="fas fa-paper-plane"></i></button>
        </form>
      </div>

      <!-- Contact Info -->
      <div class="contact-info">
        <div class="info-box">
          <i class="fas fa-map-marker-alt"></i>
          <h3>Visit Us</h3>
          <p>University of Wolverhampton<br>
          Wulfruna Street, Wolverhampton<br>
          West Midlands, WV1 1LY<br>
          United Kingdom</p>
        </div>

        <div class="info-box">
          <i class="fas fa-phone"></i>
          <h3>Call Us</h3>
          <p>+44 (0)123 0001 2013<br>
          Mon-Fri: 9am-5pm</p>
        </div>

        <div class="info-box">
          <i class="fas fa-envelope"></i>
          <h3>Email Us</h3>
          <p>General Enquiries: <a href="mailto:quiries@wlv.ac.uk">quiries@wlv.ac.uk</a><br>
          Admissions: <a href="mailto:admission@wlv.ac.uk">admission@wlv.ac.uk</a></p>
        </div>

        <div class="social-box">
          <h3>Follow Us</h3>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <script>
    // Mobile menu functionality
    const navLinks = document.getElementById("navLinks");

    function showMenu() {
      navLinks.style.right = "0";
    }

    function hideMenu() {
      navLinks.style.right = "-200px";
    }

    // Content visibility control
    function showHome() {
      hideAll();
      document.getElementById('homeContent').style.display = 'block';
    }

    function showEvents() {
      hideAll();
      document.getElementById('eventsContent').style.display = 'block';
    }

    function showMap() {
      hideAll();
      document.getElementById('mapContent').style.display = 'block';
    }

    function hideAll() {
      const sections = document.querySelectorAll('section');
      sections.forEach(section => {
        section.style.display = 'none';
      });
    }
   function showAbout() {
     hideAll();
     document.getElementById('aboutContent').style.display = 'block';
   }
  function showGallery() {
    hideAll();
    document.getElementById('galleryContent').style.display = 'block';
  }
function showContact() {
    hideAll();
    document.getElementById('contactContent').style.display = 'block';
  }

 

    // Initialize with home page
    showHome();
  </script>
</body>
</html>
