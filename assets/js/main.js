


 function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
        }
    $(document).ready(function(){
         $('input[name="nik"]').keypress(function(e){
                if(e.which < 48 || e.which > 57){
                    return false;
                }
            });
    });

        $('#myModal').modal({
            show:true
        });
  
   
        $('#myModal5').modal({
            show:true
        });
 

    $('#edo-copo').DataTable();
    $('.clockpicker').clockpicker();

   

        function hanyaAngka(t){
            console.log();
        }

        $(".editData").click(function() {
            $("#editData.modal-title").html("Update Dokumen Data");

        });

        

       

    