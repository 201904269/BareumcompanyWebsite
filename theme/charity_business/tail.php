<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
<?php if(defined('_INDEX_')) { ?>
<?php } else { ?>
      </div>
    </section>
<?php } ?>
    
<!-- } 하단 끝 -->

<footer>
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="widget">
              <h5 class="widgetheading">주식회사 바름컴퍼니<img src="<?php echo G5_IMG_URL ?>/bareumlogo.png" alt="<?php echo $config['cf_title']; ?>" style="float: right; margin-right: 20px;" width="20%"></h5>
              <address>
								<strong>대표이사 : 박성경 | 사업자등록번호 : 792-88-02648</strong>
								<br><strong>주소 : 경기도 성남시 분당구 성남대로 43번길 10, 309호(구미동, 하나EZ타워) | TEL : 1600-7514 | FAX : 0504-193-1650</strong>
								</address>
	
              <p>
                TIME : AM 09:00 / PM 06:00  &nbsp;&nbsp;<i class="icon-envelope-alt"></i> 0105010@naver.com
              </p>
            </div>
          </div>
        </div>
      </div>
	
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy;copyrightⓒ2021 바름컴퍼니 all rights reserved.</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>





<?php
include_once(G5_THEME_PATH."/tail.sub.php");