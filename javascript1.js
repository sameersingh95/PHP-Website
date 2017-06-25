function valid()
	{
		var email1 = document.f1.email;
		var pass = document.f1.pass;
		var s1 ="sshanu95@gmail.com";
		var s2 ="abcd123";
	if (email1.value == "")
    {
        window.alert("Please enter a valid email id.");
        email1.focus();
        return false;
		
    }
	if(email1.value.indexOf("@")==-1 || email1.value.indexOf(".")==-1)
	{
		window.alert("You need to use @ followed by .com or.co.in");
		email1.focus();
        return false;
	}
	if(email1.value!=s1)
	{
		window.alert("This id is not registered ");
		email1.focus();
		return false;
	}
	if (pass.value == "")
    {
        window.alert("Please enter your password.");
        pass.focus();
        return false;
    }
	if(pass.value!=s2)
	{
		window.alert("Enter correct password");
		pass.focus();
		return false;
	}
	return window.open('frame.html');
}
