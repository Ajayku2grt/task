<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="">
            <div class="container">
              <div>
                <h2>list</h2>
                <a href="{{route('data.create')}}" class="btn btn-primary float-right">Register</a>
              </div>

              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($users as $item)
                  <tr>                  
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->email}}</td>
                    <td>{{ $item->mobile}}</td>
                    <td>
                      <button class="btn btn-success UserShow" href="{{route('data.show',$item->id)}}">Show</button>
                      <a class="btn btn-danger" href="{{route('data.destroy',$item->id)}}">Delete</a>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">User detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <p>Name:. <spanm id="UserName"></span></p>
            <p>Email:. <spanm id="UserEmail"></span></p>
            <p>Mobile:. <spanm id="UserMobile"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
    </body>
    <script>
      $(".UserShow").click(function(event){
        event.preventDefault();
        var url = $(this).attr("href");
        $('#exampleModalCenter').modal('show');
        $.ajax({
          url:url,
          type: "get",
          success: function(data) {
            console.log(data, data.user.name);
            // window.location.href = "";
            document.getElementById('UserName').innerHTML = data.user.name;
            document.getElementById('UserEmail').innerHTML = data.user.email;
            document.getElementById('UserMobile').innerHTML = data.user.mobile; 
          }
        });
      });
    </script>
</html>
