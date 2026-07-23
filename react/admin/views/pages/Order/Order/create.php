<div class="card mb-3">
            <div class="card-body">
              <div class="row justify-content-between align-items-center">
                <div class="col-md">
                  <h5 class="mb-2 mb-md-0">Order #AD20294</h5>
                </div>
                <div class="col-auto"><button class="btn btn-falcon-default btn-sm me-1 mb-2 mb-sm-0" type="button"><svg class="svg-inline--fa fa-arrow-down fa-w-14 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M413.1 222.5l22.2 22.2c9.4 9.4 9.4 24.6 0 33.9L241 473c-9.4 9.4-24.6 9.4-33.9 0L12.7 278.6c-9.4-9.4-9.4-24.6 0-33.9l22.2-22.2c9.5-9.5 25-9.3 34.3.4L184 343.4V56c0-13.3 10.7-24 24-24h32c13.3 0 24 10.7 24 24v287.4l114.8-120.5c9.3-9.8 24.8-10 34.3-.4z"></path></svg><!-- <span class="fas fa-arrow-down me-1"> </span> Font Awesome fontawesome.com -->Download (.pdf)</button>
                  <button class="btn btn-falcon-default btn-sm me-1 mb-2 mb-sm-0" type="button"><svg class="svg-inline--fa fa-print fa-w-16 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="print" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M448 192V77.25c0-8.49-3.37-16.62-9.37-22.63L393.37 9.37c-6-6-14.14-9.37-22.63-9.37H96C78.33 0 64 14.33 64 32v160c-35.35 0-64 28.65-64 64v112c0 8.84 7.16 16 16 16h48v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h48c8.84 0 16-7.16 16-16V256c0-35.35-28.65-64-64-64zm-64 256H128v-96h256v96zm0-224H128V64h192v48c0 8.84 7.16 16 16 16h48v96zm48 72c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z"></path></svg><!-- <span class="fas fa-print me-1"> </span> Font Awesome fontawesome.com -->Print</button>
                  <button class="btn btn-falcon-success btn-sm mb-2 mb-sm-0" type="button"><svg class="svg-inline--fa fa-dollar-sign fa-w-9 me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dollar-sign" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288 512" data-fa-i2svg=""><path fill="currentColor" d="M209.2 233.4l-108-31.6C88.7 198.2 80 186.5 80 173.5c0-16.3 13.2-29.5 29.5-29.5h66.3c12.2 0 24.2 3.7 34.2 10.5 6.1 4.1 14.3 3.1 19.5-2l34.8-34c7.1-6.9 6.1-18.4-1.8-24.5C238 74.8 207.4 64.1 176 64V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48h-2.5C45.8 64-5.4 118.7.5 183.6c4.2 46.1 39.4 83.6 83.8 96.6l102.5 30c12.5 3.7 21.2 15.3 21.2 28.3 0 16.3-13.2 29.5-29.5 29.5h-66.3C100 368 88 364.3 78 357.5c-6.1-4.1-14.3-3.1-19.5 2l-34.8 34c-7.1 6.9-6.1 18.4 1.8 24.5 24.5 19.2 55.1 29.9 86.5 30v48c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-48.2c46.6-.9 90.3-28.6 105.7-72.7 21.5-61.6-14.6-124.8-72.5-141.7z"></path></svg><!-- <span class="fas fa-dollar-sign me-1"></span> Font Awesome fontawesome.com -->Receive Payment</button>
                </div>
              </div>
            </div>
          </div>

		  <div class="card">
            <div class="card-body">
              <div class="row align-items-center text-center mb-3">
                <div class="col-sm-6 text-sm-start"><img src="<?php echo $base_url?>/assets/img/logos/logo-invoice.png" alt="invoice" width="150"></div>
                <div class="col text-sm-end mt-3 mt-sm-0">
                  <h2 class="mb-3">Invoice</h2>
                  <h5>Falcon Design Studio</h5>
                  <p class="fs-10 mb-0">156 University Ave, Toronto<br>On, Canada, M5H 2H7</p>
                </div>
                <div class="col-12">
                  <hr>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-500">Invoice to</h6>
                  
				  
                  
				  <?php 
				    echo  Customer::html_select("customer_id");
				   ?>

                  <p class="fs-10 " >
					<textarea class="address" name="" id="">

					</textarea>
				  </p>
                  <p class="fs-10">
					<a class="" href="mailto:example@gmail.com">
						<input type="text" class="form-control email">
					</a>
					<br>
					<a class="" href="tel:444466667777">
						<input type="text" class="form-control mobile">
					</a></p>
                </div>
                <div class="col-sm-auto ms-auto">
                  <div class="table-responsive">
                    <table class="table table-sm table-borderless fs-10">
                      <tbody>
                        <tr>
                          <th class="text-sm-end">Invoice No:</th>
                          <td>14</td>
                        </tr>
                        <tr>
                          <th class="text-sm-end">Order Number:</th>
                          <td>AD20294</td>
                        </tr>
                        <tr>
                          <th class="text-sm-end">Invoice Date:</th>
                          <td>2018-09-25</td>
                        </tr>
                        <tr>
                          <th class="text-sm-end">Payment Due:</th>
                          <td>Upon receipt</td>
                        </tr>
                        <tr class="alert alert-success fw-bold">
                          <th class="text-success-emphasis text-sm-end">Amount Due:</th>
                          <td class="text-success-emphasis">$19688.40</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="table-responsive scrollbar mt-4 fs-10">
                <table class="table table-striped border-bottom">
                  <thead data-bs-theme="light">
                    <tr class="bg-primary dark__bg-1000">
                      <th class="text-white border-0">Products</th>
                      <th class="text-white border-0 text-center">Quantity</th>
                      <th class="text-white border-0 text-end">Rate</th>
                      <th class="text-white border-0 text-end">Amount</th>
                      <th class="text-white border-0 text-end"> <button class="btn-sm btn btn-warning">clear</button></th>
                    </tr>
                    <tr class="bg-secondary">
                      <th class="text-white border-0">
						<?php echo Product::html_select("product_id") ?>
					  </th>
                      <th class="text-white border-0 text-center">
						 <input class="form-control qty" type="number" value="1" min="1">
					  </th>
                      <th class="text-white border-0 text-end ">
						   <input disabled class="form-control rate" type="number" value="1" min="1">
					  </th>
                      <th class="text-white border-0 text-end">
						 <input disabled class="form-control amount" type="number" value="1" min="1">
					  </th>
                      <th class="text-white border-0 text-end">
						  <button class=" btn btn-success add_cart">Add</button>
					  </th>
                    </tr>
                  </thead>
                  <tbody class="print_cart">
                   
                    
                  </tbody>
                </table>
              </div>
              <div class="row justify-content-end">
                <div class="col-auto">
                  <table class="table table-sm table-borderless fs-10 text-end">
                    <tbody><tr>
                      <th class="text-900">Subtotal:</th>
                      <td class="fw-semi-bold">$18,230.00 </td>
                    </tr>
                    <tr>
                      <th class="text-900">Tax 8%:</th>
                      <td class="fw-semi-bold">$1458.40</td>
                    </tr>
                    <tr class="border-top">
                      <th class="text-900">Total:</th>
                      <td class="fw-semi-bold">$19688.40</td>
                    </tr>
                    <tr class="border-top border-top-2 fw-bolder">
                      <th class="text-900">Amount Due:</th>
                      <td class="text-900">$19688.40</td>
                    </tr>
                  </tbody></table>
                </div>
              </div>
            </div>
            <div class="card-footer bg-body-tertiary d-flex justify-content-between">
              <p class="fs-10 mb-0"><strong>Notes: </strong>We really appreciate your business and if there’s anything else we can do, please let us know!</p>
			  <button class="btn btn-success process">process</button>
            </div>
          </div>


