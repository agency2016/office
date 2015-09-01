<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  
   <script src="js/vendor/jquery-1.11.2.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/main.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
         <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
 
    <div class="container" style="padding-top: 30px">




<div class="row">
  <div class="col-md-6">
  <div class="panel panel-info">
    <div class="panel-heading">Bootstrap: Basic Form</div>
    <div class="panel-body">
      <form role="form">
  <div class="form-group">
    <label class="control-label" for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
    <p class="help-block">Lorem ipsum dolor sit amet</p>
  </div>

  <div class="form-group">
    <label class="control-label" for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <p class="help-block">Lorem ipsum dolor sit amet</p>
  </div>

  <div class="form-group">
    <label class="control-label" for="exampleInputFile">File</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>

  <div class="form-group">
    <div class="checkbox">
      <label>
        <input type="checkbox"> Active
      </label>
    </div>
    <p class="help-block">Lorem ipsum dolor sit amet</p>
  </div>

  <div class="form-group">
    <label class="control-label">Choices</label>
    <div class="checkbox">
      <label>
        <input type="checkbox" name="optionsRadios" id="optionsCheckbox1" value="option1" checked>
        Option one is this and that&mdash;be sure to include why it's great
      </label>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" name="optionsRadios" id="optionsCheckbox2" value="option2">
        Option two can be something else and selecting it will deselect option one
      </label>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label">Sex</label>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
        Male
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
        Female
      </label>
    </div>
    <p class="help-block">Lorem ipsum dolor sit amet</p>
  </div>

  <button type="submit" class="btn btn-default">Create User</button>
</form>

    </div>
  </div>
</div>
  <div class="col-md-6">
  <div class="panel panel-primary">
    <div class="panel-heading">Simple Form: Basic Form</div>
    <div class="panel-body">
      <form accept-charset="UTF-8" action="http://simple-form-bootstrap.plataformatec.com.br/examples/create_basic" class="simple_form new_user_basic" enctype="multipart/form-data" id="new_user_basic" method="post" novalidate="novalidate"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="bv9m9SoSzbCKA1F8j86uZNUzBwk54NCYA1GAH6v6bmI=" /></div>


  <div class="form-group email required user_basic_email"><label class="email required control-label" for="user_basic_email"><abbr title="required">*</abbr> Email</label><input class="string email required form-control" id="user_basic_email" name="user_basic[email]" placeholder="Enter email" type="email" /><p class="help-block">Lorem ipsum dolor sit amet</p></div>

  <div class="form-group password required user_basic_password"><label class="password required control-label" for="user_basic_password"><abbr title="required">*</abbr> Password</label><input class="password required form-control" id="user_basic_password" name="user_basic[password]" placeholder="Password" type="password" /><p class="help-block">Lorem ipsum dolor sit amet</p></div>

  <div class="form-group file optional user_basic_file"><label class="file optional control-label" for="user_basic_file">File</label><input class="file optional" id="user_basic_file" name="user_basic[file]" type="file" /><p class="help-block">Example block-level help text here.</p></div>

  <div class="form-group boolean optional user_basic_active"><div class="checkbox"><input name="user_basic[active]" type="hidden" value="0" /><label class="boolean optional" for="user_basic_active"><input class="boolean optional" id="user_basic_active" name="user_basic[active]" type="checkbox" value="1" />Active</label></div><p class="help-block">Lorem ipsum dolor sit amet</p></div>

  <div class="form-group check_boxes optional user_basic_choices"><label class="check_boxes optional control-label">Choices</label><span class="checkbox"><label for="user_basic_choices_option_one_is_this_and_thatbe_sure_to_include_why_its_great"><input class="check_boxes optional" id="user_basic_choices_option_one_is_this_and_thatbe_sure_to_include_why_its_great" name="user_basic[choices][]" type="checkbox" value="Option one is this and that—be sure to include why it&#39;s great" />Option one is this and that—be sure to include why it&#39;s great</label></span><span class="checkbox"><label for="user_basic_choices_option_two_can_be_something_else_and_selecting_it_will_deselect_option_one"><input class="check_boxes optional" id="user_basic_choices_option_two_can_be_something_else_and_selecting_it_will_deselect_option_one" name="user_basic[choices][]" type="checkbox" value="Option two can be something else and selecting it will deselect option one" />Option two can be something else and selecting it will deselect option one</label></span><input name="user_basic[choices][]" type="hidden" value="" /></div>

  <div class="form-group radio_buttons optional user_basic_sex"><label class="radio_buttons optional control-label">Sex</label><span class="radio"><label for="user_basic_sex_male"><input class="radio_buttons optional" id="user_basic_sex_male" name="user_basic[sex]" type="radio" value="Male" />Male</label></span><span class="radio"><label for="user_basic_sex_female"><input class="radio_buttons optional" id="user_basic_sex_female" name="user_basic[sex]" type="radio" value="Female" />Female</label></span><p class="help-block">Lorem ipsum dolor sit amet</p></div>

  <input class="btn btn-default" name="commit" type="submit" value="Create User" />
</form>
    </div>
  </div>
</div>

</div>

<div class="row">
  <div class="col-md-6">
  <div class="panel panel-info">
    <div class="panel-heading">Bootstrap: Inline Form</div>
    <div class="panel-body">
      <form class="form-inline" role="form">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail2">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword2">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-default">Create User</button>
</form>

    </div>
  </div>
</div>
  <div class="col-md-6">
  <div class="panel panel-primary">
    <div class="panel-heading">Simple Form: Inline Form</div>
    <div class="panel-body">
      <form accept-charset="UTF-8" action="http://simple-form-bootstrap.plataformatec.com.br/examples/create_inline" class="simple_form form-inline" id="new_user_inline" method="post" novalidate="novalidate"><div style="display:none"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="bv9m9SoSzbCKA1F8j86uZNUzBwk54NCYA1GAH6v6bmI=" /></div>


  <div class="form-group email required user_inline_email"><label class="email required sr-only" for="user_inline_email"><abbr title="required">*</abbr> Email</label><input class="string email required form-control" id="user_inline_email" name="user_inline[email]" placeholder="Enter email" type="email" /></div>

  <div class="form-group password required user_inline_password"><label class="password required sr-only" for="user_inline_password"><abbr title="required">*</abbr> Password</label><input class="password required form-control" id="user_inline_password" name="user_inline[password]" placeholder="Password" type="password" /></div>

  <div class="form-group boolean optional user_inline_active"><div class="checkbox"><input name="user_inline[active]" type="hidden" value="0" /><label><input class="boolean optional" id="user_inline_active" name="user_inline[active]" type="checkbox" value="1" /> Remember me</label></div></div>

  <input class="btn btn-default" name="commit" type="submit" value="Create User" />
</form>
    </div>
  </div>
</div>

</div>
</div>

</body>
</html>
