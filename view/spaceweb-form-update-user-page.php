<form action="routes.php" method="post" class="form-create-page">

  <h5 class="heading-5 heading-5--green heading-5--create-page" id="registration">
    Update This user
  </h5>

  <div class="form-create-page__input-box">
    <input type="text" class="form-create-page__input" placeholder="Your Full Name" name="fullname" value="<?php if(isset($user['fullname'])) echo $user['fullname'] ?>">
    
    <input type="text" class="form-create-page__input" placeholder="Your Email" name="email" value="<?php if(isset($user['email'])) echo $user['email'] ?>">
    
    <input type="text" class="form-create-page__input" placeholder="Your Phone No." name="phone" value="<?php if(isset($user['phone'])) echo $user['phone'] ?>">

    <input type="hidden" name="id" value="<?php if(isset($user['id'])) echo $user['id'] ?>">
  </div>

  <button type="submit" class="btn btn--form-create-page" name="page" value="update">Update</button>

  <h4 class="heading-4 heading-4--create-page"> <?php if(isset($msg)) echo $msg ?> </h4>
  
  <h4 class="heading-4 heading-4--green heading-4--create-page">
    <a class="heading-4__link" href="routes.php?page=showdeletepage">Delete user from Database</a>
  </h4>

</form>