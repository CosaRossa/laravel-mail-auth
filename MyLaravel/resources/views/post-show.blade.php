@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">POST:
                  <h4>
                    {{$post -> title}}
                  </h4>
                </div>

                <div class="card-body">
                    <ul>
                      <li>
                        <strong>Body:</strong> {{$post -> body}}
                      </li>
                      <li>
                        <strong>Like:</strong> {{$post -> like}}
                      </li>
                      <li>
                        <strong>Dislike:</strong> {{$post -> dislike}}
                      </li>
                      <li>
                        <strong>Tag:</strong> {{$post -> tag}}
                      </li>
                    </ul>
                    @auth
                      <a class="btn btn-primary" href="{{route('post.edit', $post -> id)}}">EDIT</a>
                      <a class="btn btn-danger" href="{{route('post.destroy', $post -> id)}}">DELETE</a>
                    @else
                      If you want to edit or delete, please
                      <a href="{{ route('login') }}">
                        {{ __('Login') }}
                      </a>
                    @endauth
                    <a class="btn btn-secondary float-right" href="{{route('post.index')}}">INDEX</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
