<?php
/**
 * @var $model frontend\models\Subscribe
 */
if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '<pre>';
}
?>

<form action="" method="post">
    <h3>Подписка на новости</h3>  <label>Ваш Email</label>
    <p><input type="text" name="email" id="" value="<?php if (isset($formData)) echo $formData ?>"></p>
    <button type="submit">Подписаться</button>
</form>
