@extends('layouts.master')

@section('title')
    users | Go easy
@endsection

@section('content')
<?php
$count=0
?>
    <div class="container">
        <p></p>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($user as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        
                        </td>
                        
                        <td>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                       {count++}
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection
@section('footer')
@endsection
