var friendList=[];
function addFriendToSystem(vpeli,vnomb,vapell,vtell,vcorreo,vvalor,){
    var newFriend={
        pelicula:vpeli,
        nombre:vnomb,
        apellido:vapell,
        telefono:vtell,
        correo:vcorreo,
        valor:vvalor
    };

    console.log(newFriend);
    friendList.push(newFriend);
    localStoreFriendList(friendList);
    // localStorageFriendList(friendList);
}


function getFrienlist(){
    var storedlist=localStorage.getItem('localFrienList');
    if(storedlist==null){
        friendList=[];
    }else{
        friendList=JSON.parse(storedlist);
    }
    return friendList;
}

function localStoreFriendList(plist){
    localStorage.setItem('localFriendList',JSON.stringify(plist));
}

// function getFriendList(){
//     return friendList;
// }