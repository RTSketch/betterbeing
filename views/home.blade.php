@extends('base')
    @section('content')

    <!------------------------------------------>
    <!--------------HOW-IT-WORKS---------------->
    <!------------------------------------------>
    <input class="how-it-works" id="toggle" type="checkbox" checked>
    <label class="how-it-works" for="toggle">How it works</label>
    <div class="how-it-works" id="expand">
        <section class="sticky-prompt">
            
            <div class="row">
                <div class="col span-1-of-2-step-1">

                    <div class="col span-1-of-2-step-2">
                        <div class="how-it-works-instructions">
                            
                            <i class="ion-ribbon-b"></i><br>
                            <p2>1</p2>
                            <p>Choose a badge you would like to earn and inspect it for tips and instructions.</p>
                        </div>
                    </div>


                    <div class="col span-1-of-2-step-2">
                        <div class="how-it-works-instructions">
                           
                            <i class="ion-camera"></i><i class="ion-videocamera"></i><i class="ion-iphone"></i> <br>
                            <p2>2</p2>
                            <p>Post images and videos to prove to other members that you have completed a challenge.</p>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-2-step-1">
                    <div class="col span-1-of-2-step-2">
                        <div class="how-it-works-instructions">
                            
                            <i class="ion-checkmark"></i><br>
                            <p2>3</p2>
                            <p>Review other members’ submissions in order to get your own submissions reviewed.</p>
                        </div>
                    </div>
                
                    <div class="col span-1-of-2-step-2">
                        <div class="how-it-works-instructions">
                            
                            <i class="ion-happy-outline"></i><br>
                            <p2>4</p2>
                            <p>Earn badges, share your achievements and make friends in the Better Being community!</p>
                        </div>
                    </div>
            
                </div>
            </div>
            <div class="how-it-works-padding">
            </div>
        </section>
    
    </div>

    <!------------------------------------------>
    <!----------------NAVIGATION---------------->
    <!------------------------------------------>
    <div class="hide-navigation">
        @yield('errormessage')
        <input class="navigation" id="toggle-nav" type="checkbox" checked>
        <label class="navigation" for="toggle-nav">Navigation</label>
        <div class="navigation" id="expand-nav">
            <section class="section-navigation">
                <div class="nav-badges-centre">
                    <div class="col span-1-of-2-step-2 nav">
                                        <p> <span class="btn-badge-nav badge-nav js--scroll-to-art-and-design">
                                                <i class="ion-paintbrush"></i>
                                            </span>
                                            <span class="btn-badge-nav badge-nav js--scroll-to-music">
                                                <i class="ion-music-note"></i>
                                            </span>
                                            <span class="btn-badge-nav badge-nav js--scroll-to-literature">
                                                <i class="ion-edit"></i>
                                            </span>
                                            <span class="btn-badge-nav badge-nav js--scroll-to-cooking">
                                                <i class="ion-fork"></i>
                                                <i class="ion-knife"></i>
                                            </span>
                                            <span class="btn-badge-nav badge-nav js--scroll-to-fitness">
                                                <i class="ion-ios-body"></i>
                                            </span>
                                            <span class="btn-badge-nav badge-nav js--scroll-to-sport">
                                                <i class="ion-ios-football"></i>
                                            </span>
                                            <span class="btn-badge-nav badge-nav js--scroll-to-mental">
                                                <i class="ion-android-bulb"></i>
                                            </span>
                                            <span class="btn-badge-nav badge-nav js--scroll-to-adventure">
                                                <i class="ion-bonfire"></i>
                                            </span> </p>
                                    </div>
                                    <div class="col span-1-of-2-step-2 nav">
                                        <p> <span class="btn-badge-nav badge-nav js--scroll-to-science-and-technology">
                                                <i class="ion-erlenmeyer-flask"></i>
                                            </span> 
                                            <span class="btn-badge-nav badge-nav js--scroll-to-languages">
                                                <i class="ion-earth"></i>
                                            </span> 
                                            <span class="btn-badge-nav badge-nav js--scroll-to-politics">
                                                <i class="ion-ios-chatbubble"></i>
                                            </span>
                                            <span class="btn-badge-nav badge-nav js--scroll-to-humanity">
                                                <i class="ion-heart"></i>
                                            </span>
                                            <span class="btn-badge-nav badge-nav js--scroll-to-crafting">
                                                <i class="ion-settings"></i>
                                            </span>
                                            <span class="btn-badge-nav badge-nav js--scroll-to-collaboration">
                                                <i class="ion-ios-people"></i>
                                            </span>
                                            <span class="btn-badge-nav badge-nav js--scroll-to-entrepreneurship">
                                                <i class="ion-cash"></i>
                                            </span>
                                            <span class="btn-badge-nav badge-nav js--scroll-to-personal-achievement">
                                                <i class="ion-happy-outline"></i>
                                            </span> </p>
                                    </div>
                </div>
            </section>
        </div>
    </div>
    


    <section class="section-summary">
        <div class="row">
            <div class="col span-1-of-4-collapse-wide box">
                <div class="profile-box"> <img src="resources/img/profile-picture.jpg" alt="Author photo">
                    <p class="profile-text">Tina Neal</p>
                </div>
            </div>
            <div class="col span-1-of-4-collapse-wide box">
                <div class="profile-box"> <div class="platinum-big badges-earned-icon shine">&#xf349;</div>
                    <p class="profile-numbers"> 35 </p>
                    <p class="profile-text"> Badges Earned </p>
                </div>
            </div>
            <div class="col span-1-of-4-collapse-wide box">
                <div class="profile-box"> 
                    
                    <div class="row">
                    
                        <li class="platinum icon shine-small">&#xf349;

                        </li>

                        <p class="summary-small-numbers">
                            1
                        </p>
                    </div>
                    
                    <div class="row">
                    
                    <li class="gold shine-small">&#xf349;

                    </li>
                    
                    <p class="summary-small-numbers">
                        1
                    </p>
                    </div>
                    
                    <div class="row">
                    
                    <div class="silver shine-small">&#xf349;

                    </div>
                    
                    <p class="summary-small-numbers">
                        1
                    </p>
                    </div>
                    
                    <div class="row">
                    
                    <div class="bronze shine-small">&#xf349;
                    
                    </div>
                    
                    <p class="summary-small-numbers">
                        1
                    </p>
                    </div>
                    <p class="profile-text">
                        Award Rankings
                    </p>
                    
                </div>
                <div class="small-number-column">
                
                    
                </div>
            </div>
            <div class="col span-1-of-4-collapse-wide box">
                <div class="profile-box summary"> <i class="ion-person summary-small-letters icon"></i>
                    <br>
                    <p class="summary-small-letters "> Reputation: </p>
                    <br>
                    <p class="summary-small-letters bold"> 1320 </p>
                    <br>
                    <p class="summary-small-letters "> Followers </p>
                    <br>
                    <p class="summary-small-letters bold"> 52 </p>
                    <br>
                    <p class="summary-small-letters "> Community Level: </p>
                    <br>
                    <p class="summary-small-letters bold"> Mega-Boss
                        <br>
                        <p class="profile-text"> </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-badges">
        <div class="row">
            <h2>My Badges</h2>
            <p class="long-copy"> Learn real-life skills, share your achievements and earn Badges! Once you attain all the Badges in a section you will be awarded a Master Badge! </p>
            <!------------------------------------------>
            <!-----------------Row-1-------------------->
            <!------------------------------------------>
            <div class="row js--row-art-and-design js--scroll-to-this">
                <div class="col span-1-of-2-step-1">
                    <div class="col span-1-of-2-step-2">
                        <div id="art-and-design" class="btn-bigBadge badge-big  tooltip2" data-tooltip-content="#tooltip_content"> <i class="ion-paintbrush badge-border"></i> </div>
                        <h3>Art &amp; Design</h3>
                        <!------------------------------------>
                        <!------------ART-&-DESIGN------------>
                        <!------------------------------------>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_painting">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        
                        </div>
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                    </div>
                    <!------------------------------------>
                    <!---------------MUSIC---------------->
                    <!------------------------------------>
                    <div class="col span-1-of-2-step-2">
                        <div class="btn-bigBadge badge-big js--row-music tooltip2" data-tooltip-content="#tooltip_content"> <i class="ion-music-note"></i> </div>
                        <h3>Music</h3>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        
                        </div>
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-2-step-1">
                    <div class="col span-1-of-2-step-2">
                        <div class="btn-bigBadge badge-big js--row-literature tooltip2" data-tooltip-content="#tooltip_content"> <i class="ion-edit"></i> </div>
                        <!------------------------------------>
                        <!-------------LITERATURE------------->
                        <!------------------------------------>
                        <h3>Literature</h3>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        
                        </div>
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col span-1-of-2-step-2"> <span class="btn-bigBadge badge-big js--row-cooking tooltip2" data-tooltip-content="#tooltip_content">
                        <i class="ion-fork"></i>
                        <i class="ion-knife"></i>
                    </span>
                        <h3>Cooking</h3>
                        <!------------------------------------>
                        <!--------------COOKING--------------->
                        <!------------------------------------>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        
                        </div>
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!------------------------------------------>
            <!-----------------Row-2-------------------->
            <!------------------------------------------>
            <div class="row">
                <div class="col span-1-of-2-step-1">
                    <div class="col span-1-of-2-step-2">
                        <div class="btn-bigBadge badge-big js--row-fitness tooltip2" data-tooltip-content="#tooltip_content"> <i class="ion-ios-body"></i> </div>
                        <h3>Fitness</h3>
                        <!------------------------------------>
                        <!---------------FITNESS-------------->
                        <!------------------------------------>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        
                        </div>
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col span-1-of-2-step-2">
                        <div class="btn-bigBadge badge-big js--row-sport tooltip2" data-tooltip-content="#tooltip_content"> <i class="ion-ios-football"></i> </div>
                        <h3>Sport</h3>
                        <!------------------------------------>
                        <!---------------SPORT---------------->
                        <!------------------------------------>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        
                        </div>
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-2-step-1">
                    <div class="col span-1-of-2-step-2">
                        <div class="btn-bigBadge badge-big js--row-mental tooltip2" data-tooltip-content="#tooltip_content"> <i class="ion-android-bulb"></i> </div>
                        <h3>Mental</h3>
                        <!------------------------------------>
                        <!---------------MENTAL--------------->
                        <!------------------------------------>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        
                        </div>
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col span-1-of-2-step-2">
                        <div class="btn-bigBadge badge-big js--row-adventure tooltip2" data-tooltip-content="#tooltip_content"> <i class="ion-bonfire"></i> </div>
                        <h3>Adventure</h3>
                        <!------------------------------------>
                        <!-------------ADVENTURE-------------->
                        <!------------------------------------>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        
                        </div>
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!------------------------------------------>
            <!-----------------Row-3-------------------->
            <!------------------------------------------>
            <div class="row">
                <div class="col span-1-of-2-step-1">
                    <div class="col span-1-of-2-step-2">
                        <div class="btn-bigBadge badge-big js--row-science-and-technology tooltip2" data-tooltip-content="#tooltip_content"> <i class="ion-erlenmeyer-flask"></i> </div>
                        <h3>
                            Science &amp;<br>Technology
                        </h3>
                        <!------------------------------------>
                        <!--------SCIENCE-&-TECHNOLOGY-------->
                        <!------------------------------------>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        
                        </div>
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col span-1-of-2-step-2">
                        <div class="btn-bigBadge badge-big js--row-languages tooltip2" data-tooltip-content="#tooltip_content"> <i class="ion-earth"></i> </div>
                        <h3>Languages</h3>
                        <!------------------------------------>
                        <!-------------LANGUAGES-------------->
                        <!------------------------------------>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        
                        </div>
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-2-step-1">
                    <div class="col span-1-of-2-step-2">
                        <div class="btn-bigBadge badge-big js--row-politics tooltip2" data-tooltip-content="#tooltip_content"> <i class="ion-ios-chatbubble"></i> </div>
                        <h3>Politics</h3>
                        <!------------------------------------>
                        <!--------------POLITICS-------------->
                        <!------------------------------------>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        
                        </div>
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col span-1-of-2-step-2">
                        <div class="btn-bigBadge badge-big js--row-humanity tooltip2" data-tooltip-content="#tooltip_content"> <i class="ion-heart"></i> </div>
                        <h3>Humanity</h3>
                        <!------------------------------------>
                        <!--------------HUMANITY-------------->
                        <!------------------------------------>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        
                        </div>
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!------------------------------------------>
            <!-----------------Row-4-------------------->
            <!------------------------------------------>
            <div class="row">
                <div class="col span-1-of-2-step-1">
                    <div class="col span-1-of-2-step-2">
                        <div class="btn-bigBadge badge-big js--row-crafting tooltip2" data-tooltip-content="#tooltip_content"> <i class="ion-settings"></i> </div>
                        <h3>Crafting</h3>
                        <!------------------------------------>
                        <!--------------CRAFTING-------------->
                        <!------------------------------------>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        
                        </div>
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col span-1-of-2-step-2">
                        <div class="btn-bigBadge badge-big js--row-collaboration tooltip2" data-tooltip-content="#tooltip_content"> <i class="ion-ios-people"></i> </div>
                        <h3>Collaboration</h3>
                        <!------------------------------------>
                        <!-----------COLLOBORATION------------>
                        <!------------------------------------>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        
                        </div>
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-2-step-1">
                    <div class="col span-1-of-2-step-2">
                        <div class="btn-bigBadge badge-big js--row-entrepreneurship tooltip2" data-tooltip-content="#tooltip_content"> <i class="ion-cash"></i> </div>
                        <h3>Entrepreneurship</h3>
                        <!------------------------------------>
                        <!----------ENTREPRENEURSHIP---------->
                        <!------------------------------------>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        
                        </div>
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col span-1-of-2-step-2">
                        <div class="btn-bigBadge badge-big js--row-personal-achievement tooltip2" data-tooltip-content="#tooltip_content"> <i class="ion-happy-outline"></i> </div>
                        <h3>Personal Achievement</h3>
                        <!------------------------------------>
                        <!--------PERSONAL-ACHIEVEMENT-------->
                        <!------------------------------------>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        <div class="badges-small"> 
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2 js--scroll-to-this" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        
                        </div>
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                        
                        <div class="badges-small">
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                            <span class="btn-badge badge-small tooltip2" data-tooltip-content="#tooltip_content">
                                <i class="ion-paintbrush badge-border"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-app">
        <h3>Download the app:</h3>
        <div class="app-links">
            <div class="app-buttons">
                <a href="#" class="btn-app"><img src="resources/img/Download_on_the_App_Store_Badge_US-UK_135x40.svg" alt="App Store Button"></a>
                <a href="#" class="btn-app"><img src="resources/img/google-play-badge.png" alt="Play Store Button"></a>
            </div>
        </div>
    </section>
    
@stop