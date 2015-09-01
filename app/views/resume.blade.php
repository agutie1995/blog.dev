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
            			<h5 class="location">San Antonio College</h5>
            			<h5>2014 - current</h5>
            			{{-- <p>As a web designer and developer, my objective is to make a positive impact on clients using my skills and experience to design compelling and building attractive websites.</p> --}}
          			</div>
        		</div>
        		<div class="item-event">
          			<span class="date">2015</span>
          			<div class="event-content">
            			<h4>Full Stack Web Developer</h4>
            			<h5 class="location">Codeup</h5>
            			<h5>June 2015 - current</h5>
            			<p>As a web developer, my objective is to make a positive impact on clients using my skills and experience to design compelling and attractive websites.</p>
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
	            		<h5 class="location">N.E.I.S.D.</h5>
	            		<h5>July 2014 - May 2015</h5>
	            		<p>I taught as an after school teacher to elementary-aged students, primarily first graders. I focused on reading, writing, math, and logic.</p>
	          		</div>
	        	</div>
		        <div class="item-event">
		          	<span class="date">2014</span>
		          	<div class="event-content">
		            	<h4>Shift Manager</h4>
		            	<h5 class="location">Pump It Up</h5>
		            	<h5>Aug 2013 - Aug 2014</h5>
		            	<p>During the week I helped parents book parties and gave tours of the facility. On the weekends, I supervised staff to ensure a fun birthday party experience for the children and parents.</p>
		          	</div>
		        </div>
		        <div class="item-event last">
		          	<span class="date">2014</span>
		          	<div class="event-content">
		            	<h4>Rides Operator</h4>
		            	<h5 class="location">Six Flags Fiesta Texas</h5>
		            	<h5>April 2013 - Jan 2014</h5>
		            	<p>Operated heavy machinery while providing a safe, fun, and friendly environment for park guests of all ages.</p>
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