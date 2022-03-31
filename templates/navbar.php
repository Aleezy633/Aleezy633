<nav class="navbar navbar-light bg-light" style="height: 100px">
  <div class="container-fluid">
    <img src="images/logo.png.png" width="300" height="auto" style="margin-top: -35px;"></img>



    <form method="POST" action="index.php" class="form-inline">
      <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search" aria-label="Search">
      <button type="submit" class="btn btn-primary btn-sm" style="background: #59a7db;">Search</button>
    </form>



    <div class="dropdown">
      <a class="btn btn-secondary dropdown-toggle" style="background: #59a7db;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
        <?php
        session_name("session");
        SESSION_START();
        echo $_SESSION['user_email'];
        ?>
      </a>

      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <form method="POST" action="index.php" class="form-inline">
          <li><input type="submit" class="dropdown-item" name="einstellungen" value="Einstellungen"></button></li>
          <li><input type="submit" class="dropdown-item" name="logout" value="Logout"></button></li>


        </form>
      </ul>
    </div>



  </div>
</nav>