<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExamSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$users = Yii::$app->user->id;



$this->title = 'online exam hub';

//$this->params['breadcrumbs'][] = $this->title;
?>

<style>.tl-funfact.bg-overlay-green *, .tl-funfact.bg-overlay *{color:black}</style>




<!-- FunFact Area Start -->
<section id="tl-funfact" class="tl-funfact bg-overlay-green">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">

                <h1 class="text-center">User List </h1>
                <div class="row text-left">


                    <div class="col-md-12">
                        <p><input type="button" id="btnExport" value="Export to Excel" class="btn btn-success"/></p>
                        <?php
                        if (Yii::$app->user->id) {
                            $institute = \app\models\User::find()->where(['user.id' => Yii::$app->user->id])->one();
                            $batch_name = app\models\Batch::find()->where(['id' => $institute->batch])->one();
                            
                            $institute_all = \app\models\User::find()->where(['user.batch' => $batch_name->id])->all();
                            //  var_dump($institute_all);
                            // echo ' <capation class="alert-success center-block"> Welcome to '. $batch_name->name. '</capation>';
                            ?>

                            <table class="table table-striped table-bordered">
                                <tr>
                                    <td>Id</td>
                                    <td>username</td>  
                                    <td>batch</td>   
                                    <td>email</td>   
                                   

                                </tr>
                                <?php
                                foreach ($institute_all as $ins) {
                                    ?>
                                    <tr>
                                        <td><?php echo $ins['id'] ?></td>
                                        <td><?php echo $ins['username'] ?></td>
                                        <td><?php echo $batch_name->name ?></td>
                                        <td><?php echo $ins['email'] ?></td>
                                      

                                    </tr>                               
                                    <?php
                                }
                                ?>


                            </table>
                        <?php } ?>
                    </div>
                    <?php /*
                        <div class="col-md-4">
                                           
                                            <?php
                                            $request = Yii::$app->request;
                                            $myexamams = $request->get('exam');

                                            if ($myexamams == "") {
                                                ?>

                                                <div class="container">
                                                  
                                                    <?php

                                                    ?>

                                                    <?php // echo $this->render('_search', ['model' => $searchModel]);  ?>


                                                    <table class="table table-striped table-bordered">


                                                        <tr class="info"> 

                                                            <td><b> S.No</b></td>

                                                            <td><b> Exam Name</b></td>
                                                            <td><b>Date/Time</b></td> 


                                                            <td><b>Result </b> </td>
                                                        </tr>

                                                        <?php
                                                        //die();
                                                        $abc = 1;
                                                        
                                                        $exam = \app\models\Exam::find()->orderBy('id DESC')->all();
                                                        

                                                        //$total_question=\app\models\ExamintionUserRelation::find()->where(['user_id'=>$user,'exam_id'=>$exam->id])->count();
                                                        // var_dump($total_question);
                                                        foreach ($exam as $ex) {
                                                            ?>




                                                            <tr class="warning">
                                                                <td><?php echo $abc; ?></td>
                                                                <td><?php echo ucfirst($ex->exam_title); ?> </td>
                                                                <td ><?php echo $ex->start; ?></td>

                                                                <td>
                                                                    <?php
                                                                    ?>

                                                                    <a href="<?php echo \yii\helpers\Url::to(['user-admin/exam-results', 'exam' => $ex->exam_title]); ?>" >Show</a> </td>

        <?php
        ?>
                                                            </tr>


        <?php
        $abc++;
    }
    ?>

                                                        <?php
                                                        ?>
                                                    </table>
                                                </div>
                                                        <?php
                                                        }
                                                        ?>

                                               
                                           
                                        </div>


              */ ?>




                    <div class="clearfix"></div> 
                </div>
            </div></div></div></section>


