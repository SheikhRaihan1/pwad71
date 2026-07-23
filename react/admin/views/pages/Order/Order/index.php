




<?php
echo Page::title(["title"=>"Manage Order"]);
echo Page::body_open();
echo Page::context_open();

?>

<form method="get" action="">
    <div class="row">

        <div class="col-md-3">
            <label>From Date</label>
            <input type="date" name="from_date" class="form-control"
                value="<?= $_GET['from_date'] ?? '' ?>">
        </div>

        <div class="col-md-3">
            <label>To Date</label>
            <input type="date" name="to_date" class="form-control"
                value="<?= $_GET['to_date'] ?? '' ?>">
        </div>

        <div class="col-md-3">
            <label>Customer</label>
            <select name="customer_id" class="form-control">
                <option value="">All Customers</option>

                <?php
                $customers = Customer::all();
                foreach($customers as $c){
                    $selected = ($_GET['customer_id'] ?? '') == $c->id ? "selected" : "";
                    echo "<option value='$c->id' $selected>$c->name</option>";
                }
                ?>
            </select>
        </div>

        <div class="col-md-3">
            <label>Product</label>
            <select name="product_id" class="form-control">
                <option value="">All Products</option>

                <?php
                $products = Product::all();
                foreach($products as $p){
                    $selected = ($_GET['product_id'] ?? '') == $p->id ? "selected" : "";
                    echo "<option value='$p->id' $selected>$p->name</option>";
                }
                ?>
            </select>
        </div>

    </div>

    <br>

    <button class="btn btn-primary">Search</button>
</form>
<?php 
$page = isset($_GET["page"]) ?$_GET["page"]:1;
echo Order::html_table($page,10);
echo Page::context_close();
echo Page::body_close();
