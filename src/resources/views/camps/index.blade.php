@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Camps</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('camps.create') }}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('camps.table')
            </div>
            {{-- TEST --}}
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>150</h3>
  
                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="fa fa-shopping-cart"></i>
              </div>
              <a href="#" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
            {{-- TEST --}}
          </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection