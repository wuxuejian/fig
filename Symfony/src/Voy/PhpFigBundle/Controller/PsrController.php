<?php

namespace Voy\PhpFigBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PsrController extends Controller
{
    public function indexAction($name)
    {
        
        $twigData = array();
        $twigData['titles'] = $this->pageTitle();
        return $this->render('VoyPhpFigBundle:Psr:'.$name.'.html.twig',$twigData);
    }
    public function psr0Action()
    {   
        $twigData = array();
        $twigData['titles'] = $this->pageTitle();
        return $this->render('VoyPhpFigBundle:Psr:psr0.html.twig',$twigData);
    }

    public function psr1Action()
    {
        $twigData = array();
        $twigData['titles'] = $this->pageTitle();
        return $this->render('VoyPhpFigBundle:Psr:psr1.html.twig',$twigData);
    }

    public function psr2Action()
    {   
        $twigData = array();
        $twigData['titles'] = $this->pageTitle();
        return $this->render('VoyPhpFigBundle:Psr:psr2.html.twig',$twigData);
    }

    public function psr3Action()
    {
        $twigData = array();
        $twigData['titles'] = $this->pageTitle();
        return $this->render('VoyPhpFigBundle:Psr:psr3.html.twig',$twigData);
    }

    public function psr4Action()
    {
        return $this->render('VoyPhpFigBundle:Psr:psr4.html.twig');
    }
    
    public function questionAction()
    {   
        $twigData = array();
        $twigData['titles'] = $this->pageTitle();
        return $this->render('VoyPhpFigBundle:Psr:question.html.twig');
    }

    private function pageTitle() {
        $title['index'] = '首页';
        $title['psr0'] = '自动加载标准';
        $title['psr1'] = '基本编码标准';
        $title['psr2'] = '编码风格指南';
        $title['psr3'] = '日志接口';
        $title['question'] = '常见问题';
        return $title;
    }
    /*
     * 你，伴随着春天的脚步走向我，使我感受到了春天的到来。
此刻，我相信这个世界上真的有天使的存在。
而那个天使就是你，从你映入我眼帘的那一刻起，你就成为了我的天使。


我喜欢你乌黑的瞳孔，犹如天空中繁星般照耀着我。
我喜欢你甜美的声音，犹如麦当劳薯条般清脆入耳。
我喜欢你飘逸的发梢，犹如清爽的春风划过我耳迹。
我喜欢你樱红色的唇，犹如火焰般灼烧着我的心绪。

认识你的那一刻，我心中千年的冰雪瞬间融化。
那一瞬间感觉到了时间的停止，感觉到了爱的到来。
每个人的心中都有一把锁，千万人之中我找到了那把钥匙。
我会抓住她，抓住那把心灵的钥匙！

我有一个梦，我希望能握住你的手对你说我爱你。让全世界的人羡慕我身边有一个如此美丽的你。
我有一个梦，我希望能牵着你的手在星空下漫步。让繁星见证我们的爱情让我们的爱在黑暗中闪耀。
我有一个梦，我希望能在沙滩上亲吻你樱红的唇。让恒久不变的大海记住我们这段永不变质的情感。
我有一个梦，我希望当世界末日都能紧紧拥住你。让我们在困难面前不低头有你的世界就是天堂！

空中飘荡的云彩，街头嘈杂的人群，地上倾斜的树影，耳边柔和的风声。
这些，都只为你而衬托，衬托这个我爱的你。
那一刻，我突然明白重要的不是我身在何处，而是我身边是否会有你。
你，伴随着春天的脚步向我走来，我感受到了春天，春天真好！


我将我的思绪告诉微风，
你是否听到了我的心声？
你将你的微笑赠予空气，
我已经感到了你的甜美！

我想在月夜下抓住那一瞬间的光辉，
那瞬间的光辉能照亮我心中的阴霾。
我想在酷日下寻找那一小片的树阴，
那小片的树阴能熄灭我心中的烈火。

我常常在想，
如果云彩丢失了翅膀该怎么办？
如果空气失去了重量该怎么办？
如果月亮失去了星星的陪伴该怎么办？
如果我与你擦肩而过该怎么办？
如果，如果。

微风拂过我的脸硖，我感受到了温暖。
抬头看着晴朗的天，我感受到了春天。

综上所述：
我想你清楚一件事。我很想有一个自己的家，里面有一张很漂亮的书桌，但是如果没有无所谓。我也很想有一张很舒服的沙发，但是如果没有无所谓。如果在家里面，有几个天真活泼的小孩子跑来跑去，我会很开心，但是如果没有无所谓。最重要的是，这个家有你，其他有没有无所谓……我要你知道我心里是怎么想的，我一定会娶你，问题是，你想不想嫁给我？ 
     */
}
