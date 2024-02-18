
<!DOCTYPE html>
<html lang="pt-ao">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>

    <!--  -->
        <link rel="stylesheet" href="/imgs/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="/estilos/bootstrap/bootstrap.css">
        <script defer src="/estilos/bootstrap/bootstrap.js"></script>

        <link rel="stylesheet" href="/estilos/main.css">
        @yield("link")
    <!--  -->

</head>
<body class="bg-light">
    
    <!-- HEADER -->

    <header class="container-fluid">
        <div class="logo">
          {{-- <img src="/imgs/start-up.png" alt="Logo" width="50" height="50">
          <h1>shop4M</h1> --}}
        </div>
        <nav>
          <ul>
            <!-- <li>
              <a href="{{ route('user.dash') }}">
                <i class="fa-solid fa-house"></i>
              </a>
            </li> -->
            <!-- <li>
              <a href="">
                <i class="fa-solid fa-user"></i>
              </a>
            </li> -->
            <button disabled class="text-light">
              <span>
                Admin: Morgado Andrade
              </span>
            </button>
            <li>
              <div class="flex-shrink-0 dropdown">
                  <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="/imgs/gui-melo.JPG" alt="mdo" width="32" height="32" class="rounded-circle">
                  </a>
                  <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.0/examples/headers/#">My profile</a></li>
                    <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.0/examples/headers/#">Settings</a></li>
                    <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.0/examples/headers/#">Notifications</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                      <a class="dropdown-item" href="https://getbootstrap.com/docs/5.0/examples/headers/#">
                        Log out
                      </a>
                    </li>
                  </ul>
              </div>
            </li>
          </ul>
        </nav>
    </header>
   
    <main class="container">
@yield("content")
    </main>

    <!-- FOOTER -->

    <footer class="container-fluid mt-5">
      <center>
        <span>
          <sup>
            &copy; <?php echo date('Y') ?> - 4M
          </sup>
        </span>
        <br>
        <br>
      </center>
    </footer>

</body>
</html>
