<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header(); ?>



    <div class="wrapper ">

        <section id="content">
            <div class="content-view">
            <?php
                            $args = array(
                                'posts_per_page' => 1,
                                'cat' => 2,
                            
                               
                            );
                            $query = new WP_Query( $args );
                            
                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post();
                                    ?>
                <div class="box-site-head js-single-element">
                    <div class="box-bg has-tablet">
                        <a href="<?php the_permalink(); ?>">

                            <img src="<?php echo get_the_post_thumbnail_url('','full'); ?>" alt="<?php echo get_the_author_link(); ?>" width="1900" height="700" class="lazy lazy-loaded">
                        </a>
					</div>
					
					
                    <div class="box-photo has-mobile">
						<a href="<?php the_permalink(); ?>">
						
                            <img src="<?php echo get_the_post_thumbnail_url('','medium'); ?>" alt="<?php echo get_the_author_link(); ?>" class="lazy">
                            <div class="ribbon">
                                <img width="90" height="151" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAACXAQMAAACvEN4rAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAABZJREFUOMtjGAWjYBSMglEwCkbBYAYAB6sAAfz0o9UAAAAASUVORK5CYII=" srcset="https://assets.awwwards.com/assets/images/ribbons/sotd_white_left.png 1x, https://assets.awwwards.com/assets/images/ribbons/sotd_white_left@2x.png 2x" alt="Site of the Day">
                            </div>
                        </a>
                    </div>

  
                        <h2><a href="<?php the_permalink(); ?>"></a></h2>
                        <?php //the_content(); ?>
                            <?php	}?>


                                    <div class="box-content">
                                        <a href="<?php the_permalink(); ?>" class="site-link"></a>
                                        <div class="inner vertical-center">
                                            <div class="box-info">
                                                <div class="row">
                                                    <h2 class="heading-large"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                </div>
                                                <div class="row">
                                                    <div class="by">
                                                        от <strong>
													<a href="<?php echo get_the_author_link(); ?>"><?php the_author(); ?></a>
													</strong> из <strong>Калининградско области</strong> 
                                                    </div>
                                                </div>
                                                <div class="box-notesite js-notes">
                                                    <ul>
                                                        <li class="circle-note-progress style-design" data-note="7.26">
                                                            <div class="circle">
                                                                <svg width="84" height="84">
                                                                    <circle r="38" cy="41" cx="41"></circle>
                                                                    <circle r="38" cy="41" cx="41" stroke-linejoin="round" stroke-linecap="round" class="circle-progress" style="animation: 900ms ease 0s 1 normal forwards running donut-show-0;"></circle>
                                                                </svg>
                                                                <div class="percent">
                                                                    <span class="int">7</span><span class="dec">.26</span>
                                                                </div>
                                                            </div>
                                                            <div class="legend">Актуальность</div>
                                                        </li>
                                                        <li class="circle-note-progress style-usability" data-note="6.92">
                                                            <div class="circle">
                                                                <svg width="84" height="84">
                                                                    <circle r="38" cy="41" cx="41"></circle>
                                                                    <circle r="38" cy="41" cx="41" stroke-linejoin="round" stroke-linecap="round" class="circle-progress" style="animation: 900ms ease 0s 1 normal forwards running donut-show-1;"></circle>
                                                                </svg>
                                                                <div class="percent">
                                                                    <span class="int">6</span><span class="dec">.92</span>
                                                                </div>
                                                            </div>
                                                            <div class="legend">Идея</div>
                                                        </li>
                                                        <li class="circle-note-progress style-creativity" data-note="7.31">
                                                            <div class="circle">
                                                                <svg width="84" height="84">
                                                                    <circle r="38" cy="41" cx="41"></circle>
                                                                    <circle r="38" cy="41" cx="41" stroke-linejoin="round" stroke-linecap="round" class="circle-progress" style="animation: 900ms ease 0s 1 normal forwards running donut-show-2;"></circle>
                                                                </svg>
                                                                <div class="percent">
                                                                    <span class="int">7</span><span class="dec">.31</span>
                                                                </div>
                                                            </div>
                                                            <div class="legend">Реализация</div>
                                                        </li>
                                                        <li class="circle-note-progress style-content" data-note="7.33">
                                                            <div class="circle">
                                                                <svg width="84" height="84">
                                                                    <circle r="38" cy="41" cx="41"></circle>
                                                                    <circle r="38" cy="41" cx="41" stroke-linejoin="round" stroke-linecap="round" class="circle-progress" style="animation: 900ms ease 0s 1 normal forwards running donut-show-3;"></circle>
                                                                </svg>
                                                                <div class="percent">
                                                                    <span class="int">7</span><span class="dec">.33</span>
                                                                </div>
                                                            </div>
                                                            <div class="legend">CONTENT</div>
                                                        </li>
                                                        <li class="circle-note-progress style-mobile" data-note="7.30">
                                                            <div class="tooltip">
                                                                <div class="box-circle">
                                                                    <a href="/sites/two-robbers/mobile-excellence-report" class="item-link"></a>
                                                                    <div class="circle">
                                                                        <svg width="84" height="84">
                                                                            <circle r="38" cy="41" cx="41"></circle>
                                                                            <circle r="38" cy="41" cx="41" stroke-linejoin="round" stroke-linecap="round" class="circle-progress" style="animation: 900ms ease 0s 1 normal forwards running donut-show-4;"></circle>
                                                                        </svg>
                                                                        <div class="percent">
                                                                            <span class="int">7</span><span class="dec">.30</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="legend">MOBILE</div>
                                                                </div>
                                                                <div class="box-tooltip">
                                                                    <div class="tooltip-text" data-color="green-2">Mobile Report</div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="box-breadcrumb">
                                                <div class="box-left">
                                                    <strong class="parent">
													<a href="/sites/two-robbers">Проекты недели</a>
												</strong>
                                                    <span class="text-x-thin"><?php the_date(); ?></span>
                                                </div>
                                                <div class="box-right">
                                                    <div class="list-share-circles style2 light">
                                                        <ul>
                                                            <li>

                                                            </li>
                                                            <li>
                                                                <div class="bt-circle bt-twitter popup" data-link="https://twitter.com/intent/tweet?text=Two Robbers - Awwwards Site Of The Day - Awwwards&amp;url=https://www.awwwards.com/sites/two-robbers&amp;hashtags=">
                                                                    <svg class="ico-svg" viewBox="0 0 17 14">
                                                                        <use xlink:href="https://www.awwwards.com/assets/images/sprite-icons.svg#twitter"></use>
                                                                    </svg>

                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="bt-circle bt-pinterest popup" data-link="https://pinterest.com/pin/create/button/?url=https://www.awwwards.com/sites/two-robbers&amp;description=Two Robbers - Awwwards Site Of The Day - Awwwards&amp;media=https://assets.awwwards.com/awards/submissions/2019/09/5d78af2936238869429067.jpg">
                                                                    <svg class="ico-svg" viewBox="0 0 11 14">
                                                                        <use xlink:href="https://www.awwwards.com/assets/images/sprite-icons.svg#pinterest"></use>
                                                                    </svg>

                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="bt-circle bt-linkedin popup" data-link="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.awwwards.com/sites/two-robbers&amp;title=Two Robbers - Awwwards Site Of The Day - Awwwards">
                                                                    <svg class="ico-svg" viewBox="0 0 14 14">
                                                                        <use xlink:href="https://www.awwwards.com/assets/images/sprite-icons.svg#linkedin"></use>
                                                                    </svg>

                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="bt-circle bt-share js-social">
                                                            <svg class="ico-svg" viewBox="0 0 14 14">
                                                                <use xlink:href="https://www.awwwards.com/assets/images/sprite-icons.svg#share"></use>
                                                            </svg>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="box-bl">
                                                <a href="<?php the_permalink(); ?>" data-identifier="two-robbers" data-type="submission" class="js-visit-item bt-default purple-fill" target="_blank" rel="noopener nofollow">Visit Site</a>

                                                <strong class="bt-item bt-default js-collect">Прочитать</strong>

                                            </div>
                                            <div class="box-br">
                                                <div class="bt-default bt-laurel white js-show-jury-votes" data-number-user-votes="46" data-votes="[{&quot;average&quot;:7.4,&quot;deleted&quot;:false,&quot;usability&quot;:7,&quot;design&quot;:7,&quot;creativity&quot;:9,&quot;content&quot;:7,&quot;judgeId&quot;:227486,&quot;judge&quot;:{&quot;id&quot;:227486,&quot;images&quot;:{&quot;photo&quot;:&quot;avatar\/14754\/5c49dc47c920f.jpg&quot;},&quot;jobPosition&quot;:&quot;Lead Creative Tech&quot;,&quot;youtubeInterview&quot;:null,&quot;user&quot;:{&quot;username&quot;:&quot;peteryee&quot;,&quot;displayName&quot;:&quot;Peter Yee&quot;},&quot;country&quot;:{&quot;name&quot;:&quot;Malaysia&quot;}}},{&quot;average&quot;:7.6,&quot;deleted&quot;:false,&quot;usability&quot;:7,&quot;design&quot;:8,&quot;creativity&quot;:7,&quot;content&quot;:9,&quot;judgeId&quot;:227558,&quot;judge&quot;:{&quot;id&quot;:227558,&quot;images&quot;:{&quot;photo&quot;:&quot;avatar\/238047\/5c6bf77b4582e740759921.jpg&quot;},&quot;jobPosition&quot;:&quot;Co-founder &amp; Art Director at The First The Last&quot;,&quot;youtubeInterview&quot;:null,&quot;user&quot;:{&quot;username&quot;:&quot;thefirstthelast&quot;,&quot;displayName&quot;:&quot;The First The Last&quot;},&quot;country&quot;:{&quot;name&quot;:&quot;Ukraine&quot;}}},{&quot;average&quot;:6.8,&quot;deleted&quot;:false,&quot;usability&quot;:6,&quot;design&quot;:7,&quot;creativity&quot;:7,&quot;content&quot;:8,&quot;judgeId&quot;:227276,&quot;judge&quot;:{&quot;id&quot;:227276,&quot;images&quot;:{&quot;photo&quot;:&quot;avatar\/77977\/56baf9dbb2f28.jpg&quot;},&quot;jobPosition&quot;:&quot;Freelance Interactive Designer at UNIT9&quot;,&quot;youtubeInterview&quot;:null,&quot;user&quot;:{&quot;username&quot;:&quot;trilo&quot;,&quot;displayName&quot;:&quot;Roman Trilo&quot;},&quot;country&quot;:{&quot;name&quot;:&quot;Ukraine&quot;}}},{&quot;average&quot;:6.7,&quot;deleted&quot;:false,&quot;usability&quot;:6,&quot;design&quot;:7,&quot;creativity&quot;:7,&quot;content&quot;:7,&quot;judgeId&quot;:227472,&quot;judge&quot;:{&quot;id&quot;:227472,&quot;images&quot;:{&quot;photo&quot;:&quot;avatar\/460409\/5c49d98fe0ac2.jpg&quot;},&quot;jobPosition&quot;:&quot;Creative Director &amp; CEO  @ Trionn Design&quot;,&quot;youtubeInterview&quot;:null,&quot;user&quot;:{&quot;username&quot;:&quot;sunnyrathod&quot;,&quot;displayName&quot;:&quot;Sunny Rathod&quot;},&quot;country&quot;:{&quot;name&quot;:&quot;India&quot;}}},{&quot;average&quot;:7.6,&quot;deleted&quot;:false,&quot;usability&quot;:7,&quot;design&quot;:8,&quot;creativity&quot;:8,&quot;content&quot;:7,&quot;judgeId&quot;:227219,&quot;judge&quot;:{&quot;id&quot;:227219,&quot;images&quot;:{&quot;photo&quot;:&quot;avatar\/390022\/56c2df03d1fa1.jpg&quot;},&quot;jobPosition&quot;:&quot;Founder \/ CD at Uncloudy &amp; Co. And Art Director at Forsman &amp; Bodenfors Inhouse&quot;,&quot;youtubeInterview&quot;:&quot;QIPkuaeu750&quot;,&quot;user&quot;:{&quot;username&quot;:&quot;Andreas-Panagiotopoulos&quot;,&quot;displayName&quot;:&quot;Andreas Panagiotopoulos&quot;},&quot;country&quot;:{&quot;name&quot;:&quot;Sweden&quot;}}},{&quot;average&quot;:7.3,&quot;deleted&quot;:false,&quot;usability&quot;:8,&quot;design&quot;:7,&quot;creativity&quot;:7,&quot;content&quot;:7,&quot;judgeId&quot;:227415,&quot;judge&quot;:{&quot;id&quot;:227415,&quot;images&quot;:{&quot;photo&quot;:&quot;avatar\/550640\/5a60ce455cb47.jpg&quot;},&quot;jobPosition&quot;:&quot;Founder and Creative Director at Norde Agency&quot;,&quot;youtubeInterview&quot;:null,&quot;user&quot;:{&quot;username&quot;:&quot;kyril&quot;,&quot;displayName&quot;:&quot;Kyril Kulikov&quot;},&quot;country&quot;:{&quot;name&quot;:&quot;Italy&quot;}}},{&quot;average&quot;:7.2,&quot;deleted&quot;:false,&quot;usability&quot;:7,&quot;design&quot;:7,&quot;creativity&quot;:8,&quot;content&quot;:7,&quot;judgeId&quot;:227437,&quot;judge&quot;:{&quot;id&quot;:227437,&quot;images&quot;:{&quot;photo&quot;:&quot;avatar\/561615\/5a68a362254ec.jpg&quot;},&quot;jobPosition&quot;:&quot;Senior UI\/UX Designer at Tentwenty&quot;,&quot;youtubeInterview&quot;:null,&quot;user&quot;:{&quot;username&quot;:&quot;Aziev&quot;,&quot;displayName&quot;:&quot;Tamerlan Aziev&quot;},&quot;country&quot;:{&quot;name&quot;:&quot;United Arab Emirates&quot;}}},{&quot;average&quot;:7,&quot;deleted&quot;:false,&quot;usability&quot;:6,&quot;design&quot;:8,&quot;creativity&quot;:7,&quot;content&quot;:6,&quot;judgeId&quot;:227474,&quot;judge&quot;:{&quot;id&quot;:227474,&quot;images&quot;:{&quot;photo&quot;:&quot;avatar\/612276\/5c49d9d39fb90.jpg&quot;},&quot;jobPosition&quot;:&quot;Senior Visual Designer @ Metalab&quot;,&quot;youtubeInterview&quot;:null,&quot;user&quot;:{&quot;username&quot;:&quot;danielebuffa&quot;,&quot;displayName&quot;:&quot;Daniele Buffa&quot;},&quot;country&quot;:{&quot;name&quot;:&quot;United Kingdom&quot;}}},{&quot;average&quot;:7.2,&quot;deleted&quot;:false,&quot;usability&quot;:7,&quot;design&quot;:7,&quot;creativity&quot;:8,&quot;content&quot;:7,&quot;judgeId&quot;:227521,&quot;judge&quot;:{&quot;id&quot;:227521,&quot;images&quot;:{&quot;photo&quot;:&quot;avatar\/167800\/5c5085b723513.jpg&quot;},&quot;jobPosition&quot;:&quot;Freelance Art Director and Digital Designer&quot;,&quot;youtubeInterview&quot;:null,&quot;user&quot;:{&quot;username&quot;:&quot;flayks&quot;,&quot;displayName&quot;:&quot;Flayks&quot;},&quot;country&quot;:{&quot;name&quot;:&quot;France&quot;}}},{&quot;average&quot;:6,&quot;deleted&quot;:true,&quot;usability&quot;:6,&quot;design&quot;:6,&quot;creativity&quot;:6,&quot;content&quot;:6,&quot;judgeId&quot;:227480,&quot;judge&quot;:{&quot;id&quot;:227480,&quot;images&quot;:{&quot;photo&quot;:&quot;avatar\/414284\/5c49dace46858.jpg&quot;},&quot;jobPosition&quot;:&quot;Creative director in Geex Arts&quot;,&quot;youtubeInterview&quot;:null,&quot;user&quot;:{&quot;username&quot;:&quot;kornilov-slava&quot;,&quot;displayName&quot;:&quot;Kornilov Slava&quot;},&quot;country&quot;:{&quot;name&quot;:&quot;Russia&quot;}}},{&quot;average&quot;:6.9,&quot;deleted&quot;:false,&quot;usability&quot;:7,&quot;design&quot;:7,&quot;creativity&quot;:6,&quot;content&quot;:8,&quot;judgeId&quot;:227430,&quot;judge&quot;:{&quot;id&quot;:227430,&quot;images&quot;:{&quot;photo&quot;:&quot;avatar\/389334\/5a68a02c4637c.jpg&quot;},&quot;jobPosition&quot;:&quot;Art Director at Fred and Farid&quot;,&quot;youtubeInterview&quot;:null,&quot;user&quot;:{&quot;username&quot;:&quot;sonali-ranjit&quot;,&quot;displayName&quot;:&quot;Sonali Ranjit&quot;},&quot;country&quot;:{&quot;name&quot;:&quot;China&quot;}}},{&quot;average&quot;:7,&quot;deleted&quot;:false,&quot;usability&quot;:7,&quot;design&quot;:7,&quot;creativity&quot;:7,&quot;content&quot;:7,&quot;judgeId&quot;:227308,&quot;judge&quot;:{&quot;id&quot;:227308,&quot;images&quot;:{&quot;photo&quot;:&quot;avatar\/193650\/5a84137ad118d.jpg&quot;},&quot;jobPosition&quot;:&quot;Art Director at Torpedov.com&quot;,&quot;youtubeInterview&quot;:null,&quot;user&quot;:{&quot;username&quot;:&quot;swierkowski&quot;,&quot;displayName&quot;:&quot;Piotr Swierkowski&quot;},&quot;country&quot;:{&quot;name&quot;:&quot;Poland&quot;}}},{&quot;average&quot;:7.5,&quot;deleted&quot;:false,&quot;usability&quot;:7,&quot;design&quot;:8,&quot;creativity&quot;:7,&quot;content&quot;:8,&quot;judgeId&quot;:227406,&quot;judge&quot;:{&quot;id&quot;:227406,&quot;images&quot;:{&quot;photo&quot;:&quot;avatar\/53551\/5a60c54f82966.jpg&quot;},&quot;jobPosition&quot;:&quot;Porsche. Experience Designer, Director&quot;,&quot;youtubeInterview&quot;:null,&quot;user&quot;:{&quot;username&quot;:&quot;mikha&quot;,&quot;displayName&quot;:&quot;Mikha Makhoul&quot;},&quot;country&quot;:{&quot;name&quot;:&quot;Germany&quot;}}},{&quot;average&quot;:8,&quot;deleted&quot;:true,&quot;usability&quot;:8,&quot;design&quot;:7,&quot;creativity&quot;:9,&quot;content&quot;:10,&quot;judgeId&quot;:227548,&quot;judge&quot;:{&quot;id&quot;:227548,&quot;images&quot;:{&quot;photo&quot;:&quot;avatar\/709101\/5c5320f8518db162377092.jpg&quot;},&quot;jobPosition&quot;:&quot;Nintai Studio - Creative Director&quot;,&quot;youtubeInterview&quot;:null,&quot;user&quot;:{&quot;username&quot;:&quot;Albi79&quot;,&quot;displayName&quot;:&quot;Alberto Biffi&quot;},&quot;country&quot;:{&quot;name&quot;:&quot;Italy&quot;}}},{&quot;average&quot;:6.6,&quot;deleted&quot;:false,&quot;usability&quot;:7,&quot;design&quot;:6,&quot;creativity&quot;:7,&quot;content&quot;:7,&quot;judgeId&quot;:227245,&quot;judge&quot;:{&quot;id&quot;:227245,&quot;images&quot;:{&quot;photo&quot;:&quot;avatar\/390121\/5c754c7906a00591247090.jpg&quot;},&quot;jobPosition&quot;:&quot;Yoyo - Creative Director&quot;,&quot;youtubeInterview&quot;:null,&quot;user&quot;:{&quot;username&quot;:&quot;gregg-lawrence&quot;,&quot;displayName&quot;:&quot;Gregg Lawrence&quot;},&quot;country&quot;:{&quot;name&quot;:&quot;United Kingdom&quot;}}},{&quot;average&quot;:7,&quot;deleted&quot;:false,&quot;usability&quot;:7,&quot;design&quot;:7,&quot;creativity&quot;:7,&quot;content&quot;:7,&quot;judgeId&quot;:227516,&quot;judge&quot;:{&quot;id&quot;:227516,&quot;images&quot;:{&quot;photo&quot;:&quot;avatar\/356310\/5c5084ed4b6bd.jpg&quot;},&quot;jobPosition&quot;:&quot;Hibo - Digital Art Director&quot;,&quot;youtubeInterview&quot;:null,&quot;user&quot;:{&quot;username&quot;:&quot;epoch476&quot;,&quot;displayName&quot;:&quot;Andrea Puccini&quot;},&quot;country&quot;:{&quot;name&quot;:&quot;Italy&quot;}}},{&quot;average&quot;:7.84,&quot;deleted&quot;:false,&quot;usability&quot;:7.79,&quot;design&quot;:7.93,&quot;creativity&quot;:7.71,&quot;content&quot;:7.93,&quot;judgeId&quot;:304,&quot;judge&quot;:{&quot;id&quot;:304,&quot;images&quot;:{&quot;photo&quot;:&quot;avatar\/67656\/59afd7ecc9b9c.jpg&quot;},&quot;jobPosition&quot;:null,&quot;youtubeInterview&quot;:null,&quot;user&quot;:{&quot;username&quot;:&quot;awwwards_users&quot;,&quot;displayName&quot;:&quot;Awwwards Users&quot;},&quot;country&quot;:[]}}]">
                                                    <svg width="19.7" height="37" viewBox="0 0 21.335 40">
                                                        <path d="M16.185,0.502c-0.243-0.061-0.573-0.062-0.947-0.011c-1.252,0.173-2.504,1.055-2.847,2.002 c0.285,0.007,0.572,0.016,0.898-0.029C14.354,2.317,15.645,1.713,16.185,0.502z M10.769,6.173c-1.296,0.179-2.448,0.763-3.108,1.47 C8.104,7.772,8.674,7.787,9.373,7.69c1.297-0.179,2.64-0.744,3.346-1.456C12.186,6.119,11.513,6.07,10.769,6.173z M9.239,9.129 c-1.626,0.224-3.204,1.483-3.806,2.608c0.24,0.015,0.478,0.027,0.756-0.011c1.534-0.211,3.169-1.383,3.751-2.647 C9.708,9.111,9.469,9.098,9.239,9.129z M4.612,6.124c-0.941,1.408-0.874,3.955,0.108,5.238C5.515,9.927,5.428,7.242,4.612,6.124z  M7.387,2.238C6.426,3.506,6.296,5.985,7.133,7.243C7.954,5.993,8.071,3.421,7.387,2.238z M13.233,3.466 c-1.206,0.167-2.357,0.751-2.969,1.451c0.344,0.094,0.82,0.125,1.381,0.047c1.254-0.174,2.541-0.777,3.214-1.392 C14.41,3.397,13.837,3.383,13.233,3.466z M10.909,0C9.811,0.958,9.212,3.122,9.725,4.424C10.676,3.441,11.311,1.176,10.909,0z  M8.197,12.208L8.197,12.208c-1.811,0.25-3.605,2.343-4.036,4.012l0,0C5.918,15.93,7.876,14.002,8.197,12.208z M1.659,10.791 c-0.512,1.774,0.358,4.305,1.759,5.199C3.765,14.382,2.868,11.666,1.659,10.791z M4.181,21.848c1.691-0.756,3.131-3.366,2.954-5.329 C5.202,17.59,4.121,20.058,4.181,21.848z M7.42,20.645c-1.483,1.246-2.148,4.318-1.665,6.096C7.293,25.535,8.109,22.537,7.42,20.645 z M8.696,24.729c-1.277,2.068-1.01,4.684-0.129,6.262C9.727,29.461,9.828,26.416,8.696,24.729z M12.489,34.377 c0.671-1.652-0.051-4.488-1.505-5.752C10.442,30.877,11.335,33.213,12.489,34.377z M17.292,33.193 c0.347,1.801,2.214,3.67,4.016,4.037C20.903,35.346,19.09,33.512,17.292,33.193z M16.59,36.32c0.19-1.729-1.026-4.021-2.56-4.805 C13.943,33.607,15.247,35.512,16.59,36.32z M0.418,16.878c-0.123,1.861,1.356,4.356,3.05,4.974 C3.425,20.154,1.834,17.534,0.418,16.878z M5.025,26.936C4.423,24.986,1.83,22.645,0,22.426C0.482,24.535,2.97,26.797,5.025,26.936z  M11.902,34.936c-1.13-0.982-3.5-1.697-5.217-1.461c-0.325,0.045-0.597,0.133-0.824,0.211c1.056,1.131,3.182,1.783,4.945,1.541 C11.224,35.166,11.59,35.07,11.902,34.936z M15.652,39.813c0.598,0.197,1.356,0.238,2.148,0.129 c1.487-0.205,2.901-0.924,3.534-1.814c-0.542-0.162-1.209-0.168-1.948-0.066C17.814,38.328,16.297,39.012,15.652,39.813z  M7.861,31.371c-1.034-1.654-3.985-3.141-5.748-2.896c0,0,0,0-0.047,0.006c0.953,1.764,3.657,3.188,5.608,2.918 C7.769,31.383,7.815,31.377,7.861,31.371z M12.769,36.752c-1.161,0.16-2.103,0.527-2.648,1.029c0.872,0.494,2.124,0.65,3.378,0.479 c1.157-0.16,2.146-0.578,2.771-1.184C15.361,36.68,14.068,36.574,12.769,36.752z"></path>
                                                    </svg>
                                                    <div class="borders">
                                                        Jury votes
                                                    </div>
                                                    <div class="corner"></div>
                                                </div>
                                                <div class="box-users-likes">
                                                    <ul class="list-users">
                                                        <li>
                                                            <div class="item js-judge-note" data-username="peteryee" data-info="{&quot;country&quot;:{&quot;name&quot;:&quot;Malaysia&quot;},&quot;displayName&quot;:&quot;Peter Yee&quot;,&quot;score&quot;:&quot;7.40&quot;}">
                                                                <a href="/peteryee/">
                                                                    <img src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/avatar/14754/5c49dc47c920f.jpg" data-src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/avatar/14754/5c49dc47c920f.jpg" width="34" height="34" alt="Peter Yee" class="grayscale lazy lazy-loaded">
                                                                </a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="item js-judge-note" data-username="thefirstthelast" data-info="{&quot;country&quot;:{&quot;name&quot;:&quot;Ukraine&quot;},&quot;displayName&quot;:&quot;The First The Last&quot;,&quot;score&quot;:&quot;7.60&quot;}">
                                                                <a href="/thefirstthelast/">
                                                                    <img src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/avatar/238047/5c6bf77b4582e740759921.jpg" data-src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/avatar/238047/5c6bf77b4582e740759921.jpg" width="34" height="34" alt="The First The Last" class="grayscale lazy lazy-loaded">
                                                                </a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="item js-judge-note" data-username="trilo" data-info="{&quot;country&quot;:{&quot;name&quot;:&quot;Ukraine&quot;},&quot;displayName&quot;:&quot;Roman Trilo&quot;,&quot;score&quot;:&quot;6.80&quot;}">
                                                                <a href="/trilo/">
                                                                    <img src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/avatar/77977/56baf9dbb2f28.jpg" data-src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/avatar/77977/56baf9dbb2f28.jpg" width="34" height="34" alt="Roman Trilo" class="grayscale lazy lazy-loaded">
                                                                </a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="item js-judge-note" data-username="sunnyrathod" data-info="{&quot;country&quot;:{&quot;name&quot;:&quot;India&quot;},&quot;displayName&quot;:&quot;Sunny Rathod&quot;,&quot;score&quot;:&quot;6.70&quot;}">
                                                                <a href="/sunnyrathod/">
                                                                    <img src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/avatar/460409/5c49d98fe0ac2.jpg" data-src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/avatar/460409/5c49d98fe0ac2.jpg" width="34" height="34" alt="Sunny Rathod" class="grayscale lazy lazy-loaded">
                                                                </a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="item js-judge-note" data-username="Andreas-Panagiotopoulos" data-info="{&quot;country&quot;:{&quot;name&quot;:&quot;Sweden&quot;},&quot;displayName&quot;:&quot;Andreas Panagiotopoulos&quot;,&quot;score&quot;:&quot;7.60&quot;}">
                                                                <a href="/Andreas-Panagiotopoulos/">
                                                                    <img src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/avatar/390022/56c2df03d1fa1.jpg" data-src="https://assets.awwwards.com/awards/media/cache/thumb_user_70/avatar/390022/56c2df03d1fa1.jpg" width="34" height="34" alt="Andreas Panagiotopoulos" class="grayscale lazy lazy-loaded">
                                                                </a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                </div>
				<?php
					wp_reset_postdata(); // сбрасываем переменную $post
				}  
				else
					echo 'Записей нет.';
				?>	
                <div class="block p-0" id="block-sotd">
                    <div class="inner">
                        <div class="box-heading no-flex">
                            <div class="grid one-row">
                                <div class="col-3">
                                    <div class="box-left">
                                        <h2 class="title"><a href="/awards-of-the-day/" class="text-black">Проект недели</a></h2>
                                        <span>Прошлые победители</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid js-grid">
                            <ul class="list-items list-flex list-one-row js-elements-container">
                            <?php
                            $args = array(
                                'posts_per_page' => 3,
                                'cat' => 4,
                                
                               
                            );
                            $query = new WP_Query( $args );
                            
                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post();
                                    ?>
                                <li class="col-3 js-collectable">
                                    <div class="box-item">
                                        <figure class="rollover ">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="box-photo">
                                                    <img src="<?php echo get_the_post_thumbnail_url('','large'); ?>" alt="<?php echo get_the_author_link(); ?>" width="417" height="298" class="lazy lazy-loaded">
                                                </div>
                                            </a>

                                            <div class="hover-item top">
                                                <span class="js-options-collectable"></span>

                                                <span class="bt-item bt-default bt-likeit js-bt-like js-collect-like ">
													<svg class="ico-svg" viewBox="0 0 15 14">
											<use xlink:href="https://www.awwwards.com/assets/images/sprite-icons.svg#heart"></use>
											</svg>

											<span class="number">
															96
													</span>
                                                </span>
                                                <strong class="bt-item bt-default js-collect">Collect</strong>

                                            </div>

                                            <div class="hover-item bottom">
                                                <a class="js-visit-item bt-item bt-link" href="http://deplacemaison.com" data-identifier="deplace-maison" data-type="submission" target="_blank" rel="noopener nofollow">
                                                    <svg class="ico-svg" viewBox="0 0 22.24 14">
                                                        <use xlink:href="https://www.awwwards.com/assets/images/sprite-icons.svg#link"></use>
                                                    </svg>

                                                </a>
                                            </div>

                                        </figure>

                                        <div class="box-info">
                                            <div class="content">
                                                <div class="row">
                                                    <h3><a href="<?php the_permalink(); ?>"><? the_title() ?></a></h3>
                                                </div>
                                                <div class="row row-2col">
                                                    <div class="box-left">Из Калининградской области</div>

                                                    <div class="box-right">
													<?php the_date(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="footer style2">
                                                <div class="box-left">
                                                    <div class="box-byuser js-tooltip-user">
                                                        <div class="item js-user">
														<? global $post;
															$url = get_avatar_url( $post, "size=27&default=monsterid");
															$img = '<img alt="" src="'. $url .'">';
														?>
															<a href="<?php echo get_the_author_link(); ?>">
                                                                <img src="<? echo get_avatar_url('default') ?>" width="27" height="27" alt="<?php the_author(); ?>" class="lazy lazy-loaded">
                                                            </a>
                                                        </div>
                                                        <div class="by">
                                                            от <strong><a href="<?php echo get_the_author_link(); ?>" class="text-black"><?php the_author(); ?></a></strong>
                                                        </div>
                                                    </div>

                                                </div>
												
												<!--<div class="box-right">
                                                    <ul class="list-tags size-small">
                                                        <li class="hm">
                                                            <div class="tooltip">
                                                                <span class="item item-hm">HM</span>
                                                                <div class="box-tooltip">
                                                                    <div class="tooltip-text">Honorable Mention</div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="dotd">
                                                            <div class="tooltip">
                                                                <span class="item item-dotd">DEV</span>
                                                                <div class="box-tooltip">
                                                                    <div class="tooltip-text">Developer Site</div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="sotd">
                                                            <div class="tooltip">
                                                                <span class="item item-sotd">SOTD</span>
                                                                <div class="box-tooltip">
                                                                    <div class="tooltip-text">Site Of The Day</div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
								</li>
								
                                <? }
                                    wp_reset_postdata();
                                    } 
                                    else
                                        echo 'Записей нет.';
                                ?>									
                            </ul>
                        </div>
                    </div>
				</div>
				


                <div class="block p-0">
                    <div class="inner">
                        <div class="box-heading">
                            <div class="box-left">
                                <h2 class="title">
									<a href="/nominees/" class="text-black">
										Номинация
									</a>
								</h2>
                                <span>Мы нужднаемся в твоем голосе!</span>
                            </div>
                        </div>
                        <div class="grid js-grid" id="items-row">
                            <ul class="list-items list-flex list-one-row js-elements-container">
							<?php
                            $args = array(
                                'posts_per_page' => 3,
                                'cat' => 3,
                                
                               
                            );
                            $query = new WP_Query( $args );
                            
                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post();
                                    ?>
                                <li class="col-3 js-collectable">
                                    <div class="box-item">
                                        <figure class="rollover ">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="box-photo">
                                                    <img src="<?php echo get_the_post_thumbnail_url('','large'); ?>" alt="<? the_title() ?>" width="417" height="298" class="lazy lazy-loaded">
                                                </div>
                                            </a>

                                            <div class="hover-item top">
                                                <span class="js-options-collectable"></span>

                                                <span class="bt-item bt-default bt-likeit js-bt-like js-collect-like ">
														<svg class="ico-svg" viewBox="0 0 15 14">
												<use xlink:href="https://www.awwwards.com/assets/images/sprite-icons.svg#heart"></use>
												</svg>

												<span class="number">
																23
														</span>
                                                </span>
                                                <strong class="bt-item bt-default js-collect">Collect</strong>

                                            </div>

                                            <div class="hover-item bottom">
                                                <a class="js-visit-item bt-item bt-link" href="https://district2.studio" data-identifier="district2-studio" data-type="submission" target="_blank" rel="noopener nofollow">
                                                    <svg class="ico-svg" viewBox="0 0 22.24 14">
                                                        <use xlink:href="https://www.awwwards.com/assets/images/sprite-icons.svg#link"></use>
                                                    </svg>

                                                </a>
                                            </div>

                                            <div class="hover-item center">
                                                <a href="<?php the_permalink(); ?>" class="bt-default white-fill large vote-now">ГОЛОСОВАТЬ</a>
                                            </div>
                                        </figure>

                                        <div class="box-info">
                                            <div class="content">
                                                <div class="row">
                                                    <h3><a href="<?php the_permalink(); ?>"><? the_title(); ?></a></h3>
                                                </div>
                                                <div class="row row-2col">
                                                    <div class="box-left">Из Калининградской области</div>

                                                    <div class="box-right">
														<?php the_date(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="footer style2">
                                                <div class="box-left">
                                                    <div class="box-byuser js-tooltip-user">
                                                        <div class="item js-user">
														<? global $post;
															$url = get_avatar_url( $post, "size=27&default=monsterid");
															$img = '<img alt="" src="'. $url .'">';
														?>
															<a href="<?php echo get_the_author_link(); ?>">
                                                                <img src="<? echo get_avatar_url('default') ?>" width="27" height="27" alt="<?php the_author(); ?>" class="lazy lazy-loaded">
                                                            </a>
                                                        </div>
                                                        <div class="by">
                                                            от <strong><a href="<?php echo get_the_author_link(); ?>" class="text-black"><?php the_author(); ?></a></strong>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="box-right">
                                                    <ul class="list-tags size-small">
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                           <? }
								wp_reset_postdata();
								} 
								else
									echo 'Записей нет.';
							?>		
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="block pt-0">
                    <div class="inner">
                        <div class="box-heading pt-0">
                            <div class="box-left">
                                <h2 class="title">
									<a href="/blog/" class="text-black">
										Архив
									</a>
								</h2>
															<span class="heart-pulsate">
												<svg class="ico-svg" viewBox="0 0 15 14">
							<use xlink:href="https://www.awwwards.com/assets/images/sprite-icons.svg#heart"></use>
							</svg>

								</span>
                                <div class="inline-block">
                                    <span class="has-tablet">123!</span>
                                    <span class="has-mobile">123 456</span>
                                </div>
                            </div>
                        </div>
                        <div class="grid inspiration js-grid" data-page="2" data-route-load-more="tv_ajax_load_more_inspiration">
                            <ul class="list-items list-flex inspiration-list-one js-elements-container">
							<?php
                            $args = array(
                                'posts_per_page' => 3,
                                'cat' => 6,
                                
                               
                            );
                            $query = new WP_Query( $args );
                            
                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post();
                                    ?>
                                <li class="col-3 js-collectable" >
                                    <div class="box-item">
                                        <figure class="rollover no-hover">
                                            <a href="<?php the_permalink(); ?>">
                                                <img src="<?php echo get_the_post_thumbnail_url('','large'); ?>" width="417" height="298" alt="<? the_title()?>"> 
                                            </a>

                                            <div class="hover-item top">
                                                <span class="js-options-collectable"></span>
                                                <span class="bt-item bt-default bt-likeit js-bt-like js-collect-like ">
															<svg class="ico-svg" viewBox="0 0 15 14">
													<use xlink:href="https://www.awwwards.com/assets/images/sprite-icons.svg#heart"></use>
													</svg>

													<span class="number">
																	04
															</span>
                                                </span>
                                                <strong class="bt-item bt-default js-collect">Collect</strong>

                                            </div>

                                            <div class="hover-item bottom">
                                                <a class="bt-item bt-link" href="https://harvardfilmarchive.org/" target="_blank" rel="noopener nofollow">
                                                    <svg class="ico-svg" viewBox="0 0 22.24 14">
                                                        <use xlink:href="https://www.awwwards.com/assets/images/sprite-icons.svg#link"></use>
                                                    </svg>

                                                </a>
                                            </div>

                                        </figure>

                                        <div class="box-info">
                                            <div class="content">
                                                <div class="row">
                                                    <h3><a href="<?php the_permalink(); ?>"><? the_title() ?></a></h3>
                                                </div>
                                                <div class="row row-2col">
                                                    <div class="box-left">
                                                        Added to <strong><a href="<?php the_permalink(); ?>">SOTD Elements</a></strong> </div>

                                                </div>
                                            </div>
                                            <div class="footer style2">
                                                <div class="box-left">
                                                    <div class="box-byuser js-tooltip-user">
                                                        <div class="item js-user">
														<a href="<?php echo get_the_author_link(); ?>">
                                                                <img src="<? echo get_avatar_url('default') ?>" width="27" height="27" alt="<?php the_author(); ?>" class="lazy lazy-loaded">
                                                            </a>
                                                        </div>
                                                        <div class="by">
                                                            от <strong><a href="<?php echo get_the_author_link(); ?>" class="text-black"><?php the_author(); ?></a></strong>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="box-right"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <? }
									wp_reset_postdata();
								} 
								else
									echo 'Записей нет.';
							?>	
                            </ul>

                            <div class="button button-loadmore style2 js-bt-loading js-bt-loadmore">
                                <span class="txt-default">Load More</span>
                                <span class="txt-loading">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
        <!-- .site-main -->
        <!-- .content-area -->

        <?php
get_footer();