function showAlert(type, message, duration) {
    if (!message) return false;
    if (!type) type = 'info';
    $("<div class='alert alert-message alert-" +
        type +
        " data-alert alert-dismissible'>" +
        "<button class='close alert-link' data-dismiss='alert'>&times;</button>" +
        message + " </div>").hide().appendTo('body').fadeIn(300);
    if (duration === undefined) {
        duration = 5000;
    }
    if (duration !== false) {
        $(".alert-message").delay(duration).fadeOut(500, function() {
            $(this).remove();
        });
    }
}


function openmodal(modal) {
    $(document).ready(function() {
        $('#' + modal).modal('toggle')
    });
}

// ...or trigger it using a button