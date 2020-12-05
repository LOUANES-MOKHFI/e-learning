@if(Session::has('flash_message'))
  <div class="container">
	  <div class="alert-danger" id="msg">
	  {{ Session::get('flash_message') }}
	  </div>	
  </div>

  
@endif