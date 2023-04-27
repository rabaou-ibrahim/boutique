var addCart = document.getElementsByClassName('add-cart');
    for(var i = 0; i < addCart.length; i++){
        var button = addCart[i];
        button.addEventListener('click', addCartClicked);
    }