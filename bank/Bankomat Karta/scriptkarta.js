
function kartaobiekt()
{
    var obiekt1 = document.createElement("form");
    var obiekt2 = document.createElement("form");
    var obiekt3 = document.createElement("form");
    var obiekt4 = document.createElement("form");
    var obiekt5 = document.createElement("form");

    obiekt1.innerText = "1111 1111 1111 1111";
    obiekt1.classList.add("pin");
    document.getElementById("id1").appendChild(obiekt1);
    obiekt1.method = 'post';


    obiekt2.innerText = "2222 2222 2222 2222"
    obiekt2.classList.add("pin");
    document.getElementById("id2").appendChild(obiekt2);
    obiekt2.method = 'post';

    obiekt3.innerText = "3333 3333 3333 3333"
    obiekt3.classList.add("pin");
    document.getElementById("id3").appendChild(obiekt3);
    obiekt3.method = 'post';

    obiekt4.innerText = "4444 4444 4444 4444"
    obiekt4.classList.add("pin");
    document.getElementById("id4").appendChild(obiekt4);
    obiekt4.method = 'post';

    obiekt5.innerText = "5555 5555 5555 5555"
    obiekt5.classList.add("pin");
    document.getElementById("id5").appendChild(obiekt5);
    obiekt5.method = 'post';

    //alert(obiekt.innerText);

}
function karta(x) // wybór karty debetowej
{
    for(let i = 1; i<=5; i++)
    {
        if(x==i)
        {
            alert(i);
            var user = i;
        }
    }
    
    

}