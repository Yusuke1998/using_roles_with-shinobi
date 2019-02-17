@extends('layouts.app')
@section('content')
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	            <div class="panel panel.default">
	                <div class="panel-heading">
	                	<h2>Productos</h2>
	                	@can('products.create')
	                		<a href="{{ route('roles.create') }}" title="Nuevo producto" class="pull-right btn btn-sm btn-primary">Crear</a>
	                	@endcan
	                </div>
	                <div class="panel-body">
	                	<table class="table table-bordered">
	                		<thead>
	                			<tr>
	                				<th width="10px">ID</th>
	                				<th>Nombre</th>
	                				<th colspan="3">&nbsp</th>
	                			</tr>
	                		</thead>
	                		<tbody>
	                			@foreach($products as $product)
	                			<tr>
	                				<td>{{ $product->id }}</td>
	                				<td>{{ $product->name }}</td>
	                				<td>
	                					@can('products.show')
	                						<a href="{{ route('products.show',$product->id) }}" title="Ver producto!" class="btn btn-sm btn-info">Ver</a>
	                					@endcan
	                				</td>
	                				<td>
	                					@can('products.edit')
	                						<a href="{{ route('products.edit',$product->id) }}" title="Editar producto!" class="btn btn-sm btn-info">Editar</a>
	                					@endcan
	                				</td>
	                				<td>
	                					@can('products.destroy')

	                						<a class="btn btn-sm btn-danger" onclick="event.preventDefault(); document.getElementById('destroy-form').submit();"> {{ __('Eliminar') }}
		                                    </a>

		                                    <form id="destroy-form" action="{{ route('products.destroy',$product) }}" method="POST" style="display: none;">
		                                    	<input type="hidden" name="method" value="delete">
		                                        {{ csrf_field() }}
		                                    </form>
	                					@endcan
	                				</td>
	                			</tr>
	                			@endforeach
	                		</tbody>
	                	</table>
	                </div>                
	            </div>
	        </div>
	    </div>
	</div>
@stop