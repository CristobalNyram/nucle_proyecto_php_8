<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style>
html{
  background-color: #6fd3c7;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='12' viewBox='0 0 20 12'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='charlie-brown' fill='%2365cbbd' fill-opacity='0.77'%3E%3Cpath d='M9.8 12L0 2.2V.8l10 10 10-10v1.4L10.2 12h-.4zm-4 0L0 6.2V4.8L7.2 12H5.8zm8.4 0L20 6.2V4.8L12.8 12h1.4zM9.8 0l.2.2.2-.2h-.4zm-4 0L10 4.2 14.2 0h-1.4L10 2.8 7.2 0H5.8z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
   cursor: pointer;
}

h4{
 text-align: center; 
  font-family: monospace;
  cursor: pointer;
  color:#fff;
  position:fixed;
  bottom:5px;
  right:5px;
}

.wrapper{
  margin-top:5%;
  position: absolute;
  top:45%;
  left:50%;
  width: 40%;
  transform: translate(-50%,-50%);
  background-image: linear-gradient(to right, rgba(111, 211, 199, 0.14) , #6fd3c7, rgba(111, 211, 199, 0.14));
  padding:12%;
}

 /* End of Global Styling  */ 




 /* Words , id for holder class, for its path  */ 
#Do{    
  stroke:#FEF202;
  fill:#FEF202;
  stroke-dasharray: 600;
  opacity: 1;
  animation: yellow 3s cubic-bezier(0,0.23,1,.1);
  animation-delay: 0s;
  -moz-animation:yellow 3s cubic-bezier(0,0.23,1,.1); 
  -webkit-animation:yellow 3s cubic-bezier(0,0.23,1,.1) ; 
}

#Something, .Something{
  fill:#fff;
  stroke-dasharray: 400;
  stroke:#fff;
  opacity: 0;
  animation: white 4s cubic-bezier(0,0.23,1,.1);
  -moz-animation: white 4s cubic-bezier(0,0.23,1,.1); 
  -webkit-animation: white 4s cubic-bezier(0,0.23,1,.1);
  animation-delay: 0.4s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;

}

#Creative, .Creative{
  fill:#FEF202;
  stroke-dasharray: 600;
  stroke:#FEF202;
  opacity: 0;
  animation: yellow 5s cubic-bezier(0,0.23,1,.1);
  -moz-animation:yellow 5s cubic-bezier(0,0.23,1,.1); 
  -webkit-animation:yellow 5s cubic-bezier(0,0.23,1,.1);
  animation-delay: 1s;
  animation-fill-mode: forwards;
}


#EveryDay,.EveryLetters{
  fill:#6FD3C7;
  stroke-dasharray: 600;
  stroke:#6FD3C7;
  opacity: 0;
  animation: green 4s cubic-bezier(0,0.23,1,.1);
  -moz-animation:green 4s cubic-bezier(0,0.23,1,.1); 
  -webkit-animation:green 4s cubic-bezier(0,0.23,1,.1);
  animation-delay: 2s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
  -moz-animation-fill-mode: forwards;
}




 /* backgrounds, holdrs and borders  */ 

.EveryDayandBackground{
  fill:#fff;
  opacity: 0;
  animation: everydayBK 4s cubic-bezier(0,0.23,1,.1);
  -moz-animation:everydayBK 4s cubic-bezier(0,0.23,1,.1); 
  -webkit-animation:everydayBK 4s cubic-bezier(0,0.23,1,.1);
  animation-delay: 2s;
  -webkit-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
  -moz-animation-fill-mode: forwards;
  stroke-dasharray: 850;
  stroke:#fff;
}


#LeftDotsAndLines,#RightDotsAndLines{
  fill:#fff;
  stroke-dasharray: 60;
  stroke:#fff;
  opacity: 0;
  animation: lines 5s cubic-bezier(0,0.23,1,.1);
  -moz-animation:lines 5s cubic-bezier(0,0.23,1,.1); 
  -webkit-animation:lines 5s cubic-bezier(0,0.23,1,.1);
  animation-delay: 2s;
  -webkit-animation-fill-mode: forwards;
  -moz-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}

