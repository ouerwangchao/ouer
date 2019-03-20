<?php
/**
 * Created by PhpStorm.
 * User: wangchao
 * Date: 2019/3/20
 * Time: 上午8:41
 */
/**
 *  思路：出栈的时候如果栈2不为空，就出栈2，如果栈二为空，就把栈1出栈再入栈2
 */
$arr1 = array();
$arr2 = array();

function mypush($node)
{
    array_push($arr1, $node);
}

function mypop()
{
    if (!empty($arr2)) {
        return array_pop($arr2);
    } else {
        //循环将$arr1中的元素全部push到$arr2
        while (!empty($arr1)) {
            array_push($arr2, array_pop($arr1));
        }
        return array_pop($arr2);
    }
}