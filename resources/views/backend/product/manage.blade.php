@extends('backend.master')
@section('main-content')
<div class="row">
    <div class="col-md-12">
        <div class="overview-wrap">
            <h2 class="title-1">All Product</h2>
            <a href="" class="btn btn-primary btn-sm">Add Product</a>
        </div>
    </div>
</div>

<div class="row ">
    <div class="col-md-12 py-3">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Product Name</th>
                        <th>Qty</th>
                        <th>Product Warrenty</th>
                        <th>Product price</th>
                        <th>status</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                    $i=1;
                    @endphp
                    @if (count($products)>0)

                    @foreach ($products as $product )
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->product_qty}}</td>
                        <td>{{$product->product_wrty}}</td>
                        <td>{{$product->product_price}}</td>
                        <td>

                        @if ($product->status==1)
                        <a href="{{route('product.atoi',$product->id)}}" class="item btn btn-success btn-sm">
                               Active
                            </a>
                        @else
                        <a href="{{route('product.itoa',$product->id)}}" class="item btn btn-danger btn-sm">
                                InActive
                            </a>  
                        @endif
                        </td>
                        <td>
                            <a href="{{route('product.edit',$product->id)}}" class="item btn btn-warning btn-sm">
                                <i class="zmdi zmdi-edit"></i>
                            </a>
                            <a href="{{route('product.destroy',$product->id)}}" class="item btn btn-danger btn-sm">
                                <i class="zmdi zmdi-delete"></i>
                            </a>


                        </td>

                    </tr>

                    @endforeach
                    @else

                    <tr>
                        <td colspan="7" class="text-center">Data Not Found</td>
                    </tr>

                    @endif



                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>

@endsection
