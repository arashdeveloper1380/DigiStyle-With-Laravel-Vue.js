


@if(Session()->has('flash_message'))


	<script>


		swal({
  title: "{{Session('flash_message.title')}}",
  text: "{{Session('flash_message.message')}}",
  icon: "success",
  button: "Aww yiss!",
  timer:3000,
});



	</script>





@endif