@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Car Index') }}</div>

                <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                    <th>ID</th>
                    <th>Car Name</th>
                    <th>Model</th>
                    <th>Price</th>
                    <th>Year Manufactured</th>
                    <th>Plate Number</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cars as $car)
                
                    <tr>
                    <td>{{ $car->id}}</td>
                    <td>{{$car->name}}</td>
                    <td>{{$car->model}}</td>
                    <td>{{$car->price}}</td>
                    <td>{{$car->year}}</td>
                    <td>{{$car->plate}}</td>

                    
                    </tr>
                @endforeach


                </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
