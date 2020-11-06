<?php
/**
 * Template Name: Template Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();



?>
<div class="home-banner">
    <div class="container_front_home">
        <h1 class="title_front_home">
            Explore Our Menu
        </h1>
        <button class="btn_front_home"><a href="http://restaurant.local/menu/">View Menu <i class="fa fa-chevron-right" id="arrow"></i></a></button>
    </div>
</div>
<div class="address_holder">
    <h3 class="address">8450 Foster Ave. Lawrence, MA 01841</h3>
</div>
<div class="order_holder" id="order">
    <h2 class="order_title">Order Online</h2>
    <button class="top_order_button"><a href="#">Click Here to Order Now</a></button>
    <div class="order_btn_holder">
        <button class="postmates"><a href="#">postmates</a></button>
        <button class="doordash"><a href="#">doordash</a></button>
        <button class="grubhub"><a href="#">grubhub</a></button>
    </div>
</div>
<div class="about_holder">
    <h2 class="about_title">About Us</h2>
    <p class="about_content">Lorem ipsum dolor sit amet, consectetur adipiscing 
elit, sed do eiusmod tempor incididunt ut labore et dolore 
magna aliqua. Nibh praesent tristique magna sit amet. Blandit 
cursus risus at ultrices mi tempus imperdiet. Bibendum arcu vitae 
elementum curabitur. Curabitur vitae nunc sed velit. Sed 
viverra tellus in hac. Iaculis at erat pellentesque adipiscing. A diam 
maecenas sed enim ut sem viverra. Quisque egestas diam in arcu. 
Arcu bibendum at varius vel pharetra vel. Quisque non tellus orci ac a
uctor augue mauris augue neque. Arcu dictum varius duis at 
consectetur lorem donec massa.</p>
<button class="about_button"><a href="#">Read More</a></button>
</div>
<div class="res_holder" id="res">
    <h2 class="res_title">reservations</h2>
    <p class="res_info">Call us at (555)-555-5555 or book a table here:</p>
    <div class="res_dropdown_holder">
        <div class="btn-group">
            <button type="button" class="btn dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="date_btn">
            Date
            </button>
            <div class="dropdown-menu dropdown-menu-right">
               
            </div>
        </div>
        <div class="btn-group">
            <button type="button" class="btn dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="time_btn">
            Time
            </button>
            <div class="dropdown-menu dropdown-menu-right">
               
            </div>
        </div>
        <div class="btn-group">
            <button type="button" class="btn dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="ps_btn">
            Party Size
            </button>
            <div class="dropdown-menu dropdown-menu-right">
               
            </div>
        </div>
        <button class="reserve_now"><a href="">Reserve Now</a></button>
    </div>
</div>
<div class="gallery_holder">
    <div class="carousel-item active" id="item_1"></div>
    <div class="carousel-item"></div>
    <div class="carousel-item"></div>
</div>
<div class="reviews_holder">
    <h2 class="reviews_title">Reviews</h2>
    <p class="reviews_content">This place was really cool. Got a great family/friendly vibe run by wonderful staff. WE didn't wait long and were served quickly. The chicken is very southern and enjoyable. With some delicious side dishes, beer and sweet tea, you can have a decent meal and a decent price. Worth a trip if you are in the area. </p>
 <h4 class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></h4>
 <p class="reviews_name"> -- Megan Curtis</p>
</div>

<?php
get_footer();