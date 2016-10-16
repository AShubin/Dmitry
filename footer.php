<?php $configs = include('config.php'); ?>
<footer class="footer">
    <div class="container" id="sd">
        <div class="row">
            <div class="col-lg-3 col-sm-3">
                <h1> contact info </h1>
                <address>
                    <p> <b>Address:</b> <?= $configs['address']; ?> </p>
                    <p> <b>Phone:</b><br>
                        <?php foreach($configs['phone'] as $key=>$value){
                            echo $value.'<br>';
                    } ?> </p>
                    <p> <b>Fax:</b> <?= $configs['fax']; ?> </p>
                    <p> <b>Email:</b> <a href="javascript:;"> <?= $configs['email']; ?> </a></p>
                </address>
            </div>
            <div class="col-lg-5 col-sm-5">
                <h1> latest tweet </h1>
                <div class="tweet-box">
                    <i class="fa fa-twitter"></i>
                    <em> Please follow < a href = "javascript:;" > @nettus</a > for all future updates of us! <a
                            href="javascript:;"> twitter . com / vectorlab</a></em>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3 col-lg-offset-1">
                <h1> stay connected </h1>
                <?php if (isset($configs['social']) and is_array($configs['social'])):
                    $html='<ul class="social-link-footer list-unstyled">';
                    foreach($configs['social'] as $key=>$value){
                        $class=( isset($value['icon']) ) ? $value['icon'] : '';
                        $link= ( isset($value['url']) ) ? $value['url'] : '#';
                        $html.="<li><a href=\"$link\"><i class=\"fa $class\"></i></a></li>";
                    }
                    $html.='</ul>';
                echo $html;
                    endif;
                 ?>

                <!--<ul class="social-link-footer list-unstyled">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>-->
            </div>
        </div>
    </div>
</footer>