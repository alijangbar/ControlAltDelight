<form action="/" method="get">
	<fieldset>
		<label for="search">Search in <?php echo home_url( '/' ); ?></label>
		<input type="text" class="form-control" name="s" id="search" value="<?php the_search_query(); ?>" />
		<span class="input-group-btn">
                                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                            </span>
	</fieldset>
</form>