#Border{
  fill:#FEF202;
  stroke-dasharray: 1400;
  opacity: 0;
  stroke:#FEF202;
  animation: Border 3s cubic-bezier(0,0.23,1,.1);
  -moz-animation:Border 3s cubic-bezier(0,0.23,1,.1); 
  -webkit-animation:Border 3s cubic-bezier(0,0.23,1,.1);
  animation-delay: 2s;
  -webkit-animation-fill-mode: forwards;
  -moz-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}

#QuotationLeft, #QuotationRight {
  fill:#9BF5E9;
  stroke-dasharray: 40;
  opacity: 0;
  stroke:#9BF5E9;
  animation: Quotation 3s cubic-bezier(0,0.23,1,.1);
  -moz-animation: Quotation 3s cubic-bezier(0,0.23,1,.1); 
  -webkit-animation: Quotation 3s cubic-bezier(0,0.23,1,.1) ;
  animation-delay: 3s;
  -webkit-animation-fill-mode: forwards;
  -moz-animation-fill-mode: forwards;
  animation-fill-mode: forwards;
}



 /* ainmations  */ 
@keyframes Quotation{
  0%{opacity: 0;
    fill:none;
    stroke-dashoffset: 40;}
  50%{opacity: 10;
    fill:none;
    stroke-dashoffset: 40;}
  50%{
    fill:rgba(255,255,255,0);}
  100%{opacity: 10;
    fill:#9BF5E9;
    stroke-dashoffset: 0;}
}


@keyframes yellow{
  0%{opacity: 0;
    fill:none;
    stroke-dashoffset: 600;}
  50%{opacity: 10;
    fill:none;
    stroke-dashoffset: 600;}
  50%{
    fill:rgba(255,255,255,0);}
  100%{opacity: 10;
    fill:#FEF202;
    stroke-dashoffset: 0;}
}

@keyframes Border{
  0%{opacity: 0;
    fill:none;
    stroke-dashoffset: 1400;}
  50%{opacity: 10;
    fill:none;
    stroke-dashoffset: 1400;}
  50%{
    fill:rgba(255,255,255,0);}
  100%{opacity: 10;
    fill:#FEF202;
    stroke-dashoffset: 0;}
}

@keyframes green{
  0%{opacity: 0;
    fill:none;
    stroke-dashoffset: 600;}
  50%{opacity: 10;
    fill:none;
    stroke-dashoffset: 600;}
  50%{
    fill:rgba(255,255,255,0);}
  100%{opacity: 10;
    fill:#6FD3C7;
    stroke-dashoffset: 0;}
}

@keyframes everydayBK{
  0%{opacity: 0;
    fill:none;
    stroke-dashoffset: 850;}
  50%{opacity: 10;
    fill:none;
    stroke-dashoffset: 850;}
  50%{
    fill:rgba(255,255,255,0);}
  100%{opacity: 10;
    fill:#fff;
    stroke-dashoffset: 0;}
}

@keyframes white{
  0%{opacity: 0;
    fill:none;
    stroke-dashoffset: 400;}
  50%{opacity: 10;
    fill:none;
    stroke-dashoffset: 400;}
  50%{
    fill:rgba(255,255,255,0);}
  100%{opacity: 10;
    fill:#fff;
    stroke-dashoffset: 0;}
}

@keyframes lines{
  0%{opacity: 0;
    fill:none;
    stroke-dashoffset: 60;}
  50%{opacity: 10;
    fill:none;
    stroke-dashoffset: 60;}
  50%{
    fill:rgba(255,255,255,0);}
  100%{opacity: 10;
    fill:#fff;
    stroke-dashoffset: 0;}
}


</style>
<body>

<div class="wrapper" onClick="window.location.href=window.location.href">

    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
    viewBox="0 0 251 251" style="enable-background:new 0 0 251 251;" xml:space="preserve">
