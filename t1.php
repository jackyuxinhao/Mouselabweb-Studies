<?php 
if (isset($_GET['subject'])) {$subject=$_GET['subject'];}
 else {$subject="anonymous";}
if (isset($_GET['condnum'])) {$condnum=$_GET['condnum'];}
	else {$condnum=-1;}?><HTML>
<HEAD>
<TITLE>ETF Investment Decision - US Region</TITLE>
<script language=javascript src="mlweb.js"></SCRIPT>
<link rel="stylesheet" href="mlweb.css" type="text/css">
</head>

<body onLoad="timefunction('onload','body','body')">
<script language="javascript">
ref_cur_hit = <?php echo($condnum);?>;
subject = "<?php echo($subject);?>";
</script>

<!--BEGIN TABLE STRUCTURE-->
<SCRIPT language="javascript">
//override defaults
mlweb_outtype="CSV";
mlweb_fname="mlwebform";
tag = "T1_ETF^US_T1_R6^US_T1_R2^US_T1_R1^US_T1_R4^US_T1_R3^US_T1_R5`"
 + "T1_Return^US_T1_R6_return^US_T1_R2_return^US_T1_R1_return^US_T1_R4_return^US_T1_R3_return^US_T1_R5_return`"
 + "T1_SD^US_T1_R6_risk^US_T1_R2_risk^US_T1_R1_risk^US_T1_R4_risk^US_T1_R3_risk^US_T1_R5_risk`"
 + "T1_Range^US_T1_R6_range^US_T1_R2_range^US_T1_R1_range^US_T1_R4_range^US_T1_R3_range^US_T1_R5_range";

txt = "ETF Name^Semiconductor ETF^U.S. Pharmaceuticals ETF^High Yield Muni Income Bond ETF^U.S. Equity Factor ETF^Select Dividend ETF^Russell Top 200 Growth ETF`"
 + "3-year Total Return (%)^47^22^18^38^30^44`"
 + "3-year Standard Deviation (%)^34^15^11^18^17^22`"
 + "Expected Return Range for 2025 (%)^13 ~ 81^6 ~ 37^7 ~ 29^20 ~ 55^13 ~ 48^22 ~ 65";

state = "0^0^0^0^0^0^0`"
 + "0^0^1^1^1^1^1`"
 + "0^0^1^1^1^1^1`"
 + "0^0^1^1^1^1^1";

box = "^^^^^^`"
 + "^3-year Total Return^3-year Total Return^3-year Total Return^3-year Total Return^3-year Total Return^3-year Total Return`"
 + "^3-year Standard Deviation^3-year Standard Deviation^3-year Standard Deviation^3-year Standard Deviation^3-year Standard Deviation^3-year Standard Deviation`"
 + "^Expected Return Range for 2025^Expected Return Range for 2025^Expected Return Range for 2025^Expected Return Range for 2025^Expected Return Range for 2025^Expected Return Range for 2025";

CBCol = "0^0^0^0^0^0^0";
CBRow = "0^0^0^0";
W_Col = "130^100^120^100^100^100^100";
H_Row = "50^60^60^80";

chkchoice = false;
btnFlg = 1;
btnType = "radio";
btntxt = "ETF Option^Semiconductor ETF^U.S. Pharmaceuticals ETF^High Yield Muni Income Bond ETF^U.S. Equity Factor ETF^Select Dividend ETF^Russell Top 200 Growth ETF";
btnstate = "0^1^1^1^1^1^1";
btntag = "btn7^US_T1_R6^US_T1_R2^US_T1_R1^US_T1_R4^US_T1_R3^US_T1_R5";
to_email = "jackyuxinhao@gmail.com";
colFix = false;
rowFix = false;
CBpreset = false;
evtOpen = 0;
evtClose = 0;
chkFrm=true;
warningTxt = "Some questions have not been answered. Please answer all questions before continuing!";
tmTotalSec = 60;
tmStepSec = 1;
tmWidthPx = 200;
tmFill = true;
tmShowTime = true;
tmCurTime = 0;
tmActive = true;
tmDirectStart = true;
tmMinLabel = "min";
tmSecLabel = "sec";
tmLabel = "Timer: ";

//Delay: US_T1_R2_return US_T1_R1_return US_T1_R4_return US_T1_R3_return US_T1_R5_return US_T1_R2_risk US_T1_R1_risk US_T1_R4_risk US_T1_R3_risk US_T1_R5_risk US_T1_R2_range US_T1_R1_range US_T1_R4_range US_T1_R3_range US_T1_R5_range
delay = "0^0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0^0`"
 + "0^0^0^0^0^0^0^0^0^0^0^0^0^0^0";
activeClass = "actTD";
inactiveClass = "inactTD";
boxClass = "boxTD";
cssname = "mlweb.css";
nextURL = "thanks.html";
expname = "t1";
randomOrder = false;
recOpenCells = false;
masterCond = 1;
loadMatrices();
</SCRIPT>
<!--END TABLE STRUCTURE-->

<FORM name="mlwebform" onSubmit="return checkForm(this)" method="POST" action="save.php"><INPUT type=hidden name="procdata" value="">
<input type=hidden name="subject" value="">
<input type=hidden name="expname" value="">
<input type=hidden name="nextURL" value="">
<input type=hidden name="choice" value="">
<input type=hidden name="condnum" value="">
<input type=hidden name="to_email" value="">
<!--BEGIN preHTML-->
Below is a set of ETFs in the US region.

The company has invested a substantial chunk of its assets in the Semiconductor ETF.

You need to decide whether to keep the assets in the Semiconductor ETF or transfer them to another ETF.


<!--END preHTML-->
<!-- MOUSELAB TABLE -->
<TABLE border=1>
<TR>
<!--cell a0(tag:T1_ETF)-->
<TD align=center valign=middle><DIV ID="a0_cont" style="position: relative; height: 50px; width: 130px;"><DIV ID="a0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 130px; clip: rect(0px 130px 50px 0px); z-index: 1;"><TABLE><TD ID="a0_td" align=center valign=center width=125 height=45 class="inactTD">ETF Name</TD></TABLE></DIV><DIV ID="a0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 130px; clip: rect(0px 130px 50px 0px); z-index: 2;"><TABLE><TD ID="a0_tdbox" align=center valign=center width=125 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 130px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a0" onMouseOver="ShowCont('a0',event)" onMouseOut="HideCont('a0',event)"><IMG NAME="a0" SRC="transp.gif" border=0 width=130 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a1(tag:US_T1_R6)-->
<TD align=center valign=middle><DIV ID="a1_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="a1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="a1_td" align=center valign=center width=95 height=45 class="inactTD">Semiconductor ETF</TD></TABLE></DIV><DIV ID="a1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="a1_tdbox" align=center valign=center width=95 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a1" onMouseOver="ShowCont('a1',event)" onMouseOut="HideCont('a1',event)"><IMG NAME="a1" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a2(tag:US_T1_R2)-->
<TD align=center valign=middle><DIV ID="a2_cont" style="position: relative; height: 50px; width: 120px;"><DIV ID="a2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 120px; clip: rect(0px 120px 50px 0px); z-index: 1;"><TABLE><TD ID="a2_td" align=center valign=center width=115 height=45 class="inactTD">U.S. Pharmaceuticals ETF</TD></TABLE></DIV><DIV ID="a2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 120px; clip: rect(0px 120px 50px 0px); z-index: 2;"><TABLE><TD ID="a2_tdbox" align=center valign=center width=115 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 120px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a2" onMouseOver="ShowCont('a2',event)" onMouseOut="HideCont('a2',event)"><IMG NAME="a2" SRC="transp.gif" border=0 width=120 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a3(tag:US_T1_R1)-->
<TD align=center valign=middle><DIV ID="a3_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="a3_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="a3_td" align=center valign=center width=95 height=45 class="inactTD">High Yield Muni Income Bond ETF</TD></TABLE></DIV><DIV ID="a3_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="a3_tdbox" align=center valign=center width=95 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a3_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a3" onMouseOver="ShowCont('a3',event)" onMouseOut="HideCont('a3',event)"><IMG NAME="a3" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a4(tag:US_T1_R4)-->
<TD align=center valign=middle><DIV ID="a4_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="a4_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="a4_td" align=center valign=center width=95 height=45 class="inactTD">U.S. Equity Factor ETF</TD></TABLE></DIV><DIV ID="a4_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="a4_tdbox" align=center valign=center width=95 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a4_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a4" onMouseOver="ShowCont('a4',event)" onMouseOut="HideCont('a4',event)"><IMG NAME="a4" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a5(tag:US_T1_R3)-->
<TD align=center valign=middle><DIV ID="a5_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="a5_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="a5_td" align=center valign=center width=95 height=45 class="inactTD">Select Dividend ETF</TD></TABLE></DIV><DIV ID="a5_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="a5_tdbox" align=center valign=center width=95 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a5_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a5" onMouseOver="ShowCont('a5',event)" onMouseOut="HideCont('a5',event)"><IMG NAME="a5" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a6(tag:US_T1_R5)-->
<TD align=center valign=middle><DIV ID="a6_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="a6_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="a6_td" align=center valign=center width=95 height=45 class="inactTD">Russell Top 200 Growth ETF</TD></TABLE></DIV><DIV ID="a6_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="a6_tdbox" align=center valign=center width=95 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a6_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a6" onMouseOver="ShowCont('a6',event)" onMouseOut="HideCont('a6',event)"><IMG NAME="a6" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell--></TR><TR>
<!--cell b0(tag:T1_Return)-->
<TD align=center valign=middle><DIV ID="b0_cont" style="position: relative; height: 60px; width: 130px;"><DIV ID="b0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 130px; clip: rect(0px 130px 60px 0px); z-index: 1;"><TABLE><TD ID="b0_td" align=center valign=center width=125 height=55 class="inactTD">3-year Total Return (%)</TD></TABLE></DIV><DIV ID="b0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 130px; clip: rect(0px 130px 60px 0px); z-index: 2;"><TABLE><TD ID="b0_tdbox" align=center valign=center width=125 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="b0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 130px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b0" onMouseOver="ShowCont('b0',event)" onMouseOut="HideCont('b0',event)"><IMG NAME="b0" SRC="transp.gif" border=0 width=130 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b1(tag:US_T1_R6_return)-->
<TD align=center valign=middle><DIV ID="b1_cont" style="position: relative; height: 60px; width: 100px;"><DIV ID="b1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 1;"><TABLE><TD ID="b1_td" align=center valign=center width=95 height=55 class="inactTD">47</TD></TABLE></DIV><DIV ID="b1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 2;"><TABLE><TD ID="b1_tdbox" align=center valign=center width=95 height=55 class="boxTD">3-year Total Return</TD></TABLE></DIV><DIV ID="b1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b1" onMouseOver="ShowCont('b1',event)" onMouseOut="HideCont('b1',event)"><IMG NAME="b1" SRC="transp.gif" border=0 width=100 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b2(tag:US_T1_R2_return)-->
<TD align=center valign=middle><DIV ID="b2_cont" style="position: relative; height: 60px; width: 120px;"><DIV ID="b2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 120px; clip: rect(0px 120px 60px 0px); z-index: 1;"><TABLE><TD ID="b2_td" align=center valign=center width=115 height=55 class="actTD">22</TD></TABLE></DIV><DIV ID="b2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 120px; clip: rect(0px 120px 60px 0px); z-index: 2;"><TABLE><TD ID="b2_tdbox" align=center valign=center width=115 height=55 class="boxTD">3-year Total Return</TD></TABLE></DIV><DIV ID="b2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 120px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b2" onMouseOver="ShowCont('b2',event)" onMouseOut="HideCont('b2',event)"><IMG NAME="b2" SRC="transp.gif" border=0 width=120 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b3(tag:US_T1_R1_return)-->
<TD align=center valign=middle><DIV ID="b3_cont" style="position: relative; height: 60px; width: 100px;"><DIV ID="b3_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 1;"><TABLE><TD ID="b3_td" align=center valign=center width=95 height=55 class="actTD">18</TD></TABLE></DIV><DIV ID="b3_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 2;"><TABLE><TD ID="b3_tdbox" align=center valign=center width=95 height=55 class="boxTD">3-year Total Return</TD></TABLE></DIV><DIV ID="b3_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b3" onMouseOver="ShowCont('b3',event)" onMouseOut="HideCont('b3',event)"><IMG NAME="b3" SRC="transp.gif" border=0 width=100 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b4(tag:US_T1_R4_return)-->
<TD align=center valign=middle><DIV ID="b4_cont" style="position: relative; height: 60px; width: 100px;"><DIV ID="b4_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 1;"><TABLE><TD ID="b4_td" align=center valign=center width=95 height=55 class="actTD">38</TD></TABLE></DIV><DIV ID="b4_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 2;"><TABLE><TD ID="b4_tdbox" align=center valign=center width=95 height=55 class="boxTD">3-year Total Return</TD></TABLE></DIV><DIV ID="b4_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b4" onMouseOver="ShowCont('b4',event)" onMouseOut="HideCont('b4',event)"><IMG NAME="b4" SRC="transp.gif" border=0 width=100 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b5(tag:US_T1_R3_return)-->
<TD align=center valign=middle><DIV ID="b5_cont" style="position: relative; height: 60px; width: 100px;"><DIV ID="b5_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 1;"><TABLE><TD ID="b5_td" align=center valign=center width=95 height=55 class="actTD">30</TD></TABLE></DIV><DIV ID="b5_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 2;"><TABLE><TD ID="b5_tdbox" align=center valign=center width=95 height=55 class="boxTD">3-year Total Return</TD></TABLE></DIV><DIV ID="b5_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b5" onMouseOver="ShowCont('b5',event)" onMouseOut="HideCont('b5',event)"><IMG NAME="b5" SRC="transp.gif" border=0 width=100 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b6(tag:US_T1_R5_return)-->
<TD align=center valign=middle><DIV ID="b6_cont" style="position: relative; height: 60px; width: 100px;"><DIV ID="b6_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 1;"><TABLE><TD ID="b6_td" align=center valign=center width=95 height=55 class="actTD">44</TD></TABLE></DIV><DIV ID="b6_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 2;"><TABLE><TD ID="b6_tdbox" align=center valign=center width=95 height=55 class="boxTD">3-year Total Return</TD></TABLE></DIV><DIV ID="b6_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b6" onMouseOver="ShowCont('b6',event)" onMouseOut="HideCont('b6',event)"><IMG NAME="b6" SRC="transp.gif" border=0 width=100 height=60></A></DIV></DIV></TD>
<!--end cell--></TR><TR>
<!--cell c0(tag:T1_SD)-->
<TD align=center valign=middle><DIV ID="c0_cont" style="position: relative; height: 60px; width: 130px;"><DIV ID="c0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 130px; clip: rect(0px 130px 60px 0px); z-index: 1;"><TABLE><TD ID="c0_td" align=center valign=center width=125 height=55 class="inactTD">3-year Standard Deviation (%)</TD></TABLE></DIV><DIV ID="c0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 130px; clip: rect(0px 130px 60px 0px); z-index: 2;"><TABLE><TD ID="c0_tdbox" align=center valign=center width=125 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="c0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 130px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c0" onMouseOver="ShowCont('c0',event)" onMouseOut="HideCont('c0',event)"><IMG NAME="c0" SRC="transp.gif" border=0 width=130 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c1(tag:US_T1_R6_risk)-->
<TD align=center valign=middle><DIV ID="c1_cont" style="position: relative; height: 60px; width: 100px;"><DIV ID="c1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 1;"><TABLE><TD ID="c1_td" align=center valign=center width=95 height=55 class="inactTD">34</TD></TABLE></DIV><DIV ID="c1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 2;"><TABLE><TD ID="c1_tdbox" align=center valign=center width=95 height=55 class="boxTD">3-year Standard Deviation</TD></TABLE></DIV><DIV ID="c1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c1" onMouseOver="ShowCont('c1',event)" onMouseOut="HideCont('c1',event)"><IMG NAME="c1" SRC="transp.gif" border=0 width=100 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c2(tag:US_T1_R2_risk)-->
<TD align=center valign=middle><DIV ID="c2_cont" style="position: relative; height: 60px; width: 120px;"><DIV ID="c2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 120px; clip: rect(0px 120px 60px 0px); z-index: 1;"><TABLE><TD ID="c2_td" align=center valign=center width=115 height=55 class="actTD">15</TD></TABLE></DIV><DIV ID="c2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 120px; clip: rect(0px 120px 60px 0px); z-index: 2;"><TABLE><TD ID="c2_tdbox" align=center valign=center width=115 height=55 class="boxTD">3-year Standard Deviation</TD></TABLE></DIV><DIV ID="c2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 120px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c2" onMouseOver="ShowCont('c2',event)" onMouseOut="HideCont('c2',event)"><IMG NAME="c2" SRC="transp.gif" border=0 width=120 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c3(tag:US_T1_R1_risk)-->
<TD align=center valign=middle><DIV ID="c3_cont" style="position: relative; height: 60px; width: 100px;"><DIV ID="c3_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 1;"><TABLE><TD ID="c3_td" align=center valign=center width=95 height=55 class="actTD">11</TD></TABLE></DIV><DIV ID="c3_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 2;"><TABLE><TD ID="c3_tdbox" align=center valign=center width=95 height=55 class="boxTD">3-year Standard Deviation</TD></TABLE></DIV><DIV ID="c3_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c3" onMouseOver="ShowCont('c3',event)" onMouseOut="HideCont('c3',event)"><IMG NAME="c3" SRC="transp.gif" border=0 width=100 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c4(tag:US_T1_R4_risk)-->
<TD align=center valign=middle><DIV ID="c4_cont" style="position: relative; height: 60px; width: 100px;"><DIV ID="c4_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 1;"><TABLE><TD ID="c4_td" align=center valign=center width=95 height=55 class="actTD">18</TD></TABLE></DIV><DIV ID="c4_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 2;"><TABLE><TD ID="c4_tdbox" align=center valign=center width=95 height=55 class="boxTD">3-year Standard Deviation</TD></TABLE></DIV><DIV ID="c4_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c4" onMouseOver="ShowCont('c4',event)" onMouseOut="HideCont('c4',event)"><IMG NAME="c4" SRC="transp.gif" border=0 width=100 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c5(tag:US_T1_R3_risk)-->
<TD align=center valign=middle><DIV ID="c5_cont" style="position: relative; height: 60px; width: 100px;"><DIV ID="c5_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 1;"><TABLE><TD ID="c5_td" align=center valign=center width=95 height=55 class="actTD">17</TD></TABLE></DIV><DIV ID="c5_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 2;"><TABLE><TD ID="c5_tdbox" align=center valign=center width=95 height=55 class="boxTD">3-year Standard Deviation</TD></TABLE></DIV><DIV ID="c5_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c5" onMouseOver="ShowCont('c5',event)" onMouseOut="HideCont('c5',event)"><IMG NAME="c5" SRC="transp.gif" border=0 width=100 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c6(tag:US_T1_R5_risk)-->
<TD align=center valign=middle><DIV ID="c6_cont" style="position: relative; height: 60px; width: 100px;"><DIV ID="c6_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 1;"><TABLE><TD ID="c6_td" align=center valign=center width=95 height=55 class="actTD">22</TD></TABLE></DIV><DIV ID="c6_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 2;"><TABLE><TD ID="c6_tdbox" align=center valign=center width=95 height=55 class="boxTD">3-year Standard Deviation</TD></TABLE></DIV><DIV ID="c6_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c6" onMouseOver="ShowCont('c6',event)" onMouseOut="HideCont('c6',event)"><IMG NAME="c6" SRC="transp.gif" border=0 width=100 height=60></A></DIV></DIV></TD>
<!--end cell--></TR><TR>
<!--cell d0(tag:T1_Range)-->
<TD align=center valign=middle><DIV ID="d0_cont" style="position: relative; height: 80px; width: 130px;"><DIV ID="d0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 130px; clip: rect(0px 130px 80px 0px); z-index: 1;"><TABLE><TD ID="d0_td" align=center valign=center width=125 height=75 class="inactTD">Expected Return Range for 2025 (%)</TD></TABLE></DIV><DIV ID="d0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 130px; clip: rect(0px 130px 80px 0px); z-index: 2;"><TABLE><TD ID="d0_tdbox" align=center valign=center width=125 height=75 class="boxTD"></TD></TABLE></DIV><DIV ID="d0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 130px; z-index: 5;"><A HREF="javascript:void(0);" NAME="d0" onMouseOver="ShowCont('d0',event)" onMouseOut="HideCont('d0',event)"><IMG NAME="d0" SRC="transp.gif" border=0 width=130 height=80></A></DIV></DIV></TD>
<!--end cell-->
<!--cell d1(tag:US_T1_R6_range)-->
<TD align=center valign=middle><DIV ID="d1_cont" style="position: relative; height: 80px; width: 100px;"><DIV ID="d1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; clip: rect(0px 100px 80px 0px); z-index: 1;"><TABLE><TD ID="d1_td" align=center valign=center width=95 height=75 class="inactTD">13 ~ 81</TD></TABLE></DIV><DIV ID="d1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; clip: rect(0px 100px 80px 0px); z-index: 2;"><TABLE><TD ID="d1_tdbox" align=center valign=center width=95 height=75 class="boxTD">Expected Return Range for 2025</TD></TABLE></DIV><DIV ID="d1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="d1" onMouseOver="ShowCont('d1',event)" onMouseOut="HideCont('d1',event)"><IMG NAME="d1" SRC="transp.gif" border=0 width=100 height=80></A></DIV></DIV></TD>
<!--end cell-->
<!--cell d2(tag:US_T1_R2_range)-->
<TD align=center valign=middle><DIV ID="d2_cont" style="position: relative; height: 80px; width: 120px;"><DIV ID="d2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 120px; clip: rect(0px 120px 80px 0px); z-index: 1;"><TABLE><TD ID="d2_td" align=center valign=center width=115 height=75 class="actTD">6 ~ 37</TD></TABLE></DIV><DIV ID="d2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 120px; clip: rect(0px 120px 80px 0px); z-index: 2;"><TABLE><TD ID="d2_tdbox" align=center valign=center width=115 height=75 class="boxTD">Expected Return Range for 2025</TD></TABLE></DIV><DIV ID="d2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 120px; z-index: 5;"><A HREF="javascript:void(0);" NAME="d2" onMouseOver="ShowCont('d2',event)" onMouseOut="HideCont('d2',event)"><IMG NAME="d2" SRC="transp.gif" border=0 width=120 height=80></A></DIV></DIV></TD>
<!--end cell-->
<!--cell d3(tag:US_T1_R1_range)-->
<TD align=center valign=middle><DIV ID="d3_cont" style="position: relative; height: 80px; width: 100px;"><DIV ID="d3_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; clip: rect(0px 100px 80px 0px); z-index: 1;"><TABLE><TD ID="d3_td" align=center valign=center width=95 height=75 class="actTD">7 ~ 29</TD></TABLE></DIV><DIV ID="d3_box" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; clip: rect(0px 100px 80px 0px); z-index: 2;"><TABLE><TD ID="d3_tdbox" align=center valign=center width=95 height=75 class="boxTD">Expected Return Range for 2025</TD></TABLE></DIV><DIV ID="d3_img" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="d3" onMouseOver="ShowCont('d3',event)" onMouseOut="HideCont('d3',event)"><IMG NAME="d3" SRC="transp.gif" border=0 width=100 height=80></A></DIV></DIV></TD>
<!--end cell-->
<!--cell d4(tag:US_T1_R4_range)-->
<TD align=center valign=middle><DIV ID="d4_cont" style="position: relative; height: 80px; width: 100px;"><DIV ID="d4_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; clip: rect(0px 100px 80px 0px); z-index: 1;"><TABLE><TD ID="d4_td" align=center valign=center width=95 height=75 class="actTD">20 ~ 55</TD></TABLE></DIV><DIV ID="d4_box" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; clip: rect(0px 100px 80px 0px); z-index: 2;"><TABLE><TD ID="d4_tdbox" align=center valign=center width=95 height=75 class="boxTD">Expected Return Range for 2025</TD></TABLE></DIV><DIV ID="d4_img" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="d4" onMouseOver="ShowCont('d4',event)" onMouseOut="HideCont('d4',event)"><IMG NAME="d4" SRC="transp.gif" border=0 width=100 height=80></A></DIV></DIV></TD>
<!--end cell-->
<!--cell d5(tag:US_T1_R3_range)-->
<TD align=center valign=middle><DIV ID="d5_cont" style="position: relative; height: 80px; width: 100px;"><DIV ID="d5_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; clip: rect(0px 100px 80px 0px); z-index: 1;"><TABLE><TD ID="d5_td" align=center valign=center width=95 height=75 class="actTD">13 ~ 48</TD></TABLE></DIV><DIV ID="d5_box" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; clip: rect(0px 100px 80px 0px); z-index: 2;"><TABLE><TD ID="d5_tdbox" align=center valign=center width=95 height=75 class="boxTD">Expected Return Range for 2025</TD></TABLE></DIV><DIV ID="d5_img" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="d5" onMouseOver="ShowCont('d5',event)" onMouseOut="HideCont('d5',event)"><IMG NAME="d5" SRC="transp.gif" border=0 width=100 height=80></A></DIV></DIV></TD>
<!--end cell-->
<!--cell d6(tag:US_T1_R5_range)-->
<TD align=center valign=middle><DIV ID="d6_cont" style="position: relative; height: 80px; width: 100px;"><DIV ID="d6_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; clip: rect(0px 100px 80px 0px); z-index: 1;"><TABLE><TD ID="d6_td" align=center valign=center width=95 height=75 class="actTD">22 ~ 65</TD></TABLE></DIV><DIV ID="d6_box" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; clip: rect(0px 100px 80px 0px); z-index: 2;"><TABLE><TD ID="d6_tdbox" align=center valign=center width=95 height=75 class="boxTD">Expected Return Range for 2025</TD></TABLE></DIV><DIV ID="d6_img" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="d6" onMouseOver="ShowCont('d6',event)" onMouseOut="HideCont('d6',event)"><IMG NAME="d6" SRC="transp.gif" border=0 width=100 height=80></A></DIV></DIV></TD>
<!--end cell--></TR><TR><TD ID="btn_0" style="border-left-style: none; border-right-style: none; border-bottom-style: none;"> </TD><TD ID="btn_1" style="border-left-style: none; border-right-style: none; border-bottom-style: none;" align=center valign=middle><INPUT type="radio" name="mlchoice" value="US_T1_R6" onMouseOver="timefunction('mouseover','US_T1_R6','Semiconductor ETF')" onClick="recChoice('onclick','US_T1_R6','Semiconductor ETF')" onMouseOut="timefunction('mouseout','US_T1_R6','Semiconductor ETF')">Semiconductor ETF</TD>
<TD ID="btn_2" style="border-left-style: none; border-right-style: none; border-bottom-style: none;" align=center valign=middle><INPUT type="radio" name="mlchoice" value="US_T1_R2" onMouseOver="timefunction('mouseover','US_T1_R2','U.S. Pharmaceuticals ETF')" onClick="recChoice('onclick','US_T1_R2','U.S. Pharmaceuticals ETF')" onMouseOut="timefunction('mouseout','US_T1_R2','U.S. Pharmaceuticals ETF')">U.S. Pharmaceuticals ETF</TD>
<TD ID="btn_3" style="border-left-style: none; border-right-style: none; border-bottom-style: none;" align=center valign=middle><INPUT type="radio" name="mlchoice" value="US_T1_R1" onMouseOver="timefunction('mouseover','US_T1_R1','High Yield Muni Income Bond ETF')" onClick="recChoice('onclick','US_T1_R1','High Yield Muni Income Bond ETF')" onMouseOut="timefunction('mouseout','US_T1_R1','High Yield Muni Income Bond ETF')">High Yield Muni Income Bond ETF</TD>
<TD ID="btn_4" style="border-left-style: none; border-right-style: none; border-bottom-style: none;" align=center valign=middle><INPUT type="radio" name="mlchoice" value="US_T1_R4" onMouseOver="timefunction('mouseover','US_T1_R4','U.S. Equity Factor ETF')" onClick="recChoice('onclick','US_T1_R4','U.S. Equity Factor ETF')" onMouseOut="timefunction('mouseout','US_T1_R4','U.S. Equity Factor ETF')">U.S. Equity Factor ETF</TD>
<TD ID="btn_5" style="border-left-style: none; border-right-style: none; border-bottom-style: none;" align=center valign=middle><INPUT type="radio" name="mlchoice" value="US_T1_R3" onMouseOver="timefunction('mouseover','US_T1_R3','Select Dividend ETF')" onClick="recChoice('onclick','US_T1_R3','Select Dividend ETF')" onMouseOut="timefunction('mouseout','US_T1_R3','Select Dividend ETF')">Select Dividend ETF</TD>
<TD ID="btn_6" style="border-left-style: none; border-right-style: none; border-bottom-style: none;" align=center valign=middle><INPUT type="radio" name="mlchoice" value="US_T1_R5" onMouseOver="timefunction('mouseover','US_T1_R5','Russell Top 200 Growth ETF')" onClick="recChoice('onclick','US_T1_R5','Russell Top 200 Growth ETF')" onMouseOut="timefunction('mouseout','US_T1_R5','Russell Top 200 Growth ETF')">Russell Top 200 Growth ETF</TD>
</TR></TABLE>
<!-- END MOUSELAB TABLE -->
<!--BEGIN postHTML-->

<!--END postHTML--><INPUT type="submit" value="Next Page" onClick=timefunction('submit','submit','submit')></FORM></body></html>
