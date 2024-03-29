<?php
namespace app\index\controller;
use think\Controller;
use think\Cache;
class Index extends Controller
{
    public function index(){
        $prize_arr = array(
            '0' => array('id'=>1,'prize'=>'平板电脑','v'=>1),
            '1' => array('id'=>2,'prize'=>'数码相机','v'=>5),
            '2' => array('id'=>3,'prize'=>'音箱设备','v'=>10),
            '3' => array('id'=>4,'prize'=>'4G优盘','v'=>12),
            '4' => array('id'=>5,'prize'=>'10Q币','v'=>22),
            '5' => array('id'=>6,'prize'=>'错过了','v'=>50),
        );
        foreach ($prize_arr as $key => $val) {
            $arr[$val['id']] = $val['v']; //将$prize_arr放入数组下标为$prize_arr的id元素，值为v元素的数组中
        }
        $rid = $this->get_rand($arr); //根据概率获取奖项id
        print_r($prize_arr[$rid-1]['v']);
        $prize_arr[$rid-1]['v'];


        $res['yes'] = $prize_arr[$rid-1]['prize']; //获取中奖项

        unset($prize_arr[$rid-1]); //将中奖项从数组中剔除，剩下未中奖项
        shuffle($prize_arr); //打乱数组顺序
        for($i=0;$i<count($prize_arr);$i++){
            $pr[] = $prize_arr[$i]['prize'];
        }
        $res['no'] = $pr;
        dd($res);
//        echo json_encode($res);

    }


    function get_rand($proArr)
    {
        $result = '';

        //概率数组的总概率精度
        $proSum = array_sum($proArr); //计算数组中元素的和
        //概率数组循环
        foreach ($proArr as $key => $proCur) {
            $randNum = mt_rand(1, $proSum);
            if ($randNum <= $proCur) { //如果这个随机数小于等于数组中的一个元素，则返回数组的下标
                $result = $key;

                break;
            } else {
                $proSum -= $proCur;
            }
        }
        unset ($proArr);
        return $result;
    }


    public function add(){
        Cache::subscribe(['order'], function ($redis, $chan, $msg){
            dd($redis);
            dd($chan);
            dd($msg);
        });

    }
}