<g id="Do">
   <path id="Do_D" class="Do" d="M111.6,60.7c0,3.2,0.9,4.8,3.2,4.8c4.4,0,9.5-8.9,9.5-20.4c0-7.8-3.3-14.2-11-14.2
       c-9.6,0-12.1,6.9-12.1,13c0,5.5,2.8,8.8,3.1,8.9c0.6-0.2,0.9,0.2,0.9,0.8c0,1.5-1.4,3.4-2.8,3.4c-0.3,0-0.6-0.1-0.9-0.3
       c-0.2-0.1-4.8-4.4-4.8-12.5c0-10.5,6.7-17.8,16.8-17.8c10.7,0,15.4,8.9,15.4,18.2C129,61,120.8,70,114.5,70c-5.4,0-7.4-3.5-7.4-9.6
       V38.3c0-1.1-0.2-1.4-0.2-1.8c0-0.6,0.7-1,1.5-1c1.9,0,3.2,1.2,3.2,2.5V60.7z"/>
   <path id="Do_O" class="Do" d="M156.7,59.9c-0.7,3.1-3.1,5.7-7,5.7c-1,0-2-0.1-2.8-0.4c-1.4,2.5-3.6,4.2-6.9,4.2
       c-5.8,0-8.4-5-8.4-10.7c0-8.5,4.6-13.6,5.9-13.6c1.5,0,2.7,3.1,1.2,4c-0.9,1.4-2.7,3.5-2.7,9.2c0,4.9,1.9,7.3,4.2,7.3
       c1.6,0,2.7-0.9,3.4-2.2c-2.7-2.3-4.2-6.1-4.2-10.3c0-3.6,1.6-6.8,4.7-6.8c2.7,0,4.9,4.1,4.9,9.7c0,2.1-0.2,4.3-0.8,6.2
       c0.4,0.1,0.8,0.1,1.2,0.1c2.5,0,3.8-1.9,4.2-4.2C153.7,56.9,157.5,56.7,156.7,59.9z M144.6,59.6c0.1-0.9,0.2-1.8,0.2-2.7
       c0-3.9-0.2-6.8-1.4-6.8c-0.6,0-1,0.9-1,2.7C142.4,55.5,143.3,57.9,144.6,59.6z"/>
</g>

<g id="DoLines">
    
   <g id="LeftDotsAndLines">
        <g id="LineDotLeft_1">
            <path id="DoDotLeft_1" class="st0" d="M59.5,40.4c7.4,3,14.9,6,22.3,9c1.1,0.4,1.6-1.3,0.5-1.8c-7.4-3-14.9-6-22.3-9
            C58.9,38.2,58.4,39.9,59.5,40.4L59.5,40.4z"/>
            <circle id="DoLineLeft_1" class="st0" cx="55.8" cy="37.7" r="1.2"/>
        </g>  

        <g id="LineDotLeft_2">
            <circle id="DoDotLeft_2" class="st0" cx="59.2" cy="55.1" r="1.2"/>
            <path id="DoLineLeft_2" class="st0" d="M63.1,56c6.3,0,12.6,0,18.9,0c1.2,0,1.2-1.8,0-1.8c-6.3,0-12.6,0-18.9,0
            C61.9,54.2,61.9,56,63.1,56L63.1,56z"/>
         </g>


        <g id="LineDotLeft_3">
            <path id="DoLineLeft_3" class="st0" d="M59.5,70.4c7.4-3,14.9-6,22.3-9c1.1-0.4,1.6,1.3,0.5,1.8c-7.4,3-14.9,6-22.3,9
            C58.9,72.6,58.4,70.9,59.5,70.4L59.5,70.4z"/>
            <circle id="DoDotLeft_3" class="st0" cx="55.8" cy="73.2" r="1.2"/>
        </g>
    </g>

    <g id="RightDotsAndLines">
        <g id="LineDotRight_1">
            <path id="DoLineRight_1" class="st0" d="M189.3,40.4c-7.4,3-14.9,6-22.3,9c-1.1,0.4-1.6-1.3-0.5-1.8c7.4-3,14.9-6,22.3-9
            C189.9,38.2,190.4,39.9,189.3,40.4L189.3,40.4z"/>
            <circle id="DoDotRight_1" class="st0" cx="193" cy="37.7" r="1.2"/>
            </g>

            <g id="LineDotRight_2">
            <path id="DoLineRight_2" class="st0" d="M185.7,56c-6.3,0-12.6,0-18.9,0c-1.2,0-1.2-1.8,0-1.8c6.3,0,12.6,0,18.9,0
            C186.9,54.2,186.9,56,185.7,56L185.7,56z"/>
            <circle id="DoDotRight_2" class="st0" cx="189.6" cy="55.1" r="1.2"/>
            </g>

            <g id="LineDotRight_3">
            <circle id="DoDotRight_3" class="st0" cx="193" cy="73.2" r="1.2"/>
            <path id="DoLineRight_3" class="st0" d="M189.3,70.4c-7.4-3-14.9-6-22.3-9c-1.1-0.4-1.6,1.3-0.5,1.8c7.4,3,14.9,6,22.3,9
            C189.9,72.6,190.4,70.9,189.3,70.4L189.3,70.4z"/>
            </g>  
   </g>
