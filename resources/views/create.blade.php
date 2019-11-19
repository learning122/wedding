@extends('layout.app')

@section('content')
 <div>
    <div class="container">
        <h1 style="color:#000; text-align:center; margin-top:1em;font-size: 3.1em;">Create Wedding Hall</h1>
        {!! Form::open(['action' => 'HallController@insert','method' => 'POST']) !!}

            <div class="form-group">
                {{Form::label('hall','Hall Name',['style'=>'font-weight: 800 !important; font-size: 1.5em;color:#000;'])}}
                {{Form::text('hall','',['class'=>'form-control','placeholder' =>'Hall Name'])}}
            </div>
            <div class="row">
                <div class="form-group col">
                    {{Form::label('city','City',['style'=>'font-weight: 800 !important; font-size: 1.5em;color:#000;'])}}
                    {{Form::text('city','',['class'=>'form-control','placeholder' =>'City Name'])}}
                </div>
                <div class="form-group col">
                    {{Form::label('town','Town',['style'=>'font-weight: 800 !important; font-size: 1.5em;color:#000;'])}}
                    {{Form::text('town','',['class'=>'form-control','placeholder' =>'Town Name'])}}
                </div>
            </div>

            <div class="row">
                <div class="form-group col">
                    {{Form::label('capacity','Capacity',['style'=>'font-weight: 800 !important; font-size: 1.5em;color:#000;'])}}
                    {{Form::number('capacity','',['class'=>'form-control','placeholder' =>'Capacity'])}}
                </div>
                <div class="form-group col">
                    {{Form::label('price','Price Per Head',['style'=>'font-weight: 800 !important; font-size: 1.5em;color:#000;'])}}
                    {{Form::number('price','',['class'=>'form-control','placeholder' =>'Price Per Head'])}}
                </div>
            </div>

            <div class="form-group">
                {{Form::label('desc','Description',['style'=>'font-weight: 800 !important; font-size: 1.5em;color:#000;'])}}
                {{Form::textarea('desc','',['id'=> 'article-ckeditor','class'=>'form-control','placeholder' => 'Description','style'=>'max-height:5em;'])}}
            </div>
            <div id="btn-submit">
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
            </div>
        {!! Form::close() !!}
    </div>
</div> 
@endsection