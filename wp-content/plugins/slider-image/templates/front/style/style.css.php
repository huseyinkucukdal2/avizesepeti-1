<style>
<?php if(Hugeit_Slider_Options::get_share_buttons() == 1){ ?>
.slider_<?php echo $slider_id; ?> {
	margin-bottom: 110px
}
<?php } ?>
.share_buttons_<?php echo $slider_id; ?> {
	width: auto;
	height: auto;
	margin-top: 10px
}
<?php if(Hugeit_Slider_Options::get_share_buttons_style() == 'circle'){ ?>
.share_buttons_<?php echo $slider_id; ?> a {
	border-radius: 50% !important;
}
<?php } ?>
/* 
	Share buttons hover styles 
*/
<?php switch(Hugeit_Slider_Options::get_share_buttons_hover_style()){
	case '0': ?>
.icon-link_<?php echo $slider_id; ?> {
	width: 50px;
	height: 50px;
	background-color: #666;
	line-height: 50px;
	text-align: center;
	vertical-align: middle;
	display: inline-block;
	cursor: pointer;
	outline: none;
	margin: 5px;
	box-sizing: content-box;
}

.icon-link_<?php echo $slider_id; ?>.fill.share_buttons_facebook_<?php echo $slider_id; ?> {
	background-color: #fff;
}

.icon-link_<?php echo $slider_id; ?>.fill.share_buttons_facebook_<?php echo $slider_id; ?> .fa-facebook {
	color: #3b5998;
	-webkit-transition: color 150ms ease-in-out;
	transition: color 150ms ease-in-out;
}

.icon-link_<?php echo $slider_id; ?>.fill.share_buttons_twitter_<?php echo $slider_id; ?> {
	background-color: #fff;
}

.icon-link_<?php echo $slider_id; ?>.fill.share_buttons_twitter_<?php echo $slider_id; ?> .fa-twitter {
	color: #00aced;
	-webkit-transition: color 150ms ease-in-out;
	transition: color 150ms ease-in-out;
}

.icon-link_<?php echo $slider_id; ?>.fill.share_buttons_gp_<?php echo $slider_id; ?> {
	background-color: #fff;
}

.icon-link_<?php echo $slider_id; ?>.fill.share_buttons_gp_<?php echo $slider_id; ?> .fa-google-plus {
	color: #dd4b39;
	-webkit-transition: color 150ms ease-in-out;
	transition: color 150ms ease-in-out;
}

.icon-link_<?php echo $slider_id; ?>.fill.share_buttons_pinterest_<?php echo $slider_id; ?> {
	background-color: #fff;
}

.icon-link_<?php echo $slider_id; ?>.fill.share_buttons_pinterest_<?php echo $slider_id; ?> .fa-pinterest {
	color: #b81621;
	-webkit-transition: color 150ms ease-in-out;
	transition: color 150ms ease-in-out;
}

.icon-link_<?php echo $slider_id; ?>.fill.share_buttons_linkedin_<?php echo $slider_id; ?> {
	background-color: #fff;
}

.icon-link_<?php echo $slider_id; ?>.fill.share_buttons_linkedin_<?php echo $slider_id; ?> .fa-linkedin {
	color: #007bb6;
	-webkit-transition: color 150ms ease-in-out;
	transition: color 150ms ease-in-out;
}

.icon-link_<?php echo $slider_id; ?>.fill.share_buttons_tumblr_<?php echo $slider_id; ?> {
	background-color: #fff;
}

.icon-link_<?php echo $slider_id; ?>.fill.share_buttons_tumblr_<?php echo $slider_id; ?> .fa-tumblr {
	color: #32506d;
	-webkit-transition: color 150ms ease-in-out;
	transition: color 150ms ease-in-out;
}

.icon-link_<?php echo $slider_id; ?>.share_buttons_facebook_<?php echo $slider_id; ?> {
	border: 2px solid #3b5998;
}

.icon-link_<?php echo $slider_id; ?>.share_buttons_twitter_<?php echo $slider_id; ?> {
	border: 2px solid #00aced;
}

.icon-link_<?php echo $slider_id; ?>.share_buttons_gp_<?php echo $slider_id; ?> {
	border: 2px solid #dd4b39;
}

.icon-link_<?php echo $slider_id; ?>.share_buttons_pinterest_<?php echo $slider_id; ?> {
	border: 2px solid #b81621;
}

.icon-link_<?php echo $slider_id; ?>.share_buttons_linkedin_<?php echo $slider_id; ?> {
	border: 2px solid #007bb6;
}

.icon-link_<?php echo $slider_id; ?>.share_buttons_tumblr_<?php echo $slider_id; ?> {
	border: 2px solid #32506d;
}

.icon-link_<?php echo $slider_id; ?> .fa-facebook {
	color: #3b5998;
	-webkit-transition: color 150ms ease-in-out;
	transition: color 150ms ease-in-out;
}

.icon-link_<?php echo $slider_id; ?> .fa-twitter {
	color: #00aced;
	-webkit-transition: color 150ms ease-in-out;
	transition: color 150ms ease-in-out;
}

.icon-link_<?php echo $slider_id; ?> .fa-google-plus {
	color: #dd4b39;
	-webkit-transition: color 150ms ease-in-out;
	transition: color 150ms ease-in-out;
}

.icon-link_<?php echo $slider_id; ?> .fa-pinterest {
	color: #b81621;
	-webkit-transition: color 150ms ease-in-out;
	transition: color 150ms ease-in-out;
}

.icon-link_<?php echo $slider_id; ?> .fa-linkedin {
	color: #007bb6;
	-webkit-transition: color 150ms ease-in-out;
	transition: color 150ms ease-in-out;
}

.icon-link_<?php echo $slider_id; ?> .fa-tumblr {
	color: #32506d;
	-webkit-transition: color 150ms ease-in-out;
	transition: color 150ms ease-in-out;
}

.icon-link_<?php echo $slider_id; ?> .fa {
	color: #fff;
	line-height: 49px;
	font-size: 26px;
}

@media screen and (max-width: 768px){
	.icon-link_<?php echo $slider_id; ?> {
		width: 30px;
		height: 30px;
		line-height: 30px;
	}

	.icon-link_<?php echo $slider_id; ?> .fa {
		line-height: 31px;
		font-size: 15px;
	}
}
<?php break;
 } ?>

/* Lightbox styles */

