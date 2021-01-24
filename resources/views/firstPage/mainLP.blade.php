@section('mainLP')

<main class="sectionLP">

    <section>
        <div class="title1Img">
            <div class="titleBtnBox">
                <a class="titleBtn" href="">新規登録はこちら</a>
                <a class="titleBtn" href="">ログインはこちら</a>
            </div>
        </div>
        <div>
            <h3>スポーツの時間をもっとオシャレに、もっとワクワク。</h3>
            <p>MyUniformは、気になるスポーツウェアを自由にコーディネートして</p>
            <p>着てみたいブランドのウェアやカラーを購入前に確認できるアプリです。</p>
        </div>

        <div class="title2Img">
            <h2 class="title2Text">SEECSでできること</h2>

                <ul class="ableListContainer">
                    <li class="ableListBox">
                        <div class="iconWrapper">
                            <i class="fas fa-tshirt"></i>
                        </div>
                        <div class="ableListText">
                            <p>お探しのウェア情報を入力</p>
                        </div>
                    </li>
                    <li class="ableListBox">
                        <div class="iconWrapper">
                            <i class="fas fa-list-alt"></i>
                        </div>
                        <div class="ableListText">
                            <p>条件に応じたウェアが提案表示される</p>
                        </div>
                    </li>
                    <li class="ableListBox">
                        <div class="iconWrapper">
                            <i class="fas fa-male"></i>
                        </div>
                        <div class="ableListText">
                            <p>気になるウェアはマネキンでコーディネートチェック</p>
                        </div>
                    </li>
                    <li class="ableListBox">
                        <div class="iconWrapper">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="ableListText">
                            <p>そのまま購入サイトへジャンプし購入が可能</p>
                        </div>
                    </li>
                </ul>
        </div>
    </section>

    <section class="bigSection">
        <h2 class="h2Title">Seecsのつかい方</h2>
        <div class="movieContainer">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/TRh-amAhOEw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>

    <section class="bigSection">
        <h2 class="h2Title">対応スポーツウェアカテゴリ一覧</h2>

        <ul class="categoryContainer">
            <li class="categoryList">
                <h4>テニス</h4>
                <img src="{{asset('/img/firstLP/tennis.jpg')}}" alt="">
            </li>
            <li class="categoryList">
                <h4>ゴルフ</h4>
                <img src="{{asset('/img/firstLP/golfing.jpg')}}" alt="">
            </li>
            <li class="categoryList">
                <h4>ランニング</h4>
                <img src="{{asset('/img/firstLP/running.jpg')}}" alt="">
            </li>
            <li class="categoryList">
                <h4>トレーニング</h4>
                <img src="{{asset('/img/firstLP/training.jpg')}}" alt="">
            </li>
        </ul>

    </section>

</main>

@endsection