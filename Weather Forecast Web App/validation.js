var clicks=0;
$(document).ready(function() {
    $("#clear").click( function() {
        clicks=0;
        url = "http://cs-server.usc.edu:31458/hmw8/forecastSearch.html";
        $(location).attr("href", url);
    });
});

$(document).ready(function(){ 
    $("#search").click(function(){
        ++clicks;
        for (var i=0 ; i<24; i++){
        $("#hour"+(i+1)).remove();
        $("#details"+(i+1)).remove();
        }
        for(var i=1;i<=7;i++){
        $("#myModal"+i).remove();
        }
        
        if($("#soon").hasClass("active in")==true||$("#later").hasClass("active in")==true)
        $("#firstTab").trigger("click");
        
        var notFilled=false;
        $("div.error").remove();
        
        if($("#address").val().trim()==="") {
            $("#address").after('<div id="emptyAddress" class="error text-danger">Please enter the street address</div>');
            notFilled=true;
        }
    
        if($("#city").val().trim()==="") {
            $("#city").after('<div id="emptyCity" class="error text-danger">Please enter the city</div>');
            notFilled=true;
        }
    
        if( $("#state").val()==="") {
            $("#state").after('<div id="emptyState" class="error text-danger">Please select a state</div>');
            notFilled=true;
        }

        if(clicks>0){   
            
        $("#address").keyup(function(){
            if($("#address").val().trim().length>0){
             $("#emptyAddress").css("display","none");
             $("#address").css("background-color","#e4e600");
            }
            else if($("#address").val().trim().length==0){             
            $("#address").css("background-color","white");
            $("#emptyAddress").css("display","block");
            }
            });
            
        $("#city").keyup(function(){
            if($("#city").val().trim().length>0){
             $("#emptyCity").css("display","none");
             $("#city").css("background-color","#e4e600");
            }
            else if($("#city").val().trim().length==0){             
            $("#city").css("background-color","white");
            $("#emptyCity").css("display","block");
            }
            });
            
        $("#state").change(function(){
            if($("#state").val()!="")
                $("#emptyState").css("display","none");
            else if($("#state").val()=="")
                $("#emptyState").css("display","block");
        });
    }
                     
        if(notFilled) {$("#searchOutput").css("display","none");
            return false;} 
  
        else {return true;}
    });    
});