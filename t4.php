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
tag = "T4_ETF^EU_T4_R1^EU_T4_R6^EU_T4_R4^EU_T4_R5^EU_T4_R2^EU_T4_R3`"
 + "T4_Return^EU_T4_R1_return^EU_T4_R6_return^EU_T4_R4_return^EU_T4_R5_return^EU_T4_R2_return^EU_T4_R3_return`"
 + "T4_SD^EU_T4_R1_risk^EU_T4_R6_risk^EU_T4_R4_risk^EU_T4_R5_risk^EU_T4_R2_risk^EU_T4_R3_risk`"
 + "T4_Range^EU_T4_R1_range^EU_T4_R6_range^EU_T4_R4_range^EU_T4_R5_range^EU_T4_R2_range^EU_T4_R3_range";

txt = "ETF Name^MSCI Switzerland ETF^MSCI Sweden ETF^MSCI Germany ETF^MSCI Netherlands ETF^MSCI Eurozone ETF^MSCI Ireland ETF`"
 + "3-year Total Return (%)^22^37^32^35^27^29`"
 + "3-year Standard Deviation (%)^18^26^24^25^22^23`"
 + "Expected Return Range for 2025 (%)^4 ~ 40^11 ~ 63^9 ~ 56^10 ~ 60^5 ~ 49^6 ~ 52";

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
W_Col = "130^100^110^100^100^100^100";
H_Row = "50^60^60^80";

chkchoice = false;
btnFlg = 1;
btnType = "radio";
btntxt = "ETF Option^MSCI Switzerland ETF^MSCI Sweden ETF^MSCI Germany ETF^MSCI Netherlands ETF^MSCI Eurozone ETF^MSCI Ireland ETF";
btnstate = "0^1^1^1^1^1^1";
btntag = "btn7^EU_T4_R1^EU_T4_R6^EU_T4_R4^EU_T4_R5^EU_T4_R2^EU_T4_R3";
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

//Delay: EU_T4_R6_return EU_T4_R4_return EU_T4_R5_return EU_T4_R2_return EU_T4_R3_return EU_T4_R6_risk EU_T4_R4_risk EU_T4_R5_risk EU_T4_R2_risk EU_T4_R3_risk EU_T4_R6_range EU_T4_R4_range EU_T4_R5_range EU_T4_R2_range EU_T4_R3_range
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
expname = "t4";
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
Below is a set of ETFs in the European region.

The company has invested a substantial chunk of its assets in the MSCI Switzerland ETF.

You need to decide whether to keep the assets in the MSCI Switzerland ETF or transfer them to another ETF.



