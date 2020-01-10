@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if (session()->has('message'))
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
            @endif
            @if (isset($currentCategory))
                <div class="h4 text-center">Questions in <span class="font-weight-bold">"{{$currentCategory->name}}"</span> category</div>
            @endif
            <div class="text-right mb-5">
                <small class="float-left">
                    Filter by category: <br>
                    @foreach ($categories as $category)
                        <a href="{{route('category', $category->id)}}" class="btn btn-primary btn-sm">{{$category->name}}</a>
                    @endforeach
                </small>
                {{-- <a href="{{route('question.create')}}"><span class="text-success small font-weight-bold">New Question </span><i class="fas fa-plus text-success mr-3"></i></a> --}}
            </div>
            <br>
            @foreach($questions as $question)
                <div class="card shadow border-0 mb-5">
                    <div class="card-header h5 font-weight-bold text-center bg-white"><a href="question/{{$question->id}}"><span class="text-secondary">{{$question->subject}}</span></a></div>

                    <div class="card-body text-dark" style="background:#f7f7f7; margin-bottom:-2%">
                        {!!$question->body!!}
                    </div>
                    <div class="card-footer small text-right bg-white">Asked by {{$question->user->name}} <span class="text-secondary">({{$question->user->email}}) <br> {{ \Carbon\Carbon::parse($question->created_at)->diffForHumans() }}</span>
                    <br>
                    Category: <a href="{{route('category', $category->id)}}"><span class="font-weight-bold">{{$question->category->name}}</span></a>
                    <br>
                    @if (count($question->answer) == 0)
                        <span class="text-danger font-weight-bold">Unanswered</span>
                    @else
                        <span class="text-success font-weight-bold">Answers: {{count($question->answer)}}</span>
                    @endif
                    </div>
                    <div class="card-footer text-uppercase">
                        <a href="{{route('question.show', $question->id)}}"><span class="text-success small font-weight-bold">Answer </span><i class="fas fa-check text-success mr-3"></i></a>
                        @if(Auth::user()->id == $question->user->id)

                            <a href="{{route('question.edit', $question->id)}}"><span class="text-primary small font-weight-bold">Edit </span><i class="fas fa-edit text-primary mr-3"></i></a>

                            <form id="deleteForm{{$question->id}}" action="{{route('question.destroy', $question->id)}}" method="POST" style="display:none">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                            </form>
                            <a href="" onclick="if (confirm('Are you sure?')){event.preventDefault(); document.getElementById('deleteForm{{$question->id}}').submit();} else { event.preventDefault();}"><span class="text-danger small font-weight-bold">Remove </span><i class="fas fa-trash-alt text-danger mr-3"></i></a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            {{$questions->links()}}
        </div>
    </div>
</div>
@endsection
