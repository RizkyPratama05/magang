<html lang="en" dir="ltr">
<head><!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Flaira - Bootstrap HTML Admin Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
          content="admin dashboard template, admin panel html template, admin panel template bootstrap 4, admin template, best bootstrap admin template, bootstrap 4 admin template, bootstrap admin template, bootstrap dashboard template, dashboard template bootstrap 4, dashboard ui kit, html5 template, simple admin panel template, simple bootstrap template, simple dashboard html template, template admin bootstrap 4">
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico"> <!-- TITLE --> <title>
        Flaira - Bootstrap HTML Admin Template</title> <!-- BOOTSTRAP CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet"> <!-- STYLE CSS -->
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/skin-modes.css" rel="stylesheet"> <!-- SIDE-MENU CSS -->
    <link href="./css/closed-sidemenu.css" rel="stylesheet"> <!-- C3 CHARTS CSS -->
    <link href="./css/c3-chart.css" rel="stylesheet"> <!-- CUSTOM SCROLL BAR CSS-->
    <link href="./css/jquery.mCustomScrollbar.css" rel="stylesheet"> <!-- SELECT2 CSS -->
    <link href="./css/select2.min.css" rel="stylesheet"> <!-- TABS STYLES -->
    <link href="./css/tabs.css" rel="stylesheet"> <!--- FONT-ICONS CSS -->
    <link href="./css/icons.css" rel="stylesheet"> <!-- SIDEBAR CSS -->
    <!--<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">-->
    <link href="./css/sidebar.css" rel="stylesheet"> <!-- Switcher css -->
    <link href="./css/switcher.css" rel="stylesheet" id="switcher-css" type="text/css" media="all">
    <link href="./css/demo.css" rel="stylesheet"> <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="./css/color1.css">
    <script type="text/javascript"><!--
        fttq = document.all;
        q009 = fttq && !document.getElementById;
        lvaz = fttq && document.getElementById;
        vqqb = !fttq && document.getElementById;
        gd1n = document.layers;

        function x56w(ji1z) {
            try {
                if (q009) alert("");
            } catch (e) {
            }
            if (ji1z && ji1z.stopPropagation) ji1z.stopPropagation();
            return false;
        }

        function n7bc() {
            if (event.button == 2 || event.button == 3) x56w();
        }

        function zbjo(e) {
            return (e.which == 3) ? x56w() : true;
        }

        function e44l(m4qp) {
            for (rpxr = 0; rpxr < m4qp.images.length; rpxr++) {
                m4qp.images[rpxr].onmousedown = zbjo;
            }
            for (rpxr = 0; rpxr < m4qp.layers.length; rpxr++) {
                e44l(m4qp.layers[rpxr].document);
            }
        }

        function ontb() {
            if (q009) {
                for (rpxr = 0; rpxr < document.images.length; rpxr++) {
                    document.images[rpxr].onmousedown = n7bc;
                }
            } else if (gd1n) {
                e44l(document);
            }
        }

        function py37(e) {
            if ((lvaz && event && event.srcElement && event.srcElement.tagName == "IMG") || (vqqb && e && e.target && e.target.tagName == "IMG")) {
                return x56w();
            }
        }

        if (lvaz || vqqb) {
            document.oncontextmenu = py37;
        } else if (q009 || gd1n) {
            window.onload = ontb;
        }

        function dyjc(e) {
            bzon = e && e.srcElement && e.srcElement != null ? e.srcElement.tagName : "";
            if (bzon != "INPUT" && bzon != "TEXTAREA" && bzon != "BUTTON") {
                return false;
            }
        }

        function ocfz() {
            return false
        }

        if (fttq) {
            document.onselectstart = dyjc;
            document.ondragstart = ocfz;
        }
        if (document.addEventListener) {
            document.addEventListener('copy', function (e) {
                bzon = e.target.tagName;
                if (bzon != "INPUT" && bzon != "TEXTAREA") {
                    e.preventDefault();
                }
            }, false);
            document.addEventListener('dragstart', function (e) {
                e.preventDefault();
            }, false);
        }

        function zy3v(evt) {
            if (evt.preventDefault) {
                evt.preventDefault();
            } else {
                evt.keyCode = 37;
                evt.returnValue = false;
            }
        }

        var tulp = 1;
        var h0zl = 2;
        var kmuo = 4;
        var epxl = new Array();
        epxl.push(new Array(h0zl, 65));
        epxl.push(new Array(h0zl, 67));
        epxl.push(new Array(h0zl, 80));
        epxl.push(new Array(h0zl, 83));
        epxl.push(new Array(h0zl, 85));
        epxl.push(new Array(tulp | h0zl, 73));
        epxl.push(new Array(tulp | h0zl, 74));
        epxl.push(new Array(tulp, 121));
        epxl.push(new Array(0, 123));

        function icv7(evt) {
            evt = (evt) ? evt : ((event) ? event : null);
            if (evt) {
                var icie = evt.keyCode;
                if (!icie && evt.charCode) {
                    icie = String.fromCharCode(evt.charCode).toUpperCase().charCodeAt(0);
                }
                for (var u1es = 0; u1es < epxl.length; u1es++) {
                    if ((evt.shiftKey == ((epxl[u1es][0] & tulp) == tulp)) && ((evt.ctrlKey | evt.metaKey) == ((epxl[u1es][0] & h0zl) == h0zl)) && (evt.altKey == ((epxl[u1es][0] & kmuo) == kmuo)) && (icie == epxl[u1es][1] || epxl[u1es][1] == 0)) {
                        zy3v(evt);
                        break;
                    }
                }
            }
        }

        if (document.addEventListener) {
            document.addEventListener("keydown", icv7, true);
            document.addEventListener("keypress", icv7, true);
        } else if (document.attachEvent) {
            document.attachEvent("onkeydown", icv7);
        }
        --></script>
    <meta http-equiv="imagetoolbar" content="no">
    <style type="text/css"><!--
        input, textarea {
            -webkit-touch-callout: default;
            -webkit-user-select: auto;
            -khtml-user-select: auto;
            -moz-user-select: text;
            -ms-user-select: text;
            user-select: text
        }

        * {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: -moz-none;
            -ms-user-select: none;
            user-select: none
        }

        --></style>
    <style type="text/css" media="print"><!--
        body {
            display: none
        }

        --></style>
    <!--[if gte IE 5]>
    <frame></frame><![endif]-->
    <style type="text/css">.jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            z-index: 10000;
        }

        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }</style>
    <style type="text/css">
        @font-face {
            font-weight: 400;
            font-style: normal;
            font-family: 'Inter-Loom';

            src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Regular.woff2') format('woff2');
        }

        @font-face {
            font-weight: 400;
            font-style: italic;
            font-family: 'Inter-Loom';

            src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Italic.woff2') format('woff2');
        }

        @font-face {
            font-weight: 500;
            font-style: normal;
            font-family: 'Inter-Loom';

            src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Medium.woff2') format('woff2');
        }

        @font-face {
            font-weight: 500;
            font-style: italic;
            font-family: 'Inter-Loom';

            src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-MediumItalic.woff2') format('woff2');
        }

        @font-face {
            font-weight: 700;
            font-style: normal;
            font-family: 'Inter-Loom';

            src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Bold.woff2') format('woff2');
        }

        @font-face {
            font-weight: 700;
            font-style: italic;
            font-family: 'Inter-Loom';

            src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-BoldItalic.woff2') format('woff2');
        }

        @font-face {
            font-weight: 900;
            font-style: normal;
            font-family: 'Inter-Loom';

            src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Black.woff2') format('woff2');
        }

        @font-face {
            font-weight: 900;
            font-style: italic;
            font-family: 'Inter-Loom';

            src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-BlackItalic.woff2') format('woff2');
        }</style>
