<script>

	base_url="{{asset('')}}";	

		/**** JQuery Ajax Post Request Simpan Kuesioner K3 *******/
		// $.ajaxSetup({
	 //        headers: {
	 //            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	 //        }
	 //    });   

	    $(".btn-keluar").click(function(){

	        // var datastring = $("#form_bloki").serialize();
	        var id = "{{request()->segment(2)}}";
	        var blok = "{{request()->segment(3)}}";
	        if(blok.length > 10 ){
	        	blok = blok.substr(7, blok.length);
	        }
	        //console.log(datastring)
	        // $.ajax({
	        //    type:'POST',
	        //    url:'/entri_bumd/'+id+'/simpan_bloki/'+blok,
	        //    data: datastring,
        	//    dataType: "json",	
	        //    success:function(data){
	        //       alert(data);
	        //       console.log(datastring)
	        //    }
	        // });

	        // $(this).parent().parent().attr("action", "/entri_bumd/"+id+"/simpan_bloki/0");
	        
	        var url =  base_url+"entri_bumd/"+id+"/simpan_"+blok+"/0"
	        $(this).closest("form").attr("action", url); 
		});

		$(".btn-bloki").click(function(){
	        var id = "{{request()->segment(2)}}";
	        var blok = "{{request()->segment(3)}}";
	        if(blok.length > 10 ){
	        	console.log(blok)
	        	blok = blok.substr(7, blok.length);
	        }
	        var url =  base_url+"entri_bumd/"+id+"/simpan_"+blok+"/1"
	        $(this).closest("form").attr("action", url); 
		});

		$(".btn-blokii").click(function(){
	        var id = "{{request()->segment(2)}}";
	        var blok = "{{request()->segment(3)}}";
	        if(blok.length > 10 ){
	        	blok = blok.substr(7, blok.length);
	        }
	        var url =  base_url+"entri_bumd/"+id+"/simpan_"+blok+"/2"
	        $(this).closest("form").attr("action", url); 
		});

		$(".btn-blokiii").click(function(){
	        var id = "{{request()->segment(2)}}";
	        var blok = "{{request()->segment(3)}}";
	        if(blok.length > 10 ){
	        	blok = blok.substr(7, blok.length);
	        }
	        var url =  base_url+"entri_bumd/"+id+"/simpan_"+blok+"/3"
	        $(this).closest("form").attr("action", url); 
		});

		$(".btn-blokiii1").click(function(){
	        var id = "{{request()->segment(2)}}";
	        var blok = "{{request()->segment(3)}}";
	        if(blok.length > 10 ){
	        	blok = blok.substr(7, blok.length);
	        }
	        var url =  base_url+"entri_bumd/"+id+"/simpan_"+blok+"/3.1"
	        $(this).closest("form").attr("action", url); 
		});

		$(".btn-blokiii2").click(function(){
	        var id = "{{request()->segment(2)}}";
	        var blok = "{{request()->segment(3)}}";
	        if(blok.length > 10 ){
	        	blok = blok.substr(7, blok.length);
	        }
	        var url =  base_url+"entri_bumd/"+id+"/simpan_"+blok+"/3.2"
	        $(this).closest("form").attr("action", url); 
		});

		$(".btn-blokiii3").click(function(){
	        var id = "{{request()->segment(2)}}";
	        var blok = "{{request()->segment(3)}}";
	        if(blok.length > 10 ){
	        	blok = blok.substr(7, blok.length);
	        }
	        var url =  base_url+"entri_bumd/"+id+"/simpan_"+blok+"/3.3"
	        $(this).closest("form").attr("action", url); 
		});

		$(".btn-blokiii4").click(function(){
	        var id = "{{request()->segment(2)}}";
	        var blok = "{{request()->segment(3)}}";
	        if(blok.length > 10 ){
	        	blok = blok.substr(7, blok.length);
	        }
	        var url =  base_url+"entri_bumd/"+id+"/simpan_"+blok+"/3.4"
	        $(this).closest("form").attr("action", url); 
		});

		$(".btn-blokiv").click(function(){
	        var id = "{{request()->segment(2)}}";
	        var blok = "{{request()->segment(3)}}";
	        if(blok.length > 10 ){
	        	blok = blok.substr(7, blok.length);
	        }
	        var url =  base_url+"entri_bumd/"+id+"/simpan_"+blok+"/4"
	        $(this).closest("form").attr("action", url); 
		});

		$(".btn-blokv").click(function(){
	        var id = "{{request()->segment(2)}}";
	        var blok = "{{request()->segment(3)}}";
	        if(blok.length > 10 ){
	        	blok = blok.substr(7, blok.length);
	        }
	        var url =  base_url+"entri_bumd/"+id+"/simpan_"+blok+"/5"
	        $(this).closest("form").attr("action", url); 
		});

		$(".btn-blokvi").click(function(){
	        var id = "{{request()->segment(2)}}";
	        var blok = "{{request()->segment(3)}}";
	        if(blok.length > 10 ){
	        	blok = blok.substr(7, blok.length);
	        }	
	        var url =  base_url+"entri_bumd/"+id+"/simpan_"+blok+"/6"
	        $(this).closest("form").attr("action", url); 
		});


		$(".next-blok").click(function(){
			var id = "{{request()->segment(2)}}";
	        var blok = "{{request()->segment(3)}}";
	        if(blok.length > 10 ){
	        	blok = blok.substr(7, blok.length);
	        }
			var key = "0";
			switch (blok) {
			  case "bloki":
			    key = "2";
			    break;
			  case "blokii":
			    key = "3";
			    break;
			  case "blokiii":
			    key = "3.1";
			    break;
			  case "blokiii_1":
			    key = "4";
			    break;
			  case "blokiv":
			    key = "5";
			    break;
			  case "blokv":
			    key = "6";
			    break;
			  default:
			    key = "0";
			}
			var url =  base_url+"entri_bumd/"+id+"/simpan_"+blok+"/"+key;
	        $(this).closest("form").attr("action", url); 
		});

		$(".prev-blok").click(function(){
			var id = "{{request()->segment(2)}}";
	        var blok = "{{request()->segment(3)}}";
	        if(blok.length > 10 ){
	        	blok = blok.substr(7, blok.length);
	        }
			// var nama_form = "form_"+blok+"";
			// var form = document.getElementById(nama_form);
			// console.log(nama_form)
			var key = "0";
			switch (blok) {
			  case "blokii":
			    key = "1";
			    break;
			  case "blokiii":
			    key = "2";
			    break;
			  case "blokiii_1":
			    key = "3";
			    break;
			  case "blokiv":
			    key = "3.1";
			    break;
			  case "blokv":
			    key = "4";
			    break;
			  case "blokvi":
			    key = "5";
			    break;
			  default:
			    key = "0";
			}
			var url =  base_url+"entri_bumd/"+id+"/simpan_"+blok+"/"+key;
	        $(this).closest("form").attr("action", url); 
		});

</script>