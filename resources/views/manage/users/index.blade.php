@extends('layouts.manage')

@section('content')
  <div class="flex-container box">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Manage Users</h1>
      </div>
      <div class="column">
        <a href="{{route('users.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-add m-r-10"></i> Create New User</a>
      </div>
    </div>
    <hr>
    <div class="card">
      <div class="card-content">
        <table class="table is-narrow is-fullwidth">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
              <td>{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td><a class="button is-outlined is-small" href="{{route('users.show', $user->id)}}">View</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    {{$users->links()}}
  </div>
  @endsection
