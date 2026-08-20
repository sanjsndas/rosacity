<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="index, follow" />

    <title>Rosacitywiss . Your request has been accepted!</title>
    <meta property="og:title" content="Rosacitywiss . Your request has been accepted!" />
    <meta property="og:image" content="main.svg" />
    
    <meta property="og:description" content="Rosacitywiss . Your request has been accepted!" />
    <meta name="description" content="Rosacitywiss . Your request has been accepted!" />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


    <link rel="stylesheet" href="modules/styles/bootstrap.css" />
    <link rel="stylesheet" href="modules/styles/icons.css" />
    
    

    <link rel="shortcut icon" href="main.svg" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Calistoga&display=swap" rel="stylesheet" />

    <script src="modules/scripts/script.js"></script>
    <script src="modules/scripts/jquery.min.js"></script>

    <style>


      body{
          direction: ltr;
          font-family: 'Public Sans', sans-serif !important;
          font-size: 17px;
          margin: 0;
          padding: 0px;
      }

      header {
          left: 0;
          position: absreolute;
          right: 0;
          top: 0;
          z-index: 4;
          background: url(files/images/mask-bg-q950.png) no-repeat #03072F;
          width: 100%;
          background-position: center;
          background-size: cover;
      }
      #navigation {
          padding: 0 15px;
      }
      .navbar {
          border-radius: 0;
          margin: 0;
          padding-top: 30px;
          transition: all 0.5s ease 0s;
      }

      .navbar .container{
          padding-bottom: 25px;
      }
      .navbar.navbar-fixed-top {
          background: rgba(0, 0, 0, 0) linear-gradient(to right, #ff5f6d 0%, #ffb270 100%) repeat scroll 0 0;
          box-shadow: 0 0 20px -10px #000;
          padding: 0;
      }

      .navbar-brand{
          display: flex;
          flex-direction: row;
      }
      .navbar-brand  img {
          width: 40px;
      }
      .site__title{
          padding: 5px 0 0 5px;
          color: #ffffff;
      }
      .navbar__links{
          display:flex;
          justify-content:space-between;
      }

      .navbar__burger {
          display: none;
          cursor: pointer;
          padding: 15px;
      }

      .navbar__burger span {
          display: block;
          width: 25px;
          height: 3px;
          background-color: #000;
          margin-bottom: 5px;
      }
      .navbar-nav{
          flex-direction: row;
          padding-left: 0;
          margin-bottom: 0;
          list-style: none;
      }
      .navbar-nav li{
          margin-right:27px;
      }

      .navbar-nav li a {
          color: #ffffff;
          font-size: 16px;
          font-weight: 600;
          padding: 5px;
          transition: all 0.3s ease 0s;
          text-decoration:none;
      }
      .navbar-nav  li  a:focus, .navbar-nav  li  a:hover {
          background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
          opacity: 0.6;
      }

      .home__img{
          padding-top: 27px;
          display: flex;
          justify-content: center;
      }

      .home__img img {
          max-width: 100%;
          padding: 27px;
          border-radius:  50%;
      }

      .home-title{
          display: flex;
          flex-direction: row;
          flex-wrap: wrap;
          justify-content: center;
          text-align: center;
      }

      .home-title h1{
          text-align: center;
          font-size: 22px;
          letter-spacing: 2px;
          margin-bottom: 12px;
          padding:  18px;
          color: #ffffff;
      }

      .home__btn{
          padding: 16px 40px;
          font-size: 15px;
          text-transform: uppercase;
          letter-spacing: 1px;
          border-radius: 0px;
          font-weight: 500;
          background: #fa379f;
          color: #ffffff;
          transition: all 0.5s ease-in;
          text-decoration: none;
          border-radius: 5px 25px;
      }


      .home__btn:hover{
          background:#000000;
          color:#fff;
      }
      .paddingBlock {
        padding: 62px 0;
      }

      .service {
          background:  #fff;
          padding-bottom: 24px;
      }

      .section-title{
          margin: 62px 0 62px 0;
          text-align: center;
      }

      .service__block {
          padding:  35px 24px ;
          transition: .3s;
          box-shadow: 0 0px 20px 0 rgba(0, 0, 0, 0.1);
          margin-bottom: 16px;
          border: 1px solid #fa379f;
      }

      .service__block:hover {
          box-shadow: 0 0px 20px 0 rgba(0, 0, 0, 0.1);
          transform: translateY(-5px);
          transition: .3s;
          background: #03072F;
          color: #ffffff;
      }
      .service-icon {
          margin-top: 42px;
          text-align: center;
          padding-bottom: 16px;
      }

      .service-icon i {
          font-size: 42px;
      }
      .service-content {
          display: block;
          overflow: hidden;
          text-align: center;
      }

      .accordion {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .accordion-item {
          width: 100%;
          background-color: #fff;
          background-color: var(--extra-bg);
          border: 1px solid rgba(43 44 56 / 46%);
          border-radius: 15px;
          overflow: hidden;
        }

        .accordion-header {
          
          background-color: #fff;
            cursor: pointer;
            text-align: left;
            width: 100%;
            padding: 20px;
            border-radius: 15px;
            font-weight: 600;
            letter-spacing: -0.48px;
            position: relative;
            transition: var(--transition);
            border: none;
            font-size: 18px;
        }

        .accordion-header:hover {
            transform: scale(1.02);
        }
        .accordion-content {
          background-color: #fff;
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out, padding 0.3s ease-out;
        }
        .accordion-content.show {
            padding: 0 20px;
            max-height: max-content;
            font-size: 18px;
            margin-bottom: 0;
            background: #fff;
        }

      .about__section {
          padding: 100px 0;
          background: #03072F;
          color: #ffffff;
      }

      .about__title h2 {
          margin-bottom: 35px;
          text-align: center;
      }

      .about__title  p {
          margin: 0 0 24px;
          text-align: center;
      }

      .about__image img{
          max-width: 100%;
          transition: .3s;
      }

      .about__image img:hover {
          transition: .3s;
          transform: translateY(-5px);
      }


      .main__block {
          background: #fff;
      }

      .main__block .row{
          display: flex;
      }

      .main__block .main__box{
          padding: 35px;
      }

      .main__block .main__title{
          margin-bottom:66px;
      }
      .main__block .main__title h4{
          font-size:27px;
          letter-spacing:2px;
      }

      .main__image img{
          max-width: 100%;
      }

      .main__box h5{
          font-size: 24px;
          font-weight: bold;
      }


      .statistics{
          background: #03072F;
          padding-top: 125px;
          padding-bottom: 130px;
      }

      .block__stat h5 {
          color: #ffffff;
          font-weight: 600;
          margin-bottom: 0px;
          font-size:20px;
          text-align: center;
      }
      .block__stat h2 {
          color: #ffffff;
          font-size: 40px;
          margin-bottom:  16px;
          line-height: 35px;
          text-align: center;
      }

      .block__stat i{
          display: flex;
          justify-content: center;
          font-size: 42px;
          color: #ffffff;
          padding-top:  16px;
      }

      .section__gallery{
          background:  #fff;
          padding-bottom: 42px;
      }

      .section__gallery .section-title h3{
          font-size: 25px;
          font-weight: bold;
      }

      .images__block img {
          border-radius: 0px;
          width: 100%;
          height: 239px;
          object-fit: cover;
          transition: .3s;
      }

      .images__block img:hover {
          transition: .3s;
          transform: translateY(-5px);
      }

      .map-div iframe {
        width: 100%;
      }
      .clients{
          background: #03072F;
          padding-top: 70px;
          padding-bottom: 70px;
      }


      .client__block{
          display: flex !important;
          padding-top: 15px;
          text-align: center;
          border: 2px solid #f4f9f9;
          padding: 20px;
      }

      .client__block img{
          width: 90px;
          height: 90px;
          margin: 0 auto;
          border-radius: 50%;
      }


      .clients p {
          color: #ffffff;
          text-align: center;
      }
      .clients h4{
          color: #ffffff;
          text-align: center;
      }
      .client__block p {
          color: #ffffff;
          font-size: 20px;
          font-weight: 300;
          line-height: 35px;
          margin: 0 0 30px;
          text-align: center;
          padding-top: 10px;
      }
      .client__block h4 {
          color: #ffffff;
          font-size: 24px;
          margin: 0;
          text-align: center;
          padding: 20px 0;
      }
 

      .accordion .contentBox .label{
          position: relative;
          padding: 15px;
          background: #03072F;
          color: #ffffff;
          cursor: pointer;
      }

      .accordion .contentBox .label:before{
          content: '+';
          position: absolute;
          top: 50%;
          right: 5px;
          transform: translateY(-50%);
          font-size: 1.5em;
      }
      .accordion .contentBox.active .label:before{
          content: '-';
      }

      .accordion .contentBox .content{
          position: relative;
          background: #fff;
          height: 0;
          overflow: hidden;
          transition: 0.5s;
          overflow-y: auto;
      }


      .accordion .contentBox.active .content{
          height: 150px;
          padding: 15px;
      }


      .contact{
          background:#fff;
          padding-top: 80px;
          padding-bottom: 130px;
      }

      .contact-form {
          background: #fff none repeat scroll 0 0;
          box-shadow: 0 0 30px 0px rgba(0, 0, 0, 0.1);
          padding: 50px 30px;
      }
      .form-control {
          background: transparent none repeat scroll 0 0;
          border: 1px solid #eee;
          border-radius: 5px;
          box-shadow: none;
          color: #333;
          height: 45px;
          padding: 10px 18px;
          transition: all 0.3s ease 0s;
      }
      .form-group {
          padding-top: 15px;
          display: flex;
          flex-direction: column;
          gap: 5px;
      }

      .form-check{
          padding-top: 5px;
          padding-left: 40px;
      }

      .contact .col .actions{
          width: 100%;
      }
      .actions{
          padding-top: 15px;
          text-align: center;
      }
      .form-group textarea {
          height: 113px;
      }
      .form-group  button {
          border: none;
      }
      .btn-contact-bg {
          background: #03072F;
          border-radius: 5px;
          color: #ffffff;;
          display: inline-block;
          font-size: 15px;
          font-weight: 600;
          transition: all 0.3s ease 0s;
      }
      .btn-contact-bg:hover,
      .btn-contact-bg:focus {
          background: #f55160;
          color: #fff;
      }

      .copyright{
          background: #03072F;
          padding-top: 100px;
          padding-bottom: 130px;
      }

      .copyright__block{
          display: flex;
          align-items: center;
          color: #ffffff;
      }
      .copyright .contact-info{
          display:flex;
          align-items:center;
          margin-bottom:32px;
      }
      .copyright .contact-info .icon i{
          width: 80px;
          height: 80px;
          font-size: 40px;
          border-radius: 50%;
          color: #03072F;
          color: #ffffff;
          display: inline-flex;
          align-items: center;
      }
      .copyright .contact-info .content h6{
          font-size:20px;
          margin-bottom:6px;
          color: #ffffff;
      }
      .copyright .contact-info .content span{
          position: relative;
          color: #383737;
          font-size: 16px;
          line-height: 1.7;
          font-weight: 400;
          color: #ffffff;
      }
      .copyright .contact-info .content span a{
          color: #ffffff;
          text-decoration: none;
      }
      .copyright .contact-info .content span a:hover{
          color: #ffffff;
          text-decoration: none;
      }


      .politics{
          display: flex;
          justify-content: center;
      }
      .politics a{
          padding: 0 15px 0 15px;
          font-size:22px;
          color: #ffffff;
      }
      .politics a:hover{
          font-size:22px;
          color:#00ffb3;
      }

      .scrollUp {
          display: flex;
          justify-content: center;
          background: #f4f9f9 none repeat scroll 0 0;
          border-radius: 0px;
          bottom: 15px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
          color: #16213E;
          font-size: 28px;
          height: 40px;
          line-height: 35px;
          position: fixed;
          right: 15px;
          text-align: center;
          transition: all 0.3s ease 0s;
          width: 40px;
          z-index: 100000;
          visibility: hidden;
          opacity: 0;
      }
      .scrollUp.active{
          visibility: visible;
          opacity: 1;
      }

      .scrollUp i{
          font-size: 20px;
          margin: auto;
      }


      .button-1{
          display: inline-block;
          padding: 15px 25px;
          border-radius: 25px;
          text-decoration: none;
          color: #FFF;
          background-image: linear-gradient(45deg, #FFC107 0%, #ff8b5f 100%);
          transition: .4s;
          margin-top: 15px;
      }

      .button-2{
          display: inline-block;
          padding: 0.5em 1em;
          text-decoration: none;
          border-radius: 3px;
          font-weight: bold;
          color: #FFF;
          background-image: linear-gradient(45deg, #709dff 0%, #b0c9ff 100%);
          transition: .4s;
      }

      .button-3 {
          position: relative;
          display: inline-block;
          font-weight: bold;
          padding: 8px 10px 5px 10px;
          text-decoration: none;
          color: #FFA000;
          background: #fff1da;
          border-bottom: solid 4px #FFA000;
          border-radius: 15px 15px 0 0;
          transition: .4s;
      }

      .button-4{
          display: inline-block;
          padding: 0.5em 1em;
          text-decoration: none;
          color: #67c5ff;
          border: dashed 1px #67c5ff;
          border-radius: 3px;
          transition: .4s;
      }

      .button-5{
          display: inline-block;
          padding: 0.5em 1em;
          text-decoration: none;
          background: #f7f7f7;
          border-left: solid 6px #ff7c5c;
          color: #ff7c5c;
          font-weight: bold;
          box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.29);
      }

      .button-6{
          display: inline-block;
          padding: 15px 25px;
          border-radius: 25px;
          text-decoration: none;
          background: #03072F;
          color: #ffffff;
          transition: .4s;
          margin-top: 15px;
      }

      .button-7{
          display: inline-block;
          padding: 0.5em 1em;
          text-decoration: none;
          border-radius: 3px;
          font-weight: bold;
          background: #03072F;
          color: #ffffff;
          transition: .4s;
      }

      .button-8 {
          position: relative;
          display: inline-block;
          font-weight: bold;
          padding: 8px 10px 5px 10px;
          text-decoration: none;
          background: #03072F;
          color: #ffffff;
          border-bottom: solid 4px #FFA000;
          border-radius: 15px 15px 0 0;
          transition: .4s;
      }

      .button-9{
          display: inline-block;
          padding: 0.5em 1em;
          text-decoration: none;
          background: #03072F;
          color: #ffffff;
          border: dashed 1px #67c5ff;
          border-radius: 3px;
          transition: .4s;
      }

      .button-10{
          display: inline-block;
          padding: 0.5em 1em;
          text-decoration: none;
          background: #03072F;
          color: #ffffff;
          border-left: solid 6px #ff7c5c;
          font-weight: bold;
          box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.29);
      }

      @media (max-width: 1200px) {
          .navbar__links ul {
              display: none;
              background-color: #03072F;;
              padding: 10px;
          }

          .navbar__burger {
              display: block;
          }

          .navbar__links ul.show {
              display: block;
          }
      }

      @media (max-width: 493px){
          .politics{
              flex-direction: column;
          }
      }

      @media (max-width: 767px){
          .testimonial .col{
              flex-direction: column;
          }

          .service .content{
              flex-direction: column !important;
          }
      }

    
    </style>

    
  </head>
  <body>

    

    <header>
      <nav id="header-top" class="navbar">
        <div class="container">
          <div class="navbar-brand" href="./">
            <img src="main.svg" alt="" />
            <h4 class="site__title">Rosacitywiss</h4>
          </div>
          <div class="navbar__links">
            <ul class="navbar-nav">
              <li><a href="./">Home</a></li>
              <li><a href="./#about">About us</a></li>
              <li><a href="./#faqs">Frequently Asked Questions</a></li>
              
            </ul>
          </div>
          <div class="navbar__burger">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div
            class="row align-items-center justify-content-between 3 flex-row-reverse"
          >
            <div class="col-lg-6 col-md-6">
              <div class="home-title">
                <h1>Welcome to Rosacitywiss, your premier destination for creative and engaging floral workshops. Whether you're a beginner or a seasoned flower enthusiast, our expert-led classes offer a unique opportunity to learn, create, and enjoy the art of floral design. Join us to bring beauty and inspiration into your life through hands-on experience and expert guidance.</h1>
                
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="home__img">
                <img src="files/images/pics-854x4800.webp" alt="" />
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>

    


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-stock--footerqr{
		margin: 0px;
		padding: 0px;
		font-family: 'Martel', sans-serif;
		width: 100%;
		font-size: 18px;
		padding: 275px 0px;
	}
	.bodyClass1-stock--footerqr{
		background: #f4f9f9;
		color: #000000;
	}
	.bodyClass2-stock--footerqr{
		background: #e8ffff;
		color: #fff;
	}
	.bodyClass3-stock--footerqr{
		background: #fff;
		color: #111;
	}
	.wrapage-block-stock--footerqr{
		background-size: 100%;
		width: 100%;
	}
	.box_main-stock--footerqr{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-stock--footerqr h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-stock--footerqr p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-stock--footerqr{
		text-align: center;
	}
	.mainBlock-stock--footerqr ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-stock--footerqr ul>li span{
		font-weight: bold;
	}
	.mainBlock-stock--footerqr{
		max-width: 884px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 0px;
	}
	.mainBlock-stock--footerqr .cBlock-stock--footerqr{
		text-align: center;
	}

	.bodyClass3-stock--footerqr .mainBlock-stock--footerqr{
		background: none;
		border-top: 2px solid #e8ffff;
		border-bottom: 2px solid #e8ffff;
	}
	.bodyClass2-stock--footerqr .mainBlock-stock--footerqr{
		background: #16213E;
		color: #fff !important;
		box-shadow: 0px 0px 0px #16213E;
	}
	.bodyClass2-stock--footerqr .mainBlock-stock--footerqr p{
		color: #fff !important;
	}
	.bodyClass1-stock--footerqr .mainBlock-stock--footerqr{
		background: #ffffff;
		color: #000000;
		border-left: 0px solid #310B0B;
	}
	.bodyClass1-stock--footerqr .mainBlock-stock--footerqr p{
		color: #000000 !important;
	}
	.order-stock--footerqr{
		font-size: 21px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-stock--footerqr p{
			padding: 0px 15px;
		  }
		  .box_main-stock--footerqr h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-stock--footerqr{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-stock--footerqr{
			height: 100%;
		}
	}
</style>
<div class="bodyClass1-stock--footerqr" id="mainWrapp-stock--footerqr">


	<div class="wrapage-block-stock--footerqr">
		<div class="box_main-stock--footerqr">
			<div class="mainBlock-stock--footerqr">
				<p>Dear Valued Client,</p>
<p>Your confidence in our services is deeply valued. We've successfully received your inquiry and are currently addressing it with the utmost care.</p>
<p>Be assured that our expert team is now diligently working to fulfill your request. Striving for excellence in servicing your needs, our primary aim is to deliver outstanding quality and achieve your complete satisfaction.</p>
<p>Should you have any further questions or need additional support, please feel free to reach out via your preferred method of communication. We cherish each client and are always here to provide assistance.</p>
<p class="cBlock-stock--footerqr">Warmest regards, The Team!</p>
			</div>
		</div>
	</div>


</div>




    <section class="copyright">
      <div class="container">
        
        <div class="row align-items-center text-center">
          <div class="col-lg-12">
            <div class="politics">
              <a href="terms.html" target="_blank">Terms & Conditions</a>
              <a href="disclaimer.html" target="_blank">Disclaimer</a>
              <a href="terms.html" target="_blank">Terms & Conditions</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <a class="scrollUp" href="#">
      &#8593;
    </a>


    

</body>
</html>
