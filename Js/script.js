// dès le chargement de la page
var BuyDiv = document.getElementById("buy-div")

window.onload = init()

function init (){
    BuyDiv.style.display = 'none'
}

// chariot
let cartIcon = document.querySelector("#cart-icon");
let cart      = document.querySelector(".cart");
let closeCart = document.querySelector("#close-cart");

// ouvre chariot

cartIcon.onclick = () => {
    cart.classList .add("active");
};

// ferme chariot

closeCart.onclick = () => {
    cart.classList .remove("active");
};

// // chariot de travail js
if(document.readyState  == "loading" ) {
    document.addEventListener("DOMContentLoaded", ready);
    
} else{
    ready();
}

// faire fonction

function ready() {
    // supprimer des articles du panier
    var removeCartButtons = document.getElementsByClassName("cart-remove");
    console.log(removeCartButtons);
    for(var i = 0; i < removeCartButtons.length; i++){
        var button  = removeCartButtons[i];
        button.addEventListener("click", removeCartItem);
    }

    // modifier la quantité
    var quantityInputs = document.getElementsByClassName('cart-quantity');
    for(var i = 0; i < quantityInputs.length; i++){
        var input = quantityInputs[i];
        input.addEventListener("change", quantityChanged);
    }
    // changer la taille
    var sizeInputs = document.getElementsByClassName('cart-size');
    for(var i = 0; i < sizeInputs.length; i++){
        var input = sizeInputs[i];
        input.addEventListener("change", sizeChanged);
    }

    // Ajouter au panier
    var addCart = document.getElementsByClassName('add-cart');
    for(var i = 0; i < addCart.length; i++){
        var button = addCart[i];
        button.addEventListener('click', addCartClicked);
    }
    
}
// fouction buy button

// supprimer des articles du panier

function removeCartItem(event) {
    var buttonClicked = event.target;
    buttonClicked.parentElement.remove();
    updateTotal();
}

// modifier la taille d'un article

function sizeChanged(event) {
    var input = event.target;
    if(isNaN(input.value) || input.value <= 0){
        input.value = 1;
    }

    updateTotal();

}

// modifier la quantité

function quantityChanged(event) {
    var input = event.target;
    if(isNaN(input.value) || input.value <= 0){
        input.value = 1;
    }

    updateTotal();

}

// Ajouter au panier
function addCartClicked(event){
    var button = event.target;
    var shopProducts = button.parentElement;
    var title = shopProducts.getElementsByClassName("product-title")[0].innerText;
    var price = shopProducts.getElementsByClassName("price")[0].innerText;
    var productImg = shopProducts.getElementsByClassName("product-img")[0].src;
    addProductToCart(title, price, productImg);
    updateTotal();
}

function addProductToCart(title, price, productImg){
    var cartShopBox = document.createElement ("div");
    cartShopBox.classList.add("cart-box");
    var carItems = document.getElementsByClassName("cart-content")[0];
    var carItemsNames = carItems.getElementsByClassName("cart-product-title");
    for(var i = 0; i < carItemsNames.length; i++){
        if(carItemsNames[i].innerText == title){

            alert("vous avez déjà ajouté cet article au panier");
            return;
    
        }
        }
        var cartBoxContent = `
                                        <img src="${productImg}">
                                        <div class="detail-box">
                                            <div class="cart-product-title">${title}</div>
                                            <div class="cart-price">${price}</div>
                                            <label for="cart-quantity"></label>
                                            <input type="number" value="1" id="cart-quantity" class="cart-quantity" name="cart-quantity">
                                                <select id="user-choice">
                                                    <option>Sélectionnez la taille</option>
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>X</option>
                                                    <option>XL</option>
                                                </select> 
        
                                        </div>
                                        <!-- remove cart -->
                                        <i class='fa-sharp fa-solid fa-trash cart-remove'></i>`;
        cartShopBox.innerHTML = cartBoxContent;
        carItems.append(cartShopBox);
        cartShopBox.getElementsByClassName("cart-remove")[0].addEventListener("click", removeCartItem);
        cartShopBox.getElementsByClassName("cart-quantity")[0].addEventListener("change", quantityChanged);
        alert('Article ajouté')
        // buy button
        document.getElementsByClassName("btn-buy")[0].addEventListener("click", addPurchase);

        function addPurchase(){

            var UserOption = document.getElementById('user-choice').value;
            var QuantityOption = document.getElementsByClassName('cart-quantity')[0].value;
            var cartShopBox = document.createElement("div")

            var Size = document.createElement("h4");
            Size.innerHTML = "Taille :" + UserOption + ""
            
            var Quantity = document.createElement("h4");
            Quantity.innerHTML = "Quantité :" + QuantityOption + ""

            var cartContentFinal = document.getElementById("cart-content-final")
            cartShopBox.classList.add("cart-box");

            cartShopBox.innerHTML = cartBoxContent;
            carItems.append(cartShopBox);

            cartContentFinal.appendChild(cartShopBox);
            var element = document.getElementById("cart-quantity");
            element.remove(); 
            var elementSize = document.getElementById("user-choice");
            elementSize.remove(); 
            var elementBin = document.getElementsByClassName("cart-remove")[0]
            elementBin.remove();
            cartContentFinal.appendChild(Size);
            cartContentFinal.appendChild(Quantity);

            BuyDiv.style.display = 'block'
}       
        
}


// buy button - confirmation de l'achat
document.getElementsByClassName("btn-buy-confirmed")[0].addEventListener("click", confirmPurchase);
function confirmPurchase(){
BuyDiv.style.display = 'none'
}
// cancel button - annulation de l'achat
document.getElementsByClassName("btn-buy-cancelled")[0].addEventListener("click", cancelPurchase);

function cancelPurchase(){
alert('Achat annulé')
BuyDiv.style.display = 'none'
}



// mise à jour totale
function updateTotal(){
    var cartContent = document.getElementsByClassName('cart-content')[0];
    var cartBoxes = cartContent.getElementsByClassName('cart-box');
    var total = 0;
    for(var i = 0; i < cartBoxes.length; i++){
        var cartBox = cartBoxes[i];
        var priceElement = cartBox.getElementsByClassName('cart-price')[0];
        var quantityElement = cartBox.getElementsByClassName('cart-quantity')[0];
        var quantity = quantityElement.value;
        var price = parseFloat(priceElement.innerHTML.replace("€",""))
        total = total + (price * quantity);
    }
    //si le prix contient une valeur en centimes
    total = Math.round(total * 100) / 100;
    document.getElementsByClassName('total-price')[0].innerText = total + "€";
    // ajouter achat 


}