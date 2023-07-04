if (document.readyState == 'loading'){
    document.addEventListener('DOMContentLoaded', ready)
}else{
    ready()
}

function ready() {
    var removeInfoCartButtons = document.getElementsByClassName('btn-danger')
    for (var i = 0; i < removeInfoCartButtons.length; i++){
        var button = removeInfoCartButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputs.length; i++){
        var input = quantityInputs[i]
        input.addEventListener('change', quantityChanged)
    }

    var addToCartButtons = document.getElementsByClassName('shop-item-button')
    for (var i = 0; i < addToCartButtons.length; i++){
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCartClcikced)
    }
}

function removeCartItem(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateTotalHarga()
}

function quantityChanged(event) {
    var input = event.target
    if(isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateTotalHarga()
}

var removeInfoCartButtons = document.getElementsByClassName('btn-danger')
console.log(removeInfoCartButtons)
for (var i = 0; i < removeInfoCartButtons.length; i++){
    var button = removeInfoCartButtons[i]
    button.addEventListener('click', function(event){
        var buttonClicked = event.target
        buttonClicked.parentElement.parentElement.remove()
        updateTotalHarga()
    })
}

function updateTotalHarga(){
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    for (var i = 0; i < cartRows.length; i++){
        var cartRows = cartRows[i]
        var priceElement = cartRows.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRows.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('$', ''))
        var quantity = quantityElement.value
        total = total + (price * quantity)
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total
}