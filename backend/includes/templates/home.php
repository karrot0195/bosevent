<?php
get_header('bosevent');
$path_template_url = get_template_directory_uri();
?>
<div class="bg-banner">
    <div class="wp-table">
        <div class="tab-cell-m txt--c bg-banner__inner">
            <div class="ncontainer">
                <h1 class=" bg-banner__title heading-h1 cl--white txt--up f--900">
                    Lead to your carrer
                </h1>
                <p class="bg-banner__description cl--white">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie conscheequat, vel illum dolore
                    <br /> eu feu vero eros et accumsan </p>
                <div class="bg-banner__btn txt--c">
                    <a href="javascript:void(0)" class="nbutton color--2 nsize--b f--500 txt--up" id="scroll-down">Next section</a>
                </div>
            </div>
        </div>
    </div>
    <ul class="list-slide">
        <li class="list-slide__item">
            <span class="list-slide__bg" style="background-image: url(<?php echo $path_template_url ?>/assets/images/banner/banner-01.jpg)"></span>
        </li>
        <li class="list-slide__item">
            <span class="list-slide__bg" style="background-image: url(<?php echo $path_template_url ?>/assets/images/banner/banner-02.jpg)"></span>
        </li>
        <li class="list-slide__item">
            <span class="list-slide__bg" style="background-image: url(<?php echo $path_template_url ?>/assets/images/banner/banner-03.jpg)"></span>
        </li>
        <li class="list-slide__item">
            <span class="list-slide__bg" style="background-image: url(<?php echo $path_template_url ?>/assets/images/banner/banner-04.jpg)"></span>
        </li>
    </ul>
    <div class="mouse">
        <div class="wheel"></div>
    </div>
