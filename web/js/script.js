window.onscroll = function() { myFunction()};

		var nav = document.getElementById("nav");
		var sticky = nav.offsetTop;

		function myFunction(){
			if(window.pageYOffset > sticky){
				nav.classList.add("sticky");
			}else{
				nav.classList.remove("sticky");
			}
		}
		function openNav(){
			document.getElementById("rnav").style.display = "block";
			document.getElementById("rnav").style.width = "100%";
		}
		function closeNav() {
			document.getElementById("rnav").style.display = "none";
			document.getElementById("rnav").style.width = "0";
		}
		function openSnav() {
     		document.getElementById("mySidenav").style.display = "block";
     		document.getElementById("trig").style.display = "none";
     		document.getElementById("mySidenav").style.width = "160px";
    		document.getElementById("main").style.marginLeft = "160px";
    		document.getElementById("foot").style.marginLeft = "160px";
		}	

	function closeSnav() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("trig").style.display = "block";
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.getElementById("foot").style.marginLeft = "0";
	}	
	function collapse(id, did){
			var div = document.getElementById(did).style.display;
			if(div == "none"){
				document.getElementById(id).classList.add("side-active");
				document.getElementById(did).style.display = "block";
			}else{
				document.getElementById(id).classList.remove("side-active");
				document.getElementById(did).style.display = "none";
			}
	}
	$('.collapse-body').hide();

	 function fxn(){
		 var title = document.getElementById('title');
		 var slug = document.getElementById('slug');
		 var arr = title.value.split(' ');
		 slug.value = arr.join('-');
	 }

	var a=0;
	var b=0;
    $('#file').bind('change',function(){
      if($('#submit').attr('disabled', false)){
        $('#submit').attr('disabled', true);
      }
      var ext = $('#file').val().split('.').pop().toLowerCase();
      if($.inArray(ext, ['gif', 'png','jpg','jpeg']) == -1){
        $('#error1').slideDown("slow");
		$('#submit').prop("disabled", true);
		$('#submit').attr('disabled', true);
        a=0;
	  }else{
		a=1;
		$('#error1').slideUp("slow");
	  }
	  var picsize = (this.files[0].size);
	  if(picsize > 2000000){
		$('#error2').slideDown("slow");
		$('#submit').prop("disabled", true);
		$('#submit').attr('disabled', true);
		b=0;
	  }else{
          b=1;
          $('#error2').slideUp("slow");
        }
        if(a==1 && b==1){
          $('#submit').attr('disabled',false);
        }
    });