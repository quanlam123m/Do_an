// Add Cart
var btnCart = document.getElementsByClassName("btn_Cart");
for (var i = 0; btnCart.length; i+=1) {
    var btn = btnCart[i];
    btn.addEventListener("click", function(event) {
        
        var button = event.target;
        var item = button.parentElement;
        var img = item.parentElement.getElementsByClassName("img")[0].src;
        var title = item.getElementsByClassName("title")[0].innerText;
        var price = item.getElementsByClassName("price")[0].innerText;

        addItemToCart(title, img, price); 
        updateCart();
    })
}

function addItemToCart(title, img, price) {
    var cartRow = document.createElement("div");
    cartRow.classList.add("cart-row");
    var cartItems = document.getElementsByClassName("cart-items")[0];
    var cartTitle = cartItems.getElementsByClassName("cart-item-title");
    
    for(var i = 0; i < cartTitle.length; i +=1) {
        if (cartTitle[i].innerText == title) {
            alert("Products already in the cart")
            return
        }
    }

    var cartRowContents = `
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${img}" name="image" width="50px" height="50px">
            <span class="cart-item-title" name="title" >${title}</span>
        </div>
            <span class="cart-price cart-column" name="price">${price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" name="qty" type="number" value="1">
            <button class="btn btn-danger" type="button">Delete</button>
        </div>
    `
    cartRow.innerHTML = cartRowContents;
    cartItems.append(cartRow);
    cartRow.getElementsByClassName("btn-danger")[0].addEventListener("click", function() {
        var btnRemove = event.target;
        btnRemove.parentElement.parentElement.remove();
        updateCart();
    })
    cartRow.getElementsByClassName("cart-quantity-input")[0].addEventListener("change", function(event) {
        var input = event.target;
        if (isNaN(input.value) || input.value<=0) {
            input.value = 1;
        }
        updateCart();
    })
}

function updateCart() {
    var cart_item = document.getElementsByClassName("cart-items")[0];
    var cart_rows = cart_item.getElementsByClassName("cart-row");
    var total = 0;
    
    for(var i = 0; i < cart_rows.length; i += 1) {
        var cart_row = cart_rows[i];
        var price_item = cart_row.getElementsByClassName("cart-price")[0];
        var quantity_item = cart_row.getElementsByClassName("cart-quantity-input")[0];
        var price = parseFloat(price_item.innerText)
        var quantity = quantity_item.value
        total = total + (price * quantity)
    }
    document.getElementsByClassName("cart__price")[0].innerText = "$" + total;
}