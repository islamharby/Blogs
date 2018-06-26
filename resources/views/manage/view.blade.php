@extends('layouts.app')


@section('content')
    <div class="container">
        <table class="table table-striped">
            <tr>
                <td> Title</td>
            </tr>
            @foreach($articles as $art)
                <tr>
                    <td> <a href="{{ "/read/".$art->id}}">{{$art->title}}</a>
                    </td>
                    <td>
                        <a href="{{ "/view/".$art->id}}" class="btn btn-danger">
                        <i class="fa fa-remove"></i>
                        </a>

                    </td>
                </tr>
            @endforeach

        </table>

        <a href="add">Add new article</a>
    </div>
@endsection