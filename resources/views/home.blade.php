@extends('layout.template')

@section('title','Home')
@section('home')
    <div class="introduction">
        <div class="intro">
            <div class="intro-text">
                <h1>Welcome to WeaseLibrary</h1>
                <h2>Easiest way to <span>Create</span>, <span>View</span>, <span>Update</span>, and <span>Delete</span></h2>
                <h2>Book Data</h2>
            </div>
            <div class="create-link">
                <a href="/create">Create Now</a>
            </div>
        </div>
    </div>

@endsection