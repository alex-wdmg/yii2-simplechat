<?php
use bubasuma\simplechat\ConversationWidget;
use bubasuma\simplechat\db\demo\User;
/**
 * @var $user User
 * @var $model array
 * @var $widget ConversationWidget
 */
$widget->itemOptions['data-load-url'] = $model['load_url'];
$widget->itemOptions['data-send-url'] = $model['send_url'];
$widget->itemOptions['data-contact-info'] = $model['contact'];
?>
<a class="pull-left" href="#">
    <img class="media-object" data-src="holder.js/64x64" alt="64x64" style="width: 50px; height: 50px;" src="<?=$widget->clientOptions['baseUrl']?>/img/<?=$model['contact']['profile']['avatar']?>">
</a>
<div class="media-body">
    <small class="pull-right time"><?= $model['date']?></small>

    <h5 class="media-heading"><?= $model['contact']['profile']['full_name']?></h5>
    <small><?=$user['id'] == $model['sender_id'] ? '<i class="fa fa-reply"></i>':''?> <?= $model['text']?></small>
    <ul class="pull-right list-inline">
        <li><a class="close" title="Mark as <?=$model['is_new'] ?'read':'unread'?>"><small class="small-icon" aria-hidden="true"><i class="fa fa-circle<?=$model['is_new'] ?'':'-o'?>"></i></small></a></li>
        <li><a class="close" title="Archive"><small class="small-icon" aria-hidden="true"><i class="fa fa-times"></i></small></a></li>
    </ul>
</div>