</g>


<g id="Something">
   <path id="Something_S" class="Something" d="M46.7,102.7c0.5-2.4,1.7-5.4,2.6-8.2c-0.5-0.8-0.9-1.6-0.9-2.5c0-1.8,3.1-4.2,4.5-4.2
       c1.3,0,1.9,1,1.9,2.4c0,1.6-1.2,3.3-1.3,3.6c2.5,4.4,5.8,6.4,5.8,11.5c0,0.6-0.1,1.3-0.3,1.9c2.5-0.5,3.8-2.1,4.4-3.9
       c0.4-1,0.7-1.4,1.2-1.4c0.9,0,1.9,1.4,1.9,2.1c0,1.1-1.2,3.1-2.5,4.1c-1.7,1.3-3.9,2.4-7.2,2.6c-1.3,1.1-3.1,1.9-5.2,1.9
       c-2.2,0-4.8-1.2-5.9-2.2c-2.6-2.5-1.2-5.4,0-5.4c1.1,0,5.9,3.1,8.6,3.1c0.6-0.7,1.2-1.9,1.2-3.3c0-3.4-2-5.6-3.9-7.5
       c-0.9,2.1-1.4,3.9-2.1,6.5C49.2,106.1,46.3,104.6,46.7,102.7z"/>
   <path id="Something_O" class="Something" d="M86.5,103.9c-0.6,2.9-2.8,5.3-6.5,5.3c-1,0-1.8-0.1-2.6-0.4c-1.3,2.3-3.4,3.9-6.4,3.9
       c-5.4,0-7.8-4.6-7.8-10c0-7.9,4.3-12.6,5.5-12.6c1.4,0,2.5,2.8,1.1,3.7c-0.9,1.3-2.5,3.3-2.5,8.6c0,4.5,1.8,6.7,3.9,6.7
       c1.5,0,2.5-0.8,3.2-2c-2.5-2.1-3.9-5.7-3.9-9.5c0-3.4,1.4-6.3,4.3-6.3c2.5,0,4.5,3.8,4.5,9c0,2-0.2,4-0.7,5.8
       c0.4,0.1,0.7,0.1,1.1,0.1c2.3,0,3.5-1.8,3.9-3.9C83.7,101.1,87.2,100.9,86.5,103.9z M75.3,103.6c0.1-0.9,0.2-1.7,0.2-2.5
       c0-3.6-0.2-6.3-1.3-6.3c-0.6,0-0.9,0.9-0.9,2.5C73.2,99.7,74,102,75.3,103.6z"/>
   <path id="Something_M" class="Something" d="M107.7,112.6c-2.8,0-4.5-2.3-4.5-5V96.7c0-1.7-0.1-3.1-1-3.1c-1.4,0-4.5,4.6-4.8,8.8v7.8
       c0,1,0.1,2.3-1.5,2.3c-1.1,0-2.6-0.4-2.6-2.4V96.7c0-1.7-0.1-3.1-1-3.1c-1.4,0-4.5,4.6-4.8,8.8v7.8c0,1,0.1,2.3-1.5,2.3
       c-1.1,0-2.6-0.4-2.6-2.4v-17c0-1-0.2-1.3-0.2-1.7c0-0.5,0.6-0.9,1.4-0.9c1.8,0,2.9,1.1,2.9,2.4v2.2c1.4-2.9,3.3-5.1,5.7-5.1
       c3.2,0,4.1,2.6,4.2,5c1.3-2.8,3.2-5,5.6-5c3.5,0,4.3,2.9,4.3,5.4v11.1c0,0.5,0,2.5,1.4,2.5c2.1,0,3.1-3.4,3.6-5.8
       c0.2-1.1,0.7-1.6,1.3-1.6c0.9,0,1.9,1.2,1.9,2.2c0,0.1,0,0.2-0.1,0.4C114.4,107.8,112.3,112.6,107.7,112.6z"/>
   <path id="Something_E" class="Something" d="M116.9,105.8c0.7,1.8,2.2,3.3,5,3.3c4.2,0,5.9-3.5,6.5-6.7c0.5-2.4,3.5-1.3,3.3,0.5
       c-0.4,3.3-2.5,9.7-10.4,9.7c-4.9,0-9.5-3.9-9.5-10.6c0-6.8,4.1-11.9,8.2-11.9c3,0,4.8,2.2,4.8,5.4
       C124.8,99.5,122.1,104.2,116.9,105.8z M116.3,102.8c2.7-1.2,4.4-4,4.4-7.2c0-1.2-0.4-1.9-1.1-1.9c-2.6,0-3.4,5.9-3.3,8.1
       C116.2,102.2,116.3,102.5,116.3,102.8z"/>
   <path id="Something_T" class="Something" d="M128.4,86.1v-9c0-1.6-0.5-1.7-0.5-2c0-0.4,1-0.6,1.7-0.6c1.8,0,2.9,1.1,2.9,2.4v9.4
       c3.3,0,7-0.1,10.7-0.2c1.5-1.6,1,3.5-0.4,3.6c-4.3,0.1-7.4,0.1-10.3,0.1v17c0,1.7,0.7,2.5,1.8,2.5c2.1,0,3.1-3.4,3.6-5.8
       c0.2-1.1,0.7-1.6,1.3-1.6c0.9,0,1.9,1.2,1.9,2.2c0,0.1,0,0.2-0.1,0.4c-0.9,3.5-3.1,8.3-7.7,8.3c-2.9,0-4.9-1.7-4.9-5.9v-17
       c-2.4,0-3.7-0.1-3.7-0.1c-1.7,0-2.7-3.6-1.1-3.6C123.6,86,125.5,86.1,128.4,86.1z"/>
   <path id="Something_H" class="Something" d="M138.1,78.2c0-1.6-0.5-1.7-0.5-2c0-0.4,1-0.6,1.7-0.6c1.8,0,2.9,1.1,2.9,2.4v17.6
       c1.4-3,3.4-5.3,6-5.3c3.6,0,4.4,2.9,4.4,5.4v11.1c0,0.5,0,2.5,1.4,2.5c2.1,0,3.1-3.4,3.6-5.8c0.6-3.3,3.5-0.7,3.1,1
       c-1,3.5-3.1,8.3-7.7,8.3c-2.8,0-4.5-2.3-4.5-5V96.7c0-1.7-0.1-3.1-1.1-3.1c-1.6,0-4.9,4.6-5.2,8.8v7.8c0,1,0.1,2.3-1.5,2.3
       c-1.1,0-2.6-0.4-2.6-2.4V78.2z"/>
   <path id="Something_I" class="Something" d="M157.4,82.1c0-1.9,1.4-3.3,3.2-3.3c1.9,0,3.3,1.4,3.3,3.3c0,1.8-1.4,3.3-3.3,3.3
       C158.9,85.4,157.4,83.9,157.4,82.1z M161.9,106.6c0,0.5,0,2.5,1.4,2.5c2.1,0,3.1-3.4,3.6-5.8c0.6-3.3,3.5-0.7,3.1,1
       c-1,3.5-3.1,8.3-7.7,8.3c-2.8,0-4.5-2.3-4.5-5V93.3c0-1-0.2-1.3-0.2-1.7c0-0.5,0.6-0.9,1.4-0.9c1.8,0,2.9,1.1,2.9,2.4V106.6z"/>
   <path id="Something_N" class="Something" d="M167,93.3c0-1-0.2-1.3-0.2-1.7c0-0.5,0.6-0.9,1.4-0.9c1.8,0,2.9,1.1,2.9,2.4v2.4
       c1.4-3,3.4-5.3,6-5.3c3.6,0,4.4,2.9,4.4,5.4v11.1c0,0.5,0,2.5,1.4,2.5c2.1,0,3.1-3.4,3.6-5.8c0.2-1.1,0.7-1.6,1.3-1.6
       c0.9,0,1.9,1.2,1.9,2.2c0,0.1,0,0.2-0.1,0.4c-0.9,3.5-3.1,8.3-7.7,8.3c-2.8,0-4.5-2.3-4.5-5V96.7c0-1.7-0.1-3.1-1.1-3.1
       c-1.6,0-4.9,4.6-5.2,8.8v7.8c0,1,0.1,2.3-1.5,2.3c-1.1,0-2.6-0.4-2.6-2.4V93.3z"/>
   <path id="Something_G" class="Something" d="M196.2,115.8v-5.6c-1.1,1.1-2.5,1.9-4.4,1.9c-4.2,0-6.4-3.5-6.4-8.1c0-8.9,6.2-14.4,12.7-14.4
       c1.4,0,2.5,0.9,2.5,2.2c0,0.9-0.2,1.2-0.7,1.2c-0.5,0-1-0.1-1.6-0.1c-4.1,0-8.8,3.5-8.8,11.2c0,2.8,1.2,4.4,3.1,4.4
       c2.1,0,3.2-2.8,3.6-5v-6c0-1-0.2-1.3-0.2-1.7c0-0.5,0.6-0.9,1.4-0.9c1.8,0,2.9,1.1,2.9,2.4v14.6c1.9-2.1,3.6-4.8,4.7-8.5
       c0.3-1.1,0.7-1.6,1.3-1.6c0.9,0,1.9,1.2,1.9,2.2c0,0.1,0,0.3-0.1,0.5c-1.8,6.2-4.9,9.4-7.8,11.9v9.3c0,5.6-2.8,7.6-5.6,7.6
       c-3,0-5.1-2.7-5.1-6.2C189.6,121.6,192.7,118.9,196.2,115.8z M196.2,125.6v-5.7c-1.7,1.8-2.9,3.8-2.9,7c0,1.7,0.5,2.9,1.4,2.9
       C196.4,129.8,196.2,126.6,196.2,125.6z"/>
