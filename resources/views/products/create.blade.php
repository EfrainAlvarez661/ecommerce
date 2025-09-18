@extends('layouts.app')
@section('content')
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="">
        <br>
        <label for="">Description</label>
        <textarea name="" id="" cols="30" rows="10"></textarea>
        <br>
        <label for="price">Price</label>
        <input type="text" name="price">
        <br>
        <label for="image">Image:</label>
        <input type="file" name="image">
        <br>
        <label for="brand">Brand</label>
        <input type="text" name="brand" id="">
    </form>
    
    @endsection