<section class="booking" id="booking">

  <h6 class="heading-6 heading-6--booking">Book Rafting Tara</h6>

  <div class="booking__box">

    <form action="routes.php" class="form" method="post">

      <input type="text" class="form__input form__input--1" placeholder="Full name" id="name" name="fullname" value="<?php echo $fullname ?>">
      <label class="form__label-input form__label-input--1" for="name">Full name</label>

      <input type="email" class="form__input form__input--2" placeholder="Email address" id="email" name="email" value="<?php echo $email ?>">
      <label class="form__label-input form__label-input--2" for="email">Email address</label>

      <input type="radio" class="form__radio form__radio--1" name="group" id="small" value="smallgroup">
      <label class="form__label-radio form__label-radio--1" for="small">
        <span class="form__label-radio-button"></span>
        Small tour group
      </label>

      <input type="radio" class="form__radio form__radio--2" name="group" id="large" value="largegroup">
      <label class="form__label-radio form__label-radio--2" for="large">
        <span class="form__label-radio-button"></span>
        Large tour group
      </label>

      <button type="submit" name="page" value="bookingform" class="btn btn--white btn--booking">Book tour</button>

    </form>

  </div>

</section>

<?php if(isset($msg)) { ?>

  <h6 class="heading-6 heading-6--booking"> echo $msg; </h6>

<?php } ?>


<?php if(array_key_exists('fullname', $errors)) { ?>

  <span class="form__input-span"> echo $errors['fullname']  </span>

<?php } ?>


<?php if(array_key_exists('email', $errors)) { ?>

  <span class="form__input-span"> echo $errors['email']  </span>

<?php } ?>


<?php if(array_key_exists('group', $errors)) { ?>

  <span class="form__input-span"> echo $errors['group']  </span>

<?php } ?>