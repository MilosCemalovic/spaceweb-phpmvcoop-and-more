<form action="routes.php" method="post" id="registration" class="form-create-page">

  <h5 class="heading-5 heading-5--green heading-5--create-page">
    Remove user from Database
  </h5>

  <div class="form-create-page__table-delete-page-1">
    
    <p class="table-header">Full name</p>
    <p class="table-header">Email</p>
    <p class="table-header">Phone</p>
    <p class="table-header">Skills</p>
    <p class="table-header">Opinion</p>
    <p class="table-header">Developer</p>
    <p class="table-header">Letter</p>
    <p class="table-header">Action</p>

  <?php foreach ($readalldata as $read) { ?>

    <p class="table-data"><?php echo $read['fullname'] ?></p>
    <p class="table-data"><?php echo $read['email'] ?></p>
    <p class="table-data"><?php echo $read['phone'] ?></p>
    <p class="table-data"><?php echo $read['skills'] ?></p>
    <p class="table-data"><?php echo $read['opinion'] ?></p>
    <p class="table-data"><?php echo $read['developer'] ?></p>
    <p class="table-data"><?php echo $read['letter'] ?></p>
    <p class="table-data"><a href="routes.php?page=delete&id=<?php echo $read['id'] ?>" class="delete-user">Delete</a></p>

  <?php } ?>
  </div>
  

  <div class="form-create-page__table-delete-page-2">  
    
    <?php foreach ($readalldata as $read) { ?>
    
    <div class="table-box">    
    
      <p class="table-header">Full name</p>
      <p class="table-header">Email</p>
      <p class="table-header">Phone</p>
      <p class="table-header">Skills</p>
      <p class="table-header">Opinion</p>
      <p class="table-header">Developer</p>
      <p class="table-header">Letter</p>
    <p class="table-header">Action</p>

    </div>

    <div class="table-box">

      <p class="table-data"><?php echo $read['fullname'] ?></p>
      <p class="table-data"><?php echo $read['email'] ?></p>
      <p class="table-data"><?php echo $read['phone'] ?></p>
      <p class="table-data"><?php echo $read['skills'] ?></p>
      <p class="table-data"><?php echo $read['opinion'] ?></p>
      <p class="table-data"><?php echo $read['developer'] ?></p>
      <p class="table-data"><?php echo $read['letter'] ?></p>
      <p class="table-data"><a href="routes.php?page=delete&id=<?php echo $read['id'] ?>" class="delete-user">Delete</a></p>

    </div>

    <?php } ?>
  </div>
  
  <h4 class="heading-4 heading-4--green heading-4--create-page">
    <a class="heading-4__link" href="routes.php?page=showcreatepage">Create more inputs</a>
  </h4>

  <h5 class="heading-5 heading-5--green heading-5--create-page">
    Hope you like this project!
  </h5>

</form>