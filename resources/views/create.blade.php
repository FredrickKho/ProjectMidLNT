@extends('layout.template')
@section('form')
<div class="form-page">
    <h1>WeaseLibrary - Create</h1>
    <form class="form-create">
        <div class="form-group">
            <div class="form-group2">
                <label for="Title">Title Book</label>
                <input type="text" class="form-control" id="Title" aria-describedby="emailHelp" placeholder="Enter Title">
            </div>
          <small id="emailHelp" class="form-text text-muted">String length must be more than 4 and less than 21</small>
        </div>
        <div class="form-group">
            <label for="Author-Name">Author Name</label>
            <input type="text" class="form-control" id="Author-Name" aria-describedby="emailHelp" placeholder="Enter Author Name">
            <small id="emailHelp" class="form-text text-muted">String length must be more than 4 and less than 21</small>
        </div>
        <div class="form-group">
            <label for="Total-Pages">Total Pages</label>
            <input type="number" class="form-control" id="Total-Pages" aria-describedby="emailHelp" placeholder="Enter Total Pages">
            <small id="emailHelp" class="form-text text-muted">Quantity must be more than 0</small>
        </div>
        <div class="form-group">
            <label for="Publish-Year">Publish Year</label>
            <input type="text" class="form-control" id="Publish-Year" aria-describedby="emailHelp" placeholder="Enter Publish Year">
            <small id="emailHelp" class="form-text text-muted">Year must be more than 1999 and less than 2022</small>
        </div>
        <div class="submit-button">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
      </form>
</div>
@endsection