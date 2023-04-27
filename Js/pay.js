
    
    var UserOption = document.getElementById('user-choice').value;
    var QuantityOption = document.getElementsByClassName('cart-quantity')[0].value;
    var Size = document.createElement("p");
    Size.innerHTML = "Taille :" + UserOption + "";
    var cartContentFinal = document.getElementById("cart-content-final")
    const element = document.getElementById("cart-quantity");
        element.remove(); 
        const elementSize = document.getElementById("user-choice");
        elementSize.remove(); 
        const elementBin = document.getElementsByClassName("cart-remove")[0]
        elementBin.remove();
        cartShopBox.classList.add("cart-box");
        Size.classList.add("cart-box");
        cartContentFinal.append(cartShopBox);
        cartContentFinal.append(Size);
        cartContentFinal.append(QuantityOption);



// buy button - confirmation de l'achat
document.getElementsByClassName("btn-buy-confirmed")[0].addEventListener("click", confirmPurchase);
function confirmPurchase(){
    alert('Votre achat a bien été réalisé')
    BuyDiv.style.display = 'none'
}
// cancel button - annulation de l'achat
document.getElementsByClassName("btn-buy-cancelled")[0].addEventListener("click", cancelPurchase);

function cancelPurchase(){
    window.location = "./shop.php"
}