</g>





<g id="Creative">
   <path id="#Creative_C" class="Creative" d="M61.3,123.3v6c-1.8-1.4-3.1-2.2-5.6-2.2c-3,0-5.6,2.5-5.6,5.8c0,3.3,2.7,5.8,5.6,5.8
       c2.6,0,3.9-0.7,5.6-2.2v6c-1.5,1.3-3.5,2-5.9,2c-6,0-11.8-4.2-11.8-11.6c0-7.4,5.7-11.6,11.8-11.6C57.7,121.3,59.8,122,61.3,123.3z
       "/>
   <path id="#Creative_R" class="Creative" d="M76.9,127.3v6.3c-0.8-0.5-1.6-0.8-2.8-0.8c-1.6,0-2.8,1-3.5,2.5v8.7h-5.7v-16.9h5.7v3
       c1.1-1.8,2.2-3.3,4.3-3.3C75.7,126.8,76.3,127,76.9,127.3z"/>
   <path id="#Creative_E" class="Creative" d="M95.9,137H84.4c0.5,1.7,2.1,2.5,4,2.5c2.6,0,4.3-0.6,5.2-1.1v4.9c-1.2,0.7-3,1.2-5.6,1.2
       c-4.8,0-9.3-3.3-9.3-8.7c0-5,3.9-9.2,9-9.2c4.8,0,8.2,3.3,8.2,8.5V137z M90.5,133.9c0-1.6-1.5-2.6-2.9-2.6c-1.5,0-2.7,0.8-3.1,2.6
       H90.5z"/>
   <path id="#Creative_A" class="Creative" d="M110.2,128.7v-1.6h5.7V144h-5.7v-2.8c-0.8,1.9-2.6,3.3-5,3.3c-3.8,0-7.3-2.9-7.3-9
       c0-5.7,3.5-8.9,7.6-8.9C107.3,126.6,109.1,127.5,110.2,128.7z M103.8,135.5c0,1.8,1.2,3.2,3,3.2c1.4,0,3.3-1.1,3.3-3.5v-1.6
       c-1-0.8-2.3-1.4-3.5-1.4C105,132.2,103.8,133.7,103.8,135.5z"/>
   <path id="#Creative_T" class="Creative" d="M132.5,127.1v4.5h-4.4v4.7c0,1.6,0.7,2.7,2,2.7c1.1,0,1.9-0.2,2.7-0.7v4.4
       c-0.7,1-2.3,1.8-4.5,1.8c-3.1,0-5.9-2.3-5.9-6.1v-6.8h-2.9v-3.5c2.2-0.6,4.5-2.4,5.5-6h3v5H132.5z"/>
   <path id="#Creative_I" class="Creative" d="M144,144h-5.7v-12.3h-2.8v-4.6h8.4V144z M137.4,121.1c0-1.9,1.6-3.4,3.5-3.4
       c1.9,0,3.6,1.5,3.6,3.4c0,1.9-1.7,3.4-3.6,3.4C139,124.5,137.4,123,137.4,121.1z"/>
   <path id="#Creative_V" class="Creative" d="M154.3,144l-8.2-16.9h6.6l3.4,8.5l3.4-8.5h6.6l-8.1,16.9H154.3z"/>
   <path id="#Creative_Eii" class="Creative" d="M183.2,137h-11.5c0.5,1.7,2.1,2.5,4,2.5c2.6,0,4.3-0.6,5.2-1.1v4.9c-1.2,0.7-3,1.2-5.6,1.2
       c-4.8,0-9.3-3.3-9.3-8.7c0-5,3.9-9.2,9-9.2c4.8,0,8.2,3.3,8.2,8.5V137z M177.8,133.9c0-1.6-1.5-2.6-2.9-2.6c-1.5,0-2.7,0.8-3.1,2.6
       H177.8z"/>
