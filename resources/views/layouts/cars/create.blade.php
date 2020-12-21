@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Car') }}</div>

                <div class="card-body">
                <form method="post" action="">
                @csrf
                    <div class="form-group">
                        <label>Car Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Model</label>
                        <textarea name="model" class="form-control"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>Price</label>
                        <input type="text" name="price" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Year</label>
                        <input type="text" name="year" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Plate</label>
                        <input type="text" name="plate" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create Car</button>
                    </div>
                
                </form>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
