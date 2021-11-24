
    //var x=0;
    var erreur ;
    var title = document.getElementById("title");
    var desc = document.getElementById("description");
    var cat = document.getElementById("category");
    var tt=true;
    for(var i=0;i<title.value.length;i++)
    {
        if (((title.value.charCodeAt(i) >= 65) && (title.value.charCodeAt(i) <= 90)) || ((title.value.charCodeAt(i) >= 97 ) && (title.value.charCodeAt(i) <= 122)) || (title.value.charCodeAt(i) == 32)||((title.value.charCodeAt(i) >= 48 )&&(title.value.charCodeAt(i) <= 57)))
        {
            tt=true;

        }
        else
        {
            tt=false;

            break;
        }
    }
    if ((!title.value) || (!tt))
    {
        
        erreur="*";
        document.getElementById("errorT").innerHTML=erreur;
        //alert("add title");
    }else{
        title.value=title.value.charAt(0).toUpperCase() + title.value.slice(1).toLowerCase() ;
        document.getElementById("errorT").innerHTML="";
    }
    if (!desc.value) 
    {
        
        erreur="*";
        document.getElementById("errorD").innerHTML=erreur;
        //alest("add description");
    }
    else{
        document.getElementById("errorD").innerHTML="";
    }  
    if (cat.value=="")
    {
        erreur="*";
        document.getElementById("errorC").innerHTML=erreur;
      

    }else{
        document.getElementById("errorC").innerHTML="";
    }   



