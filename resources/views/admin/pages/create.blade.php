@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="" action="{{route('admin.pages.store')}}" method="post">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="title">Titolo</label>
                        <input class="form-control"type="text" name="title" value="">
                    </div>
                    <div class="form-group">
                        <label for="summary">Sommario</label>
                        <input class="form-control"type="text" name="summary" value="">
                    </div>
                    <div class="form-group">
                        <label for="body">Testo</label>
                        <textarea class="form-control"name="body" rows="10" cols="40"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Cattegoria</label>
                        <select name="category_id" id="category_id">
                            @foreach ($categories as  $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <h2>Tags</h2>
                        @foreach ($tags as  $tag)
                            <label for="tags-{{$tag->id}}">{{$tag->name}}</label>
                            <input type="checkbox" name="tags[]" id="{{$tag->id}}" value="{{$tag->id}}">
                        @endforeach
                    </div>
                    <div class="form-group">
                        <h2>Photos</h2>
                        @foreach ($photos as  $photo)
                            <label for="tags-photo->id}}">{{$photo->name}}</label>
                            <input type="checkbox" name="tags[]" id="{{$photo->id}}" value="{{$photo->id}}">
                        @endforeach
                    </div>
                    <input class="btn btn-primary"type="submit" value="Salva">
                </form>
            </div>
        </div>
    </div>

@endsection
