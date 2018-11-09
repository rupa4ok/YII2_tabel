<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 07.11.2018
 * Time: 22:17
 */

foreach ($list as $item): ?>

<h1><a href="<?php echo Yii::$app->urlManager->createUrl(['test/view', 'id' => $item['id']]); ?>"><?php echo $item['title'] ?></a></h1>
<p><?php echo $item['content'] ?></p>
<hr>

<?php endforeach; ?>
