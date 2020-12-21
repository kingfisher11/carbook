@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Show Car by ID') }} </div>

                <div class="card-body">
                <form method="post" action="">
                @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" required value="{{$car->name}}" readonly>
                    </div>

                    <div class="form-group">
                        <label>Model</label>
                        <textarea name="model" class="form-control" readonly>{{$car->model}}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" class="form-control" required value="{{$car->price}}" readonly>
                    </div>

                    <div class="form-group">
                        <label>Year</label>
                        <input type="text" name="year" class="form-control" required value="{{$car->year}}" readonly>
                    </div>

                    <div class="form-group">
                        <label>Plate</label>
                        <input type="text" name="plate" class="form-control" required value="{{$car->plate}}" readonly>
                    </div>
                    
                
                </form>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
