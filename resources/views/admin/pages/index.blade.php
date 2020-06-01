@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <ul class="nav nav-tabs ">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('home')}}"> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('admin.pages.create')}}">Crea Pagina</a>
                    </li>
                </ul>
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr class="table-info">
                            <th>Id</th>
                            <th>Titolo</th>
                            <th>Categoria</th>
                            <th>Tags</th>
                            <th>Data Creazione</th>
                            <th>Data Update</th>
                            <th colspan="5"></th>
                        </tr>
                    </thead>
                    <tbody class="table-striped">
                        @foreach ($pages as $key => $page)
                            <tr class="table-info">
                                <td>{{$page->id}}</td>
                                <td>{{$page->title}}</td>
                                <td>{{$page->category->name}}</td>
                                <td>
                                    @foreach ($page->tags as $tag)
                                        {{$tag->name}}
                                    @endforeach
                                </td>
                                <td>{{$page->created_at}}</td>
                                <td>{{$page->update_at}}</td>
                                <td><a class="btn btn-primary" href="{{route('admin.pages.show', $page->id)}}">Visualizza</a></td>
                                <td>Modifica</td>
                                <td>Elimina</td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
