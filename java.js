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