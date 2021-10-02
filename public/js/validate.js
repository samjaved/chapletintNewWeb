$(document).ready(function() {
    $('#contact__form').on('submit', function (e) {
    event.preventDefault();
    var name = $("#name").val();
    var company = $("#company").val();
    var phone = $("#phone").val();
    var email = $("#email").val();
    if($.trim(name).length>3 && $.trim(email).length>3 && $.trim(company).length>3 && $.trim(phone).length>3) {
        $.ajax({
            type: 'POST',
            url: 'http://livewebsol.com/chaplet/contact-submit.php',
            data: $('#contact__form').serialize(),
            cache: false,
            beforeSend: function(){ $("#button__form").val('Sending...');},
            success: function(data){
                if(data==1) {
                    $("#popcontact2").css("display", "block");
                } 
                else {
                    $("#error").html("<span style='color:#cc0000'>Error:</span><i style='color:#000'>Please Enter Valid Email.</i> ");
                }
            }
        });
    }
    else {
          $("#error").html("<span style='color:#cc0000'>Error:</span><i style='color:#000'>Length Minimum 3 Digits</i> ");
    }
    });
});