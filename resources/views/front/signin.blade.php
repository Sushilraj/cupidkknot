<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Login</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <style>
      	label.error{
      		color: red;
      	}
      </style>
   </head>
   <body>
	    <section class="vh-100" style="background-color: #eee;">
	        <div class="container h-100">
	            <div class="row d-flex justify-content-center align-items-center h-100">
	               <div class="col-lg-12 col-xl-11">
	                  <div class="card text-black" style="border-radius: 25px;">
	                     <div class="card-body p-md-5">
	                        <div class="row justify-content-center">
	                           <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
	                              <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
	                              <form class="mx-1 mx-md-4" method="post" action="{{url('/signin')}}" id="registerform">
	                                 @csrf
	                                 <div class="d-flex flex-row align-items-center mb-4">
	                                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
	                                    <div class="form-outline flex-fill mb-0">
	                                    	<label class="form-label" for="email">Your Email</label>
	                                       	<input type="email" id="email" name="email" class="form-control" required="true" placeholder="Email" />
	                                    </div>
	                                 </div>
	                                 <div class="d-flex flex-row align-items-center mb-4">
	                                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
	                                    <div class="form-outline flex-fill mb-0">
	                                       <label class="form-label" for="password">Password</label>
	                                       <input type="password" id="password" name="password" class="form-control" required="true" placeholder="Password" />
	                                    </div>
	                                 </div>
	                                
	                                 <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
	                                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">Login</button>
	                                 </div>
	                                 <hr />
	                                 <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
	                                    <a href="{{ route('google.login') }}" class="btn btn-lg" style="width: 100%;border: 1px solid black;">Login With Google</a>
	                                 </div>
	                                 <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
	                                    <span>If you don't have a account? <a href="{{url('/')}}">signup</a></span>
	                                 </div>
	                              </form>
	                           </div>
	                           <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
	                              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
	                                 class="img-fluid" alt="Sample image">
	                           </div>
	                        </div>
	                     </div>
	                  </div>
	               </div>
	            </div>
	        </div>
	    </section>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
	    <script>
	    	$('#registerform').validate();
	    </script>
   </body>
</html>