
    <?php
    $user = \app\models\ExamintionUserRelation::find()->where([ 'user_id' => $users])->groupBy('user_id')->all();
    foreach ($user as $user_id) {
        $exam = \app\models\Exam::find()->where(['exam_title' => $exams])->orderBy('id DESC')->all();
        var_dump($exam);
        $finduser = app\models\UserAdmin::find()->where(['id' => $user_id['user_id']])->one();



        //$total_question=\app\models\ExamintionUserRelation::find()->where(['user_id'=>$user,'exam_id'=>$exam->id])->count();
        // var_dump($total_question);

        foreach ($exam as $ex) {
            $total_attemp = app\models\ExamintionUserRelation::find()->where(['exam_id' => $ex->id, 'user_id' => $user_id['id']])->count();
            $correct_ans_given = app\models\ExamintionUserRelation::find()->where(['result' => '1', 'exam_id' => $ex->id, 'user_id' => $users])->count();
            $total_question = app\models\Paper::find()->where(['exam_id' => $ex->id])->all();
            //var_dump($total_question);
            $total = 0;
            foreach ($total_question as $total_questions) {
                $total+=$total_questions->no_of_question;
            }
            $marks = $correct_ans_given * $ex->marks_per_question;
            $nagitive = ($total_attemp - $correct_ans_given) * $ex->nagitive_marks;
            $totalmark = $total * $ex->marks_per_question;
            $getmark = $marks - $nagitive;
            ?>
            <table class="table table-striped table-bordered">

                <tr >
                    <td  colspan="4"> 
                        Exam: <b><?php echo ucwords($ex->exam_title); ?></b><br/>
                        <?php
                        echo '<b>';
                        echo $finduser->username;
                        echo '</b>';
                        ?> </td>

                    <td colspan="3" align="right">

                        Mark Per Question: <b><?php echo $ex->marks_per_question; ?> </b><br/>
                        Negative Mark Per Question: <b><?php echo $ex->nagitive_marks; ?> </b>

                    </td></tr>
                <tr class="info"> 

                    <td><b> Date</b></td>

                    <td><b> Attempt Question</b></td>
                    <td><b>Obtain Mark</b></td> 
                    <td><b>Negative Marks</b></td>
                    <td><b>Net Marks </b> </td>
                    <td><b>Max Marks </b> </td>
                </tr>

                <tr class="warning">

                    <td ><?php echo $ex->start; ?></td>


                    <td><?php echo $total_attemp . '<b>/</b>' . $total; ?>  </td>
                    <td><?php echo $marks; ?></td>
                    <td><b><?php echo $nagitive; ?></b></td>
                    <td><?php echo $getmark; ?></td>
                    <td><?= $totalmark ?>  </td>
                </tr>

            </table>
            <?php
        }
    }
    ?>



    <?php
//    GridView::widget([
//        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
//        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
//            'id',
//            'exam_title',
//            'start',
//            'end',
//            ['class' => 'yii\grid\ActionColumn'],
//        ],
//    ]);
    ?>