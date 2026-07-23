
<?php 

 print_r($data);


?>

<div class="card">
    <div class="card-body">
        <form method="post" action="<?php echo $base_url?>/company/update">
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" hidden name="id"  value="<?php echo $data->id ?? "" ?>" >
                <input value="<?php echo $data->name ?? "" ?>" type="text" name="name" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input value="<?php echo $data->email ?? "" ?>" type="text"  name="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="road" class="form-label">Road</label>
                <input value="<?php echo $data->road ?? "" ?>" type="text"  name="road" class="form-control" id="road">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">phone</label>
                <input value="<?php echo $data->phone ?? "" ?>" type="text"  name="phone" class="form-control" id="phone">
            </div>

            <div class="mb-3">
                <label for="district_id" class="form-label">District</label>
                 <select class="form-select" name="district_id" id="district_id">
                    <option <?php echo $data->district_id ? "selected": "" ?>  value="1">Dhaka</option>
                    <option <?php echo $data->district_id ? "selected": "" ?>  value="2">Kustia</option>
                    <option <?php echo $data->district_id ? "selected": "" ?>  value="3">Barishal</option>
                    <option <?php echo $data->district_id ? "selected": "" ?>  value="4">Rajshahi</option>
                 </select>
            </div>
             <div class="mb-3">
                <label for="country_id" class="form-label">country</label>
                 <select class="form-select" name="country_id" id="country_id">
                    <option <?php echo $data->country_id ? "selected": "" ?> value="1">Bangladesh</option>
                    <option <?php echo $data->country_id ? "selected": "" ?> value="2">USA</option>
                    <option <?php echo $data->country_id ? "selected": "" ?> value="3">UK</option>
                    <option <?php echo $data->country_id ? "selected": "" ?> value="4">Nepal</option>
                 </select>
            </div>
            <input type="submit"   name="btn_submit" class="btn btn-primary" >
        </form>
    </div>
</div>