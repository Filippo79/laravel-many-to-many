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
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="summary">Sommario</label>
                        <input class="form-control"type="text" name="summary" value="">
                    </div>
                    @error('summary')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="body">Testo</label>
                        <textarea class="form-control"name="body" rows="10" cols="40"></textarea>
                    </div>
                    @error('body')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label for="category_id">Cattegoria</label>
                        <select name="category_id" id="category_id">
                            @foreach ($categories as  $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('category_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <h2>Tags</h2>
                        @foreach ($tags as  $tag)
                            <label for="tags-{{$tag->id}}">{{$tag->name}}</label>
                            <input type="checkbox" name="tags[]" id="{{$tag->id}}" value="{{$tag->id}}">
                        @endforeach
                    </div>
                    @error('tags')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <h2>Photos</h2>
                        @foreach ($photos as  $photo)
                            <label for="photos-{{$photo->id}}">{{$photo->name}}</label>
                            <input type="checkbox" name="photos[]" id="{{$photo->id}}" value="{{$photo->id}}">
                        @endforeach
                    </div>
                    @error('photo_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <input class="btn btn-primary"type="submit" value="Salva">
                </form>
            </div>
        </div>
    </div>

@endsection
