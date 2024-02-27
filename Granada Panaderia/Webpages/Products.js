var count = [0,0,0,0,0,0,0,0,0,0,0,0];
var price = 0;
function buttonClick(order) 
{
    if(order == 1){count[1] += 1;price += 15; }
    else if(order == 1.1 && count[1] == 0){count[1] += 0;}
    else if(order == 1.1 ){count[1] += (-1); price  += (-15)}
    document.getElementById('count1').value = count[1];

    if(order == 2){count[2] += 1;price += 20; }
    else if(order == 2.2 && count[2] == 0){count[2] += 0;}
    else if(order == 2.2 ){count[2] += (-1); price  += (-20)}
    document.getElementById('count2').value = count[2];

    if(order == 3){count[3] += 1; price  += (20);}
    else if(order == 3.3 && count[3] == 0){count[3] += 0;}
    else if(order == 3.3 ){count[3] += (-1); price  += (-20)}
    document.getElementById('count3').value = count[3];

    if(order == 4){count[4] += 1; price  += (20);}
    else if(order == 4.4 && count[4] == 0){count[4] += 0;}
    else if(order == 4.4 ){count[4] += (-1); price  += (-20)}
    document.getElementById('count4').value = count[4];

    if(order == 5){count[5] += 1; price  += (25);}
    else if(order == 5.5 && count[5] == 0){count[5] += 0;}
    else if(order == 5.5 ){count[5] += (-1); price  += (-25)}
    document.getElementById('count5').value = count[5];

    if(order == 6){count[6] += 1; price  += (25);}
    else if(order == 6.6 && count[6] == 0){count[6] += 0;}
    else if(order == 6.6 ){count[6] += (-1); price  += (-25)}

    if(order == 7){count[7] += 1; price  += (25);}
    else if(order == 7.7 && count[7] == 0){count[7] += 0;}
    else if(order == 7.7 ){count[7] += (-1); price  += (-25)}
    document.getElementById('count7').value = count[7];

    if(order == 8){count[8] += 1; price  += (25);}
    else if(order == 8.8 && count[8] == 0){count[8] += 0;}
    else if(order == 8.8 ){count[8] += (-1); price  += (-25)}
    document.getElementById('count8').value = count[8];

    if(order == 9){count[9] += 1; price  += (35);}
    else if(order == 9.9 && count[9] == 0){count[9] += 0;}
    else if(order == 9.9 ){count[9] += (-1); price  += (-35)}
    document.getElementById('count9').value = count[9];

    if(order == 10){count[10] += 1; price  += (35);}
    else if(order == 10.10 && count[10] == 0){count[10] += 0;}
    else if(order == 10.10 ){count[10] += (-1); price  += (-35)}
    document.getElementById('count10').value = count[10];

    document.getElementById("price").value = price;

    var items = count.reduce(function(a, b)
    {return a + b;}, 0);
    document.getElementById("items").value = items;  

    var fee = 0;
    if(price <= 200 && items > 0)
    {fee += 50;}
    else
    {fee += 0;}
    document.getElementById("fee").value = fee;   
    
    var total = fee + price;
    document.getElementById("total").value = total;  
}
