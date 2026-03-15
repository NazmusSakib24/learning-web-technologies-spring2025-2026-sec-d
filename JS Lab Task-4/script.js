let quantity = document.getElementById('q1');
let total = document.getElementById('total');

const unit_Price = 1000;

quantity.addEventListener('keyup', calculate);
quantity.addEventListener('change', calculate);

function calculate()
{
    let qty = parseInt(quantity.value);

    if (qty < 0){
        quantity.value = 0;
        qty = 0;
        alert("Quantity can not be negative");
    }

    let totalPrice = unit_Price * qty;

    total.value = totalPrice;

    if (totalPrice > 1000)
    {
        alert("You are eligible for gift coupon");
    }
}