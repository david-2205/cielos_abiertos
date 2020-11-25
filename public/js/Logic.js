document.querySelector('#btnSaveFriend').addEventListener('click', saveFriend);
drawAmigTable();
//drawFrienTable();
// drawFriendTable();


function saveFriend() {

    var
        gpelic = document.querySelector('#nombre_pelicula').value,
        gnomb = document.querySelector('#nombre').value,
        gapell = document.querySelector('#apellido').value,
        gtell = document.querySelector('#telefono').value,
        gcorreo = document.querySelector('#correo').value,
        gvalor = document.querySelector('#valor_pagar').value;


    addFriendToSystem(gpelic,gnomb,gapell, gtell, gcorreo, gvalor);
    drawAmigTable();
    //    drawFrienTable();
}


function drawAmigTable() {
    var list = getFrienlist(),
        tbody = document.querySelector('#tablaami tbody');

    tbody.innerHTML = '';


    for (var i = 0; i < list.length; i++) {
        var row = tbody.insertRow(i);
        var nombCell = row.insertCell(0);
        nombCell.innerHTML = list[i].nombre;
        var tellCell = row.insertCell(1);
        tellCell.innerHTML = list[i].telefono;
        var peliCell = row.insertCell(2);
        peliCell.innerHTML = list[i].pelicula;
        var valCell = row.insertCell(3);
        valCell.innerHTML = list[i].valor;

        tbody.appendChild(row);
    }
}
//function drawFrienTable(){
//  var list = getFriendList(),
//      tbody = document.querySelector('#frienTable tbody');
//      tbody.innerHTML = '';
//      
//
//      for(var i = 0;i < list.length; i++){
//          var row = tbody.insertRow(i);
//          var pelcel = row.insertPelCel(0);
//          pelcel.innerHTML = list[i].peli;
//
//          tbody.appendChild(row);
//      }
//
//}



// function drawFriendTable(){
//     var List=getFriendList(),
//     tbody=document.querySelector('#friendsTable tbody');

//     tbody.innerHTML = '';


//     for(var i=0;i<List.length;i++){
//         var row=tbody.insertRow(i);
//         var pelicell=row.insrtCell(0);
//         pelicell.innerHTML=List[i].pelicu;


//         tbody.appendChild(row);
//     }
// }