</g>



<g id="EveryDayandBackground">
  
    <g>
       <polygon id="XMLID_35_" class="EveryDayandBackground" points="215.3,152.7 130.1,152.7 118.7,152.7 33.5,152.7 44,170.2 33.5,187.8 118.7,187.8 
           130.1,187.8 215.3,187.8 204.8,170.2 		"/>
   </g>

   <g id="EveryDay">
       <path id="Every_E" class="EveryLetters" d="M54,168.6h7.6v4H54v3.1h8.6v4.6h-14v-19.2h14v4.4H54V168.6z"/>
       <path id="Every_V" class="EveryLetters" d="M74.2,180.6l-8.9-19.5h6.3l4,10.6l4-10.6h6.3l-8.9,19.5H74.2z"/>
       <path id="Every_E" class="EveryLetters" d="M94,168.6h7.6v4H94v3.1h8.6v4.6h-14v-19.2h14v4.4H94V168.6z"/>
       <path id="Every_R" class="EveryLetters" d="M112.8,172.7v7.7h-5.4v-19.2h8.2c3.9,0,7.8,2.2,7.8,6.7c0,2.8-1.8,4.8-4.3,5.5l5.4,7.1h-6.5
           L112.8,172.7z M112.8,169.7c0.6,0.2,1.4,0.4,2.2,0.4c1.7,0,3-0.7,3-2c0-1.6-1.3-2-3-2h-2.2V169.7z"/>
       <path id="Every_Y" class="EveryLetters" d="M136.1,180.3h-5.4v-6.6l-7.5-12.6h6.3l4,7.1l3.9-7.1h6.3l-7.5,12.6V180.3z"/>
       <path id="Day_D" class="DayLetters" d="M154.3,161.1c5.2,0,10.2,3.4,10.2,9.6c0,5.7-3.8,10-9.8,10c-2.6,0-5.9-0.3-8.3-0.8v-18.8
           H154.3z M151.8,175.4c0.9,0.3,1.8,0.3,2.6,0.3c3.3,0,4.5-1.9,4.5-4.7c0-3-1.8-4.9-5-4.9h-2.2V175.4z"/>
       <path id="Day_A" class="DayLetters" d="M171.1,177.8l-0.9,2.6h-6.3l8.9-19.5h2.7l8.9,19.5h-6.3l-0.9-2.6H171.1z M174.2,169.5l-1.5,4
           h2.9L174.2,169.5z"/>
       <path id="Day_Y" class="DayLetters" d="M194.4,180.3h-5.4v-6.6l-7.5-12.6h6.3l4,7.1l3.9-7.1h6.3l-7.5,12.6V180.3z"/>
   </g>

