$.ajax({
    url:'/adminChatCount',
    type:'get',
    dataType:'JSON',
    success:function(response)
    {

let arr=response.data
       
        document.querySelectorAll('tbody tr').forEach(function(row) {
            var dataKey = row.getAttribute('data-key');
                         
               
            arr.forEach(element => {
               if(element.user_id == dataKey)
               {
                var element=row.childNodes[23];
                element.classList.add('maindesign') ;
                      
               }
            });


        });
     
    }
})

