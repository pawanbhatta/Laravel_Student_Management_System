<div class="card mb-3">
    <img src="https://p4.wallpaperbetter.com/wallpaper/255/161/299/blue-futuristic-typography-technology-evolution-browsers-education-infographics-facts-rebecca-black-art-minimalistic-hd-art-wallpaper-cbc69cddc3f1af29b5f49b49fd3c4c20.jpg" class="card-img-top">
    <div class="card-body">
      <h5 class="card-title">List Of All Students</h5>
      <p class="card-text">Here you can find the information of all the students.</p>
        
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">CNE</th>
                <th scope="col">FIRSTNAME</th>
                <th scope="col">LASTNAME</th>
                <th scope="col">AGE</th>
                <th scope="col">SPECIALITY</th>
                <th scope="col">Operations</th>

            </tr>
            </thead>
            <tbody>
            @foreach ($students as $student)
            <tr>
                <th scope="row">{{$student->cne}}</th>
                <td>{{$student->firstName}}</td>
                <td>{{$student->lastName}}</td>
                <td>{{$student->age}}</td>
                <td>{{$student->speciality}}</td>
                <td>
                    <a href="{{ url('/show/'.$student->id)}}" class="btn btn-sm btn-info">Show</a>
                    <a href="{{ url('/edit/'.$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
                    {{-- <a href="{{ url('/delete/'.$student->id)}}" class="btn btn-sm btn-danger">Delete</a> --}}
                    {!!Form::open(['action'=>['StudentController@destroy', $student->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                        {{Form::hidden('_method','POST')}}
                        {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                    {!!Form::close() !!}  
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

