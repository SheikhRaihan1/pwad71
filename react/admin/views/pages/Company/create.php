<div class="card">
    <div class="card-body">
        <form method="post" action="<?php echo $base_url?>/company/save">
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" name="name" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="text"  name="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="road" class="form-label">Road</label>
                <input type="text"  name="road" class="form-control" id="road">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">phone</label>
                <input type="text"  name="phone" class="form-control" id="phone">
            </div>

            <div class="mb-3">
                <label for="district_id" class="form-label">District</label>
                 <select name="district_id" id="district_id">
                    <option value="1">Dhaka</option>
                    <option value="2">Kustia</option>
                    <option value="3">Barishal</option>
                    <option value="4">Rajshahi</option>
                 </select>
            </div>
             <div class="mb-3">
                <label for="country_id" class="form-label">country</label>
                 <select name="country_id" id="country_id">
                    <option value="1">Bangladesh</option>
                    <option value="2">USA</option>
                    <option value="3">UK</option>
                    <option value="4">Nepal</option>
                 </select>
            </div>
            <input type="submit"   name="btn_submit" class="btn btn-primary" >
        </form>
    </div>
</div>