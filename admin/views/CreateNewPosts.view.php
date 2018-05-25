<form method="post" action="<?php echo URLrewrite::BaseURL()?>" enctype="multipart/form-data">
  <div class="form-row">

  <div class="form-group col-md-5">
      <label for="inputHeader">Header: </label>
      <input type="text" name="name" class="form-control" id="inputHeader" placeholder="Subject">
    </div>

 
    <div class="form-group col-md-10">
    <label for="textArea">Body: </label>
    <textarea class="form-control rounded-0" name="contact_list" id="textArea" rows="3" placeholder="Write here :)"></textarea>
    </div>

<div class="form-group col-md-10">
<label for="upload">Upload a file</label>
<input type="file" name="file" id="upload">
</div>

<button type="submit" class="btn btn-primary col-md-10" name="submit">Submit</button>

</form>

