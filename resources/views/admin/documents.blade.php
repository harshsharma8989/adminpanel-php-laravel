@extends('layouts.master')

@section('title')
 list of documents | Go easy
@endsection

@section('content')

 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">add new </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Provider name</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Document name</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Document number</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">add</button>
      </div>
    </div>
  </div>
</div> 
<div class="container">
  <div class="card">
    <div class="card-body">
    <h5 class="card-title">Documents</h5>
    {{-- </div><a href="/adddocs">
    {{-- <button class="btn btn-primary" style="float:right" type="submit">+add documents</button></a> --}}
    
     
      <style> 

      h1{
        font-size: 3.5em;
    line-height: 2.15;
      }
      </style>           
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>provider name</th>
          <th>document name</th>
          <th>document number</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($documents as $row)
        <tr>
          
          <td>{{$row->id}}</td>
          <td>{{$row->provider_name}} </td>
          <td>{{$row->documentname}} </td>
          <td>{{$row->documentnumber}}</td>
          <td>
          </tr>
            @endforeach

            

            {{-- <div class="input-group mb-3">
            <div class="input-group-prepend">
              
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="inputGroupFile01">
              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
          </div>
          </td> --}}
      
        
      </tbody>
    </table>
  </div>

@endsection

    @section('footer')
        
    @endsection