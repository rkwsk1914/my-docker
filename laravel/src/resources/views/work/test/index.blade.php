<head>
<meta charset="utf-8">
<title>Ryo Kawasaki </title>
<meta name="description" content="Kawasaki Ryo">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href={{ asset('common/css/common.css') }}>
<link rel="stylesheet" href={{ asset('work/work1/css/shared/cms-style.css') }}>
<link rel="stylesheet" href={{ asset('work/work1/css/shared/substyle.css') }}>
</head>

<body>
    <header></header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src={{ asset('common/icon/main.png') }} width="70" height="70" class="d-inline-block align-top"
                    alt="logo">
                <span class="align-middle">kawasaki</span>
            </a>
        </div>
    </nav>

    <article class="py-5">
        <h1 class="text-center h1">
            料金シュミレーター モックアップ
        </h1>

        <section class="container">
            <div class="row">
                <div class="box-bnr_contain box-simulator_contain">
                    <div class="box-simulator_contain__first">
                        <span class="box-simulator_contain__first__arrow-icon js-arrow-animation"></span>
                        <p class="box-simulator_contain__first__main-title u-font-murecho">
                            PayPayポイント<br>
                            どれだけもらえる？
                        </p>
                        <span class="box-simulator_contain__first__arrow-icon js-arrow-animation"></span>
                    </div>
                    <div class="box-simulator_contain__second">
                        <p class="parallelogram-title u-font-murecho"><span>10秒</span>でおトク額をチェック！</p>
                        <h3 class="box-simulator_contain__second__title u-font-murecho">ざっくり<br class="u-pc-d-n">シミュレーター
                        </h3>
                        <div id="simulator"></div>
                        <ul class="layout-bullet">
                            <li class="layout-bullet-item">PayPayポイントを受け取るには、「PayPay」アプリケーション内でのアカウント連携が必要です。</li>
                            <li class="layout-bullet-item">PayPayポイントは出⾦・譲渡不可。PayPay／PayPayカード公式ストアでもご利用いただけます。</li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </article>


    <footer class="p-3" style="background-color: #e3f2fd;">
    </footer>

    <script src={{ asset('common/js/common.js') }}></script>
    <script src={{ asset('work/work1/js/shared/index.js') }} defer></script>
    <script src={{ asset('work/work1/p/arrow-animation.js') }} type="text/javascript" defer media="screen and (min-width: 576px)">
    </script>
    <script src={{ asset('work/work1/s/arrow-animation.js') }} type="text/javascript" defer media="screen and (m-width: 576px)">
    </script>
</body>