</g>

<path id="Border" class="" d="M244.9,55.1c-11.2,0-22.5,0-33.7,0c-1.3,0-1.3,2,0,2c10.9,0,21.8,0,32.7,0c0,30.1,0,47,0,77.1
   c0,23.1,0,46.2,0,69.3c-14.9,0-29.9,0-44.8,0c-0.5,0-1,0.5-1,1c0,7.9,0,15.8,0,23.7c-5.5-4.2-10.9-8.5-16.4-12.7
   c-3.6-2.8-7.2-5.6-10.8-8.4c-0.8-0.6-2.3-2.3-3.4-2.3c-10.7,0-21.4,0-32,0c-39.2,0-78.5,0-117.7,0c-4.3,0-8.6,0-13,0c0-30,0-60,0-90
   c0-23.7,0-34.1,0-57.7c11.2,0,22.4,0,33.6,0c1.3,0,1.3-2,0-2c-11.5,0-23.1,0-34.6,0c-0.5,0-1,0.5-1,1c0,30.3,0,47.5,0,77.8
   c0,24,0,48,0,71.9c0,0.5,0.5,1,1,1c30.3,0,60.5,0,90.8,0c18.9,0,37.8,0,56.7,0c4.9,0,9.7,0,14.6,0c0.5,0,0.9,0,1.4,0
   c0,0,0.1,0,0.1,0c2.2,1.7,4.5,3.5,6.7,5.2c8.1,6.3,16.2,12.6,24.3,18.9c0.6,0.5,1.7,0.2,1.7-0.7c0-8.3,0-16.5,0-24.8
   c14.9,0,29.9,0,44.8,0c0.5,0,1-0.5,1-1c0-30.4,0-60.9,0-91.3c0-23.4,0-33.7,0-57.1C245.9,55.5,245.5,55.1,244.9,55.1z"/>

