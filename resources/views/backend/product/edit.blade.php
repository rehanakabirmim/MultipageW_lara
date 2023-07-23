@extends('backend.master')
@section('main-content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="overview-wrap">
            <h2 class="title-1">Edit Product</h2>

        </div>
    </div>
</div>

<div class="row ">
    <div class="col-md-6 offset-md-3">

        <div class="card">
            <div class="card-header">Edit new Product</div>
            <div class="card-body">
                
                <form action="{{route('product.update',$product->id)}}" method="post" novalidate="novalidate">
                    @csrf
                    <div class="form-group">
                        <label for="p_name" class="control-label mb-1">Product Name</label>
                        <input id="p_name" name="p_name" type="text" class="form-control" value="{{$product->product_name}}">
                    </div>
                    <div class="form-group">
                        <label for="p_des" class="control-label mb-1">Product Description</label>
                        <textarea id="p_des" name="p_des" type="text" cols="30" rows="2" class="form-control" >{{$product->	product_des}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="p_qty" class="control-label mb-1">Product Quantity</label>
                        <input id="p_qty" name="p_qty"  type="text" class="form-control" value="{{$product->product_qty}}">
                    </div>
                    <div class="form-group">
                        <label for="p_wrty" class="control-label mb-1">Product Warrenty</label>
                        <input id="p_wrty" name="p_wrty"  type="text" class="form-control" value="{{$product->product_wrty}}">
                    </div>
                    <div class="form-group">
                        <label for="p_price" class="control-label mb-1">Product Price</label>
                        <input id="p_price" name="p_price"  type="number" class="form-control" value="{{$product->product_price}}" >
                    </div>
                    
                    
                    <div>
                       <button type="submit" class="btn btn-lg btn-success btn-block">Update Product</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection
