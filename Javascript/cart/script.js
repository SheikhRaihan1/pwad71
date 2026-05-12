

async function getProducts() {
    try {
        let res = await fetch("https://dummyjson.com/products");
        let data = await res.json();
        let products = data.products;
        let showProduct = document.querySelector(".showProduct");
        let html = "";
        products.forEach((product) => {
            console.log(product);
           html += `
           
             <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <a href="#" class="image">
                            <img class="pic-1"
                                src="${product.thumbnail}">
                            <img class="pic-2"
                                src="https://images.unsplash.com/photo-1516961642265-531546e84af2?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=74065eec3c2f6a8284bbe30402432f1d&auto=format&fit=crop&w=500&q=60">
                        </a>
                        <span class="product-sale-label">Sale</span>
                        <a href="#" class="product-like-icon" data-tip="Add to Wishlist">
                            <i class="far fa-heart"></i>
                        </a>
                        <ul class="product-links">
                            <li><a href="#"><i class="fa fa-search"></i></a></li>
                            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                            <li><a href="#"><i class="fa fa-random"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#">${product.title}</a></h3>
                        <div class="price"><span>$86.33</span> $${product.price}</div>
                    </div>
                </div>
            </div>
           `;
           
        });
        showProduct.innerHTML = html;
    } catch (error) {
        console.log(error);
    }
}
getProducts() 
