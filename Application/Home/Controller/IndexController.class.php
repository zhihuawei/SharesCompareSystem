<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{
    /**
     * 对比面板
     */
    public function index()
    {
        $this->display('sharesTemp');
    }

    /**
     * 股票测试面板
     */
    public function sharesTemp()
    {
        $this->display();
    }

    /**
     * 通联股票接口API
     * 通联数据
     */
    public function wmCloudSharesApi()
    {
        $url = "https://api.wmcloud.com/data/v1/api/market/getTickRTSnapshot.json";
        $params = array(
            "securityID" => '000001.XSHE,000421.XSHE,000631.XSHE,600111.XSHG,600271.XSHG,600551.XSHG',
            "assetClass" => "", //第几页(每页20条数据),默认第1页
            "exchangeCD" => "",
            "field" => "ticker,shortNM,changePct,lastPrice,change",
        );
        $paramstring = http_build_query($params);
        $uurl = $url . "?" . $paramstring;
        $method = "GET";
        //通联账户token
        $headers = array("authorization: Bearer 你的token", "cache-control: no-cache");
        $ret = httpRequest($uurl, $method, $postfields = null, $headers, $debug = false);
        $ret_arr = json_decode($ret,true);
        $this->ajaxReturn($ret_arr);
    }

    /**
     * 新浪股票数据API
     * 新浪科技
     */
    public function sinaSharesApi()
    {
        $url = "https://hq.sinajs.cn/list=s_sz000001,s_sz000421,s_sz000631,s_sh600111,s_sh600271,s_sh600551";
        $method = "GET";
        $headers = array();
        $ret = httpRequest($url, $method, $postfields = null, $headers, $debug = false);
        $ret = iconv('GB2312', 'UTF-8', $ret);
        $ret_arr1 = explode(';', $ret);
        array_pop($ret_arr1);
        $shares_arr = array();
        foreach ($ret_arr1 as $k1 => $v1) {
            $temp_v1 = trim(substr($v1, 4));
            $tem_arr1 = explode('=', $temp_v1);
            $tem_arr3 = explode(',', $tem_arr1[1]);
            $shares_arr[] = array(
                'shares_name' => substr($tem_arr3[0], 1),
                'shares_code' => substr($tem_arr1[0], 11),
                'shares_price' => $tem_arr3[1],
                'shares_rate' => $tem_arr3[3],
            );
        }
        $result = array(
            'code' => 1,
            'data' => $shares_arr,
            'msg' => 'success',
        );
        $this->ajaxReturn($result);
    }

    /**
     * 阿里云股票数据API
     * 网极网络科技
     */
    public function aliYunSharesApi()
    {
        $host = "http://stock.api51.cn";
        $path = "/sort";
        $method = "GET";
        //这是在阿里云上的appcode
        $appcode = "你的appcode";
        $headers = array();
        array_push($headers, "Authorization:APPCODE " . $appcode);
        $querys = "data_count=6&en_prod_code=000001.SZ,000421.SZ,000631.SZ,600111.SS,600271.SS,600551.SS&fields=prod_name,last_px,px_change&sort_field_name=px_change_rate&start_pos=start_pos";
        //$querys = "data_count=10&en_hq_type_code=SS.ESA&fields=fields&sort_field_name=px_change_rate&sort_type=0&start_pos=start_pos";
        $url = $host . $path . "?" . $querys;
        $ret = httpRequest($url, $method, $postfields = null, $headers, $debug = false);
        $ret_arr = json_decode($ret, true);
        array_shift($ret_arr['data']['sort']);
        $result = array(
            'code' => 1,
            'data' => $ret_arr['data']['sort'],
            'msg' => 'success',
        );
        $this->ajaxReturn($result);
    }
}