</div>
<div class="nsection nabout txt--c" id="bos-about">
    <div class="nheading__wrap">
        <div class="ncontainer">
            <h5 class="nabout__title heading-h5 f--400 txt--up cl--grayblack inlineb-t">Who we are</h5>
            <br />
            <div class="nbrand">
                <img src="<?php echo $path_template_url ?>/assets/images/about-us/about-us.png" alt="" class="nimg nbrand__logo">
            </div>
            <br />
            <h2 class="heading-h2 f--600 txt--cap lh--12 cl--black inlineb-t">Together we expanded
                <br /> vision, create and make it
                <div class="nline-title"></div>
            </h2>
            <p class="ntext-des f--16">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae eum, doloremque harum consequuntur consequatur nostrum
                eveniet officia rem, ipsa itaque animi rerum ducimus provident!
            </p>
        </div>
    </div>
    <div class="nourteam">
        <ul class="nourteam__wrap wp-inlineb list-clm clm-04">
            <li class="nitem inlineb-t">
                <div class="nourteam__img">
                    <img src="<?php echo $path_template_url ?>/assets/images/about-us/staff-01.png" alt="" class="nimg nratio--img">
                </div>
                <div class="nourteam__des txt--r">
                    <h4 class="nourteam__des-title  cl--white f--600 txt--up">Nhan Thanh Nguyen</h4>
                    <span class="nourteam__des-pos cl--white">Senior Developer</span>
                </div>
            </li>
            <li class="nitem inlineb-t">
                <div class="nourteam__img">
                    <img src="<?php echo $path_template_url ?>/assets/images/about-us/staff-02.png" alt="" class="nimg nratio--img">
                </div>
                <div class="nourteam__des txt--r">
                    <h4 class="nourteam__des-title cl--white f--600 txt--up">Vu Nguyen Minh Tri</h4>
                    <span class="nourteam__des-pos cl--white">HR Manager</span>
                </div>
            </li>
            <li class="nitem inlineb-t">
                <div class="nourteam__img">
                    <img src="<?php echo $path_template_url ?>/assets/images/about-us/staff-03.png" alt="" class="nimg nratio--img">
                </div>
                <div class="nourteam__des txt--r">
                    <h4 class="nourteam__des-title cl--white f--600 txt--up">Ryan Hernold</h4>
                    <span class="nourteam__des-pos cl--white">Fullstack Developer</span>
                </div>
            </li>
            <li class="nitem inlineb-t">
                <div class="nourteam__img">
                    <img src="<?php echo $path_template_url ?>/assets/images/about-us/staff-04.png" alt="" class="nimg nratio--img">
                </div>
                <div class="nourteam__des txt--r">
                    <h4 class="nourteam__des-title cl--white f--600 txt--up">Bo Avenue</h4>
                    <span class="nourteam__des-pos cl--white">UI/UX Designer</span>
                </div>
            </li>
        </ul>
    </div>

    <div class="nmorale">
        <div class="ncontainer">
            <div class="nheading__wrap">
                <h5 class="nheading__wrap-h5 heading-h5 f--400 txt--up cl--white">features</h5>
                <h2 class="heading-h2 f--600 txt--cap lh--12 cl--white inlineb-t">Why we are different ?
                    <div class="nline-title bl-after"></div>
                </h2>
                <p class="ntext-des cl--white f--16">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae eum, doloremque harum consequuntur consequatur nostrum
                    eveniet officia rem, ipsa itaque animi rerum ducimus provident!
                </p>
            </div>
            <ul class="nmorale__wrap wp-inlineb list-clm clm-04">
                <li class="nitem inlineb-t">
                    <div class="nmorale__img">
                        <img src="http://2c9ack1o53tt194p04458y3m.wpengine.netdna-cdn.com/revolution-classic/wp-content/uploads/sites/8/2018/02/c12-760x950.jpg"
                             alt="" class="nimg nratio--img">
                    </div>
                    <div class="nmorale__info txt--l">
                        <span class="nmorale__info-num cl--white">01.</span>
                        <h3 class="nmorale__info-title heading-h3 txt--cap f--900 cl--white">creative</h3>
                        <p class="nmorale__info-des cl--white lh--13">Phasellus fringilla suscipit risus nec eleifend.</p>
                    </div>
                </li>
                <li class="nitem inlineb-t">
                    <div class="nmorale__img">
                        <img src="http://2c9ack1o53tt194p04458y3m.wpengine.netdna-cdn.com/revolution-classic/wp-content/uploads/sites/8/2018/02/c10-760x950.jpg"
                             alt="" class="nimg nratio--img">
                    </div>
                    <div class="nmorale__info txt--l">
                        <span class="nmorale__info-num cl--white">02.</span>
                        <h3 class="nmorale__info-title heading-h3 txt--cap f--900 cl--white">Clean</h3>
                        <p class="nmorale__info-des cl--white lh--13">Phasellus fringilla suscipit risus nec eleifend.</p>
                    </div>
                </li>
                <li class="nitem inlineb-t">
                    <div class="nmorale__img">
                        <img src="http://2c9ack1o53tt194p04458y3m.wpengine.netdna-cdn.com/revolution-classic/wp-content/uploads/sites/8/2018/02/c17-760x950.jpg"
                             alt="" class="nimg nratio--img">
                    </div>
                    <div class="nmorale__info txt--l">
                        <span class="nmorale__info-num cl--white">03.</span>
                        <h3 class="nmorale__info-title heading-h3 txt--cap f--900 cl--white">attractive</h3>
                        <p class="nmorale__info-des cl--white lh--13">Phasellus fringilla suscipit risus nec eleifend.</p>
                    </div>
                </li>
                <li class="nitem inlineb-t">
                    <div class="nmorale__img">
                        <img src="http://2c9ack1o53tt194p04458y3m.wpengine.netdna-cdn.com/revolution-classic/wp-content/uploads/sites/8/2018/02/c18.jpg"
                             alt="" class="nimg nratio--img">
                    </div>
                    <div class="nmorale__info txt--l">
                        <span class="nmorale__info-num cl--white">04.</span>
                        <h3 class="nmorale__info-title heading-h3 txt--cap f--900 cl--white">smart</h3>
                        <p class="nmorale__info-des cl--white lh--13">Phasellus fringilla suscipit risus nec eleifend.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="nsection nservices" id="bos-services">
    <div class="ncontainer">
        <div class="nheading__wrap txt--c">
            <h5 class="nheading__wrap-h5 heading-h5 f--400 txt--up cl--black">Our services</h5>
            <h2 class="heading-h2 f--600 txt--cap lh--12 cl--black inlineb-t">We offer the full spectrum of services
                <br /> to help organizations work better.
                <div class="nline-title red-after"></div>
            </h2>
        </div>
        <ul class="nservices__wrap">
            <li class="item nservices__item">
                <div class="wp-table">
                    <div class="nservices__item-left tab-cell-m">
                        <img src="<?php echo $path_template_url ?>/assets/images/services/team-building.png" alt="" class="nimg nratio--img">
                    </div>
                    <div class="nservices__item-right tab-cell-m">
                        <h1 class="nservices__item-heading f--900 txt--cap lh--12">Team building</h1>
                        <p class="nservices__item-des f--15 lh--15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor provident culpa face Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Dolor provident culpa face</p>
                        <div class="nservices__item-btn">
                            <a class="nbutton color--1 nsize--b txt--up">View more</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="item nservices__item">
                <div class="wp-table">
                    <div class="nservices__item-left tab-cell-m">
                        <img src="<?php echo $path_template_url ?>/assets/images/services/gala-dinner.png" alt="" class="nimg nratio--img">
                    </div>
                    <div class="nservices__item-right tab-cell-m">
                        <h1 class="nservices__item-heading f--900 txt--cap lh--12">Gala Dinner</h1>
                        <p class="nservices__item-des f--15 lh--15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor provident culpa face Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Dolor provident culpa face</p>
                        <div class="nservices__item-btn">
                            <a class="nbutton color--1 nsize--b txt--up">View more</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="item nservices__item">
                <div class="wp-table">
                    <div class="nservices__item-left tab-cell-m">
                        <img src="<?php echo $path_template_url ?>/assets/images/services/travel-plan.png" alt="" class="nimg nratio--img">
                    </div>
                    <div class="nservices__item-right tab-cell-m">
                        <h1 class="nservices__item-heading f--900 txt--cap lh--12">Travel & event planning</h1>
                        <p class="nservices__item-des f--15 lh--15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor provident culpa face Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Dolor provident culpa face</p>
                        <div class="nservices__item-btn">
                            <a class="nbutton color--1 nsize--b txt--up">View more</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

