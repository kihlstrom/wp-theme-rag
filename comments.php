<div id="comments">

<div id="comment-devider-bar">
<strong><?php comments_number( 'No comments ','1 comment','% comments'); ?> </strong>
</div>


<ol id="commentlist">
<?php  get_comments(get_the_ID()); 
$commentCounterNr = 1;
//To be able to make our own html	
foreach($comments as $comment) : ?>
<li id="<?php echo 'coment-id-'.$comment->comment_ID  ?>">
<span class="comment-nr"><?php echo $commentCounterNr; ?></span><cite class="comment-author">
<?php 
if($comment->comment_author_url != ''){
	echo '<a href="'.$comment->comment_author_url.'">'.$comment->comment_author.'</a>';
}else{
	echo $comment->comment_author; 
}
?>
</cite><span class="date"><?php echo date('d M `y',strtotime($comment->comment_date)) ?></span>
<div class="comment-body">
<p>
<?php echo $comment->comment_content  ?>
</p>
</div>
</li>
<?php $commentCounterNr ++;  endforeach;	?>
</ol>
		
<div id="leav-a-comment">
<strong>Whant to leav a comment?</strong>
<p>We love comments but remember to play nice, even if you are allowed to have an opinion just as much as we do we won’t tolerate to much nasty words or any kind of personal abuse if we detect any such thing we will send your comment to the Norte pole and have it eaten by polar bears. </p>
</div>
<?php //Broke out comment form to simplyfi html editing ?>
<div id="comment-form">
<form action="<?php bloginfo('url'); ?>/wp-comments-post.php" method="post" id="commentform">

<input class="comment-form-oneline-feild" id="comment-form-author" value="Name" name="author" type="text" value="" />
<input class="comment-form-oneline-feild" id="comment-form-email" value="Email" name="email" type="text" value=""   />
<input class="comment-form-oneline-feild" id="comment-form-url" value="Url to your site" name="url" type="text" value=""/>
<textarea  id="comment-form-textarea" name="comment" cols="25" rows="8" >Your comment</textarea>
<div id="comment-form-submit-preveiw-btn">
<input name="submit" type="submit" id="comment-form-submit" value="Submit" />
</div>
<input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID(); ?>"/>
<input type="hidden" name="comment_parent"  value="0" />

</form>
</div>

</div>




