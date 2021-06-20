<!doctype html>
<html lang="en">

<head>
	<title>API Documentation</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{ secure_asset('vendor') }}/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ secure_asset('vendor') }}/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ secure_asset('vendor') }}/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ secure_asset('css') }}/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{ secure_asset('css') }}/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{ secure_asset('img') }}/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ secure_asset('img') }}/favicon.png">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
</head>

<body>
	<!-- WRAPPER -->
		<!-- NAVBAR -->
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Documentación</h3>
					<div class="row">
						<div class="col-md-7">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Crear cliente</h3>
									<br>
									<h4 class="page-title">POST <code>url/api/customers</code> </h4>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Parameter</th>
												<th>Type</th>
												<th>Position</th>
												<th>#</th>
												<th>Description</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>name</td>
												<td><code>string</code></td>
												<td><code>Body</code></td>
												<td><code>Required</code></td>
												<td>Nombre del cliente</td>
											</tr>
											<tr>
												<td>email</td>
												<td><code>string</code></td>
												<td><code>Body</code></td>
												<td><code>Required</code></td>
												<td>Email del cliente</td>
											</tr>
											<tr>
												<td>address</td>
												<td><code>string</code></td>
												<td><code>Body</code></td>
												<td><code>Required</code></td>
												<td>Dirección del cliente</td>
											</tr>
											<tr>
												<td>phone</td>
												<td><code>string</code></td>
												<td><code>Body</code></td>
												<td><code>Required</code></td>
												<td>Teléfono del cliente</td>
											</tr>
											<tr>
												<td>nationality</td>
												<td><code>string</code></td>
												<td><code>Body</code></td>
												<td><code>Required</code></td>
												<td>Nacionalidad del cliente</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
						<div class="col-md-5">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Response</h3>
								</div>
								<div class="panel-body">
									<pre>{
	"data": {
		"name": "Sofia",
		"email": "sofia@mail.com",
		"address": "Cra 14B #15-63",
		"phone": "3124562827",
		"nationality": "Brazilian",
		"updated_at": "2021-06-20T03:32:30.000000Z",
		"created_at": "2021-06-20T03:32:30.000000Z",
		"id": 8
	},
	"status": 201,
	"message": "created"
}</pre>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-7">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Listar clientes</h3>
									<br>
									<h4 class="page-title">GET <code>url/api/customers</code> </h4>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Parameter</th>
												<th>Type</th>
												<th>Position</th>
												<th>#</th>
												<th>Description</th>
											</tr>
										</thead>
										<tbody>
											
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
						<div class="col-md-5">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Response</h3>
								</div>
								<div class="panel-body">
									<pre>{
"0": {
	"id": 2,
	"name": "Jorge Alexander",
	"email": "jorge@mail.com",
	"address": "Calle 21A #14B",
	"phone": "3173171303",
	"nationality": "Colombiano",
	"created_at": "2021-06-19T19:27:54.000000Z",
	"updated_at": "2021-06-19T21:30:28.000000Z"
},
"1": {
	"id": 1,
	"name": "Andrés",
	"email": "andres@mail.com",
	"address": "Calle 20A",
	"phone": "3114562288",
	"nationality": "Colombiano",
	"created_at": "2021-06-19T18:55:56.000000Z",
	"updated_at": "2021-06-19T21:42:15.000000Z"
},
"status": 200
}</pre>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-7">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Editar cliente</h3>
									<br>
									<h4 class="page-title">POST <code>url/api/customers/{id}</code> </h4>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Parameter</th>
												<th>Type</th>
												<th>Position</th>
												<th>#</th>
												<th>Description</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>_method</td>
												<td><code>string</code></td>
												<td><code>Body</code></td>
												<td><code>Required</code></td>
												<td>Darle el valor de "PUT"</td>
											</tr>
											<tr>
												<td>name</td>
												<td><code>string</code></td>
												<td><code>Body</code></td>
												<td><code>Optional</code></td>
												<td>Nombre del cliente</td>
											</tr>
											<tr>
												<td>email</td>
												<td><code>string</code></td>
												<td><code>Body</code></td>
												<td><code>Optional</code></td>
												<td>Email del cliente</td>
											</tr>
											<tr>
												<td>address</td>
												<td><code>string</code></td>
												<td><code>Body</code></td>
												<td><code>Optional</code></td>
												<td>Dirección del cliente</td>
											</tr>
											<tr>
												<td>phone</td>
												<td><code>string</code></td>
												<td><code>Body</code></td>
												<td><code>Optional</code></td>
												<td>Teléfono del cliente</td>
											</tr>
											<tr>
												<td>nationality</td>
												<td><code>string</code></td>
												<td><code>Body</code></td>
												<td><code>Optional</code></td>
												<td>Nacionalidad del cliente</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
						<div class="col-md-5">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Response</h3>
								</div>
								<div class="panel-body">
									<pre>{
"data": {
	"id": 1,
	"name": "Andrés Morales",
	"email": "andres@mail.com",
	"address": "Calle 20A",
	"phone": "3114562288",
	"nationality": "Colombiano",
	"created_at": "2021-06-19T18:55:56.000000Z",
	"updated_at": "2021-06-20T02:05:58.000000Z"
},
"status": 200,
"message": "done"
}</pre>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-7">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Eliminar cliente</h3>
									<br>
									<h4 class="page-title">DELETE <code>url/api/customers/{id}</code> </h4>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Parameter</th>
												<th>Type</th>
												<th>Position</th>
												<th>#</th>
												<th>Description</th>
											</tr>
										</thead>
										<tbody>
											
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
						<div class="col-md-5">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Response</h3>
								</div>
								<div class="panel-body">
									<pre>{
	"data": "customer was deleted",
	"status": 200,
	"message": "done"
}</pre>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-7">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Crear orden</h3>
									<br>
									<h4 class="page-title">POST <code>url/api/order/create</code> </h4>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Parameter</th>
												<th>Type</th>
												<th>Position</th>
												<th>#</th>
												<th>Description</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>customer_id</td>
												<td><code>int</code></td>
												<td><code>Body</code></td>
												<td><code>Required</code></td>
												<td>ID del cliente</td>
											</tr>
											<tr>
												<td>date_order</td>
												<td><code>date</code></td>
												<td><code>Body</code></td>
												<td><code>Required</code></td>
												<td>Fecha de la orden en el formato Y/m/d</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
						<div class="col-md-5">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Response</h3>
								</div>
								<div class="panel-body">
									<pre>{
"data": {
	"customer_id": "6",
	"date_order": "2021/06/16",
	"updated_at": "2021-06-20T01:52:01.000000Z",
	"created_at": "2021-06-20T01:52:01.000000Z",
	"id": 16,
	"customer": {
		"id": 6,
		"name": "Laura Arias",
		"email": "laura@mail.com",
		"address": "Cra 14B",
		"phone": "3124562227",
		"nationality": "Brazilian",
		"created_at": "2021-06-20T01:51:26.000000Z",
		"updated_at": "2021-06-20T01:51:52.000000Z"
	}
},
"status": 201,
"message": "created"
}</pre>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-7">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Listar todas las ordenes</h3>
									<br>
									<h4 class="page-title">GET <code>url/api/orders</code> </h4>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Parameter</th>
												<th>Type</th>
												<th>Position</th>
												<th>#</th>
												<th>Description</th>
											</tr>
										</thead>
										<tbody>
											
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
						<div class="col-md-5">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Response</h3>
								</div>
								<div class="panel-body">
									<pre>{
	"0": {
		"id": 6,
		"customer_id": 2,
		"date_order": "2005-05-12",
		"state": "Solicitada",
		"created_at": "2021-06-19T23:26:04.000000Z",
		"updated_at": "2021-06-19T23:26:04.000000Z"
	},
	"1": {
		"id": 7,
		"customer_id": 1,
		"date_order": "2005-06-10",
		"state": "Solicitada",
		"created_at": "2021-06-19T23:34:37.000000Z",
		"updated_at": "2021-06-19T23:34:37.000000Z"
	},
	"2": {
		"id": 8,
		"customer_id": 1,
		"date_order": "2005-04-17",
		"state": "Solicitada",
		"created_at": "2021-06-19T23:35:13.000000Z",
		"updated_at": "2021-06-19T23:35:13.000000Z"
	},
	"status": 200
}</pre>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-7">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Anular o aprobar una orden</h3>
									<br>
									<h4 class="page-title">PUT <code>url/api/order/approve/{order_id}/{0 or 1}</code> Colocar como primer parametro el order_id y como segundo 0 para anular o 1 para aprobar</h4>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Parameter</th>
												<th>Type</th>
												<th>Position</th>
												<th>#</th>
												<th>Description</th>
											</tr>
										</thead>
										<tbody>
											
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
						<div class="col-md-5">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Response</h3>
								</div>
								<div class="panel-body">
									<pre>{
"data": {
	"id": 16,
	"customer_id": 6,
	"date_order": "2021-06-16",
	"state": "Anulada",
	"created_at": "2021-06-20T01:52:01.000000Z",
	"updated_at": "2021-06-20T01:53:36.000000Z",
	"customer": {
		"id": 6,
		"name": "Laura Arias",
		"email": "laura@mail.com",
		"address": "Cra 14B",
		"phone": "3124562227",
		"nationality": "Brazilian",
		"created_at": "2021-06-20T01:51:26.000000Z",
		"updated_at": "2021-06-20T01:51:52.000000Z"
	}
},
"status": 200,
"message": "done"
}</pre>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-7">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Crear items para una orden</h3>
									<br>
									<h4 class="page-title">POST <code>url/api/item/create</code> Está validado de que nada más se puede añadir items a una orden con estado "Solicitada"</h4>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Parameter</th>
												<th>Type</th>
												<th>Position</th>
												<th>#</th>
												<th>Description</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>order_id</td>
												<td><code>int</code></td>
												<td><code>Body</code></td>
												<td><code>Required</code></td>
												<td>ID de la orden</td>
											</tr>
											<tr>
												<td>width</td>
												<td><code>double</code></td>
												<td><code>Body</code></td>
												<td><code>Required</code></td>
												<td>Ancho del vidrio</td>
											</tr>
											<tr>
												<td>length</td>
												<td><code>double</code></td>
												<td><code>Body</code></td>
												<td><code>Required</code></td>
												<td>Largo del vidrio</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
						<div class="col-md-5">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Response</h3>
								</div>
								<div class="panel-body">
									<pre>{
"data": {
	"order_id": "6",
	"width": "70",
	"length": "36.45",
	"updated_at": "2021-06-20T04:12:18.000000Z",
	"created_at": "2021-06-20T04:12:18.000000Z",
	"id": 7,
	"order": {
		"id": 6,
		"customer_id": 2,
		"date_order": "2005-05-12",
		"state": "Solicitada",
		"created_at": "2021-06-19T23:26:04.000000Z",
		"updated_at": "2021-06-19T23:26:04.000000Z"
	}
},
"status": 201,
"message": "created"
}</pre>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-7">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Mostar una orden</h3>
									<br>
									<h4 class="page-title">GET <code>url/api/order/show/{order_id}</code> </h4>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Parameter</th>
												<th>Type</th>
												<th>Position</th>
												<th>#</th>
												<th>Description</th>
											</tr>
										</thead>
										<tbody>
											
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
						<div class="col-md-5">
							<!-- TABLE HOVER -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Response</h3>
								</div>
								<div class="panel-body">
									<pre>{
"data": {
	"id": 16,
	"customer_id": 6,
	"date_order": "2021-06-16",
	"state": "Anulada",
	"created_at": "2021-06-20T01:52:01.000000Z",
	"updated_at": "2021-06-20T01:53:36.000000Z",
	"items": [
		{
			"id": 4,
			"order_id": 16,
			"width": "15.5",
			"length": "30.2",
			"created_at": "2021-06-20T01:52:59.000000Z",
			"updated_at": "2021-06-20T01:52:59.000000Z"
		},
		{
			"id": 5,
			"order_id": 16,
			"width": "45.6",
			"length": "35.2",
			"created_at": "2021-06-20T01:53:08.000000Z",
			"updated_at": "2021-06-20T01:53:08.000000Z"
		},
		{
			"id": 6,
			"order_id": 16,
			"width": "70",
			"length": "36.45",
			"created_at": "2021-06-20T01:53:15.000000Z",
			"updated_at": "2021-06-20T01:53:15.000000Z"
		}
	],
	"customer": {
		"id": 6,
		"name": "Laura Arias",
		"email": "laura@mail.com",
		"address": "Cra 14B",
		"phone": "3124562227",
		"nationality": "Brazilian",
		"created_at": "2021-06-20T01:51:26.000000Z",
		"updated_at": "2021-06-20T01:51:52.000000Z"
	}
},
"status": 200,
"message": "done"
}</pre>
								</div>
							</div>
							<!-- END TABLE HOVER -->
						</div>
					</div>

				</div>
			</div>
			<!-- END MAIN CONTENT -->
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script>
	$(document).ready(function() {
	  $('pre code').each(function(i, block) {
		hljs.highlightBlock(block);
	  });
	});
	</script>
	<script src="{{ secure_asset('vendor') }}/jquery/jquery.min.js"></script>
	<script src="{{ secure_asset('vendor') }}/bootstrap/js/bootstrap.min.js"></script>
	<script src="{{ secure_asset('vendor') }}/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="{{ secure_asset('scripts') }}/klorofil-common.js"></script>
</body>

</html>
