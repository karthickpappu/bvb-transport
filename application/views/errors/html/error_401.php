<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ERROR 401 Unauthorized Access:(</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <style>
            @import url(https://fonts.googleapis.com/css?family=Arvo);


            /* SELECTED TEXT */
            ::selection { background: #ff5e99; color: #FFFFFF; text-shadow: 0; }
            ::-moz-selection { background: #ff5e99; color: #FFFFFF; }

            html {
                font-size: 18px;font-size: 1.13rem;
                -webkit-text-size-adjust: 100%;
                -ms-text-size-adjust: 100%;                          
            }

            html, input { font-family: "arvo", "Helvetica Neue", Helvetica, Arial, sans-serif; }



            body {                
                background: #d3d3d3;
                margin: auto;
                color: #fff;
            }


            a {
                -webkit-transition: all 200ms ease;
                -moz-transition: all 200ms ease;
                -ms-transition: all 200ms ease;
                -o-transition: all 200ms ease;
                transition: all 200ms ease; 

                -webkit-transform: translate3d(0, 0, 0);
                -webkit-backface-visibility: hidden;

                opacity: 1;
            }

            a:hover {
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)"; /* IE 8 */
                filter: alpha(opacity=50); /* IE7 */
                opacity: 0.6;
            }

            a, a:visited, a:active {
                color: #fff;
                text-decoration: none;
            }

            .wraper {
                max-width: 100%;
                height: 400px;   
                margin: 20px 0 0 26px;   
            }

            .container {
                max-width: 400px;
                _width: 400px;
                margin: 0 auto 80px;
                text-align: center;
            }

            h1 {
                margin: 0;
            }

            h2 {
                font-size: 16px;font-size: 1rem;
                font-weight: 400;
                margin: 0;
                padding: 4px 0 10px;
                color: #aaa;
            }

            h3 {
                margin: 20px 0 8px;
                text-align: center;
                font-size: 20px;
                font-weight: 500;
                line-height: 1.4;
                padding: 0 30px;
            }    

            .warning {
                margin: 0px 0 30px 0;
                padding: 0px 20px 8px;
            }
            .warning p {
                font-size: 12px;font-size: 0.75rem;
            }

            .warning a { 
                display: block;
                margin-top: 30px;
                padding: 20px;
                background: #16A085; 
            }






            /* SVG */
            .wraper {
                max-width: 100%;
                height: 100px;   


            }


            /*
            .unicorn_black_line {
            width: 400px;
            height: 400px;     
            
            background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgdmlld0JveD0iMCAwIDUwNS43NiA1NDkuMzgiPgo8cG9seWdvbiBmaWxsPSJub25lIiBzdHJva2U9IiMwMDAwMDAiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBwb2ludHM9Ijg2LjgsMTQyIDE0LjIsMTgyLjQgMTUsMTM1LjIgODEuMSw4NCIvPgo8cG9seWdvbiBmaWxsPSJub25lIiBzdHJva2U9IiMwMDAwMDAiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBwb2ludHM9IjcuMSw4LjEgNjIuMSw5NCA4MS4yLDc5LjciLz4KPHBvbHlnb24gZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgcG9pbnRzPSI4NC4yLDgxLjcgOTAuNywxNDIuMyA3OC45LDMwMS45IDEzNi4yLDI3MS4zIDE2Mi44LDE3Mi45IDEyNC45LDk4LjciLz4KPHBvbHlnb24gZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgcG9pbnRzPSIxNjksMjUyLjMgMTM5LjYsMjY5LjEgMTY1LjQsMTc0LjMgMjAyLjMsMTc3LjciLz4KPHBvbHlnb24gZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgcG9pbnRzPSIxNjUuOCwyNTguNyA3OC45LDMwNy43IDExNS45LDMyNi40IDM2LjMsNTQyIDIwMC4zLDM3OS43IDE2OC42LDM4Mi40Ii8+Cjxwb2x5Z29uIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzAwMDAwMCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHBvaW50cz0iMTc0LjQsMzc3LjggMTg5LjksMzYzIDIwMS43LDM3NS44Ii8+Cjxwb2x5Z29uIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzAwMDAwMCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHBvaW50cz0iMTY5LjksMjU5LjMgMTcyLjQsMzc0IDIyMS4yLDMyOS4zIi8+Cjxwb2x5Z29uIGZpbGw9Im5vbmUiIHN0cm9rZT0iIzAwMDAwMCIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHBvaW50cz0iMTcxLjQsMjU1LjUgMjA0LjQsMjI3LjUgMjIxLjIsMzIzLjgiLz4KPHBvbHlnb24gZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgcG9pbnRzPSIyMDcuOSwyMjkgMjIxLjcsMzAzLjkgMjU1LjIsMjc5LjUiLz4KPHBvbHlnb24gZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgcG9pbnRzPSIyMjIuNCwzMDcuNSAyMjYuMiwzMjkuMyAxOTMuMiwzNjAuMyAxOTYuNiwzNjQgMjM0LjcsMzM2LjggMzYzLjQsMzI5LjkgMjQ4LjIsMjY2LjUgMjYwLjQsMjc5LjgiLz4KPHBvbHlnb24gZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgcG9pbnRzPSIxOTguMywzNjYgMjA1LjIsMzc0LjMgMzUyLjQsMzMzLjcgMjM1LjksMzM5LjgiLz4KPHBvbHlnb24gZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgcG9pbnRzPSIyMjYuMiwyNDMuOCAyNDAuOSwyNTkuMyAzNjMuNCwzMjYuOSAyNDguNywyMzQiLz4KPHBvbHlnb24gZmlsbD0ibm9uZSIgc3Ryb2tlPSIjMDAwMDAwIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgcG9pbnRzPSIyNzkuMSwyNTQuNSAzNTkuNCwzMjAuMyAzMTIuNywyNTQuNSIvPgo8cG9seWdvbiBmaWxsPSJub25lIiBzdHJva2U9IiMwMDAwMDAiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBwb2ludHM9IjMxNi45LDI1NC41IDM3MS42LDMzMi40IDI3MC45LDM1OS43IDMxMC4zLDQxNy43IDM4My42LDQwMi40IDM3Ny42LDM1NC40IDUwMC45LDM5OCAzNzAuNiwyNjIuNyIvPgo8cG9seWdvbiBmaWxsPSJub25lIiBzdHJva2U9IiMwMDAwMDAiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBwb2ludHM9IjMxNi42LDQxOS43IDM5OC4zLDU0MiAzODIuMyw0MDYuNCIvPgo8L3N2Zz4K) no-repeat center center;    
            }   
            */   


            .four-oh-four {
                max-width: 150px;
                height: 120px;
                text-indent: -9999px;
                margin: auto;


            }           




            /* Responsive
            -------------------------------------------------------*/  

            /* Desktop only */
            @media only screen and (min-width : 1800px) {
                h2 {
                    font-size: 28px;font-size: 1.75rem;

                }
                .warning p {
                    font-size: 14px;font-size: 0.88rem;
                }
                .wraper {
                    max-width: 100%;
                    height: 200px;   
                    margin: 60px 0 0 26px;  
                } 
            }  

            @media only screen and (max-width : 568px) {
                body {
                    background: #d3d3d3;
                }            
                .warning a { 
                    background: #037c63; 
                }        
                h2 {
                    color: #fff;
                }                  
            }

            @media only screen and (max-width : 320px) {

                .wraper {
                    height: 50px;   
                    margin: 20px 0 0 0px !important;  
                } 
                .four-oh-four {
                    height:40px; 
                    margin: 10px auto 10px;
                }      
                h2 {
                    font-size: 0.88rem;
                    font-weight: bold;
                }
                .warning {
                    margin: 0;
                }
                .warning p {
                    margin-top: 10px; 
                    font-size: 0.63rem; 
                }
                .warning a { 
                    margin-top: 20px;
                    font-size: 0.63rem; 
                }        

            }
        </style>
        <script type="text/javascript">
            // 404 Error page
//Responsive: Large desktop (1800px), Standard, Mobile (568px)


// iPhone pull addressbar (Optional)
            /mobile/i.test(navigator.userAgent) && !window.location.hash && setTimeout(function () {
                window.scrollTo(0, 1);
            }, 1000);


        </script>
    </head>


    <body>

        <div class="wraper"> </div>

        <div class="container">
            <img src="<?php echo $this->config->item('base_url'); ?>/images/i-stem-logo-final.png" width="200" height="65">
            <br/><br/>
            <h1>401 Error</h1>

            <div class="warning">            
                <h2>Unauthorized Access</h2>

                <a onclick="location.href = '<?php echo $this->config->item('base_url'); ?>';">I-STEM Homepage</a>
            </div>



        </div><!-- /.container -->                             
    </body>
</html>

