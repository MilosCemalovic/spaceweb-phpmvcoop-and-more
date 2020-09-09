<form action="routes.php" method="post" id="registration" class="form-create-page">
  
  <h5 class="heading-5 heading-5--green heading-5--create-page">
    Basic information
  </h5>

  <div class="form-create-page__input-box">
    <input type="text" class="form-create-page__input" placeholder="Your Full Name" name="fullname" value="<?php echo $fullname ?>">
    
    <input type="text" class="form-create-page__input" placeholder="Your Email" name="email" value="<?php echo $email ?>">
    
    <input type="text" class="form-create-page__input" placeholder="Your Phone No." name="phone" value="<?php echo $phone ?>">
  </div>

  <h5 class="heading-5 heading-5--green heading-5--create-page">
    Web developer on this project is using
  </h5>

  <div class="form-create-page__checkbox-box">
    <input type="checkbox" id="checkbox-1" class="form-create-page__checkbox form-create-page__checkbox--1" name="skills[]" value="html5">
    <label for="checkbox-1" class="form-create-page__label form-create-page__label--checkbox">
      <span class="form-create-page__label-span--checkbox"></span>
      HTML5
    </label>

    <input type="checkbox" id="checkbox-2" class="form-create-page__checkbox form-create-page__checkbox--2" name="skills[]" value="cssgrid">
    <label for="checkbox-2" class="form-create-page__label form-create-page__label--checkbox">
      <span class="form-create-page__label-span--checkbox"></span>
      CSS Grid
    </label>

    <input type="checkbox" id="checkbox-3" class="form-create-page__checkbox form-create-page__checkbox--3" name="skills[]" value="flexbox">
    <label for="checkbox-3" class="form-create-page__label form-create-page__label--checkbox">
      <span class="form-create-page__label-span--checkbox"></span>
      Flexbox
    </label>

    <input type="checkbox" id="checkbox-4" class="form-create-page__checkbox form-create-page__checkbox--4" name="skills[]" value="bem">
    <label for="checkbox-4" class="form-create-page__label form-create-page__label--checkbox">
      <span class="form-create-page__label-span--checkbox"></span>
      BEM Architecture
    </label>

    <input type="checkbox" id="checkbox-5" class="form-create-page__checkbox form-create-page__checkbox--5" name="skills[]" value="sass">
    <label for="checkbox-5" class="form-create-page__label form-create-page__label--checkbox">
      <span class="form-create-page__label-span--checkbox"></span>
      SASS
    </label>

    <input type="checkbox" id="checkbox-6" class="form-create-page__checkbox form-create-page__checkbox--6" name="skills[]" value="mvcoopphp">
    <label for="checkbox-6" class="form-create-page__label form-create-page__label--checkbox">
      <span class="form-create-page__label-span--checkbox"></span>
      MVC OOP PhP
    </label>
  </div>

  <h5 class="heading-5 heading-5--green heading-5--create-page">
    Select your opinion
  </h5>

  <select class="form-create-page__select" name="opinion">
    <option class="form-create-page__option">My honest opinion is</option>
    <option value="impressive" class="form-create-page__option">This is impressive</option>
    <option value="joboffer" class="form-create-page__option">I would like to offer you a job</option>
    <option value="good" class="form-create-page__option">This is good</option>
    <option value="likeit" class="form-create-page__option">I like it</option>
    <option value="keepup" class="form-create-page__option">Keep up with good work</option>
  </select>

  <h5 class="heading-5 heading-5--green heading-5--create-page">
    Are you a web developer?
  </h5>

  <div class="form-create-page__radio-box">
    <input type="radio" class="form-create-page__radio form-create-page__radio--1" id="radio-1" name="developer" value="yes">
    <label for="radio-1" class="form-create-page__label form-create-page__label--radio">
      <span class="form-create-page__label-span--radio"></span>
      Yes
    </label>
    
    <input type="radio" class="form-create-page__radio form-create-page__radio--2" id="radio-2" name="developer" value="no">
    <label for="radio-2" class="form-create-page__label form-create-page__label--radio">
      <span class="form-create-page__label-span--radio"></span>
      No
    </label>
  </div>

  <h5 class="heading-5 heading-5--green heading-5--create-page">
    Your message for me
  </h5>

  <textarea class="form-create-page__textarea" name="letter" id="letter" placeholder="Please enter your message"></textarea>

  <button type="submit" class="btn btn--form-create-page" name="page" value="formcreatepage">Submit</button>
    
  <h4 class="heading-4 heading-4--green heading-4--create-page">
    <a class="heading-4__link" href="routes.php?page=showreadpage">Check out outputs</a>
  </h4>

  <h4 class="heading-4 heading-4--create-page"> <?php if(isset($msg)) echo $msg ?> </h4>  

    <?php if(array_key_exists('fullname', $errors)) { ?>
      <h5 class="heading-5 heading-5--green" style="grid-column:1/-1;">  <?php echo $errors['fullname'] ?> </h5>
    <?php } ?>

    <?php if(array_key_exists('email', $errors)) { ?>
      <h5 class="heading-5 heading-5--green" style="grid-column:1/-1;">  <?php echo $errors['email'] ?> </h5>
    <?php } ?>

    <?php if(array_key_exists('phone', $errors)) { ?>
      <h5 class="heading-5 heading-5--green" style="grid-column:1/-1;">  <?php echo $errors['phone'] ?> </h5>
    <?php } ?>

    <?php if(array_key_exists('skills', $errors)) { ?>
      <h5 class="heading-5 heading-5--green" style="grid-column:1/-1;">  <?php echo $errors['skills'] ?> </h5>
    <?php } ?>

    <?php if(array_key_exists('opinion', $errors)) { ?>
      <h5 class="heading-5 heading-5--green" style="grid-column:1/-1;">  <?php echo $errors['opinion'] ?> </h5>
    <?php } ?>

    <?php if(array_key_exists('developer', $errors)) { ?>
      <h5 class="heading-5 heading-5--green" style="grid-column:1/-1;">  <?php echo $errors['developer'] ?> </h5>
    <?php } ?>

    <?php if(array_key_exists('letter', $errors)) { ?>
      <h5 class="heading-5 heading-5--green" style="grid-column:1/-1;">  <?php echo $errors['letter'] ?> </h5>
    <?php } ?>

  

</form>