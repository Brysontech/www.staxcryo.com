function showAlert(title, body){
    var modalTitle = "<span style='color:#000'>" + title + "</span>";
    var modalBody = "<span style='color:#000'>" + body + "</span>";
    
    $("#alert-title").html(modalTitle);
    $("#alert-body").html(modalBody);
    
    $("#modal-alert").modal();
}