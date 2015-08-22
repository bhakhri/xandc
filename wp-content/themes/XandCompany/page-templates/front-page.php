<?php
/**
 * Template Name: Front Page Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div class="full-container">
			<div class="entry-content">
				<div id="panel-1"class="panel-class">
					<div class="panel-grid-1">
						<div class="panel-row-style">
							<div class="panel-grid-cell-1">
								<div class="eduform">
									<div class="formheader">
										Complete the form below to <span>compare schools</span> now!
									</div>
					<form id="msform"  method="post" action="<?php echo get_permalink(77); ?>" >

<!-- fieldsets -->					 <?php	$taxonomy = 'study-area'; ?>
									<?php $args = array('orderby' => 'name');?>
									<?php $terms = get_terms( $taxonomy, $args ); ?>
										<fieldset>
										<h2 class="fs-title">Search for Schools</h2>
										<label>What is Your Area of Interest?</label>
										<select id="interest" class="edufield" name="interest">
										<option selected="" value="">Choose one...</option>
										<?php  if ($terms) { foreach($terms as $term) { ?>
										<option value="<?php echo $term->term_id.'|'.$term->name;?>"><?php  echo $term->name;?></option>
										<?php  } }?>
										</select>

										<label>What is your highest level of education?</label>
										<select id="edulevel" class="edufield" name="edulevel">
										<option selected="" value="">Choose one...</option>
										<option value="NO Education">No Education or Diploma</option>
										<option value="HS">High School Diploma/GED</option>
										<option value="COLLEGE_1YR">1 Year of College (0-23 Credits)</option>
										<option value="COLLEGE_2YR">2 Years of College (24-47 Credits)</option>
										<option value="COLLEGE_3YR">3+ Years of College (48+ Credits)</option>
										<option value="BACHELORS">Earned Bachelor's Degree</option>
										<option value="MASTERS">Earned Master's Degree</option>
										</select>
										<input class="next action-button" type="button" value="Next" name="next">
										</fieldset>

										<fieldset>
										<h2 class="fs-title">Contact Information</h2>
										<input id="fname" type="text" placeholder="First Name" name="firstname">
										<input id="lname" type="text" placeholder="Last Name" name="lastname">
										<input id="address" type="text" placeholder="Street Address" name="address">
										<input id="city" type="text" placeholder="City" name="city">
										<select id="state" name="state">
										<option value="">State</option>
										<option value="AL">Alabama</option>
										<option value="AK">Alaska</option>
										<option value="AZ">Arizona</option>
										<option value="AR">Arkansas</option>
										<option value="CA">California</option>
										<option value="CO">Colorado</option>
										<option value="CT">Connecticut</option>
										<option value="DE">Delaware</option>
										<option value="DC">District of Columbia</option>
										<option value="FL">Florida</option>
										<option value="GA">Georgia</option>
										<option value="HI">Hawaii</option>
										<option value="ID">Idaho</option>
										<option value="IL">Illinois</option>
										<option value="IN">Indiana</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
										<option value="LA">Louisiana</option>
										<option value="ME">Maine</option>
										<option value="MD">Maryland</option>
										<option value="MA">Massachusetts</option>
										<option value="MI">Michigan</option>
										<option value="MN">Minnesota</option>
										<option value="MS">Mississippi</option>
										<option value="MO">Missouri</option>
										<option value="MT">Montana</option>
										<option value="NE">Nebraska</option>
										<option value="NV">Nevada</option>
										<option value="NH">New Hampshire</option>
										<option value="NJ">New Jersey</option>
										<option value="NM">New Mexico</option>
										<option value="NY">New York</option>
										<option value="NC">North Carolina</option>
										<option value="ND">North Dakota</option>
										<option value="OH">Ohio</option>
										<option value="OK">Oklahoma</option>
										<option value="OR">Oregon</option>
										<option value="PA">Pennsylvania</option>
										<option value="RI">Rhode Island</option>
										<option value="SC">South Carolina</option>
										<option value="SD">South Dakota</option>
										<option value="TN">Tennessee</option>
										<option value="TX">Texas</option>
										<option value="UT">Utah</option>
										<option value="VT">Vermont</option>
										<option value="VA">Virginia</option>
										<option value="WA">Washington</option>
										<option value="WV">West Virginia</option>
										<option value="WI">Wisconsin</option>
										<option value="WY">Wyoming</option>
										</select>
										<input id="zipcode" type="text" placeholder="Zip Code" name="zip">
										<input id="emailaddress" type="text" placeholder="Email Address" name="email">
										<input  id="pnumber" type="text" placeholder="Phone Number" name="phone1">
										<input class="previous action-button" type="button" value="Previous" name="previous">
										<input class="next1 action-button" type="button" value="Next" name="next">
										</fieldset>
										<fieldset>
										<h2 class="fs-title">Preferred Method of Study</h2>
										<label>Preferred Method of Study</label>
										<select id="methodofstudy" class="edufield" name="methodofstudy">
										<option selected="" value="">Choose one...</option>
										<option value="campus">Campus</option>
										<option value="online">Online</option>
										<option value="both">Campus and Online</option>
										</select>
										<label>Year you graduated High School</label>
										<select id="gradyear" class="edufield" name="gradyear">
										<?php
											if($year == '') {
												echo '<option value="" selected="selected">Choose one...</option>';
											} else {
												echo '<option value="">Choose one...</option>';
											}
											for($year = intval(date('Y')); $year >= 1950; $year --) {
												if($year == $birthdayYear) {
													echo '<option value="'.$year.'" selected="selected">'.$year.'</option>';
												} else {
													echo '<option value="'.$year.'">'.$year.'</option>';
												}
											}
										?>
										</select>
										<label>When would like to start school?</label>
										<select id="startdate" class="edufield" name="startdate">
										<option selected="" value="">Choose one...</option>
										<option value="3-6months">3-6 Months</option>
										<option value="6m-1y">6 Months - 1 Year</option>
										<option value="under1month">Under 1 Month</option>
										<option value="1-3months">1-3 Months</option>
										</select>
										<input class="previous action-button" type="button" value="Previous" name="previous">
										<input class="submit action-button" type="submit" value="Submit" name="submit">
										</fieldset>
										</form>



								</div>
							</div>
						</div>
					</div>
					<div class="panel-grid-2">
						<div class="panel-grid-cell-2">
							<div class="text-center">FEATURED SCHOOLS</div>
						</div>
					</div><div class="custom-container auto">
					<div class="panel-grid-3">
					
						<div class="panel-grid-cell-3">
						
						
                         <?php query_posts(array('post_type'=>'collegelogo', 'showposts' => -1,'order'=>'asc')); ?>
                          <div class="owl-carousel">
        					<?php if (have_posts()) : while (have_posts()) : the_post();?>
                            <?php if ( has_post_thumbnail()) : ?>
        						 <div class="owl-item"><?php the_post_thumbnail('collegelogo-thumb'); ?></div>
							<?php endif; ?>
                            <?php endwhile; ?></div><?php endif; wp_reset_query();?>
						</div></div>
					</div>
					<div class="panel-grid-4">
						<div class="panel-grid-cell-2">
							<div class="text-center">EDUCATION RESOURCE CENTER</div>
						</div>
						<div class="panel-grid-cell-4">
						
                        <?php 
						$attachment_id = get_field('video_id');
						$video =  $attachment_id['url'] ;
						?>
							<div class="vedio-section">
							<video width="100%" height="550px" controls >
							  <source src="<?php echo $video;?>" type="video/mp4">
							</video>
								</div>
						</div>
					</div>
					<div class="panel-grid-5">
						<div class="panel-grid-cell-5">
							<h2>Research Colleges For You</h2>
							<?php the_content();?>
						</div>
					</div>
					<div class="panel-grid-6">
						<div class="panel-grid-cell-5">
							<div class="feature-container">
								<div class="feature-container-row">
                                <?php query_posts(array('post_type'=>'blog', 'showposts' => -1,'order'=>'desc')); ?>
                                <?php if (have_posts()) : while (have_posts()) : the_post();?>
									<div class="feature-container-one">
										<div class="cirle-icon">
											<a href="<?php the_permalink();?>"><?php the_post_thumbnail('resourcecenter-thumb'); ?></a>
										</div>
										<div class="feature-content">
										<a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
                                        <p><?php // echo the_excerpt();?>
										<?php echo wp_trim_words( get_the_content(), 30, '...' );?></p>
										
										<a href="<?php the_permalink();?>">Read More</a>
										</div>
									</div>
                                    <?php endwhile; endif; wp_reset_query();?>
								</div>	
							</div>
						</div>
					</div>
					<div class="panel-grid-2">
						<div class="panel-grid-cell-2">
							<div class="text-center">Deciding Which School is Right For You</div>
						</div>
					</div>
					<div class="panel-grid-7">
						<div class="panel-grid-cell-5">
							<div class="faq-title">
								<h2> Discovering your path is no easy task. Here are five key steps to help you successfully enroll in the right school. </h2>
							</div>
							<div class="faq-content">
                            <?php $count=1?>
                            <?php query_posts(array('post_type'=>'faq', 'showposts' => -1,'order'=>'desc')); ?>
                                
								<ul class="faq-text-title">
                                <?php if (have_posts()) : while (have_posts()) : the_post();?>
									<li>
										<h2><span>step-<?php echo $count++;?>:&nbsp;</span><?php the_title();?></h2> 
										<?php the_content();?>
									</li>
                                    <?php endwhile;?></ul><?php endif; wp_reset_query();?>
									
							</div>
						</div>
					</div>
					<div class="panel-grid-8">
						<div class="panel-grid-cell-8">
							<div class="free-content">
								<div class="freeEduGuideHeading"><?php echo get_field('free_guide_heading');?></div>
								<div class="freeEduGuideContent"><?php echo get_field('free_guide_content');?></div>
							</div>
							
						</div>
						<div class="newsletter-box">
								<div class="eduguide">Sign Up for Your FREE 2015 Education Guide!
									<form  id="mc-embedded-subscribe-form" action="" method="post">
										<?php echo do_shortcode('[mc4wp_form]');?>
									</form>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>

<?php get_footer(); ?>
