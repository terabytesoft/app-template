<?php

return [
    'logger' => function () {
        return new \Yiisoft\Log\Logger([
            new Yiisoft\Log\FileTarget(
				'public/@runtime/logs/app.txt'
			)
        ]);
    }
];
