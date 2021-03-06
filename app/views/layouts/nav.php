<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?= PATH ?>"><i class="fas fa-home"></i>&nbsp;MVC Site</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!--li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li-->
    </ul>
    <ul class="navbar-nav">
      <?php if(getSession('user_role') == 'admin'): ?>
      <li class="nav-item">
        <a class="nav-link" href="<?= PATH ?>post"><i class="fas fa-tachometer-alt"></i>&nbsp;Dashboard</a>
      </li-->
      <?php endif; ?> 
      <?php if(getSession('user_name')): ?>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-user-tie"></i>&nbsp;<?= getSession('user_name'); ?></a>
      </li-->
      <?php endif; ?> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle"></i>&nbsp;Member
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <?php if(getSession('user_name')): ?>
            <a class="dropdown-item" href="<?= PATH ?>user/logout">Logout</a>
          <?php else: ?>
            <a class="dropdown-item" href="<?= PATH ?>user/login">Login</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= PATH ?>user/register">Register</a>
          <?php endif; ?>
        </div>
      </li>
    </ul>
    <!--form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form-->
  </div>
</nav>


