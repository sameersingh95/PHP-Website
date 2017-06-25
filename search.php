
<html>
    <head>
        <script type="text/javascript">
            function findmatch()
            {
                if(window.XmlHttpRequest){
                    xmlhttp=new XmlHttpRequest();
                }else{
                    xmlhttp=new ActiveXObject('Microsoft.XMLHTTP');
                }
                xmlhttp.onreadystatechange=function()
                {
                    if(xmlhttp.readyState==4 && xmlhttp.Status==200)
                    {
                        document.getElementById('results').innerHTML=xmlhttp.responseText;
                    }
                }
                xmlhttp.open('GET','searchrev.php?search='+document.f.search.value,true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
        <form name="f" >
            <input type="text" name="search" value placeholder="Enter Search query" onkeyup="findmatch()">
        </form>
        <div id="results"></div>
    </body>
</html>