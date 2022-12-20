$('#logout').click(function(){
    $.ajax({
        url:'../../controller/logout.php',
        method:'POST',
        dataType:'json',
        data:{islogout:true},
        success:function(res){
            if(res.status==200){
                location.reload()
            }
        }
    })
})

$('#createClass').click(function(){
    console.log('hello')
})