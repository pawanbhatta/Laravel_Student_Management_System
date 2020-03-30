<div class="card mb-3">
    <img src="https://lh3.googleusercontent.com/proxy/WSz1PTthlRxk2Si4RJifk4KZt-3zPMjHIbgbfeyVd04s3K7w_Cg4jGGQHBDKRfL4VMVR5BOLavIcz1kHNJrASzWt29_5OGIeZZUoRFArVSeNMdgFeDIlu7BMcFp9ehgTxPYFvyQmBXKZfdeGzm8_8pwEV7uaJtG8BO23BX2e8W2H0DtOg0gZ2Lxe" class="card-img-top" alt="...">
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
                    <a href="{{ url('/delete/'.$student->id)}}" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

