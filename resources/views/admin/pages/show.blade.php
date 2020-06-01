@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs ">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('admin.pages.index')}}">Store</a>
                    </li>
                </ul>
                <h2>{{$page->title}}</h2>
                <h3>Categoria{{$page->category->name}}</h3>
                <small>Scritto da:{{$page->user->name}}</small>
                <small>Ultima midifica:{{$page->update_at}}</small>
                <div>
                    {{$page->body}}
                </div>
                @if ($page->tags->count() > 0)
                    <div>
                        <h4>Tags</h4>
                        <ul>
                            @foreach ($page->tags as $tag)
                                <li>{{$tag->name}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
