@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Pengurus
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pengurus, ['route' => ['penguruses.update', $pengurus->id], 'method' => 'patch', 'files' => true]) !!}

                        @include('penguruses.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection