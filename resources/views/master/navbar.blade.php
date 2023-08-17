<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}">
        
        <img 
        src="https://us.123rf.com/450wm/mamun25g/mamun25g2103/mamun25g210302659/165924710-cr%C3%A9ation-de-logo-de-lettre-rh-sur-fond-noir-concept-de-logo-de-lettre-initiales-cr%C3%A9atives-rh.jpg?ver=6" 
        alt=""
        width="50"
        height="50"
        class="rounded-circle"
        >
        <span class="text fs-4" style="font-family: 'Times New Roman', Times, serif">
          RH-Application
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
          {{-- <li class="nav-item">
            <a class="nav-link active" aria-current="page"  href="{{ url('/') }}" >Home</a>
          </li> --}}

          <li class="nav-item">
            <a class="nav-link" href="{{ route('employee.create') }}">Ajouter</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ url('/') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Home
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('employees') }}">Listes des employés</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>

          @if (auth()->check())
            <li class="nav-item">
              <a href="{{ route('profile.show') }}" class="nav-link">
              {{ auth()->user()->name }}</a>
            </li>
          @else
            <li class="nav-item">
              <a href="{{ url('/register') }}" class="nav-link">
                Inscription
              </a>
            </li>  
            <li class="nav-item">
              <a href="{{ url('/login') }}" class="nav-link">
                Connexion
              </a>
            </li>            
          @endif
          
          
        </ul>
      </div>
    </div>
  </nav>