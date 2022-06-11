<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>



    <section id="featured">
      <!-- start slider -->
      <div id="slider" class="sl-slider-wrapper demo-2">
        <div class="sl-slider">
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1">
              </div>
              <h2><font size="22"; color="white"><strong>바름컴퍼니의 확실한 비즈니스 솔루션!</strong></font></h2>
              <blockquote>
                <p>
                   Best Business Partner.
                </p>
                
              </blockquote>
            </div>
          </div>
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2">
              </div>
               <h2><font size="22"; color="white"><strong>바름컴퍼니의 확실한 비즈니스 솔루션!</strong></font></h2>
              <blockquote>
                <p>
                   Best Business Partner.
                </p>
              </blockquote>
            </div>
          </div>
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-3">
              </div>
               <h2><font size="22"; color="white"><strong>바름컴퍼니의 확실한 비즈니스 솔루션!</strong></font></h2>
              <blockquote>
                <p><font color="white">
                   Best Business Partner.
                </font></p>
              </blockquote>
            </div>
          </div>
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-4">
              </div>
               <h2><font size="22"; color="white"><strong>바름컴퍼니의 확실한 비즈니스 솔루션!</strong></font></h2>
              <blockquote>
                <p><font color="white">
                   Best Business Partner.
                </font></p>
              </blockquote>
            </div>
          </div>
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-5">
              </div>
               <h2><font size="22"; color="white"><strong>바름컴퍼니의 확실한 비즈니스 솔루션!</strong></font></h2>
              <blockquote>
                <p><font color="white">
                   Best Business Partner.
                </font></p>
              </blockquote>
            </div>
          </div>
        </div>
        <!-- /sl-slider -->
        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>
      </div>
      <!-- /slider-wrapper -->
      <!-- end slider -->
    </section>
    <section class="callaction">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="big-cta">
              <div class="cta-text">
                <h3><font size="5">믿고 맡겨주세요. 고객 맞춤형 솔루션을 제안해 드리는 바름컴퍼니가 될 것을 약속드립니다.</font></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
			<div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <a href="http://bareumcompany.co.kr/bbs/content.php?co_id=greet"><i class="icon-quote-left icon-circled icon-64 active"></i></a>
                  </div>
                  <div class="text">
                    <h6>대표인사말</h6>
                    <p>
                      방문하신 여러분을 환영합니다.
                    </p>
                    <a href="http://bareumcompany.co.kr/bbs/content.php?co_id=greet">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <a href="http://bareumcompany.co.kr/bbs/content.php?co_id=introduce"><i class="font-icon-grid-large icon-circled icon-64 active"></i></a>
                  </div>
                  <div class="text">
                    <h6>사업영역</h6>
                    <p>광고대행, 광고영상제작, 강연</p>
                    <a href="http://bareumcompany.co.kr/bbs/content.php?co_id=introduce">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <a href="http://bareumcompany.co.kr/bbs/board.php?bo_table=success"><i class="icon-leaf icon-circled icon-64 active"></i></a>
                  </div>
                  <div class="text">
                    <h6>사업실적</h6>
                    <p>
                      지나온 발자취입니다.
                    </p>
                    <a href="http://bareumcompany.co.kr/bbs/board.php?bo_table=success">Learn more</a>
                  </div>
                </div>
              </div>
             
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <a href="http://bareumcompany.co.kr/bbs/board.php?bo_table=notice"><i class="font-icon-map-marker-2 icon-circled icon-64 active"></i></a>
                  </div>
                  <div class="text">
                    <h6>공지사항</h6>
                    <p>
                      NOTICE
                    </p>
                    <a href="http://bareumcompany.co.kr/bbs/board.php?bo_table=notice">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->

<?php
include_once(G5_THEME_PATH.'/tail.php');