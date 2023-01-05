@extends('dashboard_views.list.layout')

@section('table-panel')
    <div class="card">
        <div class="card-header">
            <h2>Products Table</h2>
            <div class="header-buttons">
                <a href="{{url("/create")}}" class="btn btn-success btn-sm">Add Product</a>
                <a href="{{url("/logout")}}" class="btn btn-primary btn-sm">LogOut!</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Details</th>
                    <th scope="col">İmage</th>
                    <th scope="col">Settings</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{$product["title"]}}</td>
                            <td>{{$product["content"]}}</td>
                            <td><img src="{{'images/'.$product["image_url"]}}" alt=""></td>
                            <td>
                                <a href="{{url("edit/".$product["id"])}}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="{{url("delete/".$product["id"])}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    @endforeach                
                </tbody>
            </table>
        </div>
    </div>
@endsection