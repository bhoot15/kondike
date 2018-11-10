@extends('admin.main')
@section('title','LogIn')
@section('content')
<div class="row">
    <div class="card offset-4 col-4" style="width: 18rem;">
        <img class="card-img-top  top10" src="http://placehold.it/80x30&text=Logo" alt="Card image cap">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="input-group mb-3">

                        <input type="email" placeholder="Email" class="form-control text-center" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>

                    <div class="input-group mb-3">

                        <input type="password" class="form-control text-center" placeholder="Password" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <button type="submit" class="btn btn-primary offset-4 col-4 bg-white border-success text-dark">Submit</button>
                </div>
            </div>

        </div>
    </div>
</div>
@stop