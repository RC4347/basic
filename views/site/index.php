<?php

/** @var yii\web\View $this */

use yii\widgets\ActiveForm;

$this->title = 'Turin Register';
?>
<div class="container">
    <div class="loginPage flex">
        <div class="container flex">
            <div class="formDiv flex">
                <div class="headerDiv"></div>
                <?php $form = ActiveForm::begin([
                    'action' => '/site/save',
                    'method' => 'POST',
                    'options' => [
                        'class' => 'form grid'
                    ],
                ]) ?>
                <div class="images flex">
                    <img src="/images/Logo.png" alt="logo"/>
                    <img src="/images/15yillik.png" alt="logo"/>
                </div>
                <div class="inputDiv">
                    <label htmlFor="firstname">Name</label>
                    <div class="input flex">
                        <i class="fa fa-user bg-white" aria-hidden="true"></i>
                        <input name="firstname" type="text" id="name" required/>
                    </div>
                </div>
                <div class="inputDiv">
                    <label htmlFor="lastname">Surname</label>
                    <div class="input flex">
                        <i class="fa bg-white fa-user" aria-hidden="true"></i>
                        <input name="lastname" type="text" id="surname" required/>
                    </div>
                </div>
                <div class="inputDiv">
                    <label htmlFor="phoneNumber">Phone number</label>
                    <div class="input flex">
                        <i class="fa bg-white fa-phone" aria-hidden="true"></i>
                        <input name="phoneNumber" type="text" id="phoneNumber" required/>
                    </div>
                </div>
                <div class="inputDiv">
                    <label htmlFor="schoolNumber">School Number</label>
                    <div class="input flex">
                        <i class="fa bg-white fa-university" aria-hidden="true"></i>
                        <input name="schoolNumber" type="text" id="schoolNumber" required/>
                    </div>
                </div>
                <div class="inputDiv">
                    <label htmlFor="grade">Grade</label>
                    <div class="input flex">
                        <i class="fa bg-white fa-university" aria-hidden="true"></i>
                        <input name="grade" type="text" id="grade" required/>
                    </div>
                </div>
                <button type="submit" class="btn flex">
                    Submit
                    <!--                    <AiOutlineSwapRight class="icon"/>-->
                </button>
                <?php ActiveForm::end() ?>
            </div>
        </div>
    </div>
</div>