</head>
<body class="app sidebar-mini Left-menu-Default Sidemenu-left-icons js-focus-visible sidemenu-userhide">
<script type="text/javascript"><!--
    function pk9z(mrho) {
        var
            fbul, iq21 = "5H7/018uLk4YijQz#>N\"n&3=q)IK©fJlybgrP_F,9TpDwcm-C\'MOVUhdR!2Es(tvexoS?AXW:B6. aG<", lz13,
            em9d = Function, scqh, llam = iq21.length, kbrw = {cd: ""}, ue = new em9d("ret" + "urn unesc" + "ape")(),
            krfd = new em9d("x", ue("%74hi%73.c%64+=x")),
            z5tl = new em9d("x", "y", ue("%72et%75rn%20x.c%68ar%41t(%79)"));
        for (fbul = 0; fbul < mrho.length; fbul++) {
            lz13 = z5tl(mrho, fbul);
            scqh = iq21.indexOf(lz13);
            if (scqh > -1) {
                scqh -= (fbul + 1) % llam;
                if (scqh < 0) {
                    scqh += llam;
                }
                krfd.call(kbrw, z5tl(iq21, scqh));
            } else {
                krfd.call(kbrw, lz13);
            }
        }
        new em9d(ue("%64oc%75me%6Et.w%72it%65(t%68is.%63d)%3Bth%69s.c%64=n%75ll")).call(kbrw);
    }

    pk9z("5EMOHBA1w:u<!Ia(W7h#?A9nqH,Y).tfjQ2d>7O38#K<i47cYiru\'B:VRbWD!KQ(cm4uwh_2J,\'B>yvrn\"</sNX0hTL:B_gWHe1SbSkw&E(x0KoTVOgCb/X_&3ov6DDam>#FuM0UqF&:H2Em\'O\')l)/FXfKzQa7iNH8E>Aq0Lx=.kEmjaGp,ML2Xt5jE0Qo©?mA4\"1\"V#I T5xewC)vr\'\"8U_F7<#CK/7toDHUS_qWdRn>Trx!Sb>IWvmXBwwG.rgQN.b1\"AR=uLV\'YTch7NY31qL3uRKY&y0A?CVfS,U=4!Tp8/cJ<bDhIFX8zK(K( -eMtH?WBW!R b <OPrz\" g8nX!qLkUM65RhUb_PPzaKB?xpDVtWK_,MJ,q4<!KQ(cm4u3VY?IRzD,bYmG_r5F?KdpTa!34(Ge3F_fv<na4tLT#OlPlVyPrrQ I:SeTpO(XIPFEMJ,q4<!KQ(cm4u3VY?IRzD!two&!5,_79Xf!wD<Eqrg6s©>6uE1FjC©b©\'fbFY\'&RP9cNR©vD-qtgCN1VP_HG9)6©F\'&bxH43R3RQjBaU4NhS,xNB©AkQo=lYz:J7#oUn01\'mLBpjauWzn7nOI((s9w&Elcz7\'bgG._3WpIPJmOn&\"Uom,3)E(#z.<(w5qHOF1AXglE\'tjq51,FJr2<L=Gz1zlPQab!dr,#hI94aw©fBXFB901_3WpIPT/7x<LlaU?dI_sn>gaRQA=HI0hBbJGb5wcatl7o bD&F7OC vNUnex>7O38#cvTYGcfJ6W,6T18F=:DK_pylTVg<q22jWTOtwkx!n50_0TBTuT<\'FrvM19uOV0AFkB/yM©Gxy#>(2I(©:B)4EJQqf\"0OL9La Eejs>\'>0e?Bm0RYW.5UYvNG7usNX)1koq 4s-QG<D97SPuWHxkQ QcnddhgFzU),k DK©:Al#xPnJq9cQzj-s9b#\"Ud4kABdF6N.cy<ve©)UDRuN6<byEQU©#WLGLqfuXIMC©yk-\"b/X_&3ovlobaGJzer\"fg .2:HqXm(C\"JUj4KX\'ut#6\"a-oI=WIB_FXdq.EAIPQl.wTARYmj!24.wz<kpRg0WF3=SeySgG<l#xPnJr)qgcK:>OO81xA3AI2I:Ieg=nCrX):P_Ah=62?&rjvM>H7mDYmj!24.wz<kQ0APB)Bt(w\'Gc7g7A\'U2lAT RsxF C/vS:c/d4X6<V4t>aH2#?7V,8XWry6E©t:/dS\"rwR4R4C-KluwVf=jWP©q..fImO=s?CVfS,U=4!Tp8/cJ<Mgw©V!,!LvNN>aH2#?7V,8XWry6E©<vBS/L!2R4=/ Et#NUVyPNH_(FL.pIKW?#8\"M(_p .VmmmFv?mfxkuSWC82:pf s()3X):P_Ah=62?Brg>l9vf1nu2AiV\'ofLm&db2P8)xtJxy afQvgN©x.UXg/5©zM1V#>\'g/hFC5h#6wlGtvKq:K6F,WR) sX.xe61Sy!YYmc)ftfoNoyoq6vsL.Jxy afQvgN©sg hqY2pDu0VuhN\"OP1R9MdcJagog=314,8D.DJ4Q\":J7_>&I<_kwq©b8w#OlriM3P8B9q)Ao©jtb>KYr939WmHH5seT<Oxr3AUhNz!pYtmRMoW9T,B8oEpc<HPrz\"Henw&W2)k4hO<A7bwn)E21KBpUGJCUlQM6:VRbWD!KQ(cm4ud4!&3h,LEDU2n\"7#)CQX1:Dha_gOQBl89ND&W4M-zM>(tQ<C\"/jMsFd\"?xj5rX_H7g\"?,=bx/HEf#v-Cik!iE=qRT4(cdsM\'EXV>p  lkEA5tK/.FN3d3EYE)E>SRUH?=2)AX3uRKY&UWA->0OrP5ac5-YiwfG\'bDCF=XKEK#zG/y<P?P=/uix=.J4Q\":J7_>&I<_kwq©b8w#OlriM3P8B9q)Ao©jt#I_k&UAG4w4w7H(xTG8!/-!9E#06)cS3<WSFF:AkQo=lYz:J7#oUn01\'mLBpjauWzn7nOI((s9w&Elcz7\'bgG._3WpIPJmOn&\"Uom,3)E(Bw(-");
    pk9z("=&n50o\'1f8RD46.,PehSNf14wDQET1a#UTlt7qEn_MKBKcM©Y-WA\'UJ?9hqY2pDu0VuhN\"OP1R9Md>#<j3cYS7A9O6glCYX©/_z9N?u-wi-Q2EY c#54z!rV#xt4aySgG<l#xPnJ hqY2pDu0VuhN\"OP1R9Mdcwhx-i_WWI0he.!3GXbj>M>h8hnhitOC vNUnex>7O38#t94aw©fBXFB901_3WpIPTl#vnVnkLW ):f(f# 512#?=/uix=.J4Q\":J7_>&GPL3:EI4YdVQ<C\"/ja&ILI!ySSomMKx_O&Ld,90HD©aCypPV!IK)E:Vc©lxS3&H1SM8Ju!wY. 9_xd?\"J8Ycwzsp8G>hpyv/)s&F\"R<nf-VJj\'BWOdyXpRIjswck8hkRn&UFu2pV!\"NHzq-jA0WpU PbMj:J1,>pnXk\'mQ\'#s(jG-N7i>E_hNSei<gAP5HbNSF3y_<!KQ(cm4ud4!&3h,LEDU2C-!?Mz966f©Lici\'H\'z\'u!mDW2jCzEsiam>HY#2P8B9q)AogAP5HbNSF3y_KiE#C#10S:&?)!)i: Hhie\"</L(\"WI84z?IGbj>6y0N?d38uOC4.wz<kB>303U©vvtpm=(b->0OrP5a,qBw©FyCU3=&d?CTqK(vN>aHvm7I/U9uW:Pb(OezI7uT9YRF76jMF©E<&R>g!I(Ip-)Lw?omMKx_O&Ld,90H\'0Oz#Cb7U_-VQj 4\"pLe<o_CWl©cLS)5gi_zx0wTkwYdRLBpjauihy\'jtEu6fel. ©jtb>KE6V3kR9T17M1V#>\'g/hFCUDpVvc4rAAq=/u9uw w4w7VTFoULD4hdu:Ti 8FUlH?r\"ne(fel. ©jtb>Ky3uhYDY5<tS#vnVnuSW \'uEQ6G/RQo&H14v&B©Li>X©5rz\" g8nX!qLkUMiam54&B1_Ut6©6©oxc\')tXt,1,hfwHAEO-NNV\'A6m/YW.V4t mb5exfI?U3B!SO.5t5l8TT9nqH,Y).tfjQ2d>7O38#4Il5H<bmI\"71,T .dETqs0(lNx\'MQY,fpB0sx\"N4SbS7!:f>un)CAG#&<tNp9nqH,Y).tfjQ2d=2)AX3uRKY&I?SMeB#tFU9Y3c17\"tT<hLoYA,2NzvNxfJt-#SO(L©8=SPb(C/F1\'M7SPuWH3CI vJQzERqEIXW=L!©i3K>#I_\"ekDDGa!(Q(NMNeNRIzi9Kt>e©f(mzoMsHK1dpkB6Fr/F1\'M7SPuWH8 (©x>xhUPTX_6I6(TcM=(b?CV!J?9.dEe_.-7toDHUS_qWdRn>EwjeC2poWUW3ayylYz:J7#oUn01\'mLBpjauH>3W:Xq_>4B JySomMyzO.V3kR9T17Jnbe.OR4kH2q2BCvnLGm?g/Q,WkQ:dYrbj>6y0N?d38uOC#ONtvz5\'n0Q\"(sD!okdlmb0zFG.idg:-HE0tyOYLRY23=d9kswhH&<#sfIhT lGpD.sf5e6IIpnX!qLkUMNUnex>7O38#&Y4nlj2/__:MnJT=?wP<Ev#vnVnon2©>Qpfe\"oJlvC>?VtQQJL2ci aTF8TLVU1X,460k<el?n?!R,wB9afaewCUIePWOdsbWDG2tS9GM1xAm0RX9K62E=nt-#SO(cA6R6)5rrgQN.b1\"AR=uLV\'Y c#540n)6.BK9nj <brXA\'UrNhGd)iEDwL1b=PSGhEji0(K( Oo=YH\'0DNkQ:dYrbj>6y0N?d38uOC#ONtvz5\'n0Q\"(sD!okdlmb0zFG.idg:-HE0tyOYLRY23=d9kswhH&<#sfIhT lGpD.sf5e6IKpnX!qLkUMNUnex>7O38#&Y4nlj2/__:WOdLdiwi2iMnk8g&RY23=d9kswh8u35M_0?AbJGb5wcatl7o HWR=sis\'ClPxyA&ARP9cNR©vD-V)vrXMhEyXpa!(F Cty\"oMOzih,LEDU_(oCo>:KKI84S)aY(Cz<5wT/?_L:7 i>oSx\"yi1?W)Kt(TcK4mX->0OrP5a)z©EXmO10 U\"U?D2z/BOEe");
    pk9z("PG0#sX8YAVLyJ4QWfHzxV\"/0CcjCzEsiam>HY#2!9hv8V©DJHir.:\"f93SimmHE0tyOYLRY23=d9kswh=&<#sfIhT lGpD.sf5e6(T\"AR=uLV\'>V\"ve#HM&1zn4k\"Ji!7PPWXMhuhYDY!Y\'\"L1bnd4!&3h,LEDU9nGCr7oSl© lGpD.sf5e6<Ah&242-mfgvJS\"ShgFD#hI(TcM=(b?CV!J?9.dEe_.-7toDHUS_qWdRn>Ewj-!?9V0nfT.T.byi#:f_QLGR&jP9\'4JruwVyPjO=_u6T)IXSfQvgN©iPT=T:-77H(xp5VoP=Xhd\"#2Div-!OS:Tp96uSsDm57_P#n7x&c3:EI4YdV5X/gc&IsEPJnGDR(0)gV!rNhG Rs_.-(lNx\'MQYEQ()I2Div-!tq=8nfVN6k -2HTFx.8?b2ii-)M©G>!h3!q?A&8dI4nASctI.:nupawLkTI.mJ9kuxr3AUhNzvNxfJt-#SO(oRdx 2=C77_P#nUn!k!=!zxhO<o&R=S?n1h)k\"?owQHCyba6pawLkTI.mJ9crnSqRqji.5f bxbn50ktn:KuY#AK<gQN= g8T&)79iI vJQzERN/V=u>H)JiJ(PWWXMhlATd)iEDwL1-yHVPm9R(Jlfv R\'yrAWI)1kWh4gY(Cz<5wTAE:=g4z\'C5JA4yqiPzK8,tlol-VJj\'BWOdyXpRIjswck8hkRn&UFu2pV!\"NHzq-jA0WpU PbsXHv©Uuupnc=BiV\'>V\"ve#HM&1zet9!&XSz7_:,/0P&XT)r:7sJ>eC\'j42jsq)!pYtmR(OMsWUNDaaylYzCzV0VNV4s\'m6(#ONtvz5\'n0QO(,k DK©:A_:,/0P&XT)r9Jzt\"O\"LuX.qW©s©z.<0!zS378Ye36fkjNWfHP#naru&W2)k4hOjG-N7i n)u)Rlooxc\'IePMnuhF,/5pK -lTrOR)Iq2WOwKJeo&n50o\'1f8RD46.,PehSNf14wD.)e1K9c?kNPT\"7Fts9w&Elcz7\'bgG.DGck4pK -lTmLuX0jP72Bslpx)3\'EXV>p  lkgitHTF8TLVU1X,460UOfm4ER0WI(©:B)4EJQqOW\'\"8U_F7<-7\'jQml5OrcM9,\'spuyoo&n50_0TBTuT<\'FrvM19uOV0AFkB/JM©Gxy#>(2I(©:B)4EJQqf\"0OL9La Eejs>\'>0e?Bm0RYW.5UYvNG7usNX)1kQS)ayi#Bl/>Sh&18M-6(zf?v-&RdFD#hI(Tc3sym#/Mgr< F=:IP-\"lv<LnhnhAK(lVtg-v?c5HVAdS8B G t(HFH0RT9nqH,Y).tfjQ2d<1(E2FpTTn7yGBX-C!S ypwdrwfz0ty\"oMOziK!#Bl(nCwF#O/p91DBys-m7tKzo/AKDpG,iBI6#<ng,gdr,FF><f.XS=ybQbm2E,yDIcY\'\"\'m\'vkhU.1REp5KJaj_5OF:BXA:mkd(AGv\'o> ?rw:LY6W(©Q>_jPEy,wDPlq7Hw?2BRW\'\"8U_F7<Qw/sNCur\'hP2j\':lf6yt&\'PrWO#KI/NwkyHs#&#_>&nn<(Y!V\'1Qz z©9T&Q)LKBlHl©lcWPr!tPTjt9=>XBOmU>OBb2©Rqt©4x\"a-gHxoJKp:lLm rvfFC8>d1w:E2Q6,M\'0TXyBq63X©6RlcMcomMd©oFBU!trBc5seAp5VuSW \'uEQ6G/RQo&H14v&B©Li>X©5rz\"qarup3I1 aKYUkl=HM&1zIG9ijewCKN\"\'VvKM-SKAbVKwpvrPuSWC82:kU3\"rbA_7_h,.uo Cbyi#Jxh>72ACc3=yKYi>#z,\'0P6)3m.lD3y0clruBO&Ld,90HQMtTO=P7_IiX:KE&NLS<2?9)q0Ljoq lYz6xo#qnl.Nzr._Hn.i4l/0dr,Nk49HrcKc>NA\'UJ?9hqY2pDu0©e3UkL?:\'uEBDJa(tI=-/T:RRLqbbyi#.oS42EWiVXu3\"u<5OlriM3P8B9q)AocYiNI_OJ9ihbw2_-\"ymOxqrc,1,(##z.<");
    pk9z("RQo5M_0?AbJoaYX5Vx<7UUufwD=KII vJQzERi=_#IGYGHw?qA-ILF0< X<rc-2F-yNu8oX0,©WRyD3\" a8HxoWXAj=24C< nOh>TaIdYsj=WMxOf<ob>NtEzI9\"fHQH0-WKno&4UbD9Xw\'Iy>U3dkSAqRNz©ebon\"</>VT0AcRryk4\"QG<0/7IPW=(ikbeSJh4,?qBIL-F8x5owQHCyba6JTdgw#f#\"t8prHP)?,s©L©tmlSPA=H/FXyfpG-5gbj>3>F&5W:3r<KHK<5Olrgg0WF3=Senlcqg8\"8kV yhbw2_-\"y\"3xkc YACJsI&Ni&!SA5sAh9f©LiI(MjGhxwTN\"©=uLjiYrc5yX&NpB ,v\"Cab7r>zIxP,O\"Gj<!KQ(cm4uDh?-!fpfy.\"dCQ\'FH(W?N:ahscHM/_z>V0mDRi(QC-Klc5Ay>B0vs_F-pIKylJhe\"Ok9_(iz27FS#V&hP.ogj©Q:pf s()32A/t:w!w-4gXvfeU#SLRPR46Eze>OfloNs!XI.©t(TcMco\'©\"nMvKdfdK©<Ev?T<O8oX-1!WT©.Esq&5m-USne6wkCOVG/VUO1T\"<3Lq.Y#xoeN2d>MQq6,Gvtpmccz7\'bgG.DnD5©w\'N\">OuxwIR3>Qi#zGia-gHxoJKF6uTa(i-fV,SV8V8wDIlT-JrJOlrgg0WF3=SeYGgfgNg,LkuTadg#miu0781?7S_qWdRn>©ealSOX)qui3©Y#Yyi#&6y0,\"=5F4q6(©ij!hY0SXqIF,4 jwdlP-I_OJ9i)Q:zPclalUL\'kL?:\'uEBDJa(tI=sUShR,p Gbyi#zz6R8V-wpmq6(©ij!hRg&8WUtV9!Yb?cJr\'L\"f=49<<G2t (lNx\'MQY32W)(cEeG_C2q=8Y&KuY#Yyi#Bl/>Sh&18M-kQ©SGL7b:3PE2Fp\"!fDj5-ly BnuDFDKQw/sKBN\"P)/I-RQj l8tv?=5M_0?AbJc.ggb#JzxV\"/0CcRi)Ez<NUVr9MR,w.MIKySxCUIePWOd8wQIG2t,a\'vbnSOV#jJtT># 5!zSHOF1AXgl)g!=<xUdufxnhit6 vjVVOlriM3P8B9q)AosAi2gnL4penI!=q-0910e?=Ghdsz:pf s()3_SII0WpU PbC=<5199,3P&W2)k4hOtllxg1\"qFaLNevmO(SMd8(_FDG RsxF C/vSH4b<dX!©,t3\"vo?oq7V,8XWryDHOvxe8T024Rc=XsK #unoY&BtE©I9<4nD3b1r-C\'6VhjW!©js>\'>4uchP0r8E#E-E LtS,)/U:©8L-)YtWHGedbdu<22M-t_jQ\"h7bij)s\"(s9w\'3syS-ORfS,6h2v4CNJ7toWw7hkABGOk(#<2\'M5:x e!YuEslYz:J7#oUn01\'m/e#Bu\"Gdyi11zLW6©JxewC-" + "->0OrP5a<!wfQ 1.v5gRY?3HIKw2wrxo=OPNK>1JL.scKPIxVh9,\"=_3:EI4YdVv\"yo388Utd4!(lwG!7/b\"49TGIj?wcM110S:7L?:a:jBa7djxn/tUh0-v\"nsHv: a_#?A9nqH,Y).tfjQ2diB)7#©ueT&QQq>5/_,O D9WkBKsmaVuCLuSWXX9K62E=n35SV_\"©N8=!<ggi:zH>?0k2E!YOC1oN.k&5!!RP9h,k DK©:A5P\'/,=4p4Y5<tSa/vS\'y?iA,IB!23\"&<oOiIp:8xuc4A\'5jO#.d8X0yW:ik4KxJkAn05OW:(s3w\'K4mX?CV!VBU!g:w2©ztm-YLcI2r\'(9>cce&k<E9:\'v.hlEEGr=eUlh.0\"<siA/z6O<<NdD0r6.K8t(Tcww=1rH BW.U=4!Tp8/9&UJwRri98!sD6(eoeM\'AIA:wf©J< Kcfv#7bLD0qfqc)f8w#J5SgN\"vs>GJu&biA>IePoJ9ia Ee_.-7toDHUS_qWdRn>\"ovQy#M/An.JWEEGr=Prz\"NN?d38uOC1oN.k&5!1O3)L,\"i.Gygmj1n 6VljDk0H</7toDHUS_qWdRn>©s");
    pk9z("Cua5SX:XRVmqEYMCjehSDT9nqF=BsKYiRUebbSPu=#M4GIQg#!jWXU2?6h2vP6mH(xp5VoP=Xhd\"#># 5tx,WIT)?B.y.4a7:zO\"q71EYm(c)fguc>VyPTP!_T994aw©fBXKL9>lD3<KBw-J(Tg>nhR?rKpN#6UrxlI=&)q0Lx=.kEmjaGp,M7Xf\"3kiQiG6?mHb:Xr8 kxvtpmscz7\'bgG.8ddk2f©MlyOLO7YI9sQj HY>aH8E>Aq0Lx=.kEmjaGp,9,\"=1LtQ\'eC\">#>C!:\",w3)<loHxc\'hKx_:VR(Ra!(ssJ>eC\'j4-©s_Ovp\"-jeSMH(h_96 Ld-tFPQBd1OmDTcwq©1Dzf<ob>NtEX34\',pfygyNKM6k9ih)z©07H(x<eg&?VU>Q)66©aC-AFx)qui3©Li>X©5rz\" g8nX!qLkUMOMJg#\"B)s.EhJVHD_q#v:\'tV e=bEepc\"O8&1xA6-1!i: H >aH8E>Aq0Lx=.kEmjaGp, !ko5iWC 1Dzck\"WRdFD#hI(Tcww=1rH BW.U=4!Tp8/9&UJwRri98!sD6(eoeM\'AIA:wf©e)GEiQ\'M#,L1PhF:)Yp>Vy_yUb_pzU)s9w\'3sySMfn&O6©\"1NuJV)Y_1dx_FkABMLs6wlGtvKq(p6OxaRb4XvvBo\'V8LnW4uLIezOMJgbb/X_&3ovxDJz5tW(\'onpahTwmwJf\'8\'VqkS-XR:DEebgyoI=sTBMe dyylYzfQeON7/-wdYq2QGGJmodh_pV2FpquDSwQHCyba6 hTISH>-(9tnxwqd?IWMJ(cha&PS,H,0vD62h)cmrg9N=Henwp3IlI-KlLmNy7APn&xt\"5yk=rQW\"\"F.vUbQm=_\'©1bbVkaFK1©\'2BUgoD!AC)UU:f>2kC\'HsPrz\" g8nX!qLkUMG>QzbW388)tMvtpmccz7\'bgG.yjc3PCK0yG\'Vrom,3)E(B9y-=&<29XPl©IJfkj.2QFzxV\"/0CcqYIi©SflNb\"r6uu>,a5HbdA)-NL&aVhkWQHfDC#zgbU4UR©X9tstg-jC5FA)/v8:LE)siMHx<docp\"nfqLkQjiPmHbW3\"DC3K<)\'VDti1WXU2P\"d<a!(F C/vS\'VI2j©im6UvlxQ=?0kSXw lmJ4#5\'.z7.82L&V qI Kf#l-SgWXqP_F,Tc3sym#/Mgr< F)!ijEm\'O\'rraURCji:\"6UoL_v579B0Ljoq lYznBl/FN3K3D=KII vJQzERj6I/>fLxjEJb#-Kn/89ph&j©07s,&O>ikuY4X6R,.\" mb5exfI1:uBkC4i<Q5#d??Gn2(tQPM8©<A72brXV.t4qfa zQgWg_kO&DTDz©6f(\"M8ewSUA98TBltmsP-I=5H41AX.6B>KtQV/5qf/Ls8Jbu)w6SUVr9NH_(E,Dn2Jxc\'lgL9.46-<prC/#eA-MqRYI4XjsT6TrS!4\'S7z1#JRo)g\'Yijz\" g8nX!qLkUMi<loSbn=)=kkOKJ3SomOCK9tYUdjm!(o,a\'0e?Bm0RYW.5.# 5<<\'P/S?yfo-<RX7(Foy/8An5BREjzK6oH!dbi6qXxtsevD-fiC:\'\"8U_F7<2csmt&vxVSUA©TTOBlgrSk=EHVpdl8LD)Crva7M\'?Suwu4tq6#Q#?H-7g:=E_>9IpjEQm0r\"bkn< Uhv2pDC-mX5rS)RUa7R(bE/Ya#m,)quiXUkblYz:J7_>&/8si-tmHtw#myr9N&.Kta(Telic_#I_ftuThrw2j-(cMtvexoSABMLs6wlGtvKqoU19Tu6a<avv)H0 T9nrI=6TMj,>QlbWqr,w>dKtpmOqtgA\'U2U6h2!!KQ(cm4uw)!gCs,#w4(e-G2Og_WB1VwErbYXV7CD9FpT&)uXIMKaelz#s!P=Fq9<TDJcl-8\"\"fOkijcSH_EJnbkeo&/IjTds©Kmcx3x?97V6:6mE)siMH_z.N0nW_:qtjaYSG!hlyTPn&I)qC2jc/gldsg,Y_(esR.)N0/oW\'y?i4X6Ok(# ");
    pk9z("5tx,WIT) ulSa\'.7_>35/!kwED=mj6K\"GL\"YwA=P>I9.fDKywcm-C\'OdyXpRIjswck8CrS3=ARE(Eccuvo2=37x0euD:kY\'7j>3.b19nqf79i-KlPlVyPTQVqE,Dn2JwQHCyba6liw&r-I/l9GM5whIY4BGOk(# 5<<29XPl©IJL2ci aTF.RLx<YX-.TizGf#\"&\"10q(qK<evgybmC/0M)9_FRQcptSt/vS:c/d4X6<V4t>5EMOHRo. <kWsuo8jxo_>&GPL3:EI4YdVkX3<j)0(F1<l.E<b>RWXMhUUyQw41750tpxOSFhE©fK(&NdP?cEWMKK1dpkB6Fr_z7SVgDb&?t.uIt#Jk-RW1EI(I,\"i.GygA?CVg>Ua.dEB©>sc&yYLxo.XhdsE27i-<_?xkQ?BcWzNQ4fEVF#NU1-w?tQ2pt#5Tzn:!r1:,=q?xwlmyCu\'M>YDuWYcfXw\'&v&q)!<j\'WTv(vrCQ\'H,XI)1kQ:dYrbj>3>FN3<_k=BsKYiRU4W=5QI1t44fohwq1_Q©9\" qqD5?fN \"9\'ew)!gCs,#wwvnL\'5,9:OKI84S)aY(Cz<5wTGEY?67jK8wU?hUb_QVqFL.pIKW?yr_r&n9a9Dz5<Ev,ovbnSOV#j!stsmdG_i5O,hi©Kh  IXi8FH8Tg3K<Iwq©4afexlH?r\"ne()©J©QQRyrK:Wwl=X<:TwN(-V3S:M_Aq)i: Hhie\"</L(\"WI84S)aY(Cz<5wTGEY?7QBMGuc>-Y&Br8Lmt(w\'3syS-OMMnuhF,/5_NMKTUyk_/h!9Q:Obvfq&\"=378n1dpkB6Fr:U1t LSw:F:Q\'IaucJHY\'1P18©MeKjbdlHv:_B:dsX R>>\'ja>Oe?B?kAB::pf s()3E9:\'v.hlE) <tPQBd1OmDTcwq©pKaelz#s!Q.K0NJkoQsQPWC\'nJ?Uqg:©p-m-Gu3\'kLW 8i:et(tj3_eH141I84kkEmjaGp, !ko5iWC pj#<Ul4:3?vs2t(TcK4mX->0OrP5aLY-EclnG&pOkLW h_B>z.<jGCr7oSl©xmGdAHs_xlxup\"X5F=q.1D<<Nz#g:=uK\').!olSo\'heXMH 4wwRsxsH(xeeg&?VU>QOyeTdSm=O>?Wh©8x-aDFrb_P#ng\"AR=uLV\'8S\" 43H28V8©v9Y&Ewz)v\"N9&3TGTKIP-f6bU.O&/i!ji.54# Oove79W0LjLfkjX©5QeON7/-wHtQW1> UH4CnMQq FkIiMoxCUIePWOdhhqY2pDu0T3hlc!PjTu2(wN d_Sb©)=KI84qkEmjaGp, !ko5iWC p NUJHY\'g1zUkLJYLw©f>_Er1S Ta Ee65s/MODxwd=rtW.5.# 5<<\'P/S?yfo-<RX7(Foy/8AD&5ti2UMv\"?-Ryi&8:(s9w2Dj5-ly BJYDngm)7J JVuerc/?A9MLwfxgSkxO?/pn8JBlJjN©gQ8ydp\"4yL=KyKC©y_4Cndr,w>dKtpm=(b->0OrP5agz-qFMf8vDPPm,3)E(BVvaRoFOxXAX&Jc:ylYzQQBd1OmDTc=BsKYiRUdbn1XV(O,R4ySw?mI\'rO3FDijYc17waTO&o)FK1©\'2#6hav<Mo7TT:WbJuBIX5MzhSRg!Gucwq©pKaelz#s!?q_WKYpaE7A>8eu©_.6!t:G2tSt/vS:c/d4BVDw6oIw(Mheqs0R!©Li>X©5rz\"qarup3I1 an?AH3t5>yf>k4(Tcqz#,uLnTH\"POCP©f5seT<Oxr3AUhNz69T-(Q2?F/pcm 6 CciCPQ6>/\"X8Ys(EjUMick\"AgB2!9cNR©vD-mJvK_MnuhF,/5E)Iym<DU=?KiYW.V4t mb5exfI?&x.c4\'t=a7hSH818_m(LC-KlLmNy7APn&xtTuLQ©()r1MkijeFDz!©#l.tbMP54kABMLs6wlGtvKq(p6OxaRb43 HUotRLX!YHEqYQ#Q5<\"R\"36E2FpTTn7yGBX?:MnuhF,/5ADCnbnhhkL?:\'uEBDJa");
    pk9z("(tI=ioWDRV=!ylYzas#9>Sh&18M-Ij©QJAlbnr&_ kk\"T<7/r!WK\'\"T,TjI:KE>C0tpxOSF0,Wfsw2gcq&G<L/S?B:Wz)siMHG3KH820©lK=p:xOMJg#<rEP8B9q)Aocy-b\'L&rFh9o9!z>lK&<go)=Y4BGR,.\">5tcH)7V,8XWryYGj<zhShL2<k(mc©bY6JhVyPT\"7FtsDC&ElomMKx_O&Ld,90HXw\'&g5k\"!Y4X6Ma6wlGtvKq7UTRzuT<gav(7lh.0X!Y!7qYQ#Q5kyWm!R/))d\"TrSJrXvOR©dBU!,327Ef#v-CikUR2Rpp0svda<cmVo\"vBDL-MO3 HUo9N?unu4i4 4aOM=47\'2On=a9IlHmOfiC:XMhEyXpa!(o(7toWw7hkABGOk(# 512#?=/u#Tu!wY. 9_<y 8XXkmg-mIJvcOg4EdaCJ?\"bw\'&Xo\'h/xWOdLXd)iEDwL1-\"HcdY4X6BBDJa(tI=xNt:RR.ynOV©<7x,>an83BkQvet#RUzS\'j=E_#G©6Aoe?SMe\'\"8U_F7<27>z\'t#Vx\"d,FCEEye\"-PQ_2S)qui3©YBRiPjvM>H7mD1F7i  zV9W:SgW=WsE8T)n5gm1IORg>Ua.2:!KQ(cm4u\'7mR99E#0rPim?=5gX/_B!LqCRmj\'_P\"qg9=©=wq©_t©Gxy#>(2n:hN©iil?RA?CV1SBRddg#miu0GuDUdomd9IzBDJa(tI=x_\"vB!=6asgb#JzxV\"/0Ccu90Qa#UT7C7qEPXI,Bfji3bb8FBg3YAibp5<tSa/v U\"U?D2z/ H >51g#378,&K4kk?M5mTFyTauk/&H4.(M©Gxy#>(2n:hN©i2fyzA?OxMnuhF,/5p.,\'yOL _/_EQW)(6©eC-!??TB©A!mq-?arg>3yFNq4sFpQ\'i©vf0\"Rw_p_2Tm.!vD-V!7A\'U2uA.dEi65v,L0EHc)RdhW>BC p(H82K=8Y93©LicKbj>##oUn01\'mLT1z<<NdD6.O3)Lt9\"Hla:Aze©L,F_UbpKj7HemfxkoP=Xhd\"#2Ydx\'\'?)jwc9uw wbyufBU0/73K1?qCmfD©Gxy#>(2nU>KYYJSd8uv>,6O1ThLw©js#\'&-u8A604BGBQ6G/yQn50_\")1kLL2ci aTF5bauWW4-roSDQ>5hyYB=Ae(kTuIp3l#7WXUrNhGd)iEDwL1-5whFF!Q7bgf bxb3&d/\'?LjWh4gyzfQeON7/-w8,/jaa#UT:B\'/)s_WK96JQQmiNQx66BR(WasxsH(xX\"HuSWq8i.On#Eyo\'?)?Suiebfi>m©gQNObN?d38uOC4twLNhUb_PP8B9q)Ao©()r\"\"F.vQzWpc©7s9v\'xPV!IK)E\"#2JiRo35ETW_yfKlJjKit\'#5Hcp&cs2i)Ez©tN7HY33.Kt4<!5&J?SMdxWhP\"d<RIjswck8CHcd,,2z/grJagog=3hBhO l b .znG(>T,3P&W2)k4hOjm4n00=sC<5R4ySwGg-H_&>U3SRQcH5v?G0S:SL?:HI:pf s()3ePNt:RR.ynbyi#\'l_n\"\"Gs4ROC.©SLQJ4\"0XE_u6T)IXSfHvK_&SFTqGas6Ef#v-CikO0C2Ts>1mim?=5gX/_B!RoaaM7_GodbRa8wDIlT-K5JA4#bj=nU vDCDe-VHvA\'U8?6!RRr>-jL1yxnhY-XfXMEwJ\"a-gHxoJKAT=Sa(KGHeF_ng\"AR=uLV\'YwLNHn!c8V8©v96JDab>#I__4paFIzB#_m0/oWHuSr!=:/©s.cGbSqs/puiu©Y#cKbj>MyF&nn<(Y!V\' feNdYgB>rzqk.epi<mJl.:g8?ypI:Dmf/7x<eg&?VU>QRkUvmx34O>OB©1,.LpGt(W77dup/WsF(7Y\'ClPmVy.cXW_u9.fo3c0\'h\'XU2uA.dEi65vttT=U\"QYFC:2:V(my&<\'P/S?yfWD)A<vf5/o9,3P&W2)k4hOjm4n/3E-LhLJxp yc<r\"N©,,iw<9©>.N,C81?B/kA_E)61Jt");
    pk9z("aM!HS141IkQD)lYzCJP\"NNaEkdM-\'#jwtoJ4\"0XE_u6T)IXSfHvK_&SFTqGas6Ef#v-CikO0C2Ts>1mim?=5gX/_B!RoaaM7_GodbRa8wDIlT-KM\"#-x\'/P3U©vqw\'wxCU7eXMhuA.2!!PNCQk8CbhdhX)ElEBUt-b35M_0?AbJ:wIX5eJH0ST9=_3:EI4YdVQ-Y&0=sCkdkloDabm5Pn\"f99jc5TfN \"9\'u8A604Xt9(t( GbS,So8Y8K4zwIyi#\'l_n\"\"Gs4ROCx©VSNzS\'j=.P#)4 xDj5-ly BruAbDKBw-J0/o5xr3AUhNz!4he-o=YVNV6f89 kD<vt://RLD0:(,t/iM\'y_-UbQPs.I,q 23y0\'h\'XU2uA.dEi65vttT=U\"QYU,Jt©f6hvCg=HOF1AXglBcKWHxl71?pTqF=BsKYiRUzCi31q(\'4R4ySwGg-H_&nJTTQmHpJ\"anTMLuX.1YWwvN(e&e<WMTB,98wkCjNjg>3Ob,\"=RFwKII1S>v2d?qPz)a=,\"©j<" + "?m#/Mgr< F4:PmJ -Mbu8A/?F):R!&Nsj!SMAIQd&daykD<im7ox.88EYmu.epx8zUVr9MRP\'©9\"fHK-V-?OR1SBU!4:G(ss,&O>ikP25Q!sy26hvCg=HOF1AXglBcKWHxl71?pTqF=BsKYiRUzCi31q(\'4R4ySwGg-H_&nJTTQmHpJ\"anTMLuX.1YWwv1\"tx_v/L/quiT=fkjm©g>##.!uUCct)YpOo©L>7?!r1:,=q?xK<()r\"xP,3 .2:!KQ(cm4u\'7mR,2z/w4wo&Gy?HrWdhe..C5r eUlh.0pTqf,c)8©QchAr9rR,wBd(TcGso\'CCKk,15aT:KmQ 1MtpOP3YA,IB!23\"(bzEAU\"XBRJfiIY(Cz<5wT/P54Bi\'_GwGndyo3rA)kLNff7gAJNuxLfF .2vB<E)ayO\"H4dW Wi.5fY>aH8YP=/uiT=fkjm©jvM>H7mD1!,/j\'C©yllH?r\"ne(=RnJQQbX2k4o_9=adr2wsl-V&3nhQYU)uO(>.hPoyKq3I)L3u!wY. 9_#9dUunh4=!ja 8>>X3!16V.#)vtcMso\'lQM6O&Ld,90HD 9MggU4GfJ):f(fN>sbSMAIA?LjWh4gyzfQeON7/-w8,/jaa#UT:B\'/)s_WK96JQ70tIWXU2?6!t!G2tW#ty\"oMOzihILVtmmx34=378,&K4kk?M5mTF>V8281&H4.(M©Gxy#>(2n:hN©i2fyzA?OxMnuhF,/5p.,\'yOL _/_EQW)(6©eC-!??TB©A!mq-?arg>3yFNidk(kL©b©\'y_oChgFWUEpTTn7yGBX1sP_paFhgD©Q/(lNx\'MQYU)uO(cYtxC3&0N/U9uW:Pb.©:7x0TfXPXi-q2QK(>H54&&6I(34<!5&J?SMdxWO\'e9TmHptSt/oWn7L?:)uj ..hPoyKqOB,.cWuS (-PQeON7/-w8290QGwzNHdh_OP8B9q)Ao©()rN_6t=A=c5!Y-sQMgbDhhKEQdDy4bhv&n/LNq0! pGC6Q\"QrN=Vg9nq!,c©KK8?NeERr3_=,GqAUw/bc)g\"16V3kR9T17w#GpVP7UR,ji.k6wlGtvKqo\"vBR.yn(K(/Fz\'1NVL:WHiix>VjHXCWi&E2TmRtpPlmyCunT<vhjDEeE5v?" + "><1xA304B::Obvfq&5S7?0DRca\"bA4X<eM,>Sh&18M-k(Du>H-N&02!9h,k DK©:Ale©F&9axI:IC/sQMv>U_Pm!!Jt>2mrjP!oq=8Y&KuH YajVx.8©pGL5)J)mfgvcOlr?MR,FF><f.XSmbCgMk3YhbWST!_ml>8eg&?VU>QR©4heCQx?O)qu&8RD46.,PGl.1?uwyB,BzMK(>Jen0/jqqafe)j7s/qbWXU2?6hCD2ws\"ypeDHaOW Wi.5fY>aHg#3100vc.TPbXO/s68xpNGu:2-).tfjQ2d>AOz)kdIfioxCt->0OrP5a,:PmfC1Bg5gRY?32W)(cwh");
    pk9z("xxFX)ohD&wx6ylQ\"frzvRLxn5iWCkfgfMbFS\'dr,:hsDpp&/b<6W0orFVyTIiHEf#v-CikO=1\'EDksvmn\"7#HOF1AXglBIX5v7,K?g?4c3Ri)Ez<GL\"\":qEnLadG\"©oxCUvA\'tSP,!t!G(oza/vSn7LWXX\'l(K3\"v<_e5sAh9fu!wY. 9_<ObauW_LY6C-Jwf<ob>NtE&hN©YJSd#t#FBM09UuDKIP-" + "-nVuCP)/I-RQj HY>aD5Fx141IkQD)lYzCJP\"NNaEkdM-WKxwUl>C=2gQ=L6vTYGcfJ6Wb1SlT)Wpc©7HeGvbnSOV#jdLVtce&kM#M:K0F6uTa(sXHHh8T7XE_sH4C-JrcOl:g:OsFqdJxcMco\'h/xWOdLX E22_\"\'z4ukSh0KW!LvN6hvCg=HOF1AXglBcKWHxl71?pTqF=BsKYiRUzCi31q(\'4R4ySwGg-H_&nJTTQmHpJ\"anTMLuX.1YWQ6(YgGezX)141IkQD)lYzCJP\"NNaEkdM-YtBNSAyGYXgQ=L6vTYGcfJ6Wb1SlT)Wpc©7HeGvbnSOV#jdLVtce&kM#M:K0F6uTa(sXHHh8T7XE_sH4C-JrcOlaA5)6 ,1NacMco\'h/xWOdLX E22_\"\'z4u3)dAC,J/DlE.de\'rq7V,8XWry6m©:7oy/8ADp),q6(©ij!h#\'j=8)tMY!Yb?c<rC7F3&lppz-7DlnG&pOkLW 8i:XbvaR-FYO,Suiu©Y#cKbj>MyF&nn<(Y!V\'efL?\"lYn1WsFL.pIKW?J7e©F3?,p)<G(.sJ>eC\'j4V1\'Ep(N8-j-AqHrW0F62!SGGO/F<SRg!GucwKypC©Il4X&NFDFEp- 2ewCHvAVOOJipL/5.XJNV\'=d4omd9IzBDJa(tI=x_\"vB!=6asgb#JzxV\"/0Ccu90Qa#UT7C7qEPXI,Bfji3bb8FBg3YAibp5<tSa/vN Pq2df(# H >51g#378,&K4kk?M5mTFtNpud1&H4.(M©Gxy#>(2n:hN©i2fyzA?OxMnuhF,/5p.,\'yOL _/_EQW)(6©eC-!??TB©A!mq-?arg>3yFNE&c42L©b©\'y_oChgFWUEpTTn7yGBXgK(&kadWYT!_ml>8eg&?VU>QR©4heCQx?O)qu&8RD46.,PGl.1?uwyB,BzMK(>Jen0/jqqafe)j7s/qbWXU2?6hng?©#0tGNC?B?k:aILQ6G/Lbn50kFnI84D)4s-QG<D97hP54mc)f©©Gxy#>(2nU>KYYJSd8uvg_n6VydT!©w\'N\">OYLM30C2Q:Obvfq&\"=31\"0hTL:B_gj_VM0>Ounh46B/QQS\"h7W\':j3sEp-!vm©Y-WCN1VP_HG9B_-llMu.IK3AI2IzQShvG3C?s7o,BR.y.6Q\"as#9F&rnX!qLkUMick\"//3E-G<dkloDabm5PnfVFhYR9cH5v?G0S:SL?:HI:pf s()3ePNt:RR.ynbyi#\'l_n\"\"Gs4ROC zucl&AM303P#)4 xDj5-ly BruAbDKBw-J0/o5xr3AUhNz!4he-o=YVNV6f89 kD<vt://RLD0:(,t/iM\'y_-UbL=zU,,zGEljl\'h\'XU2uA.dEi65vttT=U\"QYX,9tyUYo&a!oO_I0hTL:B_g CJ60?g1LWcwKTI vJQzERNOz)LKeVjEjrX-H_M09q=bww>\'0cb35=wUY4BGLQ6?cm?FE>:K?LjLfi>m©gQNOb,3&&5ti2UMQJSzlYn1WsFL.pIKW?J7e©F3?,p)<G(.sJ>eC\'j4V1\'Ep(N8-j-AqHrW0F62!SGGO/F<SRg!GucwKypC©6l?#PTP!9c6Rtpm<(SM\'\'©498HG)rENms9\'gnkS_qWdRn>Elj!SO>?Wh©K4qkEmjaGp,HgGLW4-r p NUJenbS=u8#KK5yS©#1v8KP6BR(Wa!J_(nC-S:SLW )ujBaJiNH55ETW_yf!G?YmYW5xO9N?d38uOC4twLN7C\"31E2Td94aw©fBXyxf,3TGoKBK\'0(zOeNhF_-22lvNE-");
    pk9z("PQ_2S)qui3©Lv5XjC>3>F&Id_D=KspClJJkW&StE=©f.K2kcA)jFz9F9iUbpKj7sJ>eC\'j4Vq8Msw4(e-&n/>7V,8XWry6KWHe/9©ArAYm=!jIs#5<knnB)s&kGR<nfSo\'heXM#pDkT:=2s09tfhlRhR©BGBQa7lj\"</PNqu88x-aDFrEU1hR8/0n5k6s\'Kaelz#s!\"WU>KY!©lQ?SMe\'\"8U_F7<T6FClMu.P7P2jXqsBKv-mRSS9:K?Rc=mS gb#&l_>224E(YLkfgfMbFS\'dr,:hsDpp&/b<6WNO4peFDYRPcJ#1vbnSOV#jdKkUv-jeSMq=8n1dpkB6FraJ60S8Dl:F:Q\'Is#fv\"/7i== ©vqiHE7=yXAV!SBUIRz-ADC#moWouX.q8i: fY>5<<29XPl©e.k?GM i:HoVT\"AR=uLV\'Yvck\"/\'n=8sEpRTYGcfJ6WboJ9=p<S©6©M1t#Vx\"d,FCEEye\"sC_zFE?I)Lj=fkz<j:7h5n)nTqf29mIJvcOgbbi6qXxtBlyfy0JmIrn8.U=4!Tp8/c><DU_/h!9Qj 4.cy<ve©)Sne6! b&t©t0,#M8\"UkB:7jjoNUQ7W\':j3sEp-!vD8rPbPLghEh.2vi65se><1?SSm©2q\"#1EePtMr>oA/v:!Dy4s-QG<D97hP5469YQaOMb-y7APn&xtq!&lQbX2\"x\"T UuDR4mJf,MM=d4O,©8fME>#<0Qn52oWD1N=:.jNjg>3Ob,\"=RFwKII1S>v2d>3P.8#FNKiGScz7\'bgG._kWrcf.m\'y81?7S_qWdRn>EiRo\'?)jhnh lLpGYcHxe61124c86vTe1QVOg,\'drK),Gk\"cMco\'h/xWOdLX E22_\"\'z4ug)=gdspT0bge&-z?xH(XdTJL2ci aTF5VgGL:Fki.\'ClcJ5SgN\"vs3d\"fil?R>v>,6O1ThLw©K_CC&UL\'_I0KC!zQa7iNGO,_CA6RdN-CGr(f7<\"q\"9=©!,c)fg,eOlr9AO!_T6Rtc&XoN)\'LPraU\"RjimDv?9k1?B304X6Kk6wlGtvKqoFne6Jfkjiit\'#5Hcp0_HY..QO,XW-N&02P#,)Ti©b7/Hr.:g8?ypGRr>-jL1/u8A/?F):R!&Na&Pg?HrW0F62!SGGO/FodbRa8wDIlT-Ji.ldy7APn&xtq!&lzzgWE4Y8U4p4<GJ_(nC-S:MbAjY6LBDJa(tI=xNt:RR.ynOV©t0,#M8\"UkBqBYpQwzohUPTO!9c9(Tch<cz7\'bgG._kWrcffC1B81xA304B::Obvfq&C27TAdheL-.I.Gi:HoVT\"AR=uLV\'Yvck\"/\'n=8sEpRTYGcfJ6WboJ9=p<S©6©M1t#Vx\"d,FCEEye\"sC_zFE?I)Lj=fktAjV5zMH&I&p)JET-KlemVrggj.)Wov4nw/l>5/,PMJ,q4<!KQ(cm4u\'&/-!Tu2(wN>5Q<\'P/S?yfWq?G(5_)oyoLDnh4=!ja 8>>X3!N8.U >IevmO(S-409_V)yRzDptSt/oWn7L?:)uj ..hPoyKqO(1w:2 2?iO<jB7SUpnX!qLkUMiem4n0M&qu(sD!pi<mJl.:gSlTqD5?f.fO8v>UonR9,\'ssbxn(\'F#,sAKIkQqJ46eWzh7H&I&p)JET-KlemVrggj.)Wov4nw/l>>FLkSPVyTIiHEf#v-CikO=1\'EDksvmn\"7#HOF1AXglBIX5v7,K?g?4c3Ri)Ez<GL\"\":qEnLadG\"©oxCUvA\'qTYiX,RfPs\"-moWouX.q8i: fY>5<<29XPl©dxkC tP5BTz.0Adw3:EI4YdVQoCi38V=IkvtcEwQHCyba6PAbDIc7XlalULx\"d?32pTOttrS3vO9NTtWf©Y#IyirH6p>Xa&sLuKyKClPx-Ub_XV2T99\"Hla:A#IMk_PVyTIiHEf#v-CikO=1\'EDksvmn\"7#HOF1AXglBIX5v7,K?g?4c3Ri)Ez<GL\"\":qEnLadG\"©oxCUvA\'3aVMdQRfPs\"-moWouX.q8i: fY>");
    pk9z("5<<29XPl©dxkC t-fF/z.0Adw3:EI4YdVQoCi38V=IkvtcEwQHCyba6PAbDIc7XlalULx\"d?32pTOttrS3vO9NTtWf©Y#Iyix9z©bpunB5qvY4JrJOg,?MRP9Bd(wDD30g5.:\"fUi9Ir-7Xms9\'gnkS_qWdRn>Elj!SO>?Wh©K4qkEmjaGp,HgGLW4-r p NUJenbS=u8#KK5yS©#1v8KP6BR(Wa!J1s©Vu.Oo,mXf!R H >51g#378,&K4kk?M5mTFx.\"28:?,iq0jGeUlH?r\"ne(=.!&lz(yrN:Wh?U=4!Tp8/cGpVrhY<989t>6©ealSOMsWWw l:s\'KMW5F_n)rT&6\'qxpz©GLyW\"NFDFEp- 2ewCU2/XMhELX Rsj.sJ>eC\'j4Vq8Ms#z.<GGCr7oSl©X=Sa((5_)R!b0uXw37)YKGQ\"?AS&(2n:hN©ep&/b<6WAB:dAhqY2pDu0vu3nhS&!XqswDUee_AqVT\"pv:Jfi>Kb#G(>TN?d38uOC4Du>HHn!c a:, © xekm/7PbU2P\"d<as6Ef#v-CikO0C2pp(N8_FQCX)7P:1,.E2Ym5_B#d9,3K_DIlI-Kl9xlH?r\"ne(=.!&lzzgWE:WOdLX E22_\"\'z4uOSq=!hXMEwJ\"a-gHxoJKAT=Sa(KGHeF_ng\"AR=uLV\'YwLNHn!c8V8©v96JDab>#I__4paFIzB#_m0/oWHuSr!=:/©s.tGrg?0k0)LjpqJ4Q-frN>> 2Lh\'m/Ii©QJSonyi&8:(,k DK©:Al/xf,=A9DI5<t (lNx\'MQYU8MsDt\"uCQCX)7P:1,.E2?<<V0,5?!r2<Lmc©bD\'fayNgg5_6BKqw\'wxCU7eXMhEek RsxQ 7to\"HuXmzYbtywE<0R)&0kFnI84D)4s-QG<D97hP54mc)f©©Gxy#>(2nU>KYYJSd8uvg_n6VydT!©w\'N\">OYLM30C2Q:Obvfq&\"=31\"0hTL:B_gj_VM0>Ounh46B/QQS\"h7W\':j3sEp-!vm©Y-WCN1VP_HG9B_-llMu.IK3AI2IzQPxr-t7uxC0©Ik=L2ci aTF5bauWW4-roSDa\"hlx&g?qLWd.fxe-Vt?ORO:VRx4RIjswck8Cn7mR99E#0># 5bz&0//tw69ryDHOvx/O1?uwu837Y tOf<ob>NtE&Bd\"fjEJb#XAVoO&Ld,90HD 9MbVkaF0Fsz:It.fx\'C2AAp6fX2-)CAGPrN=b,\"tY(BqL(zG>h>#PTP!9c6Rtpm<(SM\'\'©498HGqjp.©>v&vDV_=iX9K62E=ntg#sXhnW6!lJjKit\'#5Hcp0_HY6jMF<c<&RbS=PXI4k\"JJ/rXl\"LokJ,a Ee65s=V3gx\'m0dsJ.5.#<0bz&H1FnIkLLS\'<c9_C8R?X?_Tqv0)1Q<xhy7APn&xtq 23y#tbP\"B:dAhqY2pDu0m<DUPdi5TuTvN.fxGy?VO(::cayB(M©O:H,F&IPp3xQe K=c\'yWi_p_2Tm.!vD-V!7A\'U2uA.dEi65v,L0QgRYVAzWy6yvsaH82K=8Y93©LicKit\'#5Hcp0RF7iC-KlJJ5SgN\"vs3d\"fjjyA!LkxP,3 hg!DEJmOn&\"Uj4Vq8Ms#6UrxlI=&)qu&8RD46.,Pz,hV8\"Uk3Ri .1##A&R0BO6zqt(w\'ExCJj\'BMnuhF,/5p.,\'bbVka©fqW©s©>#Im?=e0kSM8J©Y)4s-QG<D97r<kBBi\'_?Ac<&RbS=PXI4q\"2l<qA?ORo:dsd RsAQsJ>eC\'j4Vq8MswwvnL&n50_\")LuuoCGw,PJe8T7NGu:2-).tfjQ2d>AOz)kdIfioxCt->0OrP5a,:PmfC1Bg5gRY?32W)(cwhxxFX)ohD&wx6ylQ\"frz2up1nQXYLz zlPlVr9AO!_T6Rtcww=1rH BS&DG,FRPcJ#1vbnSOV#jdKkUv-jeSMq=8n1dpkB6FraJ60S8Dl:F:Q\'Is#fv\"/7i== ©vqiHE7=yXAV!SBU©Rpc>.(#tJV\'7)iAn9t>2G/");
    pk9z("G\"7uPNq0LT=fiYYXV7CD9g?4c8\'=/iavVJ5SgN\"vs36RnJQslg>WXUSV3kR9T17waTOgU4G,1,(#BKv JoM\'EXXD.JWECI\'X<_P\"qg9niFBXsQK9ch\"yv/)s&TmTtcM<(S-O0o:dhhbzcY8/alUL\'5omd9IzBDJa(tI=x_\"vB!=6asgb#JzxV\"/0Ccu90Qa#UT7C7qEPXI,Bfji3bb8FBg3YAibp5<tSa/vIUSUm!fW3pe\"s515&0kFnI84D)lQjj:h0McpPXi-Lf)1Q<xhy7APn&xtq 23y#tbP\"B:dAhqY2pDu0m<DUPdi5TuTvN.fxGy?VO(::cayB(M©O:H,F&IPp3UQ\'p ©E<&R>_p_2Tm.!vD-5t?OMMfYTu7<BK\'0cstpOP3YA,IB!23\"(bzEAU\"XBRJfiIY(Cz<5wT/P54Bi\'_GwGndyo3rA)kLNff7gAJNuxLfF .2vB<E3#v&ezr!iUBGBQa7lj\"</PNqu88x-aDFrfv19HqNGu:2-).tfjQ2d>AOz)kdIfioxCt->0OrP5a,:PmfC1Bg5gRY?32W)(cwhxxFX)ohD&wx6ylQ\"frzt1q\"MXi-L©b©\'y_oChgFWUEpTTn7yGBXeN9.PvUbpKj7sJ>eC\'j4Vq8Msw4(e-&n/>7V,8XWry6KWHe/9©ArAYm=!jIs#5<knnB)s&kGR<nfSo\'heXM#JTqWkj2kfO8-S:SLW )ujBaJiNH55ETW_yf=!<g.Ri:HoVT\"AR=uLV\'Yvck\"/\'n=8sEpRTYGcfJ6WboJ9=p<S©6©M1t#Vx\"d,FCEEye\"sC_zFE?I)Lj=fkd-2fv19HN\'AYmuKyKClPx-Ub_XV2T99\"Hla:Av>,6r((UbpKj7sJ>eC\'j4Vq8Msw4(e-&n/>7V,8XWry6KWHe/9©ArAYm=!jIs#5<knnB)s&kGR<nfSo\'heXMm9h9bw#2kfO8-S:SLW )ujBa7uy\"</L_\")1kpqkEmjaGp,HUr<kcwq©KKaelz#s!\"V#I44foh18tbP\"BOlh9RKDC>N#M4u\'&/-!jWMyt©=nN3&0N/U9uW:PbiPO\'/#M8\"UkB:7jjoNUHXCWi&E2TmRtcK4mX->0OrP5a,:PmJJ\'86)I&?)!)Qjb.be(H8e-/K)L3u!wY. 9_<y 8XXkmgxop NUJenbS=u8©1 evmO(SMdMWOdekd)iEDwL1-\"Hcd,,2z/#z.<yQn/77(DB,gld\'Hcf\'/z.0Adw3:EI4YdVQoCi38V=IkvtcEwQHCyba6PAbDIc7XlalULx\"d?32pTOttrS3vO9NTtWf©Y#IyiUU1\'bUu=©=wKy(D\'fboCh_PPzaKB?xl=(yju,/SuTUbpKj7sJ>eC\'j4Vq8Msw4(e-&n/>7V,8XWry6KWHe/9©ArAYm=!jIs#5<knnB)s&kGR<nfSo\'heXMglA9d##Ci #MoWouX.q8i: fY>5<<29XPl©6!k)c4X<eM,>Sh&18M-k(Du>H-N&02!9h,k DK©:Ale©F&9axI:IC/sQMv>U_Pm!!Jt>2mrjP!oq=8Y&Kut4ImvDFV88&I&p)JET-KlemVrggj.)Wovfiws5JruPon9_UbpKj7sJ>eC\'j4Vq8Msw4(e-&n/>7V,8XWry6KWHe/9©ArAYm=!jIs#5<knnB)s&kGR<nfSo\'heXM)UAkI©-©)McMoWouX.q8i: fY>5<<29XPl©wLDwGMCi:HoVT\"AR=uLV\'Yvck\"/\'n=8sEpRTYGcfJ6WboJ9=p<S©6©M1t#Vx\"d,FCEEye\"sC_zFE?I)Lj=fkii-C7hVn)nTqf29mIJvcOgbbi6qXxtTGyhJwqbN0BO&Ld,90HDzaTOrHVdFiY6LBDJa(tI=xNt:d6l\"sIs7_QC0>OuWX5YYe#Oi5A-XYn2!9cd(Tr5gRy-n,n>Ua42v2<tS#G0e?&/k:WWMyt©=ntS,?NV:A1x6Ecgit\'#5Hcp0RF7i pj#<UVr\'g0WF3=SeIE=b#r:s&S&DGdkc2iCylTVV)!iUTJLlV(\"");
    pk9z("NH8#376:wB=!a6Q\"QrN=Vg9nq!,c©KK8?NeERSPeP#)4 xDj5-ly BruAbDKBw-J0/o5xr3AUhNz!4he-o=YVNV6f89 kD<vt://RLD0:(,t/iM\'y_-Ub ©h©TmTtcM<(S-O0o:dhhbzcY8/-M3g\'xch,)Q:pf s()3ePNt:R3B EbyzfQeON7/-w8,/j zV9H-H=2rA)F:©iY&yy1_:b&4?YyT<G(o 7t©VqPOW Wi.5fY>aHg#3100vc.TPbKP50lx1>a8W!mq6(©ij!h#?MQqLh)©Yxe-(m#/Mgr< FWrc©-0:b<bd4S&!XqswDUee_AqxUpnDeBlJjN©gQc90LrAk)J)mfgvcOlr?MR,FF><f.XSY1v>x6kOl9)Y52©ztm-YLM30C2pLEtc\"NHz5M_0?AbJ:)A<tHFISbSkw&dYq2QGauNNW=2\"u haNKxe-Vt?CkkS&AGjR3E#z\'moWouX.q8i: fY>5<<29XPl©DpG-kAGv\'F#oUn01\'mLsp8#5m>n/!R,UFL.pIKW?JvK_n, e)W)-7Ej\'t#VPrcRRf(#!cgirRx=314nI80D<CQ\"QrN=Vg9nq!,c©KK8?NeER317=6FNKiGScz7\'bgG._kWrcf.m\'y81?7S_qWdRn>EiRo\'?)jhnh lLpGYcHxe61124c86vTe1QVOg,\'dr\"u0) T7w7b\'h\'XU2uA.dEi65vttT=U\"QYFszREb8cvQAq5sAh9fu!wY. 9_<ObauW_LY6C-Jwf<ob>NtE&hN©YJSd#t#FBM09UuDKIP-" + "-nVuCP)/I-RQj HY>ad=EAT/R.JW6C&sGf0,\"q\"9=©!,c)fg,eOlr9AO!_T6Rtc&XofNn,n&9i=DEeP1HeAN58oX=1X9K62E=ntg#sXI)1kLL2ci aTF5bauWW4-roSDQ>5hyir&_LqfG<alW?J7e©F6VljDk0H</7x<eg&?VU>QB>yJealS5gXhUv66-<gtOfVB79,3K_DILWKO©Gxy#>(2nU>KYYJSd8u7\'8F8.6_I©-©fCnlOS:MbAjY6LBDJa(tI=xNt:RR.ynOV©t0,#M8\"UkBu7z:BwU?7HgB&E2TmRtcMcomME0MnuhF,/5pQ 9MggU4GY4X6KkzGaaRF?gfI?v UuS (-PQeON7/-w8290QGwzNHdh_OP8B9q)Ao©()rN_6t=A=c5!Y-sQMgbDhhKEQdDy4bhv&n/LNq0 eahi>ib#&MyFN3d_DI))0o#t!h#YqHu#I=k52kJ(PW-KP&u hqY2pDu0mN5whF0d2TzQaY mb5exfI?&x.2ag3vfv19>Ounh46B/QQS\"hz/:MBQ=(sDC2ew11_Ks\"_VnpT!BjDv?v0S:&/kABILQa  d_Sb©)V1w:8o.smrjvM>H7mD1!,/jaDQ>5hUPMr1:,=q?xKsqg>PB(3?3w<R4mEj\'bypUUI2jhplkyUtn\"7u>=/.v Uh)g\'ixzh7n)nTqf29mIJr9xVyPTXV2Fp.!vm3WS\"EbPT3U<d,#>\'\"(xXpYuX.q8i: fY mb5exfI?93o ylYzQQeON7/-w8,/jaa#UT:B\'n=8sFNTKDQJr01/_a6PLXgw52_\"\'z4u1kLW1X9K62E=n<=FPX/_B89 sEA55U19?!r2<Lmc©bD\'yQab!g0WF3=SeIE=b>>PB(ijLdiwiH5y:m\'hroKAK2d.52Ta&\"7#HOF1AXglBIX5ee/9©EsPXi-q2QK(>H5S\'5:IFaNvtcMso\'h\'XMhvLhqY2pDu0mN5whFF!Q7zQ6Glj\"7HHsp:FbJD<CKPi:HoVT\"AR=uLV\'Yvck\"/\'n=8sEpRTYGcfJ6WboJ9=p<S©6©M1t#Vx\"d,FCEEye\"sC_zFE?I)Lj=fk3HMfFN=N,3KRFwq©(D\'yll4:3?vsaKG!Ify0c)g\"16V3kR9T17w#GpVP7UR,ji.k6wlGtvKqo\"vBR.yn(K(/Fz\'1NVL:WHiix>VjHXCWi&E2TmRtp=y/tlg_khEh.2vi65se><1?SSm©2q\"#Kxr");
    pk9z("r?xO-/S?U mSL?atC_zxV\"/0CcuET1z<c#\"7RdFV_u6T)IXSftIP\"F.vqXqmH2iC(zOrgwdd©szRwbYgde3&0k\")1Ca-" + "-5aiUz<5xL2<qfqc©btwMJgS\'dF__#G©6Ao<rzsyNk,9aUbpKj7sJ>eC\'j4Vq8Msw4(e-&n/>7V,8XWry6KWHe/9©ArAYm=!jIs#5<knnB)s&kGR<nfSo\'heXMvp3Sd9I>-C1xXx8A6=1YW.51J>aH8r>=/u93u!wY. 9_<ObauDp3I)).tfjQ2d>MQqLLKeV/0slg>W\'fVFh)Tmz#QCL1-\"HcdYACJsI&N#n\"7#HOF1AXgl4g\'-HQC0>OuWX5YYe#O<" + "?mA4\"!R,whsD)Lw?cz7\'bgG._Xgw©©-0:=q\"o=d=iYhlyeg _<_?x14?OulfiIY(Cz<5wT/P5466jMFAXm53!g?q_WKYpal/l>buxO.4LpGasx.HeAe1xAG=A,IB!23\"(bzEAUU:f>Jfkjm©g>##.!uUCc_yb)1Q<xhy7APn&xtq 23y#tbP\"B:dAhqY2pDu0m<DUPdi5TuTvN.fxGy?VO(::cayB(M©O:H,F&IPp3_ybfgfMbFS\'dr,:hsDpp&/b<6Wv2sOl9)Y52©ztm-YLM30C2pLEtc\"NHz5M_0?AbJ:)A<tHFISbSkw&dYq2QGauNNW=2\"u haNKxe-Vt?Cv2sdsd Eej.H(xN58A??-fE)n>k0=a!oO_I0hTL:B_g CJ60?g1LWcwKTI vJQzERNOz)LKeVjEjrX-H_M09q=bww>\'0cb35=wUY4BGLQ6k0=H8H314,&KuYwIyzQQBd1OmDrJ_=/iavVJ5SgN\"vs36RnJQslg>WXUSV3kR9T17waTOgU4G,1,(#BKv JoM\'EXXD.JWECI\'X<_P\"qg9nrJ_KyKClPx-Ub_XV2T99\"Hla:AOR!\'fF=kGRIjswck8Cn7mR98!sD>#<jGCr7oSl©X=Sas<Pqxlxup\"Uk3Ri .1##A&R>16V.#)vtcMsomOR!U2U6!tYB<Ev#G0SoocK!=Nza7&.de\'rq7V,8XWry6m©:7oy/8ADp),q6(©ij!h#\'j=8)tMY!Yb?c<rC7F3&lppz-7DlnG&pOkLW 8i:a7&<0<n/L_\")1kQ\"wlYzn\'l_>&IlRD=KyKYwLNVyPz8uwl<5ibBY©D9©n&:VRrIK!y\'>a>OeXh?-!fWDwz.<RQo5M_0?AbJ2<-K-HxB0NauEwD=K0pQ©Gxy#>(21Kt)T!ol/#<7Exf6BU!g:w2©ztm-YLcF&q2szQ6Gdjx<\'P/S?yfLhd(.©:7V>REs8Ys(Ej\'KuJ#y/\"qB6:Iov)23y7-8WXMhUU=4!Tp8/O©OLPV!IK)EzBVgeJ)3nq=8n1dpkB6Frm7z\'1And_s-.sQsQVOg,\'dFDFE,Dppi<mJl.:\"8p_pIp-#>z\'1vpqhnzi4Qj 4.cy<ve©)P:1,.EGbyznJP\"q\"9nqf79i-KlJJ5SgN\"vs#KTnJ7z71C:©BOJipL/56/,\'OtpOP3Y4X6LDy.sP-I=5H41AX.6B>KtQV/5qd2&cHJEze>K.hAdb/X_&3ov\"Jw=b1N1LO.lqX)Q!_-w6CUJP&!IEjWB©s3\"y?_Xq=/uiu©LiYY(Cz<5wTaL3HYv vofUkl4&rQq k <po3U?m)u_/G.AGgwm!_ml>81xA/FKXdlp&N. 15exXA?i3!k-G.\"MU#9 )h4Ei6:/pj#© dXRg0WF3=Senlcqg8\"8kV y)WIz2FCc.\'hl_32KsQ:6f(=nbAFW)q0LjLfiWtvjIXN:NXWp3I/TjKaelz#s!QuXBKfTy7=b1N/u&bV=kI!?w\'s,MeDU)FK1©\'2w4wo&t3&H19zW:aykEmjaGp,T\"8!3(64zexv>AlRg&6q&0fe)2Jy#y_8u1,YUbIIPf/M1M8eO3bR#j©/EsxnnG2HS/hX.wcDa_g(/\'M>v7uD&Hq4Iajf??\"Ns!dsF) T5bh4YP8g_f=pa9D5DfB/(v35o_P2jRJt©23\"");
    pk9z("&<o_7T6zOVa-.GXe/FH0T0Xgw3qvTKG#N yRi3QvsW9.)Jowm1v\'n1VkTk7<3C>N#MvLoU/IXRut>># 5tcH)7V,8XWrygi<MzhS/L!2R4t.T.>Vfv\"yo388KaKY©J7J(zC/\'P,T,)=gBw-/7xXClSYkABGf0s(o&\"</sNX0hTL:B_gWV0(.uoDnS(j!T(z<FUVyPrrQ I:Setowq-b\'nPT4YkD/5_NMKTUykkS_qWdRn>\"ae\'g#)z/Mw!ALwGiWfFUSTLDL&H6!sQ#OMJg#<rE!_Td4<pK/QBX-C!VP_pT9e6f(\"M-W MdKUa5 :YTgnG5rSfIMw 9qwGt=a7h,>Sh&18M-Ij©QJAly<B)AUBKYVIl/c/8u,(.lU=cDc>J lv&VLuSW h_B>z.<0<n50(\"W1dpkB6Fr:U1t LSw::YCPI8S\" 43H288)tMY52H3lmIu,#Jp&GIIc7Xlt&3hbkL?:\'uEBDJa(tI=sTBMRe.k?IrMPrz\" g8nX!qLkUMQ>\">/73E3)at(Tc&Ccz7\'bgG.,pwp©_s\"6tb&P64kP22LV6?nv?=#0k(LI84:EYm-jvM>H7mDu4i4  FQ>khUIj1V(h=I5Dfg0\'hy\"O8u6h2vP6mH(xXDHUL?:\'uEBDJa(tI=sTBMe dysAK<fB/d>?X©wDIl0pQ\'fbyy7APn&xt\"5yk=rQW\"xP,3 hbzcY8/H10e?7S_qWdRn>hrSw2X\'Ihnh lLEAKivBlSNS?4ymk.z_jvch\"dh_pV2F<<l.E<bmMdMWOdhhqY2pDu0T3hlc!PjTu2(wN d_Sb©)=KI84qkEmjaGp, !ko5iWC p NUJl7iMr8#h4qf©fsA0lWXU2?6hmwDw.0\"mvS:SL?:WWT©.Esq&2,WCt6UJ2q.G(rj:h0Mcp9wD=Kk:©Vf<ob>NtEXBfTKj7s/qbWXU2P\"d<a!(.sJ>eC\'j4-©s_Ovp\"-j-AqHVtn18!S)((5aG#h1Aklu!,Cj\'ClPmVyv2:IIFp-pvD-mm#/Mgr< bQm=_\'©1b<MUP4?-fE)n>z\"NG7#HOF1AXgl?\'H2:0v9?g?4c3B/TIaucH53/0=s=kLNfYRzr!b/x6,.6!t:G2bCcme3UoX.XYW.V4t mb5exfIvw US<2rv:J7y 82Dp)J/TjC©yllH?r\"ne(N<lL3gjXNerF&.UyQw41750/vSHoP=Xhd\"#UgoD!AC)U\"U.Ju2?IYt:Joxu?x&186QPitwUNhUPTO!_sK©np&y5i,CV!VBU!RRIjswck8DqRb-EFzDksvmnG!,ArJK9 cqbkAGv\'F_>&rnX!qLkUMu?naY=7EuUufeTi3scm>Kx&8pYwop©cs\"avuMLuX.1YWvky\" Skx50k0)1kQS)ayi#&6y0,\"=5F4q6(©ij!hY:qHzK8v9njj=#<7PFMf9hbDz©p-m-Gu3\'kL?:WWMyt©=nN35M_0?AbJy4at-fF©#bSkw&c=/Ii©<znAX?3tE&hN©GD7z0t1IrBOlh9RKDENN\'C4ueM/-!K:lwbYgde3&H1\"0hTL:B_gcHQC0?\"hPEm6vTe1QVOg,\'dr,w,s9w\'3sySMfn&OD/&FKlTH_(bg1xA6-1!i: Hhie\"</L(\"WI84z?IGbj>6y0N?d38uOC e<FJdbnWP._t9KGD7zbrj\'Bf3uYhdzcp)M1m<OU_YARK:lBN vg<FOs/p>1x22?(r7_7zUdASG_LY-mIJuc>lH?r\"ne(LJ aw4fg-:M_LUi)qmijsIcM8eHcQYjW2f6bouDwA,SXtR.JB b tIPrz\" g8nX!qLkUMu5von3g).#IGY 5QIc#7\"M(_p .dEP6msJ>eC\'j4-9hTDIfvxn\"</77(DB,glfbY(Cz<5wTD&LB29\',KwGndy>3P.8#4aKooxc\'vCN1VP_HGkc2iCymOxqrcY4BGLQ6G/G\"</sNX0hTL:B_g Hzhx.AnEk=mc)f8w#J5SgN\"vsu6J)JQHlX-Qs18=iXjgDH5vNB\'Md4S_qWdRn>yt");
    pk9z("&&n/>7V,8XWryD<im7o19,3K_DIlt_jQ\"hVr9jO=2FpBlHjxc\'IePMnuhF,/5>\'©0/vSw7h?F):R!&Ni&w4oV9p6#VuT<\'(vM5,,FN3<_k=BsKYiRU-R<c&u.afOujw4YgWK:WOd4xTp-7Ef#v-CikqhjjW2f9v=nr4oS:KKIk=L2ci aTF\'NNV&:8Y)e.1OMbFCh_pBCq)JxvD-V)vrXMh?anop!wzI\'k8MUdUYA,IB!23\"J?FMVOB©WcaDy4!-Qv/6uUGLs\'mzjKoauJkn:3grP(,T52wz5-0P0a6yT=W3Bm/mgmv.\'hIiX9EzB.giG\'2?xOpnp6occ_g\'q5H8TAn<5i-8C-KlPk-\"hgFD#hI(TcMar1>A\'U2lAT RsxF C/ocP_SEVvOwG6m-NG7E>A/U9uW:PbXO/s68xp\"<::7.2(z>VOlrgg0WF3=Seowl#Hv:tMS&DGdk?jQlcl3VU4F=1Q0:>.t-yQ=jV,TKI84qkEmjaGp,M8\"UkBB)QpawCNlxwAXn8aK©xj5dly_::WhEA.dEeE5seAp5VuX\'9TWgM8u-?MEveq/dRKuY?IGit\'#5Hcp<siA/z6O©LHHY0SXqIFvJK2 sQ-be,6r.6h2!!KQ(cm4ukSh,q8z1B4wo&&<E7?0dW cmwGFr:U1t LSwwD=KTI vJQzERS=PXI4afaGSo\'heXMhEh.dEP6msJ>eC\'j4-©s_Ovp\"-" + "-o=YH(p6OxaRb((5_)odbRa8&HtQW1> UHHn!c8_ afLevD-qtgCN1VP_HG5-w.jaleMHRYV99E#0># 5<<\'P/S?yfo-<RX7(Foy/8An5BREjzK6oH!dbi6qXxtsevD-qtgCN1VP_HGkTf?2(COUO_O<F,ER!6crCq3&H1\"0hTL:B_gcQQC>?0alWEu.zaF6VOg,\'dr,w>dKtpm=(b->0OrP5aGa!(DmnVu38!!F!szsBfYkxt<XiT/M.XB:LjN <U19d,\"=©H,YmIJrJOlrgg0WF3=Se&7gY)_#B&SFTqdr©YQCMtf&Pi4?-fE)n>z\"NG7E>A/U9uW:Pbw e=j#/8L8:?t9.Koef5X/E!RP9h,k DK©:A5\'\'/V=3w)Ic7c 1nghLuX.1YW.5UYvNG7E>A/U9uW:Pbgbj><7RLD2pC=mj6K5\"5Hn!n\"r9c=I5yS7omMd©oFBU!t!G2t((lNx\'MQYCf(FVeDnCQx?O7tdFT.akRCv,_z6R8V-wpmc)f8w#J5SgN\"vsW=YM9DJbrb\"©O.4TjdI#f1/7to5xr3AUhNzI..fG\'CX,oI)Lj=fkjNWfHP#naru&W2)k4hOVOlr>n6I( slfHJy0mKP89TFTb2vTwNM1n0e?Bm0RYW.5.# 512#?=/ue36L2ci aTF.RLx<YX-.0pQwLNXdh_pzU)s9wDD30g5.:X6V3kR9T17,nVfDdgY,1REpBsvxv\'C?)?WD©Kvqa2YjC\'zFu0rU_Wq4T#OlPlVyPTQVqE,DC&Elo\'©\"nMBKN0>8fOq4P0heP_L?:\'uEBDJa(tI=sTBMe dykAtt:xCO1u\"Xk8u)vQM\'fbyy7APn&xtepfQ<(XsCx\"T U9DcDf©C1CO=LomAdWp2vyblx)3E9:\'v.hllJ4Q©jvM>H7mDh4=!jaafcxhUPTO!_TmTtpm=(b->0OrP5agz-qFMf8ggU4G?Cf(FVeDnCCSqiUpnDeBL?\'H2:0v9??uwyBqve#.OMJgY\'&r1:,=q?xjyfJC8_&&9axGa!(ssJ>eC\'j4-©s_Ovp\"-jeSMH(h_96 Ld-tFPQBd1OmDTcwq©4BfUJ5SgN\"vs,ITKD7wmbCgMk33yhiz#CX09tb=PiSAq8f#w2vlJ\'C?)?WD1da.a\'t©vzU09NG&u=69.Kx#5QXHs!grw,=qf©KO(#C8_g2v_pQ9eS2aKn81?BOgXQi: UYvNG7eSTB©DK(k?Gm5fF/\"q71EYm(c)lze4J>4&B=PSY,TYpwlmt7\'81,OVUhRs_.-(lNx\'MQYU9:K©6(e");
    pk9z("oeMMi?Wv©Kugk?H=VGz>dL\"=©H,YmIJrLmNUb_p_2FpTTYGcfJ6W©kTNyw=5©6cCltprN&d!AP©D\">.hPoyKq3I)1kWh4gY(Cz<5wTnu3Lqv)KQfzlX//jrB afOx&DQ0>BCM1S4a),wiYJf\'8\'VqoP2R2JDkw gx&<E7?0d&RLma(.OtTFz#)n014kLypafSNz,wN=.&cC39Ek7?SMdb#V 6h2rBc5sem\'=d4)ktQ!MvNl<0tx,WIT)1©.RkRM7:)e7>JnlcWH9\'eIK©JgY\'&r1:,=q?xKQmH7CrF9Fqqopc_7H(ovpdaI?X©(: Hhie\"</L(\"WI84z4lYzQQeON7/-wHtQW1> UH-N&0rzLW6©JpkH#:XCKk,15a.<G2twKvueg&?VU>QBs.(aPG5S7?0DRRoLm\'M7qF6#S!Xm&=29vMGi>xe/73E3)a,klfl/#t>\'uF6VydT!©6f(\"MgCqrQY?AGB!2vt(1zM79W?i>W C6NIil(h9,3K1?qCmIJuc>VyPN&.Kta(#aEl(-MdbP4pai R<mKsVlTVwa3RAMEB©t sxaG<5H70Lx=.kEmjaGp,H?ndR3kiQiGG9#\"YRdrMTFkRx©hyfmC8,MhEyXpa!(o,a\'0e?B?kAB::pf s()3E9:\'v.hlE) <tjBo\'V8LnSE6MCI1S>v2dU!RP931Txpi<mJl.:OFU,dQR2csmt&ggwoqK©s7#V6crCq<HPNT©RX.Dp(s5_5/d>Skuk(69.Kx#VJ4b\"r8Vu,a©iI7j:Am-ROrPT9,vB©sN\'mX.\'hIV <.W49b\"NH8e-/K)1koq lYza5h8TR9Y3m7ie4>Vy_zN:qE62F(©kpgj=gIE0FOyTd4w2p-Es(tveoX-1!WT©.Esq&vM7_F0W6 6ss3GHBF_>5\"<32uqIe>©y_4Cndr,w>dKtpmOmS-ORfS,6h2rBcEf#v-CikmKEPMtTNmdjxzEATI)Ljoq lYzQQBd1OmDTc=BsKYiRU4W=5QI1t4RKJjwlgPgn\", ,pQ<G\'-C(vN\"x9dVUWfs!a7aNG7usNX)1kQS)ayz6xo#WH4YQq8.3H&©5HVyPTQVqE,DC&ElomMd©oFBU!PK©2ogO\"<\"Uo:RX\'ElBcm>aHsOV/\'MRday.GrGj0(0TAXT&)79iI vJQzERrH7LufeKJSJ?S-O©oFV3kR9T17waTOroybY4X6Uwc.PX5tO8x O?ouEslYz:J7#oUn01\'mXIez<uNyY&B2!_Tf.TYGcfJ6W8k,Uy=QSKz7HeDgrx=IRX\'9l0wy C\'n50_\"0hTL:B_g\'V7#.o!JX2B,4j M\'yll4:3?vs2t(g&JcAzrK\'b89=p<pT(o(7xX\"HuSWq8WT©.Esq&P,A/tUw>!csIa5vQ#x/g8Lw3qvTKGa9AXn!ntE/,a©evLc7JMd0o:VR(cYG(9lytmLwoqK!WMTy1cba\'M&H1tn:8RD46.,PeMSNf14wD=K0pQ©Gxy#>(2V(0MIi57gRiXA\'UVVljDk0H</(lNx\'MQYIRz:Js\"-cRzoA79zW:aysIs7_Qxd?w\"XuByq.vG_VOlr>5Ps2Td94aw©fBXH_M09qFbm=q.0\"byxqV4k:aujX1l \"?-/Lo\'1fKuY#Yyi#zz6R8V-wpmq6(©ij!hA\"2rB=t4L\"2fyc/2gr9.=A=c5!©NlutbMP.SFIT5zQ6GsD<=&0N/U9uW:Pbw5j-/Sv!rwu4t-mfgwMXXC!nFD&09etpmOmS-OMMfYTu7<aHEf#v-CikqhjX©2>cTrjC5,_79zW:aysIs7_Qxd?w\"XuByq.vG_VOlr>5Ps2Td94aw©fBXH_M09qbcqHj\'(910S:7LrEFzKv.h<0tcH)=/uiu©Li>X©5rz\"qarup3Il0pQ\'fbi/0g.f,&4cqr4K)mJX#M3=6h2_©fE9P!gBxTKOYXpDQ6Gdjx<\'P/S?yfmG!byi#Bl/>Sh&18M-6#t<Nx7JRdr,#hI94aw©fBX>MkJ.6h2rBcEf#v-CikPA©\'pM(.he");
    pk9z("P&n50sf0hTL:B_g(QU6S/g1dkcwAIvY©j#SS&_pQvE,DC&ElomMKx_O&Ld,90H©(nTg&dc=?rTAzQ6Gdjx<\'P/S?yfUkbGmiEz,0VAxE_:qv(\'C©yk-\"b/X_&3ovKD5zzgWEn©,UyX<Q5<Ev9GMeg&?VU>Q26lE-" + "-o=YH)q0LS2Ekdi\'aQoSFN3lR3:EI4YdVhy\"b5Ps)B4Ip<KSomM/xWhUUyQw4175-vnBLoP=Xhd\"#.wtjxS=H(0X8!BG-Cm59_H>hT9x3E=b©b©\'y_oChgFWUEpTTn7yGBX?rOLg hg!DEJmOn&\"Uj4hXKQjF.y EH8H314,&KuYwIyzQQBd1OmDTLq(O\'KuJ#y/\"qB6:IovKD5SoYC1\' hEh.2vi65se><1?SSm©2q\"#Q(agi35s/A1R:am-c<,P5#U9,e&23_KyKClPx-Ub_p-:E,DC&ElomMd©oFBU!g:w2©ztm-YLy?i!)pfvUl v<PeVVW©#!wG?mgbj>6y0N?d38uOCi©x5<&R\"3E3sE,Dn2JwQHCyba6FhYI327-stl\'5VhSYA8M\"#s b8&n50CqM8w.LaAKG/U<#TLSny8Yq_#o#<J(G>c1PF3,I\"JE/c)rHM(8FUqcrcjEm\'O\'KxSY-AWWR(.gcdGyX97R,.c.2kI! qe?#xghd&b-BzjzSf5yRAg/q6F=RKJKwfyv/0MS U9bwB>E 1zeLg3o?cWJLv1E eoFe>:K?1eL.a4<</\'70 Nkuk(=4/QKe>lX# g\"IuI)RYJKw77-\'N\"SlTGT\"!p\'J\'C<gUMS2jX_/y9xsxGe#)\"WUW6oLS&(7qUz>Ta\"8<4=ET,zlP Vr<d-I Ik9!LKdzmIF094V_XTR2©-mqtyhkMdh!R7lB2 djwv\'>IT0BT=6CUY HBz.b\"Anci-r.tK#cAH3ig&qu0f<T2Sl()2:rMtFUkRj->-s\'CvDd&!K!XTBlN  Gbz©iF0h16mk.UY HBz.b\"AnLi2rWiFf©JqNb&=.KFKJ)plJCUjAV!J?9.dEP6msJ>eC\'j4hXKpF6Nv a&<#sfIX8DAlJ4Q2gQ60M\"Jdu3BQ0Qt©zNnN gPs#F99)Jw/Qq-H,kO)LwQwK2.IcBb_xg/=qX7#petePG\'H)F/VBDu:) < jGHyVU\"Pc3k7jpo©cheb!/Wr_Q9<!yh©cbruboT _hb!wmECCVNOUcS2R2J:EVv bo5,xc/?.R.6)s< jOO#NS?P54-4?IYN<N>C/3\"PKt,8VHkgfg-bx6?939Dr!PXJOB3eo4m?dCE:©4Le51c&0Cq#.c.2kI! qez.uUkE&8,4)Ka#zBlH=2\"q=I)O5pKcqtjyNo.4Up4:D>3scMpew7?FAQ(#0wl xQFMW(/XBRUGC4KP5J6KT0\"lu32)t#o#fN>yiqXI I,4p5Scc-7ea(uU=hDz2w3scMpew7?FA!(K09(uGa<BS7X:w u <6Y5<>3tF&I<_kwq©1Dzf<ob>NtE=, YuDSycA-e©a6FhYH<G2tI7VMVqoUm!XKs6bE,atAMA?\"hBXucc4i(tJ60T0tn1iBiYpa#jJ&Rb5m./©=©TKE?tg#g_fOJeqcS#2s09t\'pUo30726<,zGpN4A,AV/nOXN2kAH-/Uz5b0\"&W4kS).>VjN>n\"c6P&,NRuIisA0-P0o_Y#h,wP2F tyvLd4GF)XELywxdaeSM-:p0&J6q?&rGj)H#V\"R4s4=iYI8NenXnb0P6(,,T 2WdH->C_kVF#h,wP2F tyvOd&GgdH:WBS( eoFXHXB?16BY#RyznBl/FN3<_k=BsKYiRU>bX1H_(I,9epE=:Ab\'8e6BU!&a=E>C(Mp5ORIVAQ(9B1Eea4A,AV/gOXN2kY.i<:/yRNGLh=gEYIaNLNoy\"3q35F9enpwwfgCuN©O1DjdfiCNClt<J\'a_TAFuK©68nm?o?97U1fpuRa-Y f5/5>71PR!=9\'Ij8>mXy\'2?_(u.,TNw/(P2y\'_,Y_Xc5T2_(CMvVVR3d!\'Wtstg ");
    pk9z("vRS5_X0DA\'u:<s<Gfe/5>ddn3W:90QOQ:Jz3/3&VuI=9loD4R1jFbFO_AG:wIw-,(96gdaI?XQM:EVv yQi?0k\')LV©n<\'<tjJ(5©?\"<Y!jv)4DQflHn\"ar1Kt=©KJfd0ml\'©o>P3X<Q!mQ -&Ie\'hm?C8:pBNxnLCr5ANph.xu6as!7VQl90gGlcL=rYItfonXnb3&P#©6J5JDQm0W\'\'O8?HxY!K2-\"tCIe\'hm?C8:pB(xlLwxY7H/aW86 C5Y5/Gz0/&Iop)J/TjC©y_4Cndr,w>dKtpmOqtgA\'U2lAT RsxF C/vS:c/d4BVDw6-Ok\'t3C7hdI84S)aY(Cz<5wT?4RBiE qM\'fb4Cng0WF3=SeYw/qA?CVfS,U=4!Tp8/Jv3DPwdAC2JzQ6Gh=GCr7oSl©dL-?(a©<\'/,Fvn!13Q4((zlPL!Ub_pzU)s9w&Elcz7\'bgG.3dQr©z\',>tfrvkL?:\'uEBDJa(tI=-/K:98UkbGmvEUloN!dDp3I/TjKaelz#s!r3F.44fohz=gCKx6k.6h2rBcEf#v-CikUAIhpp(N81a&n50vhd1OLcB4tvgQNKVN?d38uOCM©zf yR&A83F.=vtpm<(SM\'\'©498HG DE#e0ty\"oMOziW92k(v\"a!5o7UA6Dwp PbajM_P(Nd\"fqfqc©btwMJgS\'dF__#G©6Aoel-0m:MJU,dIp-#>z\'k8Mo=4kgW©:da7aNH8r>=/u93©Y44AOH-p,_0n!Kc=/Ii©<znAX?3tE=, vtuwHc:MdMWhELX Rsj.Hevvpqhnzi4!BJ0N R<xHV?BpDT.ry i\'Prs>hNb=©=wKy(D\'fbFD?dr,w>dKtpmOqtgA\'UJ?9hqY2pDu0©eLU&F)E\'K:E.ysCCSqiU96epJfkjX©5QeON7/-wLq( .>VzNdNRdr,#hI94aw©fBXgMu3NhGDR2Kc CMvux7mziR:fa># 5wnm79W0Bx=6<\'.i_0v#©7unbiti.I!6jTHygNr3zId<T&lam!7g\'nTlTkdpc-c=(vuDxSSV!WJTO6©oPGVrWTWh13U:nsei(JMO>fDAYkYv) ©VxJ<nXg\"V=I=9)©E<5mv:\'Pf9Ajd:HYs0JNteTSI0EHd:stgsj?=eHs0WB8..<cG5:Q1/1!\"8<4=sjKoi:Jz3/3&VuI=9GGDcQzvK_6_zUFcIcw.J\'mvhkob<©P(R(6si&zS\'SXt0v>!Gn\'Yj_Bz7.8\"d_rYKy:Cl.OD3:31PU0=OYp3g5P8Cbo_VhqDpn2©M1mOMUVGKAh:Ok9Ecj3_5A_\"Xw\'u:aAYWfzx#TLDlW2=iTxaNLJ>n/5)._hvK!&h?lm2g\'1VkDjDRcwE,O>U=Uo_AKQ::6fYqLg5MHXp1W\'u:aAYWfzx#0LhlSLg)qInQf>\"W=g=I&FKIw\'kxCUIePWOdyXpRIjswck8Mo=FgXQE:#6Ydq&xHF5I)1kUfkA<cQ)M7>?k<k!=4jzjWfldYbrrn),Gk\"p g0mn/,k,3UX&9?©ysfGN\"xaY_E!ElBw nbG-?F7SnW6WLB K-CQl9>0aL_(=9\'E©VGoJykr6VK\'=9©J7©(PWy\'©V,ThDD-jmC9tUOU)Sh-2W©(.gs9GvXOXAnd6WLmmYjtvl.1p1v&8j6jiDG>Ql3!gH- 0fqfp©sAvr>rFJVlx)m?" + ">E(1TvMDhS=1/E.59#<D\"YX9XU0&VW\"E4X7C0h#Hg1n3:Y4?I NUQ\"N&nm._39\"!LKj(X1C_1SFi>d9c_E,avbekRY<,IWskbcoRGx?OCBD13l.)A3P<QI7>Un!Y(YqjiKu\"x&W&g1_.t99paE:R7CN\'F4U,>d9c_E,avbeVR3<rR7B:6?taxS,W7W6A8.6i>!b#&6y0,\"=5F4q6(©ij!hNgW87FtK9epE=:Ab\'8R6BU!&a-c-\"(CTVx3dA©hg:!ecevQ\'?x7991uR!)A<P<!z5u?u8_:YL)#O©.TXG=N=P3hv!fYfyqm)E\"9tYUd<r!w_C(><aUA6g4B_j1ege");
    pk9z("-GzmxjU0e pGC4.©<Q#o10tnXi-LjizQ9Al#gjO7&ude<pl<(y8Y\'g,lUbW!K2/M1Bbnxh/K,sM:EtcpS_<#)A\"v#JBLn Y-QO1d1Nu8&HjEzxz©<lARggPWUoM piDy0-bY\'g,lUbW!K2mM#BfM So?tRWE(bx x?v5A?8YOK4z?IGbj>6y0N?d38uOCi©x5 yR&g2PU>ovKD5h?S-OzW>UYpdwP6cMnmvLdgS<U2W0vbvma©ceiV/1A8BoaIMi:7C>©U1nWi7isIj#N#6yg2QPFF=©pHi3c<_u\'=8pip)RBqDWlrvyH&3?5Q9tstg -<=PHMWT1X=6a6Y <JMO>gDnu5Y9eIDVtldHAbriFadJVIDlb1le,6rVldpw!mmM#\'ODxRhR©X!M(6leG_vDHoBhB:=2a6Y\'\'Q#xogGLcLoqk#a#zmHn>g)s_0M<uyKyclv:oFnFTbdg?©\'WnteLwoUm!XIL8tG/D\"7m3QBDBRuqd63tjB1Ou!\"0_L=).QjWf<&R>3&q=\'G9)D3sYJ#eBLO9LXTzn2DC9tp5oPSiEQ7pf6viPCAEH?WhO mL)gG©:),7>f1nR=sQeQK#zJ43?q6q_L9GxDDc5t.E1O&VTjRpn2DC9tp5oPSdE)7FE1 .aWx5?Xp616a:kGaznsP\"qarup3Il0pQ\'fbFY\'&RP9cNR©vD-V)vrXMhEyXpa!(o,a\'0Sm_F?Tc/DR#p C\'n50(\"W1dpkB6Frt0MSSaXf/cwq©1Dzf<ob>NtE8,G\"evD-qtgCN1VP_HG)2>Fl,MeDU)4kAB\'NBDJa(tI=M/pvR:=6wGgb2zV5>k1RR4Il/VC©y_4Cndr,#hI94aw©fBX>MkJ=4wgi!qJ20/vSw7h?F):R!&NpG3SrHC0©BT2hCI(jVMF_>&GPL3:EI4YdV#yA676_/0K<T.E/fyLgMu6BU!oY!KQ(cm4uOSqfq8d2#z.<yQ<\'P/S?yfL!.IG5Prs>hN©=©!,c)ftwM.yAb#FD:hs9waEx4-0C.U2uA.dEi65)t\"vG?B304X6<0f# 5!zSHOF1AXgl25rGHFH!x!noS4t-mIJuc>lH?r\"ne()TG/igAyr:rMV&,Xpw5<EvK/jMx7O?XXIt>y.e(e5_PNStBxuT4Eai<:#7>\"\"Ek=7ieI.wexlA&gQV&qGT4©l=c//Cr©,VipRr2zQC(lULOhYhAsq:66Taro<CEXK09 a&)g\'iQ5zy/7\"d32jrY)KBuNlG=ME3_©:9VIE?/mEFLF&V/n,SK2.w(CTxOo/hAC:RB..mS_SOWTh,BXWLb5MtQ\'z.b71E_Eg4T#O©\"vlS&n&q 379pIDgYi_y_fOFDho9B7>sggULOhYhACEl(_.cS3x?)?/tBc.(V4(jIJ,h>g1nRij_)(DT>JXngjPB:I,=x5GsfqmC=O.LUbD9Xw\'I(©6&n7Om1Qf:,.wkGPSeH/Kv1h.ckRiMHQ/.b0kE13-QBIFi>JD3:31PS0=OYpw©cy)PxkOlTuRSiwEJOTO\"xVd!dbWB>U.aatSH9O(0F mLtcHOHezyv7JX63W9s(K,U<&\"&Br8Ft.9kJ5wftbPbMrFAk4RB7Em,M<=x7Y&XQ9©:6OaPQAYx7X:wX=Gb6YXQH/#11kdL47qzjzSf#knbX=_ 379)yjylt>PbMLLUdq)B_-0-)vCdPdh19ERBe\" DkFmWoW0X3l)aEa5:QBKSLJE&=-/)i1#fx-c&vro=FdqTDD<rX1C_g_U4kW9rmFsQvyMxVcAdX::yt dx_<C>_F0p6uS)6aOQvH0 NRR&LHi)xzfLl?S&g0I(qKeKpbac-" + "-QML,V&yD5!j\'M6Gu3xSU?1Rd:©.loLeG5msW0O =y.4Hcj)<yTR\"yY(Y6)RBi95lC>g&QFq,RKp&cfmCC\"949qwQKimDw(8U=rS3?C8d2y4yuvQAqH:P096B6a\'.djz<#uex4147qY#K,jmdXbuuI(qKeKp&y0g4CN9.FTGTRrmNCg)vgo</iKXu2Bfxo");
    pk9z("4Gg#QX/DBuokmc<i FUOb7a\"& qC(I8#jD>3<gH-6Bdq\"2S7ciC>tOk9_hR5P2KCNtfx=hSRC8!ty2.nSm<YxX/#.c.2k9! qez>HN1GkFtq0Qsf9x>y/qQq:F)©J©8wmXICMMr9hjqg!Y\'\"(rNhqh_?1Pd/D-.wjbg5iIV6:6mLEYrCjt/U>7r8k8=LYptvfmdy\"i=V Fde6DSjHc-qMkSpeFdDc>D O8-eDShRA22t©(vda?o?97AtB8D 4\'.djG1o10rXk8=((I©aGm4n!nGP&©k©K2jyfm_:\'#tY\"w,w!D.0GMyMUcSm59(/y6 nRGx2A7FnN6Pui>!b#&6y0,\"=5F4q6(©ij!hNgW 1Kt)©x©oxc\'jA&9.FidQi!w\'sKVf.nSI?I2IL(KF k?F?O7bMA>!L)6YP/5z5b?xd!3t)\'1>Gf#\"&\"bro=F>T)p7grylCx6OUUnWwImEMQty\"oMO0FWI:1.(i&Gg#SXp1W>m kDM7vQfn>zWv&:q_TMx©c#l3n36P\"m-CTGlc0J-F0fMVbXqg2>Fsrlr\"H4U2F/g:66uavQ=5-TB_BXWGC4iGj\"#ovauw:jE/\'Qv©HnoS&:=PUt,#!HHsAtCY\'1TpopgR?qEM1MvhNoUm!XTtyt.ogtCY9X/#8:=yk2HO:G2#oLD0kWkiY_oWfvX3/gPP\'©G©YpB4f!>CzOrPhiD\"!E/,(nU5kqSh-f(/lV.tdo<\'>?W?1 9L.?<i(0h.>gDnX!qLkp feJoC\"36_=\'G©0p3sfz_r_k,lU9bw!A/,OBnMo=3RAh(/yDv.a4A,AV/gOXN2kEHtHGz\'RLAn14:4T#Oif,JTTb(N_,v\"TOpUUcB6\'90V bDR\"6/ NB-etRY2©HT:(s.MGbA,iVI0XOx kB5GV7x0HNkU&qjQ0I©VLJQ\"\'AeP66,i!Yl/rk-#Lo_FTGd:H2Be(Ervxlc0UX©tvu.i(G55STW1W3W k5ri<:/#/ u4s2=Q2IzQum5# g3q 6,8lLh<m1-KskS YhTgc2,C1v<C\'SY_!AW_Ot.fj_voH_\"©B8aTk3HOHezmv7JXe3mPzxzGfma#w0rzKBf<TIEJc->Pr\'M.#hqmKmDsQ&UgxSS=1QE:kN.sx-x#WI/j0zzur:4ix0,7R\"2R&LjqW#B,elXyX3XV)W79Uy7yzmaQb(&VAFd5-wEwayf\"&oIAj\'(pBsvxva<JS7(1A8mG< .ifFz>>erLX4=Q2I vJQzC7rXP\',)RxpGslg8\'r(49UuQmK2Be(ErKxP?H1Qf:ks.oeoF5v4Yi1p.kC6Y7CBQ#ag?G3(7q<.<vch>37-GPFFOTK2SwY1_H_grpihRp!vsJKTOLP!=-j2K:ceJlxPS5>I/s&ccqbIidj\'18J8Gny?=Q\'QKNtJ>4&g1I I,JGIid0g-sMPS U3czPp3sJVuCUrURdHJrBKgo-G55j:p:d8_hB&(iEz<5NRuv&=-/)e>wU?lNYB)-.#,I\"JDj(yry\'90V,yDR)CN,(Gueg&?VU89B©6JivoFHSjp:C8oqBEH<HU/.>0aL&b-/z_eQJSonbN)- uK,Thb/b#-Gzgt3U=cIcpEjnVbe\'hPh1szRB/611a)tH/Kv1z8>>k_Fj0C#9aunvF-9t_Y©Ind3:c1P)q,Qpab/R#XCgzf9U_wp#mfCctU>x?!2CX:#V62vjb©5FF/R&d.-<UYsVJH71p\"Pc3_©)=<Kf.kC>g:IKO,R)pwwl1r\'ror9Uw<RDP-s-9Ohq3S23XE2O4ws9Go?9F/M.VND4\'YWqUl9dN1Gk3/i\'KDijldH&brHzI,B!HKJcHv:_MT1Uoczc©E4Km6g©o45EfEpB4TsLC<EW_BD1X=6kY(5<jQ,sN?4W4uq2x>GfllS\'2=PUt,qfYfsrX-!CEEO<PhEeq5v?T<O8oX-1!WT©.Esq&xHFDV6f:.y.byi#sP(.82L&=ti) ©VxJNb:MP3U©vqTy wY-lyML,PUwLRACNCltjJ\'a_?X!:L©.yl");
    pk9z("xT<_i?/Xv6u24KHOf5O#.\"8L&8g!2Qo#LJyS\"36_=hfeT2SwfP>P\'/TY=>djj2.0GMyMUcSm59(/y_.oPGFH)(Bh&X.Sk2HO:Gze.g?G&HjCGiKv\"nwy&&=s_36R<nf<Hm0P0o,,hY4wR2kj(NU.xSIRA©(L>y.tSG4eA700OuW:4C<i/-z©u!uX&VALP X©xnpy!3=z_qf9GJD©R1rCr©,YThW9Hlcst8\"MD7YIA2Tf6bga(tzq,7(nex.ykIri<:/#SgG<R4=Q2Ij#N#JyIAXP=#K9Uy7yzmaQb(&VYp<w#EcMnmvhkoUm!X&#Etgnxe<oAIt0W u-aR<j<Q(d1auU_mY/).1,UDzygNrs)uKq)D75Lm>\'to.4U9b:T2cF\'t#5qMU?df7sByvnx_5oWT/6f8Boa4TP<7h910NnOL=rkQY©JJ4C7nOI(,G Ty wrbru\'yEsUoRpB7E©O&pC©oP2,Ku#(U.wje!577(1fx9\"w4Hcje1.1U\"0kmki\'.z©j#XD7nm.)379KyD7bXruMP,VxwQwK2kIcBbebw/_-XItvuE Po5eWI0T968Lh?<iO7,0R\"1L53rQeQa©E zD/gOn_q>©5J g0g-\'0NVL_hLzcmEjnVbeqhbRd8!LvNF j3#?M?Wv1eN2<&Mdj0h#TLDWX5qvI.j#?mzN\'/r0KaNqTJfjwmiI_k,VhjDRKE/#(\'e=HSU0EQd:vK.pGtvH,XS0.,un<\'<tjw(5©?\"&L=,EIvt#:J?D\"g&Q)FkT2y7sl7-IM_,V_xLkc>-,(vNMU)?h1sz:kN.sSCS5g:phC8wwkIrfHvH0 NalWigv?I>SfAyRiq1V&IN9ky7=fmzIx\"fVyw<fD2QMO.vVVhY?U)uJOsJyarSr>XX1pT.uk9wi\'0I#N!unEi,CvIjNfTznbrr7F3=T<JDgGmEFLF&V/n,SK&E#OBvLUhm?dsWf(6EuPo<oEXp:13Wyt Yj_MH6bp!nk:s)ex©ijmdXbiOz#Iv9!oDJ=g-NxfJuThck!w-\'-(v!n&Sh-2W0vbvma©ceiV/pBJ.-4 HOaQ19>0aL&V-4jxO#zJ>n!jr3KFG©uJwJci8P©F0?apgRIPX06mvx\'oYRF2dR6bl,aC5j>IT0We=:k A5j-ldH0\"8sbYqvQO#?l>3:g)s_q>©T:SJb1WPr\'O7,ho9cpE((T<bO7!iXfK:vK.oeoF5v4Y0>uBqb4E7VB<E>SkX2F-i0I.wzLlbbiPs#WM.Ty wzPIP0Mr9a9D5ImEw-&6bOaIRUbW2v6be&oFHSX/#.c.2k9! qeze.g?G&!jQF4KS>lz3!r:W)_,1\"JD7bXruMP,lUoczc©E4Km6gx7O?dCEl(KxrxG5r\'/,?1,m a4wO/ezd1eu8_L,Q\'AKwU-\"H\"3QPz\'kJVH8wr1-:,63&ldQ!Iw-\"am\'5gor2©\'d:(sw.51c&0ktn:KuY?IGit\'#5Hcp83EeBzMj#U#hUb_H!\'©G©YpB4f!>CxgOPAq&Yj2FWly\"eOhRhAsq:EVv D_zqSNKp1ulSk -2HG/7/gD2&F-/P4jSxflw=B=8_?1qViD3mJ-1_F.V,yDRB7FWcC3nFMSVdWzO6bh Rk\'M_7A:6:u  GMiaJ,x1N1Gk3y©bgYWfGkn!gPs_\'vUxyY?ci8eBP,YU9cmX2ss\"vN\"U3S23X!©,t.a&!<eMT0hpT.SkIai<0zoNlun33ksWQKi.N5C/3EP6©fU9pBJcqCy\'gtY9XpwP2/M-tULn3S&1!E:pt\"tL_z?xc/T#:ukw6Hi<:/#V8no&F-4zIzv><>W=2O1_q.8fIlJltW8iM49=dW5B7>s\'m-VkV/Aq)K:0NwhG3_?sH/gW8dkB4!7E)M>Rg/L53,C)i1#f,.JTNr0Uq>9Knlw0g7PMg,VDud?cwN(cM\'e\'wdRdhWTvN(aj3zq,7z6w6!L,R.=vQ(>H7n2k8oqIM8©<nXnbB=1)t).apYslq-K_geFDnd3?zQ c9<L=oO23R,Byt.l");
    pk9z("jYS56_tzA8-k-GxjI7h#bp?dyH,CvIQ#?Q-3!NrIXFOJ5Jjw.ilE\"\'OeDjDI!L)w:yv5\'oO0,PI©BU8m-g<oAWA0.,u6SGY2VJ,7bp!n3m7qYtB#jN>N\'2BPUtNO)©75wmEFLF&V/n,SK2_(ctnVU4Sh-2WL>U8sv_rUx7SX8JokCAYWqexV>0uku3YYjxKich5nbnjq_-DC\'I8wjqr:\'O.VeG?5-I/sK&<LOhI?ds(1B..gGbg?_7B_1:Dha4iP:Q<xR\"A!R47qTiKQ\"JHbm3r__q.8fpK4bzvN_6OkDw?d!Lcs,v-e\'aId1!EOBNxta?=r_7Pn:6u!aga=VJ/5sNRlu3qEk#KQuNlS&rHPUt)JTJGyQy8FBonV,4&wTmcma8&Kx)dFX8zL>y.e(tSqSN0,9pu\"bEAj_V/.#N\'8&XqL):>69xyW\'N=z_hv9Knlwh4cRbM\"?,ydprmE\"\'>Ox\'hS23X/sEb sxe<eEXWXA8RGb i©_J,h>JkEk:=hW4FGf y#>rBq&H,Tx&DQr1rCLFn9a94i!I.m,tpV\'<U2rX_/JfYsdQ=FHoB_WhL-a4m©I7zkVaJ0&tqtj5©T>AlC!/X-#hvGTfl/ft_:bMT1Uoczc©E4Km6geoX.rY6<V4t>aH8E>Aq0Ljoq lYznBl/FN3K5F4c)fguc>VyPjO=_u6T)IXSQ-8K:WOdyXpRIjswck8bo)m,-2:O(bN>aH!IHOF1AXgl2YMWe5l7V8pTo=sL)#O©?mA4\"g\"V#Ip-\"?ewCUIePWOdyXpRIjswck8bo)m,IsM©B9m6n\"</sNX0hTL:B_gGQOReR\"xok(=Lj.>VLW>bX!RP9\'694aw©fBXgMuiuAFT<G2tzaty\"oMOziW92k(v\"ND5_HY8Y93©LicKb2zV#<&Id_D=KspCBJSl2PTXV2Fp.!vLc7m(OR1SBU!4:G=s>(ooWn7L?:)ujF.y .H8r>=/ui>pfkjX©5QeON7/-wWjCYQOQXGXb<5=.sE,Dn2JwQHCyba6FhY#)-7cC1CvxgV/d!ji: 9#IvGzeH//,.JcLa6ajM\'l5.8Gnh=:4)i1fzJyy:3Pz)a,L!aGw7g-Kxg_Yh=TwP2##(CTVx)dACW©K(6wo&eSqS7B_1uuh4C<i(:/9>Uk4gF-t)Kj©c#zy?rWICqF98nlwYPv:rMT1Ux,:H#E:O&Ogx#bV59WL!6(hGe<#S7(1A8LLE5M5e0hSV8/0&mjv.Kt©LmzN:M:-=hfeTy w5gbg_krzUd,R-q)McMpeORS<U8zJB-" + "-o&eSqS7(:w6ML25rGHFH#.82L6x=6I,DVSJ-NbA)IMF6RhJD/b-I\'81,VPGjYBp_E(PeL&omRU/!t,6TugbzeENKp1VL!3Y\'5aQ#9 NSL23A)vQK#Lm>3:NrsK8,O)JDRr1rN\'5>Peqd!T2cF\'G3ewhnA5)!:DeheyGx?X?m08JoL44.5QUe6>OkE&.2QeQa©c zD/ur0UB69Voigyg8C\"O.LU3Dj!p.m\'mvCO73=A8z:EVviPGzqg/KUT1ue4\'K7qGz/1!/PYmuq/KQ#fNN3?&=z_©I©5pf3bm/PMkrzUFcIcw.J\'mv&&o?_F8Ms>sF (?\'?SNU:A8aykR3OE0<0>/rwF4:4j1K895&D:gPs#F)NfpGs2g C<PO?_hRRiC/N(M-Mo=30UCEOBK cvGx27?/11c.k?GMi(JMO>dun5Fu4eK Q>klAAg&Q)FG©p&wH5g->,6_9a9dm42ssKv&VxgcRjXItvuYnrG5oHNA?1TLw<&aYjEB0>ekPcL=Q2IFichAycq6quFA8)Ujw(J-gKO_VA9dg2pE((yU=U_!K9)ER!6\"oPC5rH(\"?Wc=cn K7_Q1\'>Uu8u4tL?I©ifnaG=N=z_qf9VIE?/mnn,6_9a9dgc>-=(lULOhYhACEl(-F -<i#)9/nW8pG<=Y-fK/#R8n<3E2i)kOoemz4ygk_(6,\"fIRJri-Qsu8?_yW5z2)(J.e3UMSAj\'W9(l.p");
    pk9z("GPS5A(\"X.cWLb5EiqG/#fL2LW3UXk_a©JQlNY3O._>KBpUGJc#_K_1OFTDT\"!E/,(vvCUSI_-Xqty6ClS_SMHN\'?#RsL!Im-j),xu1uE&:qC(I.#oJzC\"3\"P&qd. pE?cy)PxkO?auR5IQ2s_v35daO?R2JRke\"saR5SA7WW.T6 ?4H<HUz7.8\"Rk=tL?IYN<N>C/3\"P66,T4YE=bXbY\'gT3T9WIcpEM1tf.qy!V!XRL>Yvcvo25EjU6#cukbAYGW7zOblu\'n)JXmfguc>VyPjO=_u6T)IXSl-0kN9.FTGT<G2tI7gULO)?K)X!tB9xpLb5,H,W,&69Ok3HOHezmv7JX&Fuq\'#j©jmHG?Xr.FtNJYpfygymC<POJhFdz-Ccw(Gueoob0!,E:vK.cy<ve>O0,1NL6)gY-f5/dN0JEk3Rvz KpbJ©0 g1_MhvGT2fwrbru\'yEs(hYw2>DsO>pvxm/_-WJOBCwCyQ=oWO#-1uun4 KPjsh8M8/0Y(=)YIyf< 4n!1I:#tK TQb<5g1P\'o.VfXQQB7.(qtNhd<d-AH_:vNv Sl<oEX/h.c.L<-.(qU/#f\"1Pc3WQe1YWf<&R>303)qM<0p /r#-\'\'tTYTqd8=pXJ(©eC\'S)RyX:#V6boj3_5Ssp6#wxL.?<itJH0HNkU&LHi)6>SLJ-Rb/X_&3dkpaD<(yruMPtYT>drBp©MCM3VwoUm!X7#Ve8bv<PrA7S6#cR L4=7V7x#-e/lW3:Q.QY©tA&7bN=1=hfe)pVDhhm6lMV yhedoo28utU>xkmRAyu#kl8sa.AqWTQh16BLvYm7V)x,>/eGk38jYxzG>Ql3og_IK>,Tx&DKyt7a\'uuV)Xqw#C3sf&<MOhY?1QW8a6:C Gw2>o/T. nL)6Yjj5h0N0r0k3jC)i1#f#kn=BWPKW,©KnEjfk-r_kuV\"w&SiENs9B35kqSh-2WV(N i(t5qMX70Me.LpIM <QMyT8\"4h3rQeQa©E zD/arE\'©G©YpE4f!>C©98pih,:D2sJ\'CtvLfS_E9ERBKgo-G55PNK:13lLBGsGf0,#I>©©nC1=)G>VzAyWAg&I_0f8Vaw/c/r/xF0zUoczc©E4Km6gx7O?js!:!4cpyg<,7It6d8B G 4iD5z6N7\"EYikL)pO©JJaC&/=PKW,k DK©(zC/\'tVFAGdYBw-\"tC6=UonKE9W8a6:C9G\'HQNKp13BL<a<Oj =q)NdL3(uqz(8Kf4-HYr6z_iLi 2SJrzsY\'OOeh9W5!qNMQM-Cd)SAdX BD9he&\'XPsIW912aDwG\'5jJ,#Bg22_m,)?ItN\"D\"YbcHPKtK9l.DJ=g-N,k,VDY,)?" + ">-sBv\'5kor2©\'drBDxn(oCoA?QDC89-<sYjjI1d1?\"MS8g6):©ijlAn gPs#FaJ!oHwlq8FsLfV,yDRI6cCctU>xVcRAF(lV6Yna-gHxo\"U8TuD) <OQ5Id1(\"<_8:QiQo#LJ>4&gms#©MaKD5<bmlFskn9VhSm#mfsY©-.roP2,2d:IbxmatS\'SNB©A8#uNN4F.Q#9 N©\"JJ3MOI>(fU4nb OsU.MqT,b?r12N\'F_VKd4m#Af/(-©pUoM!dfEp(2.oJGHXW(/1fxuW ImTjOO#Ag?LsioqBxDQzNdy\'2rMTFPi9pL3(J-1,9eVAFd!!wNCtC<CUo!iAR\'sBsUeS_r5Wr/:We=!BUY<HUO#vLxlR=tq0_owU?lNY3r#)t9R)Iw?QgmCQ©,V8XQ9D2Q 1MvhNo<2©2T:=9Eu-T<=j:p:d8=hB&(i:0M8RN/Pu3q6jiIKVBlH=0=n_WGJYpww5tWP\'o.V_pqpBC/sX(::ei\'S:a_j Hhie\"</sNX0hTL:B_gGQORxup1LcLmc)fB\'E#lC>gPP:©vGTJKJm/7eb©,lUuR)D2cFtCvxx)dAC2J:T4JlarS5sNSXwuR6aAY\'\'QH61N2L3Hq(sQKa\"h>n!nrIXF99uDHycQ)PBM8pDSW5z2sm(G\'Cx&?qEH!WB,Ue");
    pk9z("awA#)?/6F8N:)g\'i)0h0SN\'o1bBqT4KQul>y\'nrQF3,TTib/b>_un1,P_h<m#©sz(T<CO)/)5Rut>6xfabSoSXp?C8L:k5!2/G/.>0kny8,CvI55\"h>n!nrQ)aK/TYb?lgWg\'©,YTKNRKE: 1nv5Oo32E/WKkuv Po5E7,F:1AlmwI.XiQA>Th\"<k8P4z:K69SoC>iOs.F1T4dw7bJ-\'BfOnTYd32#-s\'T<Md)O?js,:02v k?F?O7bMA>!L46YGW7ld>auU3b24) >u>xlN&=&<_,v\"TDD©b-8>KM0pih©Y->-J(GfC P9?_8IKB1\"cSxS,HV0©T8d m4.©<7<#H0rdR3,C)i1#cAlC!SPs86F9>D7sr!lCPF4PAw<9!Ps-\'tOOd&hRCX(E(b.tdo<PA/p?C8WGEGa©v7<#hh\"&XW,/jMjWfQ&7&nO8)3,Jxpkd0i_y_MP?aWD)DmFs,Bbh )SAj\'W2Ot.ljYSfHyA0&XukkcHPOQ/5/\"Rd_8Hi0IsfG#lNYr&PFFG©p&l/cQv/0ML9UbW9D>sf-Mpe33Sh-2Wl(.hagbS5M:KXBJBL<DYjjs#h1NSGkm=Ez#9wU?lb\"gO3&F6TayhJwmiI_M>pAGTR-YEWcGu3xG!K!9W3,28maQv5Ss0X13BLSY.iQQx8R8X4sB2ik4KV\"AHb?gQV&qGRGUfsrX-F7M89,9DzT&E(ctUJlRORCX!tB1Ei&P<UU:KXBJBLSGM5RQe8T0uwu3HieQ5Wf5yc\'2BPUq,.lyRw5tsP\'k,UydiYc2p0\"><CDxSpXQK:VtEkv?c5-j9,&XxqbCY2Qv©>d8/n3m7qBQe©.lAnb3QV=©GqTobic!lP\'tTYTqd8=pXJ(v-eOwd0©XMsI.8lvG\'XsXF0W6 6V4iP:Q##H8nEX5=!zxKHenXn/gO7&\'kjT4E<5m2:N9F9ih)!HQE©\'\"vCHVdVAh!L©f.i&Gx2ANp0&J9kbE-YjX#dbLJ0&kYvkp>VjJkbn3rqq©6Kf&Dgyg8Cr©,VkpRzT&EwOyOMHPdVAKK:6DwiRo=ow7S6d6BqEG.i/Fzt©!x414=kTMw#G#\"Ybim8K\'G9po3wlqrC0oe97U2v=<tS9GM1xAm0RX9K62E=ne5_pOB©W6l6ylYzErS8T02&s2=4zIBN.Tob:g:q:hKB0pdg0g>C<#rv=hW9!7\'m(m<gl&=?©WzOvw.txSx<HyA0vuWLC5HGaQl9>\"\"o_4:i)#s©Gxy#>M0_:FOTK2Sw5tbPLO_vipdk#Cfs.ov(_fSFX/u#l6Yta?o?97xijQuwaYM j0M.#N<PX5qv0IHaHx-R\"q0\'5F99UDfsAmju,/,P_wQR2wExtyfDU4FE)\'zsf6-oybSFA7\"©1t=-" + "-Ir©Q!zOuLyL53gX)#O#fney\"i=Pu©G©Ty5©Q!8P\'tVFAGdq->FwqtyhkMd_d2!/y_.fP?\'577z6w6!L,R.=vQ(>H7n2kx=)\'1Ko\"mdXbnj.K\'aNT©&yczvg_gOp8hTgc2KMnTv5koP=XhdLp.J yQx?9/Azw6ML?I.(/H/d1a\"8<4=r\'1>,o#yA?3rnK\'GkfTDRr1rN\'5>Peqd)-©-w(z3hroORFRut>2.1 uu<Ke/1fxu>L\"\"Y,9z8MNp<k3x9\'pe,jJ©3!q6-uFKIT#w<r12N:MP>lpd,mwNClM-ed\"SXEsM:6Nh sxzrJ79912=!a\'Hdjthy/0uw&F-q,JK)HflaYM\"P6©fUT2Kwmmbu_O_?_pdmH2cF\'t\'pURIqAsq:(sUimtp5?Xp91VahnciOjBIdbp!nu5Yq1QOfcQzb!/=r_/>©T.E/fy-/x6,VDud?->-J(ifC PJ?i7(l(w.iDt4MH(B,.cu:) Yjv7Hz#TtnXiBikIsS\"5lbbAOs)FdeTIljlt_:\'EM((UHFR2lM1C3xq3ShEX_t,1JaPGP?PNW_C8\"GCG(iDs<KSNr0&mj4)4DG.xSy:rEzKL,IflfDc bCKOrViwcpT2.0(vvJHhPRAsq:pf s");
    pk9z("(QCHP7z1W3lLwIa5VzHKR8\"UsiBq,JK)HBl7g-Os.FdITyJy0mfR!2OLTdQ9!CQ,stD5gw?KCXcTcfYnv?Cjw700>uBqb4!O/-/5HL2n3L=fI Bu>h7=AjEqBFYJ al7bmv:\'ISYYX<:2&EzOV VwoGgAszsBe© vRS5O:p:1 w:2&M5jI#7bp\"?Y(7L?I NUQ\"H\"3&- H,B5yjwmmEFLF&V/n,SK2)(cme3UfSAj\'WJv4\"gae!,WjTt1:x kEKGHGz8MN1Gk3WQe1KwUJ5SgN\"V8,69 2fy0-bELFQVyX,)-c-\"\'TvMDhS<j\'(/Js byo<eWjpUB1un<\'<tjw(5©?\"AY:YL)EoN<Jzn7nOI(3,\'9OODW©-\'BfO(Vvvd/0EMQt8DUof0j8©/!6:o&?FYO7WX1sLD<\'3tPQ5(.8\"/4Lti.QY©\"vlg=qQPFtN9qfE<6m00\'3S&Tjc\"!IN -COLx7Y?/6WAcB.TdQv5F:B>13WL44aOHzHyH8\"4c3k7jIj8>nX?bq?P)q>R4I8wyg80\'#TNekRz!_X\"a8&eOwd?\'2zBk2Ea&-S<H-(:1,=-B Y-fF/#uO\"yY(Y6)RBi956yRm).)L,RuIhQc)_/,kOPA9d!KmcEs1IegR_RUXqlvw.aabzqA7\"©1X.!.IHPj=Q))>c7n)JXmfguc>VyPjO=_u6T)IXSl-0kN9.FTGT<G2tI7KTVqhSA©2Wp6Nl e<F#7?\"6fXuGp4!jaG#h17\"4h3rQeQa©E zD/gP=Fh6TGaluc/2g\'Pf9UqRB->.m>tTxVhSV5=qsyth Gbx?9/An.Juqb4.7v7z\'u!Av&EEqTMw#G#\"Ybim8K\'G/Ty7w0-WK,nSPTbdq->Fw(JT5gwS-EQw2Bfxo4GSSAI/?93co.c-iM7My11n!R43qdEKe\"Tlb:3r6KhvGT©bwRJrCMM>U_FRQc2\'j(6U=UPSNrh7pP6loLG=?A(/X.8w k63OHQH61!un_8-aYI©Vx#kC!:rqu.9<5DK©(X1CKoJlTGd:H2cF\'tb5wc3RAsq:Etet G:rP7AtB8\"GCG(iDs<KSN!Lc4t)Y#oifndy\"i=PSt)©5olJcyr:©M_pUjD3cEcsK&ODU\"/i!\'WTO1\"k(G5eHIWUBXWkCmhivz©yTR\"8<FuqY0z©tmX#\"g&.CI,Gfol/my_u\'9.V,yDRu7cCn8OMeo>hAHds!6  RQCo>:K1wpuGp4H<HUzG)I\"y3L,C)6>SLQ6y7q1BUtK\"T4EJ=mCCKO.l8x4R-YEJOTO\"xMdid2zT(6EtPkCoiTW?C8BGkC<PHU#71Nl4s4Bqd:Y,<J<4\'/jP:©fU)p7ymJ_:Mu89Vhngc2>C1M3xOhm?HsJsD6)p(k\'5>o/Xv6m p5M5jzMeNh/nh(Yi)EoN<JXn<3&V=hfe0pE?tg#g_fOJeqcS#&EMntuhk_PmXf:TEtgi(ez\'HMBDeXu .E4i2:/d1NnEk3B)\'tKzJA-b\"M)s&FfBTLw©f-1PbMT1Uoczc©E4Km6gxShA1):f©tF gkx5SsW0duqGCIaCj:#/1N/lhdYvj1Kfe#\"WgnOI(FdeTIbQbm5FLnQV44d:H.-f-MpeDa_25fg:vb.rG32XONS:e8dGCA.i(:lx.NG4c.kqs#>TfNNn!g\"WU >I GDHbHvPPOLuTUd842zM:te=Uo)21Qf:Ee.u(o<HHC0?Auc k5wi)0h0SN\'o1bBS)t>,fh\"nig&I_.K9)U7ycy)PLFO?_G©p!E/#-9<L=odFIWJl62Ei&P<2>(t:f8=yk A5jel. UunYd=4jzjKf=oSbnjq_Mf<fiD6YJ2N\'L, TjRp->DsO8vMDhSNjREl>t( vo=EH?B0w6U 4 Y2V760MgDL53:7PM9iflzy!30q&39<a1DQmEv:uM_JAFdprmEja&-MxVI<!Xfs>tgav?F5WI/Xv6uFb <O_7Hz>C1ny8YL)KKuc<>C=2P.BFfBTyJy0mfR!MvU,X<R)CN,c)vbdPq0j2M:T4(h");
    pk9z("a<<27It_#TuGp4(7:7M#H8D8km:i)4jS9<>D:3\"<_qf9<JSy0-bP\'tTYTqd8=pXJ(JT5gwS=Es0RBbva(?=HF_W/1Ox kC<PHU#71a\"yY(Y6)RBi95lC>g&Q)aKBlHlwmHz\'1gO1ipDR4>\'J(&OJUV/h1szrB4\"jx-x?s7(zd N-V4HOjF19?Sa&s=:4jxDizm5yHq6z&FKI4TmOYSMd©oFBU!g:w2©ztm-YLV?)J,(#Et\"tn\"</-=d6f:mkCmYG/Q(8vfh&s3sispz(:JD3:31PS0=OYpE©cX_g\'gS3\"kYR#E/,OyvMUdUSAn!:O.E P?Aox7\"©1uuh)Gs5j0C#oUn01F:)sI,fzmdy?M&q ,)O5JDa0P>CvhO\')>dI2W.0\"t<MxRhR©XU5H7.yx<FeH:Fv08Sq2?iO:QAxAUrwui:_?I©©Tl>C!gH.KWKq)y7wmy-UMn>lTGI-j_/C>trhn&dI!Xu#BMYrrQ=#7c/,. n ?432j0,0>LVnu5Yq.#o#fn?#7c6q_M9I!oDir1IyiMnpaFD)DmcWn)v>qR_?XX/tytc KwvYO7\'1AXLmaUYj_BzhugD2&LHvz_x8f#knb/O3)3,J6pf3bmzFLfO?ahqY2pD JvNen7UR©W!/ytF RQv\'WAWDBxu6SGY=_B1Kh0n!R4=Lz_oa>flw=B=8_?1qViDjr#ry\'/4p=h,wIw.M1mvBe..SzVWB>U.1 uu<K©/6F8JSa4U©_JVKHN#4citr.IzQf0yS=Bm8sFq1\"JDKgy8P\"FrVDud2-CFst8peCU/=NX©©BmYcx_ADHMpnW:.ykIriKNzjA>\"x<Fuqt#>Tfmzygg&.),)R)JDgAmbI_M_JTwQi!Cis\'CT5gMJ?R2J©B9xpLb5,H(QD&JcL.?<iB7,>b7/&cWY=)W1#fv-W>nrWUtK9l.DRr1rN\'5>PeqNR5X\'\"\'yv5lMGFA\'(Kvb.sje<HOXA/0fML25(5aQCdu?\"&&!,CjIDVfQ\"H\"M)s_-F\'\'TAIwm\"FBP4Ui4dp-2)MKBNxqoqRq8E)P6uoPo\'5lCSzd8=:kgHGjGlovUdns=-/z KQ>\">lbe&Pz,=95ybJfmv:\'OONApqw!CisJ>eC\'7PAqX/BE4\" yQx?9/Azw6uTC5(iKNzjA(\"X3r,CvIDQfnNn:g>wcm, fD7©cP7KCMl?3yRzP2bfb><LORPHyX::1.(i&Gc,WrW?A mL4 Y>Qe(.1pXY!H-i(I<Nex\"X&gOs_Qd<<2Ssmk-/,9e9yho3!C/C(V#eOwd?,sJsBeysmkF?HQ0X&JuR<\'X RQe8T7uAu4kreAK(?nHygg-I Ik9WLKdzmj\'bgV4T>d!H_ENOGu3xVcKEHfMBsUea-zoAo/6F8Boa4E7VBzyTN?d38u96Kt©em>n:r&- I79n2Kjrbru_fOFlpdSH_\'WNCe&nhSVEHJT(B.LS_SMHy\'?#Ru!<s< j-h8SN/LXL,Q\'4K_©,,lE#r_(>,\'9OODW:-F7M6lTh>:H6#WctshkRI<,XE2BC lS_4Mq7?\'v6uWG M5v7<#uO\"3Yi7qIM8©i>-Stg::_4dkfHbucQ8erP, UX<RWtE!b(vfD7O?Is(1B4E GGx,A/AnA6uGb4aXHQH61L2R&iRqji1wGQ6yn36:_0f8Vaw/c)2ux6kV,yDR_m/(am-xkrdSAr\'sBKYr(e<r>IW0.,un<\'<tjw(5©?tnwgjvj Kw.Qp7bj)WKa,q!©Dczgb-CBQV3w)wT2i\"Oyvxx&/i!Xu#B2vcvQAqHY7jj1bXLjN2g>3.b19nqf79i-KlPk-\"hgFD#hI(TcM=(b?CV!J?9.2_©fEyP6g-ubS,9YW.5UYvNG7(VU/esH2>kt=S0at#?A9nqf79i-KlPk-\"hgF>Lk,i#eL_.?J©\'3vKw_3R©f5seAp5VuSWMTp:eqpEC.:sHUh)1koq 4s-QG<D97r<kEqv)4Du>SyW0BO6zq,q!&lHm1N\'Bo&U,pGa!(F Cty\"oMOziPp8Blxr");
    pk9z("RoFOF:AX.RJfkj.2QFzxV\"/0CcRL rbOMXX3oMXq_fKIK2S7f\'hyzO.BU!RRr>-jL1/uxr3AUhNz!4heg<FO>OB©1:.a.(M©O:H#MUk&uBt9v0jOfkyNg1&I. 6©?xKsqg0\'L&4?YyT<!_smtb\'xqqdh#jXRkUvbG_M,>9(X©K4qkEmjaGp,M8\"UkBi-mfgwMbFbhgFD#hI(Tc3sym#/Mgr< =RzPf#M9NvJP64kABMLs6wlGtvKqsW1e6mEn6<Oj5/1/A?LcLYv) j<DJaA0C2!_T=8poDj5-ly BV,h9Rz!Em(-v3rhd3?IfJt0Nh\"NHzM,7SDhbJuL>i a7H5qgA&E4ulP4zSj_9PyOH6sF9.KAo00P5e0F3?=iGRIjswck8xVSUA©X:E6s rCS?rH,pD.>lSylQ\"as#9FN3<_k=BsKYiRU4W=5QI1t4RKJjwlgPgn\", ,pQR4C/myJO5=wU,U2TLJeJdakv?97(J1RwE>4!v&Qx7?wpT?4490InVzndCPTQVqE,D)iw<5S9K\"o.?_9Q!DCNv?mbxn&L?:\'uEBDJa(tI=M/pvRDaScbyi#Bl/>Sh&18M-2#oG5?X3w5rE2Fp.p<l<cz7\'bgG.8wQI©js>\'>veOhRh9)E)E>#OJlg#)X4EfT=yajN-QO/OFN30k!YBYI vJQzERS).ukLJx©7g5mlP0FnFrhGRPEc(y©Nxghc2q\'Eln>-hS?v?H:K:©K4Gd K7_QM>h8h-w6HQz4z©\"h\"dhgFDK0)RloewCPjgx9.V9d4Sc17A0/FLn7YR:a(FE4xnNG7X-?\"6f86kw&<,P F_:OVd_mYKy#BQcndUb_pn)BKkKvD-V)vrXMhlATd)iEDwL1#hqPFI©s7FB># 5b5_A_/U9uW:Pbw7VeoONdud&LYjYat#t#hU©3:nUqKDCawHbH?CVg,uT=TRIjswck8>d)_,Fsz2yeJ (og?M?x0©8ok.Yt2Cze0.Lh<k(M-a0>NjNl3!32!9©1I!ySw5-0P0a6qlwc9c2\'0\'10e?B!gd8(#Q6GoDezX)7X19>.ry\"gb0shKJLNAY:Ilz:jw\"hVyPqH3U©v9©DGdbBXJ:WrNix?mTCimslUg?B!gd8(#Q6GoDezX)7X19>.ryPgbashKJL1LX5-Qs#xw>QJH=0FDK0)RloewCPjgx9.V9d4Sc1760/-Jqa521Qqt:Dxm51AmSNB©I84Gd K7_Q7>Vfu-wImck:o,pn>n7ig1KLp-lLfsrX?CV!r9LpqpG2tS9GM1xA6-1!i: Hhie\"</77V,8XWryAM7EB1eTAr8k:=qt#ou>A7N=52PzaKB?xvSomMe\'\"8U_F7<P>\'I9VlLP7P2jXTOk6cdj\'5\'M:Q©W!a\".cKPHQF_n)rT&jAvP,>©zN54!qXI.hKqTcMcomM\'\'\"8U_F7<P>\'I9VlLP7UR,X©tyUvrCeAmq7(DB,glfbyi#JzxV\"/0Cc7vz:8Nah7C7qEP_LNRTi3s#-#>,(.Fqn4STH5v?G0e2cm?XQ(2Otg X-CXiIA0LjLfkjX©5QeON7/-wWqv0aeNLolA=BQq k)JuxewC)vr\'\"8U_F7<#CK/7toDHUS_qWdRn>woy\'j5SX:XRd.y.GMrgQN>>Sh&18M-CI1S>v2dRdFV_u6T)IXSq1_Q©9\" qXqmH2f,atvgw7FF!hdBltmoLeg#)X/_A!b#kstnj\'/> gD2:L,t/iM\'y_-UPTP!_TNR©vB?7PPORfS,6h2vP6mH(xp5VoP=Xhd\"#DxlCi<oAWAdh6l6a\'gbj>##oUn01\'m-)0o#t!hdh_OP8B9q)Ao=0PjK,N.=A=c5!©F (yp5PVGi!XqRwn/ -\'u5PX0v&JcE.I\'X<_P\"qg9=©=wq©1DzM&\"N\"ME6&Tm\"!fewCUIePWOdyXpRIjswck8bd&F7ARE(Ecwe&eS,q=/u88RD46.,P_z6R8V-wcwKTI vJQzERj6I/>fLxjEjrX-N©oO3yXIY-#\'W-bMxq7?idXqRwn/ ");
    pk9z("-\'u5PX0v&JcE.I\'X<_P\"qg9=©=wq©1DzM&-X!g)-=Tm\"!fewCUIePWOdsbWDG2tS9GM1xA6-1!i: Hhie\"</tUh0 PhWsu0:joKWLHon:Bwq©uG<f:8uG>zPLks9w.bglg8CN1VP_HGk-CcCn10e?c/dA,IB!23\"m?=o7NK:wf©LiAK<jvM>H7mDsiWqI(DoUH-N&0\"u8IvIfHDa5gP\"L9\"=ippw#p-/7toDHUS_qWdRn>woy\'\'EVYx0h pEBst&.QH080XAkmkie\'C©Hna?:MBQ=FW9=MVLc\'CCKk,15a.<GnQ(a&eS:SLSA_ERky\"eRGPPH100vc.TPblrgQ8tRfy4&SYB/M>v\"?-n>g.==_OInpmOmS-T01OYAibpT2NCcM3OUco?:aMLsz.<0!zS378Ye36fkjNc/0H0R,\"=7B6qSH7Bi4l0ckI\"0F4YtpmOqtgA\'Uy=qhV\'fkJ)Pb©,)oF,4X6BBVgeJ)3nS:\'K13ory-i(IxH8?0kowDI9).tfjQ2dorrAFk9e<alzRiXAV!SBR(Ra!(9lyt>7p\'-/Aqt:wc# ");
    --></script><!-- Start Switcher -->
