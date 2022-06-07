const basket = () => {
    const price = document.querySelectorAll('.basket-product-price');

    if (!price) return false;

    const input = document.getElementById('priceInput')
    const total = document.getElementById('totalPrice');

    let TOTAL_PRICE = 0

    for (const item of price){
        TOTAL_PRICE += parseInt(item.textContent);
    }

    total.textContent = TOTAL_PRICE;
    input.setAttribute('value', TOTAL_PRICE);
}

const init = () => {
    basket();
}

document.addEventListener('DOMContentLoaded', init);