</div>
<div class="nsection nblog" id="bos-blog">
    <div class="nheading__wrap txt--c">
        <div class="ncontainer">
            <h5 class="nheading__wrap-h5 heading-h5 f--400 txt--up cl--black">Read from our blog</h5>
            <h2 class="heading-h2 f--600 txt--cap lh--12 cl--black inlineb-t">Latest from blog
                <div class="nline-title "></div>
            </h2>
        </div>
    </div>
    <ul class="nlist-blog">
        <li class="item">
            <div class="nlist-blog__img">
                <img src="<?php echo $path_template_url ?>/assets/images/banner/banner-04.jpg" alt="" class="nimg nratio--img">
            </div>
            <div class="nlist-blog__info">
                <h3 class="nlist-blog__info-title heading-h3 f--600 lh--11">
                    <a href="" class="cl--white">Apartamento at ten: a decade of celebrating the everyday home</a>
                </h3>
                <p class="nlist-blog__info-des font--14 cl--white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde quibusdam quo non eius maiores tempora modi ipsa laboriosam
                </p>
            </div>
        </li>
        <li class="item">
            <div class="nlist-blog__img">
                <img src="<?php echo $path_template_url ?>/assets/images/banner/banner-02.jpg" alt="" class="nimg nratio--img">
            </div>
            <div class="nlist-blog__info">
                <h3 class="nlist-blog__info-title heading-h3  f--600 lh--11">
                    <a href="" class="cl--white">Apartamento at ten: a decade of celebrating the everyday home</a>
                </h3>
                <p class="nlist-blog__info-des font--14 cl--white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde quibusdam quo non eius maiores tempora modi ipsa laboriosam
                </p>
            </div>
        </li>
        <li class="item">
            <div class="nlist-blog__img">
                <img src="<?php echo $path_template_url ?>/assets/images/banner/banner-03.jpg" alt="" class="nimg nratio--img">
            </div>
            <div class="nlist-blog__info">
                <h3 class="nlist-blog__info-title heading-h3 cl--white f--600 lh--11">
                    <a href="" class="cl--white">Apartamento at ten: a decade of celebrating the everyday home</a>
                </h3>
                <p class="nlist-blog__info-des font--14 cl--white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde quibusdam quo non eius maiores tempora modi ipsa laboriosam
                </p>
            </div>
        </li>
    </ul>
    <div class="ncontainer txt--c">
        <a href="" class="nbutton color--1 nsize--b f--500 txt--up">More post</a>
    </div>
