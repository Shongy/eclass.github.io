var xmlHttp = createXmlHttpRequestObject();

function createXmlHttpRequestObject() {
	var xmlHttp;
	if(window.ActiveXObject) {
		try {
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(e) {
			xmlHttp = false;
		}
	} else {
		try {
			xmlHttp = new XMLHttpRequest();
		}
		catch(e) {
			xmlHttp = false;
		}
	}
	if(!xmlHttp) {
		alert("Can't create the object!");
	} else{
		return xmlHttp;
	}
}

function checkUsername() {
	if(xmlHttp.status==0 || xmlHttp.status==200) {
		username = encodeURIComponent(document.getElementById("username").value);
		xmlHttp.open("GET", "check-username.php?username=" + username, true);
		xmlHttp.onreadystatechange = handlecheckUsernameResponse;
		xmlHttp.send(null);
	} else {
		setTimeout('checkUsername()', 1000);
	}
}

function handlecheckUsernameResponse() {
	if(xmlHttp.readyState==4) {
		if(xmlHttp.status==200) {
			xmlResponse = xmlHttp.responseXML;
			xmlDocumentElement = xmlResponse.documentElement;
			message = xmlDocumentElement.firstChild.data;
			document.getElementById("message-username").value = message;
			username = encodeURIComponent(document.getElementById("username").value);
			if(message == "Exists") {
				document.getElementById("checkUsername").innerHTML = '<span style = "color: red">*Username is already used by another user. Try to find another one.</span>';
				//document.getElementById("message-username").value = message;
			} else if(message == "Available") {
				document.getElementById("checkUsername").innerHTML = "";
				//document.getElementById("message-username").value = message;
				//document.getElementById("checkUsername").innerHTML = '<span style = "color: green">*Username is available.</span>';
			} else if(message == "Empty") {
				document.getElementById("checkUsername").innerHTML = "";
			}
			setTimeout('checkUsername()', 1000);
		} else {
			alert("Something went wrong!");
		}
	}
}

function checkEmailAddress() {
	if(xmlHttp.status==0 || xmlHttp.status==200) {
		emailAddress = encodeURIComponent(document.getElementById("emailAddress").value);
		xmlHttp.open("GET", "check-email-address.php?emailAddress=" + emailAddress, true);
		xmlHttp.onreadystatechange = handlecheckEmailAddressResponse;
		xmlHttp.send(null);
	} else {
		setTimeout('checkEmailAddress()', 1000);
	}
}

function handlecheckEmailAddressResponse() {
	if(xmlHttp.readyState==4) {
		if(xmlHttp.status==200) {
			xmlResponse = xmlHttp.responseXML;
			xmlDocumentElement = xmlResponse.documentElement;
			message = xmlDocumentElement.firstChild.data;
			emailAddress = encodeURIComponent(document.getElementById("emailAddress").value);
			document.getElementById("message-email").value = message;
			if(message == "Exists") {
				document.getElementById("checkEmailAddress").innerHTML = '<span style = "color: red">*Email Address is already used by another user. Try to find another one.</span>';
			} else if(message == "Available") {
				document.getElementById("checkEmailAddress").innerHTML = "";
			} else if(message == "Empty") {
				document.getElementById("checkEmailAddress").innerHTML = "";
			}
			setTimeout('checkEmailAddress()', 1000);
		} else {
			alert("Something went wrong!");
		}
	}
}

function getPasswordLength() {
	/*document.getElementById("pass2").value = "";
	if(document.getElementById("pass").value.length < 6 && document.getElementById("pass").value.length > 0) {
		document.getElementById("passwordLabel").innerHTML = '<span style = "color: red">*Password must have atleast 6 characters. Please try again.</span>';
	} else {
		document.getElementById("passwordLabel").innerHTML = "";
	}*/	
}

function checkPassword() {
	if(document.getElementById("pass").value == "") {
		document.getElementById("passwordLabel").innerHTML = '<span style = "color: red">You can\'t leave this empty! Try to fill this first.</span>';
	} else {
		document.getElementById("passwordLabel").innerHTML = "";
		if(document.getElementById("pass").value.length > 5) {
			if(/\d/.test(document.getElementById("pass").value) == true) {
				if(document.getElementById("pass2").value.length > 5) {
					if(document.getElementById("pass").value != document.getElementById("pass2").value) {
						document.getElementById("message-pl").value = 2;
						document.getElementById("confirmPasswordLabel").innerHTML = '<span style = "color: red">*Password did not match! Please try again.</span>';
					} else if(document.getElementById("pass").value == document.getElementById("pass2").value) {
						document.getElementById("message-pl").value = 0;
						document.getElementById("passwordLabel").innerHTML = "";
						document.getElementById("confirmPasswordLabel").innerHTML = "";
					}
				} else {
					if(document.getElementById("pass2").value.length > 0 && document.getElementById("pass2").value.length < 6) {
						document.getElementById("message-pl").value = 1;
						document.getElementById("confirmPasswordLabel").innerHTML = '<span style = "color: red">*Password must have atleast 6 characters. Please try again.</span>';
					}
				}
			} else {
				document.getElementById("passwordLabel").innerHTML = '<span style = "color: red">*Password must have numeric characters. Please try again.</span>';
				document.getElementById("message-pl").value = 3;
			}
		} else {
			if(document.getElementById("pass").value.length > 0) {
				document.getElementById("message-pl").value = 1;
				document.getElementById("passwordLabel").innerHTML = '<span style = "color: red">*Password must have atleast 6 characters. Please try again.</span>';
				if(document.getElementById("pass2").value.length > 5) {
					document.getElementById("confirmPasswordLabel").innerHTML = "";
				} else if(document.getElementById("pass2").value.length > 0 && document.getElementById("pass2").value.length < 6) {
					document.getElementById("confirmPasswordLabel").innerHTML = '<span style = "color: red">*Password must have atleast 6 characters. Please try again.</span>';
				}
			}
		}
	}
}

function checkUpdatePassword() {
	if(document.getElementById("form-field-pass1").value == "") {
		document.getElementById("updatePasswordLabel").innerHTML = '<span style = "color: red">You can\'t leave this empty! Try to fill this first.</span>';
	} else {
		document.getElementById("updatePasswordLabel").innerHTML = "";
		if(document.getElementById("form-field-pass1").value.length > 5) {
			if(/\d/.test(document.getElementById("form-field-pass1").value) == true) {
				if(document.getElementById("form-field-pass2").value.length > 5) {
					if(document.getElementById("form-field-pass1").value != document.getElementById("form-field-pass2").value) {
						//document.getElementById("message-pl").value = 2;
						document.getElementById("updateConfirmPasswordLabel").innerHTML = '<span style = "color: red">*Password did not match! Please try again.</span>';
					} else if(document.getElementById("form-field-pass1").value == document.getElementById("form-field-pass2").value) {
						//document.getElementById("message-pl").value = 0;
						document.getElementById("updatePasswordLabel").innerHTML = "";
						document.getElementById("updateConfirmPasswordLabel").innerHTML = "";
					}
				} else {
					if(document.getElementById("form-field-pass2").value.length > 0 && document.getElementById("form-field-pass2").value.length < 6) {
						//document.getElementById("message-pl").value = 1;
						document.getElementById("updateConfirmPasswordLabel").innerHTML = '<span style = "color: red">*Password must have atleast 6 characters. Please try again.</span>';
					}
				}
			} else {
				document.getElementById("updatePasswordLabel").innerHTML = '<span style = "color: red">*Password must have numeric characters. Please try again.</span>';
				//document.getElementById("message-pl").value = 3;
			}
		} else {
			if(document.getElementById("form-field-pass1").value.length > 0) {
				//document.getElementById("message-pl").value = 1;
				document.getElementById("updatePasswordLabel").innerHTML = '<span style = "color: red">*Password must have atleast 6 characters. Please try again.</span>';
				if(document.getElementById("form-field-pass2").value.length > 5) {
					document.getElementById("updateConfirmPasswordLabel").innerHTML = "";
				} else if(document.getElementById("form-field-pass2").value.length > 0 && document.getElementById("form-field-pass2").value.length < 6) {
					document.getElementById("updateConfirmPasswordLabel").innerHTML = '<span style = "color: red">*Password must have atleast 6 characters. Please try again.</span>';
				}
			}
		}
	}
}

function checkEmailAddressOfRecovery() {
	if(xmlHttp.status==0 || xmlHttp.status==200) {
		emailAddress = encodeURIComponent(document.getElementById("emailAddressOfRecovery").value);
		xmlHttp.open("GET", "check-email-address-of-recovery.php?emailAddress=" + emailAddress, true);
		xmlHttp.onreadystatechange = handlecheckEmailAddressOfRecoveryResponse;
		xmlHttp.send(null);
	} else {
		setTimeout('checkEmailAddressOfRecovery()', 1000);
	}
}

function handlecheckEmailAddressOfRecoveryResponse() {
	if(xmlHttp.readyState==4) {
		if(xmlHttp.status==200) {
			xmlResponse = xmlHttp.responseXML;
			xmlDocumentElement = xmlResponse.documentElement;
			message = xmlDocumentElement.firstChild.data;
			//emailAddress = encodeURIComponent(document.getElementById("emailAddress").value);
			document.getElementById("message-checkEmailAddressOfRecovery").value = message;
			if(message == "Exists") {
				document.getElementById("checkEmailAddressOfRecovery").innerHTML = "";
			} else if(message == "Available") {
				document.getElementById("checkEmailAddressOfRecovery").innerHTML = '<span style = "color: red">*Username doesn\'t exists.</span>';
			} else if(message == "Empty") {
				document.getElementById("checkEmailAddressOfRecovery").innerHTML = "";
			}
			setTimeout('checkEmailAddressOfRecovery()', 1000);
		} else {
			alert("Something went wrong!");
		}
	}
}

function checkPasswordOfRecovery() {
	if(document.getElementById("newPasswordOfRecovery").value == "") {
		document.getElementById("passwordLabelOfRecovery").innerHTML = '<span style = "color: red">You can\'t leave this empty! Try to fill this first.</span>';
	} else {
		document.getElementById("passwordLabelOfRecovery").innerHTML = "";
		if(document.getElementById("newPasswordOfRecovery").value.length > 5) {
			if(document.getElementById("confirmPasswordOfRecovery").value.length > 5) {
				if(document.getElementById("newPasswordOfRecovery").value != document.getElementById("confirmPasswordOfRecovery").value) {
					document.getElementById("message-plOfRecovery").value = 2;
					document.getElementById("confirmPasswordLabelOfRecovery").innerHTML = '<span style = "color: red">*Password did not match! Please try again.</span>';
				} else if(document.getElementById("newPasswordOfRecovery").value == document.getElementById("confirmPasswordOfRecovery").value) {
					document.getElementById("message-plOfRecovery").value = 0;
					document.getElementById("passwordLabelOfRecovery").innerHTML = "";
					document.getElementById("confirmPasswordLabelOfRecovery").innerHTML = "";
				}
			} else {
				if(document.getElementById("confirmPasswordOfRecovery").value.length > 0 && document.getElementById("confirmPasswordOfRecovery").value.length < 6) {
					document.getElementById("message-plOfRecovery").value = 1;
					document.getElementById("confirmPasswordLabelOfRecovery").innerHTML = '<span style = "color: red">*Password must have atleast 6 characters. Please try again.</span>';
				}
			} 
		} else {
			if(document.getElementById("newPasswordOfRecovery").value.length > 0) {
				document.getElementById("message-plOfRecovery").value = 1;
				document.getElementById("passwordLabelOfRecovery").innerHTML = '<span style = "color: red">*Password must have atleast 6 characters. Please try again.</span>';
				if(document.getElementById("confirmPasswordOfRecovery").value.length > 5) {
					document.getElementById("confirmPasswordLabelOfRecovery").innerHTML = "";
				} else if(document.getElementById("confirmPasswordOfRecovery").value.length > 0 && document.getElementById("confirmPasswordOfRecovery").value.length < 6) {
					document.getElementById("confirmPasswordLabelOfRecovery").innerHTML = '<span style = "color: red">*Password must have atleast 6 characters. Please try again.</span>';
				}
			}
		}
	}
}
