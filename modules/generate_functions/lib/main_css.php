<?php ?>
<style>
	div.warning-popup  p{ 
		color: white;
		border-radius: 5px;
		padding: 5px;
	}
	.success{ 
		background-color: #00A11D; 
		border-radius: 5px;
		width: 70%; 
	}
	pre.inv{
		font-size: 0px !important;
	}
	.warning{
		background-color: #FC7D49; 
		border-radius: 5px;
		width: 70%; 
	}
	div.warning-popup{
		margin-top: -10px;
	}
	div.row .col-half{
		float: left;
		width: 50%;
	}
	.search-box-holder{
		float:right;
		margin: 0px 2px 5px 0px;
	}
	div.search-box-holder input{  
		border-top: 0px;
		border-right: 0px;
		border-left: 0px;
		border-bottom: 0.5px solid;
		border-color: gray;
		background-color: transparent;
		text-align: right;
	}
	div.search-box-holder input:focus {
    	outline-width: 0;
	}
	table{
		width: 100%; 
	}
	.thead{
		font-weight: 500;
		background-color: #2C3E50;
		color: white;
	}
	thead.thead tr td{
		padding: 4.5px;
		border-radius: 5px;
	}
	tbody{
		font-weight: 300;
		font-size: 14px;  
	}
	.scrollable{ 
		width: 100%;
	    height:200px !impor;
		/*display: block;*/
	    overflow:auto;
	}
	thead.scrollable tr{
		display: block;
	    overflow:auto;
		width: 100%;
	    overflow:auto;
	}
	tbody tr td a {
		text-decoration: none;
	}
	.center{
		text-align: center;
	}
	.left{
		text-align: left;
	}
	.right{
		text-align: right;
	}
	.table-holder{
		padding: 0px 5px 0px 5px;
	}
	tfoot{
		background-color: #2C3E50;
		color: white;
		font-weight: 300;
		font-size: 10px;
	}
	tfoot tr td{ 
		padding: 4.5px;
		border-radius: 5px;
	}
	tfoot tr td a{
		color: white;
		text-decoration: none;
	}
	tfoot tr td a:hover{
		color: cyan;
		text-decoration: none;
	}

	/*modal*/  

	.box {
	  width: 40%;
	  margin: 0 auto;
	  background: rgba(255,255,255,0.2);
	  padding: 35px;
	  border: 2px solid #fff;
	  border-radius: 20px/50px;
	  background-clip: padding-box;
	  text-align: center;
	}

	.button {
	  font-size: 1em;
	  padding: 10px;
	  color: #fff;
	  border: 2px solid #06D85F;
	  border-radius: 20px/50px;
	  text-decoration: none;
	  cursor: pointer;
	  transition: all 0.3s ease-out;
	}
	.button:hover {
	  background: #06D85F;
	}

	.overlay {
	  position: fixed;
	  top: 0;
	  bottom: 0;
	  left: 0;
	  right: 0;
	  background: rgba(0, 0, 0, 0.7);
	  transition: opacity 500ms;
	  visibility: hidden;
	  opacity: 0;
	  z-index: 9 !important;
	}
	.overlay:target {
	  visibility: visible;
	  opacity: 1;
	}

	.popup {
	  margin: 70px auto;
	  padding: 20px;
	  background: #fff;
	  border-radius: 5px;
	  width: 30%;
	  position: relative;
	  transition: all 5s ease-in-out;
	}

	.popup h2 {
	  margin-top: 0;
	  color: #333;
	  font-family: Tahoma, Arial, sans-serif;
	}
	.popup .close {
	  position: absolute;
	  top: 20px;
	  right: 30px;
	  transition: all 200ms;
	  font-size: 30px;
	  font-weight: bold;
	  text-decoration: none;
	  color: #333;
	}
	.popup .close:hover {
	  color: #06D85F;
	}
	.popup .content {
	  max-height: 50%;
	  overflow: auto;
	}

	@media screen and (max-width: 700px){
	  .box{
	    width: 70%;
	  }
	  .popup{
	    width: 70%;
	  }
	}

	/*inside modal*/

	div.w100 div input{
		width: 98%;
		margin-bottom: 5px;  

		border-bottom: 0.1px solid; 
		background-color: transparent; 
		
	}
	div.w100 div input:focus {
    	outline-width: 0px solid;
	}

</style>
