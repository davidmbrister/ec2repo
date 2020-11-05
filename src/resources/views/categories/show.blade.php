@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            {{ $category->name }}
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row p-3" style="padding-left: 20px">
                    @include('categories.show_fields')  

                    @if ($camps->count() > 0)
                    <h2 class="text-center w-100"> Camps </h2>
                    <hr>
                      @include('camps.table')  
                    @endif               
                </div>
            </div>
        </div>
    </div>
@endsection
