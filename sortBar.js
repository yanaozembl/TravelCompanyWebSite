
var something = (function() {
var executed = false;
return function() {
if (!executed) {
    executed = true;
    kol=document.getElementsByClassName("changePrice").length;  
        var arr = new Array(); 
        for(i=0;i<kol;i++)
            {
                b = document.getElementsByClassName("changePrice")[i].innerHTML;
                arr[i]=parseInt(b, 10);
            }
        }
        return arr;
    };
})();

var chbox1=document.getElementById("one");
var arr1=new Array();              
arr1 = something();

function fun1() { 

    if (chbox1.checked) {                   
        var  euro, ruble;
        kol=document.getElementsByClassName("changePrice").length;  
                        
        for(i=0;i<kol;i++)
        {
            euro = document.getElementsByClassName("changePrice")[i].innerHTML;
            ruble= Math.round((parseInt(euro, 10))*83.6302);
            document.getElementsByClassName("changePrice")[i].innerHTML= ruble + "₽";
        }                                                   
    }
    else if(!(chbox1.checked)){
        kol=document.getElementsByClassName("changePrice").length; 
        for(k=0;k<kol;k++)
        {   
            str=String(arr1[k]);                  
            document.getElementsByClassName("changePrice")[k].innerHTML= str+"€";
        }    
    }               
}



var turn;   
function fun3(c) {

    turn=foo(c);
    c.checked = turn;

    var val1 = parseInt(document.getElementById('price_from').value, 10);                
    var val2 = parseInt(document.getElementById('price_to').value, 10);
    
    if (turn == 1) {
        console.log(Math.round(val2 * 83.6302));
        for (let i = 0; i < document.getElementsByClassName("items").length; i++){
            if (((parseInt(document.getElementsByClassName("changePrice")[i].innerHTML, 10) <= val2) && (parseInt(document.getElementsByClassName("changePrice")[i].innerHTML, 10) >= val1))
                ||
            ((parseInt(document.getElementsByClassName("changePrice")[i].innerHTML, 10) <=  Math.round(val2*83.6302)) && (parseInt(document.getElementsByClassName("changePrice")[i].innerHTML, 10) >=  Math.round(val1*83.6302))) ) {
                document.getElementsByClassName("items")[i].style = "display: initial";
            } 
                
        }       
        document.getElementById("item3").style = "display: none";
        count();
    }

    if(turn==0){
        document.getElementById("item3").style = "display: initial";
        count();                  
    } 

};

function fun4(c) {
    
    turn=foo(c);
    c.checked = turn;

    var val1 = parseInt(document.getElementById('price_from').value, 10);                
    var val2 = parseInt(document.getElementById('price_to').value, 10);

    if (turn==1) {
        for(let i=0; i<document.getElementsByClassName("items").length; i++){
            if (((parseInt(document.getElementsByClassName("changePrice")[i].innerHTML, 10)<=val2) && (parseInt(document.getElementsByClassName("changePrice")[i].innerHTML, 10)>=val1))||
                ((parseInt(document.getElementsByClassName("changePrice")[i].innerHTML, 10) <= Math.round(val2 * 83.6302)) && (parseInt(document.getElementsByClassName("changePrice")[i].innerHTML, 10) >= Math.round(val1 * 83.6302))))
            {
                document.getElementsByClassName("items")[i].style = "display: initial";
            } 
        }
            document.getElementById("item2").style = "display: none";
            count()
    }

    if(turn==0){
            document.getElementById("item2").style = "display: initial";
        count();                  
    } 

};

function fun5(c) {

    turn=foo(c);
    c.checked = turn;

    var val1 = parseInt(document.getElementById('price_from').value, 10);                
    var val2 = parseInt(document.getElementById('price_to').value, 10);

    if (turn==1) {
        for(let i=0; i<document.getElementsByClassName("items").length; i++){
               if (((parseInt(document.getElementsByClassName("changePrice")[i].innerHTML, 10)<=val2) && (parseInt(document.getElementsByClassName("changePrice")[i].innerHTML, 10)>=val1))||
                   ((parseInt(document.getElementsByClassName("changePrice")[i].innerHTML, 10) <= Math.round(val2 * 83.6302)) && (parseInt(document.getElementsByClassName("changePrice")[i].innerHTML, 10) >= Math.round(val1 * 83.6302))))
               {
                document.getElementsByClassName("items")[i].style = "display: initial";
                } 
        }
        
        document.getElementById("item4").style = "display: none";
        document.getElementById("item2").style = "display: none";
        count();                  

    }
    
    if(turn==0){
    document.getElementById("item2").style = "display: initial";
    document.getElementById("item4").style = "display: initial";
        count();                  
    }
                    
}

var a,b;
function foo(c) {
    if (a != c) 
        {b = 0;
        a = c};
    b ^= 1;
    return b;
}

function count() {
    var sum = 0; 
    for (let i = 0; i < document.getElementsByClassName("items").length; i++) {
        if (document.getElementsByClassName("items")[i].style.display == "initial")
            sum++;
    }
    document.getElementById("last").innerHTML = sum;
}

var box3 = document.getElementById('three');
var box4 = document.getElementById('four');
var box5 = document.getElementById('five');

function price() {
    var val1 = parseInt(document.getElementById('price_from').value, 10);              
    var val2 = parseInt(document.getElementById('price_to').value, 10);
    
    kol=document.getElementsByClassName("changePrice").length;  
    var prices = new Array(); 

    for(i=0;i<kol;i++)
        {
            if(((parseInt(document.getElementsByClassName("changePrice")[i].innerHTML, 10)<=val2) && (parseInt(document.getElementsByClassName("changePrice")[i].innerHTML, 10)>=val1))||
            ((parseInt(document.getElementsByClassName("changePrice")[i].innerHTML, 10) <=  Math.round(val2*83.6302)) && (parseInt(document.getElementsByClassName("changePrice")[i].innerHTML, 10) >=  Math.round(val1*83.6302)))){                           
                document.getElementsByClassName("items")[i].style = "display: initial";                                                      
            }else
            {
                document.getElementsByClassName("items")[i].style = "display: none";
            }                   
    }  
    if (box3.checked) {
        document.getElementById("item3").style = "display: none";
    }
    if (box4.checked) {
        document.getElementById("item2").style = "display: none";
    }
    if (box5.checked) {
        document.getElementById("item4").style = "display: none";
        document.getElementById("item2").style = "display: none";
    }
    count();                  

};
