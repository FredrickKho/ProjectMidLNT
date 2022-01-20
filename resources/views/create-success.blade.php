@extends('layout.template')
@section('title','Create Success')
@section('createSuccessfull')
    <div class="message">
        <img src="{{ URL::asset('images/book-thumb.png') }}" alt="">
        <p>Your book has been added in database!!</p>
        <a href="{{ route('list') }}" class="btn btn-primary">Back to Booklist</a>
    </div>

@endsection
