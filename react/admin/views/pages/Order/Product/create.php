<div class="card">
    <div class="card-body">
<form action="<?php echo $base_url?>/product/save" method="post"  enctype="multipart/form-data">

    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="purchase_price">purchase_price</label>
        <input type="text" name="purchase_price" id="purchase_price">
    </div>
    <div>
        <label for="unit_price">unit_price</label>
        <input type="text" name="unit_price" id="unit_price">
    </div>
    <div>
        <label for="photo">photo</label>
        <input type="file" name="photo" id="photo">
    </div>
    <div>

        <input type="submit" name="btn_submit">
    </div>

</form>
    </div>
</div>
