@extends('dashboard_views.edit.layout')

@section('update-form-panel')
    <div class="card">
        <div class="card-header">
            <h2>Create Product</h2>
        </div>
        <div class="card-body">
            <div class="create-form-container">
                <form action="{{url("/update")}}" method="POST" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <input style="display: none" type="text" name="id" value="{{$product[0]["id"]}}" required>
                    <label for="">Product Title</label>
                    <input type="text" value="{{$product[0]["title"]}}" name="title" placeholder="Product Title" required>
                    <label for="">Product Detail</label>
                    <input type="text" value="{{$product[0]["content"]}}" name="content" id="" placeholder="Product Detail" required>
                    <label for="">Ürün Resmi</label>
                    <input type="file" name="image" required >
                    <div class="create-form-buttons">
                        <input type="submit" class="btn btn-warning btn-sm" value="Update">
                        <a href="/dashboard" class="btn btn-danger btn-sm">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection