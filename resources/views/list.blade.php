@extends('layout.template')
@section('title','View')
@section('list')
<div class="view-page">
    <table class="table table-striped">
        <thead>
          <tr class="judul-kolom">
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Total Pages</th>
            <th scope="col">Publish Year</th>
            <th scope="col">Action</th>
          </tr>
        </thead> 
        <tbody>
          @
            <tr>
              <th scope="row"></th>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          
        </tbody>
      </table>
</div>
@endsection