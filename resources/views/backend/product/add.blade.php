@extends('backend.master')
@section('main-content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="overview-wrap">
            <h2 class="title-1">Add Product</h2>

        </div>
    </div>
</div>

<div class="row ">
    <div class="col-md-6 offset-md-3">

        <div class="card">
            <div class="card-header">Add new Product</div>
            <div class="card-body">
                
                <form action="{{route('product.add')}}" method="post" novalidate="novalidate">
                    @csrf
                    <div class="form-group">
                        <label for="p_name" class="control-label mb-1">Product Name</label>
                        <input id="p_name" name="p_name" type="text" class="form-control" placeholder="Enter your product">
                    </div>
                    <div class="form-group">
                        <label for="p_des" class="control-label mb-1">Product Description</label>
                        <textarea id="p_des" name="p_des" type="text" cols="30" rows="2" class="form-control" placeholder="Enter your description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="p_qty" class="control-label mb-1">Product Quantity</label>
                        <input id="p_qty" name="p_qty"  type="text" class="form-control" placeholder="Enter your quantity">
                    </div>
                    <div class="form-group">
                        <label for="p_wrty" class="control-label mb-1">Product Warrenty</label>
                        <input id="p_wrty" name="p_wrty"  type="text" class="form-control" placeholder="Enter your warrenty">
                    </div>
                    <div class="form-group">
                        <label for="p_price" class="control-label mb-1">Product Price</label>
                        <input id="p_price" name="p_price"  type="number" class="form-control" placeholder="Enter your price">
                    </div>
                    
                    
                    <div>
                       <button type="submit" class="btn btn-lg btn-info btn-block">Add Product</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection
