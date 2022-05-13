@extends('layouts.base')

@section('content')

    <div class="row">
        <div class="col">
            <h1>Reports</h1>
            <br>
            <a class="btn btn-primary" href="/expense_reports/create">Crear Report</a>
            <hr>
            <table class="table">
                <tr>
                    <th>Title</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
                @foreach ($expense_reports as $expense_report)
                    <tr>
                        <td>
                            {{$expense_report->title}}
                        </td>
                        <td>
                            {{$expense_report->created_at}}
                        </td>
                        <td>
                            {{$expense_report->updated_at}}
                        </td>
                        <td>
                            <a class="btn btn-warning" href="/expense_reports/{{$expense_report->id}}/edit">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="/expense_reports/{{$expense_report->id}}/deleteReport">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            
        </div>
    </div>
    
@endsection