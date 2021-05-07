
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Sign Up | Farm Fresh</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/floating-labels/floating-labels.css" rel="stylesheet">
  </head>

  <body>
    <form class="form-signin" method="post" action="{{ URL::route('signup.verify') }}">
      @csrf 

      <div class="text-center mb-4">
        <img class="mb-4" src="https://seeklogo.com/images/F/farm-fresh-logo-784D6B0BEF-seeklogo.com.png" alt="" width="100%">
        <h1 class="h3 mb-3 font-weight-normal">Sign Up to order</h1> 
      </div>

      
      @if(session('error'))
        <p class="text-danger">{{ session('error') }}</p>
      @endif

      <div class="form-label-group">
        <input name="name" type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail">Name</label>
      </div>
      <div class="form-label-group">
        <input name="contact" type="tel" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail">Contact</label>
      </div>

      <div class="form-label-group">
        <input name="address" type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail">Address</label>
      </div>

      <div class="form-label-group">
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail">Email address</label>
      </div>

      <div class="form-label-group">
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div> 

      <a href="{{ URL::route('login') }}">Log In to your account</a><br>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2021-2022</p>
    </form>


    <style>
      form{
        background:white;
        border-radius: 10px;
        padding-left:5% !important;
        padding-right:5% !important;
      }
      body{
        background-image: url('bg.gif');
        background-repeat:no-repeat;
        background-size: cover;
      }
      .btn-primary{
        background: #f6a400;
        border:none;
      }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  </body>
</html>
