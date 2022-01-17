function change(){
     var prise = parseFloat(document.getElementById("dollar").innerHTML);

     var quantity = Number(document.getElementById("number").value);

     var  productTotal = parseFloat(prise) * quantity;
     document.getElementById('total-prise').innerHTML = productTotal + "$";
};