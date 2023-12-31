
<html>
    <head>
        <title>Driva's Jewels || Thank You</title>
        <link rel="shortcut icon" href="assets/images/icons/logo12.png">
    </head>
    <body>
        <style>/* CSS Animation for success tick */

.animate-success-svg {
  opacity: 0;
	animation: animate-success 300ms ease-out 800ms 1 forwards;
}

@keyframes animate-success {
	from { transform: scale(0); opacity: 1 }
	to { transform: scale(1); opacity: 1 }
}

.animate-tick-background {
  transform: rotate(-170deg);
  transform-origin: 50%;
	animation: rotate-circle 300ms ease-out 800ms 1;
}

@keyframes rotate-circle {
	to { 
		transform: rotate(0deg); 
	}
}

.animated-check {
    fill: none;
    stroke: white;
    stroke-width: 10;
    stroke-dasharray: 100;
    stroke-dashoffset: 100;
    opacity: 0;
    animation: draw 300ms ease-out 1200ms 1 forwards ;
    stroke-linecap: round;
    stroke-linejoin: round
}

@keyframes draw {
  from { opacity: 1 } 
  to {
        opacity: 1;
        stroke-dashoffset: 0
  }
}

/* CSS Animatin for Illustration */
.animation-1 {
  transform: translateX(-10px);
  animation: translate-box 300ms ease-out 500ms 1 forwards;
}
 
.animation-2 {
  transform: translateX(10px);
  animation: translate-box 300ms ease-out 500ms 1 forwards;
}

@keyframes translate-box {
	to { transform: translateX(0px); }
}

.animate-3 {
  transform: translate(-5px, -2px);
  animation: animatei-2 300ms ease-out 500ms 1 forwards;
}
@keyframes animatei-2 {
	to {
    transform: translate(-15px, -2px);
 }
}

.animate-4 {
    transform: translateX(4px);
  animation: animatei-7 300ms ease-out 500ms 1 forwards;
}

@keyframes animatei-7 {
	to { transform: translateX(-2px); }
}

/*  CSS Animation for text block */
#ty-transition > #message-block {
	display: flex;
	flex-direction: column;
	align-self: stretch;
	justify-content: center;
	align-items: center;
}

#message-block {
	margin-top: 4px;
	opacity: 0;
	transform: translateY(31px);
	animation: animate-msg-block 200ms ease-out 1500ms 1;
	animation-fill-mode: forwards;
}

#message-block > .heading-text {
	font-size: 24px;
	font-weight: 700;
	line-height: 31px;

	text-align: center;
	color: #222222;
}

#message-block > .subheading-text {
	font-size: 16px;
	font-weight: 400;
	line-height: 20.8px;

	text-align: center;
	color: #222222;
}

@keyframes animate-msg-block {
	to {
		opacity: 1;
		transform: translateY(0);
	}
}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 300px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}</style>
        <div id="ty-transition" style="display: flex; flex-direction: column; gap: 22px; align-items: center; justify-content: center;padding-top: 142px;">
  
<!--   -------------------------------- SUCCESS CHECK SVG BEGINS ---------------------------- -->
  
   <svg  class="animate-success-svg" xmlns="http://www.w3.org/2000/svg"  xmlns:xlink="http://www.w3.org/1999/xlink" width="120" height="120" viewBox="0 0 120 120" fill="none">
      <path class="animate-tick-background" d="m53.786 5.9678c3.2679-3.2779 8.5768-3.2779 11.845 0 2.3946 2.4019 6.0028 3.1196 9.1344 1.8169 4.2735-1.7778 9.1783 0.25385 10.943 4.5328 1.2932 3.1354 4.3521 5.1793 7.7438 5.1742 4.6285-0.0071 8.3821 3.7469 8.3751 8.3754-5e-3 3.3917 2.039 6.4506 5.175 7.7438 4.278 1.7647 6.31 6.6695 4.532 10.943-1.302 3.1315-0.585 6.7397 1.817 9.1343 3.278 3.2679 3.278 8.5768 0 11.845-2.402 2.3947-3.119 6.0029-1.817 9.1344 1.778 4.2735-0.254 9.1783-4.532 10.943-3.136 1.2931-5.18 4.3521-5.175 7.7437 7e-3 4.6286-3.7466 8.3828-8.3751 8.3758-3.3917-5e-3 -6.4506 2.038-7.7438 5.174-1.7647 4.279-6.6695 6.31-10.943 4.533-3.1316-1.303-6.7398-0.585-9.1344 1.817-3.2679 3.277-8.5768 3.277-11.845 0-2.3946-2.402-6.0029-3.12-9.1344-1.817-4.2735 1.777-9.1783-0.254-10.943-4.533-1.2931-3.136-4.352-5.179-7.7437-5.174-4.6286 7e-3 -8.3825-3.7472-8.3755-8.3758 0.0052-3.3916-2.0387-6.4506-5.1742-7.7437-4.2789-1.7648-6.3105-6.6696-4.5328-10.943 1.3027-3.1315 0.58498-6.7397-1.817-9.1344-3.2779-3.2679-3.2779-8.5768 0-11.845 2.4019-2.3946 3.1197-6.0028 1.817-9.1343-1.7778-4.2736 0.25384-9.1784 4.5328-10.943 3.1355-1.2932 5.1794-4.3521 5.1742-7.7438-7e-3 -4.6285 3.7469-8.3825 8.3755-8.3754 3.3917 0.0051 6.4506-2.0388 7.7437-5.1742 1.7648-4.279 6.6696-6.3106 10.943-4.5328 3.1315 1.3027 6.7398 0.58499 9.1344-1.8169z" fill="#38A038"/>
      <path d="M39 59.5L52.5 73L84 45" stroke="#EE204E" stroke-linecap="round" stroke-width="10" class="animated-check"/>
   </svg>
 <!--   -------------------------------- SUCCESS CHECK SVG ENDS---------------------------- -->

  
  <!--   -------------------------------- TY ILLUSTRATION BEGINS ---------------------------- -->
   <svg xmlns="http://www.w3.org/2000/svg" width="270" height="56" viewBox="0 0 270 56" fill="none">
      <path
         class="animate-4"
         d="M123 56C190.931 56 246 53.5376 246 50.5C246 47.4624 190.931 45 123 45C55.069 45 0 47.4624 0 50.5C0 53.5376 55.069 56 123 56Z"
         fill="#E40046" fill-opacity="0.2" />
      <path
         class="animation-2"
         d="M20.3575 27.6884C19.9184 27.1386 19.4117 26.6249 19.1427 25.9702C18.7609 25.0682 18.8876 24.0321 19.1774 23.0974C19.4672 22.1628 19.9132 21.2796 20.1666 20.3346C20.7779 17.9612 20.1552 15.4422 18.5057 13.6165C18.143 13.2231 17.7335 12.8657 17.4332 12.4138C16.739 11.3829 16.739 10.0479 16.9126 8.82455C17.0861 7.60121 17.4471 6.38474 17.3725 5.14937C17.2727 3.6435 16.5531 2.24412 15.3819 1.27832C14.2417 0.34879 12.7092 0.0206181 11.2289 0H11.1369C9.65652 0 8.12062 0.314426 6.97173 1.23021C5.78632 2.18461 5.04903 3.57925 4.93254 5.08752C4.84403 6.32289 5.17898 7.54279 5.35079 8.76785C5.5226 9.99291 5.50178 11.3314 4.79544 12.352C4.49173 12.7918 4.07868 13.144 3.71076 13.5341C2.04097 15.3421 1.39025 17.8546 1.97528 20.235C2.21825 21.1817 2.65212 22.0717 2.93326 23.0081C3.21441 23.9445 3.32895 24.984 2.93326 25.8809C2.65212 26.5235 2.14015 27.0321 1.69587 27.5767C0.0506287 29.5921 -0.659184 32.6144 0.765647 34.7931C1.33489 35.6522 2.1818 36.3137 3.06169 36.8738C4.42098 37.7682 5.93091 38.4147 7.52014 38.7827C8.21434 38.9339 8.93977 39.0696 9.6409 38.8944C10.1077 38.7775 10.4653 38.8462 10.9616 38.8462C11.458 38.8462 11.8155 38.7878 12.2806 38.9098C12.9748 39.0919 13.7037 38.9648 14.4013 38.8222C15.9951 38.4722 17.513 37.8438 18.8841 36.9666C19.7692 36.415 20.6196 35.7638 21.2027 34.9048C22.6535 32.745 21.9767 29.7159 20.3575 27.6884Z"
         fill="#67CE9A" />
      <path
         class="animation-2"
         d="M19 25.8436L12.0922 33.0583L11.8469 18.8849L17.0273 12.1634L11.8241 17.5914L11.6752 8.9792C12.1272 8.39561 15.4173 4.12789 15.4173 4.12789L11.6594 8.05262L11.5543 2L11.4299 9.76415L7.83497 5.92644L11.4212 10.6771L11.2793 19.4292L6.1321 13.9465L11.246 20.738L11.0165 35.094L4 27.5978L10.9937 36.8823L10.9604 39H12.1868L12.1219 34.7647L19 25.8436Z"
         fill="#4AA594" />
      <rect class="animation-2" x="11" y="39" width="1" height="2" fill="#4AA594" />
      <path class="animation-2" d="M6 41H17L14.9401 50H8.08972L6 41Z" fill="#2E4289" />
      <rect class="animation-2" x="6" y="41" width="11" height="1" fill="#4AA594" />
      <path
         class="animation-2"
         d="M258.067 32.3874C258.68 33.4886 260 32.718 260 32.718C260 32.718 259.924 32.3549 259.332 32.0518C258.889 31.8257 258.253 32.0124 258.028 32.0912L257.3 32.0723H257.288C257.126 32.0723 256.965 32.0929 256.805 32.1083C258.884 31.3924 257.905 29 257.905 29C257.905 29 257.251 29.0257 256.56 29.9248C256.005 30.6441 256.223 31.8668 256.288 32.1682C255.471 32.2841 254.668 32.4815 253.892 32.7574C253.999 32.6573 254.1 32.5516 254.195 32.4405C254.987 31.5158 254.638 29.7621 254.638 29.7621C251.799 30.1166 252.365 32.718 252.528 33.3139C251.632 33.7392 250.773 34.237 249.962 34.8022C250.223 34.4392 250.413 34.0329 250.523 33.6034C250.875 32.3018 249.679 30.6817 249.679 30.6817C246.897 32.3857 248.899 34.8518 249.291 35.2919C248.792 35.667 248.333 36.0455 247.922 36.4085C247.468 36.8076 247.043 37.2066 246.674 37.5885C246.869 37.0232 246.918 36.4196 246.816 35.8314C246.618 34.3706 244.707 33.2266 244.707 33.2266C242.681 36.0232 245.586 37.6793 246.259 38.0218C245.523 38.7912 244.84 39.6076 244.215 40.4656L244.466 40.6369C244.89 40.0492 245.345 39.4833 245.828 38.9414C246.902 42.2569 250.6 40.5718 250.6 40.5718C250.6 40.5718 250.509 39.6675 249.138 38.7804C248.259 38.2084 246.938 38.3574 246.229 38.4962C246.831 37.8439 247.465 37.2214 248.131 36.6312C248.373 36.4188 248.63 36.2013 248.903 35.9821C249.853 39.111 253.297 37.5457 253.297 37.5457C253.297 37.5457 253.214 36.7185 251.959 35.9068C251.172 35.393 250.006 35.5146 249.349 35.6396C250.193 34.9882 251.092 34.4089 252.038 33.9082C252.625 36.8658 255.856 35.6739 255.856 35.6739C255.856 35.6739 255.838 34.9306 254.776 34.1325C254.084 33.6068 252.98 33.6582 252.4 33.7318C253.495 33.1808 254.664 32.7841 255.873 32.5536C255.822 35.2371 258.803 34.7182 258.803 34.7182C258.803 34.7182 258.909 34.0897 258.146 33.2489C257.552 32.593 256.335 32.5382 255.977 32.5364C256.415 32.4595 256.858 32.4103 257.302 32.3892L258.067 32.3874Z"
         fill="#459A8A" />
      <path
         class="animation-2"
         d="M234.353 49C234.353 49 228.135 35.2614 232.635 22.496C237.135 9.73071 248 6 248 6C248 6 241.552 13.3093 245.294 24.7089C248.827 35.4896 242.083 49 242.083 49H234.353Z"
         fill="#67CE9A" />
      <path class="animation-2" d="M236.154 49C236.154 49 234.657 21.2883 241 14C235.227 23.1875 237.631 49 237.631 49H236.154Z"
         fill="#4AA594" />
      <path
         class="animation-2"
         d="M246.541 49H240C240.261 47.8654 241.202 44.4344 243.549 41.847C246.402 38.7034 250 39.008 250 39.008C250 39.008 248.044 41.1248 247.741 44.9255C247.6 46.3449 247.193 47.7263 246.541 49Z"
         fill="#66E1A3" />
      <path          class="animation-2" d="M242.533 49H242C243.012 46.9049 245.58 42.0049 248 41C245.641 42.4331 243.47 46.8725 242.533 49Z"
         fill="#459A8A" />
      <rect  class="animate-3"
         x="248" y="50" width="14" height="1" transform="rotate(180 248 50) translateX(0px)" fill="#15154F" />
      <rect class="animation-2" x="93" y="4" width="64" height="46" rx="4" fill="#A40032" class="animate-box" />
      <rect class="animation-1" x="103" y="4" width="64" height="46" rx="4" fill="#E40046" />
      <!--<path class="animation-1" fill-rule="evenodd" clip-rule="evenodd"-->
      <!--   d="M128.875 36.4609L124.684 29.0545C124.461 28.6604 124.42 28.37 124.603 27.9342L128.529 18.2459C128.61 18.0386 128.936 17.9969 129.058 18.2044L134.143 27.1668C134.367 27.5608 134.611 27.7061 135.059 27.7061H145.169C145.392 27.7061 145.555 28.0172 145.413 28.2039L139.107 36.5023C138.822 36.8757 138.578 37.0004 138.13 37.0004H129.79C129.343 37.0004 129.099 36.8551 128.875 36.4609ZM139.371 25.7558L137.459 22.3534H133.614C133.167 22.3534 132.923 22.2081 132.699 21.8141L130.278 17.5405C130.156 17.3121 130.339 17.001 130.583 17.001H139.9C140.348 17.001 140.592 17.1462 140.815 17.5405L145.474 25.7558C145.596 25.9839 145.413 26.2953 145.168 26.2953H140.286C139.839 26.2953 139.595 26.15 139.371 25.7558Z"-->
      <!--   fill="white" />-->

   </svg>
  
    <!--   -------------------------------- TY ILLUSTRATION ENDS ---------------------------- -->

  <!--   -------------------------------- TY TEXT BLOCK BEGINS ---------------------------- -->
   <div id="message-block">
      <span class="heading-text">Order Confirmed</span>
      <br>
      <button class="button" style="vertical-align:middle"><span><a href="index" style="text-decoration:none;color:white;">Continue Shopping </a></span></button>
   </div>
 <!--   -------------------------------- TY TEXT BLOCK ENDS ---------------------------- -->

</div>
    </body>
</html>