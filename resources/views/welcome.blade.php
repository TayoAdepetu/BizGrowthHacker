<!DOCTYPE html>
<html>
    <!--lang="{{ str_replace('_', '-', app()->getLocale()) }}"-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

        <title>BizGrowthHacker: Content That Breathe Life Into Your Business</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
            
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-color:#d3dfdf;
            }

            .menu-bar{
                font-family: 'Inter';
                font-style: normal;
                font-size: 18px;
                display:flex;
                justify-content:space-between;                
                margin-top:10px;
                align-items: center;
                
            }

            .menuuu{
                display:block;
                width:90%;
                background:white;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                margin-right:auto;
                margin-left:auto;
            }

            .menu-menu{
                display:flex;
                margin-right:1%;
                font-weight: 500; 
                margin-top:auto;
                margin-bottom:auto;               
            }

            .top-area{
                width: 100vw;
                display:block;
                margin-top:auto;
                margin-left:auto;
                /* background: radial-gradient(96.23% 488.16% at 98.31% 16.97%, #37C414 0%, #75E86B 27.72%, #FED70B 54.29%, #37DA1D 100%);*/
            }

            .page-header{
                font-weight: 700;
                color: #FF8A1F;
                margin-left:1%; 
            }

            .service-opening{
                display:block;
            }

            .service-page{
                padding: 10px;
                color: #FF8A1F;
                margin-right:12px;
            }

            .work-page-border{
                padding: 10px;
                background: #00A237;
                border-radius: 8px;
                color: #FFFFFF;
                text-align:center;
            }

            .the-hero{
                display:flex;
                width:90%;
                margin-top:5%;
                margin-right:auto;
                margin-left:auto;
                column-gap:30px;

            }

            .first-flex{                
            }

            .my-image{

            }

            .myself-img{
                width:400px;
            }

            .hit-line{
                font-family: 'Inter';
                font-style: normal;
                font-weight: 600;
                font-size: 60px;
                color: #00A237;
            }

            .intro-line{
                font-family: 'Inter';
                font-style: normal;
                font-weight: 400;
                font-size: 20px;
                color: #475467;
                margin-top:25px;
            }

            .name-tag{              
                text-align:center;          
                background: #FFFFFF;
                border-radius: 20px;
                margin-bottom:25px;
                font-family: 'Inter';
                font-style: normal;
                display:flex;
                font-weight: 600;
                font-size: 15px;               
                color: #344054;
                padding:4px;
                
            }

            .first-name{
                padding-top:3px;
            }

            .second-name{
                border: 3px solid #FF8A1F;
                border-radius:50%;
                color: #344054;
                font-size: 15px;

            }

            .brief-service{
                background: #FFFFFF;
                padding:2%;
                border-radius:20%;
                font-weight: 600;
                font-size: 17px; 
                margin-top:25px;
            }

            .call-to-action{
                justify-content: center;
                align-items: center;
                padding: 4% 6%;
                background: #00A237;
                border-radius: 8px;
                width:50%;
                color:#FFFFFF;
                text-align:center;
                margin-top:25px;
            }

            .more-money{
                border: 3px solid #FF8A1F;
                border-radius:50%;
            }

            .service-opening{
                margin-top:60px;
                width:80%;
                margin-right:auto;
                margin-left:auto;
            }

            .money-hit-line{
                font-family: 'Inter';
                font-style: normal;
                font-weight: 600;
                font-size: 45px;
                text-align: center;
                color: #171648;
            }

            .money-intro{
                margin-top:10px;
                width:50%;
                font-family: 'Inter';
                font-style: normal;
                font-weight: 400;
                font-size: 20px;
                text-align: center;
                color: #475467;
                margin-right:auto;
                margin-left:auto;
            }

            .testimonial{
                background: #00A237;
                text-align: center;
                width:100%;
                margin-top:20px;           
            }

            .testimonial-headline{
                font-family: 'Inter';
                font-style: normal;
                font-weight: 600;
                font-size: 45px;
                line-height: 116%;
                letter-spacing: -0.03em;
                color: #FFFFFF;
            }

            .testimony{
                margin-right:auto;
                margin-left:auto;
                width:50%;
                font-family: 'Inter';
                font-style: italic;
                font-weight: 500;
                font-size: 22px;
                line-height: 36px;
                color: #FFFFFF;
            }

            .testy-name{
                height: 30px;
                font-family: 'Lato';
                font-style: normal;
                font-weight: 700;
                font-size: 25px;
                line-height: 30px;
                color: #FFFFFF;
            }

            .testy-firm{
                height: 44px;
                font-family: 'Inter';
                font-style: normal;
                font-weight: 500;
                font-size: 16px;
                line-height: 22px;
                color: rgba(255, 255, 255, 0.8);
            }

            .called{
                width:50%;
                margin-left:auto;
                margin-right:auto;
                margin-top:25px;
                font-family: 'Inter';
                font-style: normal;
                margin-bottom:25px;
            }

            .call-head{
                font-weight: 600;
                font-size: 40px;
                line-height: 116%;
                letter-spacing: -0.03em;
                color: #171648;
                text-align:center;
                
            }

            .calling-long{
                font-weight: 400;
                font-size: 16px;
                text-align: center;
                letter-spacing: 0.01em;
                color: #171648;
                margin-top:10px;               
            }

            .last-call-to-action{
                font-family: 'Inter';
                font-style: normal;
                font-weight: 700;
                font-size: 14px;
                text-align: center;
                color: #FFFFFF;
                background: #00A237;
                border-radius: 8px;
                padding: 3%;
                margin-top:10px;
            }

            .footer{
                width: 100%;
                background: radial-gradient(96.23% 488.16% at 98.31% 16.97%, #37C414 0%, #75E86B 27.72%, #FED70B 54.29%, #37DA1D 100%);
                position:relative;
            }

            .footnote{
                /*vertical and horizontal center:https://www.w3schools.com/howto/howto_css_center-vertical.asp */
                
                font-family: 'Inter';
                font-style: normal;
                font-weight: 700;
                font-size: 18px;
                color: #FFFFFF;
                padding:3%;
                text-align:center;
            }

            .service-section{
                display:flex;
                width:90%;
                column-gap:40px;
                justify-content:center;
                margin-right:auto;
                margin-left:auto;
                
            }

            .service-title{
                font-family: 'Inter';
                font-style: normal;
                font-weight: 700;
                font-size:40px;
                text-align:center;
            }

            .service-image{
                width:80%;
                height:20%;
                margin-right:auto;
                margin-left:auto;
                display:block;
            }

            .service-side{
                width:40%;
                background:#FFFFFF;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                padding:3%;
                margin-top:10px;
                margin-bottom:10px;
                margin-right:auto;
                margin-left:auto;
            }

            .service-align{
                text-align:justify;
                font-family: 'Inter';
                font-style: normal;
                font-size:18px;
                color: #475467;

            }

            .service-tips{
                font-family: 'Inter';
                font-style: normal;
                font-weight: bold;
                font-size:18px;
                text-align:center;
            }

            @media screen and (max-width: 1050px) {
                .myself-img{
                    height:700px;
                }

            }

            @media screen and (max-width: 1200px) {
                .myself-img{
                    height:600px;
                }

            }

            @media screen and (max-width: 900px) {
                .myself-img{
                    height:800px;
                    width:400px;
                }

            }

            @media screen and (max-width: 820px) {
                .myself-img{
                    height:1000px;
                    width:400px;
                }

            }

            @media screen and (max-width: 760px) {
                .myself-img{
                    height:1020px;
                    width:400px;
                }

            }

            @media screen and (max-width: 740px) {
                .myself-img{
                    height:1040px;
                    width:400px;
                }

            }

            @media screen and (max-width: 725px) {
                .myself-img{
                    height:1200px;
                    width:400px;
                }

            }

            @media screen and (max-width: 700px) {
                .myself-img{
                    display:none;
                }

                .first-flex{
                    width:95%;
                    
                }

                .the-hero{
                    margin-right:auto;
                    margin-left:auto;
                }

                .brief-service, .call-to-action{
                    margin-right:auto;
                    margin-left:auto;
                }

                .service-section{
                    display:block;
                    margin-right:auto;
                    margin-left:auto;
                }

                .top-area{
                    width:80%;
                    margin-right:auto;
                    margin-left:auto;
                }

                .service-side{
                    width:80%;
                }

            }

            @media screen and (max-width: 600px) {
                .service-section{
                    display:block;
                    margin-right:auto;
                    margin-left:auto;
                }

            }

            @media screen and (max-width: 500px) {
                .grid-container{
                    grid-template-columns: auto;
                    max-width: 80%;   
                }
            }

            @media screen and (max-width: 360px) {
            .grid-container{
                grid-template-columns: auto;
                max-width: 90%;   
            }
            }
        </style>
    </head>
    <body class="antialiased">

        <div id="app">
            <div class="top-area">
            <home-page></home-page>
            </div>
        </div>

        @vite('resources/js/app.js')
    </body>
</html>