<!--END preHTML-->
<!-- MOUSELAB TABLE -->
<TABLE border=1>
<TR>
<!--cell a0(tag:T4_ETF)-->
<TD align=center valign=middle><DIV ID="a0_cont" style="position: relative; height: 50px; width: 130px;"><DIV ID="a0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 130px; clip: rect(0px 130px 50px 0px); z-index: 1;"><TABLE><TD ID="a0_td" align=center valign=center width=125 height=45 class="inactTD">ETF Name</TD></TABLE></DIV><DIV ID="a0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 130px; clip: rect(0px 130px 50px 0px); z-index: 2;"><TABLE><TD ID="a0_tdbox" align=center valign=center width=125 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 130px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a0" onMouseOver="ShowCont('a0',event)" onMouseOut="HideCont('a0',event)"><IMG NAME="a0" SRC="transp.gif" border=0 width=130 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a1(tag:EU_T4_R1)-->
<TD align=center valign=middle><DIV ID="a1_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="a1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="a1_td" align=center valign=center width=95 height=45 class="inactTD">MSCI Switzerland ETF</TD></TABLE></DIV><DIV ID="a1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="a1_tdbox" align=center valign=center width=95 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a1" onMouseOver="ShowCont('a1',event)" onMouseOut="HideCont('a1',event)"><IMG NAME="a1" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a2(tag:EU_T4_R6)-->
<TD align=center valign=middle><DIV ID="a2_cont" style="position: relative; height: 50px; width: 110px;"><DIV ID="a2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 110px; clip: rect(0px 110px 50px 0px); z-index: 1;"><TABLE><TD ID="a2_td" align=center valign=center width=105 height=45 class="inactTD">MSCI Sweden ETF</TD></TABLE></DIV><DIV ID="a2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 110px; clip: rect(0px 110px 50px 0px); z-index: 2;"><TABLE><TD ID="a2_tdbox" align=center valign=center width=105 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 110px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a2" onMouseOver="ShowCont('a2',event)" onMouseOut="HideCont('a2',event)"><IMG NAME="a2" SRC="transp.gif" border=0 width=110 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a3(tag:EU_T4_R4)-->
<TD align=center valign=middle><DIV ID="a3_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="a3_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="a3_td" align=center valign=center width=95 height=45 class="inactTD">MSCI Germany ETF</TD></TABLE></DIV><DIV ID="a3_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="a3_tdbox" align=center valign=center width=95 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a3_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a3" onMouseOver="ShowCont('a3',event)" onMouseOut="HideCont('a3',event)"><IMG NAME="a3" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a4(tag:EU_T4_R5)-->
<TD align=center valign=middle><DIV ID="a4_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="a4_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="a4_td" align=center valign=center width=95 height=45 class="inactTD">MSCI Netherlands ETF</TD></TABLE></DIV><DIV ID="a4_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="a4_tdbox" align=center valign=center width=95 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a4_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a4" onMouseOver="ShowCont('a4',event)" onMouseOut="HideCont('a4',event)"><IMG NAME="a4" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a5(tag:EU_T4_R2)-->
<TD align=center valign=middle><DIV ID="a5_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="a5_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="a5_td" align=center valign=center width=95 height=45 class="inactTD">MSCI Eurozone ETF</TD></TABLE></DIV><DIV ID="a5_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="a5_tdbox" align=center valign=center width=95 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a5_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a5" onMouseOver="ShowCont('a5',event)" onMouseOut="HideCont('a5',event)"><IMG NAME="a5" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell-->
<!--cell a6(tag:EU_T4_R3)-->
<TD align=center valign=middle><DIV ID="a6_cont" style="position: relative; height: 50px; width: 100px;"><DIV ID="a6_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 1;"><TABLE><TD ID="a6_td" align=center valign=center width=95 height=45 class="inactTD">MSCI Ireland ETF</TD></TABLE></DIV><DIV ID="a6_box" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; clip: rect(0px 100px 50px 0px); z-index: 2;"><TABLE><TD ID="a6_tdbox" align=center valign=center width=95 height=45 class="boxTD"></TD></TABLE></DIV><DIV ID="a6_img" STYLE="position: absolute; left: 0px; top: 0px; height: 50px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="a6" onMouseOver="ShowCont('a6',event)" onMouseOut="HideCont('a6',event)"><IMG NAME="a6" SRC="transp.gif" border=0 width=100 height=50></A></DIV></DIV></TD>
<!--end cell--></TR><TR>
<!--cell b0(tag:T4_Return)-->
<TD align=center valign=middle><DIV ID="b0_cont" style="position: relative; height: 60px; width: 130px;"><DIV ID="b0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 130px; clip: rect(0px 130px 60px 0px); z-index: 1;"><TABLE><TD ID="b0_td" align=center valign=center width=125 height=55 class="inactTD">3-year Total Return (%)</TD></TABLE></DIV><DIV ID="b0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 130px; clip: rect(0px 130px 60px 0px); z-index: 2;"><TABLE><TD ID="b0_tdbox" align=center valign=center width=125 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="b0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 130px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b0" onMouseOver="ShowCont('b0',event)" onMouseOut="HideCont('b0',event)"><IMG NAME="b0" SRC="transp.gif" border=0 width=130 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b1(tag:EU_T4_R1_return)-->
<TD align=center valign=middle><DIV ID="b1_cont" style="position: relative; height: 60px; width: 100px;"><DIV ID="b1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 1;"><TABLE><TD ID="b1_td" align=center valign=center width=95 height=55 class="inactTD">22</TD></TABLE></DIV><DIV ID="b1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 2;"><TABLE><TD ID="b1_tdbox" align=center valign=center width=95 height=55 class="boxTD">3-year Total Return</TD></TABLE></DIV><DIV ID="b1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b1" onMouseOver="ShowCont('b1',event)" onMouseOut="HideCont('b1',event)"><IMG NAME="b1" SRC="transp.gif" border=0 width=100 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b2(tag:EU_T4_R6_return)-->
<TD align=center valign=middle><DIV ID="b2_cont" style="position: relative; height: 60px; width: 110px;"><DIV ID="b2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 110px; clip: rect(0px 110px 60px 0px); z-index: 1;"><TABLE><TD ID="b2_td" align=center valign=center width=105 height=55 class="actTD">37</TD></TABLE></DIV><DIV ID="b2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 110px; clip: rect(0px 110px 60px 0px); z-index: 2;"><TABLE><TD ID="b2_tdbox" align=center valign=center width=105 height=55 class="boxTD">3-year Total Return</TD></TABLE></DIV><DIV ID="b2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 110px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b2" onMouseOver="ShowCont('b2',event)" onMouseOut="HideCont('b2',event)"><IMG NAME="b2" SRC="transp.gif" border=0 width=110 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b3(tag:EU_T4_R4_return)-->
<TD align=center valign=middle><DIV ID="b3_cont" style="position: relative; height: 60px; width: 100px;"><DIV ID="b3_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 1;"><TABLE><TD ID="b3_td" align=center valign=center width=95 height=55 class="actTD">32</TD></TABLE></DIV><DIV ID="b3_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 2;"><TABLE><TD ID="b3_tdbox" align=center valign=center width=95 height=55 class="boxTD">3-year Total Return</TD></TABLE></DIV><DIV ID="b3_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b3" onMouseOver="ShowCont('b3',event)" onMouseOut="HideCont('b3',event)"><IMG NAME="b3" SRC="transp.gif" border=0 width=100 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b4(tag:EU_T4_R5_return)-->
<TD align=center valign=middle><DIV ID="b4_cont" style="position: relative; height: 60px; width: 100px;"><DIV ID="b4_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 1;"><TABLE><TD ID="b4_td" align=center valign=center width=95 height=55 class="actTD">35</TD></TABLE></DIV><DIV ID="b4_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 2;"><TABLE><TD ID="b4_tdbox" align=center valign=center width=95 height=55 class="boxTD">3-year Total Return</TD></TABLE></DIV><DIV ID="b4_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b4" onMouseOver="ShowCont('b4',event)" onMouseOut="HideCont('b4',event)"><IMG NAME="b4" SRC="transp.gif" border=0 width=100 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b5(tag:EU_T4_R2_return)-->
<TD align=center valign=middle><DIV ID="b5_cont" style="position: relative; height: 60px; width: 100px;"><DIV ID="b5_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 1;"><TABLE><TD ID="b5_td" align=center valign=center width=95 height=55 class="actTD">27</TD></TABLE></DIV><DIV ID="b5_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 2;"><TABLE><TD ID="b5_tdbox" align=center valign=center width=95 height=55 class="boxTD">3-year Total Return</TD></TABLE></DIV><DIV ID="b5_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b5" onMouseOver="ShowCont('b5',event)" onMouseOut="HideCont('b5',event)"><IMG NAME="b5" SRC="transp.gif" border=0 width=100 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell b6(tag:EU_T4_R3_return)-->
<TD align=center valign=middle><DIV ID="b6_cont" style="position: relative; height: 60px; width: 100px;"><DIV ID="b6_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 1;"><TABLE><TD ID="b6_td" align=center valign=center width=95 height=55 class="actTD">29</TD></TABLE></DIV><DIV ID="b6_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 2;"><TABLE><TD ID="b6_tdbox" align=center valign=center width=95 height=55 class="boxTD">3-year Total Return</TD></TABLE></DIV><DIV ID="b6_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="b6" onMouseOver="ShowCont('b6',event)" onMouseOut="HideCont('b6',event)"><IMG NAME="b6" SRC="transp.gif" border=0 width=100 height=60></A></DIV></DIV></TD>
<!--end cell--></TR><TR>
<!--cell c0(tag:T4_SD)-->
<TD align=center valign=middle><DIV ID="c0_cont" style="position: relative; height: 60px; width: 130px;"><DIV ID="c0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 130px; clip: rect(0px 130px 60px 0px); z-index: 1;"><TABLE><TD ID="c0_td" align=center valign=center width=125 height=55 class="inactTD">3-year Standard Deviation (%)</TD></TABLE></DIV><DIV ID="c0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 130px; clip: rect(0px 130px 60px 0px); z-index: 2;"><TABLE><TD ID="c0_tdbox" align=center valign=center width=125 height=55 class="boxTD"></TD></TABLE></DIV><DIV ID="c0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 130px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c0" onMouseOver="ShowCont('c0',event)" onMouseOut="HideCont('c0',event)"><IMG NAME="c0" SRC="transp.gif" border=0 width=130 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c1(tag:EU_T4_R1_risk)-->
<TD align=center valign=middle><DIV ID="c1_cont" style="position: relative; height: 60px; width: 100px;"><DIV ID="c1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 1;"><TABLE><TD ID="c1_td" align=center valign=center width=95 height=55 class="inactTD">18</TD></TABLE></DIV><DIV ID="c1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 2;"><TABLE><TD ID="c1_tdbox" align=center valign=center width=95 height=55 class="boxTD">3-year Standard Deviation</TD></TABLE></DIV><DIV ID="c1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c1" onMouseOver="ShowCont('c1',event)" onMouseOut="HideCont('c1',event)"><IMG NAME="c1" SRC="transp.gif" border=0 width=100 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c2(tag:EU_T4_R6_risk)-->
<TD align=center valign=middle><DIV ID="c2_cont" style="position: relative; height: 60px; width: 110px;"><DIV ID="c2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 110px; clip: rect(0px 110px 60px 0px); z-index: 1;"><TABLE><TD ID="c2_td" align=center valign=center width=105 height=55 class="actTD">26</TD></TABLE></DIV><DIV ID="c2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 110px; clip: rect(0px 110px 60px 0px); z-index: 2;"><TABLE><TD ID="c2_tdbox" align=center valign=center width=105 height=55 class="boxTD">3-year Standard Deviation</TD></TABLE></DIV><DIV ID="c2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 110px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c2" onMouseOver="ShowCont('c2',event)" onMouseOut="HideCont('c2',event)"><IMG NAME="c2" SRC="transp.gif" border=0 width=110 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c3(tag:EU_T4_R4_risk)-->
<TD align=center valign=middle><DIV ID="c3_cont" style="position: relative; height: 60px; width: 100px;"><DIV ID="c3_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 1;"><TABLE><TD ID="c3_td" align=center valign=center width=95 height=55 class="actTD">24</TD></TABLE></DIV><DIV ID="c3_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 2;"><TABLE><TD ID="c3_tdbox" align=center valign=center width=95 height=55 class="boxTD">3-year Standard Deviation</TD></TABLE></DIV><DIV ID="c3_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c3" onMouseOver="ShowCont('c3',event)" onMouseOut="HideCont('c3',event)"><IMG NAME="c3" SRC="transp.gif" border=0 width=100 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c4(tag:EU_T4_R5_risk)-->
<TD align=center valign=middle><DIV ID="c4_cont" style="position: relative; height: 60px; width: 100px;"><DIV ID="c4_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 1;"><TABLE><TD ID="c4_td" align=center valign=center width=95 height=55 class="actTD">25</TD></TABLE></DIV><DIV ID="c4_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 2;"><TABLE><TD ID="c4_tdbox" align=center valign=center width=95 height=55 class="boxTD">3-year Standard Deviation</TD></TABLE></DIV><DIV ID="c4_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c4" onMouseOver="ShowCont('c4',event)" onMouseOut="HideCont('c4',event)"><IMG NAME="c4" SRC="transp.gif" border=0 width=100 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c5(tag:EU_T4_R2_risk)-->
<TD align=center valign=middle><DIV ID="c5_cont" style="position: relative; height: 60px; width: 100px;"><DIV ID="c5_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 1;"><TABLE><TD ID="c5_td" align=center valign=center width=95 height=55 class="actTD">22</TD></TABLE></DIV><DIV ID="c5_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 2;"><TABLE><TD ID="c5_tdbox" align=center valign=center width=95 height=55 class="boxTD">3-year Standard Deviation</TD></TABLE></DIV><DIV ID="c5_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c5" onMouseOver="ShowCont('c5',event)" onMouseOut="HideCont('c5',event)"><IMG NAME="c5" SRC="transp.gif" border=0 width=100 height=60></A></DIV></DIV></TD>
<!--end cell-->
<!--cell c6(tag:EU_T4_R3_risk)-->
<TD align=center valign=middle><DIV ID="c6_cont" style="position: relative; height: 60px; width: 100px;"><DIV ID="c6_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 1;"><TABLE><TD ID="c6_td" align=center valign=center width=95 height=55 class="actTD">23</TD></TABLE></DIV><DIV ID="c6_box" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; clip: rect(0px 100px 60px 0px); z-index: 2;"><TABLE><TD ID="c6_tdbox" align=center valign=center width=95 height=55 class="boxTD">3-year Standard Deviation</TD></TABLE></DIV><DIV ID="c6_img" STYLE="position: absolute; left: 0px; top: 0px; height: 60px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="c6" onMouseOver="ShowCont('c6',event)" onMouseOut="HideCont('c6',event)"><IMG NAME="c6" SRC="transp.gif" border=0 width=100 height=60></A></DIV></DIV></TD>
<!--end cell--></TR><TR>
<!--cell d0(tag:T4_Range)-->
<TD align=center valign=middle><DIV ID="d0_cont" style="position: relative; height: 80px; width: 130px;"><DIV ID="d0_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 130px; clip: rect(0px 130px 80px 0px); z-index: 1;"><TABLE><TD ID="d0_td" align=center valign=center width=125 height=75 class="inactTD">Expected Return Range for 2025 (%)</TD></TABLE></DIV><DIV ID="d0_box" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 130px; clip: rect(0px 130px 80px 0px); z-index: 2;"><TABLE><TD ID="d0_tdbox" align=center valign=center width=125 height=75 class="boxTD"></TD></TABLE></DIV><DIV ID="d0_img" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 130px; z-index: 5;"><A HREF="javascript:void(0);" NAME="d0" onMouseOver="ShowCont('d0',event)" onMouseOut="HideCont('d0',event)"><IMG NAME="d0" SRC="transp.gif" border=0 width=130 height=80></A></DIV></DIV></TD>
<!--end cell-->
<!--cell d1(tag:EU_T4_R1_range)-->
<TD align=center valign=middle><DIV ID="d1_cont" style="position: relative; height: 80px; width: 100px;"><DIV ID="d1_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; clip: rect(0px 100px 80px 0px); z-index: 1;"><TABLE><TD ID="d1_td" align=center valign=center width=95 height=75 class="inactTD">4 ~ 40</TD></TABLE></DIV><DIV ID="d1_box" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; clip: rect(0px 100px 80px 0px); z-index: 2;"><TABLE><TD ID="d1_tdbox" align=center valign=center width=95 height=75 class="boxTD">Expected Return Range for 2025</TD></TABLE></DIV><DIV ID="d1_img" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="d1" onMouseOver="ShowCont('d1',event)" onMouseOut="HideCont('d1',event)"><IMG NAME="d1" SRC="transp.gif" border=0 width=100 height=80></A></DIV></DIV></TD>
<!--end cell-->
<!--cell d2(tag:EU_T4_R6_range)-->
<TD align=center valign=middle><DIV ID="d2_cont" style="position: relative; height: 80px; width: 110px;"><DIV ID="d2_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 110px; clip: rect(0px 110px 80px 0px); z-index: 1;"><TABLE><TD ID="d2_td" align=center valign=center width=105 height=75 class="actTD">11 ~ 63</TD></TABLE></DIV><DIV ID="d2_box" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 110px; clip: rect(0px 110px 80px 0px); z-index: 2;"><TABLE><TD ID="d2_tdbox" align=center valign=center width=105 height=75 class="boxTD">Expected Return Range for 2025</TD></TABLE></DIV><DIV ID="d2_img" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 110px; z-index: 5;"><A HREF="javascript:void(0);" NAME="d2" onMouseOver="ShowCont('d2',event)" onMouseOut="HideCont('d2',event)"><IMG NAME="d2" SRC="transp.gif" border=0 width=110 height=80></A></DIV></DIV></TD>
<!--end cell-->
<!--cell d3(tag:EU_T4_R4_range)-->
<TD align=center valign=middle><DIV ID="d3_cont" style="position: relative; height: 80px; width: 100px;"><DIV ID="d3_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; clip: rect(0px 100px 80px 0px); z-index: 1;"><TABLE><TD ID="d3_td" align=center valign=center width=95 height=75 class="actTD">9 ~ 56</TD></TABLE></DIV><DIV ID="d3_box" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; clip: rect(0px 100px 80px 0px); z-index: 2;"><TABLE><TD ID="d3_tdbox" align=center valign=center width=95 height=75 class="boxTD">Expected Return Range for 2025</TD></TABLE></DIV><DIV ID="d3_img" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="d3" onMouseOver="ShowCont('d3',event)" onMouseOut="HideCont('d3',event)"><IMG NAME="d3" SRC="transp.gif" border=0 width=100 height=80></A></DIV></DIV></TD>
<!--end cell-->
<!--cell d4(tag:EU_T4_R5_range)-->
<TD align=center valign=middle><DIV ID="d4_cont" style="position: relative; height: 80px; width: 100px;"><DIV ID="d4_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; clip: rect(0px 100px 80px 0px); z-index: 1;"><TABLE><TD ID="d4_td" align=center valign=center width=95 height=75 class="actTD">10 ~ 60</TD></TABLE></DIV><DIV ID="d4_box" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; clip: rect(0px 100px 80px 0px); z-index: 2;"><TABLE><TD ID="d4_tdbox" align=center valign=center width=95 height=75 class="boxTD">Expected Return Range for 2025</TD></TABLE></DIV><DIV ID="d4_img" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="d4" onMouseOver="ShowCont('d4',event)" onMouseOut="HideCont('d4',event)"><IMG NAME="d4" SRC="transp.gif" border=0 width=100 height=80></A></DIV></DIV></TD>
<!--end cell-->
<!--cell d5(tag:EU_T4_R2_range)-->
<TD align=center valign=middle><DIV ID="d5_cont" style="position: relative; height: 80px; width: 100px;"><DIV ID="d5_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; clip: rect(0px 100px 80px 0px); z-index: 1;"><TABLE><TD ID="d5_td" align=center valign=center width=95 height=75 class="actTD">5 ~ 49</TD></TABLE></DIV><DIV ID="d5_box" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; clip: rect(0px 100px 80px 0px); z-index: 2;"><TABLE><TD ID="d5_tdbox" align=center valign=center width=95 height=75 class="boxTD">Expected Return Range for 2025</TD></TABLE></DIV><DIV ID="d5_img" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="d5" onMouseOver="ShowCont('d5',event)" onMouseOut="HideCont('d5',event)"><IMG NAME="d5" SRC="transp.gif" border=0 width=100 height=80></A></DIV></DIV></TD>
<!--end cell-->
<!--cell d6(tag:EU_T4_R3_range)-->
<TD align=center valign=middle><DIV ID="d6_cont" style="position: relative; height: 80px; width: 100px;"><DIV ID="d6_txt" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; clip: rect(0px 100px 80px 0px); z-index: 1;"><TABLE><TD ID="d6_td" align=center valign=center width=95 height=75 class="actTD">6 ~ 52</TD></TABLE></DIV><DIV ID="d6_box" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; clip: rect(0px 100px 80px 0px); z-index: 2;"><TABLE><TD ID="d6_tdbox" align=center valign=center width=95 height=75 class="boxTD">Expected Return Range for 2025</TD></TABLE></DIV><DIV ID="d6_img" STYLE="position: absolute; left: 0px; top: 0px; height: 80px; width: 100px; z-index: 5;"><A HREF="javascript:void(0);" NAME="d6" onMouseOver="ShowCont('d6',event)" onMouseOut="HideCont('d6',event)"><IMG NAME="d6" SRC="transp.gif" border=0 width=100 height=80></A></DIV></DIV></TD>
<!--end cell--></TR><TR><TD ID="btn_0" style="border-left-style: none; border-right-style: none; border-bottom-style: none;"> </TD><TD ID="btn_1" style="border-left-style: none; border-right-style: none; border-bottom-style: none;" align=center valign=middle><INPUT type="radio" name="mlchoice" value="EU_T4_R1" onMouseOver="timefunction('mouseover','EU_T4_R1','MSCI Switzerland ETF')" onClick="recChoice('onclick','EU_T4_R1','MSCI Switzerland ETF')" onMouseOut="timefunction('mouseout','EU_T4_R1','MSCI Switzerland ETF')">MSCI Switzerland ETF</TD>
<TD ID="btn_2" style="border-left-style: none; border-right-style: none; border-bottom-style: none;" align=center valign=middle><INPUT type="radio" name="mlchoice" value="EU_T4_R6" onMouseOver="timefunction('mouseover','EU_T4_R6','MSCI Sweden ETF')" onClick="recChoice('onclick','EU_T4_R6','MSCI Sweden ETF')" onMouseOut="timefunction('mouseout','EU_T4_R6','MSCI Sweden ETF')">MSCI Sweden ETF</TD>
<TD ID="btn_3" style="border-left-style: none; border-right-style: none; border-bottom-style: none;" align=center valign=middle><INPUT type="radio" name="mlchoice" value="EU_T4_R4" onMouseOver="timefunction('mouseover','EU_T4_R4','MSCI Germany ETF')" onClick="recChoice('onclick','EU_T4_R4','MSCI Germany ETF')" onMouseOut="timefunction('mouseout','EU_T4_R4','MSCI Germany ETF')">MSCI Germany ETF</TD>
<TD ID="btn_4" style="border-left-style: none; border-right-style: none; border-bottom-style: none;" align=center valign=middle><INPUT type="radio" name="mlchoice" value="EU_T4_R5" onMouseOver="timefunction('mouseover','EU_T4_R5','MSCI Netherlands ETF')" onClick="recChoice('onclick','EU_T4_R5','MSCI Netherlands ETF')" onMouseOut="timefunction('mouseout','EU_T4_R5','MSCI Netherlands ETF')">MSCI Netherlands ETF</TD>
<TD ID="btn_5" style="border-left-style: none; border-right-style: none; border-bottom-style: none;" align=center valign=middle><INPUT type="radio" name="mlchoice" value="EU_T4_R2" onMouseOver="timefunction('mouseover','EU_T4_R2','MSCI Eurozone ETF')" onClick="recChoice('onclick','EU_T4_R2','MSCI Eurozone ETF')" onMouseOut="timefunction('mouseout','EU_T4_R2','MSCI Eurozone ETF')">MSCI Eurozone ETF</TD>
<TD ID="btn_6" style="border-left-style: none; border-right-style: none; border-bottom-style: none;" align=center valign=middle><INPUT type="radio" name="mlchoice" value="EU_T4_R3" onMouseOver="timefunction('mouseover','EU_T4_R3','MSCI Ireland ETF')" onClick="recChoice('onclick','EU_T4_R3','MSCI Ireland ETF')" onMouseOut="timefunction('mouseout','EU_T4_R3','MSCI Ireland ETF')">MSCI Ireland ETF</TD>
</TR></TABLE>
<!-- END MOUSELAB TABLE -->
<!--BEGIN postHTML-->

<!--END postHTML--><INPUT type="submit" value="Next Page" onClick=timefunction('submit','submit','submit')></FORM></body></html>
