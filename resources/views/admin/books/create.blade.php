@extends('theme.default')

@section('heading')
    إضافة كتاب جديد
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="card mb-4 col-md-8">
            <div class="card-header text-right">
                أضف كتابا جديدا
            </div>
            <div class="card-body">
                <form action="{{route('books.index')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label text-md-right">عنوان الكتاب</label>

                        <div class="col-md-6">
                            <input type="text" name="title" value="{{old('title')}}" id="title" class="form-control @error('title') is-invalid @enderror" autocomplete="title">

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="isbn" class="col-md-4 col-form-label text-md-right">الرقم التسلسلي</label>

                        <div class="col-md-6">
                            <input type="text" name="isbn" value="{{old('isbn')}}" id="isbn" class="form-control @error('isbn') is-invalid @enderror" autocomplete="isbn">

                            @error('isbn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cover_image" class="col-md-4 col-form-label text-md-right">صورة الغلاف</label>

                        <div class="col-md-6">
                            <input type="file" accept="image/*" onchange="readCoverImage(this);" name="cover_image" value="{{old('cover_image')}}" id="cover_image" class="form-control @error('cover_image') is-invalid @enderror" autocomplete="cover_image">

                            @error('cover_image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span> 
                            @enderror

                            <img id="cover-image-thumb" class="img-fluid img-thumbnail">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="category" class="col-md-4 col-form-label text-md-right">التصنيف</label>

                        <div class="col-md-6">
                            <select name="category" id="category" class="form-control">
                                <option disabled selected>اختر تصنيفا</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>

                            @error('category')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="authors" class="col-md-4 col-form-label text-md-right">المؤلفون</label>

                        <div class="col-md-6">
                            <select name="authors" id="authors" class="form-control" multiple>
                                <option disabled selected>اختر المؤلفين</option>
                                @foreach ($authors as $author)
                                    <option value="{{$author->id}}">{{$author->name}}</option>
                                @endforeach
                            </select>

                            @error('authors')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="publisher" class="col-md-4 col-form-label text-md-right">الناشر</label>

                        <div class="col-md-6">
                            
                            <select name="publisher" id="publisher" class="form-control">
                                <option disabled selected>اختر ناشرا</option>
                                @foreach ($publishers as $publisher)
                                    <option value="{{$publisher->id}}">{{$publisher->name}}</option>
                                @endforeach
                            </select>

                            @error('publisher')
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
                                {{old('description')}}
                            </textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="publisher_year" class="col-md-4 col-form-label text-md-right">سنة النشر</label>

                        <div class="col-md-6">
                            <input type="text" name="publisher_year" value="{{old('publisher_year')}}" id="publisher_year" class="form-control @error('publisher_year') is-invalid @enderror" autocomplete="publisher_year">

                            @error('publisher_year')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="number_of_pages" class="col-md-4 col-form-label text-md-right">عدد الصفحات</label>

                        <div class="col-md-6">
                            <input type="text" name="number_of_pages" value="{{old('number_of_pages')}}" id="number_of_pages" class="form-control @error('number_of_pages') is-invalid @enderror" autocomplete="number_of_pages">

                            @error('number_of_pages')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="number_of_copies" class="col-md-4 col-form-label text-md-right">عدد النسخ</label>

                        <div class="col-md-6">
                            <input type="text" name="number_of_copies" value="{{old('number_of_copies')}}" id="number_of_copies" class="form-control @error('number_of_copies') is-invalid @enderror" autocomplete="number_of_copies">

                            @error('number_of_copies')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="price" class="col-md-4 col-form-label text-md-right">السعر</label>

                        <div class="col-md-6">
                            <input type="text" name="price" value="{{old('price')}}" id="price" class="form-control @error('price') is-invalid @enderror" autocomplete="price">

                            @error('price')
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

@section('script')
    <script>
        function readCoverImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                $('#cover-image-thumb')
                    .attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection