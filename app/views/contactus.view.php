<h1>Do not hesitate to contact us</h1>
<form>
  <div class="form-row">

  <div class="form-group col-md-5">
      <label for="inputName4">Name</label>
      <input type="text" class="form-control" id="inputName4" placeholder="Your Name">
    </div>

    <div class="form-group col-md-5">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Your Email">
    </div>
 
    <div class="form-group col-md-10">
    <label for="exampleFormControlTextarea2">Small textarea</label>
    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
</div>

  <div class="form-group col-md-4">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Remember Me
      </label>
    </div>
  </div>
  </div>
  <button type="submit" class="btn btn-primary col-md-10">Send</button>
  
</form>

<div class="col-md-12"><h1>Here the admin can edit posts</h1>
<?php var_dump($_POST);?>
</div>