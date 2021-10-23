@extends('admin.template.base')
@section('content')

<!-- start coding -->

   
   <div class="container">
   	<div class="card mt-3 pt-3">
   		<div class="card-body">
				<div class="container-fluid">
		   		<div class="row ml-1 mr-2 mb-3">
		   			<div class="col-md-8">
		   				<h4>Data Produk</h4>
		   			</div>
   		<div class="col-md-4">
   			<a href="{{url('admin/produk/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Data Produk</a>
   		</div>
   	<div class="container">
   		<table class="table">
   			<thead>
   				<th>No</th>
   				<th>Aksi</th>
   				<th>Nama</th>
   				<th>Harga</th>
   				<th>Stok</th>
   			</thead>
   			<tbody>
   				@foreach($list_produk as $produk)
   				<tr>
   					<td>{{$loop->iteration}}</td>
   					<td>
                     <div class="btn-group">
   						   <a href="{{url('admin/produk',$produk->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
   						   <a href="{{url('admin/produk',$produk->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                           @include('admin.utils.delete', ['url' =>url('admin/produk', $produk->id)])
                     </div>
   					</td>
   					<td>{{ucwords($produk->nama)}}</td>
   					<td>{{number_format($produk->harga)}}</td>
   					<td>{{$produk->stok}}</td>
   				</tr>
   				@endforeach
   			</tbody>
   		</table>
   		
   	</div>

   		</div>
  		 </div>
   	</div>
   </div>

<!-- end coding -->

@endsection