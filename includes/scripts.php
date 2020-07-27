<script src="js/jquery-3.3.1.min.js"></script> 
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<script src="bootstrap-switch.js" ></script>
<link rel="stylesheet" href="segment.css">
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="segment.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
var sel="";
//If Click On Data Type
$('#radioBtn a').on('click', function Type(){
    
     sel = $(this).data('title');
      set(sel);
         
    var tog = $(this).data('toggle');
    
    $('#'+tog).prop('value', sel);
    
    $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
    $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');

})
//If Click On Next Button
$(document).ready(function(){
  $("#next").click(function(){
    var Type=get();
    var ID=$('#ID').data('title');
    setID(ID);
   
        $.ajax({
            url: 'connection.php',
            method: 'post',
            data: {Type: Type, ID: ID},
            success: function (response) {
                console.log(response);
            }
        });
        
  });

});

function set(n){
    sel=n;
}

function get() {
    return sel;
    
}

function setID(n){
    id=n;
}

function getID() {
    return id;
    
}

</script>
<!--Alert If Finish Check-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
			function validation(){
                swal("شكراً لك", " لقد ساهمت للتو بزيادة المحتوى العربي  ", "success",  {
                    buttons: {
                        catch: {
                            text: "تم",
                            value: "catch",
                        },
                    },timer: 3000
                })
                .then((value) => {
                    var Type=get();
                    var ID=$('#ID').data('title');
                    setID(ID);
   
                    $.ajax({
                        url: 'connection.php',
                        method: 'post',
                        data: {Type: Type, ID: ID},
                        success: function (response) {
                        console.log(response);
                        }
                    });
                    window.location.href="logout.php"; 
                });
            }
</script>

<!--Alert If Enter Data-->
<script type="text/javascript">
			public function validation2(){
                swal("عمل جميل", "تم حفظ البيانات بنجاح ", "success",{
                    buttons: {
                        catch: {
                            text: "تم",
                            value: "catch",
                        },
                    },timer: 3000
                })
                .then((value) => {
                    window.location.href="DataEntry.php"; 
                });         
			}
</script>

