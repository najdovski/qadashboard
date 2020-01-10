@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="text-center h4 text-weight-bold">Edit Question</div>
            <form action="{{route('question.update', $question->id)}}" method="POST">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
                {{csrf_field()}}
                {{method_field('PUT')}}
                <input type="text" class="form-control mb-2" placeholder="Subject" name="subject" value="{{$question->subject}}">
                <textarea name="body" rows="5" class="form-control mt-2" name="body">{{$question->body}}</textarea>
                <div class="form-group mt-2">
                    Category:
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}"
                                @if ($category->id === $question->category->id)
                                    selected
                                @endif
                                >{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <input type="submit" class="btn btn-block btn-success" value="Save Changes">
            </form>
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace('body');
</script>
@endsection
