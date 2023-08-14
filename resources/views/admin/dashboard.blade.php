@extends('admin.admin_master')
@section('title', 'Dashboard')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <h4>My Netsheets</h4>
            @foreach ($user->netsheets as $netsheet)
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0">{{$netsheet->name}}</h5>
                </div>
                <div class="card-body">
                   
                
                </div>
            </div>
            @endforeach
        </div>
        <!-- /.col-md-6 -->
        <div class="col-lg-8">
            

            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h5 class="m-0">Featured</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Special title treatment</h6>

                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <!-- /.col-md-6 -->
    </div>
@endsection
