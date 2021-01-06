<?=$this->extend('Conquer\Auth\Views\_template') ?>
<?=$this->section('content') ?>

<div class="container my-4 py-5">
  <div class="row justify-content-center">

  	<?php if(empty($features->logo) === false): ?>
  	  <div class="mb-3">
  	    <img src="<?=$features->logo ?>" class="img-thumbnail rounded-circle mx-auto d-block" alt="Logo">
  	  </div>
  	<?php endif; ?>

  	<div class="col-xxl-5 col-xl-5 col-md-6 col-sm-9 col-xs-10 border bg-white">
	  <?=form_open('', 'class="my-3 mx-2"') ?>

	  <h1 class="display-6 mb-4 text-center" style="font-size: 2rem">Hi! Please login first.</h1>

	  <div class="mb-3">
	    <label for="inputUsermail" class="form-label">Email</label>
	    <input type="email" class="form-control" id="inputUsermail" placeholder="user@example.com">
	  </div>

	  <div class="mb-3">
	    <label for="inputPassword" class="form-label">Password</label>
	    <input type="password" class="form-control" id="inputPassword">
	  </div>

	  <div class="mb-3 row">
	  	<div class="col">

	  	  <?php if($features->remember): ?>
	  	    <div class="form-check">
	          <input type="checkbox" class="form-check-input" id="exampleCheck1">
	          <label class="form-check-label" for="exampleCheck1">Remember me</label>
	  	    </div>
	  	  <?php endif; ?>

	  	</div>
	    <div class="col-md-auto">

	      <?php if($features->forgot): ?>
	      	<p class="my-0"><a href="forgot-password">Forgot Password</a></p>
	      <?php endif; ?>

	    </div>
	  </div>

	  <div class="d-grid">
	    <button class="btn btn-outline-dark mt-4" type="button">Submit</button>
	  </div>
	
	  <?=form_close() ?>
  	</div>
  </div>
  
  <?php if($features->register): ?>
  	<p class="mt-3 text-center">Don't have an account? <a href="register">Create one &rarr;</a></p>
  <?php endif; ?>

</div>

<?=$this->endSection() ?>