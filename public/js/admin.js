$('#logout').click(function(){
    $.ajax({
        url:'../../controller/alogout.php',
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

$(document).on('click','.vList',function(){
    let id = $(this).attr('id')
    console.log(id);
    $('#'+id+'hide').toggleClass('collapsed')
    $('#verify').attr('staff-id',id)
})
$(document).on('click','#verify',function(){
    let id = $(this).attr('staff-id')
    let department = $('#department').val()
    let role = $('#Role').val()
    let value = {
        user_id : id, user_department:department,user_role:role
    }
    if(department.length >0 && role.length >0 && department !='NONE' && role !='NONE' ){
        console.log(value);
        $.ajax({
            url:'../../controller/staffVerification.php',
            method:'POST',
            dataType:'json',
            data:{verify:true,data:JSON.stringify({data:value})},
            success:function(res){
        $(this).text('loading...')

                console.log(res);
                if(res.status ==200){
                    location.reload()
                }else{
                    alert('server busy')
                }
            },
            error:function(res){
                console.log(res);
            }
        })
    }

})

$('.menu').click(function(){
    $('nav').toggleClass('openNav')
})