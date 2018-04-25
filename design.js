
var count;
count = 0;


function chgBackgrndFunc(){
    count ++;
    
    if(count % 4 === 0)
    {
        document.getElementById("nav").style.backgroundColor = "blue";
    }else if(count% 4 === 1)
    {
        document.getElementById("nav").style.backgroundColor = "yellow";
    }
    else if(count% 4 === 2)
    {
        document.getElementById("nav").style.backgroundColor = "green";
    }
    else
        document.getElementById("nav").style.backgroundColor = "white";        
}


function changeBackgroundColor(){
    
    count ++;
    
    if(count % 4 === 0)
    {
        document.getElementById("wrap").style.backgroundColor = "blue";
    }else if(count% 4 === 1)
    {
        document.getElementById("wrap").style.backgroundColor = "yellow";
    }
    else if(count% 4 === 2)
    {
        document.getElementById("wrap").style.backgroundColor = "green";
    }
    else
        document.getElementById("wrap").style.backgroundColor = "white";
}