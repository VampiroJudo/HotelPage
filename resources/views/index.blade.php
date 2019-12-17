<body">
  <div class="property_block">
    <div class="picture_block">
      <div class="rw">
        <img align="left" src="../images/sunsetkeycottages.jpg" alt="" class=""> 
      </div>
      <div class="hotel_info"> 
  	    <ul style="list-style-type:none;">
          <li><span class="hotel_name" id="hotel_name">Sunset Key Guest Cottages&nbsp;<span class="vertical_line"></span><span class="stars" width="28" height="28">&nbsp;&nbsp;&#9733;&#9733;&#9733;&#9733;&#9733;</span></span></li>
          <li><span class="address" id="address">245 Front Street, Key West, USA</span></li>
          <li style="padding-top: 60px;">
		  	<span class="room_dropdown" id="room_dropdown">
  		      <button onclick="showRoomDropdown()" class="room_info_btn" id="room_info_btn">
    	  	  <div class="arrow_down" style="display: inline-table"></div> 
    	  	    Rooms / Availability
  		      </button>
			</span>
		  </li>
  	    </ul>
      </div>
    </div>
    <div id="rm_drop" class="room_dropdown_content">
	  <div class="row">
	  <hr/>
        <div class="column" id="room_type" style="text-transform:uppercase">Studio Suite City View</div>
        <div class="column2" id="availablity_type" style="text-transform:uppercase">On Request</div>
        <div class="column3"><div onclick="showRoomDetailsDropdown()" class="details_dropdown" id="details_dropdown" style="text-transform:uppercase">
		  <span class="arrow_details" style="display: inline-table"></span> Details</div></div>
        <div class="column4" id="price" style="text-transform:uppercase">593</div>
		<span class="column5" id="usd" style="text-transform:capitalize">USD per night</span>
		<button class="column6" id="request_btn" style="text-transform:uppercase">Request</button>
		<div id="request_modal" class="modal"><div class="modal_content">
		  <span class="close">&times;</span><p></p></div></div>
	    <hr />
	  </div>
	</div>
  </div>
  <div id="details_drop" class="details_dropdown_content">
    <div class="bed_row" id="bed_row">
      <button class="bedtype_king">King</button>
      <button class="bedtype_daybed">Daybed</button>
    </div>
    <div class="date_row">
	  <div class="current_date">Fri, Dec 9</div>
	  <div class="horizontal_line"></div>
	  <span class="date_row_price">593</span>	
	  <span class="detail_usd"> USD</span>
	</div>
	<div class="condition_row">
	  <div class="condition_column">
	    <div class="condition_title">Conditions and Offers:</div>
	    <div class="included"><span class="dot_one"></span> Meal Plan: Breakfast included</div>
	    <div class="cancellation_title">Cancellation Policy:</div>
	    <div class="cancellation_policy"><span class="dot_two"></span> Penalty of 1 booked night(s) when cancelling after Nov 25, 2016 04:00 PM</div>
	  </div>
	  <div class="detail_column">
	    <ul style="list-style-type:none;">
		  <li><div class="price_detail">Price: </div></li>
		  <li><div class="taxes_detail">Taxes 14%: </div></li>
		  <li><div class="fee_detail">Fees: 0.00 p/nt</div></li>
		  <li><div class="total_detail">Total: </div></li>
		</ul>
	  </div>
	  <div class="amounts_column">
	    <ul style="list-style-type:none;">
		  <li class="initial_amount">592.92</li>
		  <li class="tax_amount">83.01</li>
		  <li class="fee_pnt_amount">0.00 p/nt</li>
		  <li class="total_amount">675.93</li>
		</ul>
	  </div>
	  <div class="usd_column">
	    <ul style="list-style-type:none;">
		  <li class="price_usd">USD</li>
		  <li class="tax_usd">USD</li>
		  <li class="fee_usd">USD</li>
		  <li class="total_usd">USD</li>
		</ul>
	  </div>
	</div>
  </div>
</body>

<script>

// Opens Room Dropdown
  function showRoomDropdown() {
	document.getElementById("rm_drop").classList.toggle("show");
	document.getElementById("details_drop").classList.remove("show");
  };

//   Closes Room Dropdown by clicking anywhere
//   window.onclick = function(event) {
//     if (!event.target.matches('.room-info-btn')) {
//       var dropdowns = document.getElementsByClassName("room_dropdown_content");
//       var i;
//       for (i = 0; i < dropdowns.length; i++) {
//         var openDropdown = dropdowns[i];
//         if (openDropdown.classList.contains('show')) {
//           openDropdown.classList.remove('show');
//         }
//       }
//     }
//   }

  
  var modal = document.getElementById("request_modal");
  var btn = document.getElementById("request_btn");
  var span = document.getElementsByClassName("close")[0];

  btn.onclick = function() {
  	modal.style.display = "block";
  };

  span.onclick = function() {
    modal.style.display = "none";
  };

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };

// Opens Room Details Dropdown 
  function showRoomDetailsDropdown() {
    document.getElementById("details_drop").classList.toggle("show");	
  };

  

</script>

<style>

  body {
    background-color: #e5e5e5;
  }

  button:focus {
    outline:0;
  }

  .property_block {
	background-color: #fff;
	height: 247px;
	width: 100%;
	margin-bottom: 10px;
	border: 2px solid #dadada;
  }

  .picture_block {
	margin-top: 30px;
	margin-left: 30px;
	font-family: avenir;
  }

  /* .hotel-info {
   padding-top: 3px;
  } */

  .hotel_name {
	color: #1EACDF;
	font-size: 27px;
	padding-left: 30px;
  }

  .vertical_line { 
    border-left: 2px solid #ababab; 
	height: 35px; 
    position:absolute; 
  }

  .address {
	color: #ababab;
	padding-left: 30px;
	font-size: 21px;
  }

  .room_dropdown {
	padding-left: 30px; 
  }

  .room_info_btn {
    background-color: #ffa500;
    color: #fff;
    border-radius: 4px;
    padding: 11px 29px;
    font-size: 16px;
    cursor: pointer;
	position:absolute;
  }

  .arrow_down {
    width: 0; 
    height: 0; 
	padding-top: 3px;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid #fff;
  }

  .stars {
	color: #FF4500; 
	font-size: 20px; 
  }

 
  hr {
    width: 97%;
	color: #a2a2a2;
  }

  .room_dropdown_content {
    display: none;
    position: relative;
    background-color: #fff;
    width: 100%;
    overflow: auto;
    z-index: 1;
  }

  .room_dropdown_content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .details_dropdown_content {
    display: none;
    position: relative;
    background-color: #fff;
    width: 100%;
    overflow: auto;
    z-index: 1;
  }

  .details_dropdown_content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .show {
	display: block;
  }

  .row {
	padding-bottom: 30px;
  }

  .column {
    float: left;
    width: 30%;
  }

  .column2 {
    float: left;
    width: 10%;
	padding-left: 140px;
  }

  .column3 {
    float: left;
    width: 10%;
    padding-left: 30px;
    padding-right: 25px;
  }

  .column4 {
    float: left;
    width: 3%;
	padding-left: 5px;
  }

  .column5 {
    width: 10%;
	border: none;
	margin-top:3px;
  }

  .column6 {
    float: right;
    width: 10%;
    padding-right: 45px;
    border: none;
  }

  .condition_column {
    width: 50%;
	border: none;
  }

  .condition_row {
    color: #ababab;
    padding-top: 30px;
    padding-left: 25px;
  }

  .detail_column {
    /* float: right;
    margin-top: -125px;
    padding-right: 130px; */
  }
  
  .row:after {
    content: "";
    display: table;
     clear: both;
  }

  #room_type {
	margin-left: 19px;  
	font-family: avenir;
	color: #8a8a8a;
	font-size: 18px;
	font-weight: 500;
	/* padding-top: 2px; */
  }

  #availablity_type {
	font-family: avenir;
	color: #FF8C00;
	font-size: 17px;
	/* padding-top: 2px; */
	font-weight: bold;
  }

  #details_dropdown {
	font-family: avenir;
	color: #1EACDF;
	font-size: 17px;
	/* padding-top: 2px; */
	cursor: pointer;
  }

  .detail_dropdown_content {
    display: none;
    position: relative;
    background-color: #fff;
    width: 100%;
    overflow: auto;
    z-index: 1;
  }

  .detail_dropdown_content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .arrow_details {
    width: 0; 
    height: 0; 
	padding-top: 4px;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid #1EACDF;
	/* padding-top: 3px; */
	cursor: pointer;
  }

  #price {
	color: #000;
	font-family: avenir;
	font-size: 21px;
	font-weight: bold;
	margin-top: -3px;
  }

  #usd {
	color: #ababab;
    font-size: 17px;
    padding-right: 60px;
    font-family: avenir;
  }

  #request_btn {
    color: #1EACDF;
    font-size: 18px;
    /* padding-top: 2px; */
    font-weight: bold;
    margin-bottom: 3px;
	cursor:pointer;
    font-family: avenir;
  }
  
  .modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    padding-top: 250px;
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4); 
  }
  
  .modal_content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
  }
  
  .close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }

  #bed_row {
	padding-left: 38px;
  }

  .bedtype_king{
    color: #fff;
    background-color: grey;
    border: none;
    border-radius: 2px;
    font-size: 14px;
    font-style: avenir;
    padding: 4px 11px;
    padding-bottom: 7px;
  }

  .bedtype_daybed{
    color: #fff;
    background-color: grey;
    border: none;
    border-radius: 2px;
    font-size: 14px;
    font-style: avenir;
    padding: 4px 11px;
    padding-bottom: 7px;
  }

  .date_row {
	padding-left: 50px;
  }

  .current_date {
    color: #000;
    font-family: avenir;
    padding-left: 26px;
    padding-top: 19px;
	font-size: 15px;
  }

  .horizontal_line { 
    border: 1px solid #1EACDF;
    width: 111px;
    height: 0px;
  }

  .date_row_price {
	color: #FF8C00;
    padding-left: 25px;
    font-family: avenir;
	font-weight: 600;
  }

  .detail_usd {
	padding-left: 3px;
	font-family: avenir;
	color:#ababab;
  }

  .condition_title {
	color: #8a8a8a;
	padding-left: 19px;
	font-family: avenir;
    font-size: 16px;
    font-weight: 600;
  }

  .dot_one {
    height: 6px;
    width: 6px;
    background-color: #ababab;
    border-radius: 50%;
    display: inline-block;
	margin-bottom: 2px;
	font-family: avenir;
  }

  .included {
	padding-left: 8px;
	font-family: avenir;
	font-size: 16px;
	color: #ababab;
  }

  .cancellation_title {
	color: #8a8a8a;
	padding-left: 19px;
	font-family: avenir;
    font-size: 16px;
    font-weight: 600;
	padding-top: 13px;
  }

  .dot_two {
    height: 6px;
    width: 6px;
    background-color: red;
    border-radius: 50%;
    display: inline-block;
	margin-bottom: 2px;
	font-family: avenir;
  }

  .cancellation_policy {
	padding-left: 8px;
	font-family: avenir;
	font-size: 16px;
	color: red;
    padding-bottom: 30px;
  }

  .pricing_row{
	float: right;
  }

  .price_detail {
    font-family: avenir;
    float: right;
    margin-top: -147px;
    padding-right: 170px;
    font-weight: 500;
    color: #ababab;
	font-size: 17px;
  }

  .taxes_detail {
    font-family: avenir;
    float: right;
    margin-top: -122px;
    padding-right: 170px;
    font-weight: 500;
    color: #ababab;
	font-size: 17px;
  }

  .fee_detail {
    font-family: avenir;
    float: right;
    margin-top: -97px;
    padding-right: 170px;
    font-weight: 500;
    color: #ababab;
	font-size: 17px;
  }

  .total_detail {
    font-family: avenir;
    float: right;
    margin-top: -72px;
    padding-right: 170px;
    font-weight: 600;
    color: #8a8a8a;
	font-size: 17px;
  }

  .total_amount {
    font-family: avenir;
    float: right;
    margin-top: -72px;
    padding-right: 81px;
	font-weight: 600;
    color: #8a8a8a;
	font-size: 17px;
  }

  .fee_pnt_amount {
    font-family: avenir;
    float: right;
    margin-top: -97px;
    padding-right: 81px;
    color: #8a8a8a;
	font-size: 17px;
  }
  
  .tax_amount {
    font-family: avenir;
    float: right;
    margin-top: -121px;
    padding-right: 81px;
    color: #8a8a8a;
	font-size: 17px;
  }

  .initial_amount {
    font-family: avenir;
    float: right;
    margin-top: -146px;
    padding-right: 81px;
    color: #8a8a8a;
	font-size: 17px;
  }

  .usd_column {
    font-family: avenir;
    color: #8a8a8a;
  }

  .price_usd {
    font-family: avenir;
    font-size: 13px;
    float: right;
    margin-top: -142px;
    padding-right: 51px;
  }

  .total_usd {
    font-family: avenir;
    font-size: 13px;
    float: right;
    margin-top: -68px;
    padding-right: 51px;
  }

  .fee_usd {
    font-family: avenir;
    font-size: 13px;
    float: right;
    margin-top: -93px;
    padding-right: 51px;
  }

  .tax_usd {
    font-family: avenir;
    font-size: 13px;
    float: right;
    margin-top: -117px;
    padding-right: 51px;
  }
</style>
