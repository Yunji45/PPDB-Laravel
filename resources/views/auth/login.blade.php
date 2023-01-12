<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Bro</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('home/template/style.css')}}">
</head>
<body>
<section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
            class="img-fluid" alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <h1 class="text-center"> FORM LOGIN </h1>
          <form action="{{ route('login.action') }}" method="post">
            @csrf
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="username" name="username" id="form1Example13" class="form-control form-control-lg" />
              <label class="form-label" for="form1Example13">Email</label>
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" name="password" id="form1Example23" class="form-control form-control-lg" />
              <label class="form-label" for="form1Example23">Password</label>
            </div>
  
            <div class="d-flex justify-content-around align-items-center mb-4">
              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                <label class="form-check-label" for="form1Example3"> Remember me </label>
              </div>
              <a href="{{route('register')}}">Register !!</a>
            </div>
            <button class="btn btn-primary btn-lg btn-block">Login</button>
          </form>

            <!-- Submit button -->
            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
            </div>
  
            <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
              role="button">
              <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
            </a>
            <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!"
              role="button">
              <i class="fab fa-twitter me-2"></i>Continue with Twitter</a>
  
        </div>
      </div>
    </div>
  </section>
</body>
</html>
