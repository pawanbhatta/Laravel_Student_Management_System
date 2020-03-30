<div class="card mb-3">
    <img style="object-fit: scale-down; background-color:powderblue;" src="/storage/cover_images/{{$student->cover_image}}">
    <div class="card-body">                                             
    <h5 class="card-title">{{$student->firstName}}  {{$student->lastName}}</h5>
        <p class="card-text">Age : {{$student->age}}</p>
        <p class="card-text">Speciality : {{$student->speciality}}</p>
        <p class="card-text"><small class="text-muted">Added on {{$student->created_at}}</small></p>
    </div>
</div>