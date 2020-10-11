@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  POSTS:
                  @auth
                    <a class="btn btn-primary float-right" href="{{route('post.create')}}">NEW POST</a>
                  @else
                    <div class="float-right">
                      If you want to add new posts, please
                      <a href="{{ route('login') }}">
                        {{ __('Login') }}
                      </a>
                    </div>
                  @endauth
                </div>

                <div class="card-body">
                    <ul>
                      @foreach ($posts as $post)
                        <li>
                          <h5>
                            <a href="{{route('post.show', $post -> id)}}">
                              {{$post -> title}}:
                            </a>
                          </h5>
                          {{$post -> body}}
                        </li>
                      @endforeach
                    </ul>
                    <br>
                    @auth
                      <a class="btn btn-primary" href="{{route('post.create')}}">NEW POST</a>
                    @else
                      If you want to add new posts, please
                      <a href="{{ route('login') }}">
                        {{ __('Login') }}
                      </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
