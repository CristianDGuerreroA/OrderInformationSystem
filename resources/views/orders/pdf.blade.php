
<h2> PDF Generated</h2>
<form action="/orders/pdfgenerated/{{$order->id}}" method="GET">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label"> Date order </label>
        <input id="date_order" name="date_order" type="text" class="form-control" tabindex="1" value="{{$order->date_order}}">
    </div>
    <br>
    <div class="mb-3">
        <label for="" class="form-label"> Customer name </label>
        <input id="customer_name" name="customer_name" type="text" class="form-control" tabindex="2" value="{{$order->customer_name}}">
    </div>
    <br>
    <div class="mb-3">
        <label for="" class="form-label"> Customer id </label>
        <input id="customer_id" name="customer_id" type="text" class="form-control" tabindex="3" value="{{$order->customer_id}}">
    </div>
    <br>
    <div class="mb-3">
        <label for="" class="form-label"> Customer address </label>
        <input id="customer_address" name="customer_address" type="text" class="form-control" tabindex="3" value="{{$order->customer_address}}">
    </div>
    <br>
    <div class="mb-3">
        <label for="" class="form-label"> Customer_email </label>
        <input id="customer_email" name="customer_email" type="text" class="form-control" tabindex="3" value="{{$order->customer_email}}">
    </div>
    <br>
    <div class="mb-3">
        <label for="" class="form-label"> Order currency </label>
        <input id="order_currency" name="order_currency" type="text" class="form-control" tabindex="3" value="{{$order->order_currency}}">
    </div>
    <br>
    <div class="mb-3">
        <label for="" class="form-label"> Product id </label>
        <input id="product_id" name="product_id" type="text" class="form-control" tabindex="3" value="{{$order->product_id}}">
    </div>
    <br>
    <div class="mb-3">
        <label for="" class="form-label"> Product name </label>
        <input id="product_name" name="product_name" type="text" class="form-control" tabindex="3" value="{{$order->product_name}}">
    </div>
    <br>
    <div class="mb-3">
        <label for="" class="form-label"> Product quantity </label>
        <input id="product_quantity" name="product_quantity" type="text" class="form-control" tabindex="3" value="{{$order->product_quantity}}">
    </div>
    <br>
    <div class="mb-3">
        <label for="" class="form-label"> Product unit of measure </label>
        <input id="product_unit_of_measure" name="product_unit_of_measure" type="text" class="form-control" tabindex="3" value="{{$order->product_unit_of_measure}}">
    </div>
    <br>
    <div class="mb-3">
        <label for="" class="form-label"> Net product value </label>
        <input id="net_product_value" name="net_product_value" type="text" step="any" class="form-control" tabindex="3" value="{{$order->net_product_value}}">
    </div>
</form>
