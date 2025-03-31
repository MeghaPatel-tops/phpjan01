 $(document).ready(function(){
            $("#btnsubmit").on("click",function(e){
                e.preventDefault();
                // var data = {
                // "pname": $("#pname").val(),
                // "price" : $("#price").val(),
                // "qty" : $("#qty").val(),
                // "desc": $("#desc").val(),
                // "catid":$("#catid").val()
                // }
                var form = document.getElementById('productform');
                let formData = new FormData(form)
                console.log(formData.pname);
                
                // $.ajax({
                //     type:"POST",
                //     url:"<?php echo $GLOBALS['baseUrl']?>/apiproductadd",
                //     data:data,
                //     success:function(data){
                //         alert(data);
                //     }
                // })
            })
        })
