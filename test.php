<?php


$arr = [
    'userName'=> '王大奶',
    'number' => "843583968506854605905049854688450",
    'number2'=>673590968935804752743958436854390,
    'number3'=>'13536698874',
    'res' => 'true',
    'text' => '塥于在、dkflj国城中的《地》霜<1>好的，<2>有，城；!@#$%^&*()+-~`.;\'fdk /\fdfds国南极星城中嚅吾',
    'array'=>['a'=>'fdtfd','b'=>'城中呈'],
    'arr'=>[1,3,'fd','城'],
    'arrayNull'=>[],
    ['fd'=>4554]
];
echo json_encode($arr,JSON_PRESERVE_ZERO_FRACTION);
//echo json_encode($arr,JSON_HEX_AMP);

echo '<br>';
echo rtrim('hytj行业报价单','行业报价单'); //行业原料报价单    行业报价单
echo '<br>';
echo  str_replace('行业原料报价单', '', 'fsdfsd行业原料报价单f') . '行业原料报价单';
