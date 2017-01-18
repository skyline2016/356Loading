<html>
<head>

	<style>
	#main {
	    background-color: #fff;
	    padding:20px 0;
	}

	.img-style{
			length: 70%;
			width: 70%;
	}


	#content #left, /*#content #right*/ {
	    border: 1px solid #E9E9E9;
	    float: left;
	    margin: 2%;
	    width: 90%;
	}

/*
	#content #right {
    margin-right: 0;
    width: 30%;
}
*/
#content h3 {
    background: -moz-linear-gradient(#ffffff, #F6F6F6); /* FF 3.6+ */
    background: -ms-linear-gradient(#ffffff, #F6F6F6); /* IE10 */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffffff), color-stop(100%, #F6F6F6)); /* Safari 4+, Chrome 2+ */
    background: -webkit-linear-gradient(#ffffff, #F6F6F6); /* Safari 5.1+, Chrome 10+ */
    background: -o-linear-gradient(#ffffff, #F6F6F6); /* Opera 11.10 */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#F6F6F6'); /* IE6 & IE7 */
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#F6F6F6')"; /* IE8+ */
    background: linear-gradient(#ffffff, #F6F6F6); /* the standard */

    border-bottom: 1px solid #E0E0E0;
    color: #3C3C3C;
    font-size: 12px;
    font-weight: bold;
    line-height: 15px;
    padding: 11px 0 12px 20px;
    text-transform: uppercase;
}

#content ul {
    list-style:none outside none;
    margin:0;
    padding:0;
}

#content #left ul li {
    float:left;
    padding-bottom: 21px;
    width: 33%;
}

/*
#content #right ul li {
    border-top: 1px solid #E7E7E7;
    overflow: hidden;
}


#content #right ul li:hover {
    background-color: #fbfbfb;
}

#content #right ul li:first-child {
    border-width: none;
}
*/
#content #left ul li .img {
    text-align: center;
}


/*
#content #right ul li .img {
    background-color: #FFFFFF;
    float: left;
    height: 94px;
    text-align: center;
    width: 113px;
}

#content #right ul li .img img {
    height:70px;
    margin-top: 11px;
    width:70px;
}
*/

#content #left ul li .info {
    padding: 17px 20px 0 19px;
}

/*
#content #right ul li .info {
    float: left;
    overflow: hidden;
    padding: 17px 0 0 21px;
    width: 164px;
}
*/

#content ul li .info .title {
    color: #4B4B4B;
    display: inline-block;
    font-size: 11px;
    font-weight: bold;
    line-height: 16px;
    text-decoration: none;
    text-transform: uppercase;
    width: 150px;
}

/*
#content ul li .info .title:hover {
    color: #049733;
}
*/

#content #left ul li .info p {
    color: #7F7F7F;
    font-size: 11px;
    line-height: 16px;
    padding-top: 3px;
}

#content #left ul li .info .price {
    background: none repeat scroll 0 0 #F7F7F7;
    color: #383838;
    font-size: 12px;
    font-weight: bold;
    line-height: 16px;
    margin: 17px 0 10px;
    padding: 6px 0 6px 8px;
}

#content #right ul li .info .price {
    color: #383838;
    font-size: 12px;
    font-weight: bold;
    line-height: 16px;
    padding-top: 25px;
}

#content #left ul li .info .price .st {
    color: #7F7F7F;
    font-size: 11px;
    line-height: 16px;
    margin-right: 3px;
}

/*
#content #right ul li .info .price .usual, #content #right ul li .info .price .special {
    color: #7F7F7F;
    font-size: 12px;
    font-weight: normal;
    line-height: 16px;
    padding-right: 6px;
    text-decoration: line-through;
}
*/

/*
#content #left ul li .info .actions {
    overflow:hidden;
}
*/

#content #left ul li .info .actions a {
    border: 1px solid none;
    color: black;
    display: block;
    float:right;
    font-size: 11px;
    font-weight: bold;
    line-height: 16px;
    padding: 5px;
    text-decoration: none;
}

#content #left ul li .info .actions a:first-child {
    color: #009832;
    float:left;
}

	</style>

</head>


<body>
	<div id="main"><!-- Defining submain content section -->
		<section id="content"><!-- Defining the content section #2 -->
			<div id="left">
				<h3>Our Design</h3>
				<ul>
					<li>
						<div class="img"><a href="#"><img class ="img-style" alt="" src="images/portfolio/01.jpg"></a></div>
						<div class="info">
							<a class="title" href="#">Product 1</a>
							<p>long description here 1</p>
							<div class="price">
								<span class="st">Price:</span><strong>$550.00</strong>
							</div>
							<div class="actions">
								<a href="#">Details</a>
								<a href="#">Add to cart</a>
							</div>
						</div>
					</li>
					<li>
						<div class="img"><a href="#"><img class ="img-style" alt="" src="images/portfolio/02.jpg"></a></div>
						<div class="info">
							<a class="title" href="#">Product 2</a>
							<p>long description here 2</p>
							<div class="price">
								<span class="st">Price:</span><strong>$250.00</strong>
							</div>
							<div class="actions">
								<a href="#">Details</a>
								<a href="#">Add to cart</a>
							</div>
						</div>
					</li>
					<li>
						<div class="img"><a href="#"><img class ="img-style" alt="" src="images/portfolio/03.jpg"></a></div>
						<div class="info">
							<a class="title" href="#">Product 3</a>
							<p>long description here 3</p>
							<div class="price">
								<span class="st">Price:</span><strong>$350.00</strong>
							</div>
							<div class="actions">
								<a href="#">Details</a>
								<a href="#">Add to cart</a>
							</div>
						</div>
					</li>
					<li>
						<div class="img"><a href="#"><img class ="img-style" alt="" src="images/portfolio/04.jpg"></a></div>
						<div class="info">
							<a class="title" href="#">Product 4</a>
							<p>long description here 1</p>
							<div class="price">
								<span class="st">Price:</span><strong>$550.00</strong>
							</div>
							<div class="actions">
								<a href="#">Details</a>
								<a href="#">Add to cart</a>
							</div>
						</div>
						</li>
						<li>
							<div class="img"><a href="#"><img class ="img-style" alt="" src="images/portfolio/05.jpg"></a></div>
							<div class="info">
								<a class="title" href="#">Product 5</a>
								<p>long description here 2</p>
								<div class="price">
									<span class="st">Price:</span><strong>$250.00</strong>
								</div>
								<div class="actions">
									<a href="#">Details</a>
									<a href="#">Add to cart</a>
								</div>
								</div>
						</li>
						<li>
							<div class="img"><a href="#"><img class ="img-style" alt="" src="images/portfolio/06.jpg"></a></div>
							<div class="info">
								<a class="title" href="#">Product 6</a>
								<p>long description here 3</p>
									<div class="price">
								<span class="st">Price:</span><strong>$350.00</strong>
									</div>
								<div class="actions">
									<a href="#">Details</a>
									<a href="#">Add to cart</a>
								</div>
							</div>
						</li>
								</ul>
								</div>

</section>
</div>

</body>
</html>
