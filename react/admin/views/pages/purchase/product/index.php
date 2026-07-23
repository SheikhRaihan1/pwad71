



<table class="table table-striped table-bordered table-hover align-middle" id="product_table">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Price</th>
            <th>Purchase</th>
            <th>Category</th>
            <th>UOM</th>
            <th>Barcode</th>
            <th>Star</th>
            <th>Brand</th>
            <th>Discount</th>
            <th width="180">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $products = Product::all();

        foreach ($products as $product) {

            echo "
                <tr>
                    <td>{$product->id}</td>
                    <td><img src='img/products/{$product->photo}' width='50'></td>
                    <td>{$product->name}</td>
                    <td>{$product->price}</td>
                    <td>{$product->purchase_price}</td>
                    <td>{$product->category_id}</td>
                    <td>{$product->uom_id}</td>
                    <td>{$product->barcode}</td>
                    <td>{$product->star}</td>
                    <td>" . ($product->is_brand ? "Yes" : "No") . "</td>
                    <td>{$product->offer_discount}%</td>
                    <td>
                        <a href='show-product.php?id={$product->id}' class='btn btn-info btn-sm'>Show</a>
                        <a href='edit-product.php?id={$product->id}' class='btn btn-warning btn-sm'>Edit</a>
                        <a href='delete-product.php?id={$product->id}' class='btn btn-danger btn-sm'>Delete</a>
                    </td>
                </tr>
                ";
           }
        ?>
    </tbody>
</table>

<script>
    new DataTable('#product_table');
</script>