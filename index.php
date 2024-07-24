<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Scientist Portfolio</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
  <header>
    <nav>
      <div class="logo">My Portfolio</div>
      <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#blog">Blog</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <div class="menu-toggle" id="menu-toggle">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-content">
      <h1>Hi, I'm Ganesh</h1>
      <h2>Transforming Data into Insights</h2>
      <a href="#projects" class="cta-btn">Explore My Work</a>
    </div>
  </section>

  <section class="about" id="about">
    <div class="about-content">
      <div class="profile-picture">
        <img src="images/my_profile.jpg" alt="Ganesh">
      </div>
      <div class="about-text">
        <h2>About Me</h2>
        <p>Hello! I'm Ganesh, a passionate Data Scientist with expertise in extracting meaningful insights from complex datasets. My journey in data science started with a fascination for numbers and patterns, and over the years, I've honed my skills in machine learning, statistical analysis, and data visualization. I'm dedicated to solving real-world problems by leveraging data and advanced analytics. Let's work together to turn data into actionable insights!</p>
        <a href="#contact" class="cta-btn">Get in Touch</a>
      </div>
    </div>
  </section>
  <section class="skills" id="skills">
    <div class="skills-content">
      <h2>Skills</h2>
      <div class="skills-grid">
        <div class="skill">
          <div class="skill-icon">
            <img src="icons/python.png" alt="Python">
          </div>
          <h3>Python</h3>
        </div>
        <div class="skill">
          <div class="skill-icon">
            <img src="icons/machine-learning.png" alt="Machine Learning">
          </div>
          <h3>Machine Learning</h3>
        </div>
        <div class="skill">
          <div class="skill-icon">
            <img src="icons/java.png" alt="Java">
          </div>
          <h3>Java</h3>
        </div>
        <div class="skill">
          <div class="skill-icon">
            <img src="icons/c-.png" alt="C">
          </div>
          <h3>C Programming</h3>
        </div>
        <div class="skill">
          <div class="skill-icon">
            <img src="icons/html-5.png" alt="HTML">
          </div>
          <h3>HTML</h3>
        </div>
        <div class="skill">
          <div class="skill-icon">
            <img src="icons/css-3.png" alt="CSS">
          </div>
          <h3>CSS</h3>
        </div>
        <div class="skill">
          <div class="skill-icon">
            <img src="icons/java-script.png" alt="JavaScript">
          </div>
          <h3>Java Script</h3>
        </div>
        <div class="skill">
          <div class="skill-icon">
            <img src="icons/php.png" alt="PHP">
          </div>
          <h3>PHP</h3>
        </div>
        <div class="skill">
          <div class="skill-icon">
            <img src="icons/mysql.png" alt="MYSQL">
          </div>
          <h3>MysqL</h3>
        </div>
      </div>
    </div>
  </section>

  <section class="projects" id="projects">
    <div class="projects-content">
      <h2>Projects</h2>
      <div class="projects-grid">
        <div class="project">
          <img src="images/project_csr.png" alt="CSR Robot">
          <div class="project-info">
            <h3>Clean and Sweep Robot</h3>
            <p>CleanSweep is a smartphone controlled robot that cleans your house’s floor. There’s also a water pump and water reservoir which can be switched on when required to throw water on the floor and make the mops moist for a proper clean. </p>
            <a href="https://github.com/GaneshInnovator/Clean-Sweep-Robot" class="cta-btn">View Project</a>
          </div>
        </div>
        <div class="project">
          <img src="images/cseproject.png" alt="CSE Project">
          <div class="project-info">
            <h3>College Symposium Website</h3>
            <p>The College Symposium Website was developed to facilitate the organization and management of a college-level symposium event. The website serves as a comprehensive platform for students, faculty, and guests to access information about the symposium, register for events, and participate in various activities.</p>
            <a href="https://github.com/GaneshInnovator/College-Symposium-Website" class="cta-btn">View Project</a>
          </div>
        </div>
        <div class="project">
          <img src="images/project_esrgan.png" alt="Project 3">
          <div class="project-info">
            <h3>Image Quality Enhancement</h3>
            <p>The Image Quality Enhancement project leverages the power of Artificial Intelligence (AI) and Enhanced Super-Resolution Generative Adversarial Networks (ESRGAN) to upscale and improve the quality of low-resolution images. This project aims to restore and enhance images by increasing their resolution and detail, making them clearer and more visually appealing.</p>
            <a href="https://github.com/GaneshInnovator/Image-Quality-Enhancement" class="cta-btn">View Project</a>
          </div>
        </div>
        <!-- Add more project items as needed -->
      </div>
    </div>
  </section>

  <section class="contact" id="contact">
    <div class="contact-content">
      <h2>Get in Touch</h2>
      <p>If you have any questions or want to discuss a project, feel free to reach out!</p>
      <?php
      if (isset($_GET['success']) && $_GET['success'] == 'true') {
        echo '<p class="success-message">Your message was successfully submitted!</p>';
      }
    ?>
    <?php $_POST['success'] = false; ?>
      <form class="contact-form" action="php/submitform_php.php" method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="cta-btn">Send Message</button>
      </form>
    </div>
  </section>

   <footer class="footer">
    <div class="footer-content">
      <div class="footer-links">
        <h2>Quick Links</h2>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
      <div class="footer-social">
        <h2>Follow Me</h2>
        <a href="https://twitter.com" target="_blank" class="social-icon twitter"><i class="fab fa-instagram"></i></a>
        <a href="https://linkedin.com" target="_blank" class="social-icon linkedin"><i class="fab fa-linkedin"></i></a>
        <a href="https://github.com" target="_blank" class="social-icon github"><i class="fab fa-github"></i></a>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2024 Ganesh P. All Rights Reserved.</p>
    </div>
  </footer>


  <script src="scripts.js">
  </script>
</body>
</html>
