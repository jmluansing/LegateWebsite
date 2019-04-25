 $(document).ready(function() {
  $("#datepicker-group").datepicker({
    format: "yyyy/mm/dd",
    todayHighlight: true,
    autoclose: true,
    clearBtn: true
  });
});
  $(document).ready(function(){

     $("#success-alert").hide();
    $("#btnsubmit").click(function(event) {
        event.preventDefault();
        var cusname = $("#cusname").val();
        var cusemail = $("#cusemail").val();
        var cuscn = $("#cuscn").val();
        var cusadd = $("#cusadd").val();
        var pdsm = $("#datepicker").val();
        var thour = $("#thour").val();
        var tmins = $("#tmins").val();
        var ampm = $("#ampm").val();
        var messageinquiry = $("#messageinquiry").val();
         var itm = [];
            $.each($("input[name='itm']:checked"), function(){            
                itm.push($(this).val());
            });
          var iitm = itm.join(",");
      $.ajax({
            type: "POST",
            url: "inquryemail.php",
            data: "cusname=" + cusname + "&cusemail=" + cusemail + "&cuscn=" + cuscn + "&cusadd=" +cusadd + "&pdsm=" + pdsm + "&thour=" + thour + "&tmins=" + tmins + "&ampm=" + ampm + "&messageinquiry=" + messageinquiry + "&itm=" + iitm,
            success: function(){
                $(".alert").removeClass("in").show();
                $(".alert").delay(200).addClass("in").fadeOut(2000);
                 document.getElementById("frmemailinquiry").reset();
            }
        });
    });
});