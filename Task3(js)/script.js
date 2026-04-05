const productName = "Shoes";
let price = 1000;

document.getElementById("welcome").innerText = "Welcome to WebCart!";
document.getElementById("price").innerText = "Price: ₹" + price;

document.getElementById("discountBtn").addEventListener("click", function() {
    price = price - 200;
    document.getElementById("price").innerText = "Price: ₹" + price;
});

document.getElementById("loginBtn").addEventListener("click", function() {
    let name = document.getElementById("username").value;

    if(name === ""){
        alert("Enter your name!");
    } else {
        let confirmLogin = confirm("Do you want to login?");
        if(confirmLogin){
            document.getElementById("userMsg").innerText = "Welcome " + name;
        }
    }
});
let user = {
    name: "Prasanna",
    orders: 2,

    updateOrders: function() {
        this.orders++;
        return this.orders;
    }
};

document.getElementById("userInfo").innerText =
    user.name + " has " + user.orders + " orders";

document.getElementById("updateBtn").addEventListener("click", function() {
    let updated = user.updateOrders();
    document.getElementById("userInfo").innerText =
        user.name + " has " + updated + " orders";
});

function calculateTotal(price, quantity) {
    return price * quantity;
}

document.getElementById("buyBtn").addEventListener("click", function() {
    let qty = prompt("Enter quantity:");

    let total = calculateTotal(500, qty);

    document.getElementById("result").innerText = "Total: ₹" + total;

    alert("Order placed successfully!");
});

document.getElementById("box").addEventListener("mouseover", function() {
    this.style.backgroundColor = "yellow";
});