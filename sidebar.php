<div class="sidebar">
	<h2><span>Categories</span></h2>
	<div id="list-categorys" class="sidebar-part">
		<ul>
		<?php 
		$categories = get_the_category();
		$cat_list = '';
		if($categories){
			foreach($categories as $category) {
				$cat_list .= '<li><a href="#"><strong>'.$category->name.'</strong><span class="nummber-post-in-category">'.$category->count.'</span><p>'.$category->description.'</p></a></li>';
			}
		}
		echo $cat_list;
		?>			
		</ul>
	</div>
	
	

</div>