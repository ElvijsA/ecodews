@extends('layouts.manage')

@section('content')
  <div class="flex-container box">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Category - {{$category->name}}</h1>
      </div>
    </div>
    <hr class="m-t-0">

    @foreach ($posts as $post)
      <p>{{$post->title}}</p>
    @endforeach

    <div class="columns">
      <div class="column">
        <a href="{{route('categories.edit', $category->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Edit Category</a>
          <a class="button is-outlined is-pulled-right" href="{{route('categories.index')}}">Back</a></td>
      </div>
    </div>



  </div>

@endsection
