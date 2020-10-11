@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h2>EDIT POST:</h2>
              </div>
              <div class="card-body">
                <form action="{{route('post.update', $post -> id)}}" method="post">
                  @csrf
                  @method('POST')
                  <div class="form-group">
                    <label for="title">Title:</label> <br>
                    <input type="text" name="title" value="{{$post -> title}}">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="body">Body:</label> <br>
                    <textarea name="body" rows="4" cols="70">{{$post -> body}}</textarea>
                    {{-- <input type="text" name="body" value="{{$post -> body}}"> --}}
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="like">Like:</label> <br>
                    <input type="number" name="like" value="{{$post -> like}}">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="dislike">Dislike:</label> <br>
                    <input type="number" name="dislike" value="{{$post -> dislike}}">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="tag">Tag:</label> <br>
                    <input type="text" name="tag" value="{{$post -> tag}}">
                  </div>
                  <br>
                  <button class="btn btn-primary" type="submit" name="button">SAVE</button>
                </form>
              </div>
            </div>
        </div>
    </div>
  </div>
@endsection
