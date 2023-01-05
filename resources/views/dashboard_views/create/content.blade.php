@extends('dashboard_views.create.layout')

@section('create-form-panel')
    <div class="card">
        <div class="card-header">
            <h2>Create Product</h2>
        </div>
        <div class="card-body">
            <div class="create-form-container">
                <form action="{{url("/insert")}}" method="POST" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <label for="">Product Title</label>
                    <input type="text" name="title" placeholder="Product Title">
                    <label for="">Product Detail</label>
                    <input type="text" name="content" id="" placeholder="Product Detail">
                    <label for="">Ürün Resmi</label>
                    <input type="file" name="image" >
                    <div class="create-form-buttons">
                        <input type="submit" class="btn btn-success btn-sm" value="Add">
                        <a href="/dashboard" class="btn btn-danger btn-sm">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection