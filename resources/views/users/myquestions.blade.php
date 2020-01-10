@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="h4 font-weight-bold text-center mb-3">My Questions</div>
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Subject</th>
                        {{-- <th scope="col">Body</th> --}}
                        <th scope="col">Posted</th>
                        <th scope="col">Answers</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($myQuestions as $myQuestion)
                      <tr>
                        <th scope="row">{{$myQuestion->id}}</th>
                        <td><a href="{{route('question.show', $myQuestion->id)}}">{{$myQuestion->subject}}</a></td>
                        {{-- <td>{{$myQuestion->body}}</td> --}}
                        <td>{{$myQuestion->created_at->diffForHumans()}}</td>
                        <td>{{count($myQuestion->answer)}}</td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection