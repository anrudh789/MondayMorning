<?php $base_url=base_url().'assets/';
$imgpath=base_url().'upload/'?>
        <div id="main">
<section class="main-title-section-wrapper">
	<div class="container">
		<div class="main-title-section">
	<h1>Blog </h1>
	
	</div>
	<div class="header-search"> 
	</div>	</div>
</section> 
		
   	<div class="container">
   	
	<!-- ** Primary Section ** -->
	<section id="primary" class="content-full-width">
<div id="post-525" class="post-525 page type-page status-publish hentry">
<div class="social-bookmark"></div>
<div class="social-share"></div>	
</div>


		<div class="dt-sc-clear"></div>

		
		<div class='tpl-blog-holder  '>
				<div class=" column blog-thumb first">
					
					<article id="post-486" class="blog-entry post-486 post type-post status-publish format-image has-post-thumbnail sticky hentry
					category-post-format-audio category-photoshop tag-creative tag-design tag-news-2 post_format-post-format-image">
						<div class="blog-entry-inner">
<?php foreach($blog as $blogt){?>
							<div class="entry-thumb">
								
					        <a href="" title="A Day in the Life of a Class 10 Student">
                            <img src='<?php echo $imgpath.$blogt['b_image']?>' width='420' height='295' />
						 </a>
  	                       
								 							</div>

							<div class="entry-details">

																	
								                                
                                <div class="entry-meta">
                                    <div class="date  ">
                                        <?php echo date('j F',strtotime($blogt['date']));?>                                 </div>
               <a href="" title="Monday Morning Blog-1" class="entry_format"> </a>
                                </div>

								<div class="entry-title">
									<h4>
							<a href="<?php echo base_url()?>blog-detail/<?php echo $blogt['bid']?>" title=" <?php echo $blogt['title']?> "> <?php echo $blogt['title']?> </a>
									</h4>
								</div>

								<div class="entry-metadata">

									<p class="author ">
										<i class="fa fa-user"> </i>
										<a href="" title="View all posts by"><?php echo $blogt['created_by']?></a>
									</p>
									<span class=""> | </span>

									<p class='tags tags'>
										<i class='fa fa-tags'> </i>
		<a href="" rel="tag"><?php echo $blogt['b_category']?></a>
		</p> <span class='tags'> | </span>
								

								</div><!--  .entry-metadata -->
                                
				<div class="entry-details-desc"><p style="text-align: justify"><?php echo substr($blogt['description'],0,300).'...'?></p></div>
								 
							</div>
<?php } ?>
						</div>
					</article>
					
				</div>

		

			
			

        </div><!-- .tpl-blog-holder  -->

		<!-- **Pagination** -->
		<!--<div class="pagination">-->
		<!--	<div class="prev-post"></div>-->
		<!--	<ul class=''><li class='active-page'>1</li><li>-->
		<!--	<a href='' class='inactive'>2</a></li>-->
		<!--	<li><a href='' class='inactive'>3</a></li></ul>-->
		<!--	<div class="next-post"><a href="" >Next <span class="fa fa-angle-double-right"></span></a>-->
		<!--	</div>-->
		<!--</div>-->
	</section>
		</div>
            </div>

