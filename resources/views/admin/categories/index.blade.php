@extends('theme.default')

@section('head')
    <link href="{{ asset('theme/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('heading')
    عرض التصنيفات
@endsection

@section('content')
    <a href="{{route('categories.create')}}" class="btn btn-primary">
        <i class="fas fa-plus"></i>
        أضف صنفا جديدا
    </a>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <table id="categories-table" class="table table-stribed text-right" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>الاسم</th>
                        <th>الوصف</th>
                        <th>خيارات</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>{{$category->description}}</td>
                                      
                            <td>
                                <a href="{{route('categories.edit',$category)}}" class="btn btn-info btn-sm">
                                    <i class="fa fa-edit"></i> تعديل
                                </a>

                                <form class="d-inline-block" action="{{route('categories.destroy',$category)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('هل أنت متأكد؟')">
                                        <i class="fa fa-trash"></i> حذف        
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


@section('script')
    <script src="{{ asset('theme/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('theme/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#categories-table').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.11.1/i18n/ar.json"
                }
            });
        });
    </script>
@endsection