
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SUC - Effective Communication</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./css/styles.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cuprum:wght@500;600;700&family=Poppins:wght@400;500;600&display=swap"
    rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./images/hero-banner.png">

</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">SUC</a>

      <nav class="navbar" data-navbar>

        <div class="wrapper">
          <a href="#" class="logo">Start-ups Connect</a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li>
            <a href="#home" class="navbar-link" data-nav-link>Home</a>
          </li>

          <li>
            <a href="#about" class="navbar-link" data-nav-link>About</a>
          </li>

          <li>
            <a href="#services" class="navbar-link" data-nav-link>Services</a>
          </li>

          <li>
            <a href="#features" class="navbar-link" data-nav-link>Features</a>
          </li>

          <li>
            <a href="#" class="navbar-link" data-nav-link>Blog</a>
          </li>

          <li>
            <a href="#" class="navbar-link" data-nav-link>Contact Us</a>
          </li>

        </ul>

      </nav>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

      <a href="#" class="btn-outline">Get Started</a>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" id="home" aria-label="hero">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle has-before">Welcome to SUC(Start-ups Connect)</p>

            <h1 class="h1 hero-title">Effective Communication in start-up Teams</h1>

            <p class="hero-text">
              We provide your Organization with easy to use tools that reduces the work-load of the Founding Team. We also help you in keeping track of your Companies progress.
              Our aim is to help ensure effective communication from between management to the employees.
            </p>

            <div class="btn-group">
              <a href="#" class="btn btn-primary">Discover More</a>

              <button class="flex-btn">
                <div class="btn-icon">
                  <ion-icon name="play" aria-hidden="true"></ion-icon>
                </div>

                <span class="span">How it works</span>
              </button>
            </div>

          </div>

          <figure class="hero-banner has-before img-holder" style="--width: 650; --height: 650;">
            <img src="./images/hero-banner.png" width="650" height="650" alt="hero banner" class="img-cover">
          </figure>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" id="about" aria-label="about">
        <div class="container">

          <figure class="about-banner">
            <img src="./images/about-banner.png" width="802" height="654" loading="lazy" alt="about banner"
              class="w-100">
          </figure>

          <div class="about-content">

            <h2 class="h2-sm section-title">We Provide the management Team in start-ups with tools for success.</h2>

            <p class="section-text">
              According to Glassdoor.com, Many Start-ups don't fail because of the idea, but because of lack of communication between the Founding Partners and their Employees. Below are some of the things our Tools can give your start-up
            </p>

            <ul class="about-list">

              <li class="has-before">
                Communication from the Management to Employees
              </li>

              <li class="has-before">
                Employees get to see their Daily Tasks in the Organization
              </li>

              <li class="has-before">
                Management share the state of the Company to employees.
              </li>

              <li class="has-before">
                Money back guarantee Within 15-days of payment.
              </li>

            </ul>

            <div class="btn-group">
              <a href="#" class="btn btn-primary">Get Started</a>

              <button class="flex-btn">
                <div class="btn-icon">
                  <ion-icon name="medal-outline" aria-hidden="true"></ion-icon>
                </div>

                <span class="span">Helping Companies grow</span>
              </button>
            </div>

          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service" id="services" aria-label="service">
        <div class="container">

          <p class="section-subtitle text-center">-What We Offer-</p>

          <h2 class="h2 section-title text-center">How we help start-ups</h2>

          <p class="section-text text-center">
            Get the most of reduction in your team's operating costs for communication. Our Tools can enhance communication in your organization at a low cost.
          </p>

          <ul class="grid-list">

            <li>
              <div class="service-card has-after">

                <figure class="card-icon">
                  <img src="./images/service-1.png" width="140" height="140" loading="lazy"
                    alt="UI/UX Creative Design" class="img">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Easy to use tools</h3>

                  <p class="card-text">
                    On our platform, Companies get great tools they can use in sharing data with their employees. Data communication is essential.
                  </p>

                  <a href="#" class="btn-link">
                    <span class="span">Read More</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card has-after">

                <figure class="card-icon">
                  <img src="./images/service-2.png" width="140" height="140" loading="lazy" alt="App Development"
                    class="img">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Keeping Track of Progress</h3>

                  <p class="card-text">
                    With our easy to use tool, organizations can share to their employees whether they are making any form of progress.
                  </p>

                  <a href="#" class="btn-link">
                    <span class="span">Read More</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card has-after">

                <figure class="card-icon">
                  <img src="./images/service-3.png" width="140" height="140" loading="lazy"
                    alt="Professional Content Writer" class="img">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Accelerating Start-ups</h3>

                  <p class="card-text">
                    We help in Accelerating up the product development for start-ups through an effective communication from senior management to employees.
                  </p>

                  <a href="#" class="btn-link">
                    <span class="span">Read More</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card has-after">

                <figure class="card-icon">
                  <img src="./images/service-4.png" width="140" height="140" loading="lazy" alt="Graphic Design"
                    class="img">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">An amazing UI/UX with our tools</h3>

                  <p class="card-text">
                    We built a tool and we built a great User Interface(UI) to ensure Organizations can easily make use of our tools. Founders understand how our tool works in less than 30minutes.
                  </p>

                  <a href="#" class="btn-link">
                    <span class="span">Read More</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card has-after">

                <figure class="card-icon">
                  <img src="./images/service-2.png" width="140" height="140" loading="lazy" alt="Graphic Design"
                    class="img">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Annonymous Feedbacks</h3>

                  <p class="card-text">
                    Another extra of the great tool we built is to give employees the chance to give both negative and positive feedbacks to senior Management
                  </p>

                  <a href="#" class="btn-link">
                    <span class="span">Read More</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

            <li>
              <div class="service-card has-after">

                <figure class="card-icon">
                  <img src="./images/service-1.png" width="140" height="140" loading="lazy" alt="Graphic Design"
                    class="img">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Keeping track of sprints</h3>

                  <p class="card-text">
                    We believe so much in the tool we've built and we know it helps a start-up in keeping track of sprints in the organization.
                  </p>

                  <a href="#" class="btn-link">
                    <span class="span">Read More</span>

                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                  </a>

                </div>

              </div>
            </li>

          </ul>

          <a href="#" class="btn btn-primary">Get Started</a>

        </div>
      </section>





      <!-- 
        - #FEATURES
      -->

      <section class="section features" id="features" aria-label="features">
        <div class="container">

          <p class="section-subtitle text-center">-Why Choose Us-</p>

          <h2 class="h2 section-title text-center">Reasons to Choose Us</h2>

          <p class="section-text text-center">
            We are making a way for an effective communication in the start-up Teams. We provide Organizations the tools needed to grow and not having to worry about communication.
          </p>

          <ul class="grid-list">

            <li>
              <div class="features-card">

                <data class="card-number" value="01">01</data>

                <h3 class="h3 card-title">Money back guarantee</h3>

                <p class="card-text">
                  We give Companies a 15-day period where they can request for their money back.
                </p>

              </div>
            </li>

            <li>
              <div class="features-card">

                <data class="card-number" value="02">02</data>

                <h3 class="h3 card-title">Easy to talk with</h3>

                <p class="card-text">
                  Call us today to determine a Pricce-plan that suits your Organization.
                </p>

              </div>
            </li>

            <li>
              <div class="features-card">

                <data class="card-number" value="03">03</data>

                <h3 class="h3 card-title">An Easy to interact with UI</h3>

                <p class="card-text">
                  One key focus for us is to make sure that the tools we build are very easy to use.
                </p>

              </div>
            </li>

            <li>
              <div class="features-card">

                <data class="card-number" value="04">04</data>

                <h3 class="h3 card-title">Reducing CEO's stress</h3>

                <p class="card-text">
                  Our tool's aim is to reduce the work-load for a CEO especially in the early days.
                </p>

              </div>
            </li>

            <li>
              <div class="features-card">

                <data class="card-number" value="05">05</data>

                <h3 class="h3 card-title">Great Company ulture</h3>

                <p class="card-text">
                  Our goal is to create a company culture where employees can express their voice.
                </p>

              </div>
            </li>

            <li>
              <div class="features-card">

                <data class="card-number" value="06">06</data>

                <h3 class="h3 card-title">Very Reasonable Price</h3>

                <p class="card-text">
                  We encourage every start-up Management team to ge on a call with us anytime.
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #FAQ
      -->

      <section class="section faq" aria-label="frequently asked questions">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="h2 section-title">Discover Frequently Asked Questions?</h2>

            <a href="#" class="btn btn-primary">Get Started</a>
          </div>

          <ul class="grid-list">

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    01. Is there a price-plan for my start-up? Yes there sure is .
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    Our Phone Numbers are on our website and you can get on a call with any of our Team, talk to them about whatyour start-up is, how many employees, e.t.c
                    <br> We would love to hear from you.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    02. Where Could a Career in UX Take You? Agency vs. In-House vs. Freelance?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed varius, diam vitae
                    posuere semper, libero ex
                    hendrerit nunc, ac sagittis eros metus ut diam. Donec a nibh in libero maximus vehicula. Etiam sit
                    amet condimentum
                    erat. Pellentesque ultrices sagittis turpis, quis tempus ante viverra et.Morbi aliquam quis quam in
                    luctus. Nullam
                    tincidunt pulvinar imperdiet. Sed varius, diam vitae posuere semper, tincidunt pulvinar imperdiet.
                    Sed varius, diam
                    vitae posuere semper.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    03. What Is a Problem Statement in UX? (And How To Write One?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed varius, diam vitae
                    posuere semper, libero ex
                    hendrerit nunc, ac sagittis eros metus ut diam. Donec a nibh in libero maximus vehicula. Etiam sit
                    amet condimentum
                    erat. Pellentesque ultrices sagittis turpis, quis tempus ante viverra et.Morbi aliquam quis quam in
                    luctus. Nullam
                    tincidunt pulvinar imperdiet. Sed varius, diam vitae posuere semper, tincidunt pulvinar imperdiet.
                    Sed varius, diam
                    vitae posuere semper.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    04. There are several techniques UX designers employ to arrive at a succinct?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed varius, diam vitae
                    posuere semper, libero ex
                    hendrerit nunc, ac sagittis eros metus ut diam. Donec a nibh in libero maximus vehicula. Etiam sit
                    amet condimentum
                    erat. Pellentesque ultrices sagittis turpis, quis tempus ante viverra et.Morbi aliquam quis quam in
                    luctus. Nullam
                    tincidunt pulvinar imperdiet. Sed varius, diam vitae posuere semper, tincidunt pulvinar imperdiet.
                    Sed varius, diam
                    vitae posuere semper.
                  </p>
                </div>

              </div>
            </li>

            <li>
              <div class="faq-card">

                <button class="card-action" data-accordion-action>
                  <h3 class="h3 card-title">
                    05. What are the obstacles users are facing? What are they trying to do?
                  </h3>

                  <div class="action-icon">
                    <ion-icon name="add-outline" aria-hidden="true" class="open"></ion-icon>
                    <ion-icon name="remove-outline" aria-hidden="true" class="close"></ion-icon>
                  </div>
                </button>

                <div class="card-content">
                  <p>
                    Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed varius, diam vitae
                    posuere semper, libero ex
                    hendrerit nunc, ac sagittis eros metus ut diam. Donec a nibh in libero maximus vehicula. Etiam sit
                    amet condimentum
                    erat. Pellentesque ultrices sagittis turpis, quis tempus ante viverra et.Morbi aliquam quis quam in
                    luctus. Nullam
                    tincidunt pulvinar imperdiet. Sed varius, diam vitae posuere semper, tincidunt pulvinar imperdiet.
                    Sed varius, diam
                    vitae posuere semper.
                  </p>
                </div>

              </div>
            </li>

          </ul>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top section">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">Start-ups Connect</a>

          <p class="footer-text">
            Lorem ipsum dolor sit amet consecte tur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
          </p>

          <form action="" class="newsletter-form">
            <input type="email" name="email_address" placeholder="Enter your email" required class="email-field">

            <button type="submit" class="form-btn">
              <ion-icon name="paper-plane" aria-hidden="true"></ion-icon>
            </button>
          </form>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Our Services</p>
          </li>

          <li>
            <a href="#" class="footer-link">Strategy & Research</a>
          </li>

          <li>
            <a href="#" class="footer-link">Web Development</a>
          </li>

          <li>
            <a href="#" class="footer-link">Web Solution</a>
          </li>

          <li>
            <a href="#" class="footer-link">Digital Merketing</a>
          </li>

          <li>
            <a href="#" class="footer-link">App Design</a>
          </li>

          <li>
            <a href="#" class="footer-link">App Development</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Company</p>
          </li>

          <li>
            <a href="#" class="footer-link">About Company</a>
          </li>

          <li>
            <a href="#" class="footer-link">Our Services</a>
          </li>

          <li>
            <a href="#" class="footer-link">Our Portfolio</a>
          </li>

          <li>
            <a href="#" class="footer-link">Our Blog</a>
          </li>

          <li>
            <a href="#" class="footer-link">Latest News</a>
          </li>

          <li>
            <a href="#" class="footer-link">Contact Us</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Contact Us</p>
          </li>

          <li class="footer-item">
            <ion-icon name="location" aria-hidden="true"></ion-icon>

            <address class="contact-link address">
              4517 Washington Ave. Manchester, Kentucky 39495
            </address>
          </li>

          <li class="footer-item">
            <ion-icon name="call" aria-hidden="true"></ion-icon>

            <a href="tel:+7894631546876" class="contact-link">+7894631546876</a>
          </li>

          <li class="footer-item">
            <ion-icon name="mail" aria-hidden="true"></ion-icon>

            <a href="mailto:info@Start-ups Connect.com" class="contact-link">info@Start-ups Connect.com</a>
          </li>

          <li class="footer-item">
            <ul class="social-list">

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

              <li>
                <a href="#" class="social-link">
                  <ion-icon name="logo-pinterest"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2023 Start-ups Connect | All Rights Reserved by <a href="#" class="copyright-link">Start-ups Connect(SUC)</a>
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="#" class="footer-bottom-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">Terms of Use</a>
          </li>

        </ul>

      </div>
    </div>

  </footer>





  <!-- 
    - custom js link
  -->
  <script src="./main.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>