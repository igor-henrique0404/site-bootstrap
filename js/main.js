function addCarrinho() {
    alert("Produto adicionado ao carrinho");
}

var total = 0;

function updateCart(){
    var item1Unit = 0;
    var item2Unit = 0;
    var item3Unit = 0;
    var item4Unit = 0;
    var item5Unit = 0;
    var item6Unit = 0;

    if(document.getElementById("qtyitem1")){
        item1Unit = document.getElementById("qtyitem1").value;
    }
    if(document.getElementById("qtyitem2")){
        item2Unit = document.getElementById("qtyitem2").value;
    }
    if(document.getElementById("qtyitem3")){
        item3Unit = document.getElementById("qtyitem3").value;
    }
    if(document.getElementById("qtyitem4")){
        item4Unit = document.getElementById("qtyitem4").value;
    }
    if(document.getElementById("qtyitem5")){
        item5Unit = document.getElementById("qtyitem5").value;
    }
    if(document.getElementById("qtyitem6")){
        item6Unit = document.getElementById("qtyitem6").value;
    }

    var amount1 = item1Unit * 240;
    var amount2 = item2Unit * 180;
    var amount3 = item3Unit * 540;
    var amount4 = item4Unit * 150;
    var amount5 = item5Unit * 120;
    var amount6 = item6Unit * 240;

    total = amount1 + amount2 + amount3 + amount4 + amount5 + amount6;

    if(document.getElementById("gokuAmount")){
        document.getElementById("gokuAmount").innerHTML = "$" + amount1;
    }
    if(document.getElementById("kakashiAmount")){
        document.getElementById("kakashiAmount").innerHTML = "$" + amount2;
    }

    if(document.getElementById("tanjiroAmount")){
        document.getElementById("tanjiroAmount").innerHTML = "$" + amount3;
    }
    
    if(document.getElementById("leviAmount")){
        document.getElementById("leviAmount").innerHTML = "$" + amount3;
    }

    
    if(document.getElementById("kiritoAmount")){
        document.getElementById("kiritoAmount").innerHTML = "$" + amount3;
    }

    
    if(document.getElementById("hatsuneAmount")){
        document.getElementById("hatsuneAmount").innerHTML = "$" + amount3;
    }

    document.getElementById("subtotal").innerHTML = "$" + total;
    document.getElementById("totals").innerHTML = "$" + total;

}

function remove_item(rowID)
{
    document.getElementById("myTable").deleteRow(document.getElementById(rowID).rowIndex);
    updateCart();
}
