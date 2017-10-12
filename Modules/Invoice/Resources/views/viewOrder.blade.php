{{-- Bootstrap 3.3.6 --}}
<meta charset="utf-8">
<link rel=icon href="{{ asset("favicon.png") }}" sizes="32x32" type="image/png">
 <link rel="stylesheet" href="{{ asset("/backend/bootstrap/css/bootstrap.min.css") }}">
{{-- Font Awesome --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css") }}">
  {{-- Ionicons --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css") }}">
{{-- Theme style --}}
<link rel="stylesheet" href="{{ asset("/backend/dist/css/AdminLTE.css") }}">
<body>
<style>
@page { size: auto;  margin: 5mm; }
</style>
	<!-- Main content  onload="window.print();" -->
	<section class="invoice">
	  <!-- title row -->
	  <div class="row">
	    <div class="col-xs-12">
	      <h2 class="page-header">
	        <img src="{{ asset("favicon.png") }}" style="width: 32px; height: auto;"> Kaober Jsc.
	        <small class="pull-right">Date: {{ date('d/m/Y') }}</small>
	      </h2>
	    </div>
	    <!-- /.col -->
	  </div>
	  <!-- info row -->
	  <div class="row invoice-info">
	    <div class="col-sm-4 invoice-col">
	      From
	      <address>
	        <strong>Kaober Jsc.</strong><br>
	        Pháp Vân, Hoàng Liệt, Hoàng Mai<br>
	        Hà Nội, Việt Nam<br>
	        Phone: 01236368360<br>
	        Email: namanh@kaober.com
	      </address>
	    </div>
	    <!-- /.col -->
	    <div class="col-sm-4 invoice-col">
	      To
	      <address>
	        <strong>{{ $order->name }}</strong><br>
	        {{ $order->address }}<br>
	        {{ $order->city }}, {{ $order->country }}<br>
	        Phone: {{ $order->phone }}<br>
	        Email: {{ $order->email }}
	      </address>
	    </div>
	    <!-- /.col -->
	    <div class="col-sm-4 invoice-col">
	      <b>Invoice Code: {{ $order->keyorder }}</b><br>
	      {{-- <br> --}}
	      <b>Order ID:</b> {{ $order->order_id }}<br>
	      {{-- <b>Payment:</b> {{ $order->created_at }}<br> --}}
	      <b>Tax Code:</b> 968-34567
	    </div>
	    <!-- /.col -->
	  </div>
	  <!-- /.row -->

	  <!-- Table row -->
	  <div class="row">
	    <div class="col-xs-12 table-responsive">
	      <table class="table table-striped">
	        <thead>
	        <tr>
	          <th>Qty</th>
	          <th>Product</th>
	          <th>NCC</th>
	          <th>Price (VNĐ)</th>
	          <th>Price discount (VNĐ)</th>
	          <th>Subtotal (VNĐ)</th>
	        </tr>
	        </thead>
	        <tbody>
	        @foreach( $orderProducts as $product )
		        <tr>
		          <td>{{ $product->quantity }}</td>
		          <td><a href="{{ route('frontend.product', $product->product->slug) }}" target="_blank">{{ $product->product->title }}</a></td>
		          <td>{{ $product->product->shop->title }}</td>
		          <td>{{ number_format($product->product->price,3,',','.') }} VNĐ</td>
		          <td>{{ number_format($product->product->discount,3,',','.') }} VNĐ</td>
		          <td>{{ number_format($product->price * $product->quantity,3,',','.') }} VNĐ</td>
		        </tr>
		    @endforeach
	        </tbody>
	      </table>
	    </div>
	    <!-- /.col -->
	  </div>
	  <!-- /.row -->

	  <div class="row">
	    <!-- accepted payments column -->
	    <div class="col-xs-6">
	      <p class="lead">Payment Methods:</p>
	      <img src="{{ asset("/backend/dist/img/credit/visa.png") }}" alt="Visa">
	      <img src="{{ asset("/backend/dist/img/credit/mastercard.png") }}" alt="Mastercard">
	      <img src="{{ asset("/backend/dist/img/credit/american-express.png") }}" alt="American Express">
	      {{-- <img src="{{ asset("/backend/dist/img/credit/paypal2.png") }}" alt="Paypal"> --}}

{{-- 	      <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
	        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg
	        dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
	      </p> --}}
	    </div>
	    <!-- /.col -->
	    <div class="col-xs-6">
	      <p class="lead">Payment Time: {{ date_format($order->created_at, "H:i:s d/m/Y") }}</p>

	      <div class="table-responsive">
	        <table class="table">
	          <tr>
	            <th style="width:50%">Subtotal:</th>
	            <td>
	            	@php
	            		$totals = 0;
	            		foreach( $order->productOrders as $total ) 
	            			$totals += $total->price*$total->quantity;
	            	@endphp
	            		{{ number_format( $totals,3,'.',',') }}
	             đ</td>
	          </tr>
	          <tr>
	            <th>Tax (%)</th>
	            <td>0 VNĐ</td>
	          </tr>
	          <tr>
	            <th>Shipping:</th>
	            <td>0 VNĐ</td>
	          </tr>
	          <tr>
	            <th>Total:</th>
	            <th>
	            	@php
	            		$totals = 0;
	            		foreach( $order->productOrders as $total ) 
	            			$totals += $total->price*$total->quantity;
	            	@endphp
	            		{{ number_format( $totals,3,'.',',') }}đ
	            </th>
	          </tr>
	        </table>
	      </div>
	    </div>
	    <!-- /.col -->
	  </div>
	  <!-- /.row -->

</body>