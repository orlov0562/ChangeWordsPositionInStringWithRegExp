<?php

$str = 'There are many fine hamburgers in New York,
        even the most mediocre of which would put its
        British counterparts to shame.';

$word1 = 'are';
$word2 = 'counterparts';

echo 'IN: '.$str.'<hr />'.
     'Words: '.$word1.' &lt;=&gt; '.$word2.'<br />'.
     'OUT: ';

// -------------------------------------

echo preg_replace(  '~('.$word1.')(\W)(.+)('.$word2.')(\W+|$)~Usix',
                    '$4$2$3$1$5',
                    $str,
                    1
    );

// -------------------------------------

echo '<hr />Words: first and last<br />OUT2:';

// -------------------------------------

echo preg_replace(  '~^(\w+)(\W.+\W)(\w+)(\W+|$)$~Usix',
                    '$3$2$1$4',
                    $str

    );
