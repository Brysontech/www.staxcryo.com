var contactForm = document.getElementById("form-contact");

contactForm.addEventListener('submit', function(evt) {
    evt.preventDefault();
    
    console.log("Submit click.");
    
    var contactData = $(this).serialize();
    sendLead(contactData);
    
    $(this).find("input[type=text], textarea").val("");
});

function sendLead(contactData){
    var title = "Failure";
    var body = "Sorry, contact failed.  Please send email to info@staxcryo.com instead.";
    
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "/contact/lead",
        data: {data: contactData},
        success: function(response) {
            if(response){
                title   = "Thank you!";
                body    = "We will get back with you a soon as possible!";
            } else {
                title   = "Something went wrong";
                body    = "Sorry for the trouble, our server has encountered and \n\
                            error.  Please email info@staxryo.com instead.";
            }
            
            
            
            showAlert(title, body);
            
            console.log(response);
        },
        error: function(){
            title   = "Ajax error.";
            body    = "There was an error with the the Ajax call.";
            
            showAlert(title, body);
        }
    });

    
}