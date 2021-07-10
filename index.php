
<?php get_header(); ?>

<main>
    <div class="about-wrapper" id="about">
      <h2 class="section-title">About Me</h2>
      <div class="container container-sp">
        <div class="about-section">
          <div class="about-profile">
            <p class="about-name-ja">大石 理佳</p>
            <p class="about-birthday">1985年3月15日生まれ</p>
            <p class="about-from">栃木県出身</p>
            <a href="https://www.instagram.com/rika.ri/?hl=ja" target="_blank"><i
                class="fab fa-instagram about-sns"></i></a>
          </div>
          <div class="about-text">
            <table class="profile-info">
              <tr>
                <td class="profile-01">職務経験</td>
                <td>：</td>
                <td>一般事務、営業事務</td>
              </tr>
              <tr>
                <td class="profile-01">趣味</td>
                <td>：</td>
                <td>旅行、旅行の計画を立てる事、美味しいごはん屋さん探し</td>
              </tr>
              <tr>
                <td class="profile-01">希望職種</td>
                <td>：</td>
                <td>フロントエンジニア</td>
              </tr>
            </table>
            <div class="profile-massege">
              <h4 class="profile-massege-title">プログラミングを学びはじめたきっかけは、新しい自分探しでした。</h4>
              <p class="profile-br">長年、事務の仕事をしてきた私は、34歳の春からプログラミングを学びはじめました。</p>
              <p class="profile-br">
                30歳を過ぎてから初心者でのスタートは何かと困難が重なります。しかし、私にとっては無理かどうかではなく、「こうなりたい・出来るようになりたい」その為には、何をしたらいいのだろう。といった前向きな思いの方が強く、地道にプログラミングを学んできました。
              </p>
              <p class="profile-br">将来的な目標はディレクターです。お客様のイメージを形にするディレクター、チームの長所を最大限に伸ばせるディレクターを目指しています。</p>
            </div>
          </div>
        </div><!-- about-section -->
      </div><!-- container -->
    </div><!-- about-wrapper -->

    <div class="skills-wrapper" id="skills">
      <h2 class="section-title">Web Skills</h2>
      <div class="container container-sp">
        <div class="skills-section ">
          <div class="skills-list">
            <h4 class="skills-section-title">言語</h4>
            <ul class="skills-section-item  colored-item">
              <li class="skill-item-sc"><i class="devicon-html5-plain colored icon"></i>
                <p class="language">HTML5</p>
              </li>
              <li class="skill-item-sc"><i class="devicon-css3-plain colored icon"></i>
                <p class="language">CSS3</p>
              </li>
              <li class="skill-item-sc"><i class="devicon-jquery-plain colored icon"></i>
                <p class="language">jQuery</p>
              </li>
            </ul>
            <h4 class="skills-section-title">使用エディタ</h4>
            <ul class="skills-section-item">
              <li class="skill-item-sc"><i class="devicon-visualstudio-plain icon"></i>
                <p class="language">Visual Studio Code</p>
              </li>
            </ul>
            <h4 class="skills-section-title">Adobe系</h4>
            <ul class="skills-section-item  colored-item">
              <li class="skill-item-sc"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/./imge/ad-ai.png" width="24px" height="24px"
                  alt="Illustrator">
                <p class="language">Illustrator</p>
              </li>
              <li class="skill-item-sc"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/./imge/ad-ps.png" width="24px" height="24px"
                  alt="Photoshop">
                <p class="language">Photoshop</p>
              </li>
            </ul>
          </div><!-- skills-section -->
          <div class="coding-imge-box">
            <img class="coding-imge" src="<?php echo get_template_directory_uri(); ?>/./imge/coding-img.jpg" width="630" height="100%" alt="コーディングイメージ画面">
          </div>
        </div><!-- skills-section-coding -->

      </div>
    </div><!-- skills-wrapper -->


    <div class="works-wrapper" id="works">
      <h2 class="section-title">Works</h2>
      <div class="works-section">
        <div class="container container-sp">
          <h2 class="works-title">模写制作 作品</h2>
          <p class="works-title-sub">Copy work</p>
          <div class="works-port-item">

            <!-- 1 -->
            <div class="works-image-hover">
              <img class="ggh" src="<?php echo get_template_directory_uri(); ?>/./imge/Airbnb.sk.png" alt="Airbnb模写画像">
              <div class="mask">
                <div class="caption">Airbnb<br>模写作品<br>制作時間：16時間</div>
              </div>
            </div>
            <div class="works-lity-wrap">
              <div class="works-lity-container">
                <div class="works-image-content">
                  <img src="<?php echo get_template_directory_uri(); ?>/./imge/Airbnb.png" style="max-height: 700px;" alt="Airbnb模写画像">
                  <i class="fas fa-times-circle"></i>
                </div>
              </div>
            </div>

            <!-- 2 -->
            <div class="works-image-hover">
              <img class="ggh" src="<?php echo get_template_directory_uri(); ?>/./imge/jin-sk.png" alt="WordpressのテーマJINのテーマ模写画像">
              <div class="mask2">
                <div class="caption">WordpressのテーマJIN<br>模写作品<br>制作時間：14時間</div>
              </div>
            </div>
            <div class="works-lity-wrap2">
              <div class="works-lity-container">
                <div class="works-image-content">
                  <img class="works-img" src="<?php echo get_template_directory_uri(); ?>/./imge/jin.png" style="max-height: 700px;" alt="WordpressのテーマJINのテーマ模写画像">
                  <i class="fas fa-times-circle"></i>
                </div>
              </div>
            </div>

            <!-- 3 -->
            <div class="works-image-hover">
              <img class="ggh" src="<?php echo get_template_directory_uri(); ?>/./imge/kunoichi-sk.png" alt="㈱くのいちデザイン模写画像">
              <div class="mask3">
                <div class="caption">㈱くのいちデザイン<br>模写作品<br>制作時間：28時間</div>
              </div>
            </div>
            <div class="works-lity-wrap3">
              <div class="works-lity-container">
                <div class="works-image-content">
                  <img src="<?php echo get_template_directory_uri(); ?>/./imge/kunoichi.png" style="max-height: 700px;" alt="㈱くのいちデザイン模写画像">
                  <i class="fas fa-times-circle"></i>
                </div>
              </div>
            </div>

            <!-- 4 -->
            <div class="works-image-hover">
              <img class="ggh" src="<?php echo get_template_directory_uri(); ?>/./imge/template-party-s-sk.png" alt="Corporateサンプル模写画像">
              <div class="mask4">
                <div class="caption">Corporateサイト<br>模写作品<br>制作時間：3時間</div>
              </div>
            </div>
            <div class="works-lity-wrap4">
              <div class="works-lity-container">
                <div class="works-image-content">
                  <img class="works-img" src="<?php echo get_template_directory_uri(); ?>/./imge/template-party-s.png" style="max-height: 700px;"
                    alt="Corporateサンプル模写画像">
                  <i class="fas fa-times-circle"></i>
                </div>
              </div>
            </div>

            <!-- 5 -->
            <div class="works-image-hover">
              <img class="ggh" src="<?php echo get_template_directory_uri(); ?>/./imge/xeory-sk.png" alt="WordpressのテーマXeory模写画像">
              <div class="mask5">
                <div class="caption">WordpressのテーマXeory<br>模写作品<br>制作時間：20時間</div>
              </div>
            </div>
            <div class="works-lity-wrap5">
              <div class="works-lity-container">
                <div class="works-image-content">
                  <img src="<?php echo get_template_directory_uri(); ?>/./imge/xeory.png" style="max-height: 700px;" alt="WordpressのテーマXeory模写画像">
                  <i class="fas fa-times-circle"></i>
                </div>
              </div>
            </div>

            <!-- 6 -->
            <div class="works-image-hover">
              <img class="ggh" src="<?php echo get_template_directory_uri(); ?>/./imge/fujiya-sk.png" alt="fujiya模写画像">
              <div class="mask6">
                <div class="caption">fujiya<br>模写作品<br>制作時間：3時間</div>
              </div>
            </div>
            <div class="works-lity-wrap6">
              <div class="works-lity-container">
                <div class="works-image-content">
                  <img class="works-img" src="<?php echo get_template_directory_uri(); ?>/./imge/fujiya.png" style="max-height: 700px;" alt="fujiya模写画像">
                  <i class="fas fa-times-circle"></i>
                </div>
              </div>
            </div>

          </div><!-- works-port-item -->
        </div><!-- container -->
      </div><!-- works-section -->
    </div><!-- works-wrapper -->

  </main>

  <?php get_footer(); ?>
  