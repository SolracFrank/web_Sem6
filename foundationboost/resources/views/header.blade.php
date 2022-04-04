<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{route('main')}}">SCP Foundation(esp)</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('main')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('anomaly')}}">Anomalías</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('personal')}}">Personal</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>