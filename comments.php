<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>
				
				<p class="nocomments">This post is password protected. Enter the password to view comments.<p>
				
				<?php
				return;
            }
        }
		/* This variable is for alternating comment background */
		$oddcomment = 'alt';
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
<h3 id="comments"><?php comments_number('Sin Respuesta', '1 Respuesta', '% Respuestas' );?></h3> 

<ol class="commentlist">
	<?php foreach ($comments as $comment) : ?>
	<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
		<cite><?php comment_author_link() ?></cite> dice:
		<?php if ($comment->comment_approved == '0') : ?>
		<em>Tu comentario está esperando moderación.</em>
		<?php endif; ?>

		<br>
		<small class="commentmetadata"><?php comment_date('F jS, Y') ?> at <?php comment_time() ?></small>

		<?php comment_text() ?>
	</li>

	<?php /* Changes every other comment to a different class */	
		if ('alt' == $oddcomment) $oddcomment = '';
		else $oddcomment = 'alt';
	?>

	<?php endforeach; /* end for each comment */ ?>
</ol>

<?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) : ?> 
		<!-- If comments are open, but there are no comments. -->
		
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Los comentarios han sido cerrados.</p>
	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<h3 id="respond">Deja un comentario</h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<div class="well m30bottom">
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
	<?php if ( $user_ID ) : ?>
		<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>

		<?php else : ?>

		<div class="form-group">
		    <label for="author">Nombre <?php if ($req) echo "(requerido)"; ?></label>
		    <input type="text" class="form-control" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
		</div>

		<div class="form-group">
		    <label for="email">Mail (No será publicado) <?php if ($req) echo "(requerido)"; ?></label>
		    <input type="text" class="form-control" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
		</div>

		<div class="form-group">
		    <label for="url">Website</label>
		    <input type="text" class="form-control" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
		</div>

		<?php endif; ?>

		<div class="form-group">
		    <label for="url">Comentario</label>
		    <textarea name="comment" class="form-control" id="comment" rows="4" tabindex="4"></textarea>
		</div>

		<div class="form-group m30top">
		    <input class="btn btn-secondary" name="submit" type="submit" id="submit" tabindex="5" value="Enviar comentario" />
			<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
		</div>
		
		<?php do_action('comment_form', $post->ID); ?>
	</form>
</div>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>