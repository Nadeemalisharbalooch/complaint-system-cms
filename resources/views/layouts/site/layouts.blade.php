<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('site\style.css')}}">
    <title>SBBU-SBA</title>
    
    <style>
    .back {
      
    background-image: url('	http://app.sbbusba.edu.pk/sbbu/images/sbbu.jpg'); /* Adjust the path to your image */
    background-size: cover; /* Scale the background image to cover the entire container */
    background-repeat: no-repeat; /* Prevent the background image from repeating */
    }

    .container {
    border: 1px solid #ddd;
    padding: 10px;
}

/* Rest of the CSS styles for the grid and cells */
.header-cell,
.content-cell {
    border: 1px solid #ddd;
    padding: 10px;
    margin-bottom: 10px;
}

.header-cell {
    font-weight: bold;
    background-color: #f2f2f2;
}

.serial-number {
    font-weight: bold;
}

@media (max-width: 768px) {
    .col-lg-1,
    .col-lg-3,
    .col-lg-2 {
        width: 100%;
    }
}

</style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-info ">
  <a class="navbar-brand" href="#"><img src="https://www.sbbusba.edu.pk/images/logo.png" width="50%" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link text-white" href="{{url('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="{{url('mycomplain')}}">Mycomplains</a>
      </li>     
    </ul>
  </div>
  <div class="mr-5">
  <a class="dropdown-item btn btn-danger" href="{{ route('logout') }}"
  onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                         </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                      </form>                                                                
  </div>
</nav>

<!--  here body  contents -->
@yield('content')  
 
  <div class="card-footer text-white bg-dark text-center">
  Shaheed Benazir Bhutto University, Shaheed Benazirabad near landhi Stop Sakrand road Nawab Shah, Sindh, Pakistan <br>
Tel : +92-244-9370522, Registrar 9370524, Secretary-to-Vice-Chancellor 92-244-9370520, Fax. +92-244-9370521<br>
E-mail:- vc@sbbusba.edu.pk, registrar@sbbusba.edu.pk, ps.vc@sbbusba.edu.pk, systemadmin@sbbusba.edu.pk
  </div>

  </body>
</html>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="{{asset('site/javascript.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    