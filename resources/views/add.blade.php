<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="">
            <div class="container">
              <div>
                <h2>Add</h2>

              </div>
              <form action="{{route('data.store')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Mobile</label>
                  <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" class="form-control" id="email"  name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="password">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">College</label>
                  <input type="text" class="form-control" id="college" name="college" placeholder="college">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
    </body>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('/js/popper.min.js')}}"></script>
</html>
