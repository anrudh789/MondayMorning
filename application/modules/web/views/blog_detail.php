<?php $base_url=base_url().'assets/';
$imgpath=base_url().'upload/'?>
    <div id="main">

        <section class="main-title-section-wrapper">
            <div class="container">
                <div class="main-title-section">
                    <h1>Monday Morning Blog</h1>
                  
                </div>
                
            </div>
        </section>
        <!-- ** Breadcrumb Section End ** -->
        <!-- Sub Title Section -->

        <!-- ** Container ** -->
        <div class="container">

            <section id="secondary-left" class="secondary-sidebar secondary-has-left-sidebar">
                
                <aside id="categories-5" class="widget widget_categories">
                    <h3 class="widgettitle">Blog Categories<span></span></h3>
                    <ul>
                        <li class="cat-item cat-item-14"><a href="">MM Blog 1</a>
                        </li>
                        <li class="cat-item cat-item-21"><a href="">MM Blog 2</a>
                        </li>
                        <li class="cat-item cat-item-9"><a href="">MM Blog 3</a>
                        </li>
                        <li class="cat-item cat-item-2"><a href="">MM Blog 4</a>
                        </li>
                        <li class="cat-item cat-item-3"><a href="">MM Blog 5</a>
                        </li>
                        <li class="cat-item cat-item-5"><a href="">MM Blog 6</a>
                        </li>
                        <li class="cat-item cat-item-4"><a href="">MM Blog 7</a>
                        </li>
                    </ul>
                </aside>
               
              
            </section>
            <!-- ** Primary Section ** -->
            <section id="primary" class="page-with-sidebar with-left-sidebar">
                <!--#post-486 starts -->
                <article id="post-486" class="blog-entry blog-single-entry post-486 post type-post status-publish format-image has-post-thumbnail hentry category-post-format-audio category-photoshop tag-creative tag-design tag-news-2 post_format-post-format-image">
                    <div class="blog-entry-inner">

                        <div class="entry-thumb">
                            <a href="" title="Monday Morning Blog-1">
                                <img src="<?php echo $imgpath.$blog_detail[0]['b_image']?>" style="width: 100%; height: 369px;"
									 class="attachment-full size-full wp-post-image" alt="Monday Morning Blog-1" /> </a>
									
									
                        </div>

                        <div class="entry-details">

                           

                            <div class="entry-meta">
                                <div class="date ">
                                   <?php echo date('j F',strtotime($blog_detail[0]['date']));?>   </div>
                                <a href="" title="Monday Morning Blog-1" class="entry_format"> </a>
                            </div>

                            <div class="entry-title">
                                <h4><a href="" title="Monday Morning Blog-1"><?php echo $blog_detail[0]['title']?></a></h4>
                            </div>

                            <div class="entry-metadata">
                                <p class="author ">
                                    <i class="fa fa-user"> </i>
                                    <a href="" title="View all posts by "><?php echo $blog_detail[0]['created_by']?></a>
                                </p>

                                <span class=""> | </span>

                                <p class='tags tags'><i class='fa fa-tags'> </i><a href="" rel="tag"><?php echo $blog_detail[0]['b_category']?></a>,
								 </span>
                               
                                
                            </div>
                            <!-- .entry-metadata -->

                        </div>
                        <!-- .entry-details -->

                        <div class="entry-body">
                            <p style="text-align: justify"><?php echo $blog_detail[0]['description']?> 
                                <br />
                                <div class='dt-sc-hr-invisible-small  '>
									
								</div>
                            
                                <div class="social-bookmark"></div>
                                <div class="social-share">
                                    <ul class='social-share-icons'>
                                        <li>
                                            <a href=''>
                                                <img src='http://wedesignthemes.com/themes/lms/wp-content/themes/lms/images/sociable/share/stumbleupon.png'
													 alt='Monday Morning Blog' /></a>
                                        </li>
                                        <li>
                                            <a href=''>
                                                <img src='http://wedesignthemes.com/themes/lms/wp-content/themes/lms/images/sociable/share/twitter.png'
													 alt='twitter' /></a>
                                        </li>
                                        
                                        <li>
                                            <a href='' title='Share on LinkedIn'>
                                                <img src='http://wedesignthemes.com/themes/lms/wp-content/themes/lms/images/sociable/share/linkedin.png'
													 alt='linkedin' /></a>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                        <!-- .entry-body -->

                    </div>
                </article>
               
            </section>
            <!-- ** Primary Section End ** -->
        </div>
        <!-- **Container - End** -->
    </div>
    <!-- **Main - End** -->