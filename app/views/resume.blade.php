@extends('layouts.master')

@section('content')
	<h1>Resumé</h1>
	<hr class="style2">
	<div class="col-md-8">

	<!-- ========= Start Time line section ===================================-->
	    <h3 class="title with-icon"><span class="fa fa-book icn-title"></span> Education History</h3>
    	<div class="box-block">
    		<div class="time-line">
        		<div class="item-event current">
          			<span class="date">current</span>
          			<div class="event-content">
            			<h4>Graphic Design</h4>
            			<h5>San Antonio College</h5>
            			<p>As a web designer and developer, my objective is to make a positive impact on clients using my skills and experience to design compelling and building attractive websites.</p>
          			</div>
        		</div>
        		<div class="item-event">
          			<span class="date">2015</span>
          			<div class="event-content">
            			<h4>Full Stack Web Developer</h4>
            			<h5>Codeup</h5>
            			<p>I worked as a Web Developer at Google for 2 years. I create usable web interfaces, front end coding stuff and almost anything. But i love what i do.</p>
          			</div>
        		</div>
      		</div>
 	    </div>
	    <!-- ========= End Time line section ===================================-->

	    <!-- ========= Start Time line section ===================================-->
	    <div class="deviter"></div>
	    <h3 class="title with-icon"><span class="fa fa-briefcase icn-title"></span> Work History</h3>
	    <div class="box-block">
	     	<div class="time-line">
	        	<div class="item-event">
	          		<span class="date">2015</span>
	          		<div class="event-content">
	            		<h4>KIN Assistant</h4>
	            		<h5>NEISD</h5>
	            		<p>I worked as a Web Developer at Google for 2 years. I create usable web interfaces, front end coding stuff and almost anything. But i love what i do.</p>
	          		</div>
	        	</div>
		        <div class="item-event">
		          	<span class="date">2014</span>
		          	<div class="event-content">
		            	<h4>Shift Manager</h4>
		            	<h5>Pump It Up</h5>
		            	<p>As a web designer and developer, my objective is to make a positive impact on clients using my skills and experience to design compelling and building attractive websites.</p>
		          	</div>
		        </div>
		        <div class="item-event last">
		          	<span class="date">2013</span>
		          	<div class="event-content">
		            	<h4>Rides Operator</h4>
		            	<h5>Six Flags Fiesta Texas</h5>
		            	<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		          	</div>
		        </div>
	     	</div>
	    </div>
  	</div>
    <!-- =========End Time line section===================================-->

	<div class="col-md-4">
    	
    	<!-- ========= Start your Skills Progress bars section ===================================-->
        <h3 class="title with-icon"><span class="fa fa-code icn-title"></span> Programming Skills</h3>
        <div class="box-block">
        	<ul class="list-unstyled list-skills">
            	<li>
              		<span class="caption-skill">HTML</span>
              		<div class="progress">
                		<div class="progress-bar" style="width: 90%;">
                  			<span>90% </span>
                		</div>
              		</div>
            	</li>
               	<li>
              		<span class="caption-skill">CSS</span>
              		<div class="progress">
                		<div class="progress-bar" style="width: 50%;">
                  			<span>50% </span>
                		</div>
              		</div>
            	</li>
            	<li>
              		<span class="caption-skill">JavaScript</span>
              		<div class="progress">
                		<div class="progress-bar" style="width: 70%;">
                  			<span>70% </span>
                		</div>
              		</div>
            	</li>
            	<li>
              		<span class="caption-skill">PHP</span>
              		<div class="progress">
                		<div class="progress-bar" style="width: 60%;">
                  			<span>60% </span>
                		</div>
              		</div>
            	</li>
            	<li>
              		<span class="caption-skill">MYSQL</span>
              		<div class="progress">
                		<div class="progress-bar" style="width: 100%;">
                  			<span>100% </span>
                		</div>
              		</div>
            	</li>
          	</ul>
        </div>
        <!-- ========= End your Skills Progress bars section ===================================-->

        <!-- ========= Start your Skills Progress point bars section ===================================-->
{{--         <div class="deviter"></div>
        <h3 class="title with-icon"><span class="fa fa-file-text icn-title"></span> Download CV</h3>
        <div class="box-block">
        	<p>You can download my CV in pdf format if you like. I love what i do.</p>
          	<a href="#" class="btn btn-flat btn-block"><i class="fa fa-download"></i> Download</a>
          	<div class="text-center">Or</div>
          	<a href="#" class="btn btn-flat btn-block style2"><i class="fa fa-print"></i> Print</a>
        </div> --}}
    </div>
@stop