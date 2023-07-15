@extends('layouts.app')

@section('template_title')
    Orden Compra  
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Orden Compra') }}
                            </span>

                             
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>idProveedor</th>
										<th>Idorden</th>
										<th>Fecha</th>
										<th>Estado</th>
										<th>Descripcion</th>
										<th>personal_id</th>
                                        <th>TOTAL </th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ordenCompras as $ordenCompra)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $ordenCompra->idProveedor }}</td>
											<td>{{ $ordenCompra->idOrden }}</td>
											<td>{{ $ordenCompra->fecha }}</td>
											<td>{{ $ordenCompra->estado }}</td>
											<td>{{ $ordenCompra->descripcion }}</td>
											<td>{{ $ordenCompra->personal_id }}</td>
                                            <td>{{ $ordenCompra->precioTotal }}</td>

                                            <td>
                                                <form method="POST"   role="form" enctype="multipart/form-data" action="{{ route('compras.update',[$ordenCompra->idOrden]) }}">
                                                    {{ method_field('PATCH') }}
                                                    @csrf
                                                    <div class="box-footer mt20">
                                                        <button type="submit" class="btn btn-success">{{ __('Pagar') }}</button>
                                                     </div>
                                                     <input type="hidden" name="idOrden" value ='{{ $ordenCompra->idOrden }}'>              
                                                    
                                                </form>
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
    </div>
@endsection