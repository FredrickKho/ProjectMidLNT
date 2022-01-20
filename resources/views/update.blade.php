@extends('layout.template')
@section("title","Update")
@section("form")
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="form-page">
<h1>WeaseLibrary - Update</h1>
<h2>Update BookID = {{ $book->id }}</h2>
<form class="form-create" action="{{ route('update',$book->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <div class="form-group2">
            <label for="Title">New Title Book <i>(Before = "{{ $book->title }}")</i></label>
            <input type="text" class="form-control" name="title" aria-describedby="emailHelp" placeholder="Enter Title">
        </div>
      <small id="emailHelp" class="form-text text-muted">String length must be more than 4 and less than 21</small>
    </div>
    <div class="form-group">
        <label for="Author-Name">New Author Name <i>(Before = "{{ $book->author }}")</i></label>
        <input type="text" class="form-control" name="author" aria-describedby="emailHelp" placeholder="Enter Author Name">
        <small id="emailHelp" class="form-text text-muted">String length must be more than 4 and less than 21</small>
    </div>
    <div class="form-group">
        <label for="Total-Pages">New Total Pages <i>(Before = "{{ $book->pages }}")</i></label>
        <input type="number" class="form-control" name="pages" aria-describedby="emailHelp" placeholder="Enter Total Pages">
        <small id="emailHelp" class="form-text text-muted">Quantity must be more than 0</small>
    </div>
    <div class="form-group">
        <label for="Publish-Year">New Publish Year <i>(Before = "{{ $book->year }}")</i></label>
        <input type="text" class="form-control" name="year" aria-describedby="emailHelp" placeholder="Enter Publish Year">
        <small id="emailHelp" class="form-text text-muted">Year must be more than 1999 and less than 2022</small>
    </div>
    <div class="submit-button">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
@endsection