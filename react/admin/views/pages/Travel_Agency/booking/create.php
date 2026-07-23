<style>
	body {
		background: #f5f7fb;
	}

	.card {
		border: none;
		border-radius: 15px;
		box-shadow: 0 5px 15px rgba(0, 0, 0, .1);
	}

	.card-header {
		background: #0d6efd;
		color: #fff;
		font-size: 22px;
		font-weight: bold;
		border-radius: 15px 15px 0 0 !important;
	}

	.section-title {
		background: #f1f3f5;
		padding: 8px 15px;
		border-left: 5px solid #0d6efd;
		margin-top: 20px;
		margin-bottom: 20px;
		font-weight: bold;
	}

	.form-label {
		font-weight: 600;
	}

	.table th {
		width: 220px;
		background: #f8f9fa;
	}

	.total-box {
		font-size: 18px;
		font-weight: bold;
	}

	.btn {
		min-width: 120px;
	}
</style>

<div class="container my-5">

	<div class="card">

		<div class="card-header">
			Travel Agency Booking Form
		</div>

		<div class="card-body">

			<form action="booking_save.php" method="post">

				<div class="section-title">
					Customer Information
				</div>

				<div class="row">

					<div class="col-md-6 mb-3">
						<label class="form-label">Customer</label>
						<!-- <select class="form-select" name="customer_id">
								<option>Select Customer</option>
								<option value="1">John Smith</option>
								<option value="2">Alice Johnson</option>
								<option value="3">Michael Brown</option>
							</select> -->

						<?php echo  Customer::html_select("customer_id") ?>
					</div>

					<div class="col-md-6 mb-3">
						<label class="form-label">Passport No</label>
						<input type="text" class="form-control" readonly value="P123456">
					</div>

					<div class="col-md-6 mb-3">
						<label class="form-label">Phone</label>
						<input type="text" class="form-control" readonly value="01711111111">
					</div>

					<div class="col-md-6 mb-3">
						<label class="form-label">Email</label>
						<input type="email" class="form-control" readonly value="john@gmail.com">
					</div>

				</div>

				<div class="section-title">
					Package Information
				</div>

				<div class="row">

					<div class="col-md-6 mb-3">
						<label class="form-label">Tour Package</label>
						<!-- <select class="form-select" name="package_id">
							<option>Select Package</option>
							<option value="1">Dubai Luxury Tour</option>
							<option value="2">Bangkok Holiday</option>
							<option value="3">Cox's Bazar Tour</option>
						</select> -->

						<?php echo TourPackage::html_select("package_id") ?>
					</div>

					<div class="col-md-3 mb-3">
						<label class="form-label">Travel Date</label>
						<input type="date" class="form-control" name="travel_date">
					</div>

					<div class="col-md-3 mb-3">
						<label class="form-label">Duration</label>
						<input type="text" class="form-control" value="5 Days" readonly>
					</div>

					<div class="col-md-6 mb-3">
						<label class="form-label">Hotel</label>
						<!-- <input type="text" class="form-control" readonly value="Grand Palace"> -->

						<?php echo Hotel::html_select("hotel_id") ?>
					</div>

					<div class="col-md-6 mb-3">
						<label class="form-label">Flight</label>
						<!-- <input type="text" class="form-control" readonly value="Biman BG101"> -->
						 <?php echo Flight::html_select("flight_id") ?>
					</div>

				</div>

				<div class="section-title">
					Booking Details
				</div>

				<div class="row">

					<div class="col-md-3 mb-3">
						<label class="form-label">Booking Date</label>
						<input type="date" class="form-control" name="booking_date">
					</div>

					<div class="col-md-3 mb-3">
						<label class="form-label">Travelers</label>
						<input type="number" class="form-control" value="1" name="travelers">
					</div>

					<div class="col-md-3 mb-3">
						<label class="form-label">Employee</label>
						<select class="form-select" name="employee_id">
							<option>Rahim</option>
							<option>Karim</option>
						</select>
					</div>

					<div class="col-md-3 mb-3">
						<label class="form-label">Status</label>
						<select class="form-select" name="status">
							<option>Pending</option>
							<option>Confirmed</option>
							<option>Cancelled</option>
						</select>
					</div>

				</div>

				<div class="section-title">
					Payment Information
				</div>

				<table class="table table-bordered">

					<tr>
						<th>Package Price</th>
						<td><input type="number" class="form-control" value="95000"></td>
					</tr>

					<tr>
						<th>Discount</th>
						<td><input type="number" class="form-control" value="5000"></td>
					</tr>

					<tr>
						<th>VAT</th>
						<td><input type="number" class="form-control" value="9000"></td>
					</tr>

					<tr>
						<th>Advance Payment</th>
						<td><input type="number" class="form-control" value="30000"></td>
					</tr>

					<tr>
						<th>Payment Method</th>
						<td>
							<select class="form-select">
								<option>Cash</option>
								<option>Bkash</option>
								<option>Nagad</option>
								<option>Card</option>
								<option>Bank Transfer</option>
							</select>
						</td>
					</tr>

					<tr>
						<th>Grand Total</th>
						<td class="total-box text-primary">
							99,000 BDT
						</td>
					</tr>

				</table>

				<div class="section-title">
					Additional Notes
				</div>

				<textarea class="form-control" rows="4" name="remarks"></textarea>

				<div class="mt-4 text-end">

					<button class="btn btn-success">
						Save Booking
					</button>

					<button type="reset" class="btn btn-secondary">
						Reset
					</button>

					<button type="button" class="btn btn-primary">
						Print Invoice
					</button>

				</div>

			</form>

		</div>

	</div>

</div>