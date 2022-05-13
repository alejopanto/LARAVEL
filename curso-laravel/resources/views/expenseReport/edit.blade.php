@extends('layouts.base')

@section('content')

    <div class="row">
        <div class="col">
            <h1>Edit Report id {{$report->id}}</h1>
            <br>
            <a class="btn btn-success" href="/expense_reports">Back</a>
            <hr>
            <div>
                <table class="table">
                    <form action="/expense_reports/{{$report->id}}" method="post">
                        @csrf
                        @method('put')
                        <label for="">title</label>
                        <input class="form-control" type="text" name="title" value="{{$report->title}}" placeholder="edit title">
                        <button class="btn btn-warning" type="submit">Edit</button>
                    </form>                
                </table>
            </div>
            
        </div>
    </div>
    
@endsection