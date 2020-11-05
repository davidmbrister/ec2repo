@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Camp User
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($campUser, ['route' => ['campUsers.update', $campUser->id], 'method' => 'patch']) !!}

                        @include('camp_users.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection