<div id="main">

    <section class="main-title-section-wrapper">
        <div class="container">
            <div class="main-title-section">
                <h1>FAQ's</h1>
                <div class="breadcrumb">
                   
                </div>
                <!-- ** breadcrumb - End -->
            </div>
           
        </div>
    </section>
	
	
	 <!-- ** Primary Section ** -->
    <section id="primary" class="content-full-width">
        <!-- #post-4238 -->
        <div id="post-4238" class="post-4238 page type-page status-publish hentry">
            <div class='fullwidth-section  '>
                <div class="container">
                    
					<div class="column dt-sc-one-full ">
<div class="dt-sc-toggle-frame-set ">
	<?php $no=0; foreach($faq as $faqd){ $no++;if($no==1){ $class="active"; $dis="display:block";}else{ $dis="display:none";}?>
	<h5 class="dt-sc-toggle-accordion"><a href="#"><?php echo $faqd['que']?></a></h5>
<div class="dt-sc-toggle-content  <?php  echo $class?>" style="<?php echo $dis?>">
	<div class="block"><?php echo $faqd['ans']?></div>
</div>
<?php } ?>


</div>
					</div>
				</div></div></div></section>
</div>