@extends('front.app')
@section('content')
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Doctors</li>
            </ol>
        </nav>
        <div class="doctors-grid">
            @forelse ($doctors as $doctor)
            <div class="card p-2" style="width: 18rem;">
                <img src="{{asset('uploads/doctors/'.$doctor->image)}}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">{{ $doctor->name }}</h4>
                    <h6 class="card-title fw-bold text-center">{{$doctor->major->name}}</h6>
                    <a href="{{ url('doctor') }}" class="btn btn-outline-primary card-button">Book an
                        appointment</a>
                </div>
            </div>
                
            @empty
            
                <div class="col-9 text-center bg-info">
                    <h3>No Doctors found.</h3>
                </div>
                
            @endforelse 
            
        </div>
        {{$doctors->links()}}
    </div>
    </div>
@endsection
