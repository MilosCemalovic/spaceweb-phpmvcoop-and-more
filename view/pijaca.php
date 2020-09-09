<?php

$ime = isset($ime)?$ime:"";
$prezime = isset($prezime)?$prezime:"";
$telefon = isset($telefon)?$telefon:"";

$errors = isset($errors)?$errors:[];

session_start();
?>

<?php include'pijaca-nav.php'; ?>

<?php include'pijaca-header.php'; ?>

<?php include'pijaca-about.php'; ?>

<?php include'pijaca-photo-1.php'; ?>

<?php include'pijaca-story.php'; ?>

<?php include'pijaca-photo-2.php'; ?>

<?php include'pijaca-features.php'; ?>

<?php include'pijaca-footer.php'; ?>



<!-- Ne ucitava fajl main.js - proveriti zasto
  
<script src="js/main.js"></script> -->

<!-- Smooth scroll i  animate on scroll -->

<script src="js/smooth-scroll.js"></script>
<script>

// Smooth scroll 

  var scroll = new SmoothScroll('a[href*="#"]');

// animate on scroll 

const sliders = document.querySelectorAll('.slide-in');

const appearOptions = {
  threshold: 0.1,
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

</script>

</body>
</html>