jQuery("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Вы все поля заполнили?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    var name = jQuery("#name").val();
    var email = jQuery("#email").val();
    var message = jQuery("#message").val();

    jQuery.ajax({
        type: "POST",
        url: "form-process.php",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess();
            } else {
                formError();
                submitMSG(false,text);
            }
        }
    });
}

function formSuccess(){
    jQuery("#contactForm")[0].reset();
    submitMSG(true, "Сообщение отправлено!")
}

function formError(){
    jQuery("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
        jQuery(this).removeClass();
    });
}

function submitMSG(valid, msg){
    if(valid){
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    jQuery("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}