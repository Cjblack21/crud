@extends('layout')
@section('content')

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Edit</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Edit Details</li>
                            <li class="breadcrumb-item active">Create Product</li>
                               
                                </a>
                            </li>
                        </ol>
<!-- This is the input part -->
                        <div class="card">
                            <h1>Create Product</h1>
                            <form action="{{ route('products.update',$product->id)}}" method ="POST">
                                @csrf
                                @method('PUT')

                                <di>
                                <label>Name:</label>
                                <input type="text" name="name" value="{{ $product->name }}">

                            </div>
                            <div>
                                <label>Description</label>
                                <textarea name="description"> {{ $product->description }}</textarea>
                            </div>
                        <div>
                            <label>Prices</label>
                            <input type="text" name="price" value="{{ $product->price }}">
                        </div>
                        <button type="submit">Update</button>
                            </form>
<!-- End here -->
                            <table>
                                <tr>
                                    <td>ID</td>
                                    <td>NAME</td>
                                    <td>DESCRIPTION</td>
                                    <td>ACTION</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
@endsection