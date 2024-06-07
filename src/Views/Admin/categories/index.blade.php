@extends('layouts.master')

@section('title')
Danh Mục
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h1 class="m-0">Danh Mục</h1>
                    </div>
                </div>
            </div>
            <div class="white_card_body">

            <a href="{{ url("admin/categories/create") }}" class="btn btn-primary">Thêm mới</a>

                @if (isset($_SESSION['status']) && $_SESSION['status'])
                <div class="alert alert-success">
                    {{ $_SESSION['msg'] }}
                </div>

                @php
                unset($_SESSION['status']);
                unset($_SESSION['msg']);
                @endphp
                @endif

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category['id'] }}</td>
                                <td>{{ $category['name'] }}</td>
                                <td>
                                    <a href="{{ url("admin/categories/{$category['id']}/edit") }}" class="btn btn-warning">Sửa</a>
                                    <a href="{{ url("admin/categories/{$category['id']}/delete") }}" onclick="return confirm('Chắc chắn xóa không?');" class="btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection