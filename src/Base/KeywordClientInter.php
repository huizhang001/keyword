<?php
/**
 * @CreateTime:   2019/10/22 下午11:01
 * @Author:       huizhang  <tuzisir@163.com>
 * @Copyright:    copyright(2019) Easyswoole all rights reserved
 * @Description:  关键词客户端配置
 */
namespace EasySwoole\Keyword\Base;

interface KeywordClientInter
{
    public function append(string $keyword, array $otherInfo, float $timeout=1.0);
    public function search(string $keyword, float $timeout=1.0);
    public function remove(string $keyword, float $timeout=1.0);

}
