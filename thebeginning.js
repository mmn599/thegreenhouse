$(document).ready(function () {
    $(function () {
        $("#dialog").dialog({
            autoOpen: false,
            modal: true,
            show: {
                effect: "blind",
                duration: 1000
            },
            hide: {
                	effect: "explode",
                	duration: 1000
            }
        });
    });
    $("#btn_contact_us").click(function () {
    	$("#btn_contact_us").fadeOut(250);
		$("#contactdiv").css("display", "block");
	});
});

function btnSubmitArt() {	

}

function showSubmitForm() {

}

function hideSubmitForm() {

}
