@extends('layouts.base')

@section('content')

    <div class="row">
        <div class="col">
            <h1>Create Report</h1>
            <br>
            <a class="btn btn-success" href="/expense_reports">Back</a>
            <hr>

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>
                            {{$error}}  
                        </li>
                    @endforeach
                </div>
            @endif

            <div>
                <table class="table">
                    <form action="/expense_reports" method="post">
                        @csrf
                        <label for="">title</label>
                        <input class="form-control" type="text" name="title" placeholder="add title" value="{{ old('title') }}">
                        <button class="btn btn-primary" type="submit">Create</button>
                    </form>                
                </table>
            </div>
            
        </div>
    </div>
    
@endsection