<g>
       <path id="QuotationLeft" class="st0" d="M8.9,71.4c0-3,4.1-9.1,6.2-9.1c1.4,0,2.4,1.6,2.4,2.6c0,0.4-0.2,0.4-0.6,0.6
           c-0.6,0.2-1.8,1.6-3,3.1c1.7,0.4,3,1.9,3,3.7c0,2.2-1.9,3.9-4,3.9C10.8,76.3,8.9,74.7,8.9,71.4z M19,71.4c0-3,4.1-9.1,6.2-9.1
           c1.4,0,2.4,1.6,2.4,2.6c0,0.4-0.2,0.4-0.6,0.6c-0.6,0.2-1.8,1.6-3,3.1c1.7,0.4,3,1.9,3,3.7c0,2.2-1.9,3.9-4,3.9
           C20.9,76.3,19,74.7,19,71.4z"/>
</g>


<g>
       <path id="QuotationRight" class="st0" d="M239.6,190.3c0,3-4.1,9-6.2,9c-1.4,0-2.4-1.6-2.4-2.6c0-0.4,0.2-0.4,0.6-0.6
           c0.6-0.2,1.8-1.6,3-3.1c-1.7-0.4-3-1.9-3-3.7c0-2.2,1.9-3.9,4-3.9C237.7,185.5,239.6,187.1,239.6,190.3z M229.4,190.3
           c0,3-4.1,9-6.2,9c-1.4,0-2.4-1.6-2.4-2.6c0-0.4,0.2-0.4,0.6-0.6c0.6-0.2,1.8-1.6,3-3.1c-1.7-0.4-3-1.9-3-3.7c0-2.2,1.9-3.9,4-3.9
           C227.5,185.5,229.4,187.1,229.4,190.3z"/>
</g>

</svg>


</div>

 <h4> Click to rerun it ;) 
   <br> coded by <a style="color:#fff;" href="https://www.Mansoour.com"> Mansoour</a></h4>
  </body>

  <script>
    $( "html,h4,.wrapper" ).click(function() {
//location.reload(); 
 $(".wrapper").load(" .wrapper > *"); 
});
  </script>
</html>