$(document).ready(function() {
    $("#foto").fileinput({
        showUpload: false,
        layoutTemplates: {
            main1: "{preview}\n" +
            "<div class=\'input-group {class}\'>\n" +
            "   <div class=\'input-group-btn\ input-group-prepend'>\n" +
            "       {browse}\n" +
            "       {upload}\n" +
            "       {remove}\n" +
            "   </div>\n" +
            "   {caption}\n" +
            "</div>"
        }
    });
});



// $(document).ready(function() {
//     $("#input-21").fileinput({
//         previewFileType: "image",
//         browseClass: "btn btn-success",
//         browseLabel: "Seleccionar Imagen",
//         browseIcon: "<i class=\"glyphicon glyphicon-picture\"></i> ",
//         removeClass: "btn btn-danger",
//         removeLabel: "Eliminar",
//         removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> ",
//         uploadClass: "btn btn-info",
//         uploadLabel: "Upload",
//         uploadIcon: "<i class=\"glyphicon glyphicon-upload\"></i> "
//     });
// });
