@extends('theme.default')

@section('heading')
    إضافة ناشر جديد
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="card mb-4 col-md-8">
            <div class="card-header text-right">
                أضف ناشرا جديدا
            </div>
            <div class="card-body">
                <form action="{{route('publishers.index')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">اسم الناشر</label>

                        <div class="col-md-6">
                            <input type="text" name="name" value="{{old('name')}}" id="name" class="form-control @error('name') is-invalid @enderror" autocomplete="name">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="address" class="col-md-4 col-form-label text-md-right">العنوان</label>

                        <div class="col-md-6">
                            <textarea type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" autocomplete="address">
                                {{old('address')}}
                            </textarea>
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-1">
                            <button type="submit" class="btn btn-primary">أضف</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection