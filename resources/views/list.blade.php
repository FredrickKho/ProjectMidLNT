@extends('layout.template')
@section('title','View')
@section('list')
<div class="view-page">
    <table class="table table-striped">
        <thead>
          <tr class="judul-kolom">
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">Total Pages</th>
            <th scope="col">Publish Year</th>
            <th scope="col">Action</th>
          </tr>
        </thead> 
        <tbody>
        @foreach ($books as $book)
            <tr class="isi-data">
              <th scope="row"><div class="data">{{ $book->id }}</div></th>
              <td><div class="data">{{ $book->title }}</div></td>
              <td><div class="data">{{ $book->author }}</div></td>
              <td><div class="data">{{ $book->pages }}</div></td>
              <td><div class="data">{{ $book->year }}</div></td>
              <td>
                <div class="button-place">
                  <button type="button"  class="btn btn-success">EDIT</button>
                  <form action="{{ route('delete',$book->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">DELETE</button>
                  </form>
                </div>
              </td>
            </tr>
        @endforeach
      </tbody>
      </table>
</div>
@endsection