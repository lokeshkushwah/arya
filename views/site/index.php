<?php
//Yii::$app->cache->flush();
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$users = Yii::$app->user->id;

$this->title = 'Aryabhatt Institute Alwar';
//$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    p {text-align: justify}

    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 100%;
        margin: auto;
        height:550px
    }

    .xyz{margin-top: -120px; }
</style>

</div>

<div id="myCarousel " class="carousel slide xyz" data-ride="carousel">
    <!-- Indicators
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>

    </ol>
    -->
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="images/slider/abc-3.jpg" alt="">
        </div>
        <div class="item ">
            <img src="images/slider/abc-1.jpg" alt="">
        </div>





    </div>

    <!-- Left and right controls 
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>---->
</div>
<div class="clearfix"></div> 


<div class="container clearfix abc">

    <h1 class="text-center">ABOUT ARYABHATT INSTITUTE </h1>
    <div class="row">
      
            <div class="col-md-6">
                <p>
                   Welcome to Aryabhatt Institute, centre of competitive excellence. We provide quality coaching for students appearing for various competitive exams for jobs as well as college entrances. We specialize in test preparation for SSC CGL, CHSL, CPO, MTS, STENO, RPSC, FCI, CDS, NDA, Railway, RP, DP, PO-CLERK in various Banks and Government Jobs.
Our instructors teach through a specially designed course with inputs from subject experts to ensure that you stand out among your competitors. Our team will tell you what to expect and how to excel. We’ll impart you the skills you need to demonstrate your potential when applying to a course that will define your future
As you know Aryabhatt invented zero, the same way we start teaching from zero level and take you to level of SSC CGL/PO. Our motto is to mentor, motivate and guide our students and all those who interact with us in order to enable them to make the right career decisions.
Aryabhatt Institute was established in 1999.Thousands of students have got their dream job since then. Dejected and deprived students from the whole Rajasthan come here and get selected for government job. Some of them work to earn their living and join coaching in free time. 
Our assets are our faculty, Aryabhatt’s highly competent faculties led by founders Mr. Rajesh Sharma is the real force behind the stupendous success of the institute.
<p> <b>Highlights</b></p>
<p><ol>
<li>Oldest and excellent institute with proven track record since 1999.</li>
<li>Experience faculty</li>
<li>Free practice set and study material</li>
<li>Weekly test</li>
<li>Speed test</li>
<li>AC classrooms</li>
<li>Peaceful environment</li>
<li>Largest computer lab of sitting capacity comprising 40 in Alwar  for online test</li>
<li>Thousands of students have got their dream job</li>
<li>We run classes in our own buildings not on rented one </li>
<li>We have only one branch named as “ABC Institute” run in our own property.</li>

</ol>

                </p> </div>
            <div class="col-md-6">
                <caption> <b>Note : </b>You are register for the following exams.</caption>
                <table class="table table-striped table-bordered">


                    <tr class="info"> 

                        <td><b> S.No</b></td>

                        <td><b> Exam Name</b></td>
                        <td><b>Date/Time</b></td> 

                     
                        <td><b>Result </b> </td>
                    </tr>

                    <?php 
					
					 $viewExams = \app\models\Exam::find()->limit(15)->orderBy('id DESC')->all();
					 $abc=1;
					 foreach ($viewExams as $exx) { 
					// var_dump($exx);
					// die();
					 ?>
					          <tr class="warning">
                                    <td><?php echo $abc; ?></td>
                                    <td><a href="<?php echo \yii\helpers\Url::to(['examination/test', 'exam' => $exx->exam_title]); ?>" ><?php echo ucfirst($exx->exam_title); ?></a> </td>
                                    <td ><?php echo $exx->start; ?></td>
                                  
                                    <td>
                                        <?php
                                     if (!$users =='') {
                                            ?>

                                            <a href="<?php echo \yii\helpers\Url::to(['examination/result', 'exam' => $exx->exam_title]); ?>" >Show</a> </td>

                                        <?php
									 }else { ?>
										 <a href="<?php echo \yii\helpers\Url::to(['site/login']); ?>" >Login</a> </td> 
								<?php	 }
                                    ?>
                                </tr>
					 <?php
					 $abc++;
					 }
                    ?>
	<tr><td colspan="4"> <b>Note For Demo use :- </b>Username :- <b>user</b> , password:- <b>password</b></td></tr>
                </table>
            </div>

        <?php  ?>
        <div class="clearfix"></div> </div>

    <div class="row">
        <br/><br/>
        <div class="col-md-6">
            <h3 class="text-center">Our Mission</h3>
            <p>
                To bring out the extraordinary in an ordinary aspirant and to ensure the highest possible selection ratio by taking the art of preparing for competitive examinations to the level of a science. 

            </p> </div>
        <div class="col-md-6">
            <h3 class="text-center">OUR VISION </h3>
            <p>
                To establish the brand Aryabhatt’s as a national level institute and to make it a force to reckon with in the field of education by means of serving the students with the highest ethical standards.
            </p> </div>
        <div class="clearfix"></div>
    </div>

    <div class="row">

        <br/><br/>
        <h1 class="text-center">Our Team </h1>
        <br/><br/>
        <div class="col-md-3" class="center-block">
            <img src="images/slider/team01.jpg" class="img-responsive img-circle">
            <h4>Mr. R.P. Upreti</h4>
            <p>
                Director 
            </p> 
        </div> 
<!--        <div class="col-md-3"  class="center-block">
            <img src="images/slider/team01.jpg" class="img-responsive img-circle">
            <h4>Rajesh Sharma</h4>
            <p>
                Director 
            </p> 
        </div> 
        <div class="col-md-3"  class="center-block">
            <img src="images/slider/team01.jpg" class="img-responsive img-circle">
            <h4>Prashant Sharma</h4>
            <p>
                Director 
            </p> 
        </div> 
        <div class="col-md-3" class="center-block ">
            <img src="images/slider/team01.jpg" class="img-responsive img-circle">
            <h4>Master Atul and Achin</h4>
            <p>
                Director 
            </p> 
        </div> 
        <div class="clearfix"></div>
    --></div> 
    <?php
//$this->params['breadcrumbs'][] = $this->title;
    ?>

    <?php // echo $this->render('_search', ['model' => $searchModel]);   ?>


</div>
