@extends('layouts.master')

@section('title')
 Dispute | Go easy
@endsection

@section('content')

    <div class="container"> 
        <p>dispute</p>
        <table class="table">
            <thead>
                <tr>
                    <th>dispute_id</th>
                    <th>dispute_type</th>
                    <th>dispute_name</th>
                    <th>status</th>
                    <th>action</th>
                   
                </tr>
            </thead>
            <tbody>
                
                @foreach ($dispute as $row)
                    <tr>
                     
                        <td> {{$row->dispute_id    }}</td>
                        <td>{{ $row->dispute_type }}</td>
                        <td>{{ $row->dispute_name }}</td>
                        <td>{{ $row->status }}</td>
                        <td>{{ $row->action }}</td>

                        
                    </tr>
                        
                        
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
@section('footer')

@endsection
