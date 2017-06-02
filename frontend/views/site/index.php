<?php
use kartik\social\GooglePlugin;
/* @var $this yii\web\View */

$this->title = '';
?>
<div class="site-index">

    <?php echo GooglePlugin::widget([
        'type'=>GooglePlugin::HANGOUT,
        'settings' => ['height'=>24,'invites'=>"[
                  { id : 'victor.eacd@gmail.com', invite_type : 'EMAIL' },
                  { id : 'wyliannec@gmail.com', invite_type : 'EMAIL' },
                  ]"],
        ]
    );?>
</div>