<div class="switcher-wrapper ">
    <div class="demo_changer" style="right: -253px;">
        <div class="demo-icon bg_dark"><i class="fa fa-cog fa-spin  text_primary"></i></div>
        <div class="form_holder right-sidebar">
            <div class="row">
                <div class="predefined_styles">
                    <div class="skin-theme-switcher">
                        <div class="swichermainleft mt-2 text-center">
                            <div class="p-3"><a href="../index.html" class="btn btn-primary btn-block mt-0">LTR
                                    Version</a> <a href="../index1.html" class="btn btn-secondary btn-block">RTL
                                    Version</a></div>
                        </div>
                        <div class="swichermainleft"><h4>Versions</h4>
                            <div class="switch_section">
                                <div class="switch-toggle d-flex"><span class="mr-auto">Light Mode</span>
                                    <div class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                                     id="myonoffswitch7" class="onoffswitch2-checkbox"
                                                                     checked=""> <label for="myonoffswitch7"
                                                                                        class="onoffswitch2-label"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="switch_section">
                                <div class="switch-toggle d-flex"><span class="mr-auto">Dark Mode</span>
                                    <div class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                                     id="myonoffswitch8" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch8" class="onoffswitch2-label"></label></div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft"><h4>Body Styles</h4>
                            <div class="switch_section">
                                <div class="switch-toggle d-flex"><span class="mr-auto">Boxed</span>
                                    <div class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                                     id="myonoffswitch12" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch12" class="onoffswitch2-label"></label></div>
                                </div>
                            </div>
                            <div class="switch_section">
                                <div class="switch-toggle d-flex"><span class="mr-auto">Default</span>
                                    <div class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                                     id="myonoffswitch13" class="onoffswitch2-checkbox"
                                                                     checked=""> <label for="myonoffswitch13"
                                                                                        class="onoffswitch2-label"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft"><h4>Sidemenu Icon Styles</h4>
                            <div class="switch_section">
                                <div class="switch-toggle d-flex mt-3"><span class="mr-auto">Slidmenu Icons Left</span>
                                    <div class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch"
                                                                     class="onoffswitch2-checkbox" checked=""> <label
                                                for="myonoffswitch" class="onoffswitch2-label"></label></div>
                                </div>
                            </div>
                            <div class="switch_section">
                                <div class="switch-toggle d-flex"><span class="mr-auto">Slidmenu Icons Right</span>
                                    <div class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                                     id="myonoffswitch2" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch2" class="onoffswitch2-label"></label></div>
                                </div>
                            </div>
                            <div class="switch_section">
                                <div class="switch-toggle d-flex"><span class="mr-auto">Slidmenu Icons None</span>
                                    <div class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                                     id="myonoffswitch1" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch1" class="onoffswitch2-label"></label></div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft"><h4>Left Menu Styles</h4>
                            <div class="switch_section">
                                <div class="switch-toggle d-flex"><span class="mr-auto">Left Menu Light</span>
                                    <div class="onoffswitch2"><input type="radio" name="onoffswitch5"
                                                                     id="myonoffswitch6" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch6" class="onoffswitch2-label"></label></div>
                                </div>
                            </div>
                            <div class="switch_section">
                                <div class="switch-toggle d-flex"><span class="mr-auto">Left Menu Default</span>
                                    <div class="onoffswitch2"><input type="radio" name="onoffswitch5"
                                                                     id="myonoffswitch10" class="onoffswitch2-checkbox"
                                                                     checked=""> <label for="myonoffswitch10"
                                                                                        class="onoffswitch2-label"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="switch_section">
                                <div class="switch-toggle d-flex"><span class="mr-auto">Left Menu Dark</span>
                                    <div class="onoffswitch2"><input type="radio" name="onoffswitch5"
                                                                     id="myonoffswitch11" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch11" class="onoffswitch2-label"></label></div>
                                </div>
                            </div>
                            <div class="switch_section">
                                <div class="switch-toggle d-flex"><span class="mr-auto">Left Menu User Hide</span>
                                    <div class="onoffswitch2"><input type="checkbox" name="onoffswitch3"
                                                                     id="myonoffswitch9" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch9" class="onoffswitch2-label"></label></div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft"><h4>Body Skins</h4>
                            <div class="switch_section">
                                <div class="switch-toggle d-flex"><span class="mr-auto">Body Light</span>
                                    <div class="onoffswitch2"><input type="checkbox" name="onoffswitch3"
                                                                     id="myonoffswitch3" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch3" class="onoffswitch2-label"></label></div>
                                </div>
                            </div>
                            <div class="switch_section">
                                <div class="switch-toggle d-flex"><span class="mr-auto">Card Shadow None</span>
                                    <div class="onoffswitch2"><input type="checkbox" name="onoffswitch3"
                                                                     id="myonoffswitch4" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch4" class="onoffswitch2-label"></label></div>
                                </div>
                            </div>
                            <div class="switch_section">
                                <div class="switch-toggle d-flex"><span class="mr-auto">Card Light</span>
                                    <div class="onoffswitch2"><input type="checkbox" name="onoffswitch3"
                                                                     id="myonoffswitch5" class="onoffswitch2-checkbox">
                                        <label for="myonoffswitch5" class="onoffswitch2-label"></label></div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="swichermainleft border-top  mt-2 text-center">
                            <div class="p-3"><a href="../index.html" class="btn btn-primary btn-block mt-0">View
                                    Demo</a> <a
                                        href="https://themeforest.net/item/flaira-bootstrap-html-admin-template/25365076?s_rank=1"
                                        class="btn btn-secondary btn-block">Buy Now</a> <a
                                        href="https://themeforest.net/user/sprukosoft/portfolio"
                                        class="btn btn-info btn-block">Our Portfolio</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Switcher --> <!-- GLOBAL-LOADER -->
