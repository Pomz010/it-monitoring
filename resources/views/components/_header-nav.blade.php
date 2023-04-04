<!-- HEADER NAV -->
<nav class="navbar bg-dark py-0">
    <div class="container-fluid">
      <a class="navbar-brand"><img src="./img/navlogo.png" alt="Company logo" width="100" height="45"></a>
      
      <div class="dropstart">
        <a class="btn btn-secondary dropdown-toggle fs-5 py-1" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-person-circle"></i>
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><a class="dropdown-item" href="#">Update credentials</a></li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <form method="POST" action="{{ route('signout')}}">
              @csrf
              <button type="submit" class="dropdown-item">Signout</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>