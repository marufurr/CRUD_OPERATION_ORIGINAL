<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<form method="post" action="{{url('data-added')}}" >
   <div class="form-row">
      <div class="form-group col-md-6 offset-2">
         <a href="{{url('all-contacts')}}" class="btn btn-primary">Go Back</a>

@csrf
<div class="form-group">
<label for="text" class="bmd-label-floating">Name</label>
<textarea class="form-control" rows="1" name="name" placeholder="Enter Your Name"></textarea>
</div> 
<div class="form-group">
<label for="text" class="bmd-label-floating" >Email</label>
<textarea class="form-control" rows="1" name="email" placeholder="Enter Your Email Address"></textarea>
</div>
<div class="form-group">
<label for="text" class="bmd-label-floating">Phone</label>
<textarea class="form-control" rows="1" name="phone" placeholder="Enter Your Phone Number"></textarea>
</div> 
<div class="form-group">
<label for="text" class="bmd-label-floating">Description</label>
<textarea class="form-control" rows="1" name="description" placeholder="Enter Your Description"></textarea>
</div>
<button class="btn btn-default">Cancel</button>
<button type="submit" class="btn btn-primary btn-raised">Submit</button>
</form>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>