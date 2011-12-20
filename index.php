<!DOCTYPE html>

<!--[if lte IE 8]>
<style type="text/css">
.ombrage1 {
  filter:progid:DXImageTransform.Microsoft.Shadow(color='#999999', Direction=135, Strength=3);
  zoom: 1;
} 
</style>
<![endif]-->


<!--[if lte IE 8]>
  <style type="text/css">
  .ombrage2 {
  background-color: #777;
  zoom: 1;
    filter:progid:DXImageTransform.Microsoft.Shadow(color='#aaaaaa', Direction=135, Strength=9);
   
  } 
  </style>
<![endif]-->


<html>
  <head>
        <?php 
        $add=$_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"];
			?>
    <meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <title>NXToo - Home</title>
    <link rel="stylesheet" media="screen" title="Style" href="style.css" />
    <link rel="shortcut icon" href="http://<?php echo $add ?>img/icone.ico" /> 
  </head>
  <body>
    
 <div id="header">    
<?php
$nav = $_SERVER['HTTP_USER_AGENT'];

if(preg_match("/Firefox/",$nav))
{
include 'logoanimation.xml';
}
elseif(preg_match("/Safari/",$nav) && preg_match("/Chrome/",$nav)) 
{
include 'logoanimation.xml';
}
else
{
echo  '<img  src="img/logo05.png" alt="logo nxt" title="logo nxt" />';
}
?> 
  
 </div>   
    
    <div id="content">

   
      <h2 class="ombrage1">The differences <span class="spefont">?</span></h2>

