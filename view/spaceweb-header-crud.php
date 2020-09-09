<nav class="header-crud">

  <ul class="header-crud__list">

    <li class="header-crud__item">
      <a href="routes.php?page=showcreatepage" class="header-crud__link">Create</a>
    </li>

    <li class="header-crud__item">
      <a href="routes.php?page=showreadpage" class="header-crud__link">Read</a>
    </li>

    <li class="header-crud__item">
      <a href="routes.php?page=showupdatepage" class="header-crud__link">Update</a>
    </li>

    <li class="header-crud__item">
      <a href="routes.php?page=showdeletepage" class="header-crud__link">Delete</a>
    </li>
  </ul>

  <form action="#" class="form">

    <input type="text" class="form__input" name="keyword" placeholder="Search">

    <button class="form__btn">
      <svg class="form__icon">
        <use xlink:href="img/spaceweb/sprite.svg#icon-search-2"></use>
      </svg>
    </button>

  </form>
</nav>