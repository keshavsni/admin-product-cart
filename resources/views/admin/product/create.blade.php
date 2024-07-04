@extends('admin.main.layout')
@section('title', $title)

@section('content')

    <div class="pcoded-content">
        <div class="pcoded-inner-content">

            <div class="main-body">
                <div class="page-wrapper">

                    <div class="page-body">

                        <div class="row">
                            <div class="col-lg-12 col-xl-12">

                                <div class="card">
                                    <div class="card-header">
                                        <h5>{{ $title }}</h5>
                                        <span>Add class of <code>.hour</code> with <code>data-mask</code> attribute</span>
                                    </div>
                                    <div class="card-block">
                                        <form method="POST" id="testi_form" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Product Name</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="product_name"
                                                        placeholder="Name">
                                                        @error('product_name')
                                                        <span class="danger">{{ $message }}</span>
                                                        @enderror
                                                        
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Product Price</label>
                                                </div>
                                                <div class="col-sm-9">
                                                   <input type="text" name="price" class="form-control" />
                                                   @error('price')
                                                        <span class="danger">{{ $message }}</span>
                                                        @enderror
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Product Images</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="file" name="product_images[]" multiple>
                                                    @error('product_images')
                                                        <span class="danger">{{ $message }}</span>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Description</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <textarea name="description" placeholder="Description" rows="8" class="form-control"></textarea>
                                                    @error('description')
                                                        <span class="danger">{{ $message }}</span>
                                                        @enderror
                                                </div>
                                            </div>
                                            @csrf
                                            <div class="row form-gorup">
                                                <div class="col-sm-12 text-right">
                                                <button type="submit"
                                                    class="btn btn-primary">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                @endsection

                
