@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif





<div class="box-body">

    <div class="row">
      <div class="col-md-3">
        <div class="small-box bg-info">
          <div class="inner"><h2>{{ '0' }}</h2><p> Usuarios </p></div>
          <div class="icon"><i class="fa fa-users"></i></div>
          <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="small-box bg-danger">
          <div class="inner"><h2>{{ 0 }}</h2><p> Categorias </p></div>
          <div class="icon"><i class="fa fa-tags"></i></div>
          <a href="{{ route('category.index') }}" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="small-box bg-warning">
          <div class="inner"><h2>{{ 0 }}</h2><p> Productos </p></div>
          <div class="icon"><i class="fa fa-shopping-cart"></i> {{-- ion ion-stats-bars--}}</div>
          <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-md-3">
        <div class="small-box bg-success">
          <div class="inner"><h2>{{ 0 }}</h2><p> Ventas </p></div>
          <div class="icon"><i class="fa fa-usd"></i></div>
          <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

  </div>
    <div class="row">
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <i class="fa fa-chart-bar"></i>
            <span>Productos de Mayor Venta</span>
          </strong>
        </div>
        <div class="panel-body">
          <table class="table table-striped table-bordered table-condensed">
            <thead>
            <tr>
              <th>Producto</th>
              <th>Vendidos</th>
              <th>Stock</th>
            <tr>
            </thead>
            <tbody>
              {{-- '< foreach ($products_sold as $product_sold): ?> '--}}
                <tr>
                  <td>{{'nombreProducto'}}</td>
                  <td>{{'vendidos'}}</td>
                  <td>{{'stock'}}</td>
                </tr>
              {{-- '< endforeach; ?>' --}}
            <tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <strong>
              <i class="fa fa-badge-dollar"></i>
              <span>Últimas Ventas Realizadas</span>
            </strong>
          </div>
          <div class="panel-body">
            <table class="table table-striped table-bordered table-condensed">
        <thead>
          <tr>
            <th class="text-center" style="width: 50px;">#</th>
            <th>Producto</th>
            <th>Fecha</th>
            <th>Monto Total</th>
          </tr>
        </thead>
        <tbody>
          {{--'< foreach ($recent_sales as  $recent_sale): ?>'--}}
          <tr>
            <td class="text-center"><!-- '<=count_id();?>' --></td>
            <td>
              {{ 'nombre' }}
              <!-- <a href="edit_sale.php?id= <=(int)$recent_sale[id]; ?> ">
              <=remove_junk(first_character($recent_sale[name])); ?>
            </a> -->
            </td>
            <td>{{ 'fecha' }} <!-- <=remove_junk(ucfirst($recent_sale[date])); ?>--></td>
            <td>{{ 'monto' }} <!--$<=remove_junk(first_character($recent_sale[price])); ?>--></td>
          </tr>

        {{--'< endforeach; ?>'--}}
        </tbody>
      </table>
      </div>
    </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">
          <strong>
            <span class="fa fa-chart-bar"></span>
            <span>Últimos Productos Agregados</span>
          </strong>
        </div>
        <div class="panel-body">

          <div class="list-group">
        {{--'< foreach ($recent_products as  $recent_product): ?>'--}}
          <a class="list-group-item clearfix" href="edit_product.php?id={{'<=(int)$recent_product[id];?>'}}">
            <h4 class="list-group-item-heading">
                <img class="img-avatar img-circle" src="uploads/products/no_image.jpg" alt="">
                <span class="label label-warning pull-right">
                  {{--'$<=(int)$recent_product[sale_price]; ?>'--}}
                </span>
            </h4>
            <span class="list-group-item-text pull-right">
            </span>
          </a>
      </div>
    </div>
  </div>
  </div>
 </div>









    </div>
                    










                </div>
            </div>
        </div>
    </div>
</div>
@endsection
