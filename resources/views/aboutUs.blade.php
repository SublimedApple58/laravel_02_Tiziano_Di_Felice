<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="/style/style.css">
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fs-5">
      <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('homepage') }}">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{ route('services') }}">Services</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('aboutUs') }}">About us</a>
                  </li>
              </ul>
          </div>
      </div>
    </nav>
    <!-- fine navbar -->

    
    {{-- header --}}
      <header id="header" class="d-flex justify-content-center align-items-center header2">
        <h1>In giro per gli <strong>US</strong></h1>
      </header>
    {{-- fine header --}}

    {{-- main --}}
    <main id="chiSiamo" class="d-flex justify-content-center align-items-center flex-column gap-5 text-center my-5">
      <h1>Chi siamo</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perspiciatis ipsam facere illum aut quia eligendi doloremque a delectus mollitia? Perferendis hic rem maxime quae provident ipsam magnam cupiditate quo, porro quasi libero? Qui id neque esse labore fugiat error cum.
      </p>
    </main>
    {{-- fine main --}}

    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>