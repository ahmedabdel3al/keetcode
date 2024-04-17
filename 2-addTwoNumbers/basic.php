<?php

require __DIR__ . '/../vendor/autoload.php';

class ListNode
{
    public $value = 0;
    public $next = null;

    function __construct($val = 0, $next = null)
    {
        $this->value = $val;
        $this->next = $next;
    }
}


$listNode1 = new ListNode(9, new ListNode(9, new ListNode(9, new ListNode(9, new ListNode(9, new ListNode(9, new ListNode(9)))))));
$listNode2 = new ListNode(9, new ListNode(9, new ListNode(9, new ListNode(9))));


function sumToNode($node1, $node2)
{
    if (is_null($node1?->value) && is_null($node2?->value)) return null;
    if (!$node1) return $node2;
    if (!$node2) return $node1;

    $value = ($node1->value + $node2->value);

    $node = new ListNode($value % 10);

    $node->next = sumToNode($node1->next, $node2->next);

    if ($value >= 10) {
        $node->next = sumToNode($node->next, new ListNode(1));
    }

    return $node;


}


$node = sumToNode($listNode1, $listNode2);
var_dump($node);








