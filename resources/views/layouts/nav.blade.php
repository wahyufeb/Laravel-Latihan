<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <a class="navbar-brand" href="/">🐹</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href={{route("course")}}>Course</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href={{route("article")}}>Article</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href={{route("about")}}>About</a>
        </li>
        <li class="nav-item"><a href={{route("contact")}} class="nav-link">Contact</a></li>
      </ul>
    </div>
  </nav>