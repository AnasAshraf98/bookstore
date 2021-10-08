@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        تصنيفات الكتب
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <form class="form-inline col-md-6" action="{{route('gallery.categories.search')}}" method="GET">
                                <input type="text" name="term" class="form-control mx-sm-3 mb-2">
                                <button type="submit" class="btn btn-secondary mb-2">ابحث</button>
                            </form>
                        </div>

                        <hr>

                        <br>

                        <h3>{{ $title }}</h3>

                        @if ($categories->count())
                            <ul class="list-group">
                                @foreach ($categories as $category)
                                    <a href="{{route('gallery.categories.show',$category)}}" style="color:grey">
                                        <li class="list-group-item">{{$category->name}} ({{$category->books->count()}})</li>
                                    </a>
                                @endforeach
                            </ul>
                        @else
                            <h4>لا نتائج</h4>    
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection