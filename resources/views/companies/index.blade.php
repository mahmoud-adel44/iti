@extends('layout')

@section('title')
company
@endsection

@section('home')
<li class="nav-item">
<a class="nav-link" href="{{route('companies.index')}}">Home</a>
</li>
@endsection
@section('nav')
<li class="nav-item">
  <a class="nav-link " href="{{route('jops.create')}}">add jope</a>
</li>

<li class="nav-item">
  <a class="nav-link " href="{{route('companies.edit' , $company->id)}}">edit profile</a>
</li>

<li class="nav-item">
  <a class="nav-link " href="{{route('companies.jops')}}">view your added</a>
</li>
@endsection
@section('content')

<table class="table">
  <thead>
    <tr>
    
      <th scope="col">jop_id</th>
      <th scope="col">student_id</th>
      <th scope="col">resume_id</th>
      <th scope="col">status</th>
      <th scope="col">block</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach ($jops as $item)


  <tbody>
    <tr>
      
      <td>{{$item->id}}</td>
      <td>{{$item->jop_title}}</td>
      <td>{{$item->resume_id}}</td>
      <td>{{$item->status}}</td>
      <td>{{$item->block}}</td>
      <td><a class="btn btn-info" href="{{route('companies.show' , $item->id)}}">show approved</a></td>
    
    </tr>


  </tbody>
  @endforeach
</table>





@endsection