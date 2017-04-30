<?php

function casesHolder()
{
    /* @var \PDO $x*/
    $y = $x->prepare('');
    /** DocBlock should not break inspection */
    /* comment should not break inspection */
    /** multiple DocBlocks should not break inspection */
    <weak_warning descr="'->query(...)' or '->exec(...)' should be used instead of 'prepare-execute' calls chain.">$y->execute()</weak_warning>;
}

function falsePositivesHolder()
{
    /* false-positives: multiple executions */
    $y = $x->prepare('');
    $y->execute();
    /** DocBlock should not trigger false-positives */
    /* comment should not break inspection */
    /** multiple DocBlocks should not trigger false-positives */
    $y->execute();

    /* false-positives: parameters */
    $y = $x->prepare('');
    $y->execute([]);
}