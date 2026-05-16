
print_cart()
subtotal()
item_count()

function print_cart(){
   let cart = JSON.parse(localStorage.getItem("product_cart")) ?? [];
   let html= "";
   cart.forEach((product)=>{
    //    console.log(product);
       html+=`
          <div class="product-card p-3 shadow-sm">
                <div class="row align-items-center">
                    <div class="col-md-2">
                        <img src="${product.thumbnail}" alt="Product" class="product-image">
                    </div>
                    <div class="col-md-4">
                        <h6 class="mb-1">${product.name}</h6>
                        <p class="text-muted mb-0">Black | Premium Series</p>
                        <span class="discount-badge mt-2">20% OFF</span>
                    </div>
                    <div class="col-md-2">
                        <div class="d-flex align-items-center gap-2">
                            <button class="quantity-btn" onclick="updateQuantityDec(${product.id})">-</button>
                            <input type="number" class="quantity-input" value="${product.qty}" min="1">
                            <button class="quantity-btn" onclick="updateQuantityInc(${product.id})">+</button>
                        </div>
                    </div>
                    <div class="col-md-3">
                       <div> 
                       <span class="fw-bold me-2">$${product.price}</span>
                       <span class=" me-2">Unit price</span>
                       </div>
                       <div>
                       <span class="fw-bold">$${product.price * product.qty}</span>
                       <span class=""> Subtotal</span>
                       </div>
                       
                        
                    </div>
                    <div class="col-md-1" onclick="deleteItem(${product.id})">
                        <i class="bi bi-trash remove-btn"></i>
                    </div>
                </div>
            </div>
       `;
   });

   document.querySelector(".show_products").innerHTML= html;
   let item= cart.length > 1 ? "items": "item";
   document.querySelector(".item_count").innerText= cart.length +" "+ item;
   item_count()
}

function subtotal(){
    let cart = JSON.parse(localStorage.getItem("product_cart")) ?? [];
    total =  cart.reduce( (acc, item)=> acc +=  (item.price * item.qty), 0 );
    console.log( total ); 
    document.querySelector("#subtotal").innerText= `$${total}`;
}

function updateQuantityInc(id){
    console.log(id);
    let cart = JSON.parse(localStorage.getItem("product_cart")) ?? [];
    //let itemExit = cart.find(( item )=> item.id == id);
    cart = cart.map((item)=>{
           if(item.id == id ){
             return {...item , qty: item.qty += 1}
           }else{
             return item;
           }
    })
    localStorage.setItem("product_cart", JSON.stringify(cart))
    print_cart()
    subtotal()
   
}

function updateQuantityDec(id){
   let cart = JSON.parse(localStorage.getItem("product_cart")) ?? [];      //null coalescing

   cart = cart.map((item)=>{

         if(item.id == id && item.qty > 1 ){
            return {...item , qty: item.qty -= 1}
         }else{
             return item;
         }
   });
   
   localStorage.setItem("product_cart", JSON.stringify(cart));
   print_cart()
   subtotal()
}

function deleteItem(id){
   let cart = JSON.parse(localStorage.getItem("product_cart")) ?? [];
   cart = cart.filter((item)=>  item.id != id);
   localStorage.setItem("product_cart", JSON.stringify(cart));
   print_cart()
   subtotal()
   
}

function item_count() {
    let cart = JSON.parse(localStorage.getItem("product_cart"));
    if (cart.length > 0) {
        document.querySelector(".cart_items_count").innerHTML = `
          <span class="position-absolute top-0 start-100 translate-middle badge badge-sm rounded-pill bg-danger">
            ${cart.length}
           </span>
        `
    }
}