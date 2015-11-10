<?php
/* @var $this AnonAccountsSettingsController */
/* @var $model AnonAccountsSettings */
/* @var $form CActiveForm */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use humhub\widgets\DataSaved;

?>
<div class="panel panel-default">
    <div class="panel-heading"><strong>Anon</strong> Accounts</div>
    <div class="panel-body">

        <?php $form = ActiveForm::begin(array(
            'id'=>'anon-accounts-settings-index2-form',
            'enableAjaxValidation'=>false,
        )); ?>

            <div class="form-group">
                <p>Users will receive a randomly suggested name made of a random first name and last name. </p>
                <ul>
                    <li>Options are separated by new lines.</li>
                    <li>For best results, use adjectives for first name options</li>
                </ul>
            </div>
            
            <div class="form-group">
                <!-- show flash message after saving -->
                <?php // $this->widget('application.widgets.DataSavedWidget'); ?>
                <?php echo DataSaved::widget(); ?>
                <?php echo $form->errorSummary($model); ?>
            </div>

            <div class="form-group">
                <?php echo $form->field($model, 'anonAccountsFirstNameOptions')->textarea(array('class' => 'form-control', 'rows' => '8')); ?>
                <?php //echo $form->textArea($model, 'anonAccountsFirstNameOptions', ); ?>
                <?php //echo $form->errorSummary($model,'anonAccountsFirstNameOptions'); ?>
            </div>

            <div class="form-group">
                <?php echo $form->field($model, 'anonAccountsLastNameOptions')->textarea(array('class' => 'form-control', 'rows' => '8')); ?>
                <?php //echo $form->labelEx($model,'anonAccountsLastNameOptions'); ?>
                <?php //echo $form->textArea($model, 'anonAccountsLastNameOptions', array('class' => 'form-control', 'rows' => '8')); ?>
                <?php // echo $form->error($model,'anonAccountsLastNameOptions'); ?>
            </div>

            <hr>
            
            <?php echo Html::submitButton('Save', array('class' => 'btn btn-primary')); ?>

        <?php $form->end(); ?>

    </div>
</div>
