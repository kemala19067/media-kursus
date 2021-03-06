<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container">
      <a class="navbar-brand" href="/">TIK</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
          </li>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Course
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="/courses">Materi</a></li>
            <li><a class="dropdown-item" href="#">Bookmark</a></li>
            <li><a class="dropdown-item" href="#">History</a></li>
          </ul>
        </li>
        </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/kuis" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Quiz
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/kuis">Daftar Quiz</a></li>
              <li><a class="dropdown-item" href="#">Peringkat</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Forum") ? 'active' : '' }}" href="/forum">Forum</a>

        </ul>
      </div>
    </div>
  </nav>