<ul>
<li>It's the Gentoo tree, with a week lag again the currect tree, to prevent breakage of not very tested things...</li>
<li>It came with the Funtoo Portage with GIT support</li>
<li>It came optimized and compatible with all current CPU (Gentoo and Funtoo don't have better optimisation than Core2 or amdfam10 so win-win for i7, Sandy Bridge and AMD E-350 CPUs)</li>
<li>It came with an up to date toolchain</li>
<li>It came with the Funtoo CoreBoot</li>
<li>May came with CoreNetwork too</li>
</ul>
 

<span class="note">Note : the current stage of this distribution is "under construction". You can use the stages there if you want, but CoreBoot is not shipped with NXToo yet.</span>

      
      <h2 class="ombrage1">Current Portage snapshot : </h2>      
      <h3 class="ombrage2"> <a title="Download snapshot" href="http://nxtoo.org/mirror/snapshots/portage-current.tar.xz">snapshot</a></h3>
      <h2 class="ombrage1">Choose your stage : </h2>

 <!-- ######################  X86 --> 

      <h3 class="ombrage2">X86</h3>
    
   <table class="table2">
	    <thead>
	        <tr>
	            <th id="blanc1"></th>
	            <th scope="col">stage 1</th>
	            <th scope="col">stage 2</th>
	            <th scope="col">stage 3</th>
	          
	        </tr>
	    </thead>

	    <tbody>
	        <tr>
	            <th scope="row">486 (Intel/AMD x86)</th>
	            <td></td>
	            <td></td>
	            <td></td>
	            
	        </tr>
           <tr>
               <th scope="row">pentium (Intel pentium)</th>
	            <td></td>
	            <td></td>
	            <td></td>
	           
	        </tr>
	        <tr>
              <th scope="row">pentium-mmx (Intel Pentium with MMX support/AMD Geode GX1)</th>
	            <td></td>
	            <td></td>
	            <td></td>
	            
	        </tr>
	        <tr>
	            <th scope="row">pentiumpro (Intel Pentium Pro)</th>
	            <td></td>
	            <td></td>
	            <td></td>
	            
	        </tr>
	        	        <tr>
	            <th scope="row">pentium2 (Intel Pentium II)</th>
	            <td></td>
	            <td></td>
	            <td></td>
	            
	        </tr>
           <tr>
               <th scope="row">pentium3 (Intel Pentium III/Mobile Celeron/Celeron Coppermine)</th>
	            <td></td>
	            <td></td>
	            <td></td>
	           
	        </tr>
	        <tr>
	            <th scope="row">pentium4 (Intel Pentium IV{A.B.C}/Celeron Willamette/Pentium M)</th>
	            <td><a title="stage1" href="http://nxtoo.org/mirror/i386/stage1-pentium4-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            <td><a title="stage2" href="http://nxtoo.org/mirror/i386/stage2-pentium4-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            <td><a title="stage3" href="http://nxtoo.org/mirror/i386/stage3-pentium4-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            
	        </tr>
	        <tr>
	            <th scope="row">pentium-m (Intel Pentium M/Celeron M)</th>
	            <td><span class="check"></span></td>
	            <td><span class="check"></span></td>
	            <td><span class="check"></span></td>
	            
	        </tr>
	        <tr>
	            <th scope="row">prescott (Intel Pentium D/Celeron D/Xeon with em64t/Core {Solo, Duo})</th>
	            <td><span class="check"></span></td>
	            <td><span class="check"></span></td>
	            <td><span class="check"></span></td>
	            
	        </tr>
	        	<tr>
	            <th scope="row">core2 (Intel Core2 {Duo, Quad}/Core {i3, i5, i7})</th>
	            <td><a title="stage1" href="http://nxtoo.org/mirror/i386/stage1-core2_32-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            <td><a title="stage2" href="http://nxtoo.org/mirror/i386/stage2-core2_32-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            <td><a title="stage3" href="http://nxtoo.org/mirror/i386/stage3-core2_32-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            
	        </tr>
	        <tr>
	            <th scope="row">atom (Intel Atom)</th>
	            <td></td>
	            <td></td>
	            <td></td>
	            
	        </tr>
           <tr>
               <th scope="row">k6 (AMD K6)</th>
	            <td></td>
	            <td></td>
	            <td></td>
	           
	        </tr>
	        <tr>
              <th scope="row">k6-2 (AMD K6-II)</th>
	            <td></td>
	            <td></td>
	            <td></td>
	            
	        </tr>
	        <tr>
	            <th scope="row">k6-3 (AMD K6-III)</th>
	            <td></td>
	            <td></td>
	            <td></td>
	            
	        </tr>
	        	        <tr>
	            <th scope="row">geode (AMD Geode LX)</th>
	            <td></td>
	            <td></td>
	            <td></td>
	            
	        </tr>
           <tr>
               <th scope="row">athlon (AMD Athlon [Theses SLOT-A CPU] )</th>
	            <td></td>
	            <td></td>
	            <td></td>
	           
	        </tr>
	        <tr>
	            <th scope="row">athlon-tbird (AMD Athlon Thunderbird/Duron/Duron-M)</th>
	            <td></td>
	            <td></td>
	            <td></td>
	            
	        </tr>
           <tr>
               <th scope="row">athlon-xp (AMD Athlon XP/Duron Morgan/Sempron [Socket 478]/ Turion {64, Ultra, X2})</th>
	            <td></td>
	            <td></td>
	            <td></td>
	           
	        </tr>
	        <tr>
              <th scope="row">athlon-4 (AMD Athlon 4/Geode NX)</th>
	            <td></td>
	            <td></td>
	            <td></td>
	            
	        </tr>
	        <tr>
	            <th scope="row">k8 (AMD Athlon 64/Athlon 64X2/Sempron [Socket 754/939])</th>
	            <td></td>
	            <td></td>
	            <td></td>
	            
	        </tr>
	        	        <tr>
	            <th scope="row">opteron (AMD Opteron {1,2,8}xx/AMD Opteron Dual Core {22,23}xx)</th>
	            <td></td>
	            <td></td>
	            <td></td>
	            
	        </tr>
           <tr>
               <th scope="row">amdfam10 (AMD Opteron Magny-Cours/Athlon X2 7x50/Phenom/Phenom II/Sempron [Socket AM3])</th>
	            <td></td>
	            <td></td>
	            <td></td>
	           
	        </tr>
	         	<tr>
	            <th scope="row">btver1 (AMD E-350)</th>
	            <td><a title="stage1" href="http://nxtoo.org/mirror/i386/stage1-btver1-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            <td><a title="stage2" href="http://nxtoo.org/mirror/i386/stage2-btver1-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            <td><a title="stage3" href="http://nxtoo.org/mirror/i386/stage3-btver1-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            
	        </tr>

	    </tbody>
	</table>   
      
 <!-- ######################  X86_64 -->     
      
<h3 class="ombrage2">X86<span class="spefont">_</span>64</h3>


	<table class="table2">
	    <thead>
	        <tr>
	            <th id="blanc2"></th>
	            <th scope="col">stage 1</th>
	            <th scope="col">stage 2</th>
	            <th scope="col">stage 3</th>
	          
	        </tr>
	    </thead>

	    <tbody>
	        <tr>
	            <th scope="row">nocona (Intel Pentium D/Celeron D/Xeon with em64t)</th>
	            <td><a title="stage1" href="http://nxtoo.org/mirror/amd64/stage1-nocona-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            <td><a title="stage2" href="http://nxtoo.org/mirror/amd64/stage2-nocona-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            <td><a title="stage3" href="http://nxtoo.org/mirror/amd64/stage3-nocona-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            
	        </tr>
           <tr>
               <th scope="row">core2 (Intel Core2 {Duo, Quad})</th>
	            <td><a title="stage1" href="http://nxtoo.org/mirror/amd64/stage1-core2_64-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            <td><a title="stage2" href="http://nxtoo.org/mirror/amd64/stage2-core2_64-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            <td><a title="stage3" href="http://nxtoo.org/mirror/amd64/stage3-core2_64-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	           
	        </tr>
	        <tr>
              <th scope="row">corei7 (Intel Core{i3,i5,i7})</th>
	            <td></td>
	            <td></td>
	            <td></td>
	            
	        </tr>
	        <tr>
	            <th scope="row">corei7-avx (Intel Sandy Bridge)</th>
	            <td></td>
	            <td></td>
	            <td></td>
	            
	        </tr>
	        <tr>
	            <th scope="row">atom (Intel Atom)</th>
	            <td><a title="stage1" href="http://nxtoo.org/mirror/amd64/stage1-atom_64-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            <td><a title="stage2" href="http://nxtoo.org/mirror/amd64/stage2-atom_64-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            <td><a title="stage3" href="http://nxtoo.org/mirror/amd64/stage3-atom_64-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            
	        </tr>
	        <tr>
	            <th scope="row">k8 (AMD Athlon 64/Athlon 64X2/Sempron [Socket 754/939]/Turion{64,Ultra,X2})</th>
	            <td><span class="check"></span></td>
	            <td><span class="check"></span></td>
	            <td><span class="check"></span></td>
	            
	        </tr>
	        <tr>
	            <th scope="row">opteron (AMD Opteron {1,2,8}xx/AMD Opteron Dual Core {22,23}xx)</th>
	            <td><a title="stage1" href="http://nxtoo.org/mirror/amd64/stage1-opteron_64-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            <td><a title="stage2" href="http://nxtoo.org/mirror/amd64/stage2-opteron_64-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            <td><a title="stage3" href="http://nxtoo.org/mirror/amd64/stage3-opteron_64-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            
	        </tr>
	        
	         <tr>
	            <th scope="row">amdfam10 (AMD Opteron Magny-Cours/Athlon X2 7x50/Phenom/Phenom II/Sempron [Socket AM3])</th>
	            <td><a title="stage1" href="http://nxtoo.org/mirror/amd64/stage1-amd64-k10-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            <td><a title="stage2" href="http://nxtoo.org/mirror/amd64/stage2-amd64-k10-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            <td><a title="stage3" href="http://nxtoo.org/mirror/amd64/stage3-amd64-k10-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	           
	        </tr>

	        <tr>
	            <th scope="row">btver1 (AMD E-350)</th>
	            <td><a title="stage1" href="http://nxtoo.org/mirror/amd64/stage1-btver1_64-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            <td><a title="stage2" href="http://nxtoo.org/mirror/amd64/stage2-btver1_64-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            <td><a title="stage3" href="http://nxtoo.org/mirror/amd64/stage3-btver1_64-nxtoo-stable-current.tar.xz"><img src="img/check1.png" alt="download stage" /></a></td>
	            
	        </tr>

	    </tbody>
	</table>
<div id="footer">
<i>Interesting links</i><br/>
<a title="Gentoo" href="http://www.gentoo.org">Gentoo</a> | <a title="Funtoo" href="http://www.funtoo.org">Funtoo</a> | <a title="Funtoo-Quebec" href="http://www.funtoo-quebec.org">Funtoo-Quebec</a> | <a title="GNU Project" href="http://www.gnu.org">GNU Project</a> | <a title="kernel" href="http://www.kernel.org">Linux Kernel</a><br/> | <a title="licence" href="http://www.gnu.org/copyleft/gpl.html">Under GNU GPL Licence</a>
<br/>
<i>Validations</i><br/>
<a href='http://validator.w3.org/check?uri=http://<?php echo $add ?>'>HTML 5</a>|
<a href='http://jigsaw.w3.org/css-validator/check/referer/validator?profile=css3'>CSS 3</a> 
 </div>  
    </div>
  </body>
</html>