<script>

$(function(){



let order = new Cart("order");
print_cart()
//  customer 
$("#customer_id").on("change", function(){
  let mobile= $("#customer_id  option:checked").data("mobile");
  let address= $("#customer_id  option:checked").data("address");
  let email= $("#customer_id  option:checked").data("email");
   $(".mobile").val(mobile)
   $(".address").val(address)
   $(".email").val(email)
});

// product price 
$("#product_id").on("change", function(){
let price = $(this).find("option:selected").data("price");
$(".rate").val(price);
$(".amount").val(price);
$(".qty").val(1);
});

$(".qty").on("change", function(){
let qty = $(this).val();
let price = $(".rate").val();
$(".amount").val(price * qty);
});

// cart
$(".add_cart").on("click", function(){
	let product_id= $("#product_id").val();
	let product_name= $("#product_id option:checked").text();
	let qty= Number($(".qty").val())  ;
	let price= Number( $(".rate").val());
	let data= {
		id:product_id,
		product_name,
		qty,
		price
	}
	order.AddItem(data)
	print_cart();
})
// print cart
function print_cart(){

 let items= order.getData() ?? [];

  let html=``;
  items.forEach((item)=>{

   html+=`
   
	<tr>
		<td class="align-middle">
		<h6 class="mb-0 text-nowrap">${item.product_name}</h6>
		   
		</td>
		<td class="align-middle text-center">${item.qty}</td>
		<td class="align-middle text-end">$${item.price}</td>
		<td class="align-middle text-end">$${item.qty * item.price}</td>
		<td class="align-middle text-end">
		<button data-id="${item.id}" class="btn btn-danger del">Del</button>
		</td>
  </tr>
   `;
  });
  $(".print_cart").html(html)
}
// delete
$("body").on("click", ".del", function(){
	let item_id= $(this).data("id");
    order.delItem(item_id);
    print_cart()
  });

// process

$(".process").on("click", function(){
  
  let customer_id=$("#customer_id").val();
  let address= $(".address").val();
  let mobile= $(".mobile").val();
  let email= $(".email").val();
  let products = order.getData()


  $.ajax({
	 url:"<?php echo $base_url?>/api/order/process",
	 method:"Post",
	 data:{customer_id, address,mobile,email,products},
	 success:function(res){
          console.log(res);
		  order.clearItem()
		  print_cart()

		 window.location.href ="<?php echo $base_url; ?>/stock";
	 },
	 error:function(err){
         console.log(err);

	 }

  });

});




})
</script>

