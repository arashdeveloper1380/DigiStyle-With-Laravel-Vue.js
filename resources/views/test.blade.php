
@if($service == 'google')
    


<?php
if($message=session('key')){

echo  $message;
?>
  <div class="title m-b-md">
        Welcome {{ $details->name}} ! <br> Your email is : {{
        $details->email }} <br> Your are {{ $details->user['gender'] }}.
      </div>

	

<?php
}


     ?>

@endif

