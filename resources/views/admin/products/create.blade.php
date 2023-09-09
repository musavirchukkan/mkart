@extends('admin.layout.master')
@section('title', 'Add Product')
@section('content')

    <div class="content-start transition">
        {{-- <div class="container-fluid dashboard"> --}}


        <div class="app-content-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Page header -->
                        <div class="mb-5">
                            <h3 class="mb-0 ">Add Product</h3>
                        </div>
                    </div>
                </div>
                <div>
                    <!-- row -->
                    <form action={{ route('admin.products.save') }} method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-8 col-12">
                                <!-- card -->
                                <div class="card mb-4">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div>
                                            <!-- input -->
                                            <div class="mb-3">
                                                <label class="form-label">Product Title</label>
                                                <input type="text" class="form-control" name="product_name"
                                                    placeholder="Enter Product Title" required>
                                            </div>
                                            <!-- input -->
                                            <div>
                                                <label class="form-label">Product Description</label>
                                                {{-- <div class="pb-8" id="editor"></div>
                                                <input type="hidden" name="description" id="quillContent"> --}}
                                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="6"
                                                    placeholder="Enter Product Description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- card -->
                                <div class="card
                                                    mb-4">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div>
                                            <div class="mb-4">
                                                <!-- heading -->
                                                <h4 class="mb-4">Product Gallery</h4>
                                                <h5 class="mb-1">Product Image</h5>
                                                <p>Add Product main Image.</p>
                                                <!-- input -->
                                                <input type="file" name="main_image" class="form-control">
                                            </div>
                                            <div>
                                                <!-- heading -->
                                                <h5 class="mb-1">Product Gallery</h5>
                                                <p>Add Product Gallery Images.</p>
                                                <!-- input -->
                                                <div action="#" class="d-block dropzone border-dashed rounded-2">
                                                    <div class="fallback">
                                                        <input name="image" type="file" multiple />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-12">
                                <!-- card -->
                                <div class="card mb-4">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <!-- input -->
                                        <div class="form-check form-switch mb-4">
                                            <input class="form-check-input" name="is_stock" value="1" type="checkbox"
                                                role="switch" id="flexSwitchStock" checked>
                                            <label class="form-check-label" for="flexSwitchStock">In Stock</label>
                                        </div>
                                        <!-- input -->
                                        <div>
                                            <div class="mb-3">
                                                <label class="form-label">Product Code</label>
                                                <input type="text" name="product_code" class="form-control"
                                                    placeholder="Enter Product Title">
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3">
                                                <label class="form-label">Stock</label>
                                                <input type="text" name="stock" class="form-control"
                                                    placeholder="Enter Product Title">
                                            </div>
                                            <!-- input -->
                                            {{-- <div class="mb-3">
                                                <label class="form-label" id="productSKU">Gender</label><br>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                        id="inlineRadio1" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                                </div>
                                                <!-- input -->
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                        id="inlineRadio2" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                                </div>
                                                <!-- input -->
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                        id="inlineRadio3" value="option2">
                                                    <label class="form-check-label" for="inlineRadio3">Kids</label>
                                                </div>
                                            </div> --}}
                                            <!-- input -->
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <label class="form-label">Category</label>
                                                    <a href="#!" class="btn-link fw-semi-bold">Add New</a>
                                                </div>
                                                <!-- select menu -->
                                                <select class="form-select" name="category_id"
                                                    aria-label="Default select example">
                                                    <option value="">Select an Option</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->category_id }}">{{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <!-- tag -->
                                            <div class="mb-3">
                                                <label class="form-label">Tags
                                                </label>
                                                <input name='tags' name="tags" class="form-control w-100">
                                            </div>
                                        </div>


                                        <!-- card -->

                                        <!-- card body -->

                                        <!-- select -->
                                        <div class="mb-3">
                                            <label class="form-label">Status</label>
                                            <select class="form-select" name="status" aria-label="Default select example">
                                                <option selected>Published</option>
                                                <option value="1">Unpublished</option>
                                                <option value="2">Draft</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <!-- card -->
                                <div class="card mb-4">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <!-- input -->
                                        <div class="mb-3">
                                            <label class="form-label">Regular Price</label>
                                            <input type="text" name="price" class="form-control" placeholder="₹ 49.00">
                                        </div>
                                        <!-- input -->
                                        <div class="mb-3">
                                            <label class="form-label">Sale Price</label>
                                            <input type="text" name="sale_price" class="form-control"
                                                placeholder="₹ 49.00">
                                        </div>
                                        <!-- input -->
                                        {{-- <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="priceIncluded" checked>
                                            <label class="form-check-label" for="priceIncluded">
                                                Price includes taxes</label>
                                        </div> --}}
                                    </div>
                                </div>
                                <!-- button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">
                                        Create Product
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        {{-- </div> --}}
    </div>

@endsection
