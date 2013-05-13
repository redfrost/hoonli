
        <div class="container">

        <style>       
            .banner, .content-info {
                display: none;
            }

            .main .container {
                max-width: 400px !important;
                _width: 400px !important;
                padding: 30px 10px 10px;
                background: ;
                border: 8px solid #999;
                border-radius: 18px;
                margin: 0 auto;
                box-shadow:;
            }

            
            body, a, a:visited, a:active {
                color: #999;
            }
            

            
            ul {
                font-size: 16px;
                line-height: 1.4;
                list-style: square outside none;
                margin: 16px 24px 40px;
                padding: 0 0 0 40px;
            }

            .main h1 {
                font-size: 64px;
                margin: 0;
                text-align: center;
                line-height: 100%;
            }

            .main h2 {
                font-size: 42px;
                text-align: center;
                margin: 12px 0 0 0;
                text-transform: uppercase;
                line-height: 40px;
            }

            .main h3 {
                margin: 20px 0 8px;
                text-align: center;
                font-size: 24px;
                font-weight: 500;
                line-height: 30px;
            }
            
            .main h4 {
                margin: 24px 0 8px 18px;
                text-transform: uppercase;
            }
            
            .author {
                font-size: 14px;
                padding: 0 0 0 20px;
            }

            .main .container {
                max-width: 468px;
                _width: 468px;
                margin: 60px auto;
            }
            
            .warning {
                margin: 30px 0 30px 0;
                padding: 10px 20px 16px;
                border-top:    1px solid #999;
				border-bottom: 1px solid #999;
            }
            
            .warning .sign.alert {
                background-image: url("http://f.cl.ly/items/2b3P2q31201C0G1c202C/404_icon.png");
                background-repeat: no-repeat;
                background-size: 90px auto;
                float: left;
                height: 64px;
                margin-right: 20px;
                text-indent: -9999px;
                width: 20px;
                background-color: transparent;
                border: 0px;
            }
                        
            .warning p {
                font-size: 14px;
                line-height: 20px;
            }
                    
            .sign.tip {
                background-image: url("http://f.cl.ly/items/2b3P2q31201C0G1c202C/404_icon.png");
                background-position: -70px -45px;
                background-repeat: no-repeat;
                background-size: 90px auto;
                float: left;
                height: 20px;
                margin-right: 6px;
                text-indent: -9999px;
                width: 20px;
            }       
            
            .sign.call {
                background-image: url("http://f.cl.ly/items/2b3P2q31201C0G1c202C/404_icon.png");
                background-position: -70px 0;
                background-repeat: no-repeat;
                background-size: 90px auto;
                float: left;
                height: 20px;
                margin: 15px 8px 0 0;
                text-indent: -9999px;
                width: 20px;
            }  
                       
            .contact {
                background: none repeat scroll 0 0 #999999;
                border-radius: 6px 6px 6px 6px;
                color: white;
                font-size: 13px;
                padding: 4px 20px;
                margin-bottom: 16px;
            }
            
            .main p {
                text-align: left;
            }
            
            .copyright {
                font-size: 12px;
                text-align: center !important;
            }
            
               /* Animation */          
                    .sign.alert {
                        -webkit-animation: blink 1s infinite;
                        -moz-animation:    blink 1s infinite;
                        -ms-animation:     blink 1s infinite;
                         animation:        blink 1s infinite;
                    }
                    
                    @-webkit-keyframes blink {
                       0% { opacity: 0.1; }
                       50% { opacity: 1; }
                       100% { opacity: 0.1; }  
                    }
                    
                    @-moz-keyframes blink {
                       0% { opacity: 0.1; }
                       50% { opacity: 1; }
                       100% { opacity: 0.1; }  
                    }
                    
                    @-ms-keyframes blink {
                       0% { opacity: 0.1; }
                       50% { opacity: 1; }
                       100% { opacity: 0.1; }  
                    }
                    
                    @keyframes blink {
                       0% { opacity: 0.1; }
                       50% { opacity: 1; }
                       100% { opacity: 0.1; }            
                    }


            /* Marquee Animation */                    
                    #footer, .marquee { overflow: hidden; }
            
                    .marquee {
                        -webkit-animation: scroll 10s ease infinite;
                        -moz-animation:    scroll 10s ease infinite;
                        -ms-animation:     scroll 10s ease infinite;
                         animation:        scroll 10s ease infinite;
                    }
                
                    @-webkit-keyframes scroll {
                        0%  { -webkit-transform:translateX(100%);opacity:0; }  
                        10% { -webkit-transform:translateX(0);opacity:1; }  
                        40% { -webkit-transform:translateX(0%); }  
                        50% { -webkit-transform:translateX(0%); } 
                        90% { opacity:1;}  
                        100% { opacity:0;}  
                    }
                        
                    @-moz-keyframes scroll {
                        0%  { -moz-transform:translateX(100%);opacity:0; }  
                        10% { -moz-transform:translateX(0);opacity:1; }  
                        40% { -moz-transform:translateX(0%); }  
                        50% { -moz-transform:translateX(0%); } 
                        90% { opacity:1;}  
                        100% { opacity:0;}  
                    }
                        
                    @keyframes scroll {
                        0%  { transform:translateX(100%);opacity:0; }  
                        10% { transform:translateX(0);opacity:1; }  
                        40% { transform:translateX(0%); }  
                        50% { transform:translateX(0%); } 
                        90% { opacity:1;}  
                        100% { opacity:0;}            
                    }                 

           /* Mobile only */
            @media only screen 
            and (max-width : 767px) {
                     .main .container {
                         border: 0px !important;
                     }  
                     .warning .sign.alert {
                         display :none;
                     }         
                    .main h1 {
                        font-size: 45px !important;
                    }
                    .main h2 {
                        font-size: 28px !important;
                        line-height: 20px;
                        margin: 12px 0 0;
                    }
                    .main h3 {
                        font-size: 13px !important;
                        line-height: 20px;
                        margin: 20px 0 8px;
                    }  
                         
                    .main h4 {
                        margin: 0px 0 0px 23px;
                        text-transform: uppercase;
                        font-size: 14px !important;
                    }   
                    .author {
                        font-size: 10px !important;
                        padding: 0 0 0 15px !important;
                    }          
                    .warning p {
                        font-size: 12px !important;
                        line-height: 18px !important;
                    }
                    .warning {
                        margin: 14px 0 !important;
                        padding: 15px 10px 0px !important;
                        display: inline-block !important;
                    }
                    .contact {
                        font-size: 10px;
                        margin-bottom: 16px;
                        padding: 6px 20px;
                        line-height: 13px;
                        border-radius: 5px 5px 5px 5px;
                    }
                    .sign.call {
                        margin: 8px 8px 0 0;
                    }
                    ul {
                        font-size: 12px !important;
                        margin: 0px 0px 24px !important;
                        padding: 0 0 0 40px !important;
                    }

            }
        
        </style>

            <div id="header"> 
                <h1>404 ERROR</h1>
                <h2>File Not Found</h2>
                
                <h3 class="quote">"The way to love anything is to realize that it may be lost."</h3>
                <p class="author"><em>- Gilbert K. Chesterton</em></p>
            </div>
          
            <div class="warning">            
                <p class="sign alert">Alert!</p>
                <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
            </div>

            
            <h4><i class="sign tip">Tip: </i><strong>Please try the following:</strong></h4>
            <ul>
              <li>Check your spelling</li>
              <li>Go to the main site and search again</li>
              <li><a href="javascript:history.back()">Go back to the previous page</a></li>
            </ul>
            

            <div id="footer">            
                <div class="contact"><i class="sign call">Tip: </i><p class="marquee">If you think this is a server error, please contact the system administrator.</p></div>            
                        
                <p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
            </div> 
        </div>     
                        


