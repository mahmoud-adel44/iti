

@extends('layout')

@section('content')
@section('home')
<li class="nav-item">
<a class="nav-link" href="{{route('students.index')}}">Home</a>
</li>
@endsection

@if ($errors->any())
  @foreach ($errors->all() as $error)
  <p class="alert alert-danger">{{$error}}</p>
  @endforeach
@endif

<form method="POST" action="{{route('students.store')}}" enctype="multipart/form-data">

  @csrf
  <div class="form-group">
  
    <input type="text" name="name" class="form-control"  placeholder="name" value="{{Auth::user()->name}}">
  </div>

  <div class="form-group">
  
    <input type="text" name="condition" class="form-control"  placeholder="employee/unemployee" value="{{old('condition')}}">
  </div>

  <div class="form-group">
  
    <input type="text" name="title" class="form-control"  placeholder="title" value="{{old('title')}}">
  </div>

  <div class="form-group">
  
    <input type="text" name="location" class="form-control"  placeholder="location" value="{{old('location')}}">
  </div>


  <div class="form-group">
  
    <input type="text" name="city" class="form-control"  placeholder="city" value="{{old('city')}}">
  </div>


  <div class="form-group">
  
    <textarea class="form-control" name="coverLetter" placeholder="cover-letter" rows="5">{{old('coverLetter')}}</textarea>
  </div>

  <div class="form-group">
    
    <input type="file" class="form-control-file" name="img">
  </div>


  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