.lightbox_iframe_cover {position:absolute;width:100%;height:100%;z-index:999}
a.slider_lightbox > div {width: 100% !important; height: 100% !important; padding: 0 !important}
.rwd-object{border:10px solid white}
.rwd-icon{speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
.rwd-arrows .rwd-next,.rwd-arrows .rwd-prev{background-color:rgba(0,0,0,.9);border-radius:2px;color:#999;cursor:pointer;display:block;font-size:22px;margin-top:-10px;padding:8px 8px 7px;position:absolute;z-index:1080}
.rwd-arrows .rwd-next.disabled,.rwd-arrows .rwd-prev.disabled{pointer-events:none;opacity:.5}
.rwd-toolbar{z-index:1082;left:0;position:absolute;top:0;width:100%}
.rwd-bar .rwd-icon,.rwd-toolbar .rwd-icon{cursor:pointer;color:#999;float:right;font-size:24px;line-height:27px;text-align:center;text-decoration:none!important;outline:0;-webkit-transition:color .2s linear;-o-transition:color .2s linear;transition:color .2s linear}
.rwd-bar .rwd-icon{position:absolute;bottom:0;z-index:1081}
.rwd-icon svg{cursor:pointer}
.rwd-bar .rwd-icon:hover,.rwd-toolbar .rwd-icon:hover{color:#FFF}
.rwd-bar .rwd-icon0:hover,.rwd-toolbar .rwd-icon0:hover,.rwd-arrows .rwd-icon0:hover{color:#000}
.rwd-arrows .rwd-prev, .rwd-arrows .rwd-next, .rwd-close {width: 46px;height: 46px;background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/slightbox_arrows.png' ?>);}
.rwd-arrows.arrows_1 .rwd-next {background-position: 227px 164px;}
.rwd-arrows.arrows_1 .rwd-prev {background-position: 277px 164px;}
.rwd-close.arrows_1 {width: 25px;height: 25px;background-position: 266px 194px;background-color: #fff;border-radius: 50%;}
.rwd-arrows.arrows_2 .rwd-next {background-position: 227px 110px;}
.rwd-arrows.arrows_2 .rwd-prev {background-position: 277px 110px;}
.rwd-close.arrows_2 {width: 25px;height: 25px;background-position: 266px 194px;background-color: #fff;border-radius: 50%;}
.rwd-arrows.arrows_3 .rwd-next {background-position: 227px 63px;}
.rwd-arrows.arrows_3 .rwd-prev {background-position: 277px 63px;}
.rwd-close.arrows_3 {width: 25px;height: 25px;background-position: 217px 195px;background-color: #fff;border-radius: 50%;}
.rwd-arrows.arrows_4 .rwd-next {background-position: 90px 167px;}
.rwd-arrows.arrows_4 .rwd-prev {background-position: 131px 167px;}
.rwd-close.arrows_4 {width: 30px;height: 30px;background-position: 38px 158px;}
.rwd-arrows.arrows_5 .rwd-next {background-position: 97px 108px;}
.rwd-arrows.arrows_5 .rwd-prev {background-position: 140px 108px;}
.rwd-close.arrows_5 {width: 25px;height: 25px;background-position: 43px 100px;}
.rwd-arrows.arrows_6 .rwd-next {background-position: 95px 63px;}
.rwd-arrows.arrows_6 .rwd-prev {background-position: 139px 63px;}
.rwd-close.arrows_6 {width: 35px;height: 35px;background-position: 48px 57px;}
.barCont{background:rgba(0,0,0,.9);width:100%;height:45px;position:absolute;bottom:0;z-index:1071}
#rwd-counter{color:#999;display:inline-block;font-size:16px;padding-top:12px;vertical-align:middle}
.rwd-bar #rwd-counter{position:absolute;bottom:11px;left:50%;transform:translateX(-50%);z-index:1090}
.rwd-next,.rwd-prev,.rwd-toolbar{opacity:1;-webkit-transition:-webkit-transform .35s cubic-bezier(0,0,.25,1) 0s,opacity .35s cubic-bezier(0,0,.25,1) 0s,color .2s linear;-moz-transition:-moz-transform .35s cubic-bezier(0,0,.25,1) 0s,opacity .35s cubic-bezier(0,0,.25,1) 0s,color .2s linear;-o-transition:-o-transform .35s cubic-bezier(0,0,.25,1) 0s,opacity .35s cubic-bezier(0,0,.25,1) 0s,color .2s linear;transition:transform .35s cubic-bezier(0,0,.25,1) 0s,opacity .35s cubic-bezier(0,0,.25,1) 0s,color .2s linear}
.rwd-cont .rwd-video-cont{display:inline-block;vertical-align:middle;max-width:1140px;max-height:100%;width:100%;padding:0 5px;top:50%;transform:translateY(-50%);position:relative}
.rwd-cont .rwd-container,.rwd-cont .rwd-image{max-width:100%;max-height:100%;transform:translateY(-50%);-ms-transform: translateY(-50%);-webkit-transform: translateY(-50%);-moz-transform: translateY(-50%);-o-transform: translateY(-50%);}
.rwd-cont .rwd-video{width:100%;height:0;padding-bottom:56.25%;overflow:hidden;position:relative}
.rwd-cont .rwd-video .rwd-object{display:inline-block;position:absolute;top:0;left:0;width:100%!important;height:100%!important}
.rwd-cont .rwd-video .rwd-video-play{width:84px;height:59px;position:absolute;left:50%;top:50%;margin-left:-42px;margin-top:-30px;z-index:1080;cursor:pointer}
.rwd-cont .rwd-video-object{width:100%!important;height:100%!important;position:absolute;top:0;left:0}
.rwd-cont .rwd-has-video .rwd-video-object{visibility:hidden}
.rwd-cont .rwd-has-video.rwd-video-playing .rwd-object,.rwd-cont .rwd-has-video.rwd-video-playing .rwd-video-play{display:none}
.rwd-cont .rwd-has-video.rwd-video-playing .rwd-video-object{visibility:visible}
.rwd-autoplay-button{left:50px}
.rwd-autoplay-button > .pause_bg{display:none}
.rwd-cont .rwd-caret{border-left:10px solid transparent;border-right:10px solid transparent;border-top:10px dashed;bottom:-10px;display:inline-block;height:0;left:50%;margin-left:-5px;position:absolute;vertical-align:middle;width:0}
.rwd-cont{width:100%;height:100%;position:fixed;top:0;left:0;z-index:9999999;opacity:0;-webkit-transition:opacity .15s ease 0s;-o-transition:opacity .15s ease 0s;transition:opacity .15s ease 0s}
.rwd-cont *{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
.rwd-cont.rwd-visible{opacity:1}
.rwd-cont.rwd-support .rwd-item.rwd-current,.rwd-cont.rwd-support .rwd-item.rwd-next-slide,.rwd-cont.rwd-support .rwd-item.rwd-prev-slide{-webkit-transition-duration:inherit!important;transition-duration:inherit!important;-webkit-transition-timing-function:inherit!important;transition-timing-function:inherit!important}
.rwd-cont .rwd-container{height:100%;width:100%;position:relative;overflow:hidden;margin-left:auto;margin-right:auto;top:50%;overflow:inherit}
.rwd-cont .cont-inner{width:100%;height:100%;position:absolute;left:0;top:0;white-space:nowrap}
.rwd-cont .contInner{width:40%;height:100%;position:absolute;left:60%;white-space:nowrap;z-index: 1200;background: black}
.rwd-cont.rwd-noSupport .rwd-current,.rwd-cont.rwd-support .rwd-current,.rwd-cont.rwd-support .rwd-next-slide,.rwd-cont.rwd-support .rwd-prev-slide{display:inline-block!important}
.rwd-cont .rwd-img-wrap,.rwd-cont .rwd-item{display:inline-block;text-align:center;position:absolute;width:100%;height:100%}
.rwd-cont .rwd-img-wrap{position:absolute;padding:0 5px;left:0;right:0;top:0;bottom:0}
.rwd-cont .rwd-item.rwd-complete{background-image:none}
.rwd-cont .rwd-item.rwd-current{z-index:1060}
.rwd-cont .rwd-image{display:inline-block;vertical-align:middle;width:auto !important;height:auto !important;top:50%;position:relative}
.rwd-cont.rwd-show-after-load .rwd-item .rwd-object,.rwd-cont.rwd-show-after-load .rwd-item .rwd-video-play{opacity:0;-webkit-transition:opacity .15s ease 0s;-o-transition:opacity .15s ease 0s;transition:opacity .15s ease 0s}
.rwd-cont.rwd-show-after-load .rwd-item.rwd-complete .rwd-object,.rwd-cont.rwd-show-after-load .rwd-item.rwd-complete .rwd-video-play{opacity:1}
.rwd-overlay{position:fixed;top:0;left:0;right:0;bottom:0;z-index:9999997;background:rgba(0,0,0,.7);opacity:0;-webkit-transition:opacity .15s ease 0s;-o-transition:opacity .15s ease 0s;transition:opacity .15s ease 0s}
.rwd-overlay.in{opacity:1}
.rwd-container .rwd-thumb-cont {position: absolute;width: 100%;z-index: 1080}
.rwd-container .rwd-thumb {padding: 10px 0;height: 100%}
.rwd-container .rwd-thumb-item {border-radius: 5px;float: left;overflow: hidden;cursor: pointer;height: 100%;margin-bottom: 5px;}
@media (min-width: 768px) {.rwd-container .rwd-thumb-item {-webkit-transition: border-color 0.25s ease;-o-transition: border-color 0.25s ease;transition: border-color 0.25s ease;}}
.rwd-container .rwd-thumb-item img {width: 100%;height: 100%;object-fit: cover;}
.rwd-container .rwd-toggle-thumb {background-color: #0D0A0A;border-radius: 2px 2px 0 0;color: #999;cursor: pointer;font-size: 24px;height: 39px;line-height: 27px; padding: 5px 0;position: absolute;left: 20px;text-align: center;top: -39px;width: 50px;}

/* Open/Close effects */
.rwd-container.open_1 {animation: unfoldIn 1s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
.rwd-container.close_1 {animation: unfoldOut 1s .3s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
@keyframes unfoldIn {0% {transform: translateY(-50%) scaleY(.002);}50% {transform: translateY(-50%) scaleY(.002);}100% {transform: translateY(-50%) scaleY(1);}}
@keyframes unfoldOut {0% {transform: translateY(-50%) scaleY(1);}50% {transform: translateY(-50%) scaleY(.002);}100% {transform: translateY(-50%) scaleY(.002);}}
.rwd-container.open_2 {animation: blowUpIn .5s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
.rwd-container.close_2 {animation: blowUpOut .5s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
@keyframes blowUpIn {0% {transform: translateY(-50%) scale(0);}100% {transform: translateY(-50%) scale(1);}}
@keyframes blowUpOut {0% {transform: translateY(-50%) scale(1);opacity:1;}100% {transform: translateY(-50%) scale(0);opacity:0;}}
.rwd-container.open_3 {animation: roadRunnerIn .3s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
.rwd-container.close_3 {animation: roadRunnerOut .5s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
@keyframes roadRunnerIn {0% {transform:translate(-1500px, -50%) skewX(50deg) scaleX(1.3);}70% {transform:translate(30px, -50%) skewX(-25deg) scaleX(.9);}100% {transform:translate(0px, -50%) skewX(0deg) scaleX(1);}}
@keyframes roadRunnerOut {0% {transform:translate(0px, -50%) skewX(0deg) scaleX(1);}30% {transform:translate(-30px, -50%) skewX(-25deg) scaleX(.9);}100% {transform:translate(1500px, -50%) skewX(50deg) scaleX(1.3);}}
.rwd-container.open_4 {animation: runnerIn .3s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
.rwd-container.close_4 {animation: runnerOut .5s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
@keyframes runnerIn {0% {transform:translate(-1500px, -50%);}70% {transform:translate(30px, -50%);}100% {transform:translate(0px, -50%);}}
@keyframes runnerOut {0% {transform:translate(0px, -50%);}30% {transform:translate(-30px, -50%);}100% {transform:translate(1500px, -50%);}}
.rwd-container.open_5 {animation: rotateIn .3s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
.rwd-container.close_5 {animation: rotateOut .5s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
@-ms-keyframes rotateIn {from {-ms-transform: translateY(-50%) rotate(0deg);} to { -ms-transform: translateY(-50%)rotate(360deg);}}
@-moz-keyframes rotateIn {from {-moz-transform: translateY(-50%) rotate(0deg);} to { -moz-transform: translateY(-50%)rotate(360deg);}}
@-webkit-keyframes rotateIn {from {-webkit-transform: translateY(-50%) rotate(0deg);} to { -webkit-transform: translateY(-50%)rotate(360deg);}}
@keyframes rotateIn {from {transform: translateY(-50%) rotate(0deg);} to { transform: translateY(-50%)rotate(360deg);}}
@-ms-keyframes rotateOut {from {-ms-transform: translateY(-50%) rotate(360deg);} to { -ms-transform: translateY(-50%)rotate(0deg);}}
@-moz-keyframes rotateOut {from {-moz-transform: translateY(-50%) rotate(360deg);} to { -moz-transform: translateY(-50%)rotate(0deg);}}
@-webkit-keyframes rotateOut {from {-webkit-transform: translateY(-50%) rotate(360deg);} to { -webkit-transform: translateY(-50%)rotate(0deg);}}
@keyframes rotateOut {from {transform: translateY(-50%) rotate(360deg);} to { transform: translateY(-50%)rotate(0deg);}}
.rwd-container.open_1_r {animation: unfold_In 1s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
.rwd-container.close_1_r {animation: unfold_Out 1s .3s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
@keyframes unfold_In {0% {transform: translateY(-50%) scaleX(.002);}50% {transform: translateY(-50%) scaleX(.002);}100% {transform: translateY(-50%) scaleX(1);}}
@keyframes unfold_Out {0% {transform: translateY(-50%) scaleX(1);}50% {transform: translateY(-50%) scaleX(.002);}100% {transform: translateY(-50%) scaleX(.002);}}
.rwd-container.open_2_r {animation: blowUp_In .5s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
.rwd-container.close_2_r {animation: blowUp_Out .5s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
@keyframes blowUp_In {0% {transform: translateY(-50%) scale(2);}100% {transform: translateY(-50%) scale(1);}}
@keyframes blowUp_Out {0% {transform: translateY(-50%) scale(1);opacity:1;}100% {transform: translateY(-50%) scale(2);opacity:0;}}
.rwd-container.open_3_r {animation: roadRunner_In .3s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
.rwd-container.close_3_r {animation: roadRunner_Out .5s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
@keyframes roadRunner_In {0% {transform:translate(1500px, -50%) skewX(50deg) scaleX(1.3);}70% {transform:translate(-30px, -50%) skewX(-25deg) scaleX(.9);}100% {transform:translate(0px, -50%) skewX(0deg) scaleX(1);}}
@keyframes roadRunner_Out {0% {transform:translate(0px, -50%) skewX(0deg) scaleX(1);}30% {transform:translate(30px, -50%) skewX(-25deg) scaleX(.9);}100% {transform:translate(-1500px, -50%) skewX(50deg) scaleX(1.3);}}
.rwd-container.open_4_r {animation: runner_In .3s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
.rwd-container.close_4_r {animation: runner_Out .5s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
@keyframes runner_In {0% {transform:translate(1500px, -50%);}70% {transform:translate(-30px, -50%);}100% {transform:translate(0px, -50%);}}
@keyframes runner_Out {0% {transform:translate(0px, -50%);}30% {transform:translate(30px, -50%);}100% {transform:translate(-1500px, -50%);}}
.rwd-container.open_5_r {animation: rotate_In .3s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
.rwd-container.close_5_r {animation: rotate_Out .5s cubic-bezier(0.165, 0.840, 0.440, 1.000);}
@-ms-keyframes rotate_In {from {-ms-transform: translateY(-50%) rotate(360deg);} to { -ms-transform: translateY(-50%)rotate(0deg);}}
@-moz-keyframes rotate_In {from {-moz-transform: translateY(-50%) rotate(360deg);} to { -moz-transform: translateY(-50%)rotate(0deg);}}
@-webkit-keyframes rotate_In {from {-webkit-transform: translateY(-50%) rotate(360deg);} to { -webkit-transform: translateY(-50%)rotate(0deg);}}
@keyframes rotate_In {from {transform: translateY(-50%) rotate(360deg);} to { transform: translateY(-50%)rotate(0deg);}}
@-ms-keyframes rotate_Out {from {-ms-transform: translateY(-50%) rotate(0deg);} to { -ms-transform: translateY(-50%)rotate(360deg);}}
@-moz-keyframes rotate_Out {from {-moz-transform: translateY(-50%) rotate(0deg);} to { -moz-transform: translateY(-50%)rotate(360deg);}}
@-webkit-keyframes rotate_Out {from {-webkit-transform: translateY(-50%) rotate(0deg);} to { -webkit-transform: translateY(-50%)rotate(360deg);}}
@keyframes rotate_Out {from {transform: translateY(-50%) rotate(0deg);} to { transform: translateY(-50%)rotate(360deg);}}

/* Effects */
.rwd-support.rwd-no-trans .rwd-current,.rwd-support.rwd-no-trans .rwd-next-slide,.rwd-support.rwd-no-trans .rwd-prev-slide{-webkit-transition:none 0s ease 0s!important;-moz-transition:none 0s ease 0s!important;-o-transition:none 0s ease 0s!important;transition:none 0s ease 0s!important}
.rwd-support.rwd-animation .rwd-item,.rwd-support.rwd-use .rwd-item{-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;backface-visibility:hidden}
.rwd-support.slider_effect_1 .rwd-item,.rwd-support.slider_effect_3 .rwd-item,.rwd-support.slider_effect_4 .rwd-item,.rwd-support.slider_effect_5 .rwd-item,.rwd-support.slider_effect_6 .rwd-item,.rwd-support.slider_effect_7 .rwd-item,.rwd-support.slider_effect_8 .rwd-item,.rwd-support.slider_effect_9 .rwd-item,.rwd-support.slider_effect_10 .rwd-item{opacity:0}
.rwd-support.slider_effect_1 .rwd-item.rwd-current{opacity:1}
.rwd-support.slider_effect_1 .rwd-item.rwd-current,.rwd-support.slider_effect_1 .rwd-item.rwd-next-slide,.rwd-support.slider_effect_1 .rwd-item.rwd-prev-slide{-webkit-transition:opacity .1s ease 0s;-moz-transition:opacity .1s ease 0s;-o-transition:opacity .1s ease 0s;transition:opacity .1s ease 0s}
.rwd-support.slider_effect_2.rwd-use .rwd-item{opacity:0}
.rwd-support.slider_effect_2.rwd-use .rwd-item.rwd-prev-slide{-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}
.rwd-support.slider_effect_2.rwd-use .rwd-item.rwd-next-slide{-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}
.rwd-support.slider_effect_2.rwd-use .rwd-item.rwd-current{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}
.rwd-support.slider_effect_2.rwd-use .rwd-item.rwd-current,.rwd-support.slider_effect_2.rwd-use .rwd-item.rwd-next-slide,.rwd-support.slider_effect_2.rwd-use .rwd-item.rwd-prev-slide{-webkit-transition:-webkit-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-moz-transition:-moz-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-o-transition:-o-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;transition:transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s}
.rwd-support.slider_effect_2.rwd-animation .rwd-item{opacity:0;position:absolute;left:0}
.rwd-support.slider_effect_2.rwd-animation .rwd-item.rwd-prev-slide{left:-100%}
.rwd-support.slider_effect_2.rwd-animation .rwd-item.rwd-next-slide{left:100%}
.rwd-support.slider_effect_2.rwd-animation .rwd-item.rwd-current{left:0;opacity:1}
.rwd-support.slider_effect_2.rwd-animation .rwd-item.rwd-current,.rwd-support.slider_effect_2.rwd-animation .rwd-item.rwd-next-slide,.rwd-support.slider_effect_2.rwd-animation .rwd-item.rwd-prev-slide{-webkit-transition:left 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-moz-transition:left 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-o-transition:left 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;transition:left 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s}
.rwd-support.slider_effect_3 .rwd-item.rwd-prev-slide{-moz-transform:scale3d(1,0,1) translate3d(-100%,0,0);-o-transform:scale3d(1,0,1) translate3d(-100%,0,0);-ms-transform:scale3d(1,0,1) translate3d(-100%,0,0);-webkit-transform:scale3d(1,0,1) translate3d(-100%,0,0);transform:scale3d(1,0,1) translate3d(-100%,0,0)}
.rwd-support.slider_effect_3 .rwd-item.rwd-next-slide{-moz-transform:scale3d(1,0,1) translate3d(100%,0,0);-o-transform:scale3d(1,0,1) translate3d(100%,0,0);-ms-transform:scale3d(1,0,1) translate3d(100%,0,0);-webkit-transform:scale3d(1,0,1) translate3d(100%,0,0);transform:scale3d(1,0,1) translate3d(100%,0,0)}
.rwd-support.slider_effect_3 .rwd-item.rwd-current{-moz-transform:scale3d(1,1,1) translate3d(0,0,0);-o-transform:scale3d(1,1,1) translate3d(0,0,0);-ms-transform:scale3d(1,1,1) translate3d(0,0,0);-webkit-transform:scale3d(1,1,1) translate3d(0,0,0);transform:scale3d(1,1,1) translate3d(0,0,0);opacity:1}
.rwd-support.slider_effect_3 .rwd-item.rwd-current,.rwd-support.slider_effect_3 .rwd-item.rwd-next-slide,.rwd-support.slider_effect_3 .rwd-item.rwd-prev-slide{-webkit-transition:-webkit-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-moz-transition:-moz-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-o-transition:-o-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;transition:transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s}
.rwd-support.slider_effect_4 .rwd-item.rwd-prev-slide{-moz-transform:rotate(-360deg);-o-transform:rotate(-360deg);-ms-transform:rotate(-360deg);-webkit-transform:rotate(-360deg);transform:rotate(-360deg)}
.rwd-support.slider_effect_4 .rwd-item.rwd-next-slide{-moz-transform:rotate(360deg);-o-transform:rotate(360deg);-ms-transform:rotate(360deg);-webkit-transform:rotate(360deg);transform:rotate(360deg)}
.rwd-support.slider_effect_4 .rwd-item.rwd-current{-moz-transform:rotate(0deg);-o-transform:rotate(0deg);-ms-transform:rotate(0deg);-webkit-transform:rotate(0deg);transform:rotate(0deg);opacity:1}
.rwd-support.slider_effect_4 .rwd-item.rwd-current,.rwd-support.slider_effect_4 .rwd-item.rwd-next-slide,.rwd-support.slider_effect_4 .rwd-item.rwd-prev-slide{-webkit-transition:-webkit-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-moz-transition:-moz-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-o-transition:-o-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;transition:transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s}
.rwd-support.slider_effect_5 .rwd-item.rwd-prev-slide{-moz-transform:rotate(360deg);-o-transform:rotate(360deg);-ms-transform:rotate(360deg);-webkit-transform:rotate(360deg);transform:rotate(360deg)}
.rwd-support.slider_effect_5 .rwd-item.rwd-next-slide{-moz-transform:rotate(-360deg);-o-transform:rotate(-360deg);-ms-transform:rotate(-360deg);-webkit-transform:rotate(-360deg);transform:rotate(-360deg)}
.rwd-support.slider_effect_5 .rwd-item.rwd-current{-moz-transform:rotate(0deg);-o-transform:rotate(0deg);-ms-transform:rotate(0deg);-webkit-transform:rotate(0deg);transform:rotate(0deg);opacity:1}
.rwd-support.slider_effect_5 .rwd-item.rwd-current,.rwd-support.slider_effect_5 .rwd-item.rwd-next-slide,.rwd-support.slider_effect_5 .rwd-item.rwd-prev-slide{-webkit-transition:-webkit-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-moz-transition:-moz-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-o-transition:-o-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;transition:transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s}
.rwd-support.slider_effect_6 .rwd-item.rwd-prev-slide{-webkit-transform:translate3d(-100%,0,0);transform:translate3d(-100%,0,0)}
.rwd-support.slider_effect_6 .rwd-item.rwd-next-slide{-moz-transform:translate3d(0,0,0) scale(.5);-o-transform:translate3d(0,0,0) scale(.5);-ms-transform:translate3d(0,0,0) scale(.5);-webkit-transform:translate3d(0,0,0) scale(.5);transform:translate3d(0,0,0) scale(.5)}
.rwd-support.slider_effect_6 .rwd-item.rwd-current{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}
.rwd-support.slider_effect_6 .rwd-item.rwd-current,.rwd-support.slider_effect_6 .rwd-item.rwd-next-slide,.rwd-support.slider_effect_6 .rwd-item.rwd-prev-slide{-webkit-transition:-webkit-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-moz-transition:-moz-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-o-transition:-o-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;transition:transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s}
.rwd-support.slider_effect_7 .rwd-item.rwd-prev-slide{-moz-transform:translate3d(0,0,0) scale(.5);-o-transform:translate3d(0,0,0) scale(.5);-ms-transform:translate3d(0,0,0) scale(.5);-webkit-transform:translate3d(0,0,0) scale(.5);transform:translate3d(0,0,0) scale(.5)}
.rwd-support.slider_effect_7 .rwd-item.rwd-next-slide{-webkit-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}
.rwd-support.slider_effect_7 .rwd-item.rwd-current{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}
.rwd-support.slider_effect_7 .rwd-item.rwd-current,.rwd-support.slider_effect_7 .rwd-item.rwd-next-slide,.rwd-support.slider_effect_7 .rwd-item.rwd-prev-slide{-webkit-transition:-webkit-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-moz-transition:-moz-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-o-transition:-o-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;transition:transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s}
.rwd-support.slider_effect_8 .rwd-item.rwd-prev-slide{-webkit-transform:scale3d(1.1,1.1,1.1);transform:scale3d(1.1,1.1,1.1)}
.rwd-support.slider_effect_8 .rwd-item.rwd-next-slide{-webkit-transform:scale3d(.9,.9,.9);transform:scale3d(.9,.9,.9)}
.rwd-support.slider_effect_8 .rwd-item.rwd-current{-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1);opacity:1}
.rwd-support.slider_effect_8 .rwd-item.rwd-current,.rwd-support.slider_effect_8 .rwd-item.rwd-next-slide,.rwd-support.slider_effect_8 .rwd-item.rwd-prev-slide{-webkit-transition:-webkit-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity 1s ease 0s;-moz-transition:-moz-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity 1s ease 0s;-o-transition:-o-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity 1s ease 0s;transition:transform 1s cubic-bezier(0,0,.25,1) 0s,opacity 1s ease 0s}
.rwd-support.slider_effect_9 .rwd-item.rwd-prev-slide{-webkit-transform:translate3d(0,-100%,0);transform:translate3d(0,-100%,0)}
.rwd-support.slider_effect_9 .rwd-item.rwd-next-slide{-webkit-transform:translate3d(0,100%,0);transform:translate3d(0,100%,0)}
.rwd-support.slider_effect_9 .rwd-item.rwd-current{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);opacity:1}
.rwd-support.slider_effect_9 .rwd-item.rwd-current,.rwd-support.slider_effect_9 .rwd-item.rwd-next-slide,.rwd-support.slider_effect_9 .rwd-item.rwd-prev-slide{-webkit-transition:-webkit-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-moz-transition:-moz-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;-o-transition:-o-transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s;transition:transform 1s cubic-bezier(0,0,.25,1) 0s,opacity .1s ease 0s}
.rwd-support.slider_effect_10 .rwd-item.rwd-prev-slide {-moz-transform: scale3d(0, 0, 0) translate3d(-100%, 0, 0);-o-transform: scale3d(0, 0, 0) translate3d(-100%, 0, 0);-ms-transform: scale3d(0, 0, 0) translate3d(-100%, 0, 0);-webkit-transform: scale3d(0, 0, 0) translate3d(-100%, 0, 0);transform: scale3d(0, 0, 0) translate3d(-100%, 0, 0);}
.rwd-support.slider_effect_10 .rwd-item.rwd-next-slide {-moz-transform: scale3d(0, 0, 0) translate3d(100%, 0, 0);-o-transform: scale3d(0, 0, 0) translate3d(100%, 0, 0);-ms-transform: scale3d(0, 0, 0) translate3d(100%, 0, 0);-webkit-transform: scale3d(0, 0, 0) translate3d(100%, 0, 0);transform: scale3d(0, 0, 0) translate3d(100%, 0, 0);}
.rwd-support.slider_effect_10 .rwd-item.rwd-current {-moz-transform: scale3d(1, 1, 1) translate3d(0, 0, 0);-o-transform: scale3d(1, 1, 1) translate3d(0, 0, 0);-ms-transform: scale3d(1, 1, 1) translate3d(0, 0, 0);-webkit-transform: scale3d(1, 1, 1) translate3d(0, 0, 0);transform: scale3d(1, 1, 1) translate3d(0, 0, 0);opacity: 1;}
.rwd-support.slider_effect_10 .rwd-item.rwd-prev-slide, .rwd-support.slider_effect_10 .rwd-item.rwd-next-slide, .rwd-support.slider_effect_10 .rwd-item.rwd-current {-webkit-transition: -webkit-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 1s ease 0s;=moz-transition: -moz-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 1s ease 0s;-o-transition: -o-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 1s ease 0s;transition: transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 1s ease 0s;}

/* Lightbox styles end */

<?php if($slider->get_view() !== 'carousel1'){ ?>

ul#slider_<?php echo $slider_id; ?> {
	margin: 0;
	width: 100%;
	height: 100%;
	max-width: <?php echo $slider->get_width() . 'px'; ?>;
	max-height: <?php echo $slider->get_height() . 'px'; ?>;
	overflow: visible;
	padding: 0;
}

.slider_<?php echo $slider_id; ?> {
	width: 100%;
	height: 100%;
	max-width: <?php echo $slider->get_width() + 2 * Hugeit_Slider_Options::get_slideshow_border_size() . 'px'; ?>;
	max-height: <?php if($slider->get_navigate_by() === 'thumbnail'){
		echo $slider->get_height() + Hugeit_Slider_Options::get_thumb_height() + 3 * Hugeit_Slider_Options::get_slideshow_border_size() . 'px';
	} else {
		  echo $slider->get_height() + 2 * Hugeit_Slider_Options::get_slideshow_border_size() . 'px';
	} ?>;
<?php
switch($slider->get_position()){
case 'center':
    echo 'margin: 0 auto;';
    break;
case 'left':
    echo 'left: 0;';
    break;
case 'right':
    echo 'margin-left: calc(100% - ' . $slider->get_width() . 'px);';
    break;
}
?>
}
.huge-it-wrap:after,
.huge-it-slider:after,
.huge-it-thumb-wrap:after,
.huge-it-arrows:after,
.huge-it-caption:after {
	content: ".";
	display: block;
	height: 0;
	clear: both;
	line-height: 0;
	visibility: hidden;
}

.video_cover, .playSlider, .pauseSlider, div[class*=playButton] {
	display: none !important;
}

.huge-it-thumb-wrap .video_cover {
	display: block !important;
}

iframe.huge_it_vimeo_iframe {
	height: <?php echo $slider->get_height() . 'px'; ?>;
}

div[class*=slider-loader-] {
	background: rgba(0, 0, 0, 0) url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL . '/loading/loading' . Hugeit_Slider_Options::get_loading_icon_type() . '.gif'; ?>) no-repeat center;
	height: 90px;
	overflow: hidden;
	position: absolute;
	top: <?php echo ($slider->get_height() / 2 - 45) . 'px'; ?>;;
	width: <?php echo $slider->get_width() . 'px'; ?>;;
	z-index: 3;
}

.huge-it-wrap {
	opacity: 0;
	position: relative;
	border: <?php echo Hugeit_Slider_Options::get_slideshow_border_size().'px'; ?> solid <?php echo '#'.Hugeit_Slider_Options::get_slideshow_border_color(); ?>;
	-webkit-border-radius: <?php echo Hugeit_Slider_Options::get_slideshow_border_radius().'px'; ?>;
	-moz-border-radius: <?php echo Hugeit_Slider_Options::get_slideshow_border_radius().'px'; ?>;
	border-radius: <?php echo Hugeit_Slider_Options::get_slideshow_border_radius().'px'; ?>;
<?php if(!(Hugeit_Slider_Options::get_navigation_type() === '16' && $slider->get_navigate_by() !== 'thumbnail')){
    echo 'overflow: hidden;';
}?>;
}

.huge-it-slide-bg {
	background: <?php
					list($r,$g,$b) = array_map('hexdec',str_split(Hugeit_Slider_Options::get_slider_background_color(),2));
						$titleopacity = Hugeit_Slider_Options::get_slider_background_color_transparency();
						echo 'rgba('.$r.','.$g.','.$b.','.$titleopacity.')'; ?>;
<?php if($slider->get_navigate_by() !== 'thumbnail'){
	echo 'height: 100%';
}
if($slider->get_navigate_by() == 'thumbnail'){ ?>
	border-bottom:	<?php echo Hugeit_Slider_Options::get_slideshow_border_size().'px'; ?> solid <?php echo '#'.Hugeit_Slider_Options::get_slideshow_border_color(); ?>;
<?php } ?>
}

.huge-it-caption {
	position: absolute;
	display: block;
}

.huge-it-caption div {
	padding: 10px 20px;
	line-height: normal;
}

.slider-title {
<?php if(Hugeit_Slider_Options::get_title_has_margin() === 1){
	$width = 'calc(' . Hugeit_Slider_Options::get_title_width() . '% - 20px)';
	$margin = '10px';
} else {
	$width = Hugeit_Slider_Options::get_title_width(). '%';
	$margin = '0';
} ?>
	width: <?php echo $width; ?>;
	margin: <?php echo $margin;?>;
	font-size: <?php echo Hugeit_Slider_Options::get_title_font_size() . 'px'; ?>;
	color: <?php echo '#' . Hugeit_Slider_Options::get_title_color(); ?>;
	text-align: <?php echo Hugeit_Slider_Options::get_title_text_align(); ?>;
	background: <?php
					list($r,$g,$b) = array_map('hexdec',str_split(Hugeit_Slider_Options::get_title_background_color(),2));
						$titleopacity = Hugeit_Slider_Options::get_title_background_transparency();
						echo 'rgba('.$r.','.$g.','.$b.','.$titleopacity.')'; ?>;
	border: <?php echo Hugeit_Slider_Options::get_title_border_size() . 'px solid #' . Hugeit_Slider_Options::get_title_border_color(); ?>;
	border-radius: <?php echo Hugeit_Slider_Options::get_title_border_radius() . 'px'; ?>;
<?php switch(Hugeit_Slider_Options::get_title_position()){
		case '11':
			echo 'left: 0 !important; bottom: 0;';
			break;
		case '21':
			echo 'left: 50% !important; transform: translateX(-50%); bottom: 0;';
			break;
		case '31':
			echo 'right: 0 !important; bottom: 0;';
			break;
		case '12':
			echo 'left: 0 !important; top: 50%; transform: translateY(-50%);';
			break;
		case '22':
			echo 'left: 50% !important; top: 50%; transform: translate(-50%, -50%);';
			break;
		case '32':
			echo 'right: 0 !important; top: 50%; transform: translateY(-50%);';
			break;
		case '13':
			echo 'left: 0 !important; top: 0;';
			break;
		case '23':
			echo 'left: 50% !important; transform: translateX(-50%); top: 0;';
			break;
		case '33':
			echo 'right: 0 !important; top: 0;';
			break;
} ?>
}

.slider-description {
<?php if(Hugeit_Slider_Options::get_description_has_margin() === 1){
	$width = 'calc(' . Hugeit_Slider_Options::get_description_width() . '% - 20px)';
	$margin = '10px';
} else {
	$width = Hugeit_Slider_Options::get_description_width(). '%';
	$margin = '0';
} ?>
	width: <?php echo $width; ?>;
	margin: <?php echo $margin;?>;
	font-size: <?php echo Hugeit_Slider_Options::get_description_font_size() . 'px'; ?>;
	color: <?php echo '#' . Hugeit_Slider_Options::get_description_color(); ?>;
	text-align: <?php echo Hugeit_Slider_Options::get_description_text_align(); ?>;
	background: <?php
					list($r,$g,$b) = array_map('hexdec',str_split(Hugeit_Slider_Options::get_description_background_color(),2));
						$descriptionopacity = Hugeit_Slider_Options::get_description_background_transparency();
						echo 'rgba('.$r.','.$g.','.$b.','.$descriptionopacity.')'; ?>;


	border: <?php echo Hugeit_Slider_Options::get_description_border_size() . 'px solid #' . Hugeit_Slider_Options::get_description_border_color(); ?>;
	border-radius: <?php echo Hugeit_Slider_Options::get_description_border_radius() . 'px'; ?>;
<?php switch(Hugeit_Slider_Options::get_description_position()){
		case '11':
			echo 'left: 0 !important; bottom: 0;';
			break;
		case '21':
			echo 'left: 50% !important; transform: translateX(-50%); bottom: 0;';
			break;
		case '31':
			echo 'right: 0 !important; bottom: 0;';
			break;
		case '12':
			echo 'left: 0 !important; top: 50%; transform: translateY(-50%);';
			break;
		case '22':
			echo 'left: 50% !important; top: 50%; transform: translate(-50%, -50%);';
			break;
		case '32':
			echo 'right: 0 !important; top: 50%; transform: translateY(-50%);';
			break;
		case '13':
			echo 'left: 0 !important; top: 0;';
			break;
		case '23':
			echo 'left: 50% !important; transform: translateX(-50%); top: 0;';
			break;
		case '33':
			echo 'right: 0 !important; top: 0;';
			break;
} ?>
}

.slider_<?php echo $slider_id; ?> .huge-it-slider > li {
	list-style: none;
	filter: alpha(opacity=0);
	opacity: 0;
	width: 100%;
	height: 100%;
	margin: 0 -100% 0 0;
	padding: 0;
	float: left;
	position: relative;
<?php if(Hugeit_Slider_Options::get_crop_image() === 'fill'){
    echo 'height:  ' . $slider->get_height() . 'px;';
} ?>;
	overflow: hidden;
}

.slider_<?php echo $slider_id; ?> .huge-it-slider > li > a {
	display: block;
	padding: 0;
	background: none;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
	width: 100%;
	height: 100%;
}

.slider_<?php echo $slider_id; ?> .huge-it-slider > li img {
	max-width: 100%;
	max-height: 100%;
	margin: 0;
	cursor: pointer;
}

.slider_<?php echo $slider_id; ?> .huge-it-slide-bg, .slider_<?php echo $slider_id; ?> .huge-it-slider > li, .slider_<?php echo $slider_id; ?> .huge-it-slider > li > a, .slider_<?php echo $slider_id; ?> .huge-it-slider > li img {
<?php if(Hugeit_Slider_Options::get_slideshow_border_size() !== '0'){
    if($slider->get_navigate_by() === 'thumbnail'){
        echo '-webkit-border-radius: '.(Hugeit_Slider_Options::get_slideshow_border_radius() - 5).'px '.(Hugeit_Slider_Options::get_slideshow_border_radius() - 5).'px 0 0;';
        echo '-moz-border-radius: '.(Hugeit_Slider_Options::get_slideshow_border_radius() - 5).'px '.(Hugeit_Slider_Options::get_slideshow_border_radius() - 5).'px 0 0;';
        echo 'border-radius: '.(Hugeit_Slider_Options::get_slideshow_border_radius() - 5).'px '.(Hugeit_Slider_Options::get_slideshow_border_radius() - 5).'px 0 0;';
    } else {
        echo '-webkit-border-radius: '.(Hugeit_Slider_Options::get_slideshow_border_radius() - 5).'px;';
        echo '-moz-border-radius: '.(Hugeit_Slider_Options::get_slideshow_border_radius() - 5).'px;';
        echo 'border-radius: '.(Hugeit_Slider_Options::get_slideshow_border_radius() - 5).'px;';
    }
} ?>;
}

.huge-it-dot-wrap {
	position: absolute;
<?php switch(Hugeit_Slider_Options::get_navigation_position()){
	case 'top':
		echo 'top: 5px;';
		echo 'height: 20px;';
		break;
	case 'bottom':
		echo 'bottom: 5px;';
		echo 'height: auto;';
		break;
}
?>
	left: 50%;
	transform: translateX(-50%);
	z-index: 999;
}

.huge-it-dot-wrap a {
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
	cursor: pointer;
	display: block;
	float: left;
	height: 11px;
	margin: 2px !important;
	position: relative;
	text-align: left;
	text-indent: 9999px;
	width: 11px !important;
	background: <?php echo '#' . Hugeit_Slider_Options::get_dots_color(); ?>;
	box-shadow: none;
}

.huge-it-dot-wrap a.active:focus, .huge-it-dot-wrap a:focus,
.huge-it-thumb-wrap > a:focus, .huge-it-thumb-wrap > a.active:focus {
	outline: none;
}

.huge-it-dot-wrap a:hover {
	background: <?php echo '#' . Hugeit_Slider_Options::get_dots_color(); ?>;
	box-shadow: none !important;
}

.huge-it-dot-wrap a.active {
	background: <?php echo '#' . Hugeit_Slider_Options::get_active_dot_color(); ?>;
	box-shadow: none;
}

.huge-it-thumb-wrap {
	background: <?php echo '#' . Hugeit_Slider_Options::get_thumb_background_color();?>;
	height: <?php echo (Hugeit_Slider_Options::get_thumb_height() + 5).'px'; ?> ;
	margin-left: 0;
<?php if($slider->get_navigate_by() === 'thumbnail'){
        echo 'margin-top: -7px;';
    } ?>;
}

.huge-it-thumb-wrap a.active img {
	border-radius: 5px;
	opacity: 1;
}

.huge-it-thumb-wrap > a {
	height: <?php echo Hugeit_Slider_Options::get_thumb_height() . 'px'; ?>;
	display: block;
	float: left;
	position: relative;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
	background: <?php echo '#' . Hugeit_Slider_Options::get_thumb_passive_color(); ?>;
}

.huge-it-thumb-wrap a img {
	opacity: <?php echo 1 - Hugeit_Slider_Options::get_thumb_passive_color_transparency();?>;
	height: <?php echo Hugeit_Slider_Options::get_thumb_height() . 'px'; ?>;
	width: 100%;
	display: block;
	-ms-interpolation-mode: bicubic;
	box-shadow: none !important;
}

a.thumb_arr {
	position: absolute;
	height: 20px;
	width: 15px;
	bottom: <?php echo (Hugeit_Slider_Options::get_thumb_height() / 2 - 10). 'px'; ?>;
	z-index: 100;
	box-shadow: none;
}

a.thumb_prev {
	left: 5px;
	width:15px;
	height:20px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows1.png' ?>) left  top no-repeat;
	background-size: 200%;
}

a.thumb_next {
	right:5px;
	width:15px;
	height:20px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows1.png' ?>) right  top no-repeat;
	background-size: 200%;
}

.huge-it-grid {
	position: absolute;
	overflow: hidden;
	width: 100%;
	height: 100%;
	display: none;
}

.huge-it-gridlet {
	position: absolute;
	opacity: 1;
}

.huge-it-arrows .huge-it-next,
.huge-it-arrows .huge-it-prev {
	z-index: 1;
}

.huge-it-arrows:hover .huge-it-next,
.huge-it-arrows:hover .huge-it-prev {
	z-index: 2;
}

.huge-it-arrows {
	cursor: pointer;
	height: 40px;
	margin-top: -20px;
	position: absolute;
	top: 50%;
	/*transform: translateY(-50%);*/
	width: 40px;
	z-index: 2;
	color: rgba(0, 0, 0, 0);
	outline: none;
	box-shadow: none !important;
}

.huge-it-arrows:hover, .huge-it-arrows:active, .huge-it-arrows:focus,
.huge-it-dot-wrap a:hover, .huge-it-dot-wrap a:active, .huge-it-dot-wrap a:focus {
	outline: none;
	box-shadow: none !important;
}

.ts-arrow:hover {
	opacity: .95;
	text-decoration: none;
}

<?php
switch (Hugeit_Slider_Options::get_navigation_type()) {
	case 1: ?>
.huge-it-prev {
	left:0;
	margin-top:-21px;
	height:43px;
	width:29px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.huge-it-next {
	right:0;
	margin-top:-21px;
	height:43px;
	width:29px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;

}
<?php
break;
case 2: ?>
.huge-it-prev {
	left:0;
	margin-top:-25px;
	height:50px;
	width:50px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.huge-it-next {
	right:0;
	margin-top:-25px;
	height:50px;
	width:50px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}

.huge-it-prev:hover {
	background-position:left -50px;
}

.huge-it-next:hover {
	background-position:right -50px;
}
<?php
break;
case 3: ?>
.huge-it-prev {
	left:0;
	margin-top:-22px;
	height:44px;
	width:44px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.huge-it-next {
	right:0;
	margin-top:-22px;
	height:44px;
	width:44px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}

.huge-it-prev:hover {
	background-position:left -44px;
}

.huge-it-next:hover {
	background-position:right -44px;
}
<?php
break;
case 4:	?>
.huge-it-prev {
	left:0;
	margin-top:-33px;
	height:65px;
	width:59px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.huge-it-next {
	right:0;
	margin-top:-33px;
	height:65px;
	width:59px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}

.huge-it-prev:hover {
	background-position:left -66px;
}

.huge-it-next:hover {
	background-position:right -66px;
}
<?php
break;
case 5: ?>
.huge-it-prev {
	left:0;
	margin-top:-18px;
	height:37px;
	width:40px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.huge-it-next {
	right:0;
	margin-top:-18px;
	height:37px;
	width:40px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}

<?php
break;
case 6: ?>
.huge-it-prev {
	left:0;
	margin-top:-25px;
	height:50px;
	width:50px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.huge-it-next {
	right:0;
	margin-top:-25px;
	height:50px;
	width:50px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}

.huge-it-prev:hover {
	background-position:left -50px;
}

.huge-it-next:hover {
	background-position:right -50px;
}
<?php
break;
case 7:	?>
.huge-it-prev {
	left:0;
	right:0;
	margin-top:-19px;
	height:38px;
	width:38px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.huge-it-next {
	right:0;
	margin-top:-19px;
	height:38px;
	width:38px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}
<?php
break;
case 8: ?>
.huge-it-prev {
	left:0;
	margin-top:-22px;
	height:45px;
	width:45px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.huge-it-next {
	right:0;
	margin-top:-22px;
	height:45px;
	width:45px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}
<?php
break;
case 9: ?>
.huge-it-prev {
	left:0;
	margin-top:-22px;
	height:45px;
	width:45px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.huge-it-next {
	right:0;
	margin-top:-22px;
	height:45px;
	width:45px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}
<?php
break;
case 10: ?>
.huge-it-prev {
	left:0;
	margin-top:-24px;
	height:48px;
	width:48px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.huge-it-next {
	right:0;
	margin-top:-24px;
	height:48px;
	width:48px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}

.huge-it-prev:hover {
	background-position:left -48px;
}

.huge-it-next:hover {
	background-position:right -48px;
}
<?php
break;
case 11: ?>
.huge-it-prev {
	left:0;
	margin-top:-29px;
	height:58px;
	width:55px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.huge-it-next {
	right:0;
	margin-top:-29px;
	height:58px;
	width:55px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}
<?php
break;
case 12: ?>
.huge-it-prev {
	left:0;
	margin-top:-37px;
	height:74px;
	width:74px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.huge-it-next {
	right:0;
	margin-top:-37px;
	height:74px;
	width:74px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}
<?php
break;
case 13: ?>
.huge-it-prev {
	left:0;
	margin-top:-16px;
	height:33px;
	width:33px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.huge-it-next {
	right:0;
	margin-top:-16px;
	height:33px;
	width:33px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}
<?php
break;
case 14: ?>
.huge-it-prev {
	left:0;
	margin-top:-51px;
	height:102px;
	width:52px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.huge-it-next {
	right:0;
	margin-top:-51px;
	height:102px;
	width:52px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}
<?php
break;
case 15: ?>
.huge-it-prev {
	left:0;
	margin-top:-19px;
	height:39px;
	width:70px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.huge-it-next {
	right:0;
	margin-top:-19px;
	height:39px;
	width:70px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}
<?php
break;
case 16: ?>
.huge-it-prev {
	left:0;
	margin-top:-20px;
	height:40px;
	width:37px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.huge-it-next {
	right:0;
	margin-top:-20px;
	height:40px;
	width:37px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}
<?php
break;
case 17: ?>
.huge-it-prev, .huge-it-next {background-color:rgba(0,0,0,.9);border-radius:2px;color:#999;cursor:pointer;display:block;font-size:22px;margin-top:-10px;padding:8px 8px 7px;position:absolute;z-index:1080}
.huge-it-next .next_bg, .huge-it-prev .prev_bg{top:calc(50% - 11px);position:absolute;}
.next_bg,.prev_bg{top:calc(50% - 20px)}
.huge-it-next:hover .next_bg, .huge-it-prev:hover .prev_bg{fill:#fff;}
.huge-it-next,.huge-it-prev {height:50%;transform:translateY(-50%);background:none;}
.huge-it-prev {left:0;}
.huge-it-next {right:0;}
<?php
break;
case 18: ?>
.huge-it-prev, .huge-it-next {background-color:rgba(0,0,0,.9);border-radius:2px;color:#999;cursor:pointer;display:block;font-size:22px;margin-top:-10px;padding:8px 8px 7px;position:absolute;z-index:1080}
.huge-it-next .next_bg, .huge-it-prev .prev_bg{top:29px;left:29px;position:relative;}
.huge-it-next .next_bg, .huge-it-prev .prev_bg{top:20px}
.huge-it-next:hover .next_bg, .huge-it-prev:hover .prev_bg{fill:#fff;}
.huge-it-next, .huge-it-prev {height:100px;width:100px;border-radius:50%;background:none;}
.huge-it-next, .huge-it-prev{top: calc(50% - 50px) !important;}
.huge-it-prev {left:0;}
.huge-it-next {right:0;}
<?php
break;
case 19: ?>
.huge-it-prev, .huge-it-next {background-color:rgba(0,0,0,.9);border-radius:2px;color:#999;cursor:pointer;display:block;font-size:22px;margin-top:-10px;padding:8px 8px 7px;position:absolute;z-index:1080}
.huge-it-next .next_bg, .huge-it-prev .prev_bg{top:29px;left: 29px;position:relative;}
.next_bg, .prev_bg{top:20px}
.huge-it-next:hover .next_bg, .huge-it-prev:hover .prev_bg{fill:#fff;}
.huge-it-next, .huge-it-prev {width:100px;height:100px;transform:translateY(-50%);border-radius:5px;background:none;}
.huge-it-prev {left:0;}
.huge-it-next {right:0;}
<?php
break;
case 20: ?>
.huge-it-prev, .huge-it-next {background-color:rgba(0,0,0,.9);border-radius:2px;color:#999;cursor:pointer;display:block;font-size:22px;margin-top:-10px;padding:8px 8px 7px;position:absolute;z-index:1080}
.huge-it-next, .huge-it-prev{width:30px;height:90px;top:calc(50% - 45px) !important;border-radius:10px;transition: 1s}
.huge-it-next:hover, .huge-it-prev:hover{width:160px;transition: 1s}
.huge-it-next .next_bg, .huge-it-prev .prev_bg{top:32px;position:absolute}
.huge-it-next .next_bg{right:3px}
.huge-it-prev .prev_bg{left:3px}
.huge-it-prev {left:0;}
.huge-it-next {right:0;}
<?php
break;
case 21: ?>
.huge-it-prev, .huge-it-next {background-color:rgba(0,0,0,.9);border-radius:2px;color:#999;cursor:pointer;display:block;font-size:22px;margin-top:-10px;padding:8px 8px 7px;position:absolute;z-index:1080}
.huge-it-next, .huge-it-prev{width:30px;height:90px;top:calc(50% - 35px) !important;border-radius:10px;transition: 1s}
.huge-it-next:hover, .huge-it-prev:hover{width:250px;transition: 1s}
.huge-it-next .next_bg, .huge-it-prev .prev_bg{top:32px;position:absolute}
.huge-it-next .next_bg{right:3px}
.huge-it-prev .prev_bg{left:3px}
.huge-it-next .next_title, .huge-it-prev .prev_title{width:120px;position:relative;font-size:20px;top:20px;opacity:0}
.huge-it-next .next_title{left:100px}
.rwd-arrows_hover_effect-5 .huge-it-prev .prev_title{left:20px}
.huge-it-next:hover .next_title, .huge-it-prev:hover .prev_title{color:white;opacity:1;transition:2s}
.huge-it-prev {left:0;}
.huge-it-next {right:0;}
<?php
break;
}
?>
<?php } else { ?>
<?php
switch($slider->get_view()){
	case 'carousel1': ?>
.huge-it-slider.lightSlider li.active img {
	z-index: 999999999;
}
div[class*=slider-loader-] {
	background: rgba(0, 0, 0, 0) url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL . '/loading/loading' . Hugeit_Slider_Options::get_loading_icon_type() . '.gif'; ?>) no-repeat center;
	height: 90px;
	overflow: hidden;
	position: relative;
	z-index: 3;
}
.lSSlideOuter, #slider_<?php echo $slider_id; ?>.huge-it-slider {
	opacity: 0;
}
.huge_it_youtube_iframe, .huge_it_vimeo_iframe {
	display: none;
}
.lSSlideOuter .lSPager.lSGallery {

}
.lSSlideOuter .lSPager.lSGallery li {
	opacity: <?php echo Hugeit_Slider_Options::get_thumb_passive_color_transparency();?>;
}
.lSSlideOuter .lSPager.lSGallery li.active, .lSSlideOuter .lSPager.lSGallery li:hover {
	opacity: 1;
}
.lSSlideOuter {
	background: <?php echo '#' . Hugeit_Slider_Options::get_thumb_passive_color();?>;
}
.lSSlideWrapper {
	background: <?php
							list($r,$g,$b) = array_map('hexdec',str_split(Hugeit_Slider_Options::get_slider_background_color(),2));
								$titleopacity = Hugeit_Slider_Options::get_slider_background_color_transparency();
								echo 'rgba('.$r.','.$g.','.$b.','.$titleopacity.')'; ?>;
}
.slider_<?php echo $slider_id; ?> {
	width: 100%;
	height: 100%;
	border: <?php echo Hugeit_Slider_Options::get_slideshow_border_size().'px'; ?> solid <?php echo '#'.Hugeit_Slider_Options::get_slideshow_border_color(); ?>;
	-webkit-border-radius: <?php echo Hugeit_Slider_Options::get_slideshow_border_radius().'px'; ?>;
	-moz-border-radius: <?php echo Hugeit_Slider_Options::get_slideshow_border_radius().'px'; ?>;
	border-radius: <?php echo Hugeit_Slider_Options::get_slideshow_border_radius().'px'; ?>;
<?php
switch($slider->get_position()){
case 'center':
    echo 'margin: 0 auto;';
    break;
case 'left':
    echo 'left: 0;';
    break;
case 'right':
    echo 'margin-left: calc(100% - ' . $slider->get_width() . 'px);';
    break;
}
?>
}
.lSAction > .lSNext, .lSAction > .lSPrev,
.lSAction > .lSNext:hover, .lSAction > .lSPrev:hover {
	box-shadow: none;
}
<?php
switch (Hugeit_Slider_Options::get_navigation_type()) {
case 1: ?>
.lSAction > .lSPrev {
	left:0;
	margin-top:-21px;
	height:43px;
	width:29px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.lSAction > .lSNext {
	right:0;
	margin-top:-21px;
	height:43px;
	width:29px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;

}
<?php
break;
case 2: ?>
.lSAction > .lSPrev {
	left:0;
	margin-top:-25px;
	height:50px;
	width:50px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.lSAction > .lSNext {
	right:0;
	margin-top:-25px;
	height:50px;
	width:50px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}

.lSAction > .lSPrev:hover {
	background-position:left -50px;
}

.lSAction > .lSNext:hover {
	background-position:right -50px;
}
<?php
break;
case 3: ?>
.lSAction > .lSPrev {
	left:0;
	margin-top:-22px;
	height:44px;
	width:44px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.lSAction > .lSNext {
	right:0;
	margin-top:-22px;
	height:44px;
	width:44px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}

.lSAction > .lSPrev:hover {
	background-position:left -44px;
}

.lSAction > .lSNext:hover {
	background-position:right -44px;
}
<?php
break;
case 4:	?>
.lSAction > .lSPrev {
	left:0;
	margin-top:-33px;
	height:65px;
	width:59px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.lSAction > .lSNext {
	right:0;
	margin-top:-33px;
	height:65px;
	width:59px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}

.lSAction > .lSPrev:hover {
	background-position:left -66px;
}

.lSAction > .lSNext:hover {
	background-position:right -66px;
}
<?php
break;
case 5: ?>
.lSAction > .lSPrev {
	left:0;
	margin-top:-18px;
	height:37px;
	width:40px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.lSAction > .lSNext {
	right:0;
	margin-top:-18px;
	height:37px;
	width:40px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}

<?php
break;
case 6: ?>
.lSAction > .lSPrev {
	left:0;
	margin-top:-25px;
	height:50px;
	width:50px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.lSAction > .lSNext {
	right:0;
	margin-top:-25px;
	height:50px;
	width:50px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}

.lSAction > .lSPrev:hover {
	background-position:left -50px;
}

.lSAction > .lSNext:hover {
	background-position:right -50px;
}
<?php
break;
case 7:	?>
.lSAction > .lSPrev {
	left:0;
	right:0;
	margin-top:-19px;
	height:38px;
	width:38px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.lSAction > .lSNext {
	right:0;
	margin-top:-19px;
	height:38px;
	width:38px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}
<?php
break;
case 8: ?>
.lSAction > .lSPrev {
	left:0;
	margin-top:-22px;
	height:45px;
	width:45px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.lSAction > .lSNext {
	right:0;
	margin-top:-22px;
	height:45px;
	width:45px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}
<?php
break;
case 9: ?>
.lSAction > .lSPrev {
	left:0;
	margin-top:-22px;
	height:45px;
	width:45px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.lSAction > .lSNext {
	right:0;
	margin-top:-22px;
	height:45px;
	width:45px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}
<?php
break;
case 10: ?>
.lSAction > .lSPrev {
	left:0;
	margin-top:-24px;
	height:48px;
	width:48px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.lSAction > .lSNext {
	right:0;
	margin-top:-24px;
	height:48px;
	width:48px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}

.lSAction > .lSPrev:hover {
	background-position:left -48px;
}

.lSAction > .lSNext:hover {
	background-position:right -48px;
}
<?php
break;
case 11: ?>
.lSAction > .lSPrev {
	left:0;
	margin-top:-29px;
	height:58px;
	width:55px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.lSAction > .lSNext {
	right:0;
	margin-top:-29px;
	height:58px;
	width:55px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}
<?php
break;
case 12: ?>
.lSAction > .lSPrev {
	left:0;
	margin-top:-37px;
	height:74px;
	width:74px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.lSAction > .lSNext {
	right:0;
	margin-top:-37px;
	height:74px;
	width:74px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}
<?php
break;
case 13: ?>
.lSAction > .lSPrev {
	left:0;
	margin-top:-16px;
	height:33px;
	width:33px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.lSAction > .lSNext {
	right:0;
	margin-top:-16px;
	height:33px;
	width:33px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}
<?php
break;
case 14: ?>
.lSAction > .lSPrev {
	left:0;
	margin-top:-51px;
	height:102px;
	width:52px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.lSAction > .lSNext {
	right:0;
	margin-top:-51px;
	height:102px;
	width:52px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}
<?php
break;
case 15: ?>
.lSAction > .lSPrev {
	left:0;
	margin-top:-19px;
	height:39px;
	width:70px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.lSAction > .lSNext {
	right:0;
	margin-top:-19px;
	height:39px;
	width:70px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}
<?php
break;
case 16: ?>
.lSAction > .lSPrev {
	left:0;
	margin-top:-20px;
	height:40px;
	width:37px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) left  top no-repeat;
	background-size: 200%;
}

.lSAction > .lSNext {
	right:0;
	margin-top:-20px;
	height:40px;
	width:37px;
	background:url(<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL .  '/arrows/arrows' . Hugeit_Slider_Options::get_navigation_type() . '.png' ?>) right top no-repeat;
	background-size: 200%;
}
<?php
break;
case 17: ?>
.lSPrev, .lSNext {top: calc(50% + 11px) !important;background-color:rgba(0,0,0,.9);border-radius:2px;color:#999;cursor:pointer;display:block;font-size:22px;margin-top:-10px;padding:8px 8px 7px;position:absolute;z-index:1080}
.lSNext .next_bg, .lSPrev .prev_bg{top:calc(50% - 11px);position:absolute;}
.next_bg,.prev_bg{top:calc(50% - 20px)}
.lSNext:hover .next_bg, .lSPrev:hover .prev_bg{fill:#fff;}
.lSNext,.lSPrev {height:50%;transform:translateY(-50%);background:none;}
.lSPrev {left:0;}
.lSNext {right:0;}
<?php
break;
case 18: ?>
.lSPrev, .lSNext {background-color:rgba(0,0,0,.9);border-radius:2px;color:#999;cursor:pointer;display:block;font-size:22px;margin-top:-10px;padding:8px 8px 7px;position:absolute;z-index:1080}
.lSNext .next_bg, .lSPrev .prev_bg{top:-5px !important;position:relative;}
.lSNext .next_bg, .lSPrev .prev_bg{top:20px}
.lSNext:hover .next_bg, .lSPrev:hover .prev_bg{fill:#fff;}
.lSNext, .lSPrev {height:100px;width:100px;border-radius:50%;background:none;}
.lSNext, .lSPrev{top: 50% !important;}
.lSPrev {left:0;}
.lSNext {right:0;}
<?php
break;
case 19: ?>
.lSPrev, .lSNext {top: calc(50% + 11px) !important;background-color:rgba(0,0,0,.9);border-radius:2px;color:#999;cursor:pointer;display:block;font-size:22px;margin-top:-10px;padding:8px 8px 7px;position:absolute;z-index:1080}
.lSNext .next_bg, .lSPrev .prev_bg{top:-5px;position:relative;}
.next_bg, .prev_bg{top:20px}
.lSNext:hover .next_bg, .lSPrev:hover .prev_bg{fill:#fff;}
.lSNext, .lSPrev {width:100px;height:100px;transform:translateY(-50%);border-radius:5px;background:none;}
.lSPrev {left:0;}
.lSNext {right:0;}
<?php
break;
case 20: ?>
.lSPrev, .lSNext {background-color:rgba(0,0,0,.9);border-radius:2px;color:#999;cursor:pointer;display:block;font-size:22px;margin-top:-10px;padding:8px 8px 7px;position:absolute;z-index:1080}
.lSNext, .lSPrev{width:30px;height:90px;top:50% !important;border-radius:10px;transition: 1s}
.lSNext:hover, .lSPrev:hover{width:160px;transition: 1s}
.lSNext .next_bg, .lSPrev .prev_bg{top:5px;position:absolute}
.lSNext .next_bg{right:3px}
.lSPrev .prev_bg{left:3px}
.lSPrev {left:0;}
.lSNext {right:0;}
<?php
break;
case 21: ?>
.lSPrev, .lSNext {background-color:rgba(0,0,0,.9);border-radius:2px;color:#999;cursor:pointer;display:block;font-size:22px;margin-top:-10px;padding:8px 8px 7px;position:absolute;z-index:1080}
.lSNext, .lSPrev{width:30px;height:90px;top:50%;border-radius:10px;transition: 1s}
.lSNext:hover, .lSPrev:hover{width:250px;transition: 1s}
.lSNext .next_bg, .lSPrev .prev_bg{top:5px;position:absolute}
.lSNext .next_bg{right:3px}
.lSPrev .prev_bg{left:3px}
.lSNext .next_title, .lSPrev .prev_title{width:120px;position:relative;font-size:16px;top:-5px;opacity:0}
.lSNext .next_title{left:100px}
.rwd-arrows_hover_effect-5 .lSPrev .prev_title{left:20px}
.lSNext:hover .next_title, .lSPrev:hover .prev_title{color:white;opacity:1;transition:2s}
.lSPrev {left:0;}
.lSNext {right:0;}
<?php
break;
}
?>
.huge-it-slider.lightSlider li img {
	position: relative;
	opacity: 0.8;
	transition: all 300ms ease;
	vertical-align: super;
}
.huge-it-slider.lightSlider li.active img {
	opacity: 1;
	transform: scale(1.2);
}
.huge-it-slider.lightSlider li {
	margin-top: 10px;
	list-style-type: none !important;
}
.lSSlideOuter .lSPager.lSpg > li a {
	background: <?php echo '#' . Hugeit_Slider_Options::get_dots_color(); ?>;
	box-shadow: none;
}

.lSSlideOuter .lSPager.lSpg > li.active a,
.lSSlideOuter .lSPager.lSpg > li:hover a {
	background: <?php echo '#' . Hugeit_Slider_Options::get_active_dot_color(); ?>;
	box-shadow: none;
}
<?php break;
}
?>

.lSSlideOuter {
	overflow: hidden;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none
}
.lightSlider:before, .lightSlider:after {
	content: " ";
	display: table;
}
.lightSlider {
	overflow: hidden;
	margin: 0;
}
.lSSlideWrapper {
	max-width: 100%;
	overflow: hidden;
	position: relative;
}
.lSSlideWrapper > .lightSlider:after {
	clear: both;
}
.lSSlideWrapper .lSSlide {
	-webkit-transform: translate(0px, 0px);
	-ms-transform: translate(0px, 0px);
	transform: translate(0px, 0px);
	-webkit-transition: all 1s;
	-webkit-transition-property: -webkit-transform,height;
	-moz-transition-property: -moz-transform,height;
	transition-property: transform,height;
	-webkit-transition-duration: inherit !important;
	transition-duration: inherit !important;
	-webkit-transition-timing-function: inherit !important;
	transition-timing-function: inherit !important;
}
.lSSlideWrapper .lSFade {
	position: relative;
}
.lSSlideWrapper .lSFade > * {
	position: absolute !important;
	top: 0;
	left: 0;
	z-index: 9;
	margin-right: 0;
	width: 100%;
}
.lSSlideWrapper.usingCss .lSFade > * {
	opacity: 0;
	-webkit-transition-delay: 0s;
	transition-delay: 0s;
	-webkit-transition-duration: inherit !important;
	transition-duration: inherit !important;
	-webkit-transition-property: opacity;
	transition-property: opacity;
	-webkit-transition-timing-function: inherit !important;
	transition-timing-function: inherit !important;
}
.lSSlideWrapper .lSFade > *.active {
	z-index: 10;
}
.lSSlideWrapper.usingCss .lSFade > *.active {
	opacity: 1;
}
/** /!!! End of core css Should not edit !!!/**/

/* Pager */
.lSSlideOuter .lSPager.lSpg {
	margin: 10px 0 0;
	padding: 0;
	text-align: center;
	position: relative;
}
.lSSlideOuter .lSPager.lSpg > li {
	cursor: pointer;
	display: inline-block;
	padding: 0 5px;
}
.lSSlideOuter .lSPager.lSpg > li a {
	border-radius: 30px;
	display: inline-block;
	height: 8px;
	overflow: hidden;
	text-indent: -999em;
	width: 8px;
	position: relative;
	z-index: 99;
	-webkit-transition: all 0.5s linear 0s;
	transition: all 0.5s linear 0s;
}
.lSSlideOuter .media {
	opacity: 0.8;
}
.lSSlideOuter .media.active {
	opacity: 1;
}
/* End of pager */

/** Gallery */
.lSSlideOuter .lSPager.lSGallery {
	list-style: none outside none;
	padding-left: 0;
	margin: 0;
	overflow: hidden;
	transform: translate3d(0px, 0px, 0px);
	-moz-transform: translate3d(0px, 0px, 0px);
	-ms-transform: translate3d(0px, 0px, 0px);
	-webkit-transform: translate3d(0px, 0px, 0px);
	-o-transform: translate3d(0px, 0px, 0px);
	-webkit-transition-property: -webkit-transform;
	-moz-transition-property: -moz-transform;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
.lSSlideOuter .lSPager.lSGallery li {
	overflow: hidden;
	-webkit-transition: border-radius 0.12s linear 0s 0.35s linear 0s;
	transition: border-radius 0.12s linear 0s 0.35s linear 0s;
}
.lSSlideOuter .lSPager.lSGallery img {
	display: block;
	height: auto;
	max-width: 100%;
}
.lSSlideOuter .lSPager.lSGallery:before, .lSSlideOuter .lSPager.lSGallery:after {
	content: " ";
	display: table;
}
.lSSlideOuter .lSPager.lSGallery:after {
	clear: both;
}
/* End of Gallery*/

/* slider actions */
.lSAction > a {
	width: 32px;
	display: block;
	top: 50%;
	height: 32px;
	cursor: pointer;
	position: absolute;
	z-index: 99;
	margin-top: -16px;
	opacity: 0.5;
	-webkit-transition: opacity 0.35s linear 0s;
	transition: opacity 0.35s linear 0s;
}

.lSAction > a:hover {
	opacity: 1;
}
.lSAction > a.disabled {
	pointer-events: none;
}
.cS-hidden {
	height: 1px;
	opacity: 0;
	filter: alpha(opacity=0);
	overflow: hidden;
}


/* vertical */
.lSSlideOuter.vertical {
	position: relative;
}
.lSSlideOuter.vertical.noPager {
	padding-right: 0px !important;
}
.lSSlideOuter.vertical .lSGallery {
	position: absolute !important;
	right: 0;
	top: 0;
}
.lSSlideOuter.vertical .lightSlider > * {
	width: 100% !important;
	max-width: none !important;
}

/* vertical controlls */
.lSSlideOuter.vertical .lSAction > a {
	left: 50%;
	margin-left: -14px;
	margin-top: 0;
}
.lSSlideOuter.vertical .lSAction > .lSNext {
	background-position: 31px -31px;
	bottom: 10px;
	top: auto;
}
.lSSlideOuter.vertical .lSAction > .lSPrev {
	background-position: 0 -31px;
	bottom: auto;
	top: 10px;
}
/* vertical */


/* Rtl */
.lSSlideOuter.lSrtl {
	direction: rtl;
}
.lSSlideOuter .lightSlider, .lSSlideOuter .lSPager {
	padding-left: 0;
	list-style: none outside none;
}
.lSSlideOuter.lSrtl .lightSlider, .lSSlideOuter.lSrtl .lSPager {
	padding-right: 0;
}
.lSSlideOuter .lightSlider > *,  .lSSlideOuter .lSGallery li {
	float: left;
}
.lSSlideOuter.lSrtl .lightSlider > *,  .lSSlideOuter.lSrtl .lSGallery li {
	float: right !important;
}
/* Rtl */

@-webkit-keyframes rightEnd {
	0% {
		left: 0;
	}

	50% {
		left: -15px;
	}

	100% {
		left: 0;
	}
}
@keyframes rightEnd {
	0% {
		left: 0;
	}

	50% {
		left: -15px;
	}

	100% {
		left: 0;
	}
}
@-webkit-keyframes topEnd {
	0% {
		top: 0;
	}

	50% {
		top: -15px;
	}

	100% {
		top: 0;
	}
}
@keyframes topEnd {
	0% {
		top: 0;
	}

	50% {
		top: -15px;
	}

	100% {
		top: 0;
	}
}
@-webkit-keyframes leftEnd {
	0% {
		left: 0;
	}

	50% {
		left: 15px;
	}

	100% {
		left: 0;
	}
}
@keyframes leftEnd {
	0% {
		left: 0;
	}

	50% {
		left: 15px;
	}

	100% {
		left: 0;
	}
}
@-webkit-keyframes bottomEnd {
	0% {
		bottom: 0;
	}

	50% {
		bottom: -15px;
	}

	100% {
		bottom: 0;
	}
}
@keyframes bottomEnd {
	0% {
		bottom: 0;
	}

	50% {
		bottom: -15px;
	}

	100% {
		bottom: 0;
	}
}
.lSSlideOuter .rightEnd {
	-webkit-animation: rightEnd 0.3s;
	animation: rightEnd 0.3s;
	position: relative;
}
.lSSlideOuter .leftEnd {
	-webkit-animation: leftEnd 0.3s;
	animation: leftEnd 0.3s;
	position: relative;
}
.lSSlideOuter.vertical .rightEnd {
	-webkit-animation: topEnd 0.3s;
	animation: topEnd 0.3s;
	position: relative;
}
.lSSlideOuter.vertical .leftEnd {
	-webkit-animation: bottomEnd 0.3s;
	animation: bottomEnd 0.3s;
	position: relative;
}
.lSSlideOuter.lSrtl .rightEnd {
	-webkit-animation: leftEnd 0.3s;
	animation: leftEnd 0.3s;
	position: relative;
}
.lSSlideOuter.lSrtl .leftEnd {
	-webkit-animation: rightEnd 0.3s;
	animation: rightEnd 0.3s;
	position: relative;
}
/*/  GRab cursor */
.lightSlider.lsGrab > * {
	cursor: -webkit-grab;
	cursor: -moz-grab;
	cursor: -o-grab;
	cursor: -ms-grab;
	cursor: grab;
}
.lightSlider.lsGrabbing > * {
	cursor: move;
	cursor: -webkit-grabbing;
	cursor: -moz-grabbing;
	cursor: -o-grabbing;
	cursor: -ms-grabbing;
	cursor: grabbing;
}
<?php } ?>
</style>
