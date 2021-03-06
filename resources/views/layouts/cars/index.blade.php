@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

        @if (session()->has('alert'))
        <div class="alert {{session()->get('alert-type')}}">
            {{session()->get('alert')}}
        </div>
        @endif

            <div class="card">
                <div class="card-header">
                {{ __('Car Index') }}
                <div class="float-right">
                <form method="get" action="">
                <div class="input-group">
                <input type="text" name="keyword" class="form-control"/>
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
                </div>
                </form>                
                </div>

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
                    <th>Actions</th>
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
                    <td>
                    <a href="{{ route('car:show', $car)}}" class="btn btn-primary">View</a>
                    </td>                     <td>
                    <a href="{{ route('car:edit', $car)}}" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                    <a onClick="return confirm('Are you sure?')" href="{{ route('car:delete', $car)}}" class="btn btn-danger">Delete</a>
                    </td>

                    
                    </tr>
                @endforeach


                </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
