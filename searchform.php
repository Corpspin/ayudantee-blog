<form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="navbar-form navbar-left">
	<div class="form-group">
		<div class="input-group input-group-sm">
		    <input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" class="input-xs form-control" placeholder="Buscar...">
		    <span class="input-group-btn">
				<button class="btn btn-secondary" type="submit" id="searchsubmit" value="Search">
					<i class="fa fa-search fa-fw"></i>
				</button>
		    </span>
		</div>
	</div>
</form>