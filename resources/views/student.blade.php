<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Student Management System</title>
  </head>
  <body>
    @include('navbar')

    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Student Management System</h1>
        </div>
    </div>

    @if ($layout == 'index')
        <div class="container-fluid mt-2">
            <div class="container-fluid mt-2">
                <div class="row justify-content-center">
                    <section class="col-md-8">
                        @include('studentslist')
                    </section>
                </div>
            </div>
        </div>  

    @elseif ($layout == 'create')
        <div class="container-fluid mt-2">
            <div class="row">
                <section class="col-md-7">
                    @include('studentslist')
                </section>
                <section class="col-md-5">
                    <div class="card mb-3">
                        <img src="https://lh3.googleusercontent.com/proxy/rjl0u1nUjdqILoGxTecOu0I8VEHimlzLJaACVO0vRvekKM7Bwz_r4JZUNhbJK0Zb4Wg1TYVi93u_0NVS_W11h2XUi1VHr9PbQMBMEQOTb9qrectxq5g" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Enter the information of new student</h5>
                            <form action="{{ url('/store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="cne">CNE</label>
                                    <input name="cne" id="cne" type="text" class="form-control" placeholder="Enter Cne">
                                </div>
                                <div class="form-group">
                                    <label for="firstName">First Name</label>
                                    <input name="firstName" id="firstName" type="text" class="form-control" placeholder="Enter First Name">
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Last Name</label>
                                    <input name="lastName" id="lastName" type="text" class="form-control" placeholder="Enter Last Name">
                                </div>
                                <div class="form-group">
                                    <label for="age">Age</label>
                                    <input name="age" id="age" type="text" class="form-control" placeholder="Enter Age">
                                </div>
                                <div class="form-group">
                                    <label for="speciality">Speciality</label>
                                    <input name="speciality" id="speciality" type="text" class="form-control" placeholder="Enter speciality">
                                </div>
                                <input type="file" class="btn btn-default" name="cover_image" id="cover_image">
                                <input type="submit" class="btn btn-info" value="Save">
                                <input type="submit" class="btn btn-warning" value="Reset">
                            </form>
                        </div>
                      </div>
                </section>
            </div>
        </div>

    @elseif($layout == 'show')
        <div class="container-fluid mt-2">
            <div class="container-fluid mt-2">
                <div class="row justify-content-center">
                    <section class="col-md-8">
                        @include('show')
                    </section>
                </div>
            </div>
        </div> 

    @elseif($layout == 'edit')
        <div class="container-fluid mt-2">
            <div class="row">
                <section class="col-md-7">
                    @include('studentslist')
                </section>
                <section class="col-md-5">
                    <div class="card mb-3">
                        <img src="/storage/cover_images/{{$student->cover_image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Update the information of the student</h5>
                          <form action="{{ url('/update/'.$student->id)}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="cne">CNE</label>
                                    <input value="{{$student->cne}}" name="cne" id="cne" type="text" class="form-control" placeholder="Enter Cne">
                                </div>
                                <div class="form-group">
                                    <label for="firstName">First Name</label>
                                    <input value="{{$student->firstName}}" name="firstName" id="firstName" type="text" class="form-control" placeholder="Enter First Name">
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Last Name</label>
                                    <input value="{{$student->lastName}}" name="lastName" id="lastName" type="text" class="form-control" placeholder="Enter Last Name">
                                </div>
                                <div class="form-group">
                                    <label for="age">Age</label>
                                    <input value="{{$student->age}}" name="age" id="age" type="text" class="form-control" placeholder="Enter Age">
                                </div>
                                <div class="form-group">
                                    <label for="speciality">Speciality</label>
                                    <input value="{{$student->speciality}}" name="speciality" id="speciality" type="text" class="form-control" placeholder="Enter speciality">
                                </div>
                                <input type="submit" class="btn btn-info" value="Update">
                                <input type="submit" class="btn btn-warning" value="Reset">
                            </form>
                        </div>
                      </div>
                </section>
            </div>
        </div>
    @endif

    <footer></footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>