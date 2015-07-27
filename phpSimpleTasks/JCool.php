<?php
class Jcool
{
    public function encode($data,$options,$depth)
    {
        return json_encode($data,$options,$depth);
    }
    public function decode($data,$assoc,$depth,$options)
    {
        return json_decode($data,$assoc,$depth,$options);
    }
}
$jcool = new Jcool();
if(isset($_GET['encode'])){
    var_dump($jcool->encode($_GET['value'],$_GET['options'],$_GET['depth']));
}
if(isset($_GET['decode'])){
    var_dump ($jcool->decode($_GET['value'],$_GET['assoc'],$_GET['depth'],$_GET['options']));
}
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

$jcool=new Jcool;
var_dump($jcool->decode($json,true,512,0));
var_dump($jcool->decode($json,false,512,0));