</div>
<div class="nsection nevent" id="bos-event">
    <div class="ncontainer">
        <div class="nheading__wrap txt--c">
            <h5 class="nheading__wrap-h5 heading-h5 f--400 txt--up cl--white1">Event Schedule</h5>
            <h2 class="heading-h2 f--600 txt--cap lh--12 cl--white inlineb-t">Event scheduling
                <br />software - mobile apps
                <div class="nline-title white-after"></div>
            </h2>
        </div>
        <div class="nevent__schedule ">
            <div class="item nevent__schedule-name">
                <img src="<?php echo $path_template_url ?>/assets/images/event.svg" alt="" class="nimg nicon inlineb-m">
                <h5 class="heading-h5 f--500 cl--white txt--up inlineb-m">All Events On Dashboard</h5>
                <ul class="nevent__schedule-name__date">
                    <li class="item">
                        <input type="text" id="start-date" class="nform-control custom-datepick" placeholder="Start Date">
                    </li>
                    <li class="item">
                        <input type="text" id="end-date" class="nform-control custom-datepick" placeholder="End Date">
                    </li>
                    <li class="item">
                        <a href="" class="nbutton color--1 nsize--b f--500 txt--up" title="Find Event">Find Event</a>
                    </li>
                </ul>
            </div>
            <ul>
                <li class="item nevent__schedule-info wp-inlineb">
                    <div class="inner-item inner-pane">
                        <div class="nevent__schedule-info__thumb inlineb-m">
                            <img src="<?php echo $path_template_url ?>/assets/images/about-us/staff-02.png" alt="Vu Nguyen Minh Tri" class="nimg nratio--img">
                        </div>
                        <div class="nevent__schedule-info__content inlineb-m">
                            <div class="time f--14">
                                <i class="time-date">08:00 - July 8, 2018</i>
                            </div>
                            <div class="event-title f--25 f--900">Grand Opening</div>
                            <div class="person f--12 lh--12">By
                                <span class="f--500 cl--grayblack">Vu Nguyen Minh Tri</span>
                            </div>
                        </div>
                    </div>
                    <div class="inner-item inner-content">
                        <div class="nevent__schedule-info__content-inner">
                            <div class="inner">
                                <div class="time-start f--14">
                                    Time start:
                                    <span class="f--600"> 08:00 - 09:00</span>
                                </div>
                                <div class="description f--14">
                                    Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim
                                    8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave.
                                    <br />
                                </div>
                                <ul class="nlist-tag">
                                    <li class="item inlineb-t">
                                        <span class="f--12 f--600 txt--up">Business</span>
                                    </li>
                                    <li class="item inlineb-t">
                                        <span class="f--12 f--600 txt--up">Engineering</span>
                                    </li>
                                    <li class="item inlineb-t">
                                        <span class="f--12 f--600 txt--up">Travel</span>
                                    </li>
                                </ul>
                                <div class="nlocation">
                                    <div class="where f--14 txt--up f--600">where</div>
                                    <div class="address txt--cap f--13">Hall 1, Building A, E Town</div>
                                </div>
                            </div>

                            <br class="nclear" />
                        </div>
                    </div>
                </li>
                <li class="item nevent__schedule-info wp-inlineb">
                    <div class="inner-item inner-pane">
                        <div class="nevent__schedule-info__thumb inlineb-m">
                            <img src="<?php echo $path_template_url ?>/assets/images/about-us/staff-04.png" alt="Nhan Thanh Nguyen" class="nimg nratio--img">
                        </div>
                        <div class="nevent__schedule-info__content inlineb-m">
                            <div class="time f--14">
                                <i class="time-date">12:00 - July 9, 2018</i>
                            </div>
                            <div class="event-title f--25 f--900">The Modern Engineering Methods</div>
                            <div class="person f--12 lh--12">By
                                <span class="f--500 cl--grayblack">Nhan Thanh Nguyen</span>
                            </div>
                        </div>
                    </div>
                    <div class="inner-item inner-content">
                        <div class="nevent__schedule-info__content-inner">
                            <div class="inner">
                                <div class="time-start f--14">
                                    Time start:
                                    <span class="f--600"> 12:00 - 13:00</span>
                                </div>
                                <div class="description f--14">
                                    Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim
                                    8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave.
                                    <br />
                                </div>
                                <ul class="nlist-tag">
                                    <li class="item inlineb-t">
                                        <span class="f--12 f--600 txt--up">Business</span>
                                    </li>
                                    <li class="item inlineb-t">
                                        <span class="f--12 f--600 txt--up">Engineering</span>
                                    </li>
                                    <li class="item inlineb-t">
                                        <span class="f--12 f--600 txt--up">Travel</span>
                                    </li>
                                </ul>
                                <div class="nlocation">
                                    <div class="where f--14 txt--up f--600">where</div>
                                    <div class="address txt--cap f--13">Hall 2, Building B, E Town 2</div>
                                </div>
                            </div>

                            <br class="nclear" />
                        </div>
                    </div>
                </li>
                <li class="item nevent__schedule-info wp-inlineb">
                    <div class="inner-item inner-pane">
                        <div class="nevent__schedule-info__thumb inlineb-m">
                            <img src="<?php echo $path_template_url ?>/assets/images/about-us/staff-01.png" alt="Bo Avenue" class="nimg nratio--img">
                        </div>
                        <div class="nevent__schedule-info__content inlineb-m">
                            <div class="time f--14">
                                <i class="time-date">13:00 - July 9, 2018</i>
                            </div>
                            <div class="event-title f--25 f--900">
                                Be the black sheep</div>
                            <div class="person f--12 lh--12">By
                                <span class="f--500 cl--grayblack">Bo Avenue</span>
                            </div>
                        </div>
                    </div>
                    <div class="inner-item inner-content">
                        <div class="nevent__schedule-info__content-inner">
                            <div class="inner">
                                <div class="time-start f--14">
                                    Time start:
                                    <span class="f--600"> 13:00 - 15:00</span>
                                </div>
                                <div class="description f--14">
                                    Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim
                                    8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave.
                                    <br />
                                </div>
                                <ul class="nlist-tag">
                                    <li class="item inlineb-t">
                                        <span class="f--12 f--600 txt--up">Business</span>
                                    </li>
                                    <li class="item inlineb-t">
                                        <span class="f--12 f--600 txt--up">Engineering</span>
                                    </li>
                                    <li class="item inlineb-t">
                                        <span class="f--12 f--600 txt--up">Travel</span>
                                    </li>
                                </ul>
                                <div class="nlocation">
                                    <div class="where f--14 txt--up f--600">where</div>
                                    <div class="address txt--cap f--13">Hall 3, Building C, E Town 2</div>
                                </div>
                            </div>

                            <br class="nclear" />
                        </div>
                    </div>
                </li>
                <li class="item nevent__schedule-info wp-inlineb">
                    <div class="inner-item inner-pane">
                        <div class="nevent__schedule-info__thumb inlineb-m">
                            <img src="<?php echo $path_template_url ?>/assets/images/about-us/staff-03.png" alt="Bo Avenue" class="nimg nratio--img">
                        </div>
                        <div class="nevent__schedule-info__content inlineb-m">
                            <div class="time f--14">
                                <i class="time-date">13:00 - July 9, 2018</i>
                            </div>
                            <div class="event-title f--25 f--900">Global Innovations in Media</div>
                            <div class="person f--12 lh--12">By
                                <span class="f--500 cl--grayblack">Bo Avenue</span>
                            </div>
                        </div>
                    </div>
                    <div class="inner-item inner-content">
                        <div class="nevent__schedule-info__content-inner">
                            <div class="inner">
                                <div class="time-start f--14">
                                    Time start:
                                    <span class="f--600"> 13:00 - 15:00</span>
                                </div>
                                <div class="description f--14">
                                    Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack nostrud. Photo booth anim
                                    8-bit hella, PBR 3 wolf moon beard Helvetica. Salvia esse nihil, flexitarian Truffaut synth art party deep v chillwave.
                                    <br />
                                </div>
                                <ul class="nlist-tag">
                                    <li class="item inlineb-t">
                                        <span class="f--12 f--600 txt--up">Business</span>
                                    </li>
                                    <li class="item inlineb-t">
                                        <span class="f--12 f--600 txt--up">Engineering</span>
                                    </li>
                                    <li class="item inlineb-t">
                                        <span class="f--12 f--600 txt--up">Travel</span>
                                    </li>
                                </ul>
                                <div class="nlocation">
                                    <div class="where f--14 txt--up f--600">where</div>
                                    <div class="address txt--cap f--13">Hall 3, Building C, E Town 2</div>
                                </div>
                            </div>
                            <br class="nclear" />
                        </div>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</div>
