@extends('layouts.app')

@section('content')
    @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <form action="/edit/{{$article->id}}" method="POST">
            {{csrf_field()}}

            <div class="form-group">
                <label for="usr">title:</label>
                <input type="text" name="title" value ="{{$article->title}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="usr">body:</label>
                <textarea rows="4" cols="50"    name="body" class="form-control boxEdit">
                <?php echo $article['body'] ?>
                </textarea>
            </div>

            </br>
            <input type="submit" value="add new" class="btn btn-primary"/>
        </form>

    </div>

@endsection