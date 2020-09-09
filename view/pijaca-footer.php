<footer class="footer-1"></footer>

<footer class="footer-2">    
  
  <div class="footer__box footer__box--1">

    <h5 class="heading-5 heading-5--footer-box-1">
      Your Farmers Market
    </h5>

    <p class="footer__day">
      Mon - Fri
    </p>

    <p class="footer__time">
      10:00am - 1:00pm
    </p>

    <p class="footer__time">
      10:00am - 1:00pm
    </p>

    <hr class="footer__line">

    <p class="footer__day">
      Sat
    </p>

    <p class="footer__time">
      10:00am - 1:00pm
    </p>

    <hr class="footer__line">

    <p class="footer__day">
      Sun
    </p>

    <p class="footer__op-cl">
      We are closed
    </p>

    <button class="btn btn--green btn--footer">Make a reservation</button>
    
  </div>
  
  <div class="footer__box footer__box--2">
      
    <h6 class="heading-6 heading-6--footer heading-6--footer-1">Drop Us a Line</h6>

    <p class="par par--footer-box-2">
      Don’t be shy. Let us know if you have any questions!
    </p>

    <button class="btn btn--green btn--footer">Write a message</button>
      
    <h6 id="contact" class="heading-6 heading-6--footer heading-6--footer-2">Easy Delivery</h6>

    <p class="par par--footer-box-2">
      Dialogue is an essential part of any script
    </p>

    <form action="routes.php" id="form" class="form" method="post">

      <input type="text" class="form__input" name="firstname" placeholder="First Name" value="<?php echo $ime ?>"><span>*<?php if(array_key_exists('firstname', $errors)) echo $errors['firstname'] ?></span>

      <input type="text" class="form__input" name="lastname" placeholder="Last Name" value="<?php echo $prezime ?>"><span>*<?php if(array_key_exists('lastname', $errors)) echo $errors['lastname'] ?></span>

      <input type="text" class="form__input" name="telephone" placeholder="Telephone No." value="<?php echo $telefon ?>"><span>*<?php if(array_key_exists('telephone', $errors)) echo $errors['telephone'] ?></span>

      <button class="btn btn--green btn--form" type="submit" name="page" value="contactus">Contact us</button>
    </form>

    <h5 class="heading-5 heading-5--footer-box-1">
      <?php if(isset($msg)) echo $msg ?>
    </h5>
    
  </div>

</footer>