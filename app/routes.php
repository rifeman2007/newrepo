<?php
// Routes

$app->get('/order/{id}'         , '\OrderController:get');
$app->patch('/order/cancel/{id}', '\OrderController:patchCancel');