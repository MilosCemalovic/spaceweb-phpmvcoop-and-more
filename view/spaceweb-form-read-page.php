<form action="routes.php" method="post" id="registration" class="form-create-page">

  <h5 class="heading-5 heading-5--green heading-5--create-page">
  Single Database Output
  </h5>

  <select class="form-create-page__select" name="opinion">
    <option class="form-create-page__option">User Full Name</option>

  <?php foreach ($readfullname as $read) { ?>

    <option class="form-create-page__option">
      <?php echo $read['fullname'] ?>
    </option>

  <?php } ?>
  
  </select>

  <select class="form-create-page__select" name="opinion">
    <option class="form-create-page__option">User Email</option>

  <?php foreach ($reademail as $read) { ?>

    <option class="form-create-page__option">
      <?php echo $read['email'] ?>
    </option>

  <?php } ?>

  </select>

  <select class="form-create-page__select" name="opinion">
    <option class="form-create-page__option">User Phone</option>

  <?php foreach ($readphone as $read) { ?>

    <option class="form-create-page__option">
      <?php echo $read['phone'] ?>
    </option>

  <?php } ?>

  </select>

  <select class="form-create-page__select" name="opinion">
    <option class="form-create-page__option">User Letter</option>

  <?php foreach ($readletter as $read) { ?>

    <option class="form-create-page__option">
      <?php echo $read['letter'] ?>
    </option>

  <?php } ?>

  </select>
    
  <h5 class="heading-5 heading-5--green heading-5--create-page">
  Full Database Output
  </h5>

  <div class="form-create-page__table-read-page-1">
    
    <p class="table-header">Full name</p>
    <p class="table-header">Email</p>
    <p class="table-header">Phone</p>
    <p class="table-header">Skills</p>
    <p class="table-header">Opinion</p>
    <p class="table-header">Developer</p>
    <p class="table-header">Letter</p>

  <?php foreach ($readalldata as $read) { ?>

    <p class="table-data"><?php echo $read['fullname'] ?></p>
    <p class="table-data"><?php echo $read['email'] ?></p>
    <p class="table-data"><?php echo $read['phone'] ?></p>
    <p class="table-data"><?php echo $read['skills'] ?></p>
    <p class="table-data"><?php echo $read['opinion'] ?></p>
    <p class="table-data"><?php echo $read['developer'] ?></p>
    <p class="table-data"><?php echo $read['letter'] ?></p>

  <?php } ?>
  </div>
  

  <div class="form-create-page__table-read-page-2">  
    
    <?php foreach ($readalldata as $read) { ?>
    
    <div class="table-box">    
    
      <p class="table-header">Full name</p>
      <p class="table-header">Email</p>
      <p class="table-header">Phone</p>
      <p class="table-header">Skills</p>
      <p class="table-header">Opinion</p>
      <p class="table-header">Developer</p>
      <p class="table-header">Letter</p>

    </div>

    <div class="table-box">

      <p class="table-data"><?php echo $read['fullname'] ?></p>
      <p class="table-data"><?php echo $read['email'] ?></p>
      <p class="table-data"><?php echo $read['phone'] ?></p>
      <p class="table-data"><?php echo $read['skills'] ?></p>
      <p class="table-data"><?php echo $read['opinion'] ?></p>
      <p class="table-data"><?php echo $read['developer'] ?></p>
      <p class="table-data"><?php echo $read['letter'] ?></p>

    </div>

    <?php } ?>
  </div>
  
  <h4 class="heading-4 heading-4--green heading-4--create-page">
    <a class="heading-4__link" href="routes.php?page=showupdatepage">Update user inputs</a>
  </h4>

</form>