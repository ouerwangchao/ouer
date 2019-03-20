<?php
/**
 * Created by PhpStorm.
 * User: wangchao
 * Date: 2019/3/20
 * Time: 上午9:19
 */
//二分查找适用于对已经排好序的大量数据进行查找
$arr = [1, 2, 4, 6, 8, 11, 15, 17, 18];
function find($array, $start, $end, $find)
{
    if ($start > $end) {
        return false;
    }
    $mid = intval(($start + $end) / 2);
    if ($array[$mid] == $find) {
        return $mid;
    }
    if ($array[$mid] > $find) {
        //表示查询的数据在范围左侧
        return find($array, $start, $mid - 1, $find);
    } else {
        //表示查询的数据在范围右侧
        return find($array, $mid + 1, $end, $find);
    }
}

$a = find($arr, 0, count($arr) - 1, 12);
var_dump($a);