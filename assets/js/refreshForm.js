$(document).ready(function() {
$("#sendRequest").click(function() {
var class_code = $("#sendRequest").val();
if (class_code == '') {
alert("Insertion Failed Some Fields are Blank....!!");
} else {
// Returns successful data submission message when the entered information is stored in database.
$.post("sendRequest.php", {
class_code: class_code
}, function(data) {
alert(data);
$('#form')[0].reset(); // To reset form fields
});
}
});
});