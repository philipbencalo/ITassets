<!DOCTYPE html>
<html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">  
        <link href= "./css/app.css" rel="stylesheet"/>
        <title>Delonix Log In</title>
      </head>
    <body class = "bgj">
      <br><br><br><br><br><br>        
      <div class="container ">
          <div class = "row">

          <section class="vh-100">
  <div class="container-fluid h-custom shadow p-3 mb-5 bg-body rounded">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mangosquarecebu.com/assets/images/delonix-logo-474x474.jpg" class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form method="post" action="{{ route('ITasset.login') }}">
        
          @csrf
       
          <!-- User Name Input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="uname">Username</label>
              <input type="text" id="uname" class="form-control form-control-lg" name = "uname"
               placeholder="Enter a Username" />
                @error ('uname')
                 <span class = "text-danger">{{ $message }} </span>
                @enderror
            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="pword">Password</label>
              <input type="password" id="pword" class="form-control form-control-lg" name = "pword"
               placeholder="Enter password" />
                @error ('pword')
                  <span class = "text-danger">{{ $message }} </span>
                 @enderror
            
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
           

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                class="link-danger">Contact Our IT Support </a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  </div>
</section>

          </div>
        </div>

    </body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>