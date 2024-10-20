  <footer class="footer">
    <p class="footer__design">
      <a href="https://www.linkedin.com/in/milos-cemalovic" target="_blanc" class="footer__link">Design by Naturally Development</a>
    </p>

    <div class="social">

      <a class="social__link" href="https://www.linkedin.com/in/milos-cemalovic" target="_blanc">
        <svg class="social__icon social__icon--1">
          <use xlink:href="img/kafeterija/sprite.svg#icon-linkedin1"></use>
        </svg>
      </a>

      <a class="social__link" href="https://github.com/MilosCemalovic" target="_blanc">
        <svg class="social__icon social__icon--2">
          <use xlink:href="img/kafeterija/sprite.svg#icon-github1"></use>
        </svg>
      </a>

      <a class="social__link" href="https://www.facebook.com/cemalovicmilos" target="_blanc">
        <svg class="social__icon social__icon--3">
          <use xlink:href="img/kafeterija/sprite.svg#icon-facebook1"></use>
        </svg>
      </a>

      <a class="social__link" href="https://www.instagram.com/naturally_dance/" target="_blanc">
        <svg class="social__icon social__icon--4">
          <use xlink:href="img/kafeterija/sprite.svg#icon-instagram1"></use>
        </svg>
      </a>

      <a class="social__link social__cv" href="img/CV_MilosCemalovic.pdf" download target="_blanc">
        CV
      </a>

    </div>
  </footer>
  
</body>
  
  <!-- Smooth scroll -->
	<script src="js/smooth-scroll.js"></script>
	<script>
		var scroll = new SmoothScroll('a[href*="#"]');
  </script>

  <!-- Intersection Observer / Animate on scroll and Navigation style change  -->
  <script>

    // Animate on scroll

    const sliders = document.querySelectorAll('.slide-in');

    const appearOptions = {
      threshold: 0.25,
      rootMargin: "0px" 
    };

    const appearOnScroll = new IntersectionObserver(function (entries, appearOnScroll) {

      entries.forEach(entry=> {

        if (!entry.isIntersecting) {
          
          return;

        } else {
          entry.target.classList.add('appear');
          appearOnScroll.unobserve(entry.target);
        }

      });

    }, appearOptions);

    sliders.forEach(slider=> {
      appearOnScroll.observe(slider);
    });

    // Navigation style change
    
    const navigation = document.querySelector(".nav");
    const sectionTwo = document.querySelector("header");

    const sectionTwoOptions = {
      rootMargin: "-50px 0px 0px 0px"
    };

    const sectionTwoObserver = new IntersectionObserver(function(entries, sectionTwoObserver) {
      entries.forEach(entry=> {
        if (!entry.isIntersecting) {
          navigation.classList.add("nav-scrolled");
        } else {
          navigation.classList.remove("nav-scrolled");
        }
      });
    }, sectionTwoOptions);

    sectionTwoObserver.observe(sectionTwo);

  </script>

</html>