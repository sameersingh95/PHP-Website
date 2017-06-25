function sign()
{var y=f1.user.value;
var z=f1.pass.value;
alert("Thanks for signing in..");
alert("your Username = "+ y+" and Password = "+z);
window.open("base1.html");
}

function valid()
	{
		var name = document.f1.name;
		var email = document.f1.email;
		var mob = document.f1.mobile;
		var user = document.f1.user;
		var pass = document.f1.pass;
		var pass2 = document.f1.pass1;
		var n=/\W$/;
    if (name.value == "")
    {
        window.alert("Please enter your name.");
        name.focus();
        return false;
    }
	if (n.test(name.value))
    {
        window.alert("Do not use special characters");
        name.focus();
        return false;
    }
	if (email.value == "")
    {
        window.alert("Please enter a valid email id.");
        email.focus();
        return false;
    }
	if(email.value.indexOf("@")==-1 || email.value.indexOf(".")==-1)
	{
		window.alert("You need to use @ followed by .com or.co.in");
		email.focus();
        return false;
	}
	if (mob.value == "")
    {
        window.alert("Please enter your correct phone number.");
        mob.focus();
        return false;
	}
	if (!(mob.value.length == 10)) {
  alert("The phone number is the wrong length. \nPlease enter 10 digit mobile no.");
  mob.focus();
  return false;
 }
	if (user.value == "")
    {
        window.alert("Please enter your username.");
        user.focus();
        return false;
    }
	if (pass.value == "")
    {
        window.alert("Please enter your password.");
        pass.focus();
        return false;
    }
	if (pass2.value == "")
    {
        window.alert("Please re-enter your password.");
        pass2.focus();
        return false;
    }
	if (pass2.value!=pass.value)
    {
        window.alert("Passwords do not match.");
        pass2.focus();
        return false;
    }
	return sign();
}
