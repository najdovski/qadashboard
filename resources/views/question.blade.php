@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
                <div style="background: white; border: 0.2px solid #bfbfbf; padding: 2%;">
                    @if(Auth::user()->id == $question->user->id)
                        <div class="text-uppercase text-right">
                            <a href="{{route('question.edit', $question->id)}}"><span class="text-primary small font-weight-bold">Edit </span><i class="fas fa-edit text-primary mr-3"></i></a>

                            <form id="deleteForm{{$question->id}}" action="{{route('question.destroy', $question->id)}}" method="POST" style="display:none">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                            </form>
                            <a href="" onclick="if (confirm('Are you sure?')){event.preventDefault(); document.getElementById('deleteForm{{$question->id}}').submit();} else { event.preventDefault();}"><span class="text-danger small font-weight-bold">Remove </span><i class="fas fa-trash-alt text-danger mr-3"></i></a>
                        </div>
                    @endif

                    <div class="h5 font-weight-bold text-center">{{$question->subject}}</div>
                    <hr>

                    <div class="card-body">
                        {!!$question->body!!}
                    </div>
                    <div class="small text-right">Asked by {{$question->user->name}} <span class="text-secondary">({{$question->user->email}})</span>
                    <br>
                    {{$question->created_at->diffForHumans()}}
                    <br>
                    Category: <a href="{{route('category', $question->category->id)}}"><span class="font-weight-bold">{{$question->category->name}}</span></a>
                    </div>
                </div>

                @if (session()->has('message'))
                    <div class="alert alert-danger mt-4">
                        {{ session('message') }}
                    </div>
                @endif

                <div class="card mt-5">
                    <div class="card-header text-center h4 text-weight-bold">Answers ({{count($question->answer)}}):</div>
                    @foreach($answers as $answer)                   
                        <div class="card-body" style="border-bottom:0.5px solid #c5c7c5">
                            <small>{{$answer->user->name}} <span class="text-secondary">({{$answer->user->email}}):</span></small>
                            <div class="float-right small font-weight-bold text-uppercase">
                                @if (auth()->user()->id === $answer->user_id)
                                <form id="deleteForm{{$answer->id}}" action="{{route('answer.destroy', $answer->id)}}" method="POST" style="display:none">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                </form>
                                <a href="" onclick="if (confirm('Are you sure?')){event.preventDefault(); document.getElementById('deleteForm{{$answer->id}}').submit();} else { event.preventDefault();}"><span class="text-danger font-weight-bold">Remove </span><i class="fas fa-trash-alt text-danger mr-3"></i></a>    
                                @endif
                            </div>
                            <br>
                            <span class="font-weight-bold">{!!$answer->body!!}</span>
                            <small class="text-secondary">{{$answer->created_at->diffForHumans()}}</small>
                        </div>
                    @endforeach
                </div>
                
                <form action="{{route('answer.store')}}" method="POST" class="mt-5">
                    {{csrf_field()}}
                    @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{$error}}</div>
                        @endforeach
                    @endif
                    {{-- <input type="hidden" value="{{Auth::user()->id}}" name="user_id"> --}}
                    <input type="hidden" value="{{$question->id}}" name="question_id">
                    <label class="h5">Submit an answer:</label>
                    <textarea name="answer" rows="3" class="form-control mb-2">{{old('answer')}}</textarea>
                    {{-- <input class="form-control" type="text" placeholder="Answer" name="answer" value="{{old('answer')}}"> --}}
                    <input type="submit" class="btn btn-success btn-block mt-1">
                </form>

        </div>
    </div>
</div>

<script>
    CKEDITOR.replace('answer');
</script>
@endsection
