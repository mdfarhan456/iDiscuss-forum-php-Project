<?php

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">

    <a class="navbar-brand" href="/forumProject">iDiscuss</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/forumProject">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link"
             href="/forumProject/components/about.php"
             target="_blank"
             rel="noopener noreferrer">
             About
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button"
             data-bs-toggle="dropdown" aria-expanded="false">
            Categories <i class="fas fa-chevron-down"></i>
          </a>

          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item d-flex align-items-center gap-2" href="#">
                <i class="fas fa-home"></i> Action
              </a>
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center gap-2" href="#">
                <i class="fas fa-layer-group"></i> Another action
              </a>
            </li>

            <li><hr class="dropdown-divider"></li>

            <li>
              <a class="dropdown-item d-flex align-items-center gap-2" href="#">
                <i class="fas fa-info-circle"></i> Something else here
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link"
             href="/forumProject/components/contact.php"
             target="_blank"
             rel="noopener noreferrer">
             Contact
          </a>
        </li>

      </ul>

      <div class="d-flex align-items-center gap-2">
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>

        <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#loginModal">
          Login
        </button>

        <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#signupModal">
          Signup
        </button>

      </div>

    </div>
  </div>
</nav>';
?>
