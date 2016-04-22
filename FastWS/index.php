<?php
/**
 * FastWS的入口文件
 * Created by lixuan868686@163.com
 * User: lane
 * Date: 16/3/23
 * Time: 下午2:12
 * E-mail: lixuan868686@163.com
 * WebSite: http://www.lanecn.com
 */

namespace FastWS;

use FastWS\Core\FastWS;

//xhprof_enable(XHPROF_FLAGS_CPU + XHPROF_FLAGS_MEMORY);

//FastWS根目录
define('FAST_WS_ROOT_PATH', dirname(__FILE__).'/');

//载入FastWS配置文件
require_once __DIR__ . '/Core/Config.php';

//环境检测
require_once __DIR__ . '/Core/CheckEnv.php';

//载入FastWS核心文件
require_once __DIR__ . '/Core/Init.php';

//启动FastWS
function runFastWS(){
    FastWS::runFastWS();
}