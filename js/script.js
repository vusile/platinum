
function getArea(){
    
    var city_id = $('.city').val();
    
    $.ajax({
        url: site_url+"Areas/getCityArea",
        type:"POST",
        data:"city_id="+city_id,
        success:function(data){
            $("#changeArea").html(data);
        }
    })
}

