<?php /* Smarty version Smarty-3.1.11, created on 2013-12-23 23:37:07
         compiled from "velo-admin/views/templates/pages/browse_movies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3260825452b92b93e98105-76011039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd96b6e1a651a00119e3827cffdde86716f9176a9' => 
    array (
      0 => 'velo-admin/views/templates/pages/browse_movies.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
    '6799fa7e1ad4b0b88d554e5c3f094e44748c06e6' => 
    array (
      0 => 'velo-admin/views/templates/layout/default.tpl',
      1 => 1374007972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3260825452b92b93e98105-76011039',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'page_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_52b92b940c74e0_69850730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b92b940c74e0_69850730')) {function content_52b92b940c74e0_69850730($_smarty_tpl) {?><!doctype html>
<html>

<head>

    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Apple devices fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Apple devices fullscreen -->
    <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
	<?php $_smarty_tpl->tpl_vars["asset_base_url"] = new Smarty_variable(@BASE_URL, null, 0);?>
    <script type="text/javascript">
        var config = {
            base: "<<?php ?>?php echo base_url(); ?<?php ?>>",
            someOtherPref: 4
        };
    </script>

    <!--Javascript,Styles-->
    <?php echo $_smarty_tpl->getSubTemplate ('resource/resources.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


</head>

<body>
    <!--The Navigation bar plus nav contents-->
    <?php echo $_smarty_tpl->getSubTemplate ('resource/navigator.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="container-fluid" id="content">
    <!--Sidebar, sub-navigation-->
    <?php echo $_smarty_tpl->getSubTemplate ("resource/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


    <div id="main">

        <div class="container-fluid">
            <!--The title of every page rendered-->
            <?php echo $_smarty_tpl->getSubTemplate ("resource/content_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            <hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="box">
                        <!--<div class="box-title">
                            <h3>
                                <i class="icon-reorder"></i>

                                <?php echo $_smarty_tpl->tpl_vars['page_description']->value;?>

                            </h3>
                        </div> -->
                        <div class="box-content">
                            <!-- Content -->
                            

<div class="row-fluid">

		<?php if ($_smarty_tpl->tpl_vars['success_flash']->value){?>
		<div class="span12">
			<div class="alert alert-success">
				<?php echo $_smarty_tpl->tpl_vars['success_flash']->value;?>

			</div>
		</div>
		<?php }elseif($_smarty_tpl->tpl_vars['error_flash']->value){?>
		<div class="span12">
			<div class="alert alert-danger">
				<?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['error_flash']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value){
$_smarty_tpl->tpl_vars['k']->_loop = true;
?>
					<?php echo $_smarty_tpl->tpl_vars['k']->value;?>

				<?php } ?>
			</div>
		</div>
		<?php }?>

</div>
<div class="row-fluid">
					<div class="span12">
						<div class="box">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									Browse Movies
								</h3>
							</div>
<div class="box-content nopadding">
	<table class="table table-hover table-nomargin table-striped dataTable dataTable-colvis">
		 <thead>

			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Genre</th>
				<th>Length</th>
				<th>IMDB rating</th>
				<!-- <th>Synopsis</th> -->
				<!-- <th>Trailer URL</th> -->
				<!-- <th>Big Image</th> -->
				<th>Small Image</th>
				<th>Featured</th>
				<th>Active</th>
				<th>Commit</th>
				<th>Created</th>

			</tr>
			</thead>
			<tbody>
			<?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['movies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
				<tr>

				   <td><?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
</td>
				   <td><a href="<?php echo $_smarty_tpl->tpl_vars['r']->value['movie_trailer_url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['r']->value['movie_title'];?>
</a></td>
				   <td><?php echo $_smarty_tpl->tpl_vars['r']->value['genre_name'];?>
</td>
				   <td><?php echo $_smarty_tpl->tpl_vars['r']->value['movie_lenght'];?>
</td>
				   <td><?php echo $_smarty_tpl->tpl_vars['r']->value['movie_imdb_rating'];?>
</td>
				   
				   <!--<td><a href="<?php echo $_smarty_tpl->tpl_vars['r']->value['movie_trailer_url'];?>
">View Trailer</a></td> -->
				   
				   <td><a href="<?php echo $_smarty_tpl->tpl_vars['r']->value['movie_trailer_url'];?>
" target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
uploads/small/<?php echo $_smarty_tpl->tpl_vars['r']->value['movie_small_image'];?>
" height="100" width="100"></a></td>
				   <td><?php echo $_smarty_tpl->tpl_vars['r']->value['movie_is_featured'];?>
</td>
				   <td><?php echo $_smarty_tpl->tpl_vars['r']->value['movie_is_active'];?>
</td>

				   <td>
			<!-- Action Handles -->
			<div class="btn-group">
				 <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-cog"></i>
					 <span class="caret"></span></a>
				 <ul class="dropdown-menu">

					 <li>
						 <a href="#modal-movie-<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" role="button" data-toggle="modal"><i class="icon-edit"></i> Edit</a>
					 </li>
					 <li>
						 <a href="#modal-confirm-<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" role="button" data-toggle="modal"><i class="icon-remove"></i> Remove</a>
					 </li>

				 </ul>
		   </div>
				<!-- Confirm Delete Dialogue -->

				<div id="modal-confirm-<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="danger">Delete Confirmation</h3>
				</div>
				<div id="del_loader_elem<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" class="span12"></div>
				<div class="modal-body">
				<p>Are you sure you want to delete this Movie record for <?php echo $_smarty_tpl->tpl_vars['r']->value['movie_title'];?>
 <br/>You cannot delete a movie with showtimes - you need to remove all attached showtimes first.</p>
				</div>
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
				<button class="btn btn-danger delete-movie" movie="<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
">Yes</button>
				</div>
				</div>

				<!-- Modal Content for Edit action -->
		<div id="modal-movie-<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" class="modal hide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3 id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['r']->value['movie_title'];?>
</h3>
		</div>
		<div class="modal-body">
			<!-- Movie Edit Form Goes Here -->

		<div class="box">
		<div class="box-title">
			<h3>
				<i class="icon-film"></i>
				Edit Movie
			</h3>
		</div>
	<div class="box-content">
		<div id="loader_elem<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" class="span12"></div>
		<form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
movies/edit/<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" method="post" id="movieForm<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" movie="<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" enctype="multipart/form-data">
		<div class="control-group">
	<label for="Title" class="control-label">Title</label>
	<div class="controls">
		<input type="text" name="movie_title"  class="input-xlarge" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['movie_title'];?>
" data-rule-required="true">
		<span for="movie_title" class="help-block error valid" style="display: none;"></span>
	 </div>
</div>

<div class="control-group">
<label for="genre_dr" class="control-label">Movie genre</label>
<div class="controls">
	<div class="input-xlarge">
	<select name="movie_genre" id="select-genre">
		<option value="<?php echo $_smarty_tpl->tpl_vars['r']->value['genre_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['r']->value['genre_name'];?>
</option>
		<?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['movie_genres']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value){
$_smarty_tpl->tpl_vars['k']->_loop = true;
?>
			<?php if ($_smarty_tpl->tpl_vars['k']->value['id']!=$_smarty_tpl->tpl_vars['r']->value['genre_id']){?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value['genre_name'];?>
</option>
			<?php }?>
		<?php } ?>
	</select></div>
</div>
</div>


<div class=" control-group">
	<label for="slider" class="control-label">Movie Lenght (Minutes) </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<input type="text" class="spinner input-mini ui-spinner-input" value="<?php echo $_smarty_tpl->tpl_vars['r']->value['movie_lenght'];?>
" id="textfield" name="movie_lenght" aria-valuenow="28" autocomplete="off" role="spinbutton">
			<a class="ui-spinner-button ui-spinner-up ui-corner-tr" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-n">?</span></a>
			<a class="ui-spinner-button ui-spinner-down ui-corner-br" tabindex="-1"><span class="ui-icon ui-icon-triangle-1-s">?</span></a>
		</span>
	</div>
</div>

<div class=" control-group">
	<label for="slider" class="control-label">IMDB Rating </label>
	<div class="controls">
		<span class="ui-spinner ui-widget ui-widget-content ui-corner-all">
			<select name="movie_imdb_rating">
				<option><?php echo $_smarty_tpl->tpl_vars['r']->value['movie_imdb_rating'];?>
</option>
				<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 7+1 - (0.5) : 0.5-(7)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0.5, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
					<?php if ($_smarty_tpl->tpl_vars['r']->value['movie_imdb_rating']!=$_smarty_tpl->tpl_vars['i']->value){?>
						<option><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
					<?php }?>
				<?php }} ?>
			</select>
		</span>
	</div>
</div>



	<div class="control-group">
		<label for="Title" class="control-label">Trailer Url(Code Only)</label>
		<div class="controls">
			<input type="text" name="movie_trailer_url"  value="<?php echo $_smarty_tpl->tpl_vars['r']->value['movie_trailer_url'];?>
" data-rule-required="true">
			<span for="movie_trailer_url" class="help-block error valid" style="display: none;"></span>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Big Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
uploads/big/<?php echo $_smarty_tpl->tpl_vars['r']->value['movie_big_image'];?>
" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span>
					<span class="fileupload-exists">Change</span><input type="file" name='movie_big_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>

			</div>
		</div>
	</div>

	<div class="control-group">
		<label for="textfield" class="control-label"> Movie Small Image</label>
		<div class="controls">
			<div class="fileupload fileupload-new" data-provides="fileupload">
				<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
					<img src="<?php echo $_smarty_tpl->tpl_vars['asset_base_url']->value;?>
uploads/small/<?php echo $_smarty_tpl->tpl_vars['r']->value['movie_small_image'];?>
" /></div>
				<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px;
					 line-height: 20px;"></div>
				<div>
					<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">
							Change</span><input type="file" name='movie_small_image' /></span>
					<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
				</div>
			</div>
		</div>
	</div>


	<div class="control-group">
		<label for="text" class="control-label">Synopsis</label>
		<div class="controls">
			<textarea name="movie_synopsis" id="tt333"  rows="4" placeholder="You can provide additional information in here..."><?php echo $_smarty_tpl->tpl_vars['r']->value['movie_synopsis'];?>
</textarea>
		</div>
	</div>
</div>

<div class="control-group">
	<label for="text" class="control-label">Store Visibility</label>
	<div class="controls">
			   <select name="movie_is_active" id="select">
				   <option><?php echo $_smarty_tpl->tpl_vars['r']->value['movie_is_active'];?>
</option>
				   <option><?php if ($_smarty_tpl->tpl_vars['r']->value['movie_is_active']=='Yes'){?>No<?php }else{ ?>Yes<?php }?></option>
			   </select>
	</div>
</div>
<div class="control-group">
	<label for="text" class="control-label">Feature Movie</label>

	<div class="controls">
		<label class="checkbox"><input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['r']->value['movie_is_featured']=='Yes'){?>checked<?php }?> name="movie_is_featured"
		value="Yes" data-rule-required="false"> Feature this movie</label>
	</div>
</div>
</div>
<div class="form-actions" class="modal-footer">
	<input type="submit" class="btn btn-primary modal-footer" value="Update Movie">
</div>
</form>


</div>
	<!--------------------------------------------------------------->

</td>
<td><?php echo $_smarty_tpl->tpl_vars['r']->value['created'];?>
</td>
</tr>
<?php } ?>
		</tbody>
		</table>
	</div>
</div>
</div>
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></div>
</body>

</html>

<?php }} ?>