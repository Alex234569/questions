<?php


namespace app\views;


class PutInfo
{
    public static function putInfo(array $data): void
    {

        ?><div class="divToSite">
        <span id='boldText'>Добавлен вопрос</span><br />
        <div class ='result'>
            <span id='underlinedText'>Вопрос</span>: <?=$data['question']?><br />
            <span id='underlinedText'>Ответ</span>: <?=$data['answer']?><br />
            <?php if (!empty($data['url'])){ ?><span id=''><a href="<?=$data['url']?>"><?=$data['url']?></span></a><br /><?php } ?>
            <?php if (!empty($data['data'])){ ?><span id=''><?=$data['date']?></span><br /><?php } ?>
            <span id='underlinedText'>Теги</span>: <?=$data['tegs']?><br />
        </div>
        </div><?php
    }
}