<?php
$title="Writings";
include("header.inc");
?>
<div class="span-16 append-1">

<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Mincho;
	panose-1:2 2 6 9 4 3 5 8 3 5;}
@font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Times;
	panose-1:2 2 6 3 5 4 5 2 3 4;}
@font-face
	{font-family:StarSymbol;
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:"\@Mincho";
	panose-1:0 0 0 0 0 0 0 0 0 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin:0in;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";}
h1
	{margin:0in;
	margin-bottom:.0001pt;
	page-break-after:avoid;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";}
p.MsoCaption, li.MsoCaption, div.MsoCaption
	{margin-top:6.0pt;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:0in;
	font-size:10.0pt;
	font-family:"Times","serif";
	font-style:italic;}
p.MsoList, li.MsoList, div.MsoList
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";}
p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";}
a:link, span.MsoHyperlink
	{color:navy;
	text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
	{color:purple;
	text-decoration:underline;}
span.WW8Num1z0
	{mso-style-name:WW8Num1z0;
	font-family:"StarSymbol","serif";}
span.WW8Num1z5
	{mso-style-name:WW8Num1z5;
	font-family:Symbol;}
span.WW8Num2z0
	{mso-style-name:WW8Num2z0;
	font-family:Symbol;}
span.WW8Num2z1
	{mso-style-name:WW8Num2z1;
	font-family:"StarSymbol","serif";}
span.WW8Num3z0
	{mso-style-name:WW8Num3z0;
	font-family:Symbol;}
span.WW8Num3z1
	{mso-style-name:WW8Num3z1;
	font-family:"StarSymbol","serif";}
span.WW-Absatz-Standardschriftart
	{mso-style-name:WW-Absatz-Standardschriftart;}
span.WW-WW8Num1z0
	{mso-style-name:WW-WW8Num1z0;
	font-family:"StarSymbol","serif";}
span.WW-WW8Num1z5
	{mso-style-name:WW-WW8Num1z5;
	font-family:Symbol;}
span.WW-WW8Num2z0
	{mso-style-name:WW-WW8Num2z0;
	font-family:Symbol;}
span.WW-WW8Num2z1
	{mso-style-name:WW-WW8Num2z1;
	font-family:"StarSymbol","serif";}
span.WW-WW8Num3z0
	{mso-style-name:WW-WW8Num3z0;
	font-family:Symbol;}
span.WW-WW8Num3z1
	{mso-style-name:WW-WW8Num3z1;
	font-family:"StarSymbol","serif";}
span.WW-Absatz-Standardschriftart1
	{mso-style-name:WW-Absatz-Standardschriftart1;}
span.WW-WW8Num1z01
	{mso-style-name:WW-WW8Num1z01;
	font-family:"StarSymbol","serif";}
span.WW-WW8Num1z51
	{mso-style-name:WW-WW8Num1z51;
	font-family:Symbol;}
span.WW-WW8Num2z01
	{mso-style-name:WW-WW8Num2z01;
	font-family:Symbol;}
span.WW-WW8Num2z11
	{mso-style-name:WW-WW8Num2z11;
	font-family:"StarSymbol","serif";}
span.WW-WW8Num3z01
	{mso-style-name:WW-WW8Num3z01;
	font-family:Symbol;}
span.WW-WW8Num3z11
	{mso-style-name:WW-WW8Num3z11;
	font-family:"StarSymbol","serif";}
span.WW-Absatz-Standardschriftart11
	{mso-style-name:WW-Absatz-Standardschriftart11;}
span.WW-WW8Num1z011
	{mso-style-name:WW-WW8Num1z011;
	font-family:"StarSymbol","serif";}
span.WW-WW8Num1z511
	{mso-style-name:WW-WW8Num1z511;
	font-family:Symbol;}
span.WW-WW8Num2z011
	{mso-style-name:WW-WW8Num2z011;
	font-family:Symbol;}
span.WW-WW8Num2z111
	{mso-style-name:WW-WW8Num2z111;
	font-family:"StarSymbol","serif";}
span.WW-WW8Num3z011
	{mso-style-name:WW-WW8Num3z011;
	font-family:Symbol;}
span.WW-WW8Num3z111
	{mso-style-name:WW-WW8Num3z111;
	font-family:"StarSymbol","serif";}
span.WW-Absatz-Standardschriftart111
	{mso-style-name:WW-Absatz-Standardschriftart111;}
span.WW-WW8Num1z0111
	{mso-style-name:WW-WW8Num1z0111;
	font-family:"StarSymbol","serif";}
span.WW-WW8Num1z5111
	{mso-style-name:WW-WW8Num1z5111;
	font-family:Symbol;}
span.WW-WW8Num2z0111
	{mso-style-name:WW-WW8Num2z0111;
	font-family:Symbol;}
span.WW-WW8Num2z1111
	{mso-style-name:WW-WW8Num2z1111;
	font-family:"StarSymbol","serif";}
span.WW-WW8Num3z0111
	{mso-style-name:WW-WW8Num3z0111;
	font-family:Symbol;}
span.WW-WW8Num3z1111
	{mso-style-name:WW-WW8Num3z1111;
	font-family:"StarSymbol","serif";}
span.WW-Absatz-Standardschriftart1111
	{mso-style-name:WW-Absatz-Standardschriftart1111;}
span.Bullets
	{mso-style-name:Bullets;
	font-family:"StarSymbol","serif";}
span.WW-Bullets
	{mso-style-name:WW-Bullets;
	font-family:"StarSymbol","serif";}
span.WW-Bullets1
	{mso-style-name:WW-Bullets1;
	font-family:"StarSymbol","serif";}
span.WW-Bullets11
	{mso-style-name:WW-Bullets11;
	font-family:"StarSymbol","serif";}
span.WW-Bullets111
	{mso-style-name:WW-Bullets111;
	font-family:"StarSymbol","serif";}
span.WW-Bullets1111
	{mso-style-name:WW-Bullets1111;
	font-family:"StarSymbol","serif";}
span.Resumelistthing
	{mso-style-name:"Resume list thing";}
p.Heading, li.Heading, div.Heading
	{mso-style-name:Heading;
	margin-top:12.0pt;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:0in;
	page-break-after:avoid;
	font-size:14.0pt;
	font-family:"Times","serif";}
p.Index, li.Index, div.Index
	{mso-style-name:Index;
	margin:0in;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times","serif";}
p.WW-Heading, li.WW-Heading, div.WW-Heading
	{mso-style-name:WW-Heading;
	margin-top:12.0pt;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:0in;
	page-break-after:avoid;
	font-size:14.0pt;
	font-family:"Times","serif";}
p.WW-Caption, li.WW-Caption, div.WW-Caption
	{mso-style-name:WW-Caption;
	margin-top:6.0pt;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:0in;
	font-size:10.0pt;
	font-family:"Times","serif";
	font-style:italic;}
p.WW-Index, li.WW-Index, div.WW-Index
	{mso-style-name:WW-Index;
	margin:0in;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times","serif";}
p.WW-Heading1, li.WW-Heading1, div.WW-Heading1
	{mso-style-name:WW-Heading1;
	margin-top:12.0pt;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:0in;
	page-break-after:avoid;
	font-size:14.0pt;
	font-family:"Times","serif";}
p.WW-Caption1, li.WW-Caption1, div.WW-Caption1
	{mso-style-name:WW-Caption1;
	margin-top:6.0pt;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:0in;
	font-size:10.0pt;
	font-family:"Times","serif";
	font-style:italic;}
p.WW-Index1, li.WW-Index1, div.WW-Index1
	{mso-style-name:WW-Index1;
	margin:0in;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times","serif";}
p.WW-Caption11, li.WW-Caption11, div.WW-Caption11
	{mso-style-name:WW-Caption11;
	margin-top:6.0pt;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:0in;
	font-size:10.0pt;
	font-family:"Times New Roman","serif";
	font-style:italic;}
p.WW-Index11, li.WW-Index11, div.WW-Index11
	{mso-style-name:WW-Index11;
	margin:0in;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";}
p.WW-Caption111, li.WW-Caption111, div.WW-Caption111
	{mso-style-name:WW-Caption111;
	margin-top:6.0pt;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:0in;
	font-size:10.0pt;
	font-family:"Times New Roman","serif";
	font-style:italic;}
p.WW-Index111, li.WW-Index111, div.WW-Index111
	{mso-style-name:WW-Index111;
	margin:0in;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";}
p.WW-Caption1111, li.WW-Caption1111, div.WW-Caption1111
	{mso-style-name:WW-Caption1111;
	margin-top:6.0pt;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:0in;
	font-size:10.0pt;
	font-family:"Times New Roman","serif";
	font-style:italic;}
p.WW-Index1111, li.WW-Index1111, div.WW-Index1111
	{mso-style-name:WW-Index1111;
	margin:0in;
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";}
p.TableContents, li.TableContents, div.TableContents
	{mso-style-name:"Table Contents";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";}
p.WW-TableContents, li.WW-TableContents, div.WW-TableContents
	{mso-style-name:"WW-Table Contents";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";}
p.WW-TableContents1, li.WW-TableContents1, div.WW-TableContents1
	{mso-style-name:"WW-Table Contents1";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";}
p.WW-TableContents11, li.WW-TableContents11, div.WW-TableContents11
	{mso-style-name:"WW-Table Contents11";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";}
p.WW-TableContents111, li.WW-TableContents111, div.WW-TableContents111
	{mso-style-name:"WW-Table Contents111";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";}
p.WW-TableContents1111, li.WW-TableContents1111, div.WW-TableContents1111
	{mso-style-name:"WW-Table Contents1111";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:0in;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";}
p.TableHeading, li.TableHeading, div.TableHeading
	{mso-style-name:"Table Heading";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:0in;
	text-align:center;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	font-weight:bold;
	font-style:italic;}
p.WW-TableHeading, li.WW-TableHeading, div.WW-TableHeading
	{mso-style-name:"WW-Table Heading";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:0in;
	text-align:center;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	font-weight:bold;
	font-style:italic;}
p.WW-TableHeading1, li.WW-TableHeading1, div.WW-TableHeading1
	{mso-style-name:"WW-Table Heading1";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:0in;
	text-align:center;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	font-weight:bold;
	font-style:italic;}
p.WW-TableHeading11, li.WW-TableHeading11, div.WW-TableHeading11
	{mso-style-name:"WW-Table Heading11";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:0in;
	text-align:center;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	font-weight:bold;
	font-style:italic;}
p.WW-TableHeading111, li.WW-TableHeading111, div.WW-TableHeading111
	{mso-style-name:"WW-Table Heading111";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:0in;
	text-align:center;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	font-weight:bold;
	font-style:italic;}
p.WW-TableHeading1111, li.WW-TableHeading1111, div.WW-TableHeading1111
	{mso-style-name:"WW-Table Heading1111";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:0in;
	text-align:center;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	font-weight:bold;}
@page Section1
	{size:8.5in 11.0in;
	margin:1.0in 1.0in 1.0in 1.0in;}
div.Section1
	{page:Section1;}
 /* List Definitions */
 ol
	{margin-bottom:0in;}
ul
	{margin-bottom:0in;}
-->
</style>

</head>

<body lang=EN-US link=navy vlink=purple style='line-break:strict'>

<div class=Section1>

<p class=MsoNormal align=center style='text-align:center'><b><span
style='font-size:18.0pt'>A N D R E W&nbsp;&nbsp;&nbsp;&nbsp;L E I F E R</span></b></p>

<p class=MsoNormal align=center style='text-align:center'>Leifer@fas.harvard.edu</p>

<p class=MsoNormal align=center style='text-align:center'>&nbsp;</p>

<p class=MsoNormal align=center style='text-align:center'>Samuel Lab &middot; Department
of Physics &middot; 17 Oxford St &middot; Cambridge MA 02138</p>

<p class=MsoNormal align=center style='text-align:center'>&nbsp;</p>

<p class=MsoNormal><b>EDUCATION</b></p>

<p class=MsoNormal style='margin-left:72.5pt'>Harvard University, Cambridge,
MA. Ph.D., Biophysics expected August 2011.</p>

<p class=MsoNormal style='margin-left:72.5pt'>&nbsp;</p>

<p class=MsoNormal style='margin-left:72.5pt'>Stanford University, Stanford,
CA. B.S. Physics, B.A. Political Science, Interdisciplinary Honors in
International Security Studies, June 2007.</p>

<p class=MsoNormal><span class=Resumelistthing><b>AWARDS</b></span></p>

<p class=MsoNormal style='margin-left:1.0in;text-indent:-71.0pt'><span
class=Resumelistthing>2008&nbsp;Harvard University Certificate of Distinction in Teaching
</span></p>

<p class=MsoNormal style='margin-left:1.0in;text-indent:-71.0pt'><span
class=Resumelistthing>2007&nbsp;Graduate Research Fellowship,
National Science Foundation.</span></p>

<p class=MsoNormal style='margin-left:1.0in;text-indent:-71.0pt'><span
class=Resumelistthing>2006&nbsp;Leonard M. Rieser Fellowship in
Science Technology and Global Security<b>, </b>Bulletin of the Atomic
Scientist.</span></p>

<p class=MsoNormal style='margin-left:1.0in;text-indent:-71.0pt'><span
class=Resumelistthing>2006&nbsp;SPIE International Society for
Optical Engineering Scholarship.</span></p>

<p class=MsoNormal style='margin-left:1.0in;text-indent:-71.0pt'><span
class=Resumelistthing>2006&nbsp;AIP, Society of Physics Students,
Leadership Award.</span></p>

<p class=MsoNormal style='margin-left:1.0in;text-indent:-71.0pt'><span
class=Resumelistthing>2006&nbsp;Summer Undergraduate Research
Fellowship<b>, </b>National Science Foundation, two-time recipient.</span></p>

<p class=MsoNormal style='margin-left:1.0in;text-indent:-71.0pt'><span
class=Resumelistthing>2006&nbsp;Intern of the Year Award, Center for Science Technology and Security Policy.</span></p>

<p class=MsoNormal style='margin-left:1.0in;text-indent:-71.0pt'><span
class=Resumelistthing>2006&nbsp;Harry Press Journalism Award.</span></p>

<p class=MsoNormal style='margin-left:1.0in;text-indent:-71.0pt'><span
class=Resumelistthing>2006&nbsp;National Association of Rocketry
Academic Scholarship four-time recipient.</span></p>

<p class=MsoNormal style='margin-left:1.0in;text-indent:-71.0pt'><span
class=Resumelistthing>2004&nbsp;Boothe Prize for Excellence in
Writing.</span></p>

<p class=MsoNormal style='margin-left:1.0in;text-indent:-71.0pt'><span
class=Resumelistthing>2003&nbsp;Robert C. Byrd Academic Merit
Scholarship.</span></p>

<p class=MsoNormal style='margin-left:1.0in;text-indent:-71.0pt'><span
class=Resumelistthing>2003&nbsp;Dofflemyer Eagle Scout Scholarship<b>.</b></span></p>

<p class=MsoNormal style='margin-left:1.0in;text-indent:-71.0pt'><span
class=Resumelistthing>2003&nbsp;Awards for the author's independent
research, <i>&quot;Fractals, Power-Laws and the Weibull Distribution:
Mathematically Modeling Crumpled Paper.&quot;</i></span></p>

<p class=MsoNormal style='margin-left:1.0in'><span class=Resumelistthing>Karl
Menger Award<b>, </b>American Mathematical Society</span>.</p>

<p class=MsoNormal style='margin-left:1.0in'><span class=Resumelistthing>Naval
Science Award from The Office of Naval Research, US Navy.</span></p>

<p class=MsoNormal style='margin-left:1.0in'><span class=Resumelistthing>Third
Place Team Project, Intel International Science and Engineering Fair 2003.</span></p>

<p class=MsoNormal style='margin-left:1.0in'><span class=Resumelistthing>First
Place Team Project, Colorado Science and Engineering Fair.</span></p>

<p class=MsoNormal style='margin-left:1.0in'><span class=Resumelistthing>Outstanding
Achievement in Education<b>, </b>Scientific American.</span></p>

<p class=MsoNormal style='margin-left:1.0in;text-indent:-71.0pt'><span
class=Resumelistthing>2000 &nbsp; Golden State Governor's Scholarship,
State of California.</span></p>

<h1>EMPLOYMENT</h1>

<p class=MsoNormal style='margin-left:73.5pt;text-indent:-73.0pt'>7/09-Present &nbsp; Resident Tutor / Senior Staff, Lowell House, Harvard College, Cambridge, MA.</p>

<p class=MsoNormal style='margin-left:73.5pt;text-indent:-73.0pt'>6-9/05,
6-9/06 JILA, National Institute of Standards and Technology at University of
Colorado, Boulder. </p>

<p class=MsoNormal style='margin-left:73.5pt;text-indent:-73.0pt'>3/06-6/06&nbsp; Center for Science Technology and Security Policy<b>, </b>American Association for the
Advancement of Science, Washington D.C. </p>

<p class=MsoNormal style='margin-left:73.5pt;text-indent:-73.0pt'>9/05-6/07 &nbsp; Stanford Daily, Stanford CA.</p>

<p class=MsoNormal style='margin-left:73.5pt;text-indent:-73.0pt'>6/04-9/04&nbsp; Institute for Telecommunication Sciences at the National Telecommunications and
Information Administration, Boulder, CO.</p>

<p class=MsoNormal style='margin-left:73.5pt;text-indent:-73.0pt'>6/03-9/03 &nbsp; National Institute of Standards and Technology, U.S. Department of Commerce, Boulder,
CO. </p>

<p class=MsoNormal><b>&nbsp;</b></p>

<p class=MsoNormal><b>TEACHING </b></p>

<p class=MsoNormal style='margin-left:73.5pt;text-indent:-73.0pt'><span
class=Resumelistthing>Spring 2008 &nbsp; Teaching Fellow for Molecular Cellular
Biology 199: "Statistical Thermodynamics for Quantitative Biology", taught by
Professor Howard Berg. Harvard University, Cambridge, MA.</span></p>

<p class=MsoNormal><b>&nbsp;</b></p>

<p class=MsoNormal><b>PRIOR ACTIVITIES</b></p>

<p class=MsoNormal style='margin-left:35.45pt;text-indent:35.45pt'>President,
Stanford Chapter, Society of Physics Students, Stanford, CA.</p>

<p class=MsoNormal style='margin-left:70.9pt'>Undersecretary General, Stanford
Model UN Conference, Stanford, CA.</p>

<p class=MsoNormal style='margin-left:70.9pt'>Counselor, Camp Kesem, Stanford
CA</p>

<p class=MsoNormal style='margin-left:70.9pt'>Managing Editor, Fairview High
School Newspaper, Boulder, CO.</p>

<p class=MsoNormal style='margin-left:70.9pt'>Eagle Scout, Boy Scout Troop 273,
Boulder, CO.</p>

<p class=MsoNormal><span class=Resumelistthing>&nbsp;</span></p>

<p class=MsoNormal style='margin-left:1.0in;text-indent:-71.0pt'>&nbsp;</p>

<p class=MsoNormal style='margin-left:26.0pt;text-indent:-26.0pt'><b>PUBLICATIONS</b></p>

<p class=MsoNormal style='margin-left:27.0pt;text-indent:-27.0pt'><span
class=Resumelistthing>Leifer, A.M., Fang-Yen, C., Gershow, M., Alkema, M.,
Samuel, A.D.T., &quot;Optogenetic manipulation of neural activity with high
spatial resolution in freely moving<i> Caenorhabditis elegans</i>,&quot; <i>Nature
Methods</i>, in press, expected February (2011).</span></p>

<p class=MsoNormal style='margin-left:26.0pt;text-indent:-26.0pt'><span
style='font-family:"Times","serif"'>&nbsp;</span></p>

<p class=MsoNormal style='margin-left:26.0pt;text-indent:-26.0pt'><span
style='font-family:"Times","serif"'>K.J. Coakley, D.S. Simons, A.M. Leifer.
"Secondary Ion Mass Spectrometry Measurements of Isotopic Ratios: Correction
for Time Varying Count Rate." <i>International Journal of Mass Spectrometry</i>
204 (2005) 107-120. </span></p>

<p class=MsoNormal style='margin-left:1.0in;text-indent:-71.0pt'><b>&nbsp;</b></p>

<p class=MsoNormal><span class=Resumelistthing><b>TALKS</b></span></p>

<p class=MsoNormal style='margin-left:27.0pt;text-indent:-27.0pt'><span
class=Resumelistthing>Andrew M. Leifer, Christopher Fang-Yen, Aravinthan D. T.
Samuel, "A remote control for the <i>C. elegans</i> nervous system," American
Physical Society, <i>APS March Meeting 2010</i>, Portland, OR, March 15-19,
2010.</span></p>

<p class=MsoNormal style='margin-left:1.0in;text-indent:-71.0pt'><b>&nbsp;</b></p>

<p class=MsoNormal style='margin-left:1.0in;text-indent:-71.0pt'><b>&nbsp;</b></p>

<p class=MsoNormal style='margin-left:1.0in;text-indent:-71.0pt'><b>POSTERS</b></p>

<p class=MsoNormal style='margin-left:27.0pt;text-indent:-27.0pt'><span
class=Resumelistthing>Andrew M. Leifer, Christopher Fang-Yen, Aravinthan D. T.
Samuel, "Optogenetic manipulation of neural activity in freely moving <i>C.
elegans</i>," National Institute of Health, <i>NIH Director's Pioneer Award
Symposium</i>, Bethesda, MD, September 30 - October 1, 2010.</span></p>

<p class=MsoNormal style='margin-left:27.0pt;text-indent:-27.0pt'><span
style='font-family:"Times","serif"'>&nbsp;</span></p>

<p class=MsoNormal style='margin-left:27.0pt;text-indent:-27.0pt'><span
style='font-family:"Times","serif"'>Andrew M. Leifer, Christopher Fang-Yen,
Marc Gershow, Aravinthan D. T. Samuel. "Spatiotemporal control of neural
activity in freely behaving <i>C. elegans,</i>" <i>Neuronal Development,
Synaptic Function &amp; Behavior, C. elegans meeting</i>, Madison, WI, June
27-30, 2010</span></p>

<p class=MsoNormal style='margin-left:27.0pt;text-indent:-27.0pt'><span
style='font-family:"Times","serif"'>&nbsp;</span></p>

<p class=MsoNormal style='margin-left:27.0pt;text-indent:-27.0pt'><span
style='font-family:"Times","serif"'>Andrew M. Leifer, Christopher Fang-Yen,
Marc Gershow, Aravinthan D. T. Samuel. "Spatiotemporal control of neural
activity in freely behaving <i>C. elegans,</i>" <i>Neuronal Circuits Meeting</i>,
Cold Spring Harbor, NY, March 10-13, 2010</span></p>

<p class=MsoNormal style='margin-left:27.0pt;text-indent:-27.0pt'><span
style='font-family:"Times","serif"'>&nbsp;</span></p>

<p class=MsoNormal style='margin-left:27.0pt;text-indent:-27.0pt'><span
style='font-family:"Times","serif"'>Andrew M. Leifer, William M. Shih, "Rigid
Linear Nano-Actuator Self-Assembled from DNA." <i>Biophysical Society 53<sup>rd</sup>
Annual Meeting, </i>Boston, MA, February 29- March 4, 2009.</span></p>

<p class=MsoNormal style='margin-left:27.0pt;text-indent:-27.0pt'><span
style='font-family:"Times","serif"'>&nbsp;</span></p>

<p class=MsoNormal style='margin-left:27.0pt;text-indent:-27.0pt'><span
style='font-family:"Times","serif"'>Tobi A Szuts, Bitaliy Fedeyv, Andrew
Leifer, Wladyslaw Dabrowsky, Naoshige Uchida, Alan Litke, Markus Meister,
"Wireless Recording from the Cortex of a Freely Roaming Rat." <i>CoSyNe 09</i>.
Salt Lake City, Utah. Februay 27, 2009.</span></p>

<p class=MsoNormal style='margin-left:26.0pt;text-indent:-26.0pt'><span
style='font-family:"Times","serif"'>&nbsp;</span></p>

<p class=MsoNormal style='margin-left:26.0pt;text-indent:-26.0pt'><span
style='font-family:"Times","serif"'>Tobi Szuts, V Fadeyev, S Kachiguine, MI
Grivich, A Sher, AM Leifer, N Uchida, AM Litcke, M Meister. "Wireless Recording
from Freely Behaving Rat," <i>Using In Vivo Physiology to Understand Neural
Circuits in Genetic Systems</i>. Janelia Farm, Virginia. April 20 - 23, 2008</span></p>

<p class=MsoNormal><span style='font-family:"Times","serif"'>&nbsp;</span></p>

<p class=MsoNormal style='margin-left:26.0pt;text-indent:-26.0pt'><span
style='font-family:"Times","serif"'>A. M. Leifer, D. G. Pothier, R. To.
&quot;Fractals, Power-Laws and the Weibull Distribution: Mathematically
Modeling Crumpled Paper." <i>Intel International Science and Engineering Fair</i>.
Cleveland, Ohio. May 15, 2003.</span></p>

<p class=MsoNormal><span style='font-family:"Times","serif"'>&nbsp;</span></p>

<p class=MsoNormal style='margin-left:26.0pt;text-indent:-26.0pt'><span
style='font-family:"Times","serif"'>&nbsp;</span></p>

<p class=MsoNormal style='margin-left:26.0pt;text-indent:-26.0pt'><span
style='font-family:"Times","serif"'>&nbsp;</span></p>
<p class=MsoNormal style='margin-left:27.0pt;text-indent:-27.0pt'><span
class=Resumelistthing></span></p></div></div>
<?php
include("footer.inc");
?>
