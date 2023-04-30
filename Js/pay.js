// buy button - confirmation de l'achat
document.getElementsByClassName("submit-btn")[0].addEventListener("click", confirmPurchase);
function confirmPurchase(){
    alert('Votre achat a bien été réalisé')
    BuyDiv.style.display = 'none'
}
// cancel button - annulation de l'achat
document.getElementById("cancel-btn")[0].addEventListener("click", cancelPurchase);

function cancelPurchase(){
    window.location = "./shop.php"
}