<footer>
    <div class="ncontainer lh--19">
        <ul class="wp-inlineb nfooter txt--c">
            <li class="item inlineb-t txt--l">
                <h5 class="nfooter__title heading-h5 cl--white">BosEvents Team</h5>
                <p class="f--13 cl--white1">
                    Together We Expanded Vision, Create
                    <br />And Make It.
                    <br />
                    <br /> © BosEvents Team, 2018.
                </p>
            </li>
            <li class="item inlineb-t txt--l">
                <h5 class="nfooter__title heading-h5 cl--white txt--cap">Our Address</h5>
                <p class="f--13 cl--white1">
                    43 Ly Tu Trong,
                    <br /> Distric 1,
                    <br />CA 96022 HCM City - VietNam.
                </p>
            </li>
            <li class="item inlineb-t txt--l">
                <h5 class="nfooter__title heading-h5 cl--white txt--cap">Get In Touch</h5>
                <ul>
                    <li class="mb--5">
                        <a href="" title="hello@gmail.com" class="f--13 cl--white1">hello@gmail.com</a>
                    </li>
                    <li>
                        <a href="" title="+44 (0)1484 643 078" class="f--13 cl--white1">+44 (0)1484 643 078</a>
                    </li>
                </ul>
                <ul class="nfooter__social wp-inlineb">
                    <li class="nitem inlineb-m">
                        <a href="" title="Facebook" target="_blank">
                            <img src="<?php echo $path_template_url ?>/assets/images/facebook.svg" alt="" class="nimg nicon nfacebook">
                        </a>
                    </li>
                    <li class="nitem inlineb-m">
                        <a href="" title="Youtube" target="_blank">
                            <img src="<?php echo $path_template_url ?>/assets/images/youtube.svg" alt="" class="nimg nicon nyoutube">
                        </a>
                    </li>
                    <li class="nitem inlineb-m">
                        <a href="" title="Instagram" target="_blank">
                            <img src="<?php echo $path_template_url ?>/assets/images/instagram.svg" alt="" class="nimg nicon ninstagram">
                        </a>
                    </li>
                </ul>
            </li>
            <li class="item inlineb-t txt--l">
                <h5 class="nfooter__title heading-h5 cl--white txt--cap">Hotline</h5>
                <p class="f--13 cl--white mb--10">
                    <span class="cl--white">Ryan Hernold</span>
                    <br />
                    <a href="" class="cl--white1">+84 9873 362</a>
                </p>
                <p class="f--13 cl--white">
                    <span class="cl--white">Vu Nguyen Minh Tri</span>
                    <br />
                    <a href="" class="cl--white1">+84 9873 362</a>
                </p>
            </li>
        </ul>

    </div>

</footer>
<?php get_footer(); ?>