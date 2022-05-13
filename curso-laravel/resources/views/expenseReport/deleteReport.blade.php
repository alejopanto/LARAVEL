@extends('layouts.base')

@section('content')

    <div class="row">
        <div class="col">
            <h1>Delete Report id {{$report->id}}</h1>
            <br>
            <a class="btn btn-success" href="/expense_reports">Back</a>
            <hr>
            <div>
                <table class="table">
                    <form action="/expense_reports/{{$report->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">Eliminar</button>
                    </form>                
                </table>
            </div>
            
        </div>
    </div>
    
@endsection