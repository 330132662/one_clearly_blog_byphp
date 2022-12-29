<?php include('post-safe.php');?><article class="post">
	  <h1 class="title">{$article.Title}</h1>
		<div class="entry">
		  {$article.Content}
		</div>
		{if !$article.IsLock}
		{template:comments}   
	  {/if}
</article>