@extends('theme.default')

@section('heading')
    تعديل التصنيف          
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="card mb-4 col-md-8">
            <div class="card-header text-right">
                عدل التصنيف
            </div>
            <div class="card-body">
                <form action="{{route('categories.update',$category)}}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">عنوان الكتاب</label>

                        <div class="col-md-6">
                            <input type="text" name="name" value="{{$category->name}}" id="name" class="form-control @error('name') is-invalid @enderror" autocomplete="name">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label text-md-right">الوصف</label>

                        <div class="col-md-6">
                            <textarea type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" autocomplete="description">
                                {{$category->description}}
                            </textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-1">
                            <button type="submit" class="btn btn-primary">عدل</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection