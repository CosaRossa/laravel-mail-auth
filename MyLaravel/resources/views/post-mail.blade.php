@extends('mail.layouts.app')

@section('content')
<div class="container">
  <div class="card-header">
    <h3>
      {{$user -> name}}: {{$action}}
    </h3>
  </div>

  <div class="card-body">
    <h3>
      {{$post -> title}}:
    </h3>
    <p>
      {{$post -> body}}
    </p>

    <ul>
      <li>
        Like: {{$post -> like}}
      </li>
      <li>
        Dislike: {{$post -> dislike}}
      </li>
      <li>
        Tag: {{$post -> tag}}
      </li>
    </ul>
  </div>
</div>
@endsection
