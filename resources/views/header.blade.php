<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            </a>
            <ul class="dropdown-menu">
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="nav-link px-3 border-0"> 
                    <span class="align-text-bottom"></span>
                    Sign Out
                  </button>
                </form> 
            </li>
              <li><a class="dropdown-item" href="/dashboard/laporan">Dashboard</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>