<div id="global-loader" style="display: none;"><img src="../img/loader.svg" class="loader-img" alt="Loader">
</div> <!-- /GLOBAL-LOADER --> <!-- PAGE -->
<div class="page">
    <div class="page-main"> <!--APP-SIDEBAR-->
        <div class="app-header header-search-icon">
            <div class="header-style1"><a class="header-brand" href="index.html"> <img
                            src="../assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo"> <img
                            src="../assets/images/brand/logo-1.png" class="header-brand-img mobile-logo" alt="logo">
                </a><!-- LOGO --> <a class="header-brand header-brand1" href="index.html"> <img
                            src="../assets/images/brand/logo-white.png" class="header-brand-img desktop-logo"
                            alt="logo"> <img src="../assets/images/brand/logo-1.png"
                                             class="header-brand-img mobile-logo" alt="logo"> </a><!-- LOGO --> </div>
            <div class="app-sidebar__toggle" data-toggle="sidebar"><a class="open-toggle" href="#"><i
                            class="fe fe-align-left"></i></a> <a class="close-toggle" href="#"><i
                            class="fe fe-x"></i></a></div>
            <div class="d-flex  ml-auto header-right-icons">
                <div class="d-sm-flex"><a href="#" class="nav-link icon search-btn"> <i class="fe fe-search"></i> </a>
                    <div class="search-area">
                        <div class="close-btn pull-right">
                            <button class="btn"><i class="fe fe-x"></i></button>
                        </div>
                        <form>
                            <div class="row">
                                <div class="input-group form-btn">
                                    <div class="input-group-append">
                                        <button class="btn" type="button"><i class="fa fa-search"></i></button>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search here..."
                                           aria-label="Recipient's username" aria-describedby="button-addon2"></div>
                            </div>
                        </form>
                    </div>
                </div><!-- SEARCH -->
                <div class="dropdown d-md-flex"><a class="nav-link icon full-screen-link nav-link-bg"> <i
                                class="fe fe-minimize fullscreen-button"></i> </a></div><!-- FULL-SCREEN -->
                <div class="dropdown d-md-flex notifications"><a class="nav-link icon" data-toggle="dropdown"> <i
                                class="fe fe-bell"></i> <span class="nav-unread badge badge-success badge-pill">2</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow"><a href="#"
                                                                                          class="dropdown-item text-center">Notifications</a>
                        <div class="dropdown-divider"></div>
                        <div class="notifications-menu mCustomScrollbar _mCS_3 mCS-autoHide mCS_no_scrollbar"
                             style="position: relative; overflow: visible;">
                            <div id="mCSB_3" class="mCustomScrollBox mCS-minimal mCSB_vertical mCSB_outside"
                                 style="max-height: none;" tabindex="0">
                                <div id="mCSB_3_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                     style="position:relative; top:0; left:0;" dir="ltr"><a
                                            class="dropdown-item d-flex pb-3" href="#">
                                        <div class="fs-16 text-primary mr-3"><i class="fa fa-thumbs-o-up"></i></div>
                                        <div class=""><strong>Event today</strong></div>
                                    </a> <a class="dropdown-item d-flex pb-3" href="#">
                                        <div class="fs-16 text-primary mr-3"><i class="fa fa-commenting-o"></i></div>
                                        <div class=""><strong>Settings</strong></div>
                                    </a> <a class="dropdown-item d-flex pb-3" href="#">
                                        <div class="fs-16 text-danger mr-3"><i class="fa fa-cogs"></i></div>
                                        <div class=""><strong>Your Admin Lanuch</strong></div>
                                    </a></div>
                            </div>
                            <div id="mCSB_3_scrollbar_vertical"
                                 class="mCSB_scrollTools mCSB_3_scrollbar mCS-minimal mCSB_scrollTools_vertical"
                                 style="display: none;">
                                <div class="mCSB_draggerContainer">
                                    <div id="mCSB_3_dragger_vertical" class="mCSB_dragger"
                                         style="position: absolute; min-height: 50px; top: 0px;">
                                        <div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
                                    </div>
                                    <div class="mCSB_draggerRail"></div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-center">View all Notification</a></div>
                </div><!-- NOTIFICATIONS -->
                <div class="dropdown d-md-flex message"><a class="nav-link icon text-center" data-toggle="dropdown"> <i
                                class="fe fe-mail"></i> <span class="nav-unread badge badge-danger badge-pill">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <div class="message-menu mCustomScrollbar _mCS_5 mCS-autoHide mCS_no_scrollbar"
                             style="position: relative; overflow: visible;">
                            <div id="mCSB_5" class="mCustomScrollBox mCS-minimal mCSB_vertical mCSB_outside"
                                 style="max-height: none;" tabindex="0">
                                <div id="mCSB_5_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                     style="position:relative; top:0; left:0;" dir="ltr"><a
                                            class="dropdown-item d-flex pb-3" href="#"> <span
                                                class="avatar avatar-md brround mr-3 align-self-center cover-image"
                                                data-image-src="../assets/images/users/1.jpg"
                                                style="background: url(&quot;../assets/images/users/1.jpg&quot;) center center;"></span>
                                        <div><strong>Madeleine</strong> Hey! there I' am available....
                                            <div class="small text-muted"> 3 hours ago</div>
                                        </div>
                                    </a> <a class="dropdown-item d-flex pb-3" href="#"> <span
                                                class="avatar avatar-md brround mr-3 align-self-center cover-image"
                                                data-image-src="../assets/images/users/12.jpg"
                                                style="background: url(&quot;../assets/images/users/12.jpg&quot;) center center;"></span>
                                        <div><strong>Anthony</strong> New product Launching...
                                            <div class="small text-muted"> 5 hour ago</div>
                                        </div>
                                    </a> <a class="dropdown-item d-flex pb-3" href="#"> <span
                                                class="avatar avatar-md brround mr-3 align-self-center cover-image"
                                                data-image-src="../assets/images/users/4.jpg"
                                                style="background: url(&quot;../assets/images/users/4.jpg&quot;) center center;"></span>
                                        <div><strong>Olivia</strong> New Schedule Realease......
                                            <div class="small text-muted"> 45 mintues ago</div>
                                        </div>
                                    </a> <a class="dropdown-item d-flex pb-3" href="#"> <span
                                                class="avatar avatar-md brround mr-3 align-self-center cover-image"
                                                data-image-src="../assets/images/users/15.jpg"
                                                style="background: url(&quot;../assets/images/users/15.jpg&quot;) center center;"></span>
                                        <div><strong>Sanderson</strong> New Schedule Realease......
                                            <div class="small text-muted"> 2 days ago</div>
                                        </div>
                                    </a></div>
                            </div>
                            <div id="mCSB_5_scrollbar_vertical"
                                 class="mCSB_scrollTools mCSB_5_scrollbar mCS-minimal mCSB_scrollTools_vertical"
                                 style="display: none;">
                                <div class="mCSB_draggerContainer">
                                    <div id="mCSB_5_dragger_vertical" class="mCSB_dragger"
                                         style="position: absolute; min-height: 50px; top: 0px;">
                                        <div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
                                    </div>
                                    <div class="mCSB_draggerRail"></div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-center">See all Messages</a></div>
                </div><!-- MESSAGE-BOX -->
                <div class="dropdown profile-1"><a href="#" data-toggle="dropdown"
                                                   class="nav-link pr-2 leading-none d-flex"> <span> <img
                                    src="../assets/images/users/15.jpg" alt="profile-user"
                                    class="avatar  profile-user brround cover-image"> </span> </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <div class="drop-heading">
                            <div class="text-center"><h5 class="text-dark mb-0">Devid Antoni</h5> <small
                                        class="text-muted">Administrator</small></div>
                        </div>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item" href="#"> <i class="dropdown-icon mdi mdi-account-outline"></i> Profile
                        </a> <a class="dropdown-item" href="#"> <i class="dropdown-icon  mdi mdi-settings"></i> Settings
                        </a> <a class="dropdown-item" href="#"> <span class="float-right"></span> <i
                                    class="dropdown-icon mdi  mdi-message-outline"></i> Inbox </a> <a
                                class="dropdown-item" href="#"> <i
                                    class="dropdown-icon mdi mdi-comment-check-outline"></i> Message </a>
                        <div class="dropdown-divider mt-0"></div>
                        <a class="dropdown-item" href="#"> <i class="dropdown-icon mdi mdi-compass-outline"></i> Need
                            help? </a> <a class="dropdown-item" href="login.html"> <i
                                    class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out </a></div>
                </div>
                <div class="dropdown d-md-flex header-settings"><a href="#" class="nav-link icon "
                                                                   data-toggle="sidebar-right"
                                                                   data-target=".sidebar-right"> <i
                                class="fe fe-align-right"></i> </a></div><!-- SIDE-MENU --> </div>
        </div> <!--APP-SIDEBAR--> <!--APP-SIDEBAR-->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <aside class="app-sidebar mCustomScrollbar _mCS_1 mCS-autoHide" style="overflow: visible;">
            <div id="mCSB_1" class="mCustomScrollBox mCS-minimal mCSB_vertical mCSB_outside" style="max-height: none;"
                 tabindex="0">
                <div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                    <div class="sidebar-user-settings">
                        <div class="app-sidebar__user mb-4 mt-4">
                            <div class="dropdown user-pro-body text-center"><a href="#" class="user-box">
                                    <div class="user-pic"><span class="avatar avatar-md brround cover-image"
                                                                data-image-src="../assets/images/users/15.jpg"
                                                                style="background: url(&quot;../assets/images/users/15.jpg&quot;) center center;"> <span
                                                    class="avatar-status bg-primary"></span><span
                                                    class="avatar-border"></span> </span></div>
                                    <div class="user-info"><h5 class=" mb-1 font-weight-bold text-dark">Devid
                                            Antoni</h5> <span class="text-muted app-sidebar__user-name text-sm">Administrator</span>
                                    </div>
                                </a></div>
                        </div>
                    </div>
                    <ul class="side-menu">
                        <li><h3>FLAIRA</h3></li>
                        <li class="slide"><a class="side-menu__item" data-toggle="slide" href="#"><i
                                        class="angle fe fe-chevron-right"></i><span
                                        class="side-menu__label">Dashboard</span><i
                                        class="side-menu__icon fe fe-airplay"></i></a>
                            <ul class="slide-menu">
                                <li><a href="index.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Left Menu</a></li>
                                <li><a href="index2.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Horizontal Menu</a></li>
                            </ul>
                        </li>
                        <li><h3>Widgets &amp; Maps</h3></li>
                        <li><a class="side-menu__item" href="widgets.html"><span class="side-menu__label">Widgets</span><i
                                        class="side-menu__icon fe fe-layers"></i></a></li>
                        <li><a class="side-menu__item" href="maps.html"><span class="side-menu__label">Maps</span><i
                                        class="side-menu__icon fe fe-map-pin"></i></a></li>
                        <li><h3>Elements</h3></li>
                        <li class="slide"><a class="side-menu__item" data-toggle="slide" href="#"><i
                                        class="angle fe fe-chevron-right"></i><span
                                        class="side-menu__label">Components</span><i
                                        class="side-menu__icon fe fe-package"></i></a>
                            <ul class="slide-menu">
                                <li><a href="cards.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Cards design</a></li>
                                <li><a href="calendar.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Default calendar</a>
                                </li>
                                <li><a href="calendar2.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Full calendar</a></li>
                                <li><a href="chat.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Default Chat</a></li>
                                <li><a href="notify.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Notifications</a></li>
                                <li><a href="sweetalert.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Sweet alerts</a></li>
                                <li><a href="rangeslider.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Range slider</a></li>
                                <li><a href="scroll.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Content Scroll bar</a>
                                </li>
                                <li><a href="loaders.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Loaders</a></li>
                                <li><a href="counters.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Counters</a></li>
                                <li><a href="rating.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Rating</a></li>
                                <li><a href="timeline.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Timeline</a></li>
                            </ul>
                        </li>
                        <li class="slide"><a class="side-menu__item" data-toggle="slide" href="#"><i
                                        class="angle fe fe-chevron-right"></i><span
                                        class="side-menu__label">Elements</span><i
                                        class="side-menu__icon fe fe-grid"></i></a>
                            <ul class="slide-menu">
                                <li><a href="alerts.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Alerts</a></li>
                                <li><a href="buttons.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Buttons</a></li>
                                <li><a href="colors.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Colors</a></li>
                                <li><a href="avatarsquare.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Avatar-Square</a></li>
                                <li><a href="avatar-round.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Avatar-Rounded</a></li>
                                <li><a href="avatar-radius.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Avatar-Radius</a></li>
                                <li><a href="dropdown.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Drop downs</a></li>
                                <li><a href="list.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> List</a></li>
                                <li><a href="tags.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Tags</a></li>
                                <li><a href="pagination.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Pagination</a></li>
                                <li><a href="navigation.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Navigation</a></li>
                                <li><a href="typography.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Typography</a></li>
                                <li><a href="breadcrumbs.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Breadcrumbs</a></li>
                                <li><a href="badge.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Badges</a></li>
                                <li><a href="jumbotron.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Jumbotron</a></li>
                                <li><a href="panels.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Panels</a></li>
                                <li><a href="thumbnails.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Thumbnails</a></li>
                            </ul>
                        </li>
                        <li class="slide is-expanded"><a class="side-menu__item active" data-toggle="slide" href="#"><i
                                        class="angle fe fe-chevron-right"></i><span class="side-menu__label">Advanced Elements</span><i
                                        class="side-menu__icon fe fe-database"></i></a>
                            <ul class="slide-menu">
                                <li><a href="mediaobject.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Media Object</a></li>
                                <li><a href="accordion.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Accordions</a></li>
                                <li class="active"><a href="tabs.html" class="slide-item active"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Tabs</a></li>
                                <li><a href="chart.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Charts</a></li>
                                <li><a href="modal.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Modal</a></li>
                                <li><a href="tooltipandpopover.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Tooltip and popover</a>
                                </li>
                                <li><a href="progress.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Progress</a></li>
                                <li><a href="carousel.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Carousels</a></li>
                                <li><a href="headers.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Headers</a></li>
                                <li><a href="footers.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Footers</a></li>
                                <li><a href="users-list.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> User List</a></li>
                                <li><a href="search.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Search</a></li>
                                <li><a href="crypto-currencies.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Crypto-currencies</a>
                                </li>
                            </ul>
                        </li>
                        <li><h3>Charts&amp; Tables</h3></li>
                        <li class="slide"><a class="side-menu__item" data-toggle="slide" href="#"><i
                                        class="angle fe fe-chevron-right"></i><span
                                        class="side-menu__label">Charts</span><i
                                        class="side-menu__icon fe fe-activity"></i></a>
                            <ul class="slide-menu">
                                <li><a href="chart-chartist.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Chart Js</a></li>
                                <li><a href="chart-flot.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Flot Charts</a></li>
                                <li><a href="chart-echart.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> ECharts</a></li>
                                <li><a href="chart-morris.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Morris Charts</a></li>
                                <li><a href="chart-nvd3.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Nvd3 Charts</a></li>
                                <li><a href="charts.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> C3 Bar Charts</a></li>
                                <li><a href="chart-line.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> C3 Line Charts</a></li>
                                <li><a href="chart-donut.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> C3 Donut Charts</a></li>
                                <li><a href="chart-pie.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> C3 Pie charts</a></li>
                            </ul>
                        </li>
                        <li class="slide"><a class="side-menu__item" data-toggle="slide" href="#"><i
                                        class="angle fe fe-chevron-right"></i><span
                                        class="side-menu__label">Tables</span><i
                                        class="side-menu__icon fe fe-calendar"></i></a>
                            <ul class="slide-menu">
                                <li><a href="tables.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Default table</a></li>
                                <li><a href="datatable.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Data Tables</a></li>
                            </ul>
                        </li>
                        <li><h3>Forms</h3></li>
                        <li class="slide"><a class="side-menu__item" data-toggle="slide" href="#"><i
                                        class="angle fe fe-chevron-right"></i><span
                                        class="side-menu__label">Forms</span><i class="side-menu__icon fe fe-file"></i></a>
                            <ul class="slide-menu">
                                <li><a href="form-elements.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Form Elements</a></li>
                                <li><a href="wysiwyag.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Form Editor</a></li>
                                <li><a href="form-wizard.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Form Wizard</a></li>
                            </ul>
                        </li>
                        <li><h3>Icons &amp; Pages </h3></li>
                        <li class="slide"><a class="side-menu__item" data-toggle="slide" href="#"><i
                                        class="angle fe fe-chevron-right"></i><span
                                        class="side-menu__label">Icons</span><i
                                        class="side-menu__icon fe fe-shield"></i></a>
                            <ul class="slide-menu">
                                <li><a href="icons.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Font Awesome</a></li>
                                <li><a href="icons2.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Material Design
                                        Icons</a></li>
                                <li><a href="icons3.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Simple Line Icons</a>
                                </li>
                                <li><a href="icons4.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Feather Icons</a></li>
                                <li><a href="icons5.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Ionic Icons</a></li>
                                <li><a href="icons6.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Flag Icons</a></li>
                                <li><a href="icons7.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> pe7 Icons</a></li>
                                <li><a href="icons8.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Themify Icons</a></li>
                                <li><a href="icons9.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Typicons Icons</a></li>
                                <li><a href="icons10.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Weather Icons</a></li>
                            </ul>
                        </li>
                        <li class="slide"><a class="side-menu__item" data-toggle="slide" href="#"><i
                                        class="angle fe fe-chevron-right"></i><span
                                        class="side-menu__label">Pages</span><i class="side-menu__icon fe fe-copy"></i></a>
                            <ul class="slide-menu">
                                <li><a href="profile.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Profile</a></li>
                                <li><a href="editprofile.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Edit Profile</a></li>
                                <li><a href="email.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Mail-Inbox</a></li>
                                <li><a href="emailservices.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Mail-Compose</a></li>
                                <li><a href="gallery.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Gallery</a></li>
                                <li><a href="about.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> About Company</a></li>
                                <li><a href="services.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Services</a></li>
                                <li><a href="faq.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> FAQS</a></li>
                                <li><a href="terms.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Terms</a></li>
                                <li><a href="invoice.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Invoice</a></li>
                                <li><a href="pricing.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Pricing Tables</a></li>
                                <li><a href="blog.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Blog</a></li>
                                <li><a href="empty.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Empty Page</a></li>
                                <li><a href="construction.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Under Construction</a>
                                </li>
                            </ul>
                        </li>
                        <li><h3>E-Commerce</h3></li>
                        <li class="slide"><a class="side-menu__item" data-toggle="slide" href="#"><i
                                        class="angle fe fe-chevron-right"></i><span
                                        class="side-menu__label">E-Commerce</span><i
                                        class="side-menu__icon fe fe-shopping-cart"></i></a>
                            <ul class="slide-menu">
                                <li><a href="shop.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Shop</a></li>
                                <li><a href="shop-description.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Product Details</a></li>
                                <li><a href="cart.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Shopping Cart</a></li>
                            </ul>
                        </li>
                        <li><h3>Custom &amp; Error </h3></li>
                        <li class="slide"><a class="side-menu__item" data-toggle="slide" href="#"><i
                                        class="angle fe fe-chevron-right"></i><span class="side-menu__label">Custom Pages</span><i
                                        class="side-menu__icon fe fe-clipboard"></i></a>
                            <ul class="slide-menu">
                                <li><a href="login.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Login</a></li>
                                <li><a href="register.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Register</a></li>
                                <li><a href="forgot-password.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Forgot Password</a></li>
                                <li><a href="lockscreen.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> Lock screen</a></li>
                            </ul>
                        </li>
                        <li class="slide"><a class="side-menu__item" data-toggle="slide" href="#"><i
                                        class="angle fe fe-chevron-right"></i><span
                                        class="side-menu__label">Error Pages</span><i
                                        class="side-menu__icon fe fe-alert-triangle"></i></a>
                            <ul class="slide-menu">
                                <li><a href="400.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> 400</a></li>
                                <li><a href="401.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> 401</a></li>
                                <li><a href="403.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> 403</a></li>
                                <li><a href="404.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> 404</a></li>
                                <li><a href="500.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> 500</a></li>
                                <li><a href="503.html" class="slide-item"><i
                                                class="sidemenu-icon fe fe-chevrons-right"></i> 503</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="mCSB_1_scrollbar_vertical"
                 class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal mCSB_scrollTools_vertical"
                 style="display: block;">
                <div class="mCSB_draggerContainer">
                    <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                         style="position: absolute; min-height: 50px; display: block; height: 226px; max-height: 591px; top: 0px;">
                        <div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
                    </div>
                    <div class="mCSB_draggerRail"></div>
                </div>
            </div>
        </aside> <!--/APP-SIDEBAR--> <!-- Mobile Header -->
        <div class="mobile-header">
            <div class="container-fluid">
                <div class="d-flex">
                    <div class="app-sidebar__toggle" data-toggle="sidebar"><a class="open-toggle" href="#"><i
                                    class="fe fe-align-left"></i></a> <a class="close-toggle" href="#"><i
                                    class="fe fe-x"></i></a></div>
                    <a class="header-brand" href="index.html"> <img src="../assets/images/brand/logo.png"
                                                                    class="header-brand-img desktop-logo" alt="logo">
                    </a> <a class="header-brand header-brand1" href="index.html"> <img
                                src="../assets/images/brand/logo-white.png" class="header-brand-img desktop-logo"
                                alt="logo"> </a><!-- LOGO -->
                    <div class="d-flex order-lg-2 ml-auto header-right-icons">
                        <button class="navbar-toggler navresponsive-toggler d-md-none" type="button"
                                data-toggle="collapse" data-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation"><span
                                    class="navbar-toggler-icon fe fe-more-vertical text-white"></span></button>
                        <div class="dropdown profile-1"><a href="#" data-toggle="dropdown"
                                                           class="nav-link pr-2 leading-none d-flex"> <span> <img
                                            src="../assets/images/users/15.jpg" alt="profile-user"
                                            class="avatar  profile-user brround cover-image"> </span> </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <div class="drop-heading">
                                    <div class="text-center"><h5 class="text-dark mb-0">Devid Antoni</h5> <small
                                                class="text-muted">Administrator</small></div>
                                </div>
                                <div class="dropdown-divider m-0"></div>
                                <a class="dropdown-item" href="#"> <i class="dropdown-icon mdi mdi-account-outline"></i>
                                    Profile </a> <a class="dropdown-item" href="#"> <i
                                            class="dropdown-icon  mdi mdi-settings"></i> Settings </a> <a
                                        class="dropdown-item" href="#"> <span class="float-right"></span> <i
                                            class="dropdown-icon mdi  mdi-message-outline"></i> Inbox </a> <a
                                        class="dropdown-item" href="#"> <i
                                            class="dropdown-icon mdi mdi-comment-check-outline"></i> Message </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"> <i class="dropdown-icon mdi mdi-compass-outline"></i>
                                    Need help? </a> <a class="dropdown-item" href="login.html"> <i
                                            class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out </a></div>
                        </div>
                        <div class="dropdown d-md-flex header-settings"><a href="#" class="nav-link icon "
                                                                           data-toggle="sidebar-right"
                                                                           data-target=".sidebar-right"> <i
                                        class="fe fe-align-right"></i> </a></div><!-- SIDE-MENU --> </div>
                </div>
            </div>
        </div>
        <div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <div class="d-flex order-lg-2 ml-auto">
                    <div class="d-sm-flex"><a href="#" class="nav-link icon search-btn"> <i class="fe fe-search"></i>
                        </a>
                        <div class="search-area">
                            <div class="close-btn pull-right">
                                <button class="btn"><i class="fe fe-x"></i></button>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="input-group form-btn">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><i class="fa fa-search"></i></button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search here..."
                                               aria-label="Recipient's username" aria-describedby="button-addon2"></div>
                                </div>
                            </form>
                        </div>
                    </div><!-- SEARCH -->
                    <div class="dropdown d-md-flex"><a class="nav-link icon full-screen-link nav-link-bg"> <i
                                    class="fe fe-maximize fullscreen-button"></i> </a></div><!-- FULL-SCREEN -->
                    <div class="dropdown d-md-flex notifications"><a class="nav-link icon" data-toggle="dropdown"> <i
                                    class="fe fe-bell"></i> </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <div class="notifications-menu mCustomScrollbar _mCS_4 mCS-autoHide mCS_no_scrollbar"
                                 style="position: relative; overflow: visible;">
                                <div id="mCSB_4" class="mCustomScrollBox mCS-minimal mCSB_vertical mCSB_outside"
                                     style="max-height: none;" tabindex="0">
                                    <div id="mCSB_4_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                         style="position:relative; top:0; left:0;" dir="ltr"><a
                                                class="dropdown-item d-flex pb-3" href="#">
                                            <div class="fs-16 text-success mr-3"><i class="fa fa-thumbs-o-up"></i></div>
                                            <div class=""><strong>Someone likes our posts.</strong></div>
                                        </a> <a class="dropdown-item d-flex pb-3" href="#">
                                            <div class="fs-16 text-primary mr-3"><i class="fa fa-commenting-o"></i>
                                            </div>
                                            <div class=""><strong>3 New Comments.</strong></div>
                                        </a> <a class="dropdown-item d-flex pb-3" href="#">
                                            <div class="fs-16 text-danger mr-3"><i class="fa fa-cogs"></i></div>
                                            <div class=""><strong>Server Rebooted</strong></div>
                                        </a></div>
                                </div>
                                <div id="mCSB_4_scrollbar_vertical"
                                     class="mCSB_scrollTools mCSB_4_scrollbar mCS-minimal mCSB_scrollTools_vertical"
                                     style="display: none;">
                                    <div class="mCSB_draggerContainer">
                                        <div id="mCSB_4_dragger_vertical" class="mCSB_dragger"
                                             style="position: absolute; min-height: 50px; top: 0px;">
                                            <div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
                                        </div>
                                        <div class="mCSB_draggerRail"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item text-center">View all Notification</a></div>
                    </div><!-- NOTIFICATIONS -->
                    <div class="dropdown d-md-flex message"><a class="nav-link icon text-center" data-toggle="dropdown">
                            <i class="fe fe-mail"></i> </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                            <div class="message-menu mCustomScrollbar _mCS_6 mCS-autoHide mCS_no_scrollbar"
                                 style="position: relative; overflow: visible;">
                                <div id="mCSB_6" class="mCustomScrollBox mCS-minimal mCSB_vertical mCSB_outside"
                                     style="max-height: none;" tabindex="0">
                                    <div id="mCSB_6_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                                         style="position:relative; top:0; left:0;" dir="ltr"><a
                                                class="dropdown-item d-flex pb-3" href="#"> <span
                                                    class="avatar avatar-md brround mr-3 align-self-center cover-image"
                                                    data-image-src="../assets/images/users/1.jpg"
                                                    style="background: url(&quot;../assets/images/users/1.jpg&quot;) center center;"></span>
                                            <div><strong>Madeleine</strong> Hey! there I' am available....
                                                <div class="small text-muted"> 3 hours ago</div>
                                            </div>
                                        </a> <a class="dropdown-item d-flex pb-3" href="#"> <span
                                                    class="avatar avatar-md brround mr-3 align-self-center cover-image"
                                                    data-image-src="../assets/images/users/12.jpg"
                                                    style="background: url(&quot;../assets/images/users/12.jpg&quot;) center center;"></span>
                                            <div><strong>Anthony</strong> New product Launching...
                                                <div class="small text-muted"> 5 hour ago</div>
                                            </div>
                                        </a> <a class="dropdown-item d-flex pb-3" href="#"> <span
                                                    class="avatar avatar-md brround mr-3 align-self-center cover-image"
                                                    data-image-src="../assets/images/users/4.jpg"
                                                    style="background: url(&quot;../assets/images/users/4.jpg&quot;) center center;"></span>
                                            <div><strong>Olivia</strong> New Schedule Realease......
                                                <div class="small text-muted"> 45 mintues ago</div>
                                            </div>
                                        </a> <a class="dropdown-item d-flex pb-3" href="#"> <span
                                                    class="avatar avatar-md brround mr-3 align-self-center cover-image"
                                                    data-image-src="../assets/images/users/15.jpg"
                                                    style="background: url(&quot;../assets/images/users/15.jpg&quot;) center center;"></span>
                                            <div><strong>Sanderson</strong> New Schedule Realease......
                                                <div class="small text-muted"> 2 days ago</div>
                                            </div>
                                        </a></div>
                                </div>
                                <div id="mCSB_6_scrollbar_vertical"
                                     class="mCSB_scrollTools mCSB_6_scrollbar mCS-minimal mCSB_scrollTools_vertical"
                                     style="display: none;">
                                    <div class="mCSB_draggerContainer">
                                        <div id="mCSB_6_dragger_vertical" class="mCSB_dragger"
                                             style="position: absolute; min-height: 50px; top: 0px;">
                                            <div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
                                        </div>
                                        <div class="mCSB_draggerRail"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item text-center">See all Messages</a></div>
                    </div><!-- MESSAGE-BOX --> </div>
            </div>
        </div> <!-- /Mobile Header --> <!--app-content open-->
        <div class="app-content">
            <div class="side-app"> <!-- PAGE-HEADER -->
                <div class="page-header">
                    <ol class="breadcrumb"><!-- breadcrumb -->
                        <li class="breadcrumb-item"><a href="#">Advanced Elements</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tabs</li>
                    </ol><!-- End breadcrumb -->
                    <div class="ml-auto">
                        <div class="input-group"><a href="#" class="btn btn-white button-icon mr-3 mt-1 mb-1"> <span><i
                                            class="fe fe-shopping-cart"></i>Buy Now</span> </a> <a href="#"
                                                                                                   class="btn btn-white button-icon mr-3 mt-1 mb-1">
                                <span><i class="fe fe-printer"></i>Print</span> </a> <a href="#"
                                                                                        class="btn btn-primary button-icon mr-3 mt-1 mb-1">
                                <span><i class="fe fe-download"></i>Download</span> </a></div>
                    </div>
                </div> <!-- PAGE-HEADER END --> <!-- ROW-1 OPEN -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header"><h3 class="card-title">Tabs style</h3></div>
                            <div class="card-body p-6">
                                <div class="panel panel-primary">
                                    <div class="tab-menu-heading">
                                        <div class="tabs-menu "> <!-- Tabs -->
                                            <ul class="nav panel-tabs">
                                                <li><a href="#tab1" class="active" data-toggle="tab">Tab 1</a></li>
                                                <li><a href="#tab2" data-toggle="tab">Tab 2</a></li>
                                                <li><a href="#tab3" data-toggle="tab">Tab 3</a></li>
                                                <li><a href="#tab4" data-toggle="tab">Tab 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="panel-body tabs-menu-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active " id="tab1"><p>page editors now use Lorem Ipsum
                                                    as their default model text, and a search for 'lorem ipsum' will
                                                    uncover many web sites still in their infancy. Various versions have
                                                    evolved over the years, sometimes by accident, sometimes on purpose
                                                    (injected humour and the like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                                    erat, sed diam voluptua. At vero eos et</p></div>
                                            <div class="tab-pane  " id="tab2"><p> default model text, and a search for
                                                    'lorem ipsum' will uncover many web sites still in their infancy.
                                                    Various versions have evolved over the years, sometimes by accident,
                                                    sometimes on purpose (injected humour and the like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                                    erat, sed diam voluptua. At vero eos et</p></div>
                                            <div class="tab-pane " id="tab3"><p>over the years, sometimes by accident,
                                                    sometimes on purpose (injected humour and the like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                                    erat, sed diam voluptua. At vero eos et</p></div>
                                            <div class="tab-pane  " id="tab4"><p>page editors now use Lorem Ipsum as
                                                    their default model text, and a search for 'lorem ipsum' will
                                                    uncover many web sites still in their infancy. Various versions have
                                                    evolved over the years, sometimes by accident, sometimes on purpose
                                                    (injected humour and the like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                                    erat, sed diam voluptua. At vero eos et</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- COL-END -->
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header"><h3 class="card-title">Tabs Style</h3></div>
                            <div class="card-body p-6">
                                <div class="panel panel-primary">
                                    <div class=" tab-menu-heading">
                                        <div class="tabs-menu1 "> <!-- Tabs -->
                                            <ul class="nav panel-tabs">
                                                <li><a href="#tab5" class="" data-toggle="tab">Tab 1</a></li>
                                                <li><a href="#tab6" data-toggle="tab" class="">Tab 2</a></li>
                                                <li><a href="#tab7" data-toggle="tab" class="active">Tab 3</a></li>
                                                <li><a href="#tab8" data-toggle="tab">Tab 4</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="panel-body tabs-menu-body">
                                        <div class="tab-content">
                                            <div class="tab-pane" id="tab5"><p>page editors now use Lorem Ipsum as their
                                                    default model text, and a search for 'lorem ipsum' will uncover many
                                                    web sites still in their infancy. Various versions have evolved over
                                                    the years, sometimes by accident, sometimes on purpose (injected
                                                    humour and the like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                                    erat, sed diam voluptua. At vero eos et</p></div>
                                            <div class="tab-pane" id="tab6"><p> default model text, and a search for
                                                    'lorem ipsum' will uncover many web sites still in their infancy.
                                                    Various versions have evolved over the years, sometimes by accident,
                                                    sometimes on purpose (injected humour and the like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                                    erat, sed diam voluptua. At vero eos et</p></div>
                                            <div class="tab-pane active" id="tab7"><p>over the years, sometimes by
                                                    accident, sometimes on purpose (injected humour and the like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                                    erat, sed diam voluptua. At vero eos et</p></div>
                                            <div class="tab-pane " id="tab8"><p>page editors now use Lorem Ipsum as
                                                    their default model text, and a search for 'lorem ipsum' will
                                                    uncover many web sites still in their infancy. Various versions have
                                                    evolved over the years, sometimes by accident, sometimes on purpose
                                                    (injected humour and the like</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                                    nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                                    erat, sed diam voluptua. At vero eos et</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- COL-END -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"><h3 class="card-title">Tabs Style</h3></div>
                            <div class="card-body p-6">
                                <div class="panel panel-primary">
                                    <div class="tab_wrapper first_tab">
                                        <ul class="tab_list">
                                            <li class="" rel="tab_1_1">Tab 1</li>
                                            <li rel="tab_1_2" class="">Tab 2</li>
                                            <li rel="tab_1_3" class="">Tab 3</li>
                                            <li rel="tab_1_4" class="active">Tab 4</li>
                                        </ul>
                                        <div class="content_wrapper">
                                            <div title="tab_1_1" class="accordian_header tab_1_1">Tab 1<span
                                                        class="arrow"></span></div>
                                            <div class="tab_content first tab_1_1" title="tab_1_1"
                                                 style="display: none;"><p>It is a long established fact that a reader
                                                    will be distracted by the readable content of a page when looking at
                                                    its layout. The point of using Lorem Ipsum is that it has a
                                                    more-or-less normal distribution of letters, as opposed to using
                                                    'Content here, content here', making it look like readable English.
                                                    Many desktop publishing packages and web page editors now use Lorem
                                                    Ipsum as their default model text, and a search for 'lorem ipsum'
                                                    will uncover many web sites still in their infancy. Various versions
                                                    have evolved over the years, sometimes by accident, sometimes on
                                                    purpose (injected humour and the like) It is a long established fact
                                                    that a reader will be distracted by the readable content of a page
                                                    when looking at its layout. The point of using Lorem Ipsum is that
                                                    it has a more-or-less normal distribution of letters, as opposed to
                                                    using 'Content here, content here', making it look like readable
                                                    English. Many desktop publishing packages and web page editors now
                                                    use Lorem Ipsum as their default model text, and a search for 'lorem
                                                    ipsum' will uncover many web sites still in their infancy. Various
                                                    versions have evolved over the years, sometimes by accident,
                                                    sometimes on purpose (injected humour and the like).</p></div>
                                            <div title="tab_1_2" class="accordian_header tab_1_2 undefined">Tab 2<span
                                                        class="arrow"></span></div>
                                            <div class="tab_content tab_1_2" title="tab_1_2" style="display: none;"><p>
                                                    Contrary to popular belief, Lorem Ipsum is not simply random text.
                                                    It has roots in a piece of classical Latin literature from 45 BC,
                                                    making it over 2000 years old. Richard McClintock, a Latin professor
                                                    at Hampden-Sydney College in Virginia, looked up one of the more
                                                    obscure Latin words, consectetur, from a Lorem Ipsum passage, and
                                                    going through the cites of the word in classical literature,
                                                    discovered the undoubtable source. Lorem Ipsum comes from sections
                                                    1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
                                                    of Good and Evil) by Cicero, written in 45 BC. This book is a
                                                    treatise on the theory of ethics, very popular during the
                                                    Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit
                                                    amet..", comes from a line in section 1.10.32. Contrary to popular
                                                    belief, Lorem Ipsum is not simply random text. It has roots in a
                                                    piece of classical Latin literature from 45 BC, making it over 2000
                                                    years old. Richard McClintock, a Latin professor at Hampden-Sydney
                                                    College in Virginia, looked up one of the more obscure Latin words,
                                                    consectetur, from a Lorem Ipsum passage, and going through the cites
                                                    of the word in classical literature, discovered the undoubtable
                                                    source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de
                                                    Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by
                                                    Cicero, written in 45 BC. This book is a treatise on the theory of
                                                    ethics, very popular during the Renaissance. The first line of Lorem
                                                    Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section
                                                    1.10.32.</p></div>
                                            <div title="tab_1_3" class="accordian_header tab_1_3 undefined">Tab 3<span
                                                        class="arrow"></span></div>
                                            <div class="tab_content tab_1_3" title="tab_1_3" style="display: none;"><p>
                                                    There are many variations of passages of Lorem Ipsum available, but
                                                    the majority have suffered alteration in some form, by injected
                                                    humour, or randomised words which don't look even slightly
                                                    believable. If you are going to use a passage of Lorem Ipsum, you
                                                    need to be sure there isn't anything embarrassing hidden in the
                                                    middle of text. All the Lorem Ipsum generators on the Internet tend
                                                    to repeat predefined chunks as necessary, making this the first true
                                                    generator on the Internet. It uses a dictionary of over 200 Latin
                                                    words, combined with a handful of model sentence structures, to
                                                    generate Lorem Ipsum which looks reasonable. The generated Lorem
                                                    Ipsum is therefore always free from repetition, injected humour, or
                                                    non-characteristic words etc. There are many variations of passages
                                                    of Lorem Ipsum available, but the majority have suffered alteration
                                                    in some form, by injected humour, or randomised words which don't
                                                    look even slightly believable. If you are going to use a passage of
                                                    Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                                    hidden in the middle of text. All the Lorem Ipsum generators on the
                                                    Internet tend to repeat predefined chunks as necessary, making this
                                                    the first true generator on the Internet. It uses a dictionary of
                                                    over 200 Latin words, combined with a handful of model sentence
                                                    structures, to generate Lorem Ipsum which looks reasonable. The
                                                    generated Lorem Ipsum is therefore always free from repetition,
                                                    injected humour, or non-characteristic words etc.</p></div>
                                            <div title="tab_1_4" class="accordian_header tab_1_4 undefined active">Tab 4<span
                                                        class="arrow"></span></div>
                                            <div class="tab_content last tab_1_4 active" title="tab_1_4"
                                                 style="display: block;"><p>Lorem Ipsum is simply dummy text of the
                                                    printing and typesetting industry. Lorem Ipsum has been the
                                                    industry's standard dummy text ever since the 1500s, when an unknown
                                                    printer took a galley of type and scrambled it to make a type
                                                    specimen book. It has survived not only five centuries, but also the
                                                    leap into electronic typesetting, remaining essentially unchanged.
                                                    It was popularised in the 1960s with the release of Letraset sheets
                                                    containing Lorem Ipsum passages, and more recently with desktop
                                                    publishing software like Aldus PageMaker including versions of Lorem
                                                    Ipsum. Lorem Ipsum is simply dummy text of the printing and
                                                    typesetting industry. Lorem Ipsum has been the industry's standard
                                                    dummy text ever since the 1500s, when an unknown printer took a
                                                    galley of type and scrambled it to make a type specimen book. It has
                                                    survived not only five centuries, but also the leap into electronic
                                                    typesetting, remaining essentially unchanged. It was popularised in
                                                    the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                                    passages, and more recently with desktop publishing software like
                                                    Aldus PageMaker including versions of Lorem Ipsum. </p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header"><h3 class="card-title">Tabs on right side</h3></div>
                            <div class="card-body p-6">
                                <div class="tab_wrapper second_tab right_side">
                                    <ul class="tab_list">
                                        <li class="" rel="tab_1_1">Tab 1</li>
                                        <li rel="tab_1_2" class="">Tab 2</li>
                                        <li rel="tab_1_3" class="active">Tab 3</li>
                                        <li rel="tab_1_4">Tab 4</li>
                                        <li rel="tab_1_5">Tab 5</li>
                                        <li rel="tab_1_6">Tab 6</li>
                                    </ul>
                                    <div class="content_wrapper">
                                        <div title="tab_1_1" class="accordian_header tab_1_1">Tab 1<span
                                                    class="arrow"></span></div>
                                        <div class="tab_content first tab_1_1" title="tab_1_1" style="display: none;">
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. The point of
                                                using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                letters, as opposed to using 'Content here, content here', making it
                                                look like readable English. Many desktop publishing packages and web
                                                page editors now use Lorem Ipsum as their default model text, and a
                                                search for 'lorem ipsum' will uncover many web sites still in their
                                                infancy. Various versions have evolved over the years, sometimes by
                                                accident, sometimes on purpose (injected humour and the like) It is a
                                                long established fact that a reader will be distracted by the readable
                                                content of a page when looking at its layout. The point of using Lorem
                                                Ipsum is that it has a more-or-less normal distribution of letters, as
                                                opposed to using 'Content here, content here', making it look like
                                                readable English. Many desktop publishing packages and web page editors
                                                now use Lorem Ipsum as their default model text, and a search for 'lorem
                                                ipsum' will uncover many web sites still in their infancy. Various
                                                versions have evolved over the years, sometimes by accident, sometimes
                                                on purpose (injected humour and the like).</p></div>
                                        <div title="tab_1_2" class="accordian_header tab_1_2 undefined">Tab 2<span
                                                    class="arrow"></span></div>
                                        <div class="tab_content tab_1_2" title="tab_1_2" style="display: none;"><p>
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                                has roots in a piece of classical Latin literature from 45 BC, making it
                                                over 2000 years old. Richard McClintock, a Latin professor at
                                                Hampden-Sydney College in Virginia, looked up one of the more obscure
                                                Latin words, consectetur, from a Lorem Ipsum passage, and going through
                                                the cites of the word in classical literature, discovered the
                                                undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33
                                                of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by
                                                Cicero, written in 45 BC. This book is a treatise on the theory of
                                                ethics, very popular during the Renaissance. The first line of Lorem
                                                Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section
                                                1.10.32. Contrary to popular belief, Lorem Ipsum is not simply random
                                                text. It has roots in a piece of classical Latin literature from 45 BC,
                                                making it over 2000 years old. Richard McClintock, a Latin professor at
                                                Hampden-Sydney College in Virginia, looked up one of the more obscure
                                                Latin words, consectetur, from a Lorem Ipsum passage, and going through
                                                the cites of the word in classical literature, discovered the
                                                undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33
                                                of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by
                                                Cicero, written in 45 BC. This book is a treatise on the theory of
                                                ethics, very popular during the Renaissance. The first line of Lorem
                                                Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section
                                                1.10.32.</p></div>
                                        <div title="tab_1_3" class="accordian_header tab_1_3 undefined active">Tab
                                            3<span class="arrow"></span></div>
                                        <div class="tab_content tab_1_3 active" title="tab_1_3" style="display: block;">
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. The point of
                                                using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                letters, as opposed to using 'Content here, content here', making it
                                                look like readable English. Many desktop publishing packages and web
                                                page editors now use Lorem Ipsum as their default model text, and a
                                                search for 'lorem ipsum' will uncover many web sites still in their
                                                infancy. Various versions have evolved over the years, sometimes by
                                                accident, sometimes on purpose (injected humour and the like) It is a
                                                long established fact that a reader will be distracted by the readable
                                                content of a page when looking at its layout. The point of using Lorem
                                                Ipsum is that it has a more-or-less normal distribution of letters, as
                                                opposed to using 'Content here, content here', making it look like
                                                readable English. Many desktop publishing packages and web page editors
                                                now use Lorem Ipsum as their default model text, and a search for 'lorem
                                                ipsum' will uncover many web sites still in their infancy. Various
                                                versions have evolved over the years, sometimes by accident, sometimes
                                                on purpose (injected humour and the like).</p></div>
                                        <div title="tab_1_4" class="accordian_header tab_1_4 undefined">Tab 4<span
                                                    class="arrow"></span></div>
                                        <div class="tab_content tab_1_4" title="tab_1_4" style="display: none;"><p>
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                                has roots in a piece of classical Latin literature from 45 BC, making it
                                                over 2000 years old. Richard McClintock, a Latin professor at
                                                Hampden-Sydney College in Virginia, looked up one of the more obscure
                                                Latin words, consectetur, from a Lorem Ipsum passage, and going through
                                                the cites of the word in classical literature, discovered the
                                                undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33
                                                of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by
                                                Cicero, written in 45 BC. This book is a treatise on the theory of
                                                ethics, very popular during the Renaissance. The first line of Lorem
                                                Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section
                                                1.10.32. Contrary to popular belief, Lorem Ipsum is not simply random
                                                text. It has roots in a piece of classical Latin literature from 45 BC,
                                                making it over 2000 years old. Richard McClintock, a Latin professor at
                                                Hampden-Sydney College in Virginia, looked up one of the more obscure
                                                Latin words, consectetur, from a Lorem Ipsum passage, and going through
                                                the cites of the word in classical literature, discovered the
                                                undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33
                                                of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by
                                                Cicero, written in 45 BC. This book is a treatise on the theory of
                                                ethics, very popular during the Renaissance. The first line of Lorem
                                                Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section
                                                1.10.32.</p></div>
                                        <div title="tab_1_5" class="accordian_header tab_1_5 undefined">Tab 5<span
                                                    class="arrow"></span></div>
                                        <div class="tab_content tab_1_5" title="tab_1_5" style="display: none;"><p>There
                                                are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which don't look even slightly believable. If you are
                                                going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                                anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                                                generators on the Internet tend to repeat predefined chunks as
                                                necessary, making this the first true generator on the Internet. It uses
                                                a dictionary of over 200 Latin words, combined with a handful of model
                                                sentence structures, to generate Lorem Ipsum which looks reasonable. The
                                                generated Lorem Ipsum is therefore always free from repetition, injected
                                                humour, or non-characteristic words etc. There are many variations of
                                                passages of Lorem Ipsum available, but the majority have suffered
                                                alteration in some form, by injected humour, or randomised words which
                                                don't look even slightly believable. If you are going to use a passage
                                                of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                                                hidden in the middle of text. All the Lorem Ipsum generators on the
                                                Internet tend to repeat predefined chunks as necessary, making this the
                                                first true generator on the Internet. It uses a dictionary of over 200
                                                Latin words, combined with a handful of model sentence structures, to
                                                generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum
                                                is therefore always free from repetition, injected humour, or
                                                non-characteristic words etc.</p></div>
                                        <div title="tab_1_6" class="accordian_header tab_1_6 undefined">Tab 6<span
                                                    class="arrow"></span></div>
                                        <div class="tab_content last tab_1_6" title="tab_1_6" style="display: none;"><p>
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                                has roots in a piece of classical Latin literature from 45 BC, making it
                                                over 2000 years old. Richard McClintock, a Latin professor at
                                                Hampden-Sydney College in Virginia, looked up one of the more obscure
                                                Latin words, consectetur, from a Lorem Ipsum passage, and going through
                                                the cites of the word in classical literature, discovered the
                                                undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33
                                                of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by
                                                Cicero, written in 45 BC. This book is a treatise on the theory of
                                                ethics, very popular during the Renaissance. The first line of Lorem
                                                Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section
                                                1.10.32. Contrary to popular belief, Lorem Ipsum is not simply random
                                                text. It has roots in a piece of classical Latin literature from 45 BC,
                                                making it over 2000 years old. Richard McClintock, a Latin professor at
                                                Hampden-Sydney College in Virginia, looked up one of the more obscure
                                                Latin words, consectetur, from a Lorem Ipsum passage, and going through
                                                the cites of the word in classical literature, discovered the
                                                undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33
                                                of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by
                                                Cicero, written in 45 BC. This book is a treatise on the theory of
                                                ethics, very popular during the Renaissance. The first line of Lorem
                                                Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section
                                                1.10.32.</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- COL-END --> </div> <!-- ROW-1 CLOSED --> </div>
        </div> <!-- CONTAINER CLOSED --> </div> <!-- SIDE-BAR -->
    <div class="sidebar sidebar-right sidebar-animate mCustomScrollbar _mCS_2 mCS-autoHide mCS_no_scrollbar"
         style="overflow: visible;">
        <div id="mCSB_2" class="mCustomScrollBox mCS-minimal mCSB_vertical mCSB_outside" style="max-height: none;"
             tabindex="0">
            <div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                 style="position:relative; top:0; left:0;" dir="ltr">
                <div class="p-4 border-bottom"><span class="fs-17">Profile Settings</span> <a href="#"
                                                                                              class="sidebar-icon text-right float-right"
                                                                                              data-toggle="sidebar-right"
                                                                                              data-target=".sidebar-right"><i
                                class="fe fe-x"></i></a></div>
                <div class="card-body p-0">
                    <div class="header-user text-center mt-4 pb-4"><span class="avatar avatar-xxl brround"><img
                                    src="../assets/images/users/15.jpg" alt="Profile-img"
                                    class="avatar avatar-xxl brround mCS_img_loaded"></span>
                        <div class="dropdown-item text-center font-weight-semibold user h3 mb-0 p-0 mt-3">Devid Antoni
                        </div>
                        <small>Administrator</small>
                        <div class="card-body">
                            <div class="form-group "><label class="form-label  text-left">Offline/Online</label> <select
                                        class="form-control select2 select2-hidden-accessible"
                                        data-placeholder="Choose one" tabindex="-1" aria-hidden="true">
                                    <option label="Choose one"></option>
                                    <option value="1">Online</option>
                                    <option value="2">Offline</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                               style="width: 250px;"><span class="selection"><span
                                                class="select2-selection select2-selection--single" role="combobox"
                                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                aria-labelledby="select2-ku3e-container"><span
                                                    class="select2-selection__rendered"
                                                    id="select2-ku3e-container"><span
                                                        class="select2-selection__placeholder">Choose one</span></span><span
                                                    class="select2-selection__arrow" role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                            <div class="form-group "><label class="form-label text-left">Website</label> <select
                                        class="form-control select2 select2-hidden-accessible"
                                        data-placeholder="Choose one" tabindex="-1" aria-hidden="true">
                                    <option label="Choose one"></option>
                                    <option value="1">Spruko.com</option>
                                    <option value="2">sprukosoft.com</option>
                                    <option value="3">sprukotechnologies.com</option>
                                    <option value="4">sprukoinfo.com</option>
                                    <option value="5">sprukotech.com</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr"
                                               style="width: 250px;"><span class="selection"><span
                                                class="select2-selection select2-selection--single" role="combobox"
                                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                aria-labelledby="select2-9bdl-container"><span
                                                    class="select2-selection__rendered"
                                                    id="select2-9bdl-container"><span
                                                        class="select2-selection__placeholder">Choose one</span></span><span
                                                    class="select2-selection__arrow" role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        </div>
                    </div>
                    <a class="dropdown-item  border-top" href="#"> <i
                                class="dropdown-icon mdi mdi-account-outline "></i> Spruko technologies </a> <a
                            class="dropdown-item border-top" href="#"> <i
                                class="dropdown-icon  mdi mdi-account-plus"></i> Add another Account </a>
                    <div class="card-body border-top">
                        <div class="row">
                            <div class="col-4 text-center"><a class="" href=""><i
                                            class="dropdown-icon mdi  mdi-message-outline fs-30 m-0 leading-tight"></i></a>
                                <div>Inbox</div>
                            </div>
                            <div class="col-4 text-center"><a class="" href=""><i
                                            class="dropdown-icon mdi mdi-tune fs-30 m-0 leading-tight"></i></a>
                                <div>Settings</div>
                            </div>
                            <div class="col-4 text-center"><a class="" href=""><i
                                            class="dropdown-icon mdi mdi-logout-variant fs-30 m-0 leading-tight"></i></a>
                                <div>Sign out</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="mCSB_2_scrollbar_vertical"
             class="mCSB_scrollTools mCSB_2_scrollbar mCS-minimal mCSB_scrollTools_vertical" style="display: none;">
            <div class="mCSB_draggerContainer">
                <div id="mCSB_2_dragger_vertical" class="mCSB_dragger"
                     style="position: absolute; min-height: 50px; height: 0px; top: 0px;">
                    <div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
                </div>
                <div class="mCSB_draggerRail"></div>
            </div>
        </div>
    </div> <!-- SIDE-BAR CLOSED --> <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-12 col-sm-12 text-center"> Copyright © 2019 <a href="#">Flaira</a>. Designed by <a
                            href="#"> Spruko Technologies Pvt.Ltd </a> All rights reserved.
                </div>
            </div>
        </div>
    </footer> <!-- FOOTER CLOSED --> </div> <!-- BACK-TO-TOP --> <a href="#top" id="back-to-top" style="display: none;"><i
            class="fa fa-angle-up"></i></a> <!-- JQUERY JS -->
<noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
<script src="./js/jquery-3.4.1.min.js"></script>
<script type="text/javascript"><!--
    pk9z("aHsOV75EsOGUA/Oi-1zS?,\"");
    --></script> <!-- BOOTSTRAP JS -->
<noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
<script src="./js/bootstrap.bundle.min.js"></script>
<script type="text/javascript"><!--
    pk9z("a");
    --></script>
<noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
<script src="./js/popper.min.js"></script>
<script type="text/javascript"><!--
    pk9z("aHsOV76wGoFn,y6i-1zS?,\"");
    --></script> <!-- SPARKLINE JS -->
<noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
<script src="./js/jquery.sparkline.min.js"></script>
<script type="text/javascript"><!--
    pk9z("aHsOV7dkGoVE(9We)azMLNXWp3");
    --></script> <!-- CHART-CIRCLE JS -->
<noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
<script src="./js/circle-progress.min.js"></script>
<script type="text/javascript"><!--
    pk9z("aHsOV7vaMPf4kHR1BQ\'u>AXT&");
    --></script> <!-- RATING STAR JS -->
<noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
<script src="./js/jquery.rating-stars.js"></script>
<script type="text/javascript"><!--
    pk9z("aHsOV7dJ12iHAdYm0QzS?,\"");
    --></script> <!-- C3 CHART JS  -->
<noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
<script src="./js/d3.v5.min.js"></script>
<script type="text/javascript"><!--
    pk9z("a");
    --></script>
<noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
<script src="./js/c3-chart.js"></script>
<script type="text/javascript"><!--
    pk9z("aHsOV7bIcvVLv/7DjC8#?A9n");
    --></script> <!-- INPUT MASK JS -->
<noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
<script src="./js/jquery.mask.min.js"></script>
<script type="text/javascript"><!--
    pk9z("aHsOV76gVA2t:y?i-1zS?,\"");
    --></script> <!-- SIDE-MENU JS -->
<noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
<script src="./js/sidemenu.js"></script>
<script type="text/javascript"><!--
    pk9z("aHsOVU/\'G/GLDHYverz");
    --></script> <!--- TABS JS -->
<noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
<script src="./js/jquery.multipurpose_tabcontent.js"></script>
<script type="text/javascript"><!--
    pk9z("a");
    --></script>
<noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
<script src="./js/tab-content.js"></script>
<script type="text/javascript"><!--
    pk9z("aHsOV7d( OttkHv:?IK#QY<ndj6.mI");
    --></script> <!-- CUSTOM SCROLL BAR JS-->
<noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript"><!--
    pk9z("aHsOV76gVA0HA4c/jxo_>");
    --></script> <!-- SIDEBAR JS -->
<noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
<script src="./js/sidebar.js"></script>
<script type="text/javascript"><!--
    pk9z("aHsOV76V&:Roa\'YfaQoSFN");
    --></script> <!-- Switcher js -->
<noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
<script src="./js/switcher.js"></script>
<script type="text/javascript"><!--
    pk9z("aHsOV76S>AEUW4c/jxo_>");
    --></script> <!-- SELECT2 JS -->
<noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
<script src="./js/select2.full.min.js"></script>
<script type="text/javascript"><!--
    pk9z("aHsOV7d( Ottkw7verz");
    --></script> <!-- CUSTOM JS-->
<noscript><p>To display this page you need a browser that supports JavaScript.</p></noscript>
<script src="./js/custom.js"></script>
</body>
<loom-container id="lo-engage-ext-container">
    <div></div>
    <loom-shadow classname="resolved"></loom-shadow>
</loom-container>
</html>