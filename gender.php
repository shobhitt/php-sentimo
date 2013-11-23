<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/icons.css">
	<link rel="stylesheet" type="text/css" href="css/formalize.css">
	<link rel="stylesheet" type="text/css" href="css/checkboxes.css">
	<link rel="stylesheet" type="text/css" href="css/sourcerer.css">
	<link rel="stylesheet" type="text/css" href="css/jqueryui.css">
	<link rel="stylesheet" type="text/css" href="css/tipsy.css">
	<link rel="stylesheet" type="text/css" href="css/calendar.css">
	<link rel="stylesheet" type="text/css" href="css/tags.css">
	<link rel="stylesheet" type="text/css" href="css/selectboxes.css">
	<link rel="stylesheet" type="text/css" href="css/960.css">
	<link rel="stylesheet" type="text/css" href="css/calendar.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui-timepicker-addon.css">
    
    <!-- JavaScript -->
	<script type="text/javascript" src="js/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jqueryui.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.cookies.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.pjax.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/formalize.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.metadata.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.validate.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.checkboxes.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.chosen.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.fileinput.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.datatables.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.sourcerer.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.tipsy.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.calendar.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.inputtags.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.wymeditor.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.livequery.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/excanvas.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/formlabels.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/flot.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/livequery.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
<style type="text/css">
    #wrapper {
        width:450px;
        margin:0 auto;
        font-family:Verdana, sans-serif;
    }
	.output {
        color:#0481b1;
        font-size:14px;
        text-transform:uppercase;
        font-family:Helvetica, sans-serif;
        font-weight:bold;
    }
    legend {
        color:#0481b1;
        font-size:16px;
        padding:0 10px;
        background:#fff;
        -moz-border-radius:4px;
        box-shadow: 0 1px 5px rgba(4, 129, 177, 0.5);
        padding:5px 10px;
        text-transform:uppercase;
        font-family:Helvetica, sans-serif;
        font-weight:bold;
    }
    fieldset {
        border-radius:4px;
        background: #fff; 
        background: -moz-linear-gradient(#fff, #f9fdff);
        background: -o-linear-gradient(#fff, #f9fdff);
        background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#f9fdff)); /
        background: -webkit-linear-gradient(#fff, #f9fdff);
        padding:20px;
        border-color:rgba(4, 129, 177, 0.4);
    }
    input,
    textarea {
        color: #373737;
        background: #fff;
        border: 1px solid #CCCCCC;
        color: #aaa;
        font-size: 14px;
        line-height: 1.2em;
        margin-bottom:15px;

        -moz-border-radius:4px;
        -webkit-border-radius:4px;
        border-radius:4px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset, 0 1px 0 rgba(255, 255, 255, 0.2);
    }
    input[type="text"],
    input[type="password"]{
        padding: 8px 6px;
        height: 22px;
        width:280px;
    }
    input[type="text"]:focus,
    input[type="password"]:focus {
        background:#f5fcfe;
        text-indent: 0;
        z-index: 1;
        color: #373737;
        -webkit-transition-duration: 400ms;
        -webkit-transition-property: width, background;
        -webkit-transition-timing-function: ease;
        -moz-transition-duration: 400ms;
        -moz-transition-property: width, background;
        -moz-transition-timing-function: ease;
        -o-transition-duration: 400ms;
        -o-transition-property: width, background;
        -o-transition-timing-function: ease;
        width: 380px;
        
        border-color:#ccc;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        opacity:0.6;
    }
    input[type="submit"]{
        background: #222;
        border: none;
        text-shadow: 0 -1px 0 rgba(0,0,0,0.3);
        text-transform:uppercase;
        color: #eee;
        cursor: pointer;
        font-size: 15px;
        margin: 5px 0;
        padding: 5px 22px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        -webkit-border-radius:4px;
        -webkit-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        -moz-box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
        box-shadow: 0px 1px 2px rgba(0,0,0,0.3);
    }
    textarea {
        padding:3px;
        width:96%;
        height:100px;
    }
    textarea:focus {
        background:#ebf8fd;
        text-indent: 0;
        z-index: 1;
        color: #373737;
        opacity:0.6;
        box-shadow:0 0 5px rgba(4, 129, 177, 0.5);
        border-color:#ccc;
    }
    .small {
        line-height:14px;
        font-size:12px;
        color:#999898;
        margin-bottom:3px;
    }
</style>
<script type="text/javascript">
 
$(document).ready(function(){
 
        $("#slidingDiv").hide();
        $("#show_hide").show();
 
    $('#show_hide').click(function(){
    $("#slidingDiv").slideToggle();
    });
 
});


 
</script>


<title>Seed the Cloud</title>
</head>
<body >
<nav id="secondary">
    <ul>
        <li><a href="index.php">Sentiment Analysis</a></li>
		<li><a href="sub.php">Subjectivity Analysis</a></li>
		<li><a href="topic.php">Topic Classification</a></li>
		<li><a href="spam.php">Spam Detection</a></li>
		<li><a href="adult.php">Adult Content Detection</a></li>
		<li><a href="read.php">Readability Assessment</a></li>
		<li><a href="lang.php">Language Detection</a></li>
		<li><a href="comm.php">Commercial Detection</a></li>
		<li><a href="edu.php">Educational Detection</a></li>
		<li class="active"><a href="gender.php">Gender Detection</a></li>
    </ul>
</nav>
<div class="box">
    <div class="box-header">
        <h1>Gender Detection</h1>
    </div>
    <div class="box-content">
	
    <div id="wrapper">
        <form action="" method="post">
            <fieldset>
                <legend>Enter the Text</legend>
                
              
              
                
                <div>
                    <div class="small"></div>
                    <textarea name="text" placeholder="Enter text here"></textarea>
                </div>    
				</br>
                <input type="submit" name="submit" value="submit" class="button blue"/>
            </fieldset>    
        </form>
    </div>
  



<div class="action_bar">
   <?php
require_once('DatumboxAPI.php');

$api_key='fb30a6df9a19c72906d29dacd751833a'; //To get your API visit datumbox.com, register for an account and go to your API Key panel: http://www.datumbox.com/apikeys/view/

$DatumboxAPI = new DatumboxAPI($api_key);

//Example of using Document Classification API Functions
//$text=$_POST['text'];
//$text="Google Search (or Google Web Search) is a web search engine owned by Google Inc. Google Search is the most-used search engine on the World Wide Web,[4] receiving several hundred million queries each day through its various services.[5] The order of search results on Google's search-results pages is based, in part, on a priority rank called a 'PageRank'. Google Search provides many options for customized search, using Boolean operators such as: exclusion ('-xx'), alternatives ('xx OR yy'), and wildcards ('x * x').[6] The main purpose of Google Search is to hunt for text in publicly accessible documents offered by web servers, as opposed to other data, such as with Google Image Search. Google Search was originally developed by Larry Page and Sergey Brin in 1997.[7] Google Search provides at least 22 special features beyond the original word-search capability.[8] These include synonyms, weather forecasts, time zones, stock quotes, maps, earthquake data, movie showtimes, airports, home listings, and sports scores. There are special features for dates, including ranges,[9] prices, temperatures, money/unit conversions, calculations, package tracking, patents, area codes,[8] and language translation of displayed pages. In June 2011, Google introduced 'Google Voice Search' and 'Search by Image' features for allowing the users to search words by speaking and by giving images.[10] In May 2012, Google introduced a new Knowledge Graph semantic search feature to customers in the U.S";
if (isset($_POST['submit'])) {
$text=$_POST['text'];
$DocumentClassification=array();
$DocumentClassification['GenderDetection']=$DatumboxAPI->GenderDetection($text);

echo '<h2 class="output">Gender Detection</h2>';
echo '<pre>';
//print_r($DocumentClassification);
if($DocumentClassification['GenderDetection']=='male')
echo "Male";
else if($DocumentClassification['GenderDetection']=='female')
echo "Female";
echo '</pre>';

}
unset($DatumboxAPI);

?>            
            </div>

</div>
</div>
</body>
</html>