<style type="text/css">
  #exzoom{
      margin-top: 1%;
      width: 100%;
      border: 1px solid white;
      border-radius: 3px;
      /*height: 200px;*/
    }
.up_box{
  display: grid;
  grid-template-columns:repeat(auto-fill,minmax(230px,1fr));
  grid-gap: 10px;
  margin-top: 2%;
  margin-left: 2%;
}
.product_des{
    grid-column: span 2;
    background: white;
    
    padding: 1% 3% 0% 3%;
    text-align: justify;
    font-size: 14px;
    line-height: 23px;
    font-family: arial;
    font-weight: 500;
    border: 2px solid #ffffff;
    border-radius: 4px;
    /* box-shadow: 0px 0px 20px 2px rgba(209, 196, 196, 0.6); */
}
.exzoom{
  grid-column: span 2;
}
.pro_buy
{
  grid-column: span 1;
  margin-left: 10%;
  margin-top: 20%;
    background: whitesmoke;
    height: 247px;
    border: 3px solid black;
}
.exzoom_img_ul li img
{
  width: 100%;
}
</style>
<div class="box">
<div class="up_box">
<!-- for show the product with zoomable view -->

<div class="exzoom" id="exzoom">
  <!-- Images -->
  <div class="exzoom_img_box">
    <ul class='exzoom_img_ul'>
      <li><img src="other/a767a017-f4e4-44f7-8e18-f6e4cbfe56ec_salewa.jpg" width="300" ></li>
      <li><img src="other/a767a017-f4e4-44f7-8e18-f6e4cbfe56ec_salewa.jpg" width="300"></li>
      <li><img src="other/a767a017-f4e4-44f7-8e18-f6e4cbfe56ec_salewa.jpg" width="300"></li>
      <li><img src="other/a767a017-f4e4-44f7-8e18-f6e4cbfe56ec_salewa.jpg" width="300"></li>
      <li><img src="other/a767a017-f4e4-44f7-8e18-f6e4cbfe56ec_salewa.jpg" width="300"></li>
    </ul>
  </div>
  <!-- <a href="https://www.jqueryscript.net/tags.php?/Thumbnail/">Thumbnail</a> Nav-->
  <div class="exzoom_nav"></div>
  <!-- Nav Buttons -->
<!--   <p class="exzoom_btn">
      <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
      <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
  </p> -->
</div>
<!-- end of zoomable product -->
 <div class="product_des">
  <div style="font-size: 30px; margin-bottom: 6px;font-family: arial;">Product Name</div>
  by <b>company name</b> <br>
  <hr>
  Price:750 ৳ <br>
  In Stock <br>
  <hr>
  Product Information:<br>
   Generating random paragraphs can be an excellent way for writers to get their creative flow going at the beginning of the day. The writer has no idea what topic the random paragraph will be about when it appears. This forces the writer to use creativity to complete one of three common writing challenges. The writer can use the paragraph as the first one of a short story and build upon it. A second option is to use the random paragraph somewhere in a short story they create. The third option is to have the random paragraph be the ending paragraph in a short story. No matter which of these challenges is undertaken, the writer is forced to use creativity to incorporate the paragraph into their writing.
 </div>
 <div class="pro_buy">
  price
   <div class="price" style=" height: 80px;
    font-size: 39px;
    text-align: center;
    color: #102514;
    font-weight: 600;">750৳</div>
    <div>color:<select>
      <option>Black</option>
       <option>Blue</option>
    </select></div>
   <button>Add To Chart</button>
   <button>Order Now</button>
 </div>
</